@extends('layouts.app')

@section('content')

<div class="container">

    <a href="{{route('admin.restaurant.index')}}" class="btn btn-color mt-3 personal_color3back animate__animated animate__fadeIn">Torna al tuo ristorante</a>
</div>
<div class="container d-flex justify-content-center py-5">
    <div class="card mb-3 personal_color3 text-light w-75 animate__animated animate__fadeIn">
        <div class="row g-0">
            <div class="col-md-5">
                <img src="{{ !empty($dish->img) ? (str_contains($dish->img, 'https') ? $dish->img : asset('storage/' . $dish->img)) : asset('my-img/fallback-dish.png') }}" class="img-fluid rounded-start h-100 object-fit-cover" alt="immagine">
            </div>
            <div class="col-md-7">
                <div class="card-body">
                    <h5 class="card-title fs-1">{{ $dish->name }}</h5>
                    <p class="card-text"><strong>Descrizione del piatto:</strong><br>{{ $dish->description }}</p>
                    <p class="card-text"><strong>Ingredienti:</strong><br>{{ $dish->ingredients }}</p>
                    <p class="card-text"><strong>Prezzo:</strong><br>€{{ $dish->price }}</p>
                    <p class="card-text"><strong>Disponibilità del piatto:</strong><br>{{ $dish->is_visible? 'Disponibile' : 'Non disponibile' }}</p>
                </div>
                <div class="p-3">

                    <a href="{{route('admin.dishes.index')}}" class="btn personal_button">Torna al tuo menù</a>

                    <a href="{{route('admin.dishes.edit', $dish)}}" class="btn btn-warning">Modifica</a>
                            
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Elimina
                    </button>
        
                    
                </div>
            </div>
        </div>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content personal_color3 text-light">

                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Elimina il piatto</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body ">
                        Sei sicuro di voler eliminare il piatto "{{$dish->name}}"?
                    </div>


                    <div class="modal-footer">

                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Annulla</button>
                        <form action="{{route('admin.dishes.destroy', $dish)}}" method="POST">
                            @csrf
                            @method("DELETE")

                            <button class="btn btn-danger">Elimina</button>
                        </form>

                    </div>

                </div>
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

    .personal_button {
        background-color: #9DDE8B;
        
    }
    .personal_button:hover {
        background-color: #658e5a;
    }

    .btn-color{
        background-color: #40A578;
        border-color: #006769;
    }

    .btn-color:hover{
        background-color: #006769;
        color: white
    }

    
</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

@endsection