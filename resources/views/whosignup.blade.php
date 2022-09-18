@extends("layouts.app")

@section("style")
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/material-icon/css/material-design-iconic-font.min.css') }}">
@endsection

@section("content")
<main id="main">
    <!-- Sing in  Form -->
    <div class="sign-in">
            <div class="signin-content">
                <div class="signin-image">
                    <figure><img class="login-side-img" src="{{ asset('img/EasyMove/bigVan boxes.png') }}" alt="sing up image"></figure>
                </div>

                <div class="signin-form">
                    <h2 class="form-title">Get started for free!</h2>
                    <p class="form-title">What will you be using EasyMoveEurope for?</p>
                    <div>
                        <a href="/comsignup" class="company-option signup-option">
                            <div class="col-3">
                                <img class="flat-img" src="{{ asset('img/icon/enterprise.png') }}" alt="">
                            </div>
                            <div class="col-9">
                                <h4>Work & Business</h4>
                                <p class="service-text">Long-term benefits & VAT deduction</p>
                            </div>
                        </a>
                        <a href="/register" class="person-option signup-option">
                            <div class="col-3">
                                <img class="flat-img" src="{{ asset('img/icon/person.png') }}" alt="">
                            </div>
                            <div class="col-9">
                                <h4>Personal needs</h4>
                                <p class="service-text">You will be shipping as an individual</p>
                            </div>
                        </a>
                    </div>
                </div>
        </div>
    </div>

  </main>
<!-- End #main -->
@endsection