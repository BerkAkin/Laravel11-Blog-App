@extends('layouts.userapp')

@section('content')
    <div class="row">
        <div class="col-sm-12">
        <div class="home-tab">
            <div class="tab-content tab-content-basic">
            <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">
                <div class="row">
                <div class="col-lg-8 d-flex flex-column">
                    <div class="row flex-grow">
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card card-rounded">
                        <div class="card-body">
                            <div class="d-sm-flex justify-content-between align-items-start">
                                <div>
                                    <h4 class="card-title-dash">Makaleler</h4>
                                </div>
                                <div>
                                    <button class="btn btn-primary btn-lg text-white mb-0 me-0" type="button"><i class="mdi mdi-plus"></i>Yeni Ekle</button>
                                </div>
                            </div>
                            <hr>
                            <div class="mt-1">
                                <p class="card-subtitle-dash card-subtitle">Asdsad</p>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex flex-column">
                    <div class="row flex-grow">
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card card-rounded">
                        <div class="card-body">
                            <div class="row">
                            <div class="col-lg-12">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                <div>
                                    <h4 class="card-title card-title-dash">Top Performer</h4>
                                </div>
                                </div>
                                <div class="mt-3">
                                <div
                                    class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                                    <div class="d-flex">
                                    <img class="img-sm rounded-10" src="assets/images/faces/face1.jpg"
                                        alt="profile">
                                    <div class="wrapper ms-3">
                                        <p class="ms-1 mb-1 fw-bold">Brandon Washington</p>
                                        <small class="text-muted mb-0">162543</small>
                                    </div>
                                    </div>
                                    <div class="text-muted text-small">
                                    1h ago
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
        </div>
        </div>
    </div>
@endsection