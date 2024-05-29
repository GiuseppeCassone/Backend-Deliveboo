@extends('layouts.app')

@section('content')
<div class="personal_color2">


  <div class="container py-5">

      <h1 class="mb-2 text-light">Bentornato {{$user->name}}</h1>

      <div class="card mb-3 personal_color3 text-light">
      
        <img src="{{str_contains($restaurant->img, 'https') ? $restaurant->img : asset('storage/' . $restaurant->img)}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{$restaurant->name}}</h5>
          <p class="card-text"><strong>Descrizione:</strong><br>{{$restaurant->description}}</p>
          <p class="card-text"><strong>Indirizzo:</strong><br>{{$restaurant->address}}</p>
          <p class="card-text"><strong>P. Iva:</strong><br>{{$restaurant->vat}}</p>
          <p class="card-text"><strong>Numero di Telefono:</strong><br>{{$restaurant->phone_number}}</p>
          <a href="{{ route('admin.dishes.index') }}" class="btn btn-light">Visualizza il tuo menu</a>
          <a href="{{ route('admin.orders.index') }}" class="btn btn-warning">Visualizza i tuoi ordini</a>
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

  .card {
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.5);
  }

</style>
@endsection