@extends('layouts.app')

@section('content')
<div class="personal_color2 personal_height">
    <div class="container">
        <h2 class="fs-4 text-light py-4">
            {{ __('Dashboard') }}
        </h2>
        <div class="row justify-content-center">
            <div class="col">
                <div class="card personal_color3 text-light">
                    <div class="card-header">{{ __('Dashboard utente') }}</div>
                    <p class="fs-4 m-3">
                        Questa è la tua dashboard di gestione. Da qui, puoi gestire i tuoi ordini, aggiornare il tuo menu, controllare le statistiche delle vendite e molto altro.
                    </p>

                    <div class="card-body d-flex flex-column align-items-start gap-3">
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
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

<style>

    .personal_color2 {
        background-color: #40A578;
    }

    .personal_height {
        height: calc(100vh - 130px);
    }

    .personal_width {
        width: 100wh;
    }

    .personal_color3 {
        background-color: #006769; 
    }

</style>
@endsection
