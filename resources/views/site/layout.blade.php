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
    <nav>
        <ul>
            <li><a href="/#about">About.</a></li>
            <li><a href="/#portfolio">Portfolio.</a></li>
            <li><a href="/#contact">Contact.</a></li>
        </ul>
    </nav>
    <article>
        <h1 id="about">About. <span class="accent">Steven Hernandez</span></h1>
        <p>My name is Steven Hernandez. I am a Graphic Designer, Web Developer and student studying at Virginia Commonwealth University in Richmond, VA. I work in both <a href="/portfolio/for/web-design"/>web design & web programming</a> as well as in <a href="/portfolio/for/print-design/">print design</a>.</p>
        <h1 id="portfolio">Portfolio. <span class="accent">Steven Hernandez</span></h1>


        @yield('content')

        <h1 id="contact">Contact. <span class="accent">Steven Hernandez</span></h1>
        <form name="contact" method="post" action="/contact.php">
            <label for="name">Name.</label>
            <input id="name" name="name" type="text" required>
            <label for="email">Email.</label>
            <input id="email" name="email" type="email" required/>
                <label for="info">Message</label>
            <textarea id="info" name="info"></textarea>
            <input type="submit" value="Send Message."/>
        </form>
        <p>Call me at : <a href="tel:8042510199">(804) 251-0199</a></p>
        <p>or reach me at : <a href="mailto:contact@stevenHdesigns.com">contact@stevenHdesigns.com</a>
        </p>
    </article>

<footer>
    Steven<wbr/><span class="accent">Hernandez</span> 2014<br/>
    Graphic Design, Web Design and Web Development. <span class="accent">- Richmond and Midlothian, VA</span><br/><br/>
    <a href="/#contact">Contact</a>.
</footer>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="/assets/js/scroll.js"></script>
@include('layout._analytics')
</body>
</html>
