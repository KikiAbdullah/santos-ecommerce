<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @include('layouts.head')

</head>

<body class="biolife-body">

    <!-- HEADER -->
    @include('layouts.header')

    <!--Hero Section-->
    @yield('hero')

    <!--Navigation section-->
    @yield('nav-section')

    <!-- Page Contain -->

    @yield('content')


    <!-- FOOTER -->
    @include('layouts.footer')

    <!-- Scroll Top Button -->
    <a class="btn-scroll-top"><i class="biolife-icon icon-left-arrow"></i></a>

    @include('layouts.footer-scripts')
</body>

</html>