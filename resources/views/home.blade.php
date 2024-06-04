@extends('layouts.app')

@section('right')
@parent
@endsection

@section('content')

    <div class="w3-col l8 s12">

      @foreach ($posts as $ps)
        
      <div class="w3-card-4 w3-margin w3-white">
        <a href="{{ $ps->slug }}">
          @if($ps->photo)
            <img src="{{ asset('storage/images/'.$ps->photo) }}" style="width:100%"></a>
          @else
          @endif
          
        <div class="w3-container">
          <h3 class="mt-3"><b><a style="text-decoration: none; color:black" href="{{ $ps->slug }}">{{ $ps->title }}</a></b></h3>
          <h5 class="mt-3">Oluşturan: {{ $ps->author->name }} <span class="w3-opacity">{{ $ps->created_at->diffForHumans() }}</span></h5>
        </div>

        <div class="w3-container mt-3">
          <p style="font-size: 1.15rem">{!! Str::substr( $ps->body,0,250) !!}...</p>
          <div class="w3-row mt-4 mb-2">
            <div class="w3-col m8 s12">
              <p ><button class="w3-button w3-padding-large w3-white w3-border"><b><a style="text-decoration: none; color: black" href="{{ $ps->slug }}">DEVAMINI OKU »</a> </b></button></p>
            </div>
            <div class="w3-col m4 w3-hide-small">
              <p><span class="w3-padding-large w3-right"><b>Yorumlar  </b> <span class="w3-tag">0</span></span></p>
            </div>
          </div>
        </div>
      </div>
    @endforeach
    </div>






@endsection
