@extends("layouts.app")

@section("style")
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
@endsection

@section("content")                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               </header>   
    <section class="container dashboard">
        <div class="dashboard-area">

            @include("partials.companySidebar")

            <section class="col-lg-8 col-md-7 col-sm-12 col-12">
                
                <div class="px-5 py-5">
                    <div class="col-lg-12">
                        <div class="header-content d-flex justify-content-between mb-5">
                            <h2 class="title fredoka">Profile Details</h2>
                            <!-- Button trigger modal -->
                        </div>
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Location</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{ Auth::user()->location }}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Full Name</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{ Auth::user()->name }}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Email</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{ Auth::user()->email }}</p>
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
@endsection
