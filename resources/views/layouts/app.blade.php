<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" type="image/x-icon" href="/edt.ico" >

    <!-- Styles -->
    <link href="/css/libs.css" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">

</head>
<body>
    <div id="app">
        <nav class="ui menu inverted navbar">
            <a href="" class="header item">Hopital Nord Ouest Villefranche</a>
            <div class="right menu">
                <div class="item">
                    <i class="user circle icon"></i>
                    <div class="ui input">
                        <input type="input" placeholder="Identifiant">
                    </div>
                </div>
                <div class="item">
                    <i class="lock icon"></i>
                    <div class="ui input">
                        <input type="password" placeholder="Mot de passe">
                    </div>
                </div>
                <div class="item">
                    <div class="ui buttons">
                        <button class="ui button">Se connecter</button>
                        <div class="or" data-text="ou"></div>
                        <button class="ui positive button">S'inscrire</button>
                    </div>
                </div>
            </div>
        </nav>
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
<footer>
    <div class="ui four column centered grid">
        <div class="two wide column">
            <p> <b>Hopital NORD OUEST VILLEFRANCHE </b></p>
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
