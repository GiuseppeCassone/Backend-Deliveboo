@extends('layouts.app')

@section('content')

<div class="personal_height">
    <div class="container py-5">
        <ul class="list-unstyled animate__animated animate__fadeInDown ">
            @foreach ($dishes as $dish)
                <li class="d-flex justify-content-between py-2 personal_color3">
                    <strong>{{ $dish->name }}</strong>
                    <a href="{{ route('admin.dishes.show', $dish) }}" class="btn btn-dark personal_color3back">Visualizza dettagli del piatto</a>
                </li>
                <hr class="mb-3">
            @endforeach
        </ul>
        <a class="btn btn-dark personal_color3back animate__animated animate__fadeInUp" href="{{route('admin.dishes.create')}}">Inserisci un Nuovo Piatto</a>
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
