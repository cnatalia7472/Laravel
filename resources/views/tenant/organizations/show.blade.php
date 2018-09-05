{{-- Copyright (C) 2018 Panobit, Inc - All rights reserved.
Unauthorized duplication, transmission, or modification by any means is strictly prohibited.
Proprietary and confidential. This file belongs to the Revohub SaaS (Software-as-a-Service)
Panobit, Inc | legal@panobit.com | www.panobit.com --}}
@extends('layouts.dashboard')
@section('page-title', ' - Organization (' . $organization->company_name . ')')
@section('content')
    <!-- Page header -->
    <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4><span class="font-weight-semibold">Organization</span> - {{ $organization->company_name }}</h4>
                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
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
                    <a href="{{ route('dashboard') }}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                    <a href="{{ route('organizations.index') }}" class="breadcrumb-item">Organizations</a>
                    <span class="breadcrumb-item active">{{ $organization->company_name }}</span>
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
        <div class="bg-light">
            <ul class="nav nav-tabs nav-tabs-bottom mb-0">
                <li class="nav-item">
                    <a href="#summary" class="nav-link active" data-toggle="tab">
                        <i class="icon-screen-full mr-2"></i>
                        Summary
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#profile" class="nav-link" data-toggle="tab">
                        <i class="icon-stats-bars mr-2"></i>
                        Profile
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#contacts" class="nav-link" data-toggle="tab">
                        <i class="icon-stats-bars mr-2"></i>
                        Contacts
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#services" class="nav-link" data-toggle="tab">
                        <i class="icon-notebook mr-2"></i>
                        Services
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#notes" class="nav-link" data-toggle="tab">
                        <i class="icon-notebook mr-2"></i>
                        Notes
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                        Audit
                    </a>

                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="#email-log" tabindex="-1" class="dropdown-item" data-toggle="tab">
                            <i class="icon-mail-read"></i>
                            E-Mail Log
                        </a>
                        <a href="#system-log" tabindex="-1" class="dropdown-item" data-toggle="tab">
                            <i class="icon-pulse2"></i>
                            System Log
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!-- /page header -->
    <!-- Content area -->
    <div class="content">

        <!-- Inner container -->
        <div class="d-md-flex align-items-md-start">

            <!-- Left sidebar component -->
            <div class="sidebar sidebar-light sidebar-component sidebar-component-left bg-transparent border-0 shadow-0 sidebar-expand-md">

                <!-- Sidebar content -->
                <div class="sidebar-content">

                    <div class="card">
                        <div class="card-header bg-light d-flex justify-content-between">
                            <span class="font-size-sm text-uppercase font-weight-semibold">Overview</span>
                            <span class="font-size-sm text-uppercase text-success font-weight-semibold">ACTIVE</span>
                        </div>



                        <li class="list-group-item">
                            <span class="font-weight-semibold">Organization Name</span>
                            <div class="ml-auto">{{ $organization->company_name }}</div>
                        </li>
                        <li class="list-group-item">
                            <span class="font-weight-semibold">Phone number:</span>
                            <div class="ml-auto">{{ $organization->phone_number }}</div>
                        </li>
                        <li class="list-group-item">
                            <span class="font-weight-semibold">Corporate email:</span>
                            <div class="ml-auto"><a href="#">corporate@domain.com</a></div>
                        </li>
                        <li class="list-group-item">
                            <span class="font-weight-semibold">Address</span>
                            <div class="ml-auto">{{ $organization->address_line1 }}</br>{{ $organization->address_line2 }}</br> {{ $organization->city }}, {{ $organization->state_province_region }}, {{ $organization->zip_postal_code }}</div>
                        </li>
                    </div>


                    <!-- Sub navigation -->
                    <div class="card">
                        <div class="card-header bg-transparent header-elements-inline">
                            <span class="text-uppercase font-size-sm font-weight-semibold">Navigation</span>
                            <div class="header-elements">
                                <div class="list-icons">
                                    <a class="list-icons-item" data-action="collapse"></a>
                                </div>
                            </div>
                        </div>

                        <div class="card-body p-0">
                            <ul class="nav nav-sidebar" data-nav-type="accordion">
                                <li class="nav-item-header">Category title</li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link"><i class="icon-googleplus5"></i> Link</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link"><i class="icon-portfolio"></i> Another link</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="icon-user-plus"></i>
                                        Link with badge
                                        <span class="badge bg-primary badge-pill ml-auto">2</span>
                                    </a>
                                </li>
                                <li class="nav-item-divider"></li>
                                <li class="nav-item nav-item-submenu">
                                    <a href="#" class="nav-link"><i class="icon-cog3"></i> Menu levels</a>
                                    <ul class="nav nav-group-sub">
                                        <li class="nav-item"><a href="#" class="nav-link">Second level</a></li>
                                        <li class="nav-item nav-item-submenu">
                                            <a href="#" class="nav-link">Second level with child</a>
                                            <ul class="nav nav-group-sub">
                                                <li class="nav-item"><a href="#" class="nav-link">Third level</a></li>
                                                <li class="nav-item nav-item-submenu">
                                                    <a href="#" class="nav-link">Third level with child</a>
                                                    <ul class="nav nav-group-sub">
                                                        <li class="nav-item"><a href="#" class="nav-link">Fourth level</a></li>
                                                        <li class="nav-item"><a href="#" class="nav-link">Fourth level</a></li>
                                                    </ul>
                                                </li>
                                                <li class="nav-item"><a href="#" class="nav-link">Third level</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item"><a href="#" class="nav-link">Second level</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /sub navigation -->


                    <!-- Form sample -->
                    <div class="card">
                        <div class="card-header bg-transparent header-elements-inline">
                            <span class="text-uppercase font-size-sm font-weight-semibold">Form example</span>
                            <div class="header-elements">
                                <div class="list-icons">
                                    <a class="list-icons-item" data-action="collapse"></a>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <form action="#">
                                <div class="form-group">
                                    <label>Your name:</label>
                                    <input type="text" class="form-control" placeholder="Username">
                                </div>

                                <div class="form-group">
                                    <label>Your password:</label>
                                    <input type="password" class="form-control" placeholder="Password">
                                </div>

                                <div class="form-group">
                                    <label>Your message:</label>
                                    <textarea rows="3" cols="3" class="form-control" placeholder="Default textarea"></textarea>
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <button type="reset" class="btn btn-danger btn-block">Reset</button>
                                    </div>
                                    <div class="col-6">
                                        <button type="submit" class="btn btn-info btn-block">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /form sample -->

                </div>
                <!-- /sidebar content -->

            </div>
            <!-- /left sidebar component -->


            <!-- Right content -->
            <div class="w-100">

                <div class="card">
                    <div class="card-header bg-white header-elements-inline">
                        <h6 class="card-title">Organization Profile</h6>
                    </div>

                    <div class="bg-light">
                        <ul class="nav nav-tabs nav-tabs-bottom mb-0">
                            <li class="nav-item">
                                <a href="#summary" class="nav-link active" data-toggle="tab">
                                    <i class="icon-screen-full mr-2"></i>
                                    Summary
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#profile" class="nav-link" data-toggle="tab">
                                    <i class="icon-stats-bars mr-2"></i>
                                    Profile
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#contacts" class="nav-link" data-toggle="tab">
                                    <i class="icon-stats-bars mr-2"></i>
                                    Contacts
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#services" class="nav-link" data-toggle="tab">
                                    <i class="icon-notebook mr-2"></i>
                                    Services
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#notes" class="nav-link" data-toggle="tab">
                                    <i class="icon-notebook mr-2"></i>
                                    Notes
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                                    Audit
                                </a>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#email-log" tabindex="-1" class="dropdown-item" data-toggle="tab">
                                        <i class="icon-mail-read"></i>
                                        E-Mail Log
                                    </a>
                                    <a href="#system-log" tabindex="-1" class="dropdown-item" data-toggle="tab">
                                        <i class="icon-pulse2"></i>
                                        System Log
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>

                    {{-- TODO: Setup columns and rows --}}

                    <div class="card-body tab-content">
                        <div class="tab-pane fade show active" id="summary">
                            <div class="row">
                                <div class="col">
                                    <div class="card">
                                        <div class="card-header bg-light d-flex justify-content-between">
                                            <span class="font-size-sm text-uppercase font-weight-semibold">Overview</span>
                                            <span class="font-size-sm text-uppercase text-success font-weight-semibold">ACTIVE</span>
                                        </div>



                                        <li class="list-group-item">
                                            <span class="font-weight-semibold">Organization Name</span>
                                            <div class="ml-auto">{{ $organization->company_name }}</div>
                                        </li>
                                        <li class="list-group-item">
                                            <span class="font-weight-semibold">Phone number:</span>
                                            <div class="ml-auto">{{ $organization->phone_number }}</div>
                                        </li>
                                        <li class="list-group-item">
                                            <span class="font-weight-semibold">Corporate email:</span>
                                            <div class="ml-auto"><a href="#">corporate@domain.com</a></div>
                                        </li>
                                        <li class="list-group-item">
                                            <span class="font-weight-semibold">Address</span>
                                            <div class="ml-auto">{{ $organization->address_line1 }}</br>{{ $organization->address_line2 }}</br> {{ $organization->city }}, {{ $organization->state_province_region }}, {{ $organization->zip_postal_code }}</div>
                                        </li>
                                    </div>
                                </div>
                                <div class="col">

                                </div>
                                <div class="col">

                                </div>
                                <div class="col">

                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="card">
                                        <div class="card-header bg-light d-flex justify-content-between">
                                            <span class="font-size-sm text-uppercase font-weight-semibold">Organization Details</span>
                                            <span class="font-size-sm text-uppercase text-success font-weight-semibold"></span>
                                        </div>
                                        <li class="list-group-item">
                                            Organization Type:
                                            <span class="badge bg-pink-400 ml-auto">Managed Client</span>
                                        </li>
                                        <li class="list-group-item">
                                            Status:
                                            <span class="badge bg-green ml-auto">Active</span>
                                        </li>
                                        <li class="list-group-item">
                                            Date Acquired:
                                            <div class="ml-auto">October 23rd, 2016</div>
                                        </li>
                                        <div class="card-footer d-flex justify-content-between">
                                            <span class="text-muted">Issued 26.12.2017</span>

                                            <ul class="list-inline mb-0">
                                                <li class="list-inline-item"><a href="#">Edit</a></li>
                                                <li class="list-inline-item"><a href="#">Delete</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">

                                </div>
                                <div class="col">

                                </div>
                                <div class="col">

                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="card">
                                        <div class="card-header bg-light d-flex justify-content-between">
                                            <span class="font-size-sm text-uppercase font-weight-semibold">Primary Contacts</span>
                                            <span class="font-size-sm text-uppercase text-success font-weight-semibold"></span>
                                        </div>
                                        <li class="list-group-item">
                                            Decision Maker
                                            <div class="ml-auto">David John</div>
                                        </li>
                                        <li class="list-group-item">
                                            Accounts Payable
                                            <div class="ml-auto">David John</div>
                                        </li>
                                        <div class="card-footer d-flex justify-content-between">
                                            <span class="text-muted"></span>

                                            <ul class="list-inline mb-0">
                                                <li class="list-inline-item"><a href="#">Edit</a></li>
                                                <li class="list-inline-item"><a href="#">Delete</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">

                                </div>
                                <div class="col">

                                </div>
                                <div class="col">

                                </div>

                            </div>
                        </div>

                        <div class="tab-pane fade" id="profile">
                            Profile
                        </div>

                        <div class="tab-pane fade" id="contacts">
                            Contacts
                        </div>

                        <div class="tab-pane fade" id="services">
                            Services
                        </div>

                        <div class="tab-pane fade" id="notes">
                            Notes
                        </div>

                        <div class="tab-pane fade" id="email-log">
                            E-Mail Log
                        </div>

                        <div class="tab-pane fade" id="system-log">
                            System Log
                        </div>
                    </div>
                </div>

            </div>
            <!-- /right content -->

        </div>
        <!-- /inner container -->

    </div>
    <!-- /content area -->
@endsection