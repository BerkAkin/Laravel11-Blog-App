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
                            <form method="POST" class="forms-sample">
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
                                  <label for="exampleInputPassword1">Url</label>
                                  <input class="form-control form-control-lg" id="exampleInputPassword1" name="slug" placeholder="Slug">
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputConfirmPassword1">Fotoğraf</label>
                                  <div class="d-flex">
                                    <input type="file" class="file-upload-default" id="exampleInputConfirmPassword1" name="img[]" placeholder="Fotoğraf">
                                    <input type="text" disabled class="form-control file-upload-info" placeholder="Upload">
                                    <button class="file-upload-browse btn btn-primary" type="button">Yükle</button>
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
                                        <th>İşlem</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <td>1</td>
                                        <td>Foto Stüdyo</td>
                                        <td>Berk Akın</td>
                                        <td>03.06.2024</td>
                                        <td>Yayınlandı</td>
                                        </tr>
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