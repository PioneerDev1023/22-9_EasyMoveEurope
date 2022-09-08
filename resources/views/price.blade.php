@extends("layouts.app")

@section("style")
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
    <link rel="stylesheet" href="https://cdn.tutorialjinni.com/intl-tel-input/17.0.8/css/intlTelInput.css"/>
    <script src="https://cdn.tutorialjinni.com/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
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
                <div class="form-wrapper">
                    <form method="post" class="php-email-form">
                        <div class="d-flex justify-content-between order-cell">
                            <div class="col-4">
                                <label class="order-label">Who orders?</label>
                            </div>
                            <div class="col-8 d-flex service-box">
                                <div class="service-options d-flex">
                                    <div class="col-md-6 col-sm-12 service-option">
                                        <div role="select"
                                            class="service-cell"
                                            aria-checked="false"
                                            tabindex="0"
                                            onkeydown="toggleCheckbox(event)"
                                            onclick="toggleCheckbox(event)"
                                            onfocus="focusCheckbox(event)"
                                            onblur="blurCheckbox(event)">
                                            <div class="col-2 check-image">
                                                <img class="check-img" src="{{ asset('img/icon/checkbox-unchecked-black.png') }}" alt="">
                                            </div>
                                            <p class="service-text col-7">Company</p>
                                            <img class="flat-img col-3" src="{{ asset('img/icon/enterprise.png') }}" alt="">
                                        </div>
                                    </div>    
                                    <div class="col-md-6 col-sm-12 service-option">
                                        <div role="select"
                                            class="service-cell"
                                            aria-checked="false"
                                            tabindex="0"
                                            onkeydown="toggleCheckbox(event)"
                                            onclick="toggleCheckbox(event)"
                                            onfocus="focusCheckbox(event)"
                                            onblur="blurCheckbox(event)">
                                            <div class="col-2 check-image">
                                                <img class="check-img" src="{{ asset('img/icon/checkbox-unchecked-black.png') }}" alt="">
                                            </div>
                                            <p class="service-text col-7">Private Person</p>
                                            <img class="flat-img col-3" src="{{ asset('img/icon/person.png') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-5 personal-section">
                            <div class="col-12 col-md-6 personal-infos">
                                <h2 class="h5"><span>Pickup Address</span></h2>
                                <div class="col-md-12 mt-4">
                                    <label class="form-check-label" for="pickup_country">COUNTRY</label>
                                    <input type="text" name="pickup_country" id="pickup_country" class="form-control" placeholder="COUNTRY" required>
                                </div>
                                <div class="col-md-12 mt-4">
                                    <label class="form-check-label" for="sender_ad">FIND THE ADDRESS</label>
                                    <input type="text" name="sender_ad" id="sender_ad" class="form-control" placeholder="Enter street, house no., city" required>
                                </div>
                                <div class="col-md-12 mt-4">
                                    <label class="form-check-label" for="sender">SENDER</label>
                                    <input type="text" name="sender" id="sender" class="form-control" placeholder="Name & Surname" required>
                                </div>
                                <div class="col-md-12 mt-4 d-flex justify-content-between">
                                    <label class="form-check-label" for="sender_phone">PHONE NUMBER</label>
                                    <input type="text" class="col-12 form-control" name="sender_phone" id="sender_phone" placeholder="4155552671" required>
                                </div>
                                <div class="col-md-12 mt-4">
                                    <button type="text" class="form-control" name="sender_btn" id="sender_btn">Add another collection address</button>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 personal-infos">
                                <h2 class="h5"><span>Delivery Address</span></h2>
                                <div class="col-md-12 mt-4">
                                    <label class="form-check-label" for="destination_country">COUNTRY</label>
                                    <input type="text" name="destination_country" id="destination_country" class="form-control" placeholder="COUNTRY" required>
                                </div>
                                <div class="col-md-12 mt-4">
                                    <label class="form-check-label" for="receiver_ad">FIND THE ADDRESS</label>
                                    <input type="text" name="receiver_ad" id="receiver_ad" class="form-control" placeholder="Enter street, house no., city" required>
                                </div>
                                <div class="col-md-12 mt-4">
                                    <label class="form-check-label" for="receiver">RECEIVER</label>
                                    <input type="text" name="receiver" id="receiver" class="form-control" placeholder="Name & Surname" required>
                                </div>
                                <div class="col-md-12 mt-4 receiver-phone-input d-flex justify-content-between">
                                    <label class="form-check-label" for="receiver_phone">PHONE NUMBER</label>
                                    <input name="receiver_phone" class="form-control" type="text" id="receiver_phone" placeholder="4155552671" required> 
                                </div>
                                <div class="col-md-12 mt-4">
                                    <button type="text" class="form-control" name="receiver_btn" id="receiver_btn">Add another delivery address</button>
                                </div>
                            </div>
                        </div>
                        <div class="mt-3 van-section">
                            <label class="order-label" style="margin-bottom: 25px;">Select Van Type</label>
                            <div class="d-flex van-type-section">
                                <div class="col-6">
                                    <div class="van-item me-1 d-flex justify-content-between px-3">
                                        <label class="d-flex van-label" for="plane-van">
                                            <input type="radio" class="btn-check" name="van-type" value="plane" id="plane-van"
                                            autocomplete="off">
                                            <img src="{{ asset('img/icon/large_van.svg') }}" class="me-2" alt="" height="50"
                                                loading="lazy">
                                            <h2 style="margin:auto 25px;">Curtain sider</h2>
                                            <!-- Button trigger modal -->
                                            <i class="fa-solid fa-circle-info van-info" data-bs-toggle="modal" data-bs-target="#van-type-modal"></i>
                                        </label>

                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="van-item ms-1 d-flex justify-content-between px-3">
                                        <label class="d-flex van-label" for="box-van">
                                            <input type="radio" class="btn-check" name="van-type" value="box" id="box-van"
                                                autocomplete="off">
                                            <img src="{{ asset('img/icon/small_van.svg') }}" class="me-2" alt="" height="50"
                                                loading="lazy">
                                            <h2 style="margin:auto 25px;">Box</h2>
                                            <!-- Button trigger modal -->
                                            <i class="fa-solid fa-circle-info van-info" data-bs-toggle="modal" data-bs-target="#van-type-modal"></i>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <label class="order-label">Extra Services:</label>
                            </div>
                            <div class="service-options d-flex">
                                <div class="col-md-4 col-sm-12 service-option">
                                    <div role="checkbox"
                                        class="service-cell"
                                        aria-checked="false"
                                        tabindex="0"
                                        onkeydown="toggleCheckbox(event)"
                                        onclick="toggleCheckbox(event)"
                                        onfocus="focusCheckbox(event)"
                                        onblur="blurCheckbox(event)">
                                        <div class="col-3 check-image">
                                            <img class="check-img" src="{{ asset('img/icon/checkbox-unchecked-black.png') }}" alt="">
                                            <p class="check-text">83.30€</p>
                                        </div>
                                        <p class="service-text col-5">Driver help - Loading</p>
                                        <img class="flat-img col-4" src="{{ asset('img/icon/delivery-man.png') }}" alt="">
                                    </div>
                                </div>    
                                <div class="col-md-4 col-sm-12 service-option">
                                    <div role="checkbox"
                                        class="service-cell"
                                        aria-checked="false"
                                        tabindex="0"
                                        onkeydown="toggleCheckbox(event)"
                                        onclick="toggleCheckbox(event)"
                                        onfocus="focusCheckbox(event)"
                                        onblur="blurCheckbox(event)">
                                        <div class="col-3 check-image">
                                            <img class="check-img" src="{{ asset('img/icon/checkbox-unchecked-black.png') }}" alt="">
                                            <p class="check-text">83.30€</p>
                                        </div>
                                        <p class="service-text col-5">Driver help - Unloading</p>
                                        <img class="flat-img col-4" src="{{ asset('img/icon/delivery-man (2).png') }}" alt="">
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12 service-option">
                                    <div role="checkbox"
                                        class="service-cell"
                                        aria-checked="false"
                                        tabindex="0"
                                        onkeydown="toggleCheckbox(event)"
                                        onclick="toggleCheckbox(event)"
                                        onfocus="focusCheckbox(event)"
                                        onblur="blurCheckbox(event)">
                                        <div class="col-3 check-image">
                                            <img class="check-img" src="{{ asset('img/icon/checkbox-unchecked-black.png') }}" alt="">
                                            <p class="check-text">166.60€</p>
                                        </div>
                                        <p class="service-text col-5">Tail Lift</p>
                                        <img class="flat-img col-4" src="{{ asset('img/icon/container.png') }}" alt="">
                                    </div>
                                </div>
                            </div>   

                            <h2 class="h5"><span>Cargo information</span></h2>
                            <div class="col-md-12 mt-4">
                                <label class="form-check-label cargo-label" for="cargo_info">CARGO</label>
                                <textarea class="form-control" name="cargo_info" rows="6" placeholder="Please describe the cargo and enter its approximate dimensions, weight and volume"
                                    required></textarea>
                            </div>
                            <div class="col-md-6 mt-4">
                                <label class="form-check-label cargo-label" for="cargo_val">VALUE</label>
                                <input type="text" name="cargo_val" class="form-control" placeholder="€" required>
                            </div>
                            <div class="col-md-12 mt-4">
                                <button type="text" class="form-control" name="receiver_btn" id="receiver_btn">Add another delivery address</button>
                            </div>
                        </div>
                        <div class="row mt-5 contact-area">
                            <h2 class="h5"><span>Pickup options</span></h2>
                            <p class="desc-text">When do you want the pickup to take place?</p>
                            <div class="col-md-6 mt-4">
                                <label class="form-check-label" for="cargo_val">PICK-UP DATE</label>
                                <input placeholder="Day of collection" name="collection_day" class="form-control"
                                    type="text" onblur="(this.type='text')" onfocus="(this.type='date')" id="datepicker"
                                    data-date-days-of-week-disabled="0,6" required>
                            </div>

                            <h2 class="h5 mt-5">Contact details</h2>
                            <p class="desc-text">You will receive an order confirmation on this email address when you’re done with the payment.</p>
                            <div class="col-md-4 mt-4">
                                <label class="form-check-label" for="cargo_val">NAME & SURNAME</label>
                                <input type="text" name="cargo_val" class="form-control" required>
                            </div>
                            <div class="col-md-4 mt-4">
                                <label class="form-check-label" for="cargo_val">EMAIL ADDRESS</label>
                                <input type="text" name="cargo_val" class="form-control" required>
                            </div>
                            <div class="col-md-4 mt-4">
                                <label class="form-check-label" for="pickup_phone">PHONE NUMBER</label>
                                <input name="pickup_phone" class="form-control" type="text" id="pickup_phone" required>
                            </div>

                            <div class="col-md-12 mt-4">
                                <label class="form-check-label" for="cargo_info">SPECIAL NOTES - OPTIONAL</label>
                                <textarea class="form-control" name="cargo_info" rows="5" placeholder="Please describe the cargo and enter its approximate dimensions, weight and volume"
                                    required></textarea>
                            </div>

                            <div class="form-check privacy-area">
                                <input class="form-check-input privacy-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    I have read and accept the <a href="/privacy">Terms and Conditions of EasyMoveEurope</a>
                                </label>
                            </div>
                            

                            
                        </div>
                        <div class="col-md-12 text-center d-flex justify-content-between">
                            <!-- <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your price request has been sent successfully. Thank you!
                            </div> -->
                            <div class="col-6 d-flex justify-content-center">
                                <div class="">
                                    <p>From</p>
                                    <h3>France</h3>
                                </div>
                                <div class="d-flex loc-img">
                                    <img src="{{ asset('img/icon/location.png')}}" class="location-img">
                                    <img src="{{ asset('img/icon/remove.png')}}" class="location-img">
                                    <img src="{{ asset('img/icon/location.png')}}" class="location-img">
                                </div>
                                <div class="">
                                    <p>To</p>
                                    <h3>Belgium</h3>
                                </div>
                            </div>
                            <div class="col-3 measure-cell">
                                <h3>Price: € 123</h3>
                            </div>
                            <div class="col-3 measure-cell">
                                <button type="submit">Continue</button>
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

