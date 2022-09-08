@extends("layouts.app")

@section("style")
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
<link rel="stylesheet" href="{{ asset('fonts/material-icon/css/material-design-iconic-font.min.css') }}">
@endsection

@section("content")
<main id="main">
    <!-- Sing in  Form -->
    <div class="sign-in">
        <div class="signin-content">
            <div class="signin-image">
                <figure><img class="login-side-img" src="{{ asset('img/custom/delivery-man.png') }}" alt="sing up image"></figure>
                <a href="#" class="signup-image-link">Create an account</a>
            </div>

            <div class="signin-form">
                <h2 class="form-title">Log In</h2>
                <form method="POST" class="register-form" id="login-form">
                    @csrf

                    <div class="form-group">
                        <label for="email"><i class="zmdi zmdi-account material-icons-name"></i></label>
                        <input type="text" name="email" id="email" placeholder="Your email" />
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                        <input type="password" name="password" id="password" placeholder="Password" />
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="remember" id="remember" class="agree-term" />
                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                    <div class="form-group form-button">
                        <div>
                            <button type="submit" class="btn reg-btn" id="submitbtn">
                                {{ __('Login') }}
                            </button>
                        </div>
                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                        <p>Don 't have an account? <a href="{{ route('register') }}" class="login-link">Register</a></p>
                    </div>
                </form>
                <!-- <div class="social-login">
                    <span class="social-label">Or login with</span>
                    <ul class="socials">
                        <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                        <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                        <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                    </ul>
                </div> -->
            </div>
        </div>
    </div>

  </main>
<!-- End #main -->
<script>
    AOS.init({
        duration: 1200,
    })
</script>
<script>
    $(document).ready(function() {
        $("#submitbtn").click(function(e){
            e.preventDefault();

            var _token = $("input[name='_token']").val();
            var email = $('#email').val();
            var password = $('#password').val();

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
                url:"{{ route('login') }}",
                data:{
                    _token:_token, 
                    email:email, 
                    password:password
                },
                success:function(data){
                    if(data.status == '5') {
                        Command: toastr["error"]("Email-Address Or Password Are Wrong!", "Warning");
                        return false;
                    }else if(data.status == '3') {
                        window.location.href = "{{URL::to('admin/adminDashboard')}}";
                        return false;
                    }else if(data.status == '2') {
                        window.location.href = "{{URL::to('manager/managerDashboard')}}";
                        return false;
                    }else if(data.status == '9') {
                        window.location.href = "{{URL::to('dashboard')}}";
                        return false;
                    }else if(data.status == '1') {
                        Command: toastr["error"]("Your account is in review yet. Please wait for a while!", "Warning");
                        return false;
                    }else if(data.status == '0') {
                        printErrorMsg(data.error);
                        return false;
                    }                                     
                },
                error: function(data) {
                    Command: toastr["error"]("An error occured!", "Error");
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