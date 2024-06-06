<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ "EnyThing" }}</title>
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
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('images/logo4.png') }}" width="300px"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Giriş Yap') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Üye Ol') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item me-5">
                                <a class="nav-link" href="{{ route('userhome') }}" role="button">Panel</a>
                            </li>
                            <li class="nav-item dropdown me-5">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('userhome') }}" role="button">Panel</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}">Çıkış</a>
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

        <main class="py-4" style="background: #f4f5f7">
            <div class="w3-content" style="max-width: 1000px">
                <div class="w3-row">
                  @yield('content')  
                  @isset($popular)
                    @section('right')
                        <div class="w3-col l4">
                            <div class="w3-card w3-margin">
                            <div class="w3-container w3-padding">
                                <h4>Popüler Haberler</h4>
                            </div>
                            <ul class="w3-ul w3-hoverable w3-white">
                                
                                
                                @foreach ($popular as $pop)
                                    <li class="w3-padding-16 w3-hide-medium w3-hide-small">
                                        <img src="{{ asset('storage/images/'.$pop->photo) }}" alt="Image" class="w3-left w3-margin-right" style="width:50px">
                                        <span class="w3-large">{!! Str::substr( $pop->title,0,10) !!}...</span><br>
                                        <span class="w3-small">Yorum Sayısı:{{$pop->comments_count}}</span><br>
                                    </li>  
                                @endforeach  
                                
        
                            </ul>
                            </div>
                        </div>
                        @show
                    @endisset
                </div>
            </div>
        </main>
        
    </div>
    <footer class="w3-container w3-dark-grey w3-padding-32 w3-margin-top">
    </footer>

</body>
</html>
