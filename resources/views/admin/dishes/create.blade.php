@extends('layouts.app')

@section('content')

<div class="container">
    <h1>inserisci un nuovo piatto</h1>

    <form action="{{route('admin.dishes.store')}}" method="POST" enctype="multipart/form-data" id="dish-form">
        @csrf

        <div class="mb-2">
            <label for="name" class="form-label">Nome piatto: <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
            <span id="name-error" class="text-danger" style="display: none;">Il nome del piatto è obbligatorio.</span>
            @error('name')
            <div class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
        </div>

        <div class="mb-2">
            <label for="img" class="form-label">Immagine: </label>
            <input type="file" class="form-control" id="img" name="img" value="{{ old('img') }}">
            <span id="img-error" class="text-danger" style="display: none;">Inserisci un'immagine valida.</span>
            @error('img')
            <div class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
        </div>

        <div class="mb-2">
            <label for="price" class="form-label">Prezzo: <span class="text-danger">*</span></label>
            <input type="number" step="0.01" min="0" class="form-control" id="price" name="price" value="{{ old('price') }}" required>
            <span id="price-error" class="text-danger" style="display: none;">Il prezzo deve essere un numero valido.</span>
            @error('price')
            <div class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
        </div>

        <div class="mb-2">
            <label for="description" class="form-label">Descrizione: </label>
            <input type="text" class="form-control" id="description" name="description" value="{{ old('description') }}" >
            <span id="description-error" class="text-danger" style="display: none;">La descrizione è obbligatoria.</span>
            @error('description')
            <div class="invalid-feedback">
              {{$message}}
            </div>
            @enderror
        </div>

        <div class="mb-2">
            <label for="ingredients" class="form-label">Ingredienti: <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="ingredients" name="ingredients" value="{{ old('ingredients') }}" required>
            <span id="ingredients-error" class="text-danger" style="display: none;">Gli ingredienti sono obbligatori.</span>
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

<script>
document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('dish-form');
    const name = document.getElementById('name');
    const img = document.getElementById('img');
    const price = document.getElementById('price');
    const description = document.getElementById('description');
    const ingredients = document.getElementById('ingredients');

    const nameError = document.getElementById('name-error');
    const imgError = document.getElementById('img-error');
    const priceError = document.getElementById('price-error');
    const descriptionError = document.getElementById('description-error');
    const ingredientsError = document.getElementById('ingredients-error');

    function validateField(input, errorElement) {
        input.addEventListener('input', function () {
            if (input.value.trim() === '') {
                errorElement.style.display = 'block';
            } else {
                errorElement.style.display = 'none';
            }
        });
    }

    validateField(name, nameError);
    validateField(description, descriptionError);
    validateField(ingredients, ingredientsError);

    img.addEventListener('change', function () {
        if (img.files.length === 0) {
            imgError.style.display = 'block';
        } else {
            imgError.style.display = 'none';
        }
    });

    price.addEventListener('input', function () {
        if (isNaN(price.value) || parseFloat(price.value) < 0) {
            priceError.style.display = 'block';
        } else {
            priceError.style.display = 'none';
        }
    });

    form.addEventListener('submit', function (event) {
        if (name.value.trim() === '') {
            nameError.style.display = 'block';
            event.preventDefault();
        }

        if (description.value.trim() === '') {
            descriptionError.style.display = 'block';
            event.preventDefault();
        }

        if (ingredients.value.trim() === '') {
            ingredientsError.style.display = 'block';
            event.preventDefault();
        }

        if (img.files.length === 0) {
            imgError.style.display = 'block';
            event.preventDefault();
        }

        if (isNaN(price.value) || parseFloat(price.value) < 0) {
            priceError.style.display = 'block';
            event.preventDefault();
        }
    });
});
</script>

@endsection
