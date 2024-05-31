@extends('layouts.app')

@section('content')


<div class="w3-content" style="max-width:1000px">

  <div class="w3-row">

    <div class="w3-col l8 s12">

      @foreach ($posts as $ps)
        
    
      <div class="w3-card-4 w3-margin w3-white">
        <a href="{{ $ps->slug }}"><img src="https://placehold.jp/3d4070/ffffff/600x120.png" alt="Nature" style="width:100%"></a>
        <div class="w3-container">
          <h3><b><a href="{{ $ps->slug }}">{{ $ps->title }}</a></b></h3>
          <h5>Oluşturan: {{ $ps->author->name }} <span class="w3-opacity">{{ $ps->created_at->diffForHumans() }}</span></h5>
        </div>

        <div class="w3-container">
          <p>{{ $ps->body }}</p>
          <div class="w3-row">
            <div class="w3-col m8 s12">
              <p><button class="w3-button w3-padding-large w3-white w3-border"><b><a href="{{ $ps->slug }}">DEVAMINI OKU »</a> </b></button></p>
            </div>
            <div class="w3-col m4 w3-hide-small">
              <p><span class="w3-padding-large w3-right"><b>Yorumlar  </b> <span class="w3-tag">0</span></span></p>
            </div>
          </div>
        </div>
      </div>
      <hr>
    @endforeach
    </div>

    <div class="w3-col l4">

      

      <div class="w3-card w3-margin">
        <div class="w3-container w3-padding">
          <h4>Popular Posts</h4>
        </div>
        <ul class="w3-ul w3-hoverable w3-white">
          <li class="w3-padding-16">
            <img src="https://www.w3schools.com/w3images/workshop.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
            <span class="w3-large">Lorem</span><br>
            <span>Sed mattis nunc</span>
          </li>
          <li class="w3-padding-16">
            <img src="https://www.w3schools.com/w3images/gondol.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
            <span class="w3-large">Ipsum</span><br>
            <span>Praes tinci sed</span>
          </li> 
          <li class="w3-padding-16">
            <img src="https://www.w3schools.com/w3images/skies.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
            <span class="w3-large">Dorum</span><br>
            <span>Ultricies congue</span>
          </li>   
          <li class="w3-padding-16 w3-hide-medium w3-hide-small">
            <img src="https://www.w3schools.com/w3images/rock.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
            <span class="w3-large">Mingsum</span><br>
            <span>Lorem ipsum dipsum</span>
          </li>  
        </ul>
      </div>

    

      <div class="w3-card w3-margin">
        <div class="w3-container w3-padding">
          <h4>Tags</h4>
        </div>
        <div class="w3-container w3-white">
        <p><span class="w3-tag w3-black w3-margin-bottom">Travel</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">New York</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">London</span>
          <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">IKEA</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">NORWAY</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">DIY</span>
          <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Ideas</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Baby</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Family</span>
          <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">News</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Clothing</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Shopping</span>
          <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Sports</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Games</span>
        </p>
        </div>
      </div>
      
    </div>

  </div>
  <br>

</div>



@endsection
