<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\Tenant;
use App\Models\User;
use App\Models\Organization;

class DashboardController extends Controller
{

    public function showDashboard()
    {
        // Set the welcome message based on the time of day.
        $Welcome = '';
        /* This sets the $time variable to the current hour in the 24 hour clock format */
        $time = date("H");
        /* If the time is less than 1200 hours, show good morning */
        if ($time < "12") {
            $Welcome = \Lang::get('app.greeting-morning', ['first_name' => Auth::user()->first_name, 'last_name' => Auth::user()->last_name]);
        } else
            /* If the time is grater than or equal to 1200 hours, but less than 1700 hours, so good afternoon */
            if ($time >= "12" && $time < "17") {
                $Welcome = \Lang::get('app.greeting-afternoon', ['first_name' => Auth::user()->first_name, 'last_name' => Auth::user()->last_name]);
            } else
                /* Should the time be between or equal to 1700 and 1900 hours, show good evening */
                if ($time >= "17" && $time < "19") {
                    $Welcome = \Lang::get('app.greeting-evening', ['first_name' => Auth::user()->first_name, 'last_name' => Auth::user()->last_name]);
                } else
                    /* Finally, show good night if the time is greater than or equal to 1900 hours */
                    if ($time >= "19") {
                        $Welcome = \Lang::get('app.greeting-evening', ['first_name' => Auth::user()->first_name, 'last_name' => Auth::user()->last_name]);
                    }

        $organization_count = Organization::count();
        $user_count = User::count();
        $tenant = Tenant::where('website_id', config('database.connections.tenant.database'))->first();

        $data = array('organizationcount' => Organization::count(), 'usercount' => User::count(), 'Welcome' => $Welcome, 'tenant' => $tenant);
        return view('tenant.dashboard', $data);

    }

}
