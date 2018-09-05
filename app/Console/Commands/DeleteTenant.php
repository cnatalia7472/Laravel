<?php
/**
 * Copyright (C) 2018 Panobit, Inc - All rights reserved.
 * Unauthorized duplication, transmission, or modification by any means is strictly prohibited.
 * Proprietary and confidential. This file belongs to the Revohub SaaS (Software-as-a-Service)
 *
 * Panobit, Inc | legal@panobit.com | www.panobit.com
 */
namespace App\Console\Commands;

use App\Models\Tenant;
use Illuminate\Console\Command;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class DeleteTenant extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'tenant:delete';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete a tenant from the system. This will delete the database, and all of the data associated with this tenant.';

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

        // Ask for the tenant ID.
        $this->info('The command you have entered is used to delete/completely remove tenants from the system.');
        if ($this->confirm('This process is irreversible. Do you wish to continue?')) {
            $tenant_id = $this->ask('Specify the tenant ID you wish to remove from the system');

            // Use the tenantExists function to see if the tenant actually exists.
            if (!$this->tenantExists($tenant_id)) {
                $this->info('The tenant ID you provided could not be found. Now exiting.');
                exit;
            }
            else
            {
                $tenant = Tenant::where('id', $tenant_id);



            }
        }
    }

    // Check to see if the tenant exists.
    private function tenantExists($tenant_id): bool
    {
        return Tenant::where('id', $tenant_id)->exists();
    }

    private function getTenant($tenant_id)
    {
        $count = Tenant::where('id', $tenant_id);
        $subdomainCount = Hostname::where('fqdn',  $fqdn)->count();

        if($subdomainCount > 0)
        {
            $url = 'http://' . $fqdn . '/login';
            return redirect($url);
        }

    }
}
