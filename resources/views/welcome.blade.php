@extends('layouts.app')

@section('content')
<div class="jumbotron p-5 personal_color2 personal_height">
    <div class="container py-5 text-center">
        <h1 class="display-4 fw-bold text-white mb-4 animate__animated animate__fadeIn">
            Benvenuto, sei nell'interfaccia di gestione del tuo ristorante
        </h1>
        
        <div class="mt-4 animate__animated animate__fadeInUp">
            @guest
            <a class="btn btn-outline-light btn-lg me-2" href="{{ route('login') }}">{{ __('Accedi al tuo WOW ristorante') }}</a>
            @if (Route::has('register'))
            <a class="btn btn-outline-light btn-lg" href="{{ route('register') }}">{{ __('Registrati e diventa WOW') }}</a>
            @endif
            @else
            <div class="btn-group">
                <a class="btn btn-light" href="{{ url('dashboard') }}">{{__('Il tuo ristorante')}}</a>
                <a class="btn btn-light" href="{{ url('profile') }}">{{__('Il tuo profilo')}}</a>
                <a class="btn btn-light" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
            </div>
            
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
            @endguest
        </div>
    </div>
</div>

<style>
    .personal_color2 {
        background: linear-gradient(135deg, #40A578, #1B8761);
    }

    .personal_height {
        height: calc(100vh - 130px);
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .btn-outline-light {
        border: 2px solid #ffffff;
    }

    .btn-group .btn {
        margin-right: 10px;
    }

    @media (max-width: 576px) {
        .btn-group .btn {
            margin-bottom: 10px;
            width: 100%;
        }
    }
</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
@endsection
