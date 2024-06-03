@extends('layouts.userapp')

@section('content')
    <div class="row">
        <div class="col-sm-12">
        <div class="home-tab">
            <div class="tab-content tab-content-basic">
            <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">
                <div class="row">
                <div class="col-lg-12 d-flex flex-column">
                    <div class="row flex-grow">
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card">
                        <div class="card-body">
                            <div class="d-sm-flex justify-content-between align-items-start">
                                <div>
                                    <h4 class="card-title">Haberi Düzenle</h4>
                                </div>
                            </div>
                            <form method="POST" action="{{ route('postupdate') }}" class="forms-sample" enctype="multipart/form-data">
                                <input type="hidden" name="postid" value="{{ $post->id }}" >
                                @csrf
                                <div class="form-group">
                                  <label for="exampleInputUsername1">Başlık</label>
                                  <input type="text" class="form-control form-control-lg" id="exampleInputUsername1" value="{{ $post->title }}" name="title" placeholder="Başlık">
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputEmail1">İçerik</label>
                                  <textarea class="form-control form-control-lg" id="exampleInputEmail1"  value="{{ $post->body }}"   rows="8" name="body" placeholder="İçerik"> {{ $post->body }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Fotoğraf</label>
                                    <div class="input-group col-xs-12">
                                        <input type="file" name="image" accept="image/png, image/gif, image/jpeg" class="form-control file-upload-info">
                                        <input type="hidden" name="oldimage" value="{{ $post->photo }}">
                                    </div>
                                  </div>
                                <button type="submit" class="btn btn-primary me-2">Kaydet</button>
                                <a href="{{ url('home')}}" type="reset" class="btn btn-light">İptal</a>
                              </form>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
@endsection