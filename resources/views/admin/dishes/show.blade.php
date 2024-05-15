@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <ul>
            <li>
                {{ $dish->name }}
            </li>
            <li>
                <img src="{{asset('storage/' . $dish->img)}}" alt="immagine">
            </li>
            <li>
                {{ $dish->description }}
            </li>
            <li>
                {{ $dish->ingredients }}
            </li>
            <li>
                $ {{ $dish->price }}
            </li>
            <li>
                {{ $dish->is_visible? 'Disponibile' : 'Non disponibile' }}
            </li>
        </ul>

        <!-- <a href="{{route('admin.dishes.edit', $dish)}}">Modifica Piatto</a> -->
        <div class="py-5">
            <a href="{{route('admin.dishes.edit', $dish)}}" class="btn btn-warning">Modifica</a>
                    
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Elimina
            </button>

            <a href="{{route('admin.dishes.index')}}" class="btn btn-primary">Torna ai tuoi piatti</a>
        </div>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content">

                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Elimina il piatto</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    Sei sicuro di voler eliminare il piatto? "{{$dish->name}}"
                </div>


                <div class="modal-footer">

                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
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
@endsection