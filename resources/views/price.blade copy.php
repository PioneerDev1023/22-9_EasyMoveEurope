@extends("layouts.app")

@section("style")
<link rel="stylesheet" href="{{ asset('css/landing.css') }}">
@endsection

@section("content")
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="page-header d-flex align-items-center"
            style="background-image: url('{{ asset('img/EasyMove/img16.jpg') }}');">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h2>Get a price</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- ======= Get a Quote Section ======= -->
    <section id="get-a-quote" class="get-a-quote">
        <div class="container" data-aos="fade-up">

            <div class="row g-0">

                <!-- <div class="col-lg-5 quote-bg" style="background-image: url({{ asset('img/quote-bg.jpg') }});"></div> -->
                <div>
                    <form method="post" class="php-email-form">
                        <div class="d-flex justify-content-between order-cell">
                            <div>
                                <label class="order-label">Who orders?</label>
                            </div>
                            <div class="d-flex service-box">
                                <div class="form-check pe-3 mt-3">
                                    <input type="radio" class="form-check-input order-input" id="radio1" name="optradio"
                                        value="company">Company
                                    <label class="form-check-label" for="radio1"></label>
                                </div>
                                <div class="form-check mt-3">
                                    <input type="radio" class="form-check-input order-input" id="radio2" name="optradio"
                                        value="person">Private person
                                    <label class="form-check-label" for="radio2"></label>
                                </div>
                            </div>
                        </div>
                        <div class="mt-3 order-cell">
                            <label class="order-label">Select Van Type</label>
                            <div class="d-flex">
                                <div class="col-6">
                                    <div class="van-item me-1 d-flex justify-content-between px-3">
                                        <input type="radio" class="btn-check" name="van" value="plane" id="plane-van"
                                            autocomplete="off">
                                        <label class="" for="plane-van">
                                            <img src="{{ asset('img/plane-van.svg') }}" class="me-2" alt="" height="20"
                                                loading="lazy">
                                            <span>Curtain sider</span>
                                        </label>

                                        <!-- Button trigger modal -->
                                        <i class="fa-solid fa-circle-info van-info" data-bs-toggle="modal"
                                            data-bs-target="#van-type-modal"></i>

                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="van-item ms-1 d-flex justify-content-between px-3">
                                        <input type="radio" class="btn-check" name="van" value="box" id="box-van"
                                            autocomplete="off">
                                        <label class="" for="box-van">
                                            <img src="{{ asset('img/box-van.svg') }}" class="me-2" alt="" height="20"
                                                loading="lazy">
                                            <span>Box</span>
                                        </label>
                                        <!-- Button trigger modal -->
                                        <i class="fa-solid fa-circle-info van-info" data-bs-toggle="modal"
                                            data-bs-target="#van-type-modal"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="form-check mt-3 d-flex justify-content-end">
                                <input type="radio" class="form-check-input order-input me-1" id="radio3"
                                    name="optradio" value="Tail Lift">Tail Lift
                                <label class="form-check-label" for="radio3"></label>
                            </div>
                        </div>
                        <div class="mt-3 d-flex justify-content-between order-cell">
                            <div>
                                <label class="order-label">Extra Services:</label>
                            </div>
                            <div class="d-flex service-box">
                                <div class="form-check pe-3 mt-3">
                                    <input type="radio" class="form-check-input order-input" id="radio4" name="optradio"
                                        value="load">Help to load
                                    <label class="form-check-label" for="radio4"></label>
                                </div>
                                <div class="form-check mt-3">
                                    <input type="radio" class="form-check-input order-input" id="radio5" name="optradio"
                                        value="unload">Help to unload
                                    <label class="form-check-label" for="radio5"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-5">

                            <div class="col-12 col-md-6">
                                <h2 class="h5"><span>Pickup Address</span></h2>
                                <div class="col-md-12 mt-4">
                                    <input type="text" name="name" class="form-control" placeholder="Name" required>
                                </div>
                                <div class="col-md-12 mt-4">
                                    <input type="text" name="departure" class="form-control"
                                        placeholder="City of Departure" required>
                                </div>
                                <div class="col-md-12 mt-4">
                                    <input type="text" class="form-control" name="phone" placeholder="Phone" required>
                                </div>
                                <div class="col-md-12 mt-4">
                                    <input type="text" class="form-control" name="doorbell"
                                        placeholder="Name or number on the doorbell" required>
                                </div>
                            </div>

                            <div class="col-12 col-md-6">
                                <h2 class="h5"><span>Delivery Address</span></h2>
                                <div class="col-md-12 mt-4">
                                    <input type="text" name="name" class="form-control" placeholder="Name" required>
                                </div>
                                <div class="col-md-12 mt-4">
                                    <input type="text" name="delivery" class="form-control" placeholder="Delivery City"
                                        required>
                                </div>
                                <div class="col-md-12 mt-4">
                                    <input type="text" class="form-control" name="phone" placeholder="Phone" required>
                                </div>
                                <div class="col-md-12 mt-4">
                                    <input type="text" class="form-control" name="doorbell"
                                        placeholder="Name or number on the doorbell" required>
                                </div>
                            </div>


                            <h2 class="h5"><span>Shipment Details</span></h2>
                            <div class="col-md-4 mt-4">
                                <input type="text" name="weight" class="form-control" placeholder="Total Weight (kg)"
                                    required>
                            </div>

                            <div class="col-md-4 mt-4">
                                <input type="text" name="dimensions" class="form-control" placeholder="Dimensions (cm)"
                                    required>
                            </div>

                            <div class="col-md-4 mt-4">
                                <input placeholder="Day of collection" name="collection_day" class="form-control"
                                    type="text" onblur="(this.type='text')" onfocus="(this.type='date')" id="datepicker"
                                    data-date-days-of-week-disabled="0,6" required>
                            </div>

                            <div class="col-md-12 mt-4">
                                <textarea class="form-control" name="message" rows="6" placeholder="Message"
                                    required></textarea>
                            </div>


                            <div class="col-md-12 text-center">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your price request has been sent successfully. Thank you!
                                </div>

                                <button type="submit">Get a price</button>
                            </div>

                        </div>
                    </form>
                </div>

                <!-- End Quote Form -->

            </div>

        </div>
    </section>
    <!-- End Get a Quote Section -->

