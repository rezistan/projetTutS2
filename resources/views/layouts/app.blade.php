<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="/css/semantic.css" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">
</head>
<body>
    <div id="app">
        <header>
            <nav class="ui menu">
                <div class="ui container">
                    <div class="header item">
                        <!-- Branding Image -->
                        <a class="navbar-brand" href="{{ url('/') }}">
                            {{ config('app.name', 'Laravel') }}
                        </a>
                    </div>
                    <div class="item">
                        <a href="#">Actualités</a>
                    </div>
                    <div class="item">
                        <a href="#">Forum</a>
                    </div>
                    <div class="item">
                        <a href="#">Streams</a>
                    </div>
                    <div class="item">
                        <a href="">La Boutique</a>
                    </div>
                    <div class="ui dropdown item">
                        Jouer à ... <i class="dropdown icon"></i>
                        <div class="menu" role="menu">
                            <div class="item">
                                <a href="#">Agario</a>
                            </div>
                        </div>
                    </div>
                    <div class="right menu">
                        @if (Auth::guest())
                        <div class="item"><a href="{{ route('login') }}">Login</a></div>
                        <div class="item"><a href="{{ route('register') }}">Register</a></div>
                        @else
                        <div class="item"><a href=""><img src="" class="ui avatar image" alt="avatar">  Mon Profil</a></div>
                        <a href="" class="item"><img src="" class="ui avatar image" alt="avatar">  La Boutique ({{Auth::user()->player->rubis}} R)</a>
                        <a class="messenger item" href="">
                            <i class="mail outline large icon" style="line-height: 0.95em;"></i>
                            <span class="ui tiny red label">10</span>
                        </a>
                        <div class="ui dropdown item">
                            <i class="user icon"></i> {{ Auth::user()->name }} <i class="dropdown icon"></i>
                            <div class="menu" role="menu">
                                <div class="item">
                                    <a href="">Mon Profil</a>
                                </div>
                                <div class="divider"></div>
                                <div class="item">
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </nav>
        </header>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
</html>
