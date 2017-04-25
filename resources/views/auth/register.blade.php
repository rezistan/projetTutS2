@extends('layouts.app')

@section('content')
<div class="ui container">
    <div class="ui centered grid">
        <div class="ten wide column">
            @if (count($errors) > 0)
            <div class="ui error message">
                <div class="header">Des erreurs sont survenues.</div>
                <ul class="list">
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <h1 class="ui top attached header">Register</h1>
            <div class="ui attached segment">
                <form class="ui form" role="form" method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}

                    <div class="inline columned field{{ $errors->has('name') ? ' error' : '' }}">
                        <label for="name" class="four wide field">Name</label>
                        <input id="name" class="twelve wide field" type="text" name="name" value="{{ old('name') }}" required autofocus>

                    </div>

                    <div class="inline columned field{{ $errors->has('email') ? ' error' : '' }}">
                        <label for="email" class="four wide field">E-Mail Address</label>
                        <input id="email" type="email" class="twelve wide field" name="email" value="{{ old('email') }}" required>
                    </div>

                    <div class="inline columned field{{ $errors->has('password') ? ' error' : '' }}">
                        <label for="password" class="four wide field">Password</label>
                        <input id="password" type="password" class="twelve wide field" name="password" required>
                    </div>

                    <div class="inline columned field">
                        <label for="password-confirm" class="four wide field">Confirm Password</label>
                        <input id="password-confirm" type="password" class="twelve wide field" name="password_confirmation" required>
                    </div>

                    <button class="ui green button" type="submit">Register</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection