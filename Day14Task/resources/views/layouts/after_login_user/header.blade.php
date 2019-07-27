<html>
<head>
    <title>@yield('title')</title>
    @stack('css')
    <link rel="stylesheet" href="{{asset('css/cosmo_bootstrap.css')}}">
</head>
<body>
<nav class="container-fluid">
    <div class="navbar navbar-default">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ route('user.home') }}">Mobo Hub</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="{{ route('user.dashBoard') }}">Dashboard <span class="sr-only">(current)</span></a></li>
                <li><a href="#">Gallery</a></li>

            </ul>

            <ul class="nav navbar-nav navbar-right">
                <form class="navbar-form navbar-left" role="search" action="{{ route('user.searchRow') }}" method="post">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <input type="text" class="form-control" name="Key" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
                <li><a href="{{ route('user.home') }}">LogOut</a></li>
            </ul>
        </div>
    </div>
</nav>
