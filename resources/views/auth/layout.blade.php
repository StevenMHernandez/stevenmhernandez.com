<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <link href="/assets/css/style.css" rel="stylesheet" type="text/css"/>
        <link href='http://fonts.googleapis.com/css?family=Raleway:900,100,500' rel='stylesheet' type='text/css'>
        <meta name="viewport" content="width=device-width, initial-scale=1 "/>
        <link rel="shortcut icon" href="/assets/images/logo.png">
        <link href="/assets/images/logo.png" rel="apple-touch-icon-precomposed"/>
        <title>Graphic Design, Web Design and Web Development. - Steven Hernandez - Richmond and Midlothian, VA</title>
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
