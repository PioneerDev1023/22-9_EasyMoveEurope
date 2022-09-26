@extends("layouts.app")

@section("style")
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
@endsection

@section("content")                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               </header>   
    <section class="container dashboard">
        <div class="dashboard-area">
            @include("partials.companySidebar")
            <section class="col-lg-8 col-md-7 col-sm-12 col-12 profile-section">
                
                <div class="px-5 py-5">
                    <div class="col-lg-12">
                        <div class="header-content d-flex justify-content-between">
                            <h2 class="title fredoka">Profile Details</h2>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <i class="fa fa-edit"></i>Edit
                            </button>
                        </div>
                        
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="alert alert-danger print-error-msg">
                                        <ul></ul>
                                    </div>
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Profile Details</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post">
                                            @foreach($profiles as $key => $data)
                                                <div class="mb-3 d-none">
                                                    <label for="uid" class="col-form-label">ID:</label>
                                                    <input type="text" class="form-control" id="uid" value="{{$data->id}}">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="uname" class="col-form-label">Company Name:</label>
                                                    <input type="text" class="form-control" id="uname" value="{{$data->name}}">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="uemail" class="col-form-label">Email:</label>
                                                    <input class="form-control" id="uemail" value="{{$data->email}}">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="uname" class="col-form-label">Phone:</label>
                                                    <input type="text" class="form-control" id="uphone" value="{{$data->phone}}">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="uemail" class="col-form-label">Company Country:</label>
                                                    <input class="form-control" id="ucountry" value="{{$data->company_country}}">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="uemail" class="col-form-label">VAT-ID:</label>
                                                    <input class="form-control" id="uvat" value="{{$data->vat_id}}">
                                                </div>
                                            @endforeach
                                        </form>
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary" id="profile_btn">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4">
                            @foreach($profiles as $key => $data)
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Company Name</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0">{{$data->name}}</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Email</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0">{{$data->email}}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Phone</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0">{{$data->phone}}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Company Country</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0">{{$data->company_country}}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">VAT-ID</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0">{{$data->vat_id}}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="header-content d-flex justify-content-between">
                            <h2 class="title fredoka">Password</h2>
                            <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModalTwo">
                                <i class="fa fa-edit"></i>Edit
                            </button>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModalTwo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="alert alert-danger print-error-msg">
                                        <ul></ul>
                                    </div>
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Password</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post">
                                            @foreach($profiles as $key => $data)
                                                <div class="mb-3 d-none">
                                                    <label for="uid" class="col-form-label">ID:</label>
                                                    <input type="text" class="form-control" id="uid" value="{{$data->id}}">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="old_password" class="col-form-label">Password:</label>
                                                    <input type="password" class="form-control" id="old_password" value="" placeholder="old password">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="new_password" class="col-form-label">New Password:</label>
                                                    <input type="password" class="form-control" id="new_password" value="" placeholder="new password">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="confirm_password" class="col-form-label">Confirm Password:</label>
                                                    <input type="password" class="form-control" id="confirm_password" value="" placeholder="confirm password">
                                                </div>
                                            @endforeach
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary" id="password_btn">Save changes</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Password</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">xxxxxxxxxxxxxxxx</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
    <script type="text/javascript">
        $(function () {
            upcomingCount = {{$upcomingCount}};
            upcomingRepair = {{$upcomingRepair}};
            if(upcomingCount == '0') {
                $('#sidebar_booking').hide();
            }
            if(upcomingRepair == '0') {
                $('#sidebar_quote').hide();
            }
            reloadUpcomming();
        });
    </script>
    <script>
        $(document).ready(function() {
          $("#profile_btn").click(function() {
            var _token = $("input[name='_token']").val();
            var uid = $('#uid').val();
            var uname = $('#uname').val();
            var uemail = $('#uemail').val();
            var uphone = $('#uphone').val();
            var ucountry = $('#ucountry').val();
            var uvat = $('#uvat').val();

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type:'POST',
                url:"{{ route('companyProfile.store') }}",
                data:{
                    _token:_token,
                    uid:uid, 
                    uname:uname, 
                    uemail:uemail,
                    uphone:uphone, 
                    ucountry:ucountry, 
                    uvat:uvat
                },
                success:function(data){
                    if(data.status == '2') {
                        Command: toastr["success"]("Updated the profile", "Success");
                        location.reload(true);
                    } else if(data.status == '1') {
                        Command: toastr["error"]("Database Error", "Error");
                        return false;
                    }  else if(data.status == '0') {
                        printErrorMsg(data.error);
                        return false;
                    }                                          
                },
                error: function(data) {
                    if(data.status == '401') {
                        Command: toastr["warning"]("Please login firstly!", "Warning");
                    } else {
                        Command: toastr["error"]("An error occured!", "Error");
                    }
                }
            });
            function printErrorMsg (msg) {
                $(".print-error-msg").find("ul").html('');
                $(".print-error-msg").css('display','block');
                $.each( msg, function( key, value ) {
                    $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
                    $( ".print-error-msg" ).focus();
                });
            }
          });


          $("#password_btn").click(function() {
            var _token = $("input[name='_token']").val();
            var uid = $('#uid').val();
            var old_password = $('#old_password').val();
            var new_password = $('#new_password').val();
            var confirm_password = $('#confirm_password').val();

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            

            $.ajax({
                type:'POST',
                url:"{{ route('companyProfile.password') }}",
                data:{
                    _token:_token,
                    uid:uid, 
                    old_password:old_password, 
                    new_password:new_password,
                    confirm_password:confirm_password
                },
                success:function(data){
                    console.log(data);
                    if(data.status == '5') {
                        Command: toastr["error"]("Old Password Doesn't match!", "Error");
                        return false;
                    }else if(data.status == '2') {
                        Command: toastr["success"]("Updated the profile", "Success");
                        location.reload(true);
                    } else if(data.status == '1') {
                        Command: toastr["error"]("Database Error", "Error");
                        return false;
                    }  else if(data.status == '0') {
                        printErrorMsg(data.error);
                        return false;
                    }                                          
                },
                error: function(data) {
                    if(data.status == '401') {
                        Command: toastr["warning"]("Please login firstly!", "Warning");
                    } else {
                        Command: toastr["error"]("An error occured!", "Error");
                    }
                }
            });
            function printErrorMsg (msg) {
                $(".print-error-msg").find("ul").html('');
                $(".print-error-msg").css('display','block');
                $.each( msg, function( key, value ) {
                    $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
                    $( ".print-error-msg" ).focus();
                });
            }
          });
        });
    </script>
@endsection
