<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- Primary Meta Tags -->
    <title> @yield('title')- Rima Agricultural Commodity Exchange</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="title" content="Rima Agricultural Commodity Exchange">
    <meta name="author" content="Mahmud Bakale">
    <meta name="description" content="Agricultural Commodity Exchange">
    <meta name="keywords" content="Commodity Exchange, Rima, Agricultural Exchange, Mahmud Bakale" />
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <link rel="shortcut icon" href="{{ asset('img/favicon.png')}}">
</head>

<body data-theme="default" data-layout="fluid" data-sidebar-position="left" data-sidebar-behavior="sticky">
    <div class="wrapper">
        @include('partials.sidebar')
        <div class="main">
            @include('partials.menu')
        @yield('content')
        @include('partials.foot')
        </div>
    </div>
    <script src="{{ asset('js/admin.js') }}" type="text/javascript"></script>
</body>
</html>