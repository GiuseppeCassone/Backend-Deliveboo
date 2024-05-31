@extends('layouts.app')

@section('content')

<div class="container py-4 personal_color3 animate__animated animate__fadeIn">
    <h1>Riepilogo Ordine #{{ $order->id }}</h1>

    <div class="card mb-4 personal_color3">
        <div class="card-header">
            Dettagli Ordine
        </div>
        <div class="card-body ">
            <p><strong>ID Ordine:</strong><span class="text-dark"> {{ $order->id }}</span></p>
            <p><strong>Creato il:</strong><span class="text-dark"> {{ $order->created_at->format('d/m/Y') }}</span></p>
            <p><strong>Nome Cliente:</strong><span class="text-dark"> {{ $order->customer_name }}</span></p>
            <p><strong>Cognome Cliente:</strong><span class="text-dark"> {{ $order->customer_lastname }}</span></p>
            <p><strong>Indirizzo Cliente:</strong><span class=text-dark> {{ $order->customer_address }}</span></p>
            <p><strong>Mail Cliente:</strong><span class="text-dark"> {{ $order->customer_email }}</span></p>
            <p><strong>Telefono Cliente:</strong><span class="text-dark"> {{ $order->customer_phone }}</span></p>
            <p><strong>Totale:</strong><span class="text-dark"> €{{ number_format($order->order_total, 2) }}</span></p>
        </div>
    </div>

    <div class="card personal_color3">
        <div class="card-header">
            Piatti nell'Ordine
        </div>
        <div class="card-body">
            <ul class="list-group">
                @foreach($order->dishes as $dish)
                    <li class="list-group-item personal_color3">
                        <div class="row">
                            <div class="col-md-8">
                                <strong>{{ $dish->name }}</strong>
                                <p><span class="text-dark">{{ $dish->description }}</span></p>
                            </div>
                            <div class="col-md-2">
                                <p><strong>Quantità:</strong><span class="text-dark"> {{ $dish->pivot->quantity }}</span></p>
                            </div>
                            <div class="col-md-2">
                                <p><strong>Prezzo:</strong><span class="text-dark"> €{{ number_format($dish->price * $dish->pivot->quantity, 2) }}</span></p>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

    <a class="btn btn-dark personal_color3back my-3" href="{{route('admin.orders.index')}}">Torna agli ordini</a>
    

</div>

<style>

    .personal_color3 {
        color: #006769; 
    }

    .personal_color3back {
        background-color: #006769; 
    }

</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

@endsection