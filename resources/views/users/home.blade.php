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
                                    <h4 class="card-title">Haber Ekle</h4>
                                </div>
                            </div>
                            <form method="POST" action="" class="forms-sample" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                  <label for="exampleInputUsername1">Başlık</label>
                                  <input type="text" class="form-control form-control-lg" id="exampleInputUsername1" name="title" placeholder="Başlık">
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputEmail1">İçerik</label>
                                  <textarea class="form-control form-control-lg" id="exampleInputEmail1" rows="8" name="body" placeholder="İçerik"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Fotoğraf</label>
                                    <div class="input-group col-xs-12">
                                        <input type="file" name="image" accept="image/png, image/gif, image/jpeg" class="form-control file-upload-info">
                                    </div>
                                  </div>
                                <button type="submit" class="btn btn-primary me-2">Kaydet</button>
                                <button type="reset" class="btn btn-light">İptal</button>
                              </form>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-lg-12 d-flex flex-column">
                    <div class="row flex-grow">
                        <div class="col-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                <h4 class="card-title">Haberler</h4>
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                    <thead>
                                        <tr>
                                        <th>#</th>
                                        <th>Başlık</th>
                                        <th>Yazar</th>
                                        <th>Tarih</th>
                                        <th>Habere Git</th>
                                        <th>İşlemler</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ( $posts as $post)
                                        <tr>
                                            <td>{{$post->id }}</td>
                                            <td>{{$post->title }}</td>
                                            <td>{{$post->author->name }}</td>
                                            <td>{{$post->created_at }}</td>
                                            <td><a href="{{$post->slug}}">{{$post->slug }}</a></td>
                                            <td>
                                                <div>
                                                    <a class="btn btn-info" href="{{ route('postedit',['id'=>$post->id]) }}"><i class="fa fa-pencil"></i></a>
                                                    <a onclick="return confirm('Silmek istediğinize emin misiniz?')" class="btn btn-danger" href="{{ route('postdelete',['id'=>$post->id ])}}"><i class="fa fa-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                        
                                    </tbody>
                                     </table>
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
        </div>
    </div>
@endsection