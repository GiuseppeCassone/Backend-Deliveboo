@extends('layouts.app')

@section('content')

<div class="container">
    <ul class="py-5">
        @foreach ($orders as $order)
            {{-- <li>
                {{ $dish->img }}
            </li> --}}
            <li class="d-flex justify-content-between py-2">
                {{ $order->customer_name }}
                <!-- <a href="{{ route('admin.dishes.show', $dish) }}" class="btn btn-primary">Visualizza dettagli del piatto</a> -->
            </li>
            
           
        @endforeach
        
    </ul>
    <!-- <a class="btn btn-secondary" href="{{route('admin.dishes.create')}}">Inserisci un Nuovo Piatto</a> -->
</div>
    



@endsection