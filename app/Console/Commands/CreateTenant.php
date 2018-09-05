<?php
/**
 * Copyright (C) 2018 Panobit, Inc - All rights reserved.
 * Unauthorized duplication, transmission, or modification by any means is strictly prohibited.
 * Proprietary and confidential. This file belongs to the Revohub SaaS (Software-as-a-Service)
 *
 * Panobit, Inc | legal@panobit.com | www.panobit.com
 */

namespace App\Console\Commands;
use Hyn\Tenancy\Environment;
use Hyn\Tenancy\Contracts\Repositories\WebsiteRepository;
use Hyn\Tenancy\Models\Hostname;
use Hyn\Tenancy\Contracts\Repositories\HostnameRepository;
use App\Models\Tenant;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Console\Command;
use App\Notifications\TenantCreated;

class CreateTenant extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'tenant:create {first_name?} {last_name?} {company_name?} {email?} {password?} {fqdn?} {tenantstorage?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Creates a tenant with the provided fully qualified domain name. e.g. php artisan tenant:create demo.revohub.com';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        // Command arguments.
        $first_name = $this->argument('first_name');
        $last_name = $this->argument('last_name');
        $company_name = $this->argument('company_name');
        $email = $this->argument('email');
        $password = $this->argument('password');
        $fqdn = $this->argument('fqdn');
        $tenantstorage = $this->argument('tenantstorage');

        // If command arguments are not provided, the interactive prompt will ask for the information.
        if (empty($first_name) || empty($last_name) || empty($company_name) || empty($email) || empty($fqdn))
        {
            $this->info('Please answer the following questions to create a new tenant.');
            $first_name = $this->ask('First Name');
            $last_name = $this->ask('Last Name');
            $company_name = $this->ask('Company Name');
            $email = $this->ask('E-Mail Address (Primary Login)');
            $first_password = $this->secret('To specify a password for this tenant, please enter it now. Otherwise, a random password will be generated.');
            if (!empty($first_password))
            {
                $confirm_password = $this->secret('Confirm Password');
                if($first_password != $confirm_password)
                {
                    $this->info('The passwords you entered did not match. Now exiting.');
                    exit();
                }
                $password = $confirm_password;
            }
            else
            {
                // Generate the random password.
                $password = str_random();
            }
            $fqdn = $this->ask('What is the FQDN (fully qualified domain name) that will be used for this tenant?');
            $tenantstorage = $this->choice('Where do you want the tenant storage located?', ['tenant-primary'], '0');
        }

        // If no storage location is provided, it will use the system default.
        if(empty($tenantstorage))
        {
            $tenantstorage = 'tenant-primary';
        }

        // Create new website record.
        $website = new \Hyn\Tenancy\Models\Website;
        $website->managed_by_database_connection = 'system';
        $website->tenant_storage = $tenantstorage;
        app(WebsiteRepository::class)->create($website);

        // Create new tenant record.
        $tenant = new Tenant;
        $tenant->company_name = $company_name;
        $tenant->first_name = $first_name;
        $tenant->last_name = $last_name;
        $tenant->email = $email;
        $tenant->website_id = $website->uuid;
        $tenant->save();

        // Add hostname and attach to website record.
        $hostname = new Hostname;
        $hostname->fqdn = $fqdn;
        app(HostnameRepository::class)->attach($hostname, $website);

        // Switch to new tenant.
        $tenancy = app(Environment::class);
        $tenancy->hostname($hostname);
        $tenancy->hostname(); // resolves $hostname as currently active hostname
        $tenancy->tenant($website); // switches the tenant and reconfigures the app
        $tenancy->website(); // resolves $website
        $tenancy->tenant(); // resolves $website
        $tenancy->identifyHostname();

        $admin = User::create(['first_name' => $first_name, 'last_name' => $last_name, 'language' => 'English', 'email' => $email, 'password' => Hash::make($password)]);
        $admin->guard_name = 'web';
        $admin->assignRole('superadmin');

        // Provide confirmation of newly created tenant.
        $this->info("The tenant was successfully created.");
        $this->info("");
        $this->info("The new tenant is accessible via the web at: " . $fqdn);

        // Ask if the operator would like to see the created password.
        if($this->confirm('Would you like to see the credentials generated?')){
            $this->info('================================================================================');
            $this->info('The following credentials were generated for ' . $company_name . ':');
            $this->info('Administrator Username: ' . $email);
            $this->info('Administrator Password: ' . $password);
            $this->info('================================================================================');
        }

        // Ask if a welcome email should be sent to the email address provided.
        if($this->confirm('Would you like a welcome e-mail sent to ' . $email . '?')){
            $tenant->notify(new TenantCreated($hostname));
        }

        // TODO: Log entry of newly created tenant by command line.

    }
    private function tenantExists($fqdn, $email): bool
    {
        return old::where('name', $fqdn)->orWhere('email', $email)->exists();
    }
}
