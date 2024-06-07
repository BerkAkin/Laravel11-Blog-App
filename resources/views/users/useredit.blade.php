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
                                <h4 class="card-title">Kullanıcı Düzenle</h4>
                            </div>
                        </div>
                        <form method="POST" action="{{ route('userupdate',['id'=>$user->id]) }}" class="forms-sample" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                              <label for="exampleInputUsername1">İsim</label>
                              <input type="text" class="form-control form-control-lg" name="name" value="{{ $user->name}}" required placeholder="İsim">
                              @error('name')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                              @enderror
                            </div>
                            <div class="form-group">
                                <label>E-Mail</label>
                                <input required type="mail" value="{{ $user->email }}" class="form-control" name="email" rows="8"  placeholder="email"></input>
                                @error('email')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                              @enderror
                              </div>
                              <div class="form-group">
                                <label >Rol</label>
                                <select class="form-control" value="{{ $user->role }}" name="role">
                                    <option value="admin">Admin</option>
                                    <option value="user">User</option>
                                    <option value="editor">Editor</option>
                                </select>
                                @error('role')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                              @enderror
                              </div>
                              <div class="form-group">
                                <label>Yaş</label>
                                <input required type="text" value="{{ $user->age }}" class="form-control form-control-lg"  name="age" placeholder="Yaş">
                                @error('age')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                              @enderror
                              </div>
                              <div class="form-group">
                                <label>Cinsiyet</label>
                                <select class="form-control" value="{{ $user->gender }}" name="gender">
                                    <option value="erkek">Erkek</option>
                                    <option value="kadın">Kadın</option>
                                </select>
                                @error('gender')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                              @enderror
                              </div>
                              <div class="form-group">
                                <label>Fotoğraf</label>
                                <input type="file" class="form-control file-upload-info"  name="photo">
                              </div>
                            <button type="submit" class="btn btn-danger me-2">Kaydet</button>
                            <button type="reset" class="btn btn-light">İptal</button>
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
</div>



@endsection