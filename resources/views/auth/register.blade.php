@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data" action="{{ route('register') }}">
                        @csrf

                        <div class="mb-4 row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-4 row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-4 row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-4 row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="phone_number" class="form-label">Inserisci numero di telefono</label>
                            <input type="number" class="form-control @error('phone_number') is-invalid @enderror" value="{{ old('phone_number') }}" id="phone_number" name="phone_number">
                            @error('phone_number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="restaurant_name" class="form-label">Inserisci un nome del ristorante</label>
                            <input type="text" class="form-control @error('restaurant_name') is-invalid @enderror" value="{{ old('restaurant_name') }}" id="restaurant_name" name="restaurant_name">
                            @error('restaurant_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="mb-2" for="">Tecnologie</label>
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

                        <div class="mb-3">
                            <label for="img" class="form-label">Inserisci un'immagine</label>
                            <input class="form-control @error('img') is-invalid @enderror" type="file" id="img" name="img">
                            @error('img')
                                <div class="invalid-feedback">
                                {{$message}}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="vat" class="form-label">Inserisci il numero di P.Iva</label>
                            <input class="form-control @error('vat') is-invalid @enderror" value="{{ old('vat') }}" type="text" id="vat" name="vat">
                            @error('vat')
                                <div class="invalid-feedback">
                                {{$message}}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-4 row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
