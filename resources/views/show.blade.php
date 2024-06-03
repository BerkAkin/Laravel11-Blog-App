@extends('layouts.app')

@section('content')


<div class="w3-row">
    <div class="w3-col l8 s12">
        <div class="w3-card-4 w3-margin w3-white">
            <img src="{{ asset('storage/images/'.$posts->photo) }}" alt="Nature" style="width:100%">
            <div class="w3-container">
              <h3><b>{{ $posts->title }}</b></h3>
              <h5>Yazar <span class="w3-opacity">{{ $posts->created_at }}</span></h5>
            </div>
    
            <div class="w3-container">
              <p>{{ $posts->body }}</p>
          </div>
    </div>
</div>
@endsection