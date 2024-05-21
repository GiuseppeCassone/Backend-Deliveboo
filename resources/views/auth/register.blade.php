@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registrati') }}</div>

                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data" action="{{ route('register') }}" onsubmit="validateForm(event)">
                        @csrf

                        <div class="mb-4 row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nome') }} <span class="text-danger">*</span></label>
                            <div class="col-md-6">
                                <input id="name" type="text" placeholder="Inserisci il tuo nome" maxlength="255" pattern="[A-Z a-z]+" title="Il tuo nome deve contenere solo lettere." class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autofocus>
                                <span><strong id="name-error" class="text-danger"></strong></span>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-4 row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }} <span class="text-danger">*</span></label>
                            <div class="col-md-6">
                                <input id="email" type="email" placeholder="Inserisci la tua E-mail" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}">
                                <span><strong id="email-error" class="text-danger"></strong></span>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-4 row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Password <span class="text-danger">*</span></label>
                            <div class="col-md-6">
                                <input id="password" type="password" placeholder="Inserisci una password" minlength="8" class="form-control @error('password') is-invalid @enderror" name="password">
                                <span id="password-error" class="text-danger"></span>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-4 row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Conferma la password</label>
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" placeholder="Conferma la password" title="Le due password non corrispondono." class="form-control" name="password_confirmation">
                                <span><strong id="confirm-password-error" class="text-danger"></strong></span>
                            </div>
                        </div>

                        <div class="mb-4 row">
                            <label for="restaurant_name" class="col-md-4 col-form-label text-md-right">{{ __('Nome del tuo ristorante') }} <span class="text-danger">*</span></label>
                            <div class="col-md-6">
                                <input id="restaurant_name" type="text" placeholder="Inserisci il nome del tuo ristorante" maxlength="200" class="form-control @error('restaurant_name') is-invalid @enderror" name="restaurant_name" value="{{ old('restaurant_name') }}">
                                <span><strong id="restaurant_name-error" class="text-danger"></strong></span>
                                @error('restaurant_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-4 row">
                            <label for="img" class="col-md-4 col-form-label text-md-right">{{ __('Immagine del ristorante') }}</label>
                            <div class="col-md-6">
                                <input id="img" type="file" class="form-control @error('img') is-invalid @enderror" name="img">
                                <span id="img-error" class="text-danger"></span>
                                @error('img')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-4 row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Descrizione del ristorante') }}</label>
                            <div class="col-md-6">
                                <input id="description" type="text" placeholder="Inserisci una breve descrizione del ristorante..." class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}">
                                <span id="description-error" class="text-danger"></span>
                                @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-4 row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Indirizzo del ristorante') }} <span class="text-danger">*</span></label>
                            <div class="col-md-6">
                                <input id="address" type="text" placeholder="Inserisci l'indirizzo del tuo ristorante" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}">
                                <span><strong id="address-error" class="text-danger"></strong></span>
                                @error('address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-4 row">
                            <label for="vat" class="col-md-4 col-form-label text-md-right">{{ __('P. IVA') }} <span class="text-danger">*</span></label>
                            <div class="col-md-6">
                                <input id="vat" type="text" placeholder="Inserisci la tua partita iva" maxlength="11" pattern="\d{11}" title="Il campo deve contenere esattamente 11 numeri." class="form-control @error('vat') is-invalid @enderror" name="vat" value="{{ old('vat') }}">
                                <span><strong id="vat-error" class="text-danger"></strong></span>
                                @error('vat')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-4 row">
                            <label for="phone_number" class="col-md-4 col-form-label text-md-right">{{ __('Numero di telefono') }}</label>
                            <div class="col-md-6">
                                <input id="phone_number" type="text" placeholder="Inserisci il tuo numero di telefono" maxlength="10" pattern="\d{10}" title="Il campo deve contenere esattamente 10 numeri." class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}">
                                <span id="phone_number-error" class="text-danger"></span>
                                @error('phone_number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="mb-2" for="typologies">Seleziona le tipologie del tuo ristorante <span class="text-danger">*</span></label>   
                            @if ($errors->has('typologies'))
                                <small class="text-danger fw-bold ms-2">
                                    {{ $errors->first('typologies') }}
                                </small>
                            @endif
                            <div class="d-flex gap-3 flex-wrap">
                                @foreach($typologies as $typology)
                                    <div class="form-check">
                                        <input 
                                            type="checkbox"
                                            name="typologies[]"
                                            value="{{$typology->id}}"
                                            class="form-check-input"
                                            id="typology-{{$typology->id}}"
                                            {{ in_array($typology->id, old('typologies', [])) ? 'checked' : '' }}
                                        >
                                        <label for="typology-{{$typology->id}}" class="form-check-label">{{$typology->type}}</label>
                                    </div>
                                @endforeach                                     
                            </div>
                            <span><strong id="typologies-error" class="text-danger"></strong></span>
                        </div>

                        <div class="mb-4 row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrati alla nostra piattaforma') }}
                                </button>
                            </div>
                        </div>

                        <div>
                            <small>
                                I campi contrassegnati dal simbolo <span class="text-danger">*</span> sono obbligatori.
                            </small>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function validateForm(event) {
        let isValid = true;

        // Validazione password
        const password = document.getElementById("password").value;
        const confirmPassword = document.getElementById("password-confirm").value;
        const confirmPasswordError = document.getElementById("confirm-password-error");

        if (password !== confirmPassword) {
            confirmPasswordError.innerText = "Le password non corrispondono.";
            isValid = false;
        } else {
            confirmPasswordError.innerText = "";
        }

        // Validazione nome
        const name = document.getElementById("name").value;
        const namePattern = /^[A-Za-z\s]+$/;
        const nameError = document.getElementById("name-error");

        if (!namePattern.test(name)) {
            nameError.innerText = "Il tuo nome è obbligatorio.";
            isValid = false;
        } else {
            nameError.innerText = "";
        }

        // Validazione email
        const email = document.getElementById("email").value;
        const emailError = document.getElementById("email-error");

        if (email === "") {
            emailError.innerText = "L'email è obbligatoria.";
            isValid = false;
        } else {
            emailError.innerText = "";
        }

        // Validazione nome ristorante
        const restaurantName = document.getElementById("restaurant_name").value;
        const restaurantNameError = document.getElementById("restaurant_name-error");

        if (restaurantName === "") {
            restaurantNameError.innerText = "Il nome del ristorante è obbligatorio.";
            isValid = false;
        } else {
            restaurantNameError.innerText = "";
        }

        // Validazione indirizzo
        const address = document.getElementById("address").value;
        const addressError = document.getElementById("address-error");

        if (address === "") {
            addressError.innerText = "L'indirizzo è obbligatorio.";
            isValid = false;
        } else {
            addressError.innerText = "";
        }

        // Validazione partita iva
        const vat = document.getElementById("vat").value;
        const vatPattern = /^\d{11}$/;
        const vatError = document.getElementById("vat-error");

        if (!vatPattern.test(vat)) {
            vatError.innerText = "La tua partita iva deve essere inserita.";
            isValid = false;
        } else {
            vatError.innerText = "";
        }

        // Validazione tipologie
        const typologies = document.querySelectorAll('input[name="typologies[]"]:checked');
        const typologiesError = document.getElementById("typologies-error");

        if (typologies.length === 0) {
            typologiesError.innerText = "Seleziona almeno una tipologia.";
            isValid = false;
        } else {
            typologiesError.innerText = "";
        }

        if (!isValid) {
            event.preventDefault();
        }
    }
</script>
@endsection
