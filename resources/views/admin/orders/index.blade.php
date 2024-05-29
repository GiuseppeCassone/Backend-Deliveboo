@extends('layouts.app')

@section('content')

<div class="container py-4">

    <h1>Riepilogo Ordini</h1>

    <a class="btn btn-primary" href="{{route('admin.orders.statistics.index')}}">Visualizza le statistiche</a>

    @if($orders->isEmpty())
        <p>Nessun Ordine</p>

    @else
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Data</th>
                <th scope="col">Nome</th>
                <th scope="col">Cognome</th>
                <th scope="col">Email</th>
                <th scope="col">Indirizzo</th>
                <th scope="col">Telefono</th>
                <th scope="col">Totale Ordine</th>
                <th scope="col">Dettagli</th>
            </tr>
        </thead>
        <tbody>
                @foreach ($orders as $order)
                <tr>
                <th scope="row">{{$order->created_at}}</th>
                <td>{{$order->customer_name}}</td>
                <td>{{$order->customer_lastname}}</td>
                <td>{{$order->customer_email}}</td>
                <td>{{$order->customer_address}}</td>
                <td>{{$order->customer_phone}}</td>
                <td>{{$order->order_total}}€</td>
                <td><a class="btn btn-success" href="{{route('admin.orders.show', $order)}}">Dettagli</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif       
           
    <a class="btn btn-primary" href="{{route('admin.restaurant.index')}}">Torna al Ristorante</a>

    
</div>
    



@endsection