<script>
    var receiver_phone = document.querySelector("#receiver_phone");
    var sender_phone = document.querySelector("#sender_phone");
    window.intlTelInput(receiver_phone, {
        separateDialCode: true,
        onlyCountries: ["al", "ad", "at", "by", "be", "ba", "bg", "hr", "cz", "dk",
                        "ee", "fo", "fi", "fr", "de", "gi", "gr", "va", "hu", "is", "ie", "it", "lv",
                        "li", "lt", "lu", "mk", "mt", "md", "mc", "me", "nl", "no", "pl", "pt", "ro",
                        "ru", "sm", "rs", "sk", "si", "es", "se", "ch", "ua", "gb"],
    });
    window.intlTelInput(sender_phone, {
        separateDialCode: true,
        onlyCountries: ["al", "ad", "at", "by", "be", "ba", "bg", "hr", "cz", "dk",
                        "ee", "fo", "fi", "fr", "de", "gi", "gr", "va", "hu", "is", "ie", "it", "lv",
                        "li", "lt", "lu", "mk", "mt", "md", "mc", "me", "nl", "no", "pl", "pt", "ro",
                        "ru", "sm", "rs", "sk", "si", "es", "se", "ch", "ua", "gb"],
    });
</script>

<script src="{{asset('js/datepicker.js')}}"></script>
<script>

    function toggleCheckbox(event) {

    var node = event.currentTarget
    var image = node.getElementsByTagName('img')[0]

    var state = node.getAttribute('aria-checked').toLowerCase()

    if (event.type === 'click' || 
        (event.type === 'keydown' && event.keyCode === 32)
        ) {
            if (state === 'true') {
            node.setAttribute('aria-checked', 'false')
            image.src = '{{ asset('img/icon/checkbox-unchecked-black.png') }}'
            }
            else {
            node.setAttribute('aria-checked', 'true')
            image.src = '{{ asset('img/icon/checkbox-checked-black.png') }}'
            }  

    event.preventDefault()
    event.stopPropagation()
    }

    }

    function focusCheckbox(event) {
        event.currentTarget.className += ' focus'
    }

    function blurCheckbox(event) {
        event.currentTarget.className = event.currentTarget.className .replace(' focus','')
    }
</script>
@endsection