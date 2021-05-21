<title>{{ config('app.name', 'Laravel') }}</title>

<!-- Icon -->
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.png') }}" />

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Cairo:400,600,700&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Poppins:600&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400i,700i" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Ubuntu&amp;display=swap" rel="stylesheet">

<!-- Styles -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/nice-select.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slick.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/main-color.css') }}">

<!-- Internal CSS -->
@yield('css')