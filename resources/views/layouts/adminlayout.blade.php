<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Blog</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/admin/main.css') }}" rel="stylesheet">
</head>
<body>


<div id="app">
    <div class="wrap">
        <header class="main-header">
            <div class="header-container">
                @include('layouts.hederNavigation')
            </div>
        </header>
        <main class="main-container">
            <div class="aside">
                <h3>Categories</h3>
                <div class="nav-aside">
                    <ul>
                        <li><a href="#"><span>Art Direction</span></a></li>
                        <li><a href="#"><span>Photography</span></a></li>
                        <li><a href="#"><span>3D Modelling</span></a></li>
                        <li><a href="#"><span>Web Design</span></a></li>
                    </ul>
                </div>

            </div>
            <div class="wrap-content">
                <h1>Table</h1>
                <div class="content">
                    @yield('content')
                </div>
            </div>
        </main>
    </div>
</div>
</body>
</html>


