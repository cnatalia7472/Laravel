{{-- Copyright (C) 2018 Panobit, Inc - All rights reserved.
Unauthorized duplication, transmission, or modification by any means is strictly prohibited.
Proprietary and confidential. This file belongs to the Revohub SaaS (Software-as-a-Service)
Panobit, Inc | legal@panobit.com | www.panobit.com --}}
@extends('layouts.dashboard')
@section('page-title', ' - System Status')
@section('content')
    <!-- Page header -->
    <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">System Status</span></h4>
                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>

            <div class="header-elements d-none">
            </div>
        </div>

        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="{{ route('dashboard') }}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                    <a href="#" class="breadcrumb-item">System Information</a>
                    <span class="breadcrumb-item active">System Status</span>
                </div>

                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>

            <div class="header-elements d-none">
            </div>
        </div>
    </div>
    <!-- /page header -->
    <!-- Content area -->
    <div class="content">
            <div class="row">
                <div class="col-md-2">
                    <div class="card">
                        <div class="card-header bg-light header-elements-inline">
                            <h6 class="card-title">Services Overview</h6>
                        </div>

                        <div class="card-body">
                            Card with light header color - add <code>.bg-light</code> class to card header container
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="card">
                        <div class="card-header bg-light header-elements-inline">
                            <h6 class="card-title">Scheduled Maintenance / Events</h6>
                        </div>

                        <div class="card-body">
                            There are no scheduled maintenance events.
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="card">
                        <div class="card-header bg-light header-elements-inline">
                            <h6 class="card-title">Previous Events</h6>
                        </div>

                        <div class="card-body">
                            Card with light header color - add <code>.bg-light</code> class to card header container
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-header bg-light header-elements-inline">
                            <h6 class="card-title">Light header</h6>
                        </div>

                        <div class="card-body">
                            Card with light header color - add <code>.bg-light</code> class to card header container
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-header bg-light header-elements-inline">
                            <h6 class="card-title">Light header</h6>
                        </div>

                        <div class="card-body">
                            Card with light header color - add <code>.bg-light</code> class to card header container
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-header bg-light header-elements-inline">
                            <h6 class="card-title">Light header</h6>
                        </div>

                        <div class="card-body">
                            Card with light header color - add <code>.bg-light</code> class to card header container
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-header bg-light header-elements-inline">
                            <h6 class="card-title">Light header</h6>
                        </div>

                        <div class="card-body">
                            Card with light header color - add <code>.bg-light</code> class to card header container
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <!-- /content area -->
@endsection