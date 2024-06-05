@extends('layouts.userapp')

@section('content')

<div class="col-lg-12 d-flex flex-column">
    <div class="row flex-grow">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                <h4 class="card-title">Kullanıcılar</h4>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                            <th>#</th>
                            <th>İsim</th>
                            <th>E-Mail</th>
                            <th>Rol</th>
                            <th>Kayıt Tarihi</th>
                            <th>İşlemler</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $users as $user)
                            <tr>
                                <td>{{$user->id }}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email }}</td>
                                <td>{{$user->role }}</td>
                                <td>{{$user->created_at }}</td>
                                <td>
                                    <div>
                                        <a class="btn btn-info" href="{{ route('useredit',['id'=>$user->id]) }}"><i class="fa fa-pencil"></i></a>
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