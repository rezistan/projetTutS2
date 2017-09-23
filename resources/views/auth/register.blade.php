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

                    <div class="inline columned field{{ $errors->has('firstname') ? ' error' : '' }}">
                        <label for="firstname" class="four wide field">Firstname</label>
                        <input id="firstname" class="twelve wide field" type="text" name="firstname" value="{{ old('firstname') }}" required autofocus>
                    </div>

                    <div class="inline columned field{{ $errors->has('lastname') ? ' error' : '' }}">
                        <label for="lastname" class="four wide field">Lastname</label>
                        <input id="lastname" class="twelve wide field" type="text" name="lastname" value="{{ old('lastname') }}" required>
                    </div>

                    <div class="inline columned field{{ $errors->has('email') ? ' error' : '' }}">
                        <label for="email" class="four wide field">E-Mail Address</label>
                        <input id="email" type="email" class="twelve wide field" name="email" value="{{ old('email') }}" required>
                    </div>

                    <div class="inline columned field{{ $errors->has('job') ? ' error' : '' }}">
                        <label for="job" class="four wide field">Job</label>
                        <select id="job" class="twelve wide field" name="job" required>
                            <option value="1">Médecin</option>
                            <option value="2">Infirmi(ère/er)</option>
                        </select>
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