@extends('layouts.app')

@section('content')
<img class="ui centered image" src="/img/home/banniere.jpg" width="95%">
<br>
<div class="ui centered grid">
  <div class="three wide column">
    <div class="ui inverted vertical menu">
        <h3 class="active item">
            Services de Soins:
        </h3>
        <a class="item">
            Cardiologie
        </a>
        <a class="item">
            Pédiatrie
        </a>
        <a class="item">
            Gynécologie: échographie
        </a>
        <a class="item">
            Tests d'effort
        </a>
        <a class="item">
            Consultations
        </a>
        <a class="item">
            Holters
        </a>
        <a class="item">
            <u>Plus de services...</u>
        </a>
    </div>
  </div>
  <div class="eight wide column">
    <div class="ui top attached tabular menu">
    <a class="active item">
        Nouveau !
    </a>
    <a class="item">
        Consultations
    </a>
    <a class="item">
        Hospitalisation
    </a>
    <a class="item">
        Formation Personnel
    </a>
    </div>
    <div class="ui bottom attached segment">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed mollis eleifend ex, in pharetra risus viverra at. Etiam eu odio non tellus posuere tempor id nec urna. Nulla facilisi. Nam ac est vitae nunc laoreet efficitur. Morbi laoreet iaculis leo. Sed mollis orci mi, volutpat posuere massa euismod a. Nam dolor nisi, sollicitudin nec nunc nec, viverra varius augue. Nam non nulla augue. Quisque molestie nisl at lorem vestibulum, vitae molestie ligula aliquam. Curabitur quis blandit massa, eu feugiat est. Phasellus nibh eros, condimentum ut nunc vitae, luctus ornare orci. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam rhoncus consequat urna, nec pulvinar dolor vehicula non. Curabitur faucibus pretium egestas. Fusce erat urna, aliquam ut tincidunt ut, aliquet ut orci. Donec venenatis suscipit felis, et consequat felis efficitur porta.

      Donec sem massa, dignissim sed dapibus nec, placerat rhoncus urna. Suspendisse iaculis convallis ante quis malesuada. Mauris et imperdiet enim, vitae venenatis lacus. Nullam ultricies purus et elit imperdiet, sed vulputate orci feugiat. Vivamus bibendum eget tellus vitae blandit. Nulla egestas volutpat risus vel gravida. Suspendisse ultrices a lorem sed dictum. Quisque at est turpis. Nulla iaculis justo vitae erat dapibus, laoreet tincidunt risus tempus. Ut non nunc nec purus rutrum sodales.
    </div>
  </div>
  <div class="four wide column">
    <img class="ui centered image" src="/img/home/call15.jpg">
  </div>
</div>
<div class="ui centered grid">
    <div class="ui inverted top attached menu">
        <a class="active item">
            Qui sommes-nous ?
        </a>
    </div>

    <div class="ui inverted bottom attached segment">
        <iframe width="560" height="315"
            src="https://www.youtube.com/embed/47y4QBkl8YE">
        </iframe>
    </div>

</div>



<!-- Ancien formulaire masqué

<div class="ui container">
    <div class="ui centered grid">
        <div class="ten wide column">
            <h1 class="ui top attached header">Connexion</h1>
            <div class="ui attached segment">
                <form class="ui form" role="form" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}

                    <div class="inline columned field{{ $errors->has('email') ? ' error' : '' }}">
                        <label for="email" class="four wide field">Adresse email</label>
                        <input id="email" class="twelve wide field" type="text" name="email" value="{{ old('email') }}" required autofocus>

                        @if ($errors->has('email'))
                        <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="inline columned field{{ $errors->has('password') ? ' error' : '' }}">
                        <label for="password" class="four wide field">Mot de passe</label>
                        <input id="password" type="password" class="twelve wide field" name="password" required>

                        @if ($errors->has('password'))
                        <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="inline field">
                        <div class="ui checkbox">
                            <input type="checkbox" tabindex="0" name="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label>
                                Rester Connecté
                            </label>
                        </div>
                    </div>

                    <button type="submit" class="ui green button">Se connecter</button>
                    <a class="ui right floated label pull-right" href="{{ route('password.request') }}">
                        Mot de passe oublié ?
                    </a>
                </form>
            </div>
        </div>
    </div>
</div>
-->
@endsection