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
                                <h4 class="card-title card-title-dash">Pending Requests</h4>
                                <p class="card-subtitle card-subtitle-dash">You have 50+ new requests</p>
                            </div>
                            <div>
                                <button class="btn btn-primary btn-lg text-white mb-0 me-0" type="button"><i
                                    class="mdi mdi-account-plus"></i>Add new member</button>
                            </div>
                            </div>
                            <div class="table-responsive  mt-1">
                            <table class="table select-table">
                                <thead>
                                <tr>
                                    <th>
                                    <div class="form-check form-check-flat mt-0">
                                        <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" aria-checked="false"><i
                                            class="input-helper"></i></label>
                                    </div>
                                    </th>
                                    <th>Customer</th>
                                    <th>Company</th>
                                    <th>Progress</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                    <div class="form-check form-check-flat mt-0">
                                        <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" aria-checked="false"><i
                                            class="input-helper"></i></label>
                                    </div>
                                    </td>
                                    <td>
                                    <div class="d-flex ">
                                        <img src="assets/images/faces/face1.jpg" alt="">
                                        <div>
                                        <h6>Brandon Washington</h6>
                                        <p>Head admin</p>
                                        </div>
                                    </div>
                                    </td>
                                    <td>
                                    <h6>Company name 1</h6>
                                    <p>company type</p>
                                    </td>
                                    <td>
                                    <div>
                                        <div
                                        class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                        <p class="text-success">79%</p>
                                        <p>85/162</p>
                                        </div>
                                        <div class="progress progress-md">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 85%"
                                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    </td>
                                    <td>
                                    <div class="badge badge-opacity-warning">In progress</div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
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