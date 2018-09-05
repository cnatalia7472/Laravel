{{-- Copyright (C) 2018 Panobit, Inc - All rights reserved.
Unauthorized duplication, transmission, or modification by any means is strictly prohibited.
Proprietary and confidential. This file belongs to the Revohub SaaS (Software-as-a-Service)
Panobit, Inc | legal@panobit.com | www.panobit.com --}}
@extends('layouts.dashboard')
@section('page-title', ' - System License')
@section('content')


        <!-- Page header -->
        <div class="page-header page-header-light">
            <div class="page-header-content header-elements-md-inline">
                <div class="page-title d-flex">
                    <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Learning</span> - Detailed</h4>
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
                        <a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                        <a href="learning_detailed.html" class="breadcrumb-item">Learning</a>
                        <span class="breadcrumb-item active">Detailed</span>
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

            <!-- Inner container -->
            <div class="d-flex align-items-start flex-column flex-md-row">

                <!-- Right sidebar component -->
                <div class="sidebar sidebar-light bg-transparent sidebar-component sidebar-component-left border-0 shadow-0 order-1 order-md-2 sidebar-expand-md">

                    <!-- Sidebar content -->
                    <div class="sidebar-content">

                        <!-- Course details -->
                        <div class="card">
                            <div class="card-header bg-transparent header-elements-inline">
                                <span class="text-uppercase font-size-sm font-weight-semibold">Course details</span>
                                <div class="header-elements">
                                    <div class="list-icons">
                                        <a class="list-icons-item" data-action="collapse"></a>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body pb-0">
                                <a href="#" class="btn bg-teal-400 btn-block mb-2">Take course</a>
                            </div>

                            <table class="table table-borderless table-xs border-top-0 my-2">
                                <tbody>
                                <tr>
                                    <td class="font-weight-semibold">Duration:</td>
                                    <td class="text-right">10 hours</td>
                                </tr>
                                <tr>
                                    <td class="font-weight-semibold">Status:</td>
                                    <td class="text-right">
                                        <span class="badge bg-primary">Registration</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="font-weight-semibold">Start date:</td>
                                    <td class="text-right">Nov 1st, 2016</td>
                                </tr>
                                <tr>
                                    <td class="font-weight-semibold">End date:</td>
                                    <td class="text-right">Nov 20th, 2016</td>
                                </tr>
                                <tr>
                                    <td class="font-weight-semibold">Lessons:</td>
                                    <td class="text-right">12 lessons</td>
                                </tr>
                                <tr>
                                    <td class="font-weight-semibold">Trainer:</td>
                                    <td class="text-right"><a href="#">Eugene Kopyov</a></td>
                                </tr>
                                <tr>
                                    <td class="font-weight-semibold">Attendees:</td>
                                    <td class="text-right">382 people</td>
                                </tr>
                                <tr>
                                    <td class="font-weight-semibold">Rating:</td>
                                    <td class="text-right text-muted">
                                        <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                        <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                        <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                        <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                        <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /course details -->


                        <!-- Categories -->
                        <div class="card">
                            <div class="card-header bg-transparent header-elements-inline">
                                <span class="text-uppercase font-size-sm font-weight-semibold">Categories</span>
                                <div class="header-elements">
                                    <div class="list-icons">
                                        <a class="list-icons-item" data-action="collapse"></a>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body p-0">
                                <div class="nav nav-sidebar mb-2">
                                    <li class="nav-item-header font-size-xs text-uppercase">Development</li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            Frontend development
                                            <span class="badge badge-secondary badge-pill ml-auto">37</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            Backend development
                                            <span class="badge badge-secondary badge-pill ml-auto">58</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            Engineering
                                            <span class="badge badge-secondary badge-pill ml-auto">39</span>
                                        </a>
                                    </li>

                                    <li class="nav-item-header font-size-xs text-uppercase">Design</li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            Interface design
                                            <span class="badge badge-secondary badge-pill ml-auto">21</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            User experience
                                            <span class="badge badge-secondary badge-pill ml-auto">10</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            Web design
                                            <span class="badge badge-secondary badge-pill ml-auto">26</span>
                                        </a>
                                    </li>
                                </div>
                            </div>
                        </div>
                        <!-- /categories -->


                        <!-- Latest attendees -->
                        <div class="card">
                            <div class="card-header bg-transparent header-elements-inline">
                                <span class="text-uppercase font-size-sm font-weight-semibold">Latest attendees</span>
                                <div class="header-elements">
                                    <div class="list-icons">
                                        <a class="list-icons-item" data-action="collapse"></a>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <ul class="media-list">
                                    <li class="media">
                                        <a href="#" class="mr-3">
                                            <img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
                                        </a>
                                        <div class="media-body">
                                            <a href="#" class="media-title font-weight-semibold text-default">James Alexander</a>
                                            <div class="font-size-sm text-muted">Santa Ana, CA.</div>
                                        </div>
                                        <div class="ml-3 align-self-center">
                                            <span class="badge badge-mark border-success"></span>
                                        </div>
                                    </li>

                                    <li class="media">
                                        <a href="#" class="mr-3">
                                            <img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
                                        </a>
                                        <div class="media-body">
                                            <a href="#" class="media-title font-weight-semibold text-default">Jeremy Victorino</a>
                                            <div class="font-size-sm text-muted">Dowagiac, MI.</div>
                                        </div>
                                        <div class="ml-3 align-self-center">
                                            <span class="badge badge-mark border-danger"></span>
                                        </div>
                                    </li>

                                    <li class="media">
                                        <a href="#" class="mr-3">
                                            <img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
                                        </a>
                                        <div class="media-body">
                                            <a href="#" class="media-title font-weight-semibold text-default">Margo Baker</a>
                                            <div class="font-size-sm text-muted">Kasaan, AK.</div>
                                        </div>
                                        <div class="ml-3 align-self-center">
                                            <span class="badge badge-mark border-success"></span>
                                        </div>
                                    </li>

                                    <li class="media">
                                        <a href="#" class="mr-3">
                                            <img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
                                        </a>
                                        <div class="media-body">
                                            <a href="#" class="media-title font-weight-semibold text-default">Beatrix Diaz</a>
                                            <div class="font-size-sm text-muted">Neenah, WI.</div>
                                        </div>
                                        <div class="ml-3 align-self-center">
                                            <span class="badge badge-mark border-warning"></span>
                                        </div>
                                    </li>

                                    <li class="media">
                                        <a href="#" class="mr-3">
                                            <img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
                                        </a>
                                        <div class="media-body">
                                            <a href="#" class="media-title font-weight-semibold text-default">Richard Vango</a>
                                            <div class="font-size-sm text-muted">Grapevine, TX.</div>
                                        </div>
                                        <div class="ml-3 align-self-center">
                                            <span class="badge badge-mark border-grey-400"></span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- /latest attendees -->


                        <!-- Our trainers -->
                        <div class="card">
                            <div class="card-header bg-transparent header-elements-inline">
                                <span class="text-uppercase font-size-sm font-weight-semibold">Our trainers</span>
                                <div class="header-elements">
                                    <div class="list-icons">
                                        <a class="list-icons-item" data-action="collapse"></a>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <ul class="media-list">
                                    <li class="media">
                                        <a href="#" class="mr-3">
                                            <img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
                                        </a>

                                        <div class="media-body">
                                            <div class="font-weight-semibold">Rebecca Jameson</div>
                                            <span class="font-size-sm text-muted">Web developer</span>
                                        </div>

                                        <div class="ml-3 align-self-center">
                                            <div class="dropdown">
                                                <a href="#" class="text-default dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-more2"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Start chat</a>
                                                    <a href="#" class="dropdown-item"><i class="icon-phone2"></i> Make a call</a>
                                                    <a href="#" class="dropdown-item"><i class="icon-mail5"></i> Send mail</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="#" class="dropdown-item"><i class="icon-stars"></i> Rate trainer</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="media">
                                        <a href="#" class="mr-3">
                                            <img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
                                        </a>

                                        <div class="media-body">
                                            <div class="font-weight-semibold">Walter Sommers</div>
                                            <span class="font-size-sm text-muted">Lead developer</span>
                                        </div>

                                        <div class="ml-3 align-self-center">
                                            <div class="dropdown">
                                                <a href="#" class="text-default dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-more2"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Start chat</a>
                                                    <a href="#" class="dropdown-item"><i class="icon-phone2"></i> Make a call</a>
                                                    <a href="#" class="dropdown-item"><i class="icon-mail5"></i> Send mail</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="#" class="dropdown-item"><i class="icon-stars"></i> Rate trainer</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="media">
                                        <a href="#" class="mr-3">
                                            <img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
                                        </a>

                                        <div class="media-body">
                                            <div class="font-weight-semibold">Otto Gerwald</div>
                                            <span class="font-size-sm text-muted">Front end developer</span>
                                        </div>

                                        <div class="ml-3 align-self-center">
                                            <div class="dropdown">
                                                <a href="#" class="text-default dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-more2"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Start chat</a>
                                                    <a href="#" class="dropdown-item"><i class="icon-phone2"></i> Make a call</a>
                                                    <a href="#" class="dropdown-item"><i class="icon-mail5"></i> Send mail</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="#" class="dropdown-item"><i class="icon-stars"></i> Rate trainer</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="media">
                                        <a href="#" class="mr-3">
                                            <img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
                                        </a>

                                        <div class="media-body">
                                            <div class="font-weight-semibold">Vince Satmann</div>
                                            <span class="font-size-sm text-muted">UX expert</span>
                                        </div>

                                        <div class="ml-3 align-self-center">
                                            <div class="dropdown">
                                                <a href="#" class="text-default dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-more2"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Start chat</a>
                                                    <a href="#" class="dropdown-item"><i class="icon-phone2"></i> Make a call</a>
                                                    <a href="#" class="dropdown-item"><i class="icon-mail5"></i> Send mail</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="#" class="dropdown-item"><i class="icon-stars"></i> Rate trainer</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="media">
                                        <a href="#" class="mr-3">
                                            <img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
                                        </a>

                                        <div class="media-body">
                                            <div class="font-weight-semibold">Jason Leroy</div>
                                            <span class="font-size-sm text-muted">SEO specialist</span>
                                        </div>

                                        <div class="ml-3 align-self-center">
                                            <div class="dropdown">
                                                <a href="#" class="text-default dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-more2"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Start chat</a>
                                                    <a href="#" class="dropdown-item"><i class="icon-phone2"></i> Make a call</a>
                                                    <a href="#" class="dropdown-item"><i class="icon-mail5"></i> Send mail</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="#" class="dropdown-item"><i class="icon-stars"></i> Rate trainer</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- /our trainers -->


                        <!-- Upcoming courses -->
                        <div class="card">
                            <div class="card-header bg-transparent header-elements-inline">
                                <span class="text-uppercase font-size-sm font-weight-semibold">Upcoming courses</span>
                                <div class="header-elements">
                                    <div class="list-icons">
                                        <a class="list-icons-item" data-action="collapse"></a>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <ul class="media-list">
                                    <li class="media">
                                        <div class="mr-3">
                                            <h5 class="text-center text-success mb-0">02</h5>
                                            <div class="font-size-sm text-muted line-height-1">Nov</div>
                                        </div>

                                        <div class="media-body">
                                            <span class="font-weight-semibold">Web development strategy</span> course by <a href="#">James Franko</a>
                                            <ul class="list-inline list-inline-dotted mt-1 mb-0">
                                                <li class="list-inline-item"><span class="text-muted">120 hours</span></li>
                                                <li class="list-inline-item">
                                                    <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                                    <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                                    <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                                    <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                                    <i class="icon-star-half font-size-base text-warning-300"></i>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>

                                    <li class="media">
                                        <div class="mr-3">
                                            <h5 class="text-center text-success mb-0">15</h5>
                                            <div class="font-size-sm text-muted line-height-1">Nov</div>
                                        </div>

                                        <div class="media-body">
                                            <span class="font-weight-semibold">Business development</span> course by <a href="#">Jeremy Victorino</a>
                                            <ul class="list-inline list-inline-dotted mt-1 mb-0">
                                                <li class="list-inline-item"><span class="text-muted">40 hours</span></li>
                                                <li class="list-inline-item">
                                                    <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                                    <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                                    <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                                    <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                                    <i class="icon-star-half font-size-base text-warning-300"></i>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>

                                    <li class="media">
                                        <div class="mr-3">
                                            <h5 class="text-center text-success mb-0">01</h5>
                                            <div class="font-size-sm text-muted line-height-1">Dec</div>
                                        </div>

                                        <div class="media-body">
                                            <span class="font-weight-semibold">Digital marketing</span> course by <a href="#">Monica Smith</a>
                                            <ul class="list-inline list-inline-dotted mt-1 mb-0">
                                                <li class="list-inline-item"><span class="text-muted">100 hours</span></li>
                                                <li class="list-inline-item">
                                                    <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                                    <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                                    <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                                    <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                                    <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>

                                    <li class="media">
                                        <div class="mr-3">
                                            <h5 class="text-center text-success mb-0">15</h5>
                                            <div class="font-size-sm text-muted line-height-1">Dec</div>
                                        </div>

                                        <div class="media-body">
                                            <span class="font-weight-semibold">User experience design</span> course by <a href="#">Buzz Brenson</a>
                                            <ul class="list-inline list-inline-dotted mt-1 mb-0">
                                                <li class="list-inline-item"><span class="text-muted">90 hours</span></li>
                                                <li class="list-inline-item">
                                                    <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                                    <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                                    <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                                    <i class="icon-star-empty3 font-size-base text-warning-300"></i>
                                                    <i class="icon-star-half font-size-base text-warning-300"></i>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>

                                    <li class="media">
                                        <div class="mr-3">
                                            <h5 class="text-center text-success mb-0">20</h5>
                                            <div class="font-size-sm text-muted line-height-1">Dec</div>
                                        </div>

                                        <div class="media-body">
                                            <span class="font-weight-semibold">Digital painting</span> course by <a href="#">Zachary Willson</a>
                                            <ul class="list-inline list-inline-dotted mt-1 mb-0">
                                                <li class="list-inline-item"><span class="text-muted">120 hours</span></li>
                                                <li class="list-inline-item">
                                                    <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                                    <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                                    <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                                    <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                                    <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>

                                    <li class="media">
                                        <div class="mr-3">
                                            <h5 class="text-center text-success mb-0">04</h5>
                                            <div class="font-size-sm text-muted line-height-1">Jan</div>
                                        </div>

                                        <div class="media-body">
                                            <span class="font-weight-semibold">Financial analysis</span> course by <a href="#">Dori Laperriere</a>
                                            <ul class="list-inline list-inline-dotted mt-1 mb-0">
                                                <li class="list-inline-item"><span class="text-muted">60 hours</span></li>
                                                <li class="list-inline-item">
                                                    <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                                    <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                                    <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                                    <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                                    <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- /upcoming courses -->

                    </div>
                    <!-- /sidebar content -->

                </div>
                <!-- /right sidebar component -->

                <!-- Left content -->
                <div class="w-100 overflow-auto order-2 order-md-1">

                    <!-- Course overview -->
                    <div class="card">
                        <div class="card-header header-elements-md-inline">
                            <h5 class="card-title">Data Governance course</h5>

                            <div class="header-elements">
                                <ul class="list-inline list-inline-dotted mb-0 mt-2 mt-md-0">
                                    <li class="list-inline-item">Rating: <span class="font-weight-semibold">4.85</span></li>
                                    <li class="list-inline-item">
                                        <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                        <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                        <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                        <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                        <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                        <span class="text-muted ml-1">(439)</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="nav-tabs-responsive bg-light border-top">
                            <ul class="nav nav-tabs nav-tabs-bottom flex-nowrap mb-0">
                                <li class="nav-item"><a href="#course-overview" class="nav-link active" data-toggle="tab"><i class="icon-menu7 mr-2"></i> Overview</a></li>
                                <li class="nav-item"><a href="#course-attendees" class="nav-link" data-toggle="tab"><i class="icon-people mr-2"></i> Attendees</a></li>
                                <li class="nav-item"><a href="#course-schedule" class="nav-link" data-toggle="tab"><i class="icon-calendar3 mr-2"></i> Schedule</a></li>
                            </ul>
                        </div>

                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="course-overview">
                                <div class="card-body">
                                    <div class="mt-1 mb-4">
                                        <h6 class="font-weight-semibold">Course overview</h6>
                                        <p>Then sluggishly this camel learned woodchuck far stretched unspeakable notwithstanding the walked owing stung mellifluously glumly rooster more examined one that combed until a less less witless pouted up voluble timorously glared elaborate giraffe steady while grinned and got one beaver to walked. Connected picked rashly ocelot flirted while wherever unwound much more one inside emotionally well much woolly amidst upon far burned ouch sadistically became.</p>
                                        <p>A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame. It showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff that covered the whole of her lower arm towards the viewer. Gregor then turned to look out the window at the dull weather.</p>
                                    </div>

                                    <h6 class="font-weight-semibold">What you will learn</h6>
                                    <p class="mb-3">Some cow goose out and sweeping wow the skillfully goodness one crazily far some jeez darn well so peevish pending nudged categorically in between about much alas handsome intolerable devotedly helpfully smiled momentously next much this this next sweepingly far. Together prim and limpet much extravagantly quail longing a ouch that walking a jeepers flamingo more.</p>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="mb-4">
                                                <dl>
                                                    <dt class="font-size-sm font-weight-bold text-uppercase">
                                                        <i class="icon-checkmark3 text-blue mr-2"></i>
                                                        Salamander much that on much
                                                    </dt>
                                                    <dd>Like partook magic this enthusiastic tasteful far crud otter this the ferret honey iguana. Together prim and limpet much extravagantly quail longing.</dd>

                                                    <dt class="font-size-sm font-weight-bold text-uppercase">
                                                        <i class="icon-checkmark3 text-blue mr-2"></i>
                                                        Well far some raccoon
                                                    </dt>
                                                    <dd>Python laudably euphemistically since this copious much human this briefly hello ouch less one diligent however impotently made gave a slick up much.</dd>

                                                    <dt class="font-size-sm font-weight-bold text-uppercase">
                                                        <i class="icon-checkmark3 text-blue mr-2"></i>
                                                        Goldfish rapidly that far
                                                    </dt>
                                                    <dd>Well far some raccoon knew goose and crud behind salmon amenable oh the poignant sufficiently yikes a naked showed far reindeer imminently.</dd>

                                                    <dt class="font-size-sm font-weight-bold text-uppercase">
                                                        <i class="icon-checkmark3 text-blue mr-2"></i>
                                                        Gregor then turned to look out
                                                    </dt>
                                                    <dd>Then sluggishly this camel learned woodchuck far stretched unspeakable notwithstanding the walked owing stung mellifluously glumly rooster.</dd>
                                                </dl>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="mb-4">
                                                <dl>
                                                    <dt class="font-size-sm font-weight-bold text-uppercase">
                                                        <i class="icon-checkmark3 text-blue mr-2"></i>
                                                        Misunderstood cuffed more depending
                                                    </dt>
                                                    <dd>And earthworm dear arose bald agilely sad so below cowered within ceremonially therefore via much this symbolically and newt capably.</dd>

                                                    <dt class="font-size-sm font-weight-bold text-uppercase">
                                                        <i class="icon-checkmark3 text-blue mr-2"></i>
                                                        Voluble much saddled mechanic
                                                    </dt>
                                                    <dd>Much took between less goodness jay mallard kneeled gnashed this up strong cooperative. A collection of textile samples lay spread.</dd>

                                                    <dt class="font-size-sm font-weight-bold text-uppercase">
                                                        <i class="icon-checkmark3 text-blue mr-2"></i>
                                                        Before some one more
                                                    </dt>
                                                    <dd>Pending some contrary rabbit up that the more conditionally ouch confidently far so was darn logic thus dove the juicily because that placed otter.</dd>

                                                    <dt class="font-size-sm font-weight-bold text-uppercase">
                                                        <i class="icon-checkmark3 text-blue mr-2"></i>
                                                        So slit more darn hey well wore
                                                    </dt>
                                                    <dd>Well far some raccoon knew goose and crud behind salmon amenable oh the poignant sufficiently yikes a naked showed far reindeer imminently.</dd>
                                                </dl>
                                            </div>
                                        </div>
                                    </div>

                                    <h6 class="font-weight-semibold">Course program</h6>
                                    So slit more darn hey well wore submissive savage this shark aardvark fumed thoughtfully much drank when angelfish so outgrew some alas vigorously therefore warthog superb less oh groundhog less alas gibbered barked some hey despicably with aesthetic hamster jay by luckily. A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame
                                </div>

                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th>Lessons</th>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Duration</th>
                                            <th>Status</th>
                                            <th>Date</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td><a href="#">Introduction</a></td>
                                            <td>One morning, when Gregor Samsa woke from troubled dreams, he found himself</td>
                                            <td>10 hours</td>
                                            <td><span class="badge bg-secondary">Closed</span></td>
                                            <td>Oct 21st, 2016</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td><a href="#">Design tools</a></td>
                                            <td>He lay on his armour-like back, and if he lifted his head a little he could</td>
                                            <td>20 hours</td>
                                            <td><span class="badge bg-primary">Registration</span></td>
                                            <td>Oct 22nd, 2016</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td><a href="#">Workspace</a></td>
                                            <td>The bedding was hardly able to cover it and seemed ready to slide off moment</td>
                                            <td>35 hours</td>
                                            <td><span class="badge bg-danger">On time</span></td>
                                            <td>Oct 23rd, 2016</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td><a href="#">Creating effects</a></td>
                                            <td>A collection of textile samples lay spread out on the table - Samsa salesman</td>
                                            <td>25 hours</td>
                                            <td><span class="badge bg-danger">On time</span></td>
                                            <td>Oct 24th, 2016</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td><a href="#">Digital design</a></td>
                                            <td>Drops of rain could be heard hitting the pane, which made him feel quite sad</td>
                                            <td>50 hours</td>
                                            <td><span class="badge bg-danger">On time</span></td>
                                            <td>Oct 25th, 2016</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="course-attendees">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-xl-3 col-md-6">
                                            <div class="card card-body">
                                                <div class="media">
                                                    <div class="mr-3">
                                                        <a href="#">
                                                            <img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="42" height="42" alt="">
                                                        </a>
                                                    </div>

                                                    <div class="media-body">
                                                        <h6 class="mb-0">Hanna Dorman</h6>
                                                        <span class="text-muted">UX/UI designer</span>
                                                    </div>

                                                    <div class="ml-3 align-self-center">
                                                        <div class="list-icons">
                                                            <div class="list-icons-item dropdown">
                                                                <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Start chat</a>
                                                                    <a href="#" class="dropdown-item"><i class="icon-phone2"></i> Make a call</a>
                                                                    <a href="#" class="dropdown-item"><i class="icon-mail5"></i> Send mail</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a href="#" class="dropdown-item"><i class="icon-statistics"></i> Statistics</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-md-6">
                                            <div class="card card-body">
                                                <div class="media">
                                                    <div class="mr-3">
                                                        <a href="#">
                                                            <img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="42" height="42" alt="">
                                                        </a>
                                                    </div>

                                                    <div class="media-body">
                                                        <h6 class="mb-0">Benjamin Loretti</h6>
                                                        <span class="text-muted">Network engineer</span>
                                                    </div>

                                                    <div class="ml-3 align-self-center">
                                                        <div class="list-icons">
                                                            <div class="list-icons-item dropdown">
                                                                <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Start chat</a>
                                                                    <a href="#" class="dropdown-item"><i class="icon-phone2"></i> Make a call</a>
                                                                    <a href="#" class="dropdown-item"><i class="icon-mail5"></i> Send mail</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a href="#" class="dropdown-item"><i class="icon-statistics"></i> Statistics</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-md-6">
                                            <div class="card card-body">
                                                <div class="media">
                                                    <div class="mr-3">
                                                        <a href="#">
                                                            <img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="42" height="42" alt="">
                                                        </a>
                                                    </div>

                                                    <div class="media-body">
                                                        <h6 class="mb-0">Vanessa Aurelius</h6>
                                                        <span class="text-muted">Front end guru</span>
                                                    </div>

                                                    <div class="ml-3 align-self-center">
                                                        <div class="list-icons">
                                                            <div class="list-icons-item dropdown">
                                                                <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Start chat</a>
                                                                    <a href="#" class="dropdown-item"><i class="icon-phone2"></i> Make a call</a>
                                                                    <a href="#" class="dropdown-item"><i class="icon-mail5"></i> Send mail</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a href="#" class="dropdown-item"><i class="icon-statistics"></i> Statistics</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-md-6">
                                            <div class="card card-body">
                                                <div class="media">
                                                    <div class="mr-3">
                                                        <a href="#">
                                                            <img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="42" height="42" alt="">
                                                        </a>
                                                    </div>

                                                    <div class="media-body">
                                                        <h6 class="mb-0">William Brenson</h6>
                                                        <span class="text-muted">Chief officer</span>
                                                    </div>

                                                    <div class="ml-3 align-self-center">
                                                        <div class="list-icons">
                                                            <div class="list-icons-item dropdown">
                                                                <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Start chat</a>
                                                                    <a href="#" class="dropdown-item"><i class="icon-phone2"></i> Make a call</a>
                                                                    <a href="#" class="dropdown-item"><i class="icon-mail5"></i> Send mail</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a href="#" class="dropdown-item"><i class="icon-statistics"></i> Statistics</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-xl-3 col-md-6">
                                            <div class="card card-body">
                                                <div class="media">
                                                    <div class="mr-3">
                                                        <a href="#">
                                                            <img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="42" height="42" alt="">
                                                        </a>
                                                    </div>

                                                    <div class="media-body">
                                                        <h6 class="mb-0">James Alexander</h6>
                                                        <span class="text-muted">Lead developer</span>
                                                    </div>

                                                    <div class="ml-3 align-self-center">
                                                        <div class="list-icons">
                                                            <div class="list-icons-item dropdown">
                                                                <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Start chat</a>
                                                                    <a href="#" class="dropdown-item"><i class="icon-phone2"></i> Make a call</a>
                                                                    <a href="#" class="dropdown-item"><i class="icon-mail5"></i> Send mail</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a href="#" class="dropdown-item"><i class="icon-statistics"></i> Statistics</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-md-6">
                                            <div class="card card-body">
                                                <div class="media">
                                                    <div class="mr-3">
                                                        <a href="#">
                                                            <img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="42" height="42" alt="">
                                                        </a>
                                                    </div>

                                                    <div class="media-body">
                                                        <h6 class="mb-0">Nathan Jacobson</h6>
                                                        <span class="text-muted">Lead UX designer</span>
                                                    </div>

                                                    <div class="ml-3 align-self-center">
                                                        <div class="list-icons">
                                                            <div class="list-icons-item dropdown">
                                                                <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Start chat</a>
                                                                    <a href="#" class="dropdown-item"><i class="icon-phone2"></i> Make a call</a>
                                                                    <a href="#" class="dropdown-item"><i class="icon-mail5"></i> Send mail</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a href="#" class="dropdown-item"><i class="icon-statistics"></i> Statistics</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-md-6">
                                            <div class="card card-body">
                                                <div class="media">
                                                    <div class="mr-3">
                                                        <a href="#">
                                                            <img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="42" height="42" alt="">
                                                        </a>
                                                    </div>

                                                    <div class="media-body">
                                                        <h6 class="mb-0">Margo Baker</h6>
                                                        <span class="text-muted">Sales manager</span>
                                                    </div>

                                                    <div class="ml-3 align-self-center">
                                                        <div class="list-icons">
                                                            <div class="list-icons-item dropdown">
                                                                <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Start chat</a>
                                                                    <a href="#" class="dropdown-item"><i class="icon-phone2"></i> Make a call</a>
                                                                    <a href="#" class="dropdown-item"><i class="icon-mail5"></i> Send mail</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a href="#" class="dropdown-item"><i class="icon-statistics"></i> Statistics</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-md-6">
                                            <div class="card card-body">
                                                <div class="media">
                                                    <div class="mr-3">
                                                        <a href="#">
                                                            <img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="42" height="42" alt="">
                                                        </a>
                                                    </div>

                                                    <div class="media-body">
                                                        <h6 class="mb-0">Barbara Walden</h6>
                                                        <span class="text-muted">SEO specialist</span>
                                                    </div>

                                                    <div class="ml-3 align-self-center">
                                                        <div class="list-icons">
                                                            <div class="list-icons-item dropdown">
                                                                <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Start chat</a>
                                                                    <a href="#" class="dropdown-item"><i class="icon-phone2"></i> Make a call</a>
                                                                    <a href="#" class="dropdown-item"><i class="icon-mail5"></i> Send mail</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a href="#" class="dropdown-item"><i class="icon-statistics"></i> Statistics</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-xl-3 col-md-6">
                                            <div class="card card-body">
                                                <div class="media">
                                                    <div class="mr-3">
                                                        <a href="#">
                                                            <img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="42" height="42" alt="">
                                                        </a>
                                                    </div>

                                                    <div class="media-body">
                                                        <h6 class="mb-0">Lucy North</h6>
                                                        <span class="text-muted">UX/UI designer</span>
                                                    </div>

                                                    <div class="ml-3 align-self-center">
                                                        <div class="list-icons">
                                                            <div class="list-icons-item dropdown">
                                                                <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Start chat</a>
                                                                    <a href="#" class="dropdown-item"><i class="icon-phone2"></i> Make a call</a>
                                                                    <a href="#" class="dropdown-item"><i class="icon-mail5"></i> Send mail</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a href="#" class="dropdown-item"><i class="icon-statistics"></i> Statistics</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-md-6">
                                            <div class="card card-body">
                                                <div class="media">
                                                    <div class="mr-3">
                                                        <a href="#">
                                                            <img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="42" height="42" alt="">
                                                        </a>
                                                    </div>

                                                    <div class="media-body">
                                                        <h6 class="mb-0">Vicky Barna</h6>
                                                        <span class="text-muted">Network engineer</span>
                                                    </div>

                                                    <div class="ml-3 align-self-center">
                                                        <div class="list-icons">
                                                            <div class="list-icons-item dropdown">
                                                                <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Start chat</a>
                                                                    <a href="#" class="dropdown-item"><i class="icon-phone2"></i> Make a call</a>
                                                                    <a href="#" class="dropdown-item"><i class="icon-mail5"></i> Send mail</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a href="#" class="dropdown-item"><i class="icon-statistics"></i> Statistics</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-md-6">
                                            <div class="card card-body">
                                                <div class="media">
                                                    <div class="mr-3">
                                                        <a href="#">
                                                            <img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="42" height="42" alt="">
                                                        </a>
                                                    </div>

                                                    <div class="media-body">
                                                        <h6 class="mb-0">Hugo Bills</h6>
                                                        <span class="text-muted">Front end guru</span>
                                                    </div>

                                                    <div class="ml-3 align-self-center">
                                                        <div class="list-icons">
                                                            <div class="list-icons-item dropdown">
                                                                <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Start chat</a>
                                                                    <a href="#" class="dropdown-item"><i class="icon-phone2"></i> Make a call</a>
                                                                    <a href="#" class="dropdown-item"><i class="icon-mail5"></i> Send mail</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a href="#" class="dropdown-item"><i class="icon-statistics"></i> Statistics</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-md-6">
                                            <div class="card card-body">
                                                <div class="media">
                                                    <div class="mr-3">
                                                        <a href="#">
                                                            <img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="42" height="42" alt="">
                                                        </a>
                                                    </div>

                                                    <div class="media-body">
                                                        <h6 class="mb-0">Tony Gurrano</h6>
                                                        <span class="text-muted">CEO and Founder</span>
                                                    </div>

                                                    <div class="ml-3 align-self-center">
                                                        <div class="list-icons">
                                                            <div class="list-icons-item dropdown">
                                                                <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Start chat</a>
                                                                    <a href="#" class="dropdown-item"><i class="icon-phone2"></i> Make a call</a>
                                                                    <a href="#" class="dropdown-item"><i class="icon-mail5"></i> Send mail</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a href="#" class="dropdown-item"><i class="icon-statistics"></i> Statistics</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-xl-3 col-md-6">
                                            <div class="card card-body">
                                                <div class="media">
                                                    <div class="mr-3">
                                                        <a href="#">
                                                            <img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="42" height="42" alt="">
                                                        </a>
                                                    </div>

                                                    <div class="media-body">
                                                        <h6 class="mb-0">Jeremy Victorino</h6>
                                                        <span class="text-muted">Marketing specialist</span>
                                                    </div>

                                                    <div class="ml-3 align-self-center">
                                                        <div class="list-icons">
                                                            <div class="list-icons-item dropdown">
                                                                <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Start chat</a>
                                                                    <a href="#" class="dropdown-item"><i class="icon-phone2"></i> Make a call</a>
                                                                    <a href="#" class="dropdown-item"><i class="icon-mail5"></i> Send mail</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a href="#" class="dropdown-item"><i class="icon-statistics"></i> Statistics</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-md-6">
                                            <div class="card card-body">
                                                <div class="media">
                                                    <div class="mr-3">
                                                        <a href="#">
                                                            <img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="42" height="42" alt="">
                                                        </a>
                                                    </div>

                                                    <div class="media-body">
                                                        <h6 class="mb-0">Monica Smith</h6>
                                                        <span class="text-muted">Financial officer</span>
                                                    </div>

                                                    <div class="ml-3 align-self-center">
                                                        <div class="list-icons">
                                                            <div class="list-icons-item dropdown">
                                                                <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Start chat</a>
                                                                    <a href="#" class="dropdown-item"><i class="icon-phone2"></i> Make a call</a>
                                                                    <a href="#" class="dropdown-item"><i class="icon-mail5"></i> Send mail</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a href="#" class="dropdown-item"><i class="icon-statistics"></i> Statistics</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-md-6">
                                            <div class="card card-body">
                                                <div class="media">
                                                    <div class="mr-3">
                                                        <a href="#">
                                                            <img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="42" height="42" alt="">
                                                        </a>
                                                    </div>

                                                    <div class="media-body">
                                                        <h6 class="mb-0">Bastian Miller</h6>
                                                        <span class="text-muted">Web developer</span>
                                                    </div>

                                                    <div class="ml-3 align-self-center">
                                                        <div class="list-icons">
                                                            <div class="list-icons-item dropdown">
                                                                <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Start chat</a>
                                                                    <a href="#" class="dropdown-item"><i class="icon-phone2"></i> Make a call</a>
                                                                    <a href="#" class="dropdown-item"><i class="icon-mail5"></i> Send mail</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a href="#" class="dropdown-item"><i class="icon-statistics"></i> Statistics</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-md-6">
                                            <div class="card card-body">
                                                <div class="media">
                                                    <div class="mr-3">
                                                        <a href="#">
                                                            <img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="42" height="42" alt="">
                                                        </a>
                                                    </div>

                                                    <div class="media-body">
                                                        <h6 class="mb-0">Jordana Mills</h6>
                                                        <span class="text-muted">Designer</span>
                                                    </div>

                                                    <div class="ml-3 align-self-center">
                                                        <div class="list-icons">
                                                            <div class="list-icons-item dropdown">
                                                                <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Start chat</a>
                                                                    <a href="#" class="dropdown-item"><i class="icon-phone2"></i> Make a call</a>
                                                                    <a href="#" class="dropdown-item"><i class="icon-mail5"></i> Send mail</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a href="#" class="dropdown-item"><i class="icon-statistics"></i> Statistics</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-xl-3 col-md-6">
                                            <div class="card card-body">
                                                <div class="media">
                                                    <div class="mr-3">
                                                        <a href="#">
                                                            <img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="42" height="42" alt="">
                                                        </a>
                                                    </div>

                                                    <div class="media-body">
                                                        <h6 class="mb-0">Buzz Brenson</h6>
                                                        <span class="text-muted">Business developer</span>
                                                    </div>

                                                    <div class="ml-3 align-self-center">
                                                        <div class="list-icons">
                                                            <div class="list-icons-item dropdown">
                                                                <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Start chat</a>
                                                                    <a href="#" class="dropdown-item"><i class="icon-phone2"></i> Make a call</a>
                                                                    <a href="#" class="dropdown-item"><i class="icon-mail5"></i> Send mail</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a href="#" class="dropdown-item"><i class="icon-statistics"></i> Statistics</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-md-6">
                                            <div class="card card-body">
                                                <div class="media">
                                                    <div class="mr-3">
                                                        <a href="#">
                                                            <img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="42" height="42" alt="">
                                                        </a>
                                                    </div>

                                                    <div class="media-body">
                                                        <h6 class="mb-0">Zachary Willson</h6>
                                                        <span class="text-muted">Network engineer</span>
                                                    </div>

                                                    <div class="ml-3 align-self-center">
                                                        <div class="list-icons">
                                                            <div class="list-icons-item dropdown">
                                                                <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Start chat</a>
                                                                    <a href="#" class="dropdown-item"><i class="icon-phone2"></i> Make a call</a>
                                                                    <a href="#" class="dropdown-item"><i class="icon-mail5"></i> Send mail</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a href="#" class="dropdown-item"><i class="icon-statistics"></i> Statistics</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-md-6">
                                            <div class="card card-body">
                                                <div class="media">
                                                    <div class="mr-3">
                                                        <a href="#">
                                                            <img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="42" height="42" alt="">
                                                        </a>
                                                    </div>

                                                    <div class="media-body">
                                                        <h6 class="mb-0">William Miles</h6>
                                                        <span class="text-muted">Front end dev</span>
                                                    </div>

                                                    <div class="ml-3 align-self-center">
                                                        <div class="list-icons">
                                                            <div class="list-icons-item dropdown">
                                                                <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Start chat</a>
                                                                    <a href="#" class="dropdown-item"><i class="icon-phone2"></i> Make a call</a>
                                                                    <a href="#" class="dropdown-item"><i class="icon-mail5"></i> Send mail</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a href="#" class="dropdown-item"><i class="icon-statistics"></i> Statistics</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-3 col-md-6">
                                            <div class="card card-body">
                                                <div class="media">
                                                    <div class="mr-3">
                                                        <a href="#">
                                                            <img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle" width="42" height="42" alt="">
                                                        </a>
                                                    </div>

                                                    <div class="media-body">
                                                        <h6 class="mb-0">Freddy Walden</h6>
                                                        <span class="text-muted">Marketing specialist</span>
                                                    </div>

                                                    <div class="ml-3 align-self-center">
                                                        <div class="list-icons">
                                                            <div class="list-icons-item dropdown">
                                                                <a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu7"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Start chat</a>
                                                                    <a href="#" class="dropdown-item"><i class="icon-phone2"></i> Make a call</a>
                                                                    <a href="#" class="dropdown-item"><i class="icon-mail5"></i> Send mail</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a href="#" class="dropdown-item"><i class="icon-statistics"></i> Statistics</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-center mt-3 mb-3">
                                        <ul class="pagination">
                                            <li class="page-item"><a href="#" class="page-link"><i class="icon-arrow-small-right"></i></a></li>
                                            <li class="page-item active"><a href="#" class="page-link">1</a></li>
                                            <li class="page-item"><a href="#" class="page-link">2</a></li>
                                            <li class="page-item"><a href="#" class="page-link">3</a></li>
                                            <li class="page-item"><a href="#" class="page-link">4</a></li>
                                            <li class="page-item"><a href="#" class="page-link">5</a></li>
                                            <li class="page-item"><a href="#" class="page-link"><i class="icon-arrow-small-left"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="course-schedule">
                                <div class="card-body">
                                    <div class="schedule"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /course overview -->


                </div>
                <!-- /left content -->


                <!-- Right sidebar component -->
                <div class="sidebar sidebar-light bg-transparent sidebar-component sidebar-component-right border-0 shadow-0 order-3 order-md-2 sidebar-expand-md">

                    <!-- Sidebar content -->
                    <div class="sidebar-content">

                        <!-- Course details -->
                        <div class="card">
                            <div class="card-header bg-transparent header-elements-inline">
                                <span class="text-uppercase font-size-sm font-weight-semibold">Course details</span>
                                <div class="header-elements">
                                    <div class="list-icons">
                                        <a class="list-icons-item" data-action="collapse"></a>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body pb-0">
                                <a href="#" class="btn bg-teal-400 btn-block mb-2">Take course</a>
                            </div>

                            <table class="table table-borderless table-xs border-top-0 my-2">
                                <tbody>
                                <tr>
                                    <td class="font-weight-semibold">Duration:</td>
                                    <td class="text-right">10 hours</td>
                                </tr>
                                <tr>
                                    <td class="font-weight-semibold">Status:</td>
                                    <td class="text-right">
                                        <span class="badge bg-primary">Registration</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="font-weight-semibold">Start date:</td>
                                    <td class="text-right">Nov 1st, 2016</td>
                                </tr>
                                <tr>
                                    <td class="font-weight-semibold">End date:</td>
                                    <td class="text-right">Nov 20th, 2016</td>
                                </tr>
                                <tr>
                                    <td class="font-weight-semibold">Lessons:</td>
                                    <td class="text-right">12 lessons</td>
                                </tr>
                                <tr>
                                    <td class="font-weight-semibold">Trainer:</td>
                                    <td class="text-right"><a href="#">Eugene Kopyov</a></td>
                                </tr>
                                <tr>
                                    <td class="font-weight-semibold">Attendees:</td>
                                    <td class="text-right">382 people</td>
                                </tr>
                                <tr>
                                    <td class="font-weight-semibold">Rating:</td>
                                    <td class="text-right text-muted">
                                        <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                        <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                        <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                        <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                        <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /course details -->


                        <!-- Categories -->
                        <div class="card">
                            <div class="card-header bg-transparent header-elements-inline">
                                <span class="text-uppercase font-size-sm font-weight-semibold">Categories</span>
                                <div class="header-elements">
                                    <div class="list-icons">
                                        <a class="list-icons-item" data-action="collapse"></a>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body p-0">
                                <div class="nav nav-sidebar mb-2">
                                    <li class="nav-item-header font-size-xs text-uppercase">Development</li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            Frontend development
                                            <span class="badge badge-secondary badge-pill ml-auto">37</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            Backend development
                                            <span class="badge badge-secondary badge-pill ml-auto">58</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            Engineering
                                            <span class="badge badge-secondary badge-pill ml-auto">39</span>
                                        </a>
                                    </li>

                                    <li class="nav-item-header font-size-xs text-uppercase">Design</li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            Interface design
                                            <span class="badge badge-secondary badge-pill ml-auto">21</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            User experience
                                            <span class="badge badge-secondary badge-pill ml-auto">10</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            Web design
                                            <span class="badge badge-secondary badge-pill ml-auto">26</span>
                                        </a>
                                    </li>
                                </div>
                            </div>
                        </div>
                        <!-- /categories -->


                        <!-- Latest attendees -->
                        <div class="card">
                            <div class="card-header bg-transparent header-elements-inline">
                                <span class="text-uppercase font-size-sm font-weight-semibold">Latest attendees</span>
                                <div class="header-elements">
                                    <div class="list-icons">
                                        <a class="list-icons-item" data-action="collapse"></a>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <ul class="media-list">
                                    <li class="media">
                                        <a href="#" class="mr-3">
                                            <img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
                                        </a>
                                        <div class="media-body">
                                            <a href="#" class="media-title font-weight-semibold text-default">James Alexander</a>
                                            <div class="font-size-sm text-muted">Santa Ana, CA.</div>
                                        </div>
                                        <div class="ml-3 align-self-center">
                                            <span class="badge badge-mark border-success"></span>
                                        </div>
                                    </li>

                                    <li class="media">
                                        <a href="#" class="mr-3">
                                            <img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
                                        </a>
                                        <div class="media-body">
                                            <a href="#" class="media-title font-weight-semibold text-default">Jeremy Victorino</a>
                                            <div class="font-size-sm text-muted">Dowagiac, MI.</div>
                                        </div>
                                        <div class="ml-3 align-self-center">
                                            <span class="badge badge-mark border-danger"></span>
                                        </div>
                                    </li>

                                    <li class="media">
                                        <a href="#" class="mr-3">
                                            <img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
                                        </a>
                                        <div class="media-body">
                                            <a href="#" class="media-title font-weight-semibold text-default">Margo Baker</a>
                                            <div class="font-size-sm text-muted">Kasaan, AK.</div>
                                        </div>
                                        <div class="ml-3 align-self-center">
                                            <span class="badge badge-mark border-success"></span>
                                        </div>
                                    </li>

                                    <li class="media">
                                        <a href="#" class="mr-3">
                                            <img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
                                        </a>
                                        <div class="media-body">
                                            <a href="#" class="media-title font-weight-semibold text-default">Beatrix Diaz</a>
                                            <div class="font-size-sm text-muted">Neenah, WI.</div>
                                        </div>
                                        <div class="ml-3 align-self-center">
                                            <span class="badge badge-mark border-warning"></span>
                                        </div>
                                    </li>

                                    <li class="media">
                                        <a href="#" class="mr-3">
                                            <img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
                                        </a>
                                        <div class="media-body">
                                            <a href="#" class="media-title font-weight-semibold text-default">Richard Vango</a>
                                            <div class="font-size-sm text-muted">Grapevine, TX.</div>
                                        </div>
                                        <div class="ml-3 align-self-center">
                                            <span class="badge badge-mark border-grey-400"></span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- /latest attendees -->


                        <!-- Our trainers -->
                        <div class="card">
                            <div class="card-header bg-transparent header-elements-inline">
                                <span class="text-uppercase font-size-sm font-weight-semibold">Our trainers</span>
                                <div class="header-elements">
                                    <div class="list-icons">
                                        <a class="list-icons-item" data-action="collapse"></a>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <ul class="media-list">
                                    <li class="media">
                                        <a href="#" class="mr-3">
                                            <img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
                                        </a>

                                        <div class="media-body">
                                            <div class="font-weight-semibold">Rebecca Jameson</div>
                                            <span class="font-size-sm text-muted">Web developer</span>
                                        </div>

                                        <div class="ml-3 align-self-center">
                                            <div class="dropdown">
                                                <a href="#" class="text-default dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-more2"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Start chat</a>
                                                    <a href="#" class="dropdown-item"><i class="icon-phone2"></i> Make a call</a>
                                                    <a href="#" class="dropdown-item"><i class="icon-mail5"></i> Send mail</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="#" class="dropdown-item"><i class="icon-stars"></i> Rate trainer</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="media">
                                        <a href="#" class="mr-3">
                                            <img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
                                        </a>

                                        <div class="media-body">
                                            <div class="font-weight-semibold">Walter Sommers</div>
                                            <span class="font-size-sm text-muted">Lead developer</span>
                                        </div>

                                        <div class="ml-3 align-self-center">
                                            <div class="dropdown">
                                                <a href="#" class="text-default dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-more2"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Start chat</a>
                                                    <a href="#" class="dropdown-item"><i class="icon-phone2"></i> Make a call</a>
                                                    <a href="#" class="dropdown-item"><i class="icon-mail5"></i> Send mail</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="#" class="dropdown-item"><i class="icon-stars"></i> Rate trainer</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="media">
                                        <a href="#" class="mr-3">
                                            <img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
                                        </a>

                                        <div class="media-body">
                                            <div class="font-weight-semibold">Otto Gerwald</div>
                                            <span class="font-size-sm text-muted">Front end developer</span>
                                        </div>

                                        <div class="ml-3 align-self-center">
                                            <div class="dropdown">
                                                <a href="#" class="text-default dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-more2"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Start chat</a>
                                                    <a href="#" class="dropdown-item"><i class="icon-phone2"></i> Make a call</a>
                                                    <a href="#" class="dropdown-item"><i class="icon-mail5"></i> Send mail</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="#" class="dropdown-item"><i class="icon-stars"></i> Rate trainer</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="media">
                                        <a href="#" class="mr-3">
                                            <img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
                                        </a>

                                        <div class="media-body">
                                            <div class="font-weight-semibold">Vince Satmann</div>
                                            <span class="font-size-sm text-muted">UX expert</span>
                                        </div>

                                        <div class="ml-3 align-self-center">
                                            <div class="dropdown">
                                                <a href="#" class="text-default dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-more2"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Start chat</a>
                                                    <a href="#" class="dropdown-item"><i class="icon-phone2"></i> Make a call</a>
                                                    <a href="#" class="dropdown-item"><i class="icon-mail5"></i> Send mail</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="#" class="dropdown-item"><i class="icon-stars"></i> Rate trainer</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="media">
                                        <a href="#" class="mr-3">
                                            <img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="36" height="36" class="rounded-circle" alt="">
                                        </a>

                                        <div class="media-body">
                                            <div class="font-weight-semibold">Jason Leroy</div>
                                            <span class="font-size-sm text-muted">SEO specialist</span>
                                        </div>

                                        <div class="ml-3 align-self-center">
                                            <div class="dropdown">
                                                <a href="#" class="text-default dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-more2"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Start chat</a>
                                                    <a href="#" class="dropdown-item"><i class="icon-phone2"></i> Make a call</a>
                                                    <a href="#" class="dropdown-item"><i class="icon-mail5"></i> Send mail</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="#" class="dropdown-item"><i class="icon-stars"></i> Rate trainer</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- /our trainers -->


                        <!-- Upcoming courses -->
                        <div class="card">
                            <div class="card-header bg-transparent header-elements-inline">
                                <span class="text-uppercase font-size-sm font-weight-semibold">Upcoming courses</span>
                                <div class="header-elements">
                                    <div class="list-icons">
                                        <a class="list-icons-item" data-action="collapse"></a>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <ul class="media-list">
                                    <li class="media">
                                        <div class="mr-3">
                                            <h5 class="text-center text-success mb-0">02</h5>
                                            <div class="font-size-sm text-muted line-height-1">Nov</div>
                                        </div>

                                        <div class="media-body">
                                            <span class="font-weight-semibold">Web development strategy</span> course by <a href="#">James Franko</a>
                                            <ul class="list-inline list-inline-dotted mt-1 mb-0">
                                                <li class="list-inline-item"><span class="text-muted">120 hours</span></li>
                                                <li class="list-inline-item">
                                                    <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                                    <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                                    <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                                    <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                                    <i class="icon-star-half font-size-base text-warning-300"></i>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>

                                    <li class="media">
                                        <div class="mr-3">
                                            <h5 class="text-center text-success mb-0">15</h5>
                                            <div class="font-size-sm text-muted line-height-1">Nov</div>
                                        </div>

                                        <div class="media-body">
                                            <span class="font-weight-semibold">Business development</span> course by <a href="#">Jeremy Victorino</a>
                                            <ul class="list-inline list-inline-dotted mt-1 mb-0">
                                                <li class="list-inline-item"><span class="text-muted">40 hours</span></li>
                                                <li class="list-inline-item">
                                                    <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                                    <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                                    <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                                    <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                                    <i class="icon-star-half font-size-base text-warning-300"></i>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>

                                    <li class="media">
                                        <div class="mr-3">
                                            <h5 class="text-center text-success mb-0">01</h5>
                                            <div class="font-size-sm text-muted line-height-1">Dec</div>
                                        </div>

                                        <div class="media-body">
                                            <span class="font-weight-semibold">Digital marketing</span> course by <a href="#">Monica Smith</a>
                                            <ul class="list-inline list-inline-dotted mt-1 mb-0">
                                                <li class="list-inline-item"><span class="text-muted">100 hours</span></li>
                                                <li class="list-inline-item">
                                                    <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                                    <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                                    <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                                    <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                                    <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>

                                    <li class="media">
                                        <div class="mr-3">
                                            <h5 class="text-center text-success mb-0">15</h5>
                                            <div class="font-size-sm text-muted line-height-1">Dec</div>
                                        </div>

                                        <div class="media-body">
                                            <span class="font-weight-semibold">User experience design</span> course by <a href="#">Buzz Brenson</a>
                                            <ul class="list-inline list-inline-dotted mt-1 mb-0">
                                                <li class="list-inline-item"><span class="text-muted">90 hours</span></li>
                                                <li class="list-inline-item">
                                                    <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                                    <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                                    <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                                    <i class="icon-star-empty3 font-size-base text-warning-300"></i>
                                                    <i class="icon-star-half font-size-base text-warning-300"></i>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>

                                    <li class="media">
                                        <div class="mr-3">
                                            <h5 class="text-center text-success mb-0">20</h5>
                                            <div class="font-size-sm text-muted line-height-1">Dec</div>
                                        </div>

                                        <div class="media-body">
                                            <span class="font-weight-semibold">Digital painting</span> course by <a href="#">Zachary Willson</a>
                                            <ul class="list-inline list-inline-dotted mt-1 mb-0">
                                                <li class="list-inline-item"><span class="text-muted">120 hours</span></li>
                                                <li class="list-inline-item">
                                                    <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                                    <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                                    <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                                    <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                                    <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>

                                    <li class="media">
                                        <div class="mr-3">
                                            <h5 class="text-center text-success mb-0">04</h5>
                                            <div class="font-size-sm text-muted line-height-1">Jan</div>
                                        </div>

                                        <div class="media-body">
                                            <span class="font-weight-semibold">Financial analysis</span> course by <a href="#">Dori Laperriere</a>
                                            <ul class="list-inline list-inline-dotted mt-1 mb-0">
                                                <li class="list-inline-item"><span class="text-muted">60 hours</span></li>
                                                <li class="list-inline-item">
                                                    <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                                    <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                                    <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                                    <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                                    <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- /upcoming courses -->

                    </div>
                    <!-- /sidebar content -->

                </div>
                <!-- /right sidebar component -->

            </div>
            <!-- /inner container -->

        </div>
        <!-- /content area -->
@endsection