<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ config('app.name') }}@yield('page-title')</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/backend/css/icons/icomoon/styles.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/backend/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/backend/css/bootstrap_limitless.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/backend/css/layout.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/backend/css/components.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/backend/css/colors.min.css') }}" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script src="{{ asset('assets/backend/js/main/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/backend/js/main/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/backend/js/plugins/loaders/blockui.min.js') }}"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script src="{{ asset('assets/backend/js/plugins/forms/styling/uniform.min.js') }}"></script>

    <script src="{{ asset('assets/backend/js/app.js') }}"></script>
    <script src="{{ asset('assets/backend/js/demo_pages/login.js') }}"></script>
    <!-- /theme JS files -->

</head>

<body>

<!-- Page content -->
        @yield('content')
<!-- /page content -->

</body>
</html>
