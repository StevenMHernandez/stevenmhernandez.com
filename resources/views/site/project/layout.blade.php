<!DOCTYPE html>
<html>
<head>
@include('layout._head')
</head>

<body>
    <header>
        <div><a href="/">Steven <span class="accent">M.</span> Hernandez</a></div>
    </header>
    <nav>
        <ul>
            <li><a href="/">Portfolio.</a></li>
            <li><a href="/#contact">Contact.</a></li>
            <li><a href="https://blog.stevenhdesigns.com/">Blog.</a></li>
            <li class="right"><a href="https://www.linkedin.com/in/stevenmhernandez"><i class="fa fa-linkedin-square"></i></a></li>
            <li class="right"><a href="https://github.com/StevenMHernandez"><i class="fa fa-github"></i></a></li>
        </ul>
    </nav>
    <article>

        @yield('content')

    </article>

    @include('layout._contact_form')

<footer>
    Steven M. Hernandez<br/>
    {{ env('SITE_TAGLINE') }} <span class="accent">- Richmond, VA</span><br/><br/>
    <a href="/#contact">Contact</a>.
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="/assets/js/scroll.js"></script>
@include('layout._analytics')
</body>
</html>
