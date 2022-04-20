@extends('layout')

@section('content')
<div class="main-container page-content">

    <div class="main-title">Connexion</div>

    <form method="POST" action="{{ route('login') }}" class="form-default" style="max-width:400px; margin: 0 auto">
        @csrf

        <div class="input-group">
            <label for="email" class="main-label">{{ __('Email Address') }}</label>

            <div>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="input-group">
            <label for="password" class="main-label">{{ __('Password') }}</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="input-group">
                <button type="submit" class="btn btn-primary btn-icon-left">
                    {{ __('Login') }}
                </button>
        </div>

    </form>

</div>
@endsection