@extends('layouts.userapp')


</style>
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
                                        <h4 class="card-title">Bilgileriniz</h4>
                                        <p class="card-description">Rolünüz: {{ Auth::user()->role }}</p>
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