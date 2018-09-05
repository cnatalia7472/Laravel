<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use App\Models\Tenant;
use Illuminate\Http\Request;
use DateTime;

class LicenseController extends Controller
{
    public function showLicense()
    {
        $tenant = Tenant::where('website_id', config('database.connections.tenant.database'))->first();


        // TODO: Turn this into an foreach to change the array field to unlimited if a -1 is presented.

        if ($tenant->limit_diskspace == -1) {
            $tenant->limit_diskspace = "Unlimited";
        } else {
            $tenant->limit_diskspace = formatKB($tenant->limit_diskspace, 2, 'short');
        }


        if ($tenant->limit_database_size == -1) {
            $tenant->limit_database_size = "Unlimited";
        } else {
            $tenant->limit_database_size = formatKB($tenant->limit_database_size, 2, 'short');
        }

        if ($tenant->licensed_organizations == -1) {
            $tenant->licensed_organizations = "Unlimited";
        }

        if ($tenant->licensed_users == -1)
        {
            $tenant->licensed_users = "Unlimited";
        }

        // Set licensing views.
        $exp_date = $tenant->license_end;
        $todays_date = date("Y-m-d");

        $today = strtotime($todays_date);
        $expiration_date = strtotime($exp_date);

        if ($expiration_date >= $today) {
            $tenant->license_pill_color = 'green';
            $tenant->license_pill_text = 'Active until ' . $exp_date;
        } else {
            Session::flash('alert-danger', 'Your license expired on ' . $exp_date . '. Please contact support to renew your license.');
            $tenant->license_pill_color = 'danger';
            $tenant->license_pill_text = 'Expired';
        }

        return view('tenant.license.index', array('tenant' => $tenant));
    }
}
