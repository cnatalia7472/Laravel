{{-- Copyright (C) 2018 Panobit, Inc - All rights reserved.
Unauthorized duplication, transmission, or modification by any means is strictly prohibited.
Proprietary and confidential. This file belongs to the Revohub SaaS (Software-as-a-Service)
Panobit, Inc | legal@panobit.com | www.panobit.com --}}

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ config('app.name') }}@yield('page-title')</title>

    <!-- Global stylesheets -->
    @yield('css-before')
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/backend/css/icons/icomoon/styles.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/backend/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/backend/css/bootstrap_limitless.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/backend/css/layout.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/backend/css/components.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/backend/css/colors.min.css') }}" rel="stylesheet" type="text/css">
    @yield('css-after')
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script src="{{ asset('assets/backend/js/main/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/backend/js/main/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/backend/js/plugins/loaders/blockui.min.js') }}"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    @yield('javascript-before')
    <script src="{{ asset('assets/backend/js/app.js') }}"></script>
    <script src="{{ asset('assets/backend/js/pages/layout_fixed.js') }}"></script>
    <script src="{{ asset('assets/backend/js/plugins/ui/perfect_scrollbar.min.js') }}"></script>
    {{-- TODO: Need to figure out why this returns error 405
    <script src="{{ asset('assets/backend/js/plugins/extensions/session_timeout.min.js') }}"></script>
    <script src="{{ asset('assets/backend/js/timeout.js') }}"></script>  --}}
    @yield('javascript-after')
    <!-- /theme JS files -->

</head>

<body class="navbar-top">

@include('layouts._partials._navbar')

<!-- Page content -->
<div class="page-content">

    <!-- Main sidebar -->
    <div class="sidebar sidebar-dark sidebar-main sidebar-fixed sidebar-expand-md">

        <!-- Sidebar mobile toggler -->
        <div class="sidebar-mobile-toggler text-center">
            <a href="#" class="sidebar-mobile-main-toggle">
                <i class="icon-arrow-left8"></i>
            </a>
            Navigation
            <a href="#" class="sidebar-mobile-expand">
                <i class="icon-screen-full"></i>
                <i class="icon-screen-normal"></i>
            </a>
        </div>
        <!-- /sidebar mobile toggler -->

        <!-- Sidebar content -->
        <div class="sidebar-content">
            {{--
            <!-- User menu -->
            <div class="sidebar-user">
                <div class="card-body">
                    <div class="media">
                        <div class="mr-3">
                            <a href="#"><img src="{{ asset('assets/backend/images/placeholders/placeholder.jpg') }}" width="38" height="38" class="rounded-circle" alt=""></a>
                        </div>

                        <div class="media-body">
                            <div class="media-title font-weight-semibold">Victoria Baker</div>
                            <div class="font-size-xs opacity-50">
                                <i class="icon-pin font-size-sm"></i> &nbsp;Santa Ana, CA
                            </div>
                        </div>

                        <div class="ml-3 align-self-center">
                            <a href="#" class="text-white"><i class="icon-cog3"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /user menu -->
            --}}

        @include('layouts._partials._main-menu')
        </div>
        <!-- /sidebar content -->
    </div>
    <!-- /main sidebar -->

    <!-- Main content -->
    <div class="content-wrapper">
        @yield('content')

        <!-- /content area -->
        <!-- Footer -->
        <div class="navbar navbar-expand-lg navbar-light">
            <div class="text-center d-lg-none w-100">
                <button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-footer">
                    <i class="icon-unfold mr-2"></i>
                    Footer
                </button>
            </div>

            <div class="navbar-collapse collapse" id="navbar-footer">
					<span class="navbar-text">
						&copy; {{ config('company.copyright_start-date') }}-{{ config('company.copyright_end-date') }} {{ config('app.name') }} by
        <a target="_blank" href="{{ config('app.copyright-url') }}">{{ config('company.name') }}</a>
					</span>

                <ul class="navbar-nav ml-lg-auto">
                    <li class="nav-item"><a href="{{ route('sponsors') }}" class="navbar-nav-link"> Sponsors</a></li>
                    <li class="nav-item"><a href="{{ route('feedback') }}" class="navbar-nav-link"> Feedback</a></li>
                    <li class="nav-item"><a href="{{ route('privacy-policy') }}" class="navbar-nav-link"> Privacy Policy</a></li>
                    <li class="nav-item"><a href="{{ route('tos') }}" class="navbar-nav-link"> Terms of Service</a></li>
                    <li class="nav-item"><a href="{{ route('status') }}" class="navbar-nav-link"><i class="icon-info22 mr-2"></i> System Status</a></li>
                    <li class="nav-item"><a href="{{ route('support') }}" class="navbar-nav-link"><i class="icon-lifebuoy mr-2"></i> Support</a></li>
                </ul>
            </div>
        </div>
        <!-- /footer -->
    </div>
    <!-- /main content -->
</div>
<!-- /page content -->
</body>
@yield('modal')
</html>