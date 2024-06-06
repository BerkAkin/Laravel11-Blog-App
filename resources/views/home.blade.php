@extends('layouts.app')

@section('right')
@parent

@endsection

@section('top')
<style>
  .topNewsFilter{
    height:370px; 
    background-color: #4444443b;
    transition: 0.5s linear; 
    width: 100%;

  }
  .topNewsFilter:hover{
    background-color: #00000052;
    transition: 0.5s;
  }

  .topNewsRightFilter{
    height:185px; 
    background-color: #4444443b;
    transition: 0.5s linear; /

  }
  .topNewsRightFilter:hover{
    background-color: #00000052;
    transition: 0.5s;
  }

  .topNewsRightBottomFilter{
    height:180px; 
    background-color: #4444443b;
    transition: 0.5s linear; /

  }
  .topNewsRightBottomFilter:hover{
    background-color: #00000052;
    transition: 0.5s;
  }
</style>
<div class="container-fluid mb-5 p-1">
  <div class="row p-1">
        <div class="col-md-6 pe-0 ">
            <div class="">
                    <div style="height:370px; background: linear-gradient(to bottom, rgba(0,0,0,0) 20%, rgba(0,0,0,1)), url('{{ asset('storage/images/'.$ilkdort[0]->photo) }}');">
                      <div class="d-flex flex-column justify-content-end topNewsFilter">
                        <div>
                          <h5 class="card-title fs-1 fw-bolder text-primary ps-3 mb-3"> 
                            <a style="text-shadow: 0px 3px 10px #000000;text-decoration: none; color:rgb(255, 255, 255)" href="{{ $ilkdort[0]->slug }}">{{ $ilkdort[0]->title }}</a>
                          </h5>
                        </div>
                        <div class="mb-3"> 
                          <p class="card-text fw-bold ms-3" style="color: #949494"><small>{{ $ilkdort[0]->author->name }}</small><small class="ms-3">{{ $ilkdort[0]->created_at->diffForHumans() }}</small></p>
                        </div>
                      </div>
                  </div>
            </div>
        </div>
          @isset($ilkdort[1])
          <div class="col-md-3 pe-0 ps-1">
            <div>
                    <div style="height:370px; background: linear-gradient(to bottom, rgba(0,0,0,0) 20%, rgba(0,0,0,1)), url('{{ asset('storage/images/'.$ilkdort[1]->photo) }}');">
                      <div class="d-flex flex-column justify-content-end topNewsFilter">
                        <div>
                          <h5 class="card-title fs-2 fw-bolder text-primary ps-3 mb-3"> 
                            <a style="text-shadow: 0px 3px 10px #000000;text-decoration: none; color:rgb(255, 255, 255)" href="{{ $ilkdort[1]->slug }}">{{ $ilkdort[1]->title }}</a>
                          </h5>
                        </div>
                        <div class="mb-3"> 
                          <p class="card-text fw-bold ms-3" style="color: #949494"><small>{{ $ilkdort[1]->author->name }}</small><small class="ms-3">{{ $ilkdort[1]->created_at->diffForHumans() }}</small></p>
                        </div>
                      </div>
                  </div>
            </div>
        </div>
        @endisset

        
        <div class="col-md-3 ps-1">
          @isset($ilkdort[2])
          <div>
                  <div style="height:185px; background: linear-gradient(to bottom, rgba(0,0,0,0) 20%, rgba(0,0,0,1)), url('{{ asset('storage/images/'.$ilkdort[2]->photo) }}');">
                    <div class="d-flex flex-column justify-content-end topNewsRightFilter">
                      <div>
                        <h5 class="card-title fs-3 fw-bolder text-primary ps-3 mb-3"> 
                          <a style="text-shadow: 0px 3px 10px #000000;text-decoration: none; color:rgb(255, 255, 255)" href="{{ $ilkdort[2]->slug }}">{{ $ilkdort[2]->title }}</a>
                        </h5>
                      </div>
                      <div class="mb-3"> 
                        <p class="card-text fw-bold ms-3" style="color: #949494"><small>{{ $ilkdort[2]->author->name }}</small><small class="ms-3">{{ $ilkdort[2]->created_at->diffForHumans() }}</small></p>
                      </div>
                    </div>
                </div>
          </div>
          @endisset
          @isset($ilkdort[3])
          <div class="pt-1">
            <div style="height:180px; background: linear-gradient(to bottom, rgba(0,0,0,0) 20%, rgba(0,0,0,1)), url('{{ asset('storage/images/'.$ilkdort[3]->photo) }}');">
              <div class="d-flex  flex-column justify-content-end topNewsRightBottomFilter">
                <div>
                  <h5 class="card-title fs-3 fw-bolder text-primary ps-3 mb-3"> 
                    <a style="text-shadow: 0px 3px 10px #000000;text-decoration: none; color:rgb(255, 255, 255)" href="{{ $ilkdort[3]->slug }}">{{ $ilkdort[3]->title }}</a>
                  </h5>
                </div>
                <div class="mb-3"> 
                  <p class="card-text fw-bold ms-3" style="color: #949494"><small>{{ $ilkdort[3]->author->name }}</small><small class="ms-3">{{ $ilkdort[3]->created_at->diffForHumans() }}</small></p>
                </div>
              </div>
          </div>
      </div>
      @endisset


    </div>
  </div>
</div>

@parent
@endsection

@section('content')
<link rel="stylesheet" href="{{ asset('/vendors/mdi/css/materialdesignicons.min.css') }}">


    <div class="w3-col l9 s12">
      <div class="row mb-3">
        <div class="col-md-4"><p class="fs-4 fw-bolder ps-0" style="color:#fc3434 ">Haber Akışı <i class="mdi mdi-access-point"></i></p> </div>
        <div class="col-md-2"></div>
        <div class="col-md-6 d-flex justify-content-end">
          <small class="text-muted me-3" >Filtrele:</small>
           <select style="border:none; border-bottom:1px solid rgba(128, 128, 128, 0.493)" class="form-group me-5">
            <option value="All">Tümü</option>
          </select></div>
      </div>
      @foreach ($posts as $ps)
      <div class="card " style="background: none; border-radius:0px; box-shadow:none; background-color:white">
        <div class="row g-0 ">
          <div class="col-md-1 d-flex align-items-center">
            <p class="fs-6"><small class="text-body-secondary"><span class="w3-opacity">{{ $ps->created_at->diffForHumans() }}</span></small></p>
          </div>
          <div class="col-md-5">
            <a href="{{ $ps->slug }}">
              @if($ps->photo)
                <img style="width: 100%; height: 11vw; object-fit: cover;" src="{{ asset('storage/images/'.$ps->photo) }}">
              @endif
             </a>  
          </div>
          <div class="col-md-6 ">
            <div class="card-body">
              <small class="text-muted">{{ $ps->category}} </small>
              <h5 class="card-title fs-5 mt-2"> <a onMouseOut="this.style.color='#000000'" onMouseOver="this.style.color='#d60000'"  style="text-decoration: none; color:black" href="{{ $ps->slug }}">{{ $ps->title }}</a></h5>
              <p class="card-text fs-6"><small class="text-body-secondary">{{ $ps->author->name }}</small></p>
            </div>
          </div>
        </div>
      </div>
      <br>
      
      @endforeach


    </div>






@endsection
