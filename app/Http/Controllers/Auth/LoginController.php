<?php
/**
 * Copyright (C) 2018 Panobit, Inc - All rights reserved.
 * Unauthorized duplication, transmission, or modification by any means is strictly prohibited.
 * Proprietary and confidential. This file belongs to the Revohub SaaS (Software-as-a-Service)
 *
 * Panobit, Inc | legal@panobit.com | www.panobit.com
 */
namespace App\Http\Controllers\Auth;

use Cookie;
use Carbon\Carbon;
use App\Models\Tenant;
use Hyn\Tenancy\Middleware\HostnameActions;
use Hyn\Tenancy\Repositories\HostnameRepository;
use Hyn\Tenancy\Models\Hostname;
use Illuminate\Http\Request;
use Hyn\Tenancy\Environment;
use Hyn\Tenancy\Database\Connection;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Hyn\Tenancy\Traits\UsesTenantConnection;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers, UsesTenantConnection;

    function authenticated(Request $request, $user)
    {
        $user->last_login = Carbon::now();
        $user->last_login_ip = $request->getClientIp();
        $user->last_login_host = $_SERVER['REMOTE_ADDR'];
        $user->save();


        // Set language
        //Cookie::put('language', $user->language);

        Cookie::forever('locale', $user->language);

    }


    public function showLoginForm()
    {
        $host = request()->getHttpHost();
        if($host === config('app.hostname'))
        {
            return redirect()->route('lookup');
        }
        else
        {
            $tenant = Tenant::where('website_id', config('database.connections.tenant.database'))->first();
            return view('auth.login')->with('tenant', $tenant);
        }
    }

    public function showLookupForm()
    {
        $host = request()->getHttpHost();
        if($host === config('app.hostname'))
        {
            return view('auth.lookup');
        }
        else
        {
            return redirect()->route('login');
        }
    }

    public function LookupSubdomain(Request $request)
    {
        // Check to see if the account/subdomain exists
        $modifiedhost = $request['account_name'] . '.' . config('app.hostname');
        $validhostname = DB::table('hostnames')->where('fqdn', $modifiedhost)->first();

        // TODO: Need to get this working. Set the verified host name as the active connection, then try logging in. If it doesnt work, then redirect to the subdomain with login page and error message. Otherwise login and and set subdomain url.
        if ($validhostname)
        {
            $hostname = new Hostname;
            $hostname->fqdn = $validhostname;
            $tenancy = app(Environment::class);
            $tenancy->hostname($hostname);

            $connection = app(Connection::class);
            $tenantConnection = $connection->get();
            dd($tenantConnection);

            // Try logging into the account
            $credentials = $request->only('email', 'password');

            if (Auth::attempt($credentials)) {
                // Authentication passed...
                return redirect()->intended('dashboard');
            }

            // If credentials are wrong reset form and send notification.
        }
        else
        {
            $nogood = "no good" . $validhostname . $modifiedhost;
            dd($nogood);
        }







    }

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
