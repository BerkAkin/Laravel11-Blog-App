@extends('layouts.app')

@section('right')
@parent
@endsection

@section('css')
<style>

.card {
  background: #fff;
  transition: .5s;
  border: 0;
  margin-bottom: 30px;
  position: relative;
  width: 100%;
  box-shadow: 0 1px 2px 0 rgb(0 0 0 / 10%);
  border-radius: 0;
}
.card .body {
  color: #444;
  padding: 20px;
  font-weight: 400;
}
.card .header {
  color: #444;
  padding: 20px;
  position: relative;
  box-shadow: none;
}

.comment-reply li p {
  margin-bottom: 0px;
  font-size: 15px;
  color: #777
}

</style>
@endsection

@section('content')


    <h3><b>{{ $posts->title }}</b></h3>
    <div class="w3-col l8 s12">
        <div class="w3-card-4 w3-margin w3-white">
            <img src="{{ asset('storage/images/'.$posts->photo) }}" alt="Nature" style="width:100%">
            <div class="w3-container">
              <h5>{{ $posts->author->name }} <span class="w3-opacity">{{ $posts->created_at->diffForHumans() }}</span></h5>
            </div>
    
            <div class="w3-container">
              <p>{{ $posts->body }}</p>
          </div>
        </div>

        <div class="w3-container">
          <div class="card">
            <div class="header">
              <h2>Yorum Yap</h2>
            </div>
            <div class="body">
              <div >
                  <form class="row">
                      <div class="col-sm-12">
                          <div class="form-group">
                              <textarea rows="4" class="form-control no-resize" placeholder="Yorum"></textarea>
                          </div>
                          <button type="submit" class="btn btn-block btn-primary">Yorum Yap</button>
                      </div>                                
                  </form>
                </div>
            </div>
            <div class="header">
                <h2>3 Yorum</h2>
            </div>
            <div class="body">
              <ul class="comment-reply ">
                  <li class="row">
                      <div class="col-md-2 col-4">
                        <img class="img-fluid img-thumbnail" src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Awesome Image">
                      </div>
                      <div class="col-md-10 col-8 p-l-0 p-r0">
                          <h5 class="m-b-0">Berk Akın</h5>
                          <p>Why are there so many tutorials on how to decouple WordPress? how fast and easy it is to get it running</p>
                          <ul class="list-inline">
                              <li>Mar 09 2018</li>
                          </ul>
                      </div>
                  </li>
              </ul>                                        
            </div>

          </div>
        </div>
    </div>

    
@endsection