@extends('layouts.app')

@section('content')
    <div class="container p-4 personal_color3back">

    <h1>Riepilogo Ordini</h1>

    <a class="btn btn-primary" href="{{route('admin.orders.statistics.index')}}">Visualizza le statistiche</a>

        <table class="table animate__animated animate__fadeIn mt-3">
            <thead>
                <tr>
                    <th class="personal_color3back" scope="col">Data</th>
                    <th class="personal_color3back" scope="col">Nome</th>
                    <th class="personal_color3back" scope="col">Cognome</th>
                    <th class="personal_color3back" scope="col">Email</th>
                    <th class="personal_color3back" scope="col">Indirizzo</th>
                    <th class="personal_color3back" scope="col">Telefono</th>
                    <th class="personal_color3back" scope="col">Totale Ordine</th>
                </tr>
            </thead>
            <tbody>
                    @foreach ($orders as $order)
                    <tr>
                    <th scope="row">{{$order->created_at->format('d/m/Y')}}</th>
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
                
            <a class="btn btn-primary" href="{{route('admin.restaurant.index')}}">Torna al Ristorante</a>
        
    </div>

<style>

    .personal_color3back {
        color: #006769 !important; 
    }

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

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

@endsection