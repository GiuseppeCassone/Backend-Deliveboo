@extends('layouts.app')

@section('content')

<div class="container py-4">
    <h1>Riepilogo Ordine #{{ $order->id }}</h1>

    <div class="card mb-4">
        <div class="card-header">
            Dettagli Ordine
        </div>
        <div class="card-body">
            <p><strong>ID Ordine:</strong> {{ $order->id }}</p>
            <p><strong>Creato il:</strong> {{ $order->created_at->format('d/m/Y') }}</p>
            <p><strong>Nome Cliente:</strong> {{ $order->customer_name }}</p>
            <p><strong>Cognome Cliente:</strong> {{ $order->customer_lastname }}</p>
            <p><strong>Indirizzo Cliente:</strong> {{ $order->customer_address }}</p>
            <p><strong>Mail Cliente:</strong> {{ $order->customer_email }}</p>
            <p><strong>Telefono Cliente:</strong> {{ $order->customer_phone }}</p>
            <p><strong>Totale:</strong> €{{ number_format($order->order_total, 2) }}</p>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            Piatti nell'Ordine
        </div>
        <div class="card-body">
            <ul class="list-group">
                @foreach($order->dishes as $dish)
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-md-8">
                                <strong>{{ $dish->name }}</strong>
                                <p>{{ $dish->description }}</p>
                            </div>
                            <div class="col-md-2">
                                <p>Quantità: {{ $dish->pivot->quantity }}</p>
                            </div>
                            <div class="col-md-2">
                                <p>Prezzo: €{{ number_format($dish->price * $dish->pivot->quantity, 2) }}</p>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

    <a class="btn btn-primary my-3" href="{{route('admin.orders.index')}}">Torna agli ordini</a>
    

</div>


@endsection