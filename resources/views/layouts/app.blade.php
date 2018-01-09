<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" type="image/x-icon" href="/edt.ico">

    <!-- Styles -->
    <link href="/css/libs.css" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">

</head>
<body>
<div id="app">
    <nav class="ui menu inverted navbar">
        <a href="/" class="header item">Hopital Nord Ouest Villefranche</a>
        @if(Auth::guest())
            <div class="right menu">
                <div class="item">
                    <div class="ui container">
                        <div class="ui centered grid">
                            <form class="ui form" role="form" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}

                            <!-- ///////////////////////// -->
                                <div class="right menu">
                                    <div class="item">
                                        <i class="user circle icon"></i>
                                        <div class="ui input">
                                            <input id="email" type="input" placeholder="Email" name="email"
                                                   value="{{ old('email') }}" required autofocus>
                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="item">
                                        <i class="lock icon"></i>
                                        <div class="ui input">
                                            <input id="password" type="password" placeholder="Mot de passe"
                                                   class="field"
                                                   name="password" required>
                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="ui buttons">
                                            <button type="submit" class="ui green button">Se connecter</button>
                                            <div class="or" data-text="ou"></div>
                                            <a class="ui white button" href="{{ route('register') }}">
                                                S'inscrire
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- ///////////////////////// -->
                            </form>
                        </div>
                        <!-- End of login -->
                    </div>
                </div>
            </div>
        @else
            <div class="item">
                <form id="logout" action="{{route('logout')}}" method="POST"
                      style="display: none;">{{csrf_field()}}</form>
                <a class="ui blue button" href="{{route('logout')}}"
                   onclick="event.preventDefault();document.getElementById('logout').submit();">
                    <span class="name">Déconnexion</span>
                </a>
            </div>
        @endif
    </nav>
    @if(!Auth::guest())
        <div class="ui menu">
            <a href="/" class="header item">
                Accueil
            </a>
            <a class="item">
                Services de soins
            </a>
            <a class="active item" href="/home">
                Emploi du temps
            </a>
            <a class="item">
                A propos
            </a>
            <a class="item">
                Nous contacter
            </a>
            <div class="right menu">
                <div class="item">
                    <div class="ui icon input">
                        <input type="text" placeholder="Taper votre recherche...">
                        <i class="search link icon"></i>
                    </div>
                </div>
            </div>
        </div>
    @endif
    @if (session('message'))
        <div class="ui container">
            @foreach(session('message')->messages() as $key=>$value)
                <div class="ui {{$key}} message">
                    @if (count($value) > 1)
                        <ul class="list">
                            @foreach($value as $message)
                                <li>{{$message}}</li>
                            @endforeach
                        </ul>
                    @else
                        <div class="header">{{$value[0]}}</div>
                    @endif
                </div>
            @endforeach
        </div>
    @endif
    @yield('content')
</div>

<!-- Scripts -->
<script src="/js/app.js"></script>
</body>
<footer>
    <hr>
    <br>
    <div class="ui four column centered grid">
        <div class="two wide column">
            <p><b>Hopital NORD OUEST VILLEFRANCHE </b></p>
        </div>
        <div class="two wide column">

        </div>
        <div class="eight wide center aligned column">
            <a href="">Services de soins</a>
            <a href="">Emploi du temps</a>
            <a href="">A propos</a>
            <a href="">Nous contacter</a>
            <p>Copyright © 2017 IUT Lyon 1. Tous droits réservés.</p>
        </div>
        <div class="two wide  column">
            <button class="ui circular facebook icon button">
                <i class="facebook icon"></i>
            </button>
            <button class="ui circular twitter icon button">
                <i class="twitter icon"></i>
            </button>
            <button class="ui circular google plus icon button">
                <i class="google icon"></i>
            </button>
            <p>
                <i class="call icon">04.78.04.04.04</i>
            </p>
        </div>
    </div>
</footer>
</html>
