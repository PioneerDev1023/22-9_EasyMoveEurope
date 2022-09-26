@extends('layouts.adminApp')

@section("style")
    <link rel="stylesheet" href="{{ asset('css/admindashboard.css') }}">
@endsection
  
@section('content')
        <div class="row d-flex justify-content-center">
            <div class="row dt-content mt-5">
                <div class="col-md-12 text-right mb-5 d-flex justify-content-between">
                    <h1 class="mt-0 fredoka">Admin Dashboard</h1>
                </div>
            </div>
        </div>
    
        <div class="col-12">
            <div class="quick_activity_wrap d-flex flex-wrap">
            <div class="col-lg-6 single-card">
                    <a href="adminLocation">
                        <div class="interior interior-three d-flex justify-content-between">
                            <div class="card-content">
                                <h4 class="card-title fredoka">Total Person Request</h4>
                                <h1 class="card-text fredoka" id="p_requests">0</h1>
                                <!-- <p class="card-percent">Upcoming: <span class="counter" id="pu_requests"></span> </p> -->
                            </div>
                            <div class="card-icon">
                                <i class="fa fa-bank" aria-hidden="true"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-6 single-card">
                    <a href="#">
                        <div class="interior interior-four d-flex justify-content-between">
                            <div class="card-content">
                                <h4 class="card-title fredoka">Total Company Request</h4>
                                <h1 class="card-text fredoka" id="c_requests">0</h1>
                                <!-- <p class="card-percent">Upcoming: <span class="counter" id="cu_requests"></span></p> -->
                            </div>
                            <div class="card-icon">
                                <i class="fa fa-truck" aria-hidden="true"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-6 single-card">
                    <a href="adminUser">
                        <div class="interior interior-one d-flex justify-content-between">
                            <div class="card-content">
                                <h4 class="card-title fredoka">Total Persons</h4>
                                <h1 class="card-text fredoka" id="tuser">0</h1>
                                <!-- <p class="card-percent">New: <span class="counter" id="new_user"></span> </p> -->
                            </div>
                            <div class="card-icon">
                                <i class="fa fa-users" aria-hidden="true"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-6 single-card">
                    <a href="adminService">
                        <div class="interior interior-two d-flex justify-content-between">
                            <div class="card-content">
                                <h4 class="card-title fredoka">Total Companies</h4>
                                <h1 class="card-text fredoka" id="tcompany">0</h1>
                                <!-- <p class="card-percent">Detail: <span class="counter" id="ser_detail"></span> </p> -->
                            </div>
                            <div class="card-icon">
                                <i class="fa fa-building" aria-hidden="true"></i>
                            </div>
                        </div>
                    </a>    
                </div>
            </div>
        </div>
        
    <script type="text/javascript">
        $(function () {
        
            $.ajaxSetup({
                headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $users = {{$users}}
            $('#tuser').html($users);

            $companies = {{$companies}}
            $('#tcompany').html($companies);

            

            $p_requests = {{$p_requests}}
            $('#p_requests').html($p_requests);

            $c_requests = {{$c_requests}}
            $('#c_requests').html($c_requests);
        });
    </script>
@endsection