<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('thirdparty/jquery/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('thirdparty/air-datepicker/js/datepicker.min.js') }}"></script>
    <script src="{{ asset('thirdparty/air-datepicker/js/i18n/datepicker.en.js') }}"></script>
    <script src="{{ asset('thirdparty/air-datepicker/js/i18n/datepicker.nl.js') }}"></script>
    <script src="{{ asset('thirdparty/bootstrap-4.1.3/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('thirdparty/air-datepicker/css/datepicker.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('thirdparty/bootstrap-4.1.3/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    @yield('content')
</body>
</html>