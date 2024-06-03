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
              <h4>Giriş Yap</h4>
              <form class="pt-3" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <input id="email" placeholder="E-Mail" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <input id="password" type="password" placeholder="Şifre" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">


                    <label class="form-check-label text-muted" for="remember">                    
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    Beni hatırla</label>

                  </div>
                  @if (Route::has('password.request'))
                  <a class="auth-link text-black" href="{{ route('password.request') }}">
                      {{ __('Şifremi unuttum') }}
                  </a>
              @endif
                </div>
                <div class="mt-3">
                    <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">
                        {{ __('Giriş') }}
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
