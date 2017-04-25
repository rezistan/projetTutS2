@extends('layouts.app')

@section('content')
<div class="ui container">
    <div class="ui centered grid">
        <div class="ten wide column">
            <h1 class="ui top attached header">Login</h1>
            <div class="ui attached segment">
                <form class="ui form" role="form" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}

                    <div class="inline columned field{{ $errors->has('name') ? ' error' : '' }}">
                        <label for="name" class="four wide field">Username</label>
                        <input id="name" class="twelve wide field" type="text" name="name" value="{{ old('name') }}" required autofocus>

                        @if ($errors->has('name'))
                        <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="inline columned field{{ $errors->has('password') ? ' error' : '' }}">
                        <label for="password" class="four wide field">Password</label>
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
                                Remember Me
                            </label>
                        </div>
                    </div>

                    <button type="submit" class="ui green button">Login</button>
                    <a class="ui right floated label pull-right" href="{{ route('password.request') }}">
                        Forgot Your Password?
                    </a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
