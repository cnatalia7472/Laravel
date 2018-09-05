<?php

namespace App\Http\Controllers;

use App\Models\Organization;
use App\Models\Tenant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class OrganizationController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $organizations = Organization::all();
        return view('tenant.organizations.index', compact('organizations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $licensed_orgs = Tenant::where('website_id', config('database.connections.tenant.database'))->first()->licensed_organizations;

        // If the quantity of licensed organizations is negative 1 (-1), the amount is unlimited.
        if ($licensed_orgs == -1)
        {
            return view('tenant.organizations.create');
        }
        if(Organization::count() >= $licensed_orgs)
        {
            Session::flash('alert-danger', 'You used the maximum amount of organizations your license allows. Please review your license details for more information.');
            return \Redirect::back();
        }
        else
        {
            return view('tenant.organizations.create');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $organization = Organization::create([
            'company_name' => $request['company_name'],
            'address_line1' => $request['address_line1'],
            'address_line2' => $request['address_line2'],
            'city' => $request['city'],
            'state_province_region' => $request['state_province_region'],
            'zip_postal_code' => $request['zip_postal_code'],
            'country' => $request['country'],
            'phone_number' => $request['phone_number'],
            'fax_number' => $request['fax_number'],
            'website' => $request['website'],
            'email' => $request['email'],
            'owner_id' => 0,
            'prefix' => strtoupper($request['prefix']),
        ]);
        Session::flash('message', 'Successfully created Organization');
        return Redirect::to('organizations');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $organization = Organization::findOrFail($id);
        $xdata = array('organization' => $organization);
        return view('tenant.organizations.show', $xdata);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('tenant.organizations.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $organization = Organization::find($id);

        $organization->delete();
        Session::flash('message', 'Successfully deleted Organization');
        return Redirect::to('organizations');
    }
}