</main>
<!-- End #main -->

<!-- Modal -->
<div class="modal fade" id="van-type-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content bg-light">
            <div class="modal-body p-3 p-md-2">
                <div class="d-md-none">
                    <a href="#" class="text-body fw-bold" data-bs-dismiss="modal" style="color: grey; text-decoration: none;">Close</a>
                    <ul class="nav nav-pills justify-content-between my-3" id="limitsTabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button type="button" class="nav-link btn btn-white active" data-bs-toggle="pill"
                                data-bs-target="#planeVanTab" role="tab" aria-controls="planeVanTab"
                                aria-selected="true">
                                <img src="{{ asset('img/icon/plane-van-big.svg') }}" alt="" loading="lazy">
                                <span>Plane van</span>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button type="button" class="nav-link btn btn-white" data-bs-toggle="pill"
                                data-bs-target="#boxVanTab" role="tab" aria-controls="boxVanTab" aria-selected="false">
                                <img src="{{ asset('img/icon/box-van-big.svg') }}" alt="" loading="lazy">
                                <span>Box van</span>
                            </button>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="planeVanTab" role="tabpanel">
                            <div class="card shadow-lg">
                                <div class="card-body small">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <img src="{{ asset('img/icon/epals.svg') }}" alt="" class="me-2" loading="lazy">
                                                    <span>Epals</span>
                                                </td>
                                                <td>10 pallets</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="{{ asset('img/icon/load-size.svg') }}" alt="" class="me-2" loading="lazy">
                                                    <span>Max load size (cm)</span>
                                                </td>
                                                <td>420 x 210 x 230</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="{{ asset('img/icon/weight.svg') }}" alt="" class="me-2" loading="lazy">
                                                    <span>Max weight (kg)</span>
                                                </td>
                                                <td>1000</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="{{ asset('img/icon/capacity.svg') }}" alt="" class="me-2" loading="lazy">
                                                    <span>Capacity (m<sup>3</sup>)</span>
                                                </td>
                                                <td>24</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <button type="button" class="btn btn-sm btn-outline-primary rounded-pill my-4"
                                        data-bs-toggle="collapse" data-bs-target="#planeVanLayout" aria-expanded="false"
                                        aria-controls="planeVanLayout">Show van layout</button>
                                    <div class="collapse van-layout p-4" id="planeVanLayout">
                                        <button type="button" class="btn-close float-end" data-bs-toggle="collapse"
                                            data-bs-target="#planeVanLayout" aria-label="Close">

                                        </button>
                                        <img src="{{ asset('img/icon/plane-van-details.svg') }}" alt="" class="img-fluid" loading="lazy"
                                            data-xblocker="passed" style="visibility: visible;">
                                    </div>
                                    <p class="fw-bold text-uppercase">Plane van is best for:</p>
                                    <ul>
                                        <li>Pallet shipment / custom loads</li>
                                        <li>Rear loading / side loading</li>
                                    </ul>
                                    <div class="d-flex">
                                        <i class="fa-solid fa-circle-info" style="margin: 5px 10px; color: green;"></i>
                                        <p style="color: grey;"><span style="font-weight: 600;">Curtain-Side van + Tail Lift:</span>Total capacity is 700kg (due the lift weight)
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="boxVanTab" role="tabpanel">
                            <div class="card shadow-lg">
                                <div class="card-body small">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td><img src="{{ asset('img/icon/epals.svg') }}" alt="" class="me-2" loading="lazy">
                                                    <span>Epals</span>
                                                </td>
                                                <td>6 pallets</td>
                                            </tr>
                                            <tr>
                                                <td><img src="{{ asset('img/icon/load-size.svg') }}" alt="" class="me-2" loading="lazy">
                                                    <span>Max load size (cm)</span>
                                                </td>
                                                <td>420 x 175 x 180</td>
                                            </tr>
                                            <tr>
                                                <td><img src="{{ asset('img/icon/weight.svg') }}" alt="" class="me-2" loading="lazy">
                                                    <span>Max weight (kg)</span>
                                                </td>
                                                <td>1000</td>
                                            </tr>
                                            <tr>
                                                <td><img src="{{ asset('img/icon/capacity.svg') }}" alt="" class="me-2" loading="lazy">
                                                    <span>Capacity (m<sup>3</sup>)</span>
                                                </td>
                                                <td>10</td>
                                            </tr>
                                        </tbody>
                                    </table><button type="button"
                                        class="btn btn-sm btn-outline-primary rounded-pill my-4"
                                        data-bs-toggle="collapse" data-bs-target="#boxVanLayout" aria-expanded="false"
                                        aria-controls="boxVanLayout">Show van layout</button>
                                    <div class="collapse van-layout p-4" id="boxVanLayout">
                                        <button type="button"
                                            class="btn-close float-end" data-bs-toggle="collapse"
                                            data-bs-target="#boxVanLayout" aria-label="Close">
                                        </button> 
                                        <img src="{{ asset('img/icon/box-van-details.svg') }}" alt="" class="img-fluid" loading="lazy"
                                            data-xblocker="passed" style="visibility: visible;">
                                    </div>
                                    <p class="fw-bold text-uppercase">Box van is best for:</p>
                                    <ul>
                                        <li>High-value items requiring additional security measures (e.g. electronics,
                                            luxury)</li>
                                        <li>Rear loading</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-none d-md-block">
                    <div class="my-2 ms-3"><a href="#" class="text-body fw-bold" data-bs-dismiss="modal">Close</a></div>
                    <div class="row g-2 py-2 text-uppercase text-center heading" style="font-size: 12px;">
                        <div class="col-4 ps-5 text-start">Type</div>
                        <div class="col-1">Epals</div>
                        <div class="col-2"><img src="{{ asset('img/icon/load-size.svg') }}" alt="" loading="lazy"> <span>Max load size
                                (cm)</span></div>
                        <div class="col-2"><img src="{{ asset('img/icon/weight.svg') }}" alt="" loading="lazy"> <span>Max weight
                                (kg)</span></div>
                        <div class="col-2"><img src="{{ asset('img/icon/capacity.svg') }}" alt="" loading="lazy"> <span>Capacity
                                (m<sup>3</sup>)</span></div>
                    </div>
                    <div class="accordion" id="limitsAccordion">
                        <div class="accordion-item shadow">
                            <div class="accordion-header"><button
                                    class="accordion-button fs-7 fs-xl-6 text-center collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#planeVanCollapse" aria-expanded="false"
                                    aria-controls="planeVanCollapse">
                                    <div class="col-4 text-start"><img src="{{ asset('img/icon/plane-van-big.svg') }}"
                                            alt="" class="me-4" loading="lazy"> <strong class="text-primary">Plane
                                            van</strong></div>
                                    <div class="col-1">10</div>
                                    <div class="col-2">420 x 210 x 230</div>
                                    <div class="col-2">1000</div>
                                    <div class="col-2">24</div>
                                </button></div>
                            <div id="planeVanCollapse" class="accordion-collapse collapse"
                                data-bs-parent="#limitsAccordion" style="">
                                <div class="accordion-body">
                                    <div class="row align-items-center">
                                        <div class="col-md-7 mb-2"><img
                                                src="{{ asset('img/icon/plane-van-details.svg') }}" alt=""
                                                class="img-fluid" loading="lazy" data-xblocker="passed"
                                                style="visibility: visible;"></div>
                                        <div class="col-md-5">
                                            <div class="card border-1">
                                                <div class="card-body">
                                                    <p class="fw-bold text-uppercase">Plane van is best for:</p>
                                                    <ul>
                                                        <li>Pallet shipment / custom loads</li>
                                                        <li>Rear loading / side loading</li>
                                                    </ul>
                                                    <div class="d-flex">
                                                        <i class="fa-solid fa-circle-info" style="margin: 5px 10px; color: green;"></i>
                                                        <p style="color: grey;"><span style="font-weight: 600;">Curtain-Side van + Tail Lift:</span>Total capacity is 700kg (due the lift weight)
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item shadow">
                            <div class="accordion-header"><button
                                    class="accordion-button fs-7 fs-xl-6 text-center collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#boxVanCollapse" aria-expanded="false"
                                    aria-controls="boxVanCollapse">
                                    <div class="col-4 text-start"><img src="{{ asset('img/icon/box-van-big.svg') }}"
                                            alt="" class="ms-2 me-5" loading="lazy">
                                        <strong class="text-primary">Box van</strong>
                                    </div>
                                    <div class="col-1">6</div>
                                    <div class="col-2">420 x 175 x 180</div>
                                    <div class="col-2">1000</div>
                                    <div class="col-2">10</div>
                                </button></div>
                            <div id="boxVanCollapse" class="accordion-collapse collapse"
                                data-bs-parent="#limitsAccordion" style="">
                                <div class="accordion-body">
                                    <div class="row align-items-center">
                                        <div class="col-md-7 mb-2"><img src="{{ asset('img/icon/box-van-details.svg') }}" alt=""
                                                class="img-fluid" loading="lazy" data-xblocker="passed"
                                                style="visibility: visible;"></div>
                                        <div class="col-md-5">
                                            <div class="card border-1">
                                                <div class="card-body">
                                                    <p class="fw-bold text-uppercase">Box van is best for:</p>
                                                    <ul>
                                                        <li>High-value items requiring additional security measures
                                                            (e.g. electronics, luxury)</li>
                                                        <li>Rear loading</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{asset('js/datepicker.js')}}"></script>
@endsection