@extends("layouts.app")

@section("style")
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/material-icon/css/material-design-iconic-font.min.css') }}">
@endsection

@section("content")
<main id="main">
    <!-- Sign up form -->
    <section class="signup">
        <div class="container">
            <form method="POST" class="register-form" id="register_form" autocomplete="off">
                @csrf
                <div class="signup-content first-section">
                    <div class="signup-image col-lg-6 col-md-12">
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped status-progress" role="progressbar"
                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:1%">
                                
                            </div>
                        </div>
                        <figure><img class="signup-img" src="{{ asset('img/custom/red-delivery.png') }}" alt="sing up image"></figure>
                        <a href="/login" class="signup-image-link">I am already member</a>
                    </div>
                    <div class="signup-form col-lg-6 col-md-12">
                        <h2 class="form-title">Account Details</h2>
                        <p class="signup-text">So we know where to contact you</p>
                        <div class="first-section-content">
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Work Email" autocomplete="off" />
                            </div>
                            <p class="error-valid" id="email_invalid"><i class="zmdi zmdi-alert-circle-o me-1"></i>Please input your email</p>
                            <div class="form-group">
                                <label for="work_phone"><i class="zmdi zmdi-phone material-icons-name"></i></label>
                                <input type="number" name="work_phone" id="work_phone" placeholder="Work Phone" autocomplete="off" />
                            </div>
                            <p class="error-valid" id="phone_invalid"><i class="zmdi zmdi-alert-circle-o me-1"></i>Please input your phone number</p>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Password" autocomplete="off" />
                            </div>
                            <p class="error-valid" id="pass_invalid"><i class="zmdi zmdi-alert-circle-o me-1"></i>Please input password</p>
                            <div class="form-group">
                                <label for="password_confirmation"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Repeat your password" />
                            </div>
                            <p class="error-valid" id="repass_invalid"><i class="zmdi zmdi-alert-circle-o me-1"></i>Please input confirmation password</p>
                            <p class="error-valid" id="two_pass_invalid"><i class="zmdi zmdi-alert-circle-o me-1"></i>Please input confirmation password exactly</p>
                            <!-- <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree to join EasyMoveEurope’s mailing list</a></label>
                            </div> -->
                            <div class="form-group form-button">
                                <p name="signup" id="first_stepbtn" class="form-submit"><i class="fa fa-arrow-right" aria-hidden="true"></i></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="signup-content second-section d-none">
                    <div class="signup-image">
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped status-progress" role="progressbar"
                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:35%">
                                
                            </div>
                        </div>
                        <figure><img class="signup-img" src="{{ asset('img/custom/red-delivery.png') }}" alt="sing up image"></figure>
                        <a href="/login" class="signup-image-link">I am already member</a>
                    </div>
                    <div class="signup-form">
                        <h2 class="form-title">Company details</h2>
                        <p class="signup-text">Enables long-term benefits & VAT deduction</p>
                        <div class="second-section-content">
                            <div class="form-group">
                                <label for="company_name"><i class="zmdi zmdi-accounts material-icons-name"></i></label>
                                <input type="text" name="company_name" id="company_name" placeholder="Your Company Name" />
                            </div>
                            <p class="error-valid" id="comname_invalid"><i class="zmdi zmdi-alert-circle-o me-1"></i>Please input company name</p>
                            <div class="form-group">
                                <label for="company_country"><i class="zmdi zmdi-globe material-icons-name"></i></label>
                                <input type="text" name="company_country" id="company_country" placeholder="Country" />
                            </div>
                            <p class="error-valid" id="comcountry_invalid"><i class="zmdi zmdi-alert-circle-o me-1"></i>Please input company country</p>
                            <div class="form-group">
                                <label for="vat_id"><i class="zmdi zmdi-shield-security material-icons-name"></i></label>
                                <input type="text" name="vat_id" id="vat_id" placeholder="Please include the ISO country code (eg. LU14324350)" />
                            </div>
                            <p class="error-valid" id="vat_invalid"><i class="zmdi zmdi-alert-circle-o me-1"></i>Please input VAT ID</p>
                            <div class="form-group form-button d-flex justify-content-between">
                                <p name="signup" id="preceding_stepbtn" class="operbtn form-submit"><i class="fa fa-arrow-left" aria-hidden="true"></i></p>
                                <p name="signup" id="next_stepbtn" class="operbtn form-submit"><i class="fa fa-arrow-right" aria-hidden="true"></i></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="signup-content third-section d-none">
                    <div class="signup-image">
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped status-progress" role="progressbar"
                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                
                            </div>
                        </div>
                        <figure><img class="signup-img" src="{{ asset('img/custom/red-delivery.png') }}" alt="sing up image"></figure>
                        <a href="/login" class="signup-image-link">I am already member</a>
                    </div>
                    <div class="signup-form">
                        <h2 class="form-title">Tell us more about your company</h2>
                        <p class="signup-text">We will use this information to tailor your service experience</p>
                        <div class="third-section-content">
                            <div>
                                <p>Your estimated monthly shipments?(optional)</p>
                                <div class="d-flex justify-content-between">
                                    <div class="col-4 p-3">
                                        <div class="van-item">
                                            <label class="d-flex van-label signup-label" for="to_five">
                                                <input type="radio" class="btn-check" name="tonumber" value="<=5" id="to_five"
                                                autocomplete="off">
                                                <p class="label-text">  &lt; 5 </p>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-4 p-3">
                                        <div class="van-item">
                                            <label class="d-flex van-label signup-label" for="to_twenty">
                                                <input type="radio" class="btn-check" name="tonumber" value="5-20" id="to_twenty"
                                                    autocomplete="off">
                                                <p class="label-text">5-20</p>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-4 p-3">
                                        <div class="van-item">
                                            <label class="d-flex van-label signup-label" for="overtwenty">
                                                <input type="radio" class="btn-check" name="tonumber" value=">=25" id="overtwenty"
                                                    autocomplete="off">
                                                <p class="label-text"> 25+ </p>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <p>Your shipments are mostly?(optional)</p>
                                <div class="d-flex justify-content-between">
                                    <div class="col-6 p-3">
                                        <div class="van-item">
                                            <label class="d-flex van-label signup-label" for="plane-van">
                                                <input type="radio" class="btn-check" name="ship_area" value="domestic" id="plane-van"
                                                    autocomplete="off">
                                                <p class="label-text">Domestic</p>
                                            </label>

                                        </div>
                                    </div>
                                    <div class="col-6 p-3">
                                        <div class="van-item">
                                            <label class="d-flex van-label signup-label" for="box-van">
                                                <input type="radio" class="btn-check" name="ship_area" value="international" id="box-van"
                                                    autocomplete="off">
                                                <p class="label-text">International</p>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="alert alert-danger print-error-msg">
                                    <ul></ul>
                                </div>
                            </div>
                            <div class="form-group form-button d-flex justify-content-between">
                                <p name="signup" id="preceding_lastbtn" class="operbtn form-submit"><i class="fa fa-arrow-left" aria-hidden="true"></i></p>
                                <button type="submit" name="signup" id="next_lastbtn" class="operbtn form-submit"><i class="fa fa-user-plus" aria-hidden="true"></i> Create</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

