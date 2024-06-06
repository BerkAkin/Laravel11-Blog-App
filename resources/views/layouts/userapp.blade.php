<!DOCTYPE html>
<html lang="tr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>EnyThing Yönetim Paneli</title>
        <link rel="stylesheet" href="{{ asset('vendors/feather/feather.css') }}">
        <link rel="stylesheet" href="{{ asset('/vendors/mdi/css/materialdesignicons.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/vendors/css/vendor.bundle.base.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('/js/select.dataTables.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/vertical-layout-light/style.css') }}">
        <link rel="shortcut icon" href="{{ asset('/images/favicon.png') }}" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>

    <body class="with-welcome-text">
    <div class="container-scroller">
        <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
            <div class="me-3">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
                    <span class="icon-menu"></span>
                </button>
            </div>
            <div>
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="{{ asset('images/logo5.png') }}" alt="logo" />
                </a>
            </div>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-top">
            <ul class="navbar-nav">
            <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
                <h1 class="welcome-text">Hoş Geldiniz, <span class="text-black fw-bold">{{ Auth::user()->name }}</span></h1>
            </li>
            </ul>
            <ul class="navbar-nav ms-auto">
            <li class="nav-item d-none d-lg-block">
                <div id="datepicker-popup" class="input-group date datepicker navbar-date-picker">
                <span class="input-group-addon input-group-prepend border-right">
                </span>
                <input type="text" class="form-control">
                </div>
            </li>
            <li class="nav-item dropdown d-none d-lg-block user-dropdown">
                <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                <img class="img-xs rounded-circle" src="{{'storage/images/'. Auth::user()->photo }}" alt="Profile image"> </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <div class="dropdown-header text-center">
                    <img class="img-sm rounded-circle" src="{{'storage/images/'. Auth::user()->photo}}" alt="Profile image">
                    <p class="mb-1 mt-3 font-weight-semibold">{{ Auth::user()->name}}</p>
                    <p class="fw-light text-muted mb-0">{{ Auth::user()->email }}</p>
                </div>
                <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i>Profilim</a>
                <a class="dropdown-item" href="{{ route('logout') }}"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Çıkış</a>
                </div>
            </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
            data-bs-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
            </button>
        </div>
        </nav>
        <div class="container-fluid page-body-wrapper">
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                    <ul class="nav">
                        <li class="nav-item">
                        <a class="nav-link" href="{{ route('userhome') }}">
                            <i class="mdi mdi-grid-large menu-icon"></i>
                            <span class="menu-title">Anasayfa</span>
                        </a>
                        </li>
                        @if(Auth::user()->role =='admin')
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('users') }}">
                                <i class="mdi menu-icon mdi-account"></i>
                                <span class="menu-title">Kullanıcılar</span>
                            </a>
                        </li>
                        @endif
                        @if(Auth::user()->role !='user')
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('userposts') }}">
                                <i class="mdi menu-icon mdi-application"></i>
                                <span class="menu-title">Haberler</span>
                            </a>
                        </li>
                        @endif
                    </ul>
            </nav>
            <div class="main-panel">
                <div class="content-wrapper">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('vendors/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ asset('vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('js/template.js') }}"></script>
    <script src="{{ asset('js/proBanner.js') }}"></script>
    </body>

</html>