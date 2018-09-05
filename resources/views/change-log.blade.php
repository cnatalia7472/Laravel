@extends('layouts.dashboard')
@section('page-title', ' - Change Log')
@section('content')
<!-- Page header -->
<div class="page-header page-header-light">
    <div class="page-header-content header-elements-md-inline">
        <div class="page-title d-flex">
            <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">{{ config('app.name') }}</span> - Change Log</h4>
            <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
        </div>
    </div>

    <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
        <div class="d-flex">
            <div class="breadcrumb">
                <a href="{{ route('dashboard') }}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                <a href="#" class="breadcrumb-item">System Information</a>
                <span class="breadcrumb-item active">Change Log</span>
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

    <!-- Inner container -->
    <div class="d-flex align-items-start flex-column flex-md-row">

        <!-- Left content -->
        <div class="w-100 order-2 order-md-1">

            <!-- Version 2.0.1 -->
            <div class="card" id="2_0_1">
                <div class="card-header header-elements-inline">
                    <h5 class="card-title">Version 2.0.1</h5>
                    <div class="header-elements">
                        <span class="text-muted">June 28, 2018</span>

                        <div class="list-icons ml-3">
                            <a class="list-icons-item" data-action="collapse"></a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <p class="mb-3">Quick update that includes bug fixes for version 2.0, the most important one is IE10/11 browser support - now all layouts work fine in IE10+. Here is a list of changes:</p>

                    <pre class="language-javascript"><code>// # List of fixed
// ------------------------------

[fixed]  Flexbox layout is broken in IE10 and IE11
[fixed]  Right aligned custom checkers are misaligned
[fixed]  Multiselect menu should have 100% width by default
[fixed]  Sectioned sidebar with custom background color has wrong background in collapsed mode
</code></pre>
                </div>
            </div>
            <!-- /version 2.0.1 -->


            <!-- Initial release -->
            <div class="card" id="2_0">
                <div class="card-header header-elements-inline">
                    <h5 class="card-title">Version 2.0</h5>
                    <div class="header-elements">
                        <span class="text-muted">June 20, 2018</span>

                        <div class="list-icons ml-3">
                            <a class="list-icons-item" data-action="collapse"></a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <p class="mb-3">Bootstrap 4 version has its own changelog, because 2 Bootstrap version are completely different. Major part of components have been customized in order to support BS4 and flexbox layout, so components from BS3 can be used in this version. Since all components are the same in all layouts, the template now supports 1 main layout and 4 child layouts - this means only 1st layout includes all components, child layouts include only layout-related files. This makes maintenance easy and fast. Main highlights:</p>

                    <div class="row mb-3">
                        <div class="col-sm-4">
                            <ul class="list">
                                <li>Adapted 3rd party components</li>
                                <li>Latest versions of all main libraries</li>
                                <li>Built with SCSS</li>
                                <li>Improved gulp tasks</li>
                                <li>Based on flexbox model</li>
                                <li>Single set of assets for all layouts</li>
                                <li>Moved to modular JS pattern</li>
                            </ul>
                        </div>
                        <div class="col-sm-4">
                            <ul class="list">
                                <li>All bugfixes and improvements from BS3 are included</li>
                                <li>Updated all examples</li>
                                <li>High attention to details</li>
                                <li>Improved file structure</li>
                                <li>Improved starter kit</li>
                                <li>Improved vertical navigation</li>
                                <li>Improved multi level navigation in navbar</li>
                            </ul>
                        </div>
                        <div class="col-sm-4">
                            <ul class="list">
                                <li>Mega menu has been extended</li>
                                <li>Improved performance</li>
                                <li>Removed old and unmaintained libraries</li>
                                <li>Single SCSS configuration file with all components</li>
                                <li>Improved theming support</li>
                                <li>Simple style editing</li>
                                <li>... and much more</li>
                            </ul>
                        </div>
                    </div>

                    <div><strong>Important note:</strong> since every single line of code is completely different from Bootstrap 3 version, there's no any migration guide: markup, class names, source files, pre-processors and logic are different. But both versions have their own extensive documentation. Bootstrap 3 is officially in maintenance mode since 2017 and from now on I am mainly focused on extending and improving BS4 version.</div>
                </div>
            </div>
            <!-- /initial release -->

        </div>
        <!-- /left content -->


        <!-- Right sidebar component -->
        <div class="sidebar-sticky w-100 w-md-auto order-1 order-md-2">
            <div class="sidebar sidebar-light sidebar-component sidebar-component-right sidebar-expand-md">
                <div class="sidebar-content">

                    <!-- Navigation -->
                    <div class="card">
                        <div class="card-header bg-transparent header-elements-inline">
                            <span class="text-uppercase font-size-sm font-weight-semibold">{{ config('app.name') }} Details</span>
                        </div>

                        <div class="card-body">
                            <a href="http://kopyov.ticksy.com" class="btn bg-danger-400 btn-block" target="_blank"><i class="icon-lifebuoy mr-2"></i> Support</a>
                            <a href="http://kopyov.ticksy.com" class="btn bg-info-400 btn-block" target="_blank"><i class="icon-bug2 mr-2"></i> Report a Bug</a>
                        </div>

                        <ul class="nav nav-sidebar nav-scrollspy">
                            <li class="nav-item-header font-size-xs line-height-xs text-uppercase pt-0">Version history</li>
                            <li class="nav-item nav-item-submenu">
                                <a href="#" class="nav-link">Version 2.0 <span class="text-muted font-weight-normal ml-auto">28.06.2018</span></a>
                                <ul class="nav nav-group-sub d-block">
                                    <li class="nav-item"><a href="#2_0_1" class="nav-link">Version 2.0.1  <span class="text-muted font-weight-normal ml-auto">28.06.2018</span></a></li>
                                    <li class="nav-item"><a href="#2_0" class="nav-link">Initial release  <span class="text-muted font-weight-normal ml-auto">20.06.2018</span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- /navigation -->

                </div>
            </div>
        </div>
        <!-- /right sidebar component -->

    </div>
    <!-- /inner container -->

</div>
<!-- /content area -->
@endsection