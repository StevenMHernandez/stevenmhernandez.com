<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>

        <link href="/assets/css/style.css" rel="stylesheet" type="text/css"/>
        <link href="/assets/css/admin.css" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/css?family=Inconsolata:400,700" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1"/>

        <link rel="shortcut icon" href="/assets/images/logo.png">
        <link href="/assets/images/logo.png" rel="apple-touch-icon-precomposed"/>
        <title>@yield('title')</title>
    </head>
    <body id="admin">
        <header>
            <div><a href="{{route('home')}}">Steven<span class="accent">Hernandez</span></a></div>
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
