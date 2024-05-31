<!doctype html >
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" >

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Usando Vite -->
    @vite(['resources/js/app.js'])
</head>

<body>
    <div id="app">


        <nav class="navbar navbar-expand-md navbar-light shadow-sm personal_color1 ">
            <div class="container">
                <a class=" col-6 navbar-brand d-flex align-items-center m-0" href="{{ url('/') }}">
                    <div>
                        <img class="personal_logo img-fluid w-50" src="{{ asset('wowdelive-sb.svg') }}" alt="logo">
                    </div>
                    {{-- config('app.name', 'Laravel') --}}
                </a>

                {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button> --}}

                <div class="navbar col-6 justify-content-end" id="navbarSupportedContent">

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        
                        @else
                        <li class="nav-item dropdown position-relative">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu w-50 position-absolute" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ url('dashboard') }}">{{__('Dashboard')}}</a>
                                <a class="dropdown-item" href="{{ url('profile') }}">{{__('Profile')}}</a>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="personal_style">
            @yield('content')
        </main>
    </div>
    @yield('scripts')
</body>

<style>
    nav {
        height: 130px;
    }
    .personal_color1 {
        background-color: #006769; 
    }

    .navbar-brand {
    flex: 1;
    display: flex;
    align-items: center;
}

.navbar-toggler {
    flex: 0;
}

.navbar-collapse {
    flex-basis: auto;
    flex-grow: 1;
    justify-content: flex-end;
}

.nav-item.dropdown {
    position: relative;
}

.dropdown-menu {
    position: absolute;
    right: 200px;
    top: auto;
    transform: translateY(10%);
    transform: translateX(-40%); /* Display dropdown below the link */
     /* Display dropdown below the link */
    z-index: 1000; /* Ensure it appears above other elements */
}

    @media screen and (max-width: 500px) {
        .navbar-brand {
        flex: 1;
        text-align: left;
    }

    .navbar-toggler {
        flex: 0;
    }

    .navbar-collapse {
        justify-content: flex-end;
    }

    .navbar-nav {
        width: auto;
    }

    .dropdown-menu {
        width: auto; /* Ensure the dropdown menu is appropriately wide */
    }
}
    

</style>
</html>
