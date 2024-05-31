@extends('layouts.app')

@section('content')

<div class="personal_height">
  <div class="container p-4 personal_color3back animate__animated animate__fadeIn">

    <a href="{{ route('admin.dishes.show', $dish) }}" class="btn btn-dark mt-3 mb-3 personal_color3">Torna al tuo piatto</a>
      
    <h1>Modifica il seguente piatto</h1>


      <form action="{{route('admin.dishes.update', $dish)}}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')

          <div class="mb-2">
              <label for="name" class="form-label">Nome piatto: <span class="text-danger">*</span></label>
              <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                value="{{ old('name') ?? $dish->name }}" required>
              @error('name')
              <div class="invalid-feedback">
                {{$message}}
              </div>
              @enderror
          </div>

          <div class="mb-2">
              <label for="img" class="form-label">Immagine: </label>
              <input type="file" class="form-control @error('img') is-invalid @enderror" id="img" name="img"
                value="{{ old('img') ?? $dish->img  }}">
              @error('img')
              <div class="invalid-feedback">
                {{$message}}
              </div>
              @enderror
          </div>

          <div class="mb-2">
              <label for="price" class="form-label">Prezzo: <span class="text-danger">*</span></label>
              <input type="number" step="0.01" min="0" class="form-control @error('price') is-invalid @enderror" id="price" name="price"
                value="{{ old('price') ?? $dish->price  }}" required>
              @error('price')
              <div class="invalid-feedback">
                {{$message}}
              </div>
              @enderror
          </div>

          <div class="mb-2">
              <label for="description" class="form-label">Descrizione: </label>
              <input type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description"
                value="{{ old('description')  ?? $dish->description  }}" required>
              @error('description')
              <div class="invalid-feedback">
                {{$message}}
              </div>
              @enderror
          </div>

          <div class="mb-2">
              <label for="ingredients" class="form-label">Ingredienti: <span class="text-danger">*</span></label>
              <input type="text" class="form-control @error('ingredients') is-invalid @enderror" id="ingredients" name="ingredients"
                value="{{ old('ingredients')  ?? $dish->ingredients  }}" required>
              @error('ingredients')
              <div class="invalid-feedback">
                {{$message}}
              </div>
              @enderror
          </div>

          <div class="form-check mb-2">
              <input class="form-check-input" name="is_visible" type="checkbox" value="0" id="is_visible" @if (old('is_visible') || $dish->is_visible) checked @endif>
              <label class="form-check-label" for="is_visible">
                NON VISIBILE
              </label>
          </div>

          <button type="submit" class="btn btn-dark mt-2 personal_color3">Modifica Piatto</button>

      </form>

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

  .personal_color3back {
      color: #006769; 
  }

</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>


@endsection