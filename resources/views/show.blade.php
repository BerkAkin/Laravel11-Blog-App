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



    <div class="w3-col l8 s12">
        <div class="w3-card-4 w3-margin w3-white">
            <img src="{{ asset('storage/images/'.$posts->photo) }}" alt="Nature" style="width:100%">
            <div class="w3-container">
              <h3 class="mt-3"><b>{{ $posts->title }}</b></h3>
              <h5 class="mt-4">Oluşturan: {{ $posts->author->name }} 
                <span class="w3-opacity">{{ $posts->created_at->diffForHumans() }}</span>
              </h5>
            </div>
    
            <div class="w3-container mt-3">
              <div style="font-size: 1.15rem" class="mb-4">{!! $posts->body !!}</div>
          </div>
        </div>

        <div class="w3-container">
          <div class="card">
            <div class="header">
              <h2>Yorum Yap</h2>
            </div>
            <div class="body">
              <div>

                  <form class="row" method="POST" action="{{ route('yorumyap') }}">
                    @csrf
                    <input type="hidden" name="postId" value="{{ $posts ->id }}">
                      <div class="col-sm-12">
                          <div class="form-group">
                              <textarea name="comment" rows="4" class="form-control no-resize" placeholder="Yorum"></textarea>
                          </div>
                          <button type="submit" class="btn btn-block btn-primary">Yorum Yap</button>
                      </div>                                
                  </form>

                </div>
            </div>
            <div class="header">
                <h2>{{ count($posts->comments) }} Yorum</h2>
            </div>

            @foreach ($posts->comments as $comment)
              <div class="body">
                <ul class="comment-reply ">
                    <li class="row">
                        <div class="col-md-2 col-4">
                          <img class="img-fluid" src="{{ asset('storage/images/'. $comment->author->photo ) }}" alt="Awesome Image">
                        </div>
                        <div class="col-md-10 col-8 p-l-0 p-r0 ">
                          <div class="row ">
                            <div class="col-6 d-flex align-items-center">
                              <h5>{{ $comment->author->name }}</h5>
                            </div>
                            <div class="col-6 d-flex justify-content-end">
                              @if(@Auth::user()->id == $comment->from_user or @Auth::user()->role == 'admin')
                                <a class="m-b-0 btn btn-sm btn-danger" href="{{ route('yorumSil',['id'=>$comment->id]) }}">Yorumu Sil</a>
                              @endif
                            </div>
                          </div>

                              
                              
                            <p>{{ $comment->body }}</p>
                            <ul class="list-inline mt-2 ">
                                <li>{{ $comment->created_at->format('d-m-y') }}</li>
                            </ul>
                        </div>
                    </li>
                </ul>                                        
              </div>
            @endforeach
            

          </div>
        </div>
    </div>

    
@endsection