@extends('layouts.app')

@section('content')
<div class="personal_color2 personal_height d-flex align-items-center justify-content-center">
    <div class="container">
        <h2 class="fs-4 text-light py-4 text-center animate__animated animate__fadeInDown">
            {{ __('Dashboard') }}
        </h2>
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card personal_color3 text-light animate__animated animate__fadeInUp">
                    <div class="card-header text-center fw-bold fs-4">{{ __('Dashboard utente') }}</div>
                    <div class="card-body">
                        <p class="fs-5 m-3">
                            Questa è la tua dashboard di gestione. Da qui, puoi gestire i tuoi ordini, aggiornare il tuo menu, controllare le statistiche delle vendite e molto altro.
                        </p>

                        <div class="card-body d-flex flex-column align-items-start gap-3">
                            @if (session('status'))
                            <div class="alert alert-success animate__animated animate__fadeIn" role="alert">
                                {{ session('status') }}
                            </div>
                            @endif
                            <a href="{{route('admin.restaurant.index')}}" class="btn btn-light fw-bold animate__animated animate__fadeInLeft">Vai al tuo ristorante</a>
                        </div>
                    </div>
                </div>
            </div>
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

    .personal_color3 {
        background-color: #006769; 
        border-radius: 15px;
    }

    .card {
        border-radius: 15px;
        padding: 20px;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        transition: transform 0.3s;
    }

    .card:hover {
        transform: scale(1.02);
    }

    .btn-light {
        background-color: #f8f9fa;
        border: none;
        padding: 10px 20px;
        border-radius: 20px;
        transition: background-color 0.3s, transform 0.3s;
    }

    .btn-light:hover {
        background-color: #e2e6ea;
        transform: translateX(5px);
    }

    .animate__fadeInDown {
        animation: fadeInDown 0.5s;
    }

    .animate__fadeInUp {
        animation: fadeInUp 0.5s;
    }

    .animate__fadeInLeft {
        animation: fadeInLeft 0.5s;
    }
</style>
@endsection
