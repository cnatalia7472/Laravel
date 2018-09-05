{{-- Copyright (C) 2018 Panobit, Inc - All rights reserved.
Unauthorized duplication, transmission, or modification by any means is strictly prohibited.
Proprietary and confidential. This file belongs to the Revohub SaaS (Software-as-a-Service)
Panobit, Inc | legal@panobit.com | www.panobit.com --}}
@extends('layouts.dashboard')
@section('page-title', ' - Dashboard')
@section('content')
    <!-- Main content -->
    <div class="content-wrapper">

                <!-- Page header -->
                <div class="page-header page-header-light">
                    <div class="page-header-content header-elements-md-inline">
                        <div class="page-title d-flex">
                            <h5>
                                <i class="icon-home mr-2"></i>
                                <span class="font-weight-semibold">{{ $tenant->company_name }}</span> - Dashboard
                            </h5>
                        </div>

                        <div class="header-elements d-none">
                            <div class="d-flex justify-content-center">
                                <a href="#" class="btn btn-link btn-float text-default"><i class="icon-bars-alt text-primary"></i><span>Statistics</span></a>
                                <a href="#" class="btn btn-link btn-float text-default"><i class="icon-calculator text-primary"></i> <span>Invoices</span></a>
                                <a href="#" class="btn btn-link btn-float text-default"><i class="icon-calendar5 text-primary"></i> <span>Schedule</span></a>
                            </div>
                        </div>
                    </div>

                    <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                        <div class="d-flex">
                            <div class="breadcrumb">
                                <a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                                <span class="breadcrumb-item active">Dashboard</span>
                            </div>

                            <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                        </div>

                        <div class="header-elements d-none">
                            <div class="breadcrumb justify-content-center">
                                <a href="#" class="breadcrumb-elements-item">
                                    <i class="icon-comment-discussion mr-2"></i>
                                    Support
                                </a>

                                <div class="breadcrumb-elements-item dropdown p-0">
                                    <a href="#" class="breadcrumb-elements-item dropdown-toggle" data-toggle="dropdown">
                                        <i class="icon-gear mr-2"></i>
                                        Settings
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="#" class="dropdown-item"><i class="icon-user-lock"></i> Account security</a>
                                        <a href="#" class="dropdown-item"><i class="icon-statistics"></i> Analytics</a>
                                        <a href="#" class="dropdown-item"><i class="icon-accessibility"></i> Accessibility</a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item"><i class="icon-gear"></i> All settings</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /page header -->


                <!-- Content area -->
                <div class="content">



                    <!-- Traffic sources -->
                    <div class="card">
                        <div class="card-header header-elements-inline">
                            <h6 class="card-title">{{ config('app.name') }} Statistics</h6>
                        </div>

                        <div class="card-body py-0">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="d-flex align-items-center justify-content-center mb-2">
                                        <a href="#" class="btn bg-transparent border-teal text-teal rounded-round border-2 btn-icon mr-3">
                                            <i class="icon-office"></i>
                                        </a>
                                        <div>
                                            <div class="font-weight-semibold">Organizations</div>
                                            <h5 class="font-weight-semibold mb-0">{{ $organizationcount }}</h5>
                                        </div>
                                    </div>
                                    <div class="w-75 mx-auto mb-3" id="new-visitors"></div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="d-flex align-items-center justify-content-center mb-2">
                                        <a href="#" class="btn bg-transparent border-teal text-teal rounded-round border-2 btn-icon mr-3">
                                            <i class="icon-user"></i>
                                        </a>
                                        <div>
                                            <div class="font-weight-semibold">Users</div>
                                            <h5 class="font-weight-semibold mb-0">{{ $usercount }}</h5>
                                        </div>
                                    </div>
                                    <div class="w-75 mx-auto mb-3" id="new-visitors"></div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="d-flex align-items-center justify-content-center mb-2">
                                        <a href="#" class="btn bg-transparent border-warning-400 text-warning-400 rounded-round border-2 btn-icon mr-3">
                                            <i class="icon-watch2"></i>
                                        </a>
                                        <div>
                                            <div class="font-weight-semibold">New sessions</div>
                                            <span class="text-muted">08:20 avg</span>
                                        </div>
                                    </div>
                                    <div class="w-75 mx-auto mb-3" id="new-sessions"></div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="d-flex align-items-center justify-content-center mb-2">
                                        <a href="#" class="btn bg-transparent border-indigo-400 text-indigo-400 rounded-round border-2 btn-icon mr-3">
                                            <i class="icon-people"></i>
                                        </a>
                                        <div>
                                            <div class="font-weight-semibold">Total online</div>
                                            <span class="text-muted"><span class="badge badge-mark border-success mr-2"></span> 5,378 avg</span>
                                        </div>
                                    </div>
                                    <div class="w-75 mx-auto mb-3" id="total-online"></div>
                                </div>
                            </div>
                        </div>

                        <div class="chart position-relative" id="traffic-sources"></div>
                    </div>
                    <!-- /traffic sources -->

                </div>
                <!-- /content area -->
    </div>
    @endsection