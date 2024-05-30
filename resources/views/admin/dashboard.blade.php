@extends('layouts.app')

@section('content')
<div class="personal_height d-flex align-items-center justify-content-center ">
    <div class="container ">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card personal_color3 text-light animate__animated animate__fadeIn">
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
                            <a href="{{route('admin.restaurant.index')}}" class="btn btn-light">Vai al tuo ristorante</a>
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
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.5);
    }

</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

@endsection
