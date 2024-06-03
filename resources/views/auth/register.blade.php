@extends('layouts.app')
@section('right')
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="row w-100 mx-0 shadow">
                <div class="col-lg-12 mx-auto">
                <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                    <h4 class="mb-4">Üye Ol</h4>
                    <form  method="POST" action="{{ route('register') }}">
                        @csrf
                        
                    <div class="form-group">
                        <input placeholder="İsim-Soyisim" id="name" type="text" class="form-control form-control-lg @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>


                    <div class="form-group">
                        <input placeholder="E-Mail" id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input placeholder="Şifre" id="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input placeholder="Şifre (Tekrar)" id="password-confirm" type="password" class="form-control form-control-lg" name="password_confirmation" required autocomplete="new-password">
                    </div>


                    <div class="mt-3">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Üye Ol') }}
                        </button>
                        </div>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
