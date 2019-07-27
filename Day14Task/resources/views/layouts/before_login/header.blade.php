<html>
<head>
    <title>@yield('title')</title>
    @stack('css')
    <link rel="stylesheet" href="{{asset('css/cosmo_bootstrap.css')}}">
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ route('user.home') }}">Mobo Hub</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="{{ route('user.about') }}">About</a></li>
                <li><a href="{{ route('user.contactUs') }}">Contact Us</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{ route('user.registerForm') }}">Register</a></li>
                <li><a href="{{ route('user.loginForm') }}">LogIn</a></li>
            </ul>
        </div>
    </div>
</nav>
