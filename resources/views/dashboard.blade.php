@extends('layouts.app')

@section("style")
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
@endsection

@section('content')
    <section class="container dashboard">
        <div class="dashboard-area">

            @include("partials.sidebar")

            <div class="db-content col-lg-9 col-md-7 col-sm-12 col-12">
                <div class="db-top">
                    <h3 class="fredoka">
                        {{ Auth::user()->name }}'s Dashboard
                    </h3>
                </div>
                <div class="db-field">
                    <p class="db-subtitle fredoka">Overview</p>
                    <div class="field-content">
                        <div class="field-boxes">
                            <a href="/quote" class="dash-link col-lg-5 col-md-10 col-sm-12 col-12" data-aos="flip-up" data-aos-delay="200">
                                <div class="field-box">
                                    <div class="fbox-image1">
                                        <i class="fa-solid fa-book-open dashboard-upcoming"></i>
                                    </div>
                                    <div class="fbox-text">
                                        <h3 class="fbox-num fredoka upcoming-booking" id="upcoming_count">0</h3>
                                        <p class="fbox-title">Upcoming Service</p>
                                    </div>
                                </div>
                            </a>
                            <a href="/pastQuote" class="dash-link col-lg-5 col-md-10 col-sm-12 col-12" data-aos="flip-up" data-aos-delay="400">
                                <div class="field-box">
                                    <div class="fbox-image2">
                                        <i class="fa-solid fa-book dashboard-past"></i>
                                    </div>
                                    <div class="fbox-text">
                                        <h3 class="fbox-num fredoka upcoming-quote" id="past_count">0</h3>
                                        <p class="fbox-title">Past Service</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="db-illustration">
                            <div class="sale-image col-lg-6 col-md-12">
                                <img class="sale-img" src="{{ asset('img/custom/Wavy.png') }}"> 
                            </div>
                            <div class="sale-text col-lg-6 col-md-12">
                                <p class="sale-title">The standard Lorem Ipsum passage, used since the 1500s</p>
                                <p class="sale-description">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua." </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        AOS.init({
            duration: 1200,
        })
    </script>
    <script type="text/javascript">
        $(function () {
            var pastCount = {{$pastCount}};
            var upcomingCount = {{$upcomingCount}};

            if(upcomingCount == '0') {
                $('#upcoming_count').html('0');
            } else {
                $('#upcoming_count').html(upcomingCount);    
            }

            if(pastCount == '0') {
                $('#past_count').html('0');
            } else {
                $('#past_count').html(pastCount);    
            }
        });
    </script>
@endsection
