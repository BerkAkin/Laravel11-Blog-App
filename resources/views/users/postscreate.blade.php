@extends('layouts.userapp')

@section('content')
<style>
  .ck-editor__editable_inline{
      height: 300px;
  }
</style>
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
            <form method="POST" action="{{ route('poststore') }}" class="forms-sample" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="exampleInputUsername1">Başlık</label>
                  <input type="text" class="form-control form-control-lg" id="exampleInputUsername1" name="title" placeholder="Başlık">
                </div>


                <div class="form-group">
                  <label for="exampleInputEmail1">İçerik</label>
                  <textarea class="form-control" id="editor" name="body" rows="8"  placeholder="İçerik"></textarea>
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
<script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>
<script>
  ClassicEditor
  .create(document.querySelector('#editor'), {
      
      
      ckfinder: {
          uploadUrl: "{{ route('ckeditor.upload', ['_token' => csrf_token()]) }}",
      }
  })
  .catch(error => {
      console.error(error);
  });
</script>
@endsection