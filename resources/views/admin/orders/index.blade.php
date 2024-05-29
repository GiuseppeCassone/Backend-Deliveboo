@extends('layouts.app')

@section('content')

<div class="personal_color2 personal_height text-light">
    <div class="container p-4">

        <h1>Riepilogo Ordini</h1>

        <table class="table animate__animated animate__fadeInDown mt-3">
            <thead>
                <tr>
                    <th scope="col">Data</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Cognome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Indirizzo</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Totale Ordine</th>
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
                    </tr>
                    <!-- <tr> -->
                    <!-- <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    </tr>
                    <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                    </tr> -->
                    @endforeach
                </tbody>
            </table>
                
            
        
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

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

@endsection