@extends('layouts.userapp')

@section('content')
       <div class="col-lg-12 d-flex flex-column">
        <a href="{{ route('postcreate') }}" class="btn btn-warning fw-bold fs-5">Haber Ekle</a>
                        <div class="row flex-grow">
                            <div class="col-12 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                    <h4 class="card-title">Haberler</h4>
                                    @if(session('status'))
                                        <p class="card-description">
                                            <div class="alert alert-success">
                                                {{ session('status') }}
                                            </div>
                                        </p>
                                     @endif
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                        <thead>
                                            <tr>
                                            <th>#</th>
                                            <th>Başlık</th>
                                            <th>Kategori</th>
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
                                                <td>{{Str::substr( $post->title,0,120) }}...</td>
                                                <td>{{$post->category }}</td>
                                                <td>{{$post->author->name }}</td>
                                                <td>{{$post->created_at }}</td>
                                                <td><a href="{{$post->slug}}">{{Str::substr( $post->slug,0,20)}}...</a></td>
                                                <td>
                                                    <div>
                                                        <a class="btn btn-info btn-sm" href="{{ route('postedit',['id'=>$post->id]) }}"><i class="fa fa-pencil"></i></a>
                                                        <a onclick="return confirm('Silmek istediğinize emin misiniz?')" class="btn btn-sm btn-danger" href="{{ route('postdelete',['id'=>$post->id ])}}"><i class="fa fa-trash"></i></a>
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
@endsection