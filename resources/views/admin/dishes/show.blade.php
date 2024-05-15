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

        <a href="{{route('admin.dishes.edit', $dish)}}">Modifica Piatto</a>
    </div>
@endsection