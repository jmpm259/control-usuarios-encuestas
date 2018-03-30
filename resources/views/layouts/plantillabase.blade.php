<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <!-- Styles -->
    <link href="{{ asset('/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/plugins/theme/sb-admin-3/css/sb-admin.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/plugins/theme/sb-admin-3/css/morris.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/styles.css') }}" rel="stylesheet">
</head>

<body>
    <div id="wrapper">
        @include('layouts.nav')
        @include('layouts.breadcrumb')
            @yield('content')
        @include('layouts.footer')
    </div>
    <!-- Js -->
    <script src="{{ asset('/plugins/jquery/jquery.js') }}" type="text/javascript"></script>
	<script src="{{ asset('/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
</body>
</html>