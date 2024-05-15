@extends('layouts.app')

@section('content')
<div class="container py-5">

    <h1>{{$user->name}}</h1>

    <div class="card" style="width: 18rem;">
        {{-- <img src="..." class="card-img-top" alt="..."> --}}
        <div class="card-body">
          <h5 class="card-title">{{$restaurant->name}}</h5>
          <p class="card-text">{{$restaurant->description}}</p>
          <p class="card-text">{{$restaurant->address}}</p>
          <p class="card-text">{{$restaurant->vat}}</p>
          <p class="card-text">{{$restaurant->phone_number}}</p>

          <a href="{{ route('admin.dishes.index') }}" class="btn btn-primary">Visualizza il tuo menu</a>
        </div>
    </div>

    
</div>
@endsection