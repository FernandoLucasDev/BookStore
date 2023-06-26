<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('scss/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
@if(Auth::check())
<style>
    .div-back {
        width: 100%;
        height: fit-content;
        padding: 3rem;
        display: flex;
        flex-wrap: wrap;
    }
    .card {
       width: 15rem;
       min-height: 10rem;
       display: grid;
       place-items: center;
       margin: 1rem;
       padding-bottom: 25px; 
    }

    button {
        background-color: blue;
        color: white;
        border: none;
        border-radius: 10px;
        padding: 8px; 
    }

    .back-form {
        width: 100%;
        height: 80vh;
        display: grid;
        place-items: center;
    }

    .card-form {
        padding: 20px;
        border: 1px solid gray;
        border-radius: 10px;
    }

    .input {
        width: 20rem;
        height: 2.3rem;
        margin: 1rem 1rem 1rem 0rem;
    }
</style>
@endif
<body>
    <div id="app">
        

        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Books</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item dropdown">
                    @if(Auth::check())
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ Auth::user()->name }}
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/form">Cadastrar livro</a></li>
                        <li>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                        </li>
                      </ul>
                    @else
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Registrar-se ou fazer login
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                            <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                        </ul>   
                    @endif
                  </li>
              </div>
            </div>
          </nav>


        <main class="py-4">
            
           
            @yield('content')
        </main>
    </div>
</body>
</html>
