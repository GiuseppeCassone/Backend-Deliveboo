@extends('layouts.app')

@section('content')
<div class="p-4 personal_height personal_width d-flex align-items-center justify-content-center">
    <div class="card personal_color3 text-light animate__animated animate__fadeIn">
        <div class="card-header text-center fw-bold fs-4">{{ __('Accesso') }}</div>

        <div class="card-body">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mb-4 row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Indirizzo E-Mail') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="mb-4 row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="mb-4 row">
                    <div class="col-md-6 offset-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">
                                {{ __('Ricordami') }}
                            </label>
                        </div>
                    </div>
                </div>

                <div class="mb-4 row mb-0">
                    <div class="col-md-8 offset-md-4 d-flex align-items-center">
                        <button type="submit" class="btn btn-light me-2">
                            {{ __('Accesso') }}
                        </button>
                        @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Hai dimenticato la password? (BRAVO)') }}
                        </a>
                        @endif
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<style>
    .personal_height {
        height: calc(100vh - 130px);
    }

    .personal_width {
        width: 100%;
    }

    .personal_color3 {
        background-color: #006769;
    }


    .btn-light {
        background-color: #40A578;
        color: white;
        border: none;
        padding: 10px 20px;
        font-size: 16px;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }

    .btn-light:hover {
        background-color: #1B8761;
    }

    .btn-link {
        color: #40A578;
    }

    .btn-link:hover {
        color: #1B8761;
        text-decoration: underline;
    }
</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
@endsection
