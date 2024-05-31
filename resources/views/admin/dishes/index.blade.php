@extends('layouts.app')

@section('content')

<div class="personal_height">
    <div class="container d-flex justify-content-between mt-3">
        <a href="{{route('admin.restaurant.index')}}" class="btn btn-dark personal_color3back animate__animated animate__fadeIn">Torna al tuo ristorante</a>
        <a class="btn btn-dark personal_color3back animate__animated animate__fadeIn" href="{{route('admin.dishes.create')}}">Inserisci un nuovo piatto</a>
    </div>
    <h1 class="container p-3 animate__animated animate__fadeIn personal_color3">Il tuo menù</h1>
    <div class="container py-5">
        <ul class="list-unstyled animate__animated animate__fadeIn">
            @foreach ($dishes as $dish)
                <li class="d-flex justify-content-between py-2 personal_color3">
                    <div class="col-6 d-flex align-items-center">
                        <strong>{{ $dish->name }}</strong>
                    </div>
                    <div class="col-6 d-flex justify-content-end">
                        <a href="{{ route('admin.dishes.show', $dish) }}" class="btn btn-warning">Visualizza dettagli del piatto</a>
                    </div>
                </li>
                <hr class="mb-3">
            @endforeach
        </ul>
    </div>
</div>
    
<style>

    .personal_color3 {
        color: #006769; 
    }

    .personal_color3back {
        background-color: #006769; 
    }

    .personal_color2 {
        background-color: #40A578;
    }
  
    .personal_height {
        height: calc(100vh - 130px);
    }
  
    .personal_width {
        width: 100wh;
    }

</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

@endsection
