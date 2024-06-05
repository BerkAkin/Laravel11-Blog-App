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
                                <h4 class="card-title">Kullanıcı Ekle</h4>
                            </div>
                        </div>
                        <form method="POST" action="{{ route('userstore') }}" class="forms-sample" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                              <label for="exampleInputUsername1">İsim</label>
                              <input type="text" class="form-control form-control-lg" name="name" placeholder="İsim">
                            </div>
                            <div class="form-group">
                                <label>E-Mail</label>
                                <input type="mail" class="form-control" name="email" rows="8"  placeholder="email"></input>
                              </div>
                              <div class="form-group">
                                <label>Parola</label>
                                <input type="password" class="form-control form-control-lg" name="password" placeholder="Parola">
                              </div>
                              <div class="form-group">
                                <label >Rol</label>
                                <select class="form-control" name="role">
                                    <option value="admin">Admin</option>
                                    <option value="user">User</option>
                                    <option value="editor">Editor</option>
                                </select>
                              </div>
                              <div class="form-group">
                                <label>Yaş</label>
                                <input type="text" class="form-control form-control-lg"  name="age" placeholder="Yaş">
                              </div>
                              <div class="form-group">
                                <label>Cinsiyet</label>
                                <select class="form-control" name="gender">
                                    <option value="erkek">Erkek</option>
                                    <option value="kadın">Kadın</option>
                                </select>
                              </div>
                              <div class="form-group">
                                <label>Fotoğraf</label>
                                <input type="file" class="form-control file-upload-info"  name="photo">
                              </div>
                            <button type="submit" class="btn btn-primary me-2">Kaydet</button>
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