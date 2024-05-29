@extends('layouts.app')
@section('content')

<div class="personal_color2 p-4">
    <h2 class="fs-4 text-secondary p-4 text-light">
        {{ __('Profilo personale') }}
    </h2>
    <div class="card p-4 mb-4 bg-white shadow rounded-lg">

        @include('profile.partials.update-profile-information-form')

    </div>

    <div class="card p-4 mb-4 bg-white shadow rounded-lg">


        @include('profile.partials.update-password-form')

    </div>

    <div class="card p-4 mb-4 bg-white shadow rounded-lg">


        @include('profile.partials.delete-user-form')

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
  
  </style>

@endsection
