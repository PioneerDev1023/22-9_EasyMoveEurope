@extends("layouts.app")

@section("style")
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
@endsection

@section("content")                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               </header>   
    <section class="container dashboard">
        <div class="dashboard-area">

            @include("partials.companySidebar")

            <div class="db-content col-lg-9 col-md-7 col-sm-12 col-12">
                <div class="db-top">
                    <h3 class="fredoka">
                        Upcoming Service
                    </h3>
                </div>
                <div class="db-field">
                  <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                      <table class="table table-hover"> 
                        <thead class="table-title">
                          <tr class="quote-tr">
                            <th>Sr.No.</th>
                            <th>Pickup</th>
                            <th>Destination</th>
                            <th>Date</th>
                            <th>Value</th>
                          </tr>
                        </thead>   
                        @foreach($requests as $key => $updata)
                          @if($updata->collection_day >= now())
                            <tbody>
                              <tr>
                                <td>{{$updata->id}}</td>
                                <td>{{$updata->sender_city}}</td>
                                <td>{{$updata->receiver_city}}</td>
                                <td>{{$updata->collection_day}}</td>
                                <td>{{$updata->price}}</td>
                              </tr>
                            </tbody>
                          @endif
                        @endforeach
                      </table>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </section>
@endsection