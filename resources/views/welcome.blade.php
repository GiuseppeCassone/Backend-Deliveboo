@extends('layouts.app')
@section('content')

<div class="jumbotron p-5 personal_color2 personal_height">
    <div class="container py-5 text-center">
        <h1 class="display-4 fw-bold text-white">
            Benvenuto, sei nell'interfaccia di gestione del tuo ristorante
        </h1>
        
        <div class="mt-4">
            @guest
            <a class="btn btn-light btn-lg me-2" href="{{ route('login') }}">{{ __('Accedi al tuo WOW ristorante') }}</a>
            @if (Route::has('register'))
            <a class="btn btn-light btn-lg" href="{{ route('register') }}">{{ __('Registrati e diventa WOW') }}</a>
            @endif
            @else
            <div class="dropdown d-inline">
                
                    <a class="btn btn-light" href="{{ url('dashboard') }}">{{__('Il tuo ristorante')}}</a>
                    <a class="btn btn-light" href="{{ url('profile') }}">{{__('Il tuo profilo')}}</a>
                    <a class="btn btn-light" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                
            </div>
            @endguest
        </div>
    </div>
</div>

<style>
    .personal_color2 {
        background-color: #40A578;
        
    }

    .personal_height {
        height: calc(100vh - 130px);
    }

    .dropdown-menu {
        background-color: #f8f9fa;
    }
</style>
@endsection
