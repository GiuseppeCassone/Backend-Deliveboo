@extends('layouts.app')

@section('content')
<div class="container py-5 d-flex justify-content-center flex-column align-items-center  animate__animated animate__fadeIn">

  <h1 class="mb-2 mb-3 personal_color3back">Bentornato {{$user->name}}, questo è il tuo ristorante:</h1>

  <div class="card mb-3 personal_color3 text-light">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="{{str_contains($restaurant->img, 'https') ? $restaurant->img : asset('storage/' . $restaurant->img)}}" class="img-fluid rounded-start h-100 object-fit-cover" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">{{$restaurant->name}}</h5>
          <p class="card-text"><strong>Descrizione:</strong><br>{{$restaurant->description}}</p>
        <p class="card-text"><strong>Indirizzo:</strong><br>{{$restaurant->address}}</p>
        <p class="card-text"><strong>P. Iva:</strong><br>{{$restaurant->vat}}</p>
        <p class="card-text"><strong>Numero di Telefono:</strong><br>{{$restaurant->phone_number}}</p>
        <a href="{{ route('admin.dishes.index') }}" class="btn btn-light">Visualizza il tuo menù</a>
        <a href="{{ route('admin.orders.index') }}" class="btn btn-warning">Visualizza i tuoi ordini</a>
        </div>
      </div>
    </div>
  </div>
    
</div>


<style>

  .personal_color2 {
      background-color: #40A578;
  }

  .personal_color3 {
    background-color: #006769; 
  }

  .personal_color3back {
    color: #006769; 
  }

  .card {
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.5);
  }

</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
@endsection