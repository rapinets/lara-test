<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="{{ asset('admin/main.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<div id="app">
    <div class="wrap">

        <header class="main-header">
            <div class="header-container">
                <div class="brand"><a href="#"><span>Neon</span></a></div>
                <nav class="main-menu">
                    <ul>
                        <li><a href="#"><span>Home</span></a></li>
                        <li><a href="#"><span>Pages</span></a></li>
                        <li><a href="#"><span>Portfolio</span></a></li>
                        <li><a href="#"><span>Blog</span></a></li>
                    </ul>
                </nav>
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
