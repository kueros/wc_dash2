@extends('layouts.app2')

@section('content')
<style>
    .left-half {
        background-color: black;
        height: 100vh;
        /* Asegura que ocupa toda la altura de la pantalla */
        display: flex;
        align-items: center;
        /* Centra verticalmente */
        justify-content: center;
        /* Centra horizontalmente */
    }

    .right-half {
        background-color: white;
        height: 100vh;
        /* Asegura que ocupa toda la altura de la pantalla */
        display: flex;
        align-items: center;
        /* Centra verticalmente */
        justify-content: center;
        /* Centra horizontalmente */
    }

    .left-half img {
        max-width: 100%;
        /* Ajusta el tamaño de la imagen */
        height: auto;
    }
</style>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 left-half">
            <img src="vendor/adminlte/dist/img/iflowEcommerceLogo.png" alt="Logo">
        </div>
        <div class="col-md-6 right-half">
            <div class="card" style="width:90%;">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-warning">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection