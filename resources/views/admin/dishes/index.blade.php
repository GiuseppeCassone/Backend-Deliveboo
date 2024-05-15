@extends('layouts.app')

@section('content')

<div class="container">
    <ul>
        @foreach ($dishes as $dish)
            {{-- <li>
                {{ $dish->img }}
            </li> --}}
            <li>
                {{ $dish->name }}
                <a href="{{ route('admin.dishes.show', $dish) }}" class="btn btn-primary">Visualizza dettagli del piatto</a>
            </li>
            {{-- <li>
                {{ $dish->description }}
            </li>
            <li>
                {{ $dish->ingredients }}
            </li>
            <li>
                {{ $dish->is_visible? 'Disponibile' : 'Non disponibile' }}
            </li> --}}
        @endforeach
        
    </ul>
    <a class="btn btn-secondary" href="{{route('admin.dishes.create')}}">Inserisci un Nuovo Piatto</a>
</div>
    



@endsection