@extends("layouts.app")

@section("style")
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
@endsection

@section("content")                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               </header>   
    <section class="container dashboard">
        <div class="dashboard-area">

            @include("partials.sidebar")

            <div class="db-content col-lg-9 col-md-7 col-sm-12 col-12">
                <div class="db-top">
                    <h3 class="fredoka">
                      {{ Auth::user()->name }}'s Quote Requests
                    </h3>
                    <!-- <div>
                        <img class="db-img" src="{{ asset('images/small/dashboard/search.png') }}">
                        <img class="db-img" src="{{ asset('images/small/dashboard/notification.png') }}">
                    </div> -->
                </div>
                <div class="db-field">
                  <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                      <li class="nav-item" role="presentation">
                          <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Upcoming Quote</button>
                      </li>
                      <li class="nav-item" role="presentation">
                          <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Previous Quote</button>
                      </li>
                  </ul>
                  <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                      <table class="table table-hover"> 
                        <thead class="table-title">
                          <tr class="quote-tr">
                            <th>Sr.No.</th>
                            <th>Service</th>
                            <th>Date</th>
                            <th>Location</th>
                            <th>Reg Number</th>
                          </tr>
                        </thead>   
                        @foreach($up_quotes as $key => $updata)
                            <tbody>
                              <tr>
                                <td>{{$updata->id}}</td>
                                <td>{{$updata->serviceIds}}</td>
                                <td>{{$updata->created_at}}</td>
                                <td>{{$updata->sel_location}}</td>
                                <td>{{$updata->reg_number}}</td>
                              </tr>
                            </tbody>
                        @endforeach
                      </table>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                      <table class="table table-hover">
                        <thead class="table-title">
                          <tr class="quote-tr">
                            <th>Sr.No.</th>
                            <th>Service</th>
                            <th>Date</th>
                            <th>Location</th>
                            <th>Reg Number</th>
                          </tr>
                        </thead>
                        @foreach($pre_quotes as $key => $predata)
                            <tbody>
                              <tr>
                                <td>{{$predata->id}}</td>
                                <td>{{$predata->serviceIds}}</td>
                                <td>{{$predata->created_at}}</td>
                                <td>{{$predata->sel_location}}</td>
                                <td>{{$predata->reg_number}}</td>
                              </tr>
                            </tbody>
                        @endforeach
                      </table>
                    </div>
                  </div>
                </div>
            </div>
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