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
            <div class="signup-content first-section">
                <div class="signup-image">
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped status-progress" role="progressbar"
                        aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:1%">
                            
                        </div>
                    </div>
                    <figure><img class="signup-img" src="{{ asset('img/custom/red-delivery.png') }}" alt="sing up image"></figure>
                    <a href="#" class="signup-image-link">I am already member</a>
                </div>
                <div class="signup-form">
                    <h2 class="form-title">Account Details</h2>
                    <p class="signup-text">So we know where to contact you</p>
                    <div class="register-form" id="register-form">
                        <div class="form-group">
                            <label for="email"><i class="zmdi zmdi-email"></i></label>
                            <input type="email" name="email" id="email" placeholder="Work Email" />
                        </div>
                        <div class="form-group">
                            <label for="work_phone"><i class="zmdi zmdi-phone material-icons-name"></i></label>
                            <input type="text" name="work_phone" id="work_phone" placeholder="Work Phone" />
                        </div>
                        <div class="form-group">
                            <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                            <input type="password" name="pass" id="pass" placeholder="Password" />
                        </div>
                        <div class="form-group">
                            <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                            <input type="password" name="re_pass" id="re_pass" placeholder="Repeat your password" />
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree to join EasyMoveEurope’s mailing list</a></label>
                        </div>
                        <div class="form-group form-button">
                            <input name="signup" id="first_stepbtn" class="form-submit" value="Next step">
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
                    <a href="#" class="signup-image-link">I am already member</a>
                </div>
                <div class="signup-form">
                    <h2 class="form-title">Company details</h2>
                    <p class="signup-text">Enables long-term benefits & VAT deduction</p>
                    <div class="register-form" id="register-form">
                        <div class="form-group">
                            <label for="company_name"><i class="zmdi zmdi-accounts material-icons-name"></i></label>
                            <input type="text" name="company_name" id="company_name" placeholder="Your Company Name" />
                        </div>
                        <div class="form-group">
                            <label for="company_country"><i class="zmdi zmdi-globe material-icons-name"></i></label>
                            <input type="text" name="company_country" id="company_country" placeholder="Country" />
                        </div>
                        <div class="form-group">
                            <label for="vat_id"><i class="zmdi zmdi-shield-security material-icons-name"></i></label>
                            <input type="text" name="vat_id" id="vat_id" placeholder="Please include the ISO country code (eg. LU14324350)" />
                        </div>
                        <div class="form-group form-button">
                            <input name="signup" id="second_stepbtn" class="form-submit" value="Next step">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>
<!-- End #main -->
<script>
    $( "#first_stepbtn" ).click(function() {
        $( ".first-section" ).addClass( "d-none" );
        $( ".second-section" ).removeClass( "d-none" );
        $( "#company_name" ).focus();
    });
</script>
@endsection