<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="{{ asset('/js/index.js') }}"></script>
    <title>@yield('title')</title>
</head>
<body>
<header>
    <h1><a href="{{ url('/') }}">News Assist</a></h1>
    <nav>
        <ul>
            @if(auth()->user())
                <?php $user = auth()->user() ?>
                {{--{{ $user->name }}--}}
                {{--  what should be displayed if user is logged in --}}
                    <li><a href="{{ url('/') }}" >Home</a></li>
                    <li><a href="{{ route('newsCategory') }}">Categories</a></li>
                    <li><a href="{{ route('logout') }}">Sign out</a></li>
                    {{--<li><a href="{{ route('newsCategory') }}">Sign out</a></li>--}}
            @else
                <li><a href="{{ route('login') }}" >Log in</a></li>
                <li><a href="{{ route('register') }}">Sign up</a></li>
            @endif
        </ul>
    </nav>
</header>

<div class="contentWrapper">
    @yield('content')
</div>

<footer>
    <p>Copyright &copy 2018 NewsAssist. All Rights Reserved.</p>
</footer>
</body>
</html>
