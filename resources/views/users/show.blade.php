@extends('layouts.userapp')

@section('content')

<div class="col-lg-12 d-flex flex-column">
    <a href="{{ route('usercreate') }}" class="btn btn-warning fw-bold fs-5">Kullanıcı Ekle</a>
    <div class="row flex-grow">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                <h4 class="card-title">Kullanıcılar</h4>
                <div class="mb-5 row">
                    <div class="col-3">{{ $users->links() }} </div>
                    <div class="col-9 d-flex justify-content-end ">
                        <form action="/search" method="POST" role="search">
                            @csrf
                            <input name="search" type="text" style="border:none; border-bottom:2px solid #f57575; outline:none" class="fw-bold  form-control-input" id="kullaniciAra" placeholder="Kullanıcı Ara"></input>
                            <button type="submit" class="btn-danger btn-sm" style="border:none; outline:none "><i class="icon-search pb-1"></i></button>
                        </form>
                    </div>
                     
                  </div>
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
                            <th>İsim</th>
                            <th>E-Mail</th>
                            <th>Cinsiyet</th>
                            <th>Yaş</th>
                            <th>Rol</th>
                            <th>Kayıt Tarihi</th>
                            <th>Yorum Sayısı</th>
                            <th>Makale Sayısı</th>
                            <th>İşlemler</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $users as $user)
                            <tr>
                                <td>{{$user->id }}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email }}</td>
                                <td>{{$user->gender }}</td>
                                <td>{{$user->age }}</td>
                                <td>{{$user->role }}</td>
                                <td>{{$user->created_at }}</td>
                                <td>{{count($user->comments )}}</td>
                                <td>{{count($user->posts) }}</td>
                                <td>
                                    <div>
                                        <a class="btn btn-info btn-sm" href="{{ route('useredit',['id'=>$user->id]) }}"><i class="fa fa-pencil"></i></a>
                                        <a onclick="return confirm('Silmek istediğinize emin misiniz?')" class="btn btn-sm btn-danger" href="{{ route('userdelete',['id'=>$user->id ])}}"><i class="fa fa-trash"></i></a>
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