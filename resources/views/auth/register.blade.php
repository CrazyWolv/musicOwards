@extends('layout')

@section('content')
<div class="main-container page-content">

    <div class="main-title">Inscription</div>

    <form method="POST" action="{{ route('register') }}" class="form-default" style="max-width:400px; margin: 0 auto">
        @csrf

        <div class="input-group">
            <label for="name" class="main-label">{{ __('Name') }}</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="input-group">
            <label for="email" class="main-label">{{ __('Email Address') }}</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="input-group">
            <label for="password-confirm" class="main-label">{{ __('Confirm Password') }}</label>

            <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            </div>
        </div>

        <div class="input-group">
                <button type="submit" class="btn btn-primary btn-icon-left">
                    {{ __('Register') }}
                </button>
        </div>

    </form>

</div>
@endsection