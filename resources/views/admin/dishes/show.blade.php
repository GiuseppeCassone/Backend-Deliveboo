@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <ul>
            <li>
                {{ $dish->name }}
            </li>
            <li>
                {{ $dish->description }}
            </li>
            <li>
                {{ $dish->ingredients }}
            </li>
            <li>
                {{ $dish->is_visible? 'Disponibile' : 'Non disponibile' }}
            </li>
        </ul>
    </div>
@endsection