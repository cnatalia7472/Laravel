{{-- Copyright (C) 2018 Panobit, Inc - All rights reserved.
Unauthorized duplication, transmission, or modification by any means is strictly prohibited.
Proprietary and confidential. This file belongs to the Revohub SaaS (Software-as-a-Service)
Panobit, Inc | legal@panobit.com | www.panobit.com --}}
@extends('layouts.dashboard')
@section('page-title', ' - System License')
@section('content')
    <!-- Page header -->
    <div class="page-header page-header-light">


        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="{{ route('dashboard') }}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                    <a href="user_pages_profile_tabbed.html" class="breadcrumb-item">System Information</a>
                    <span class="breadcrumb-item active">License</span>
                </div>

                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>

            <div class="header-elements d-none">
                <div class="breadcrumb justify-content-center">
                </div>
            </div>
        </div>
    </div>
    <!-- /page header -->


    <!-- Content area -->
    <div class="content">

        <!-- Inner container -->
        <div class="d-md-flex align-items-md-start">

            <!-- Left sidebar component -->
            <div class="sidebar sidebar-light bg-transparent sidebar-component sidebar-component-left wmin-300 border-0 shadow-0 sidebar-expand-md">

                <!-- Sidebar content -->
                <div class="sidebar-content">

                    <!-- Navigation -->
                    <div class="card">
                        <div class="card-body bg-indigo-400 text-center card-img-top" style="background-image: url(http://demo.interface.club/limitless/assets/images/bg.png); background-size: contain;">
                            <div class="card-img-actions d-inline-block mb-3">
                                <div class="card-img-actions-overlay rounded-circle">
                                    <a href="#" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round">
                                        <i class="icon-plus3"></i>
                                    </a>
                                    <a href="user_pages_profile.html" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round ml-2">
                                        <i class="icon-link"></i>
                                    </a>
                                </div>
                            </div>

                            <h6 class="font-weight-semibold mb-0">System License</h6>
                        </div>

                        <div class="card-body p-0">
                            <ul class="nav nav-sidebar mb-2">
                                <li class="nav-item-header">License Controls</li>
                                <li class="nav-item">
                                    <a href="" class="nav-link active" data-toggle="tab">
                                        <i class="icon-coin-dollar"></i>
                                        Order Additional Licenses
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="" class="nav-link" data-toggle="tab">
                                        <i class="icon-help"></i>
                                        Order Premium Support
                                        <span class="badge bg-green badge-pill ml-auto">24/7/365</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="" class="nav-link" data-toggle="tab">
                                        <i class="icon-certificate"></i>
                                        Request License Modification
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /navigation -->

                </div>
                <!-- /sidebar content -->

            </div>
            <!-- /left sidebar component -->

            <!-- Right content -->
            <div class="tab-content w-100 overflow-auto">
                <div class="tab-pane fade active show" id="profile">

                    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                        @if(Session::has('alert-' . $msg))
                            <div class="alert alert-{{ $msg }} alert-styled-left alert-dismissible col-md-6">
                                {{ Session::get('alert-' . $msg) }}</a>
                            </div>
                        @endif
                    @endforeach

                    <!-- Profile info -->
                    <div class="card col-md-6">
                        <div class="card-header header-elements-inline">
                            <h5 class="card-title">License Registration</h5>
                            <div class="header-elements">
                                <div class="list-icons">
                                    <a class="list-icons-item" data-action="collapse"></a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="#">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <label>Licensed To</label>
                                            <input type="text" readonly value="{{ $tenant->licensed_to }}" class="form-control">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Website ID</label>
                                            <input type="text" readonly value="{{ $tenant->website_id }}" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>First Name</label>
                                            <input type="text" readonly value="{{ $tenant->first_name }}" class="form-control">
                                        </div>
                                        <div class="col-md-6">
                                            <label>Last Name</label>
                                            <input type="text" readonly value="{{ $tenant->last_name }}" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>City</label>
                                            <input type="text" readonly value="{{ $tenant->city }}" class="form-control">
                                        </div>
                                        <div class="col-md-4">
                                            <label>State/Province</label>
                                            <input type="text" readonly value="{{ $tenant->state_province_region }}" class="form-control">
                                        </div>
                                        <div class="col-md-4">
                                            <label>ZIP code</label>
                                            <input type="text" readonly value="{{ $tenant->zip_postal_code }}" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>E-mail</label>
                                            <input type="text" readonly value="{{ $tenant->email }}" class="form-control">
                                        </div>
                                        <div class="col-md-6">
                                            <label>Country</label>
                                            <input type="text" readonly value="{{ $tenant->country }}" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                    <!-- /profile info -->

                    <!-- License Details -->
                    <div class="card col-md-6">
                        <div class="card-header header-elements-inline">
                            <h5 class="card-title">License Details</h5><span class="badge bg-{{ $tenant->license_pill_color }} badge ml-auto">{{ $tenant->license_pill_text }}</span>
                            <div class="header-elements">
                                <div class="list-icons">
                                    <a class="list-icons-item" data-action="collapse"></a>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <form action="#">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>License Type</label>
                                            <input type="text" readonly value="{{ $tenant->license_type }}" class="form-control">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Issued On</label>
                                            <input type="text" readonly value="{{ $tenant->license_start }}" class="form-control">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Expires On</label>
                                            <input type="text" readonly value="{{ $tenant->license_end }}" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label>Disk Space Limit</label>
                                            <input type="text" readonly value="{{ $tenant->limit_diskspace }}" class="form-control">
                                        </div>
                                        <div class="col-md-3">
                                            <label>Database Size Limit</label>
                                            <input type="text" readonly value="{{ $tenant->limit_database_size }}" class="form-control">
                                        </div>
                                        <div class="col-md-2">
                                            <label>User Limit</label>
                                            <input type="text" readonly value="{{ $tenant->licensed_users }}" class="form-control">
                                        </div>
                                        <div class="col-md-2">
                                            <label>Organization Limit</label>
                                            <input type="text" readonly value="{{ $tenant->licensed_organizations }}" class="form-control">
                                        </div>
                                        <div class="col-md-2">
                                            <label>Custom Domain</label>
                                            <input type="text" readonly value="{{ $tenant->custom_domain }}" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Hostname</label>
                                            <input type="text" readonly value="" class="form-control">
                                        </div>
                                        <div class="col-md-6">
                                            <label>Custom Hostname</label>
                                            <input type="text" readonly value="" class="form-control">
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                    <!-- /profile info -->

                </div>




            </div>
            <!-- /right content -->

        </div>
        <!-- /inner container -->

    </div>
    <!-- /content area -->
@endsection