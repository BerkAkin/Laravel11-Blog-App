<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ "sTalker" }}</title>
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <style>
        body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
    </style>
    @yield('css')
    <link rel="stylesheet" href="{{ asset('/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vertical-layout-light/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md shadow-sm" style="background-color:#fc3434">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('images/logo4.png') }}" width="120px"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto ">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link fs-5 text-white fw-bold"  href="{{ route('login') }}">{{ __('Giriş Yap') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link fs-5 text-white fw-bold" href="{{ route('register') }}">{{ __('Üye Ol') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item me-5">
                                <a class="nav-link fs-5 text-white fw-bold" href="{{ route('userhome') }}" role="button">Panel</a>
                            </li>
                            <li class="nav-item dropdown me-5">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-white fs-5 fw-bold" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item fs-5 fw-bold" href="{{ route('userhome') }}" role="button">Panel</a>
                                    <a class="dropdown-item fs-5 fw-bold" href="{{ route('logout') }}">Çıkış</a>
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

        <main class="">
            @yield('top')
            <div class="w3-content" style="max-width: 1000px">
                <div class="w3-row">
                  @yield('content')  
                  @isset($popular)
                    @section('right')
                        <div class="w3-col l3 w3-hide-medium w3-hide-small">
                            <div class="">
                                <h4 class="fw-bold fs-4" style="color: #fc3434">Trend Haberler</h4>
                            </div>
                            <ul class="w3-ul  w3-white">
                                @foreach ($popular as $pop)
                                    <li class="text-center">
                                        <img style="width: 100%; height:5vw; object-fit: cover;" src="{{ asset('storage/images/'.$pop->photo) }}">
                                        <a href="{{ $pop->slug }}" style="cursor:pointer; text-decoration:none; color:black;" onMouseOut="this.style.color='#000000'" onMouseOver="this.style.color='#d60000'" class="fs-6 mt-2 ">{!! Str::substr( $pop->title,0,30) !!}...</a>
                                    </li>  
                                @endforeach  
                            </ul>
                        <div class="row w3-hide-medium w3-hide-small">
                            <div class="text-center mt-5">
                                <h4 class="fw-bolder" style="color: #fc3434">Bizi Takip Et</h4>
                            </div>
                            <div class="col-12 d-flex justify-content-around mt-3">
                                <a class="btn btn-sm" style="background-color: #fc3434;"><i class="fa-brands fa-youtube text-light fs-4"></i></i></a>
                                <a class="btn btn-sm" style="background-color: #fc3434;"><i class="fa-brands fa-instagram text-light fs-4"></i></a>
                                <a class="btn btn-sm" style="background-color: #dddddd;"><i class="fa-brands fa-x-twitter fs-4"></i></a>
                            </div>
                        </div>
                        @show
                    @endisset
                </div>
            </div>
        </main>
        
    </div>
<footer class="bottom" style="background-color: #fc3434 !important; height:80px; margin-top:300px">
</footer>

</body>    

</html>
