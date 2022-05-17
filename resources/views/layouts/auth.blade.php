<!DOCTYPE html>
<html lang="en">
<head> 
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- Primary Meta Tags -->
<title> @yield('title')- Agile Project</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="title" content="Agile Project Sign In">
<meta name="author" content="Mahmud Bakale">
<meta name="description" content="Cynox IT Agile Project">
<meta name="keywords" content="Cynox IT, Kano State, Agile Project, Mahmud Bakale" />

<!-- Favicon -->
<link rel="apple-touch-icon" sizes="120x120" href="../../assets/img/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="../../assets/img/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="../../assets/img/favicon/favicon-16x16.png">
<link rel="manifest" href="../../assets/img/favicon/site.webmanifest">
<link rel="mask-icon" href="../../assets/img/favicon/safari-pinned-tab.svg" color="#ffffff">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="theme-color" content="#ffffff">
<link type="text/css" href="{{asset('css/app.css')}}" rel="stylesheet">
</head>
<body>       
    <main>
        @yield('content')
    </main>
    <script src="{{asset('js/app.js')}}" type="text/javascript"></script>
</body>
</html>
