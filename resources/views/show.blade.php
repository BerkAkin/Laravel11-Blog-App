@extends('layouts.app')

@section('right')
@parent
@endsection

@section('content')


    <h3><b>{{ $posts->title }}</b></h3>
    <div class="w3-col l8 s12">
        <div class="w3-card-4 w3-margin w3-white">
            <img src="{{ asset('storage/images/'.$posts->photo) }}" alt="Nature" style="width:100%">
            <div class="w3-container">
              <h5>{{ $posts->author->name }} <span class="w3-opacity">{{ $posts->created_at }}</span></h5>
            </div>
    
            <div class="w3-container">
              <p>{{ $posts->body }}</p>
          </div>
      </div>
    </div>
@endsection