<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Rima Agricultural Comodity Exchange') }} | Homepage</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>   
    {{-- <!-- Start Preloader Area -->
    <div class="preloader">
        <img class="spinner" src="assets/img/favicon.png" alt="">
    </div> --}}
    <!-- End Preloader Area -->
        
        @include('partials.header')

        @yield('content')

        @include('partials.footer')
    <div class="go-top"><i data-feather="arrow-up"></i></div>

		<!-- Dark/Light Toggle -->
		<div class="dark-version">
            <label id="switch" class="switch">
                <input type="checkbox" onchange="toggleTheme()" id="slider">
                <span class="slider round"></span>
            </label>
        </div>
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>
