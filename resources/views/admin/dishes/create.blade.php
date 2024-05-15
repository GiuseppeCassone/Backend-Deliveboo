@extends('layouts.app')

@section('content')

<div class="container">
    <h1>inserisci un nuovo piatto</h1>

    <form action="{{route('admin.dishes.store')}}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-2">
            <label for="name" class="form-label">Nome piatto: </label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
              value="{{ old('name') }}" required>
            @error('name')
            <div class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
        </div>

        <div class="mb-2">
            <label for="img" class="form-label">Immagine: </label>
            <input type="file" class="form-control @error('img') is-invalid @enderror" id="img" name="img"
              value="{{ old('img') }}" required>
            @error('img')
            <div class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
        </div>

        <div class="mb-2">
            <label for="price" class="form-label">Prezzo: </label>
            <input type="number" class="form-control @error('price') is-invalid @enderror" id="price" name="price"
              value="{{ old('price') }}" required>
            @error('price')
            <div class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
        </div>

        <div class="mb-2">
            <label for="description" class="form-label">Descrizione: </label>
            <input type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description"
              value="{{ old('description') }}" required>
            @error('description')
            <div class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
        </div>

        <div class="mb-2">
            <label for="ingredients" class="form-label">Ingredienti: </label>
            <input type="text" class="form-control @error('ingredients') is-invalid @enderror" id="ingredients" name="ingredients"
              value="{{ old('ingredients') }}" required>
            @error('ingredients')
            <div class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
        </div>

        <div class="form-check mb-2">
            <input class="form-check-input" name="is_visible" type="checkbox" value="0" id="is_visible">
            <label class="form-check-label" for="is_visible">
              NON VISIBILE
            </label>
        </div>

        <button type="submit" class="btn btn-primary">AGGIUNGI</button>

    </form>
</div>


@endsection