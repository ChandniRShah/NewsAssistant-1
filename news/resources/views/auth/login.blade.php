@extends('layouts.app')

@section('content')
    <div class="login-page">
        <div class="form">
            <form method="POST" action="{{ route('login') }}" class="login-form">
                @csrf
                <label for="email">{{ __('E-Mail Address') }}</label>
                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                       name="email" value="{{ old('email') }}" required autofocus>
                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert"><strong>{{ $errors->first('email') }}</strong></span>
                @endif
                <label for="password">{{ __('Password') }}</label>
                <input id="password" type="password"
                       class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"
                       required>
                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert"><strong>{{ $errors->first('password') }}</strong></span>
                @endif
                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} style="width: 10px;">
                <label for="remember">{{ __('Remember Me') }}</label>
                <button type="submit" class="btn btn-primary">{{ __('Login') }}</button>
                <br><br><br>
                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
            </form>
        </div>
    </div>
@endsection
