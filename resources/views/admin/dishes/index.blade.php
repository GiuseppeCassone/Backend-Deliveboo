@extends('layouts.app')

@section('content')

<div class="personal_color2 personal_height">
    <div class="container">
        <ul class="py-5">
            @foreach ($dishes as $dish)
                {{-- <li>
                    {{ $dish->img }}
                </li> --}}
                <li class="d-flex justify-content-between py-2 text-light">
                    {{ $dish->name }}
                    <a href="{{ route('admin.dishes.show', $dish) }}" class="btn btn-light">Visualizza dettagli del piatto</a>
                </li>
                <hr>
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
        background-color: #9DDE8B;
    }
  
  </style>



@endsection