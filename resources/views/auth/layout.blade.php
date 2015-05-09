<!DOCTYPE html>
<html>
    <head>
        @include('layout._header')
    </head>

    <body>
        <header id="header">
            <div><a href="/">Steven<wbr/><span class="accent">Hernandez</span></a></div>
        </header>
        <article>

            @yield('content')

        </article>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script src="/assets/js/scroll.js"></script>
        @include('layout._analytics')
    </body>
</html>
