<?php

namespace App\Http\Controllers\Organization;

use App\Models\Organization;
use App\Models\Organization\Domain;
use Request;
use App\Http\Controllers\Controller;


class DomainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $organization = Organization::findOrFail(Request::segment(2));
        $domains = Organization::findOrFail(Request::segment(2))->domains;
        $xdata = array('organization' => $organization, 'domains' => $domains);
        return view('tenant.organizations.domains.index', $xdata);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $domain = $request['domain_name'];
        $tld = get_tld($domain);
        $new_domain = str_replace($tld, NULL, $domain);


        $request['domain_name'];

        $organization = Organization\Domain::create([
            'domain_name' => $new_domain,
            'domain_tld' => $tld,
            'organization_id' => 1,
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    public function globalview()
    {
        $domains = Domain::all();
        $organization = New Organization;
        $organization->company_name = "Global View";
        $xdata = array('organization' => $organization, 'domains' => $domains);
        return view('tenant.organizations.domains.global', $xdata);
    }

    private function get_tld($url) {
        $url = trim($url);

        if (!preg_match('~^http://~i', $url))
            $url = "http://{$url}";

        $domain = parse_url($url, PHP_URL_HOST);
        $domain = preg_replace('~^www\.~', NULL, strtolower($domain));
        $parts = explode('.', $domain);
        return (count($parts) > 2) ? ".{$parts[1]}.{$parts[2]}" : '.' . end($parts);
    }
}