</main>
<!-- End #main -->

<script src="{{ asset('js/validation.min.js') }}"></script>
<script>
    $('document').ready(function() {  
        $(window).keydown(function(event){
            if(event.keyCode == 13) {
            event.preventDefault();
            return false;
            }
        });

        $( "#first_stepbtn" ).click(function() {
            email = $('#email').val();
            work_phone = $('#work_phone').val();
            password = $('#password').val();
            password_confirmation = $('#password_confirmation').val();

            if(email == '') {
                $('#email_invalid').show();
            } else {
                $('#email_invalid').hide();
            }

            if(work_phone == '') {
                $('#phone_invalid').show();
            } else {
                $('#phone_invalid').hide();
            }

            if(password == '') {
                $('#pass_invalid').show();
            } else {
                $('#pass_invalid').hide();
            }

            if(password_confirmation == '') {
                $('#repass_invalid').show();
            } else {
                $('#repass_invalid').hide();
            }

            if (password != '' && password_confirmation != '' && password != password_confirmation) {
                $('#two_pass_invalid').show();
            } else {
                $('#two_pass_invalid').hide();
            }

            if(email != '' && work_phone != '' && password != '' && password_confirmation != '' && password == password_confirmation ) {
                $( ".first-section" ).addClass( "d-none" );
                $( ".second-section" ).removeClass( "d-none" );
                $( "#company_name" ).focus();
            }
        });

        $( "#preceding_stepbtn" ).click(function() {
            $( ".first-section" ).removeClass( "d-none" );
            $( ".second-section" ).addClass( "d-none" );
            $( "#email" ).focus();
        });
        $( "#next_stepbtn" ).click(function() {
            company_name = $('#company_name').val();
            company_country = $('#company_country').val();
            vat_id = $('#vat_id').val();

            if(company_name == '') {
                $('#comname_invalid').show();
            } else {
                $('#comname_invalid').hide();
            }

            if(company_country == '') {
                $('#comcountry_invalid').show();
            } else {
                $('#comcountry_invalid').hide();
            }

            if(vat_id == '') {
                $('#vat_invalid').show();
            } else {
                $('#vat_invalid').hide();
            }

            if(company_name != '' && company_country != '' && vat_id != '') {
                $( ".third-section" ).removeClass( "d-none" );
                $( ".second-section" ).addClass( "d-none" );
            }
        });
        $( "#preceding_lastbtn" ).click(function() {
            $( ".third-section" ).addClass( "d-none" );
            $( ".second-section" ).removeClass( "d-none" );
            $( "#company_name" ).focus();
        });

        $("#next_lastbtn").click(function(e){
            e.preventDefault();

            var _token = $("input[name='_token']").val();
            var email = $('#email').val();
            var work_phone = $('#work_phone').val();
            var password = $('#password').val();
            var password_confirmation = $('#password_confirmation').val();
            var company_name = $('#company_name').val();
            var company_country = $('#company_country').val();
            var vat_id = $('#vat_id').val();
            var tonumber = $('input[name="tonumber"]:checked').val();
            var ship_area = $('input[name="ship_area"]:checked').val();

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            toastr.options = {
                "closeButton": true,
                "debug": false,
                "newestOnTop": false,
                "progressBar": true,
                "positionClass": "toast-top-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }

            $.ajax({
                type:'POST',
                url:"{{ route('comsignup.create') }}",
                data:{
                    _token:_token, 
                    email:email, 
                    work_phone:work_phone,
                    password:password,
                    password_confirmation:password_confirmation,
                    company_name:company_name, 
                    company_country:company_country,
                    vat_id:vat_id,
                    tonumber:tonumber,
                    ship_area:ship_area
                },
                success:function(data){
                    if(data.status == '2') {
                        Command: toastr["success"]("registered successfully", "Success");
                        setTimeout(() => {
                            window.location.href = "/login";
                        }, "3000")
                        return false;
                    } else if(data.status == '1') {
                        Command: toastr["error"]("Database Error", "Error");
                        return false;
                    } else if(data.status == '0') {
                        printErrorMsg(data.error);
                        return false;
                    }                                          
                }                
            });
        
            function printErrorMsg (msg) {
                $(".print-error-msg").find("ul").html('');
                $(".print-error-msg").css('display','block');
                $.each( msg, function( key, value ) {
                    $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
                    $(".print-error-msg").focus();
                });
            }
        }); 
    });
</script>
@endsection