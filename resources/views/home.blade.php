@extends('layouts.app')

@section('right')
@parent
@endsection

@section('content')
<link rel="stylesheet" href="{{ asset('/vendors/mdi/css/materialdesignicons.min.css') }}">

    <div class="w3-col l9 s12">
      <div class="row mb-3">
        <div class="col-md-1"></div>
        <div class="col-md-5">
          <p class="fs-3 fw-bolder" style="color:#fc3434 ">HABER AKIŞI <i class="mdi mdi-access-point"></i></p>
        </div>
        <div class="col-md-6"></div>
      </div>
      @foreach ($posts as $ps)
      <div class="card " style="background: none; border-radius:0px; box-shadow:none; background-color:white">
        <div class="row g-0 ">
          <div class="col-md-1 d-flex align-items-center">
            <p class="fs-6"><small class="text-body-secondary"><span class="w3-opacity">{{ $ps->created_at->diffForHumans() }}</span></small></p>
          </div>
          <div class="col-md-5">
            <a href="{{ $ps->slug }}">
              @if($ps->photo)
                <img style="width: 100%; height: 11vw; object-fit: cover;" src="{{ asset('storage/images/'.$ps->photo) }}">
              @endif
             </a>  
          </div>
          <div class="col-md-6 ">
            <div class="card-body">
              <small class="text-muted">{{ $ps->category}} </small>
              <h5 class="card-title fs-5 mt-2"> <a onMouseOut="this.style.color='#000000'" onMouseOver="this.style.color='#d60000'"  style="text-decoration: none; color:black" href="{{ $ps->slug }}">{{ $ps->title }}</a></h5>
              <p class="card-text fs-6"><small class="text-body-secondary">{{ $ps->author->name }}</small></p>
            </div>
          </div>
        </div>
      </div>
      <br>
      
      @endforeach


    </div>






@endsection
