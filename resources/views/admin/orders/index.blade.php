@extends('layouts.app')

@section('content')
  <div class="container p-4 personal_color3back animate__animated animate__fadeIn">

    <h1>Riepilogo Ordini</h1>

    <div class="container pt-3 d-flex justify-content-between">
      <a class="btn btn-dark personal_color3" href="{{route('admin.restaurant.index')}}">Torna al ristorante</a>
      <a class="btn btn-dark personal_color3" href="{{route('admin.orders.statistics.index')}}">Visualizza le statistiche</a>
    </div>

    <div class="table-responsive"> <table class="table mt-3 table-striped"> <thead>
          <tr class="text-center">
            <th class="personal_color3back" scope="col">Data</th>
            <th class="personal_color3back" scope="col">Nome</th>
            <th class="personal_color3back d-none d-lg-table-cell" scope="col">Cognome</th>
            <th class="personal_color3back d-none d-lg-table-cell" scope="col">Email</th>
            <th class="personal_color3back d-none d-lg-table-cell" scope="col">Indirizzo</th>
            <th class="personal_color3back d-none d-lg-table-cell" scope="col">Telefono</th>
            <th class="personal_color3back text-center" scope="col">Totale Ordine</th>
            <th class="personal_color3back" scope="col">Dettagli</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($orders as $order)
          <tr class="text-center">
            <th scope="row">{{$order->created_at->format('d/m/Y')}}</th>
            <td>{{$order->customer_name}}</td>
            <td class="d-none d-lg-table-cell">{{$order->customer_lastname}}</td>
            <td class="d-none d-lg-table-cell">{{$order->customer_email}}</td>
            <td class="d-none d-lg-table-cell">{{$order->customer_address}}</td>
            <td class="d-none d-lg-table-cell">{{$order->customer_phone}}</td>
            <td>{{$order->order_total}}€</td>
            <td><a class="btn btn-warning" href="{{route('admin.orders.show', $order)}}">Dettagli</a></td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>

  </div>


<style>

    .personal_color3back {
        color: #006769 !important; 
    }

    .personal_color3 {
        background-color: #006769; 
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