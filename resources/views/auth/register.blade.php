@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registrati') }}</div>

                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data" action="{{ route('register') }}">
                        @csrf

                        <div class="mb-4 row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nome') }} <span class="text-danger">*</span></label>

                            <div class="col-md-6">
                                <input id="name" type="text" placeholder="Inserisci il tuo nome" maxlength="255" pattern="[A-Z a-z]+" title="Il tuo nome deve contenere solo lettere." class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autofocus required>
                                <span id="name-error" class="text-danger" style="display: none;">Il tuo nome deve contenere solo lettere.</span>

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
                                <input id="email" type="email" placeholder="Inserisci la tua E-mail" class="form-control @error('email') is-invalid @enderror" name="email" pattern="^[A-Za-z0-9.-']+@[A-Za-z.-]+.[A-Za-z]{2,}$" title="Inserisci una mail valida" value="{{ old('email') }}" required>
                                <span id="email-error" class="text-danger" style="display: none;">Inserisci una mail valida.</span>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-4 row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }} <span class="text-danger">*</span></label>

                            <div class="col-md-6">
                                <input id="password" type="password" placeholder="Inserisci una password" minlength="8" class="form-control @error('password') is-invalid @enderror" name="password" required>

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-4 row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Conferma la password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" placeholder="Conferma la password" minlength="8" title="Assicurati che la password corrisponda a quella inserita" class="form-control" name="password_confirmation" required>
                                <span id="password-match-error" class="text-danger" style="display: none;">Le password non corrispondono.</span>
                            </div>
                        </div>

                        <div class="mb-4 row">
                            <label for="restaurant_name" class="col-md-4 col-form-label text-md-right">{{ __('Nome del tuo ristorante') }} <span class="text-danger">*</span></label>

                            <div class="col-md-6">
                                <input id="restaurant_name" type="text" placeholder="Inserisci il nome del tuo ristorante" maxlength="200" class="form-control @error('restaurant_name') is-invalid @enderror" name="restaurant_name" value="{{ old('restaurant_name') }}" required>
                                <span id="restaurant_name-error" class="text-danger" style="display: none;">Inserisci il nome del tuo ristorante.</span>

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
                                <span id="description-error" class="text-danger" style="display: none;">Inserisci una breve descrizione del ristorante.</span>

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
                                <input id="address" type="text" placeholder="Inserisci l'indirizzo del tuo ristorante" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required>
                                <span id="address-error" class="text-danger" style="display: none;">Inserisci l'indirizzo del tuo ristorante.</span>

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
                                <input id="vat" type="text" placeholder="Inserisci la tua partita iva" maxlength="11" pattern="\d{11}" title="Il campo deve contenere esattamente 11 numeri." class="form-control @error('vat') is-invalid @enderror" name="vat" value="{{ old('vat') }}" required>
                                <span id="vat-error" class="text-danger" style="display: none;">Il campo deve contenere esattamente 11 numeri.</span>

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
                                <span id="phone-number-error" class="text-danger" style="display: none;">Il campo deve contenere esattamente 10 numeri.</span>

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
document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('form');

    const name = document.getElementById('name');
    const email = document.getElementById('email');
    const password = document.getElementById('password');
    const passwordConfirm = document.getElementById('password-confirm');
    const restaurantName = document.getElementById('restaurant_name');
    const address = document.getElementById('address');
    const vat = document.getElementById('vat');
    const phoneNumber = document.getElementById('phone_number');

    const nameError = document.getElementById('name-error');
    const emailError = document.getElementById('email-error');
    const passwordMatchError = document.getElementById('password-match-error');
    const restaurantNameError = document.getElementById('restaurant_name-error');
    const addressError = document.getElementById('address-error');
    const vatError = document.getElementById('vat-error');
    const phoneNumberError = document.getElementById('phone-number-error');

    function validateField(input, errorElement, pattern) {
        input.addEventListener('input', function () {
            if (!pattern.test(input.value)) {
                errorElement.style.display = 'block';
            } else {
                errorElement.style.display = 'none';
            }
        });
    }

    validateField(name, nameError, /^[A-Za-z\s]+$/);
    validateField(email, emailError, /^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/);
    validateField(vat, vatError, /^\d{11}$/);
    validateField(phoneNumber, phoneNumberError, /^\d{10}$/);

    restaurantName.addEventListener('input', function () {
        if (restaurantName.value.trim() === '') {
            restaurantNameError.style.display = 'block';
        } else {
            restaurantNameError.style.display = 'none';
        }
    });

    address.addEventListener('input', function () {
        if (address.value.trim() === '') {
            addressError.style.display = 'block';
        } else {
            addressError.style.display = 'none';
        }
    });

    passwordConfirm.addEventListener('input', function () {
        if (password.value !== passwordConfirm.value) {
            passwordMatchError.style.display = 'block';
        } else {
            passwordMatchError.style.display = 'none';
        }
    });

    form.addEventListener('submit', function (event) {
        if (password.value !== passwordConfirm.value) {
            event.preventDefault();
            passwordMatchError.style.display = 'block';
        } else {
            passwordMatchError.style.display = 'none';
        }
    });
});
</script>
@endsection
