<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>

        <link href="/assets/css/style.css" rel="stylesheet" type="text/css"/>
        <link href="/assets/css/admin.css" rel="stylesheet" type="text/css"/>
        <link href='http://fonts.googleapis.com/css?family=Raleway:900,100,500' rel='stylesheet' type='text/css'>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>

        <link rel="shortcut icon" href="/assets/images/logo.png">
        <link href="/assets/images/logo.png" rel="apple-touch-icon-precomposed"/>
        <title>@yield('title')</title>
    </head>
    <body id="admin">
        <header id="header">
            <div>Steven<wbr/><span class="accent">Hernandez</span></div>
        </header>
        <nav>
            <ul>
                <li><a href="{{route('admin.project.index')}}">Projects.</a></li>
                <li><a href="{{route('admin.portfolio.index')}}">Portfolios.</a></li>
                <li><a href="{{route('logout')}}">Logout.</a></li>
            </ul>
        </nav>
        <article>

            <h1>@yield('title')</h1>

            @yield('content')

        </article>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        @yield('scripts')
        @include('layout._analytics')
    </body>
</html>
