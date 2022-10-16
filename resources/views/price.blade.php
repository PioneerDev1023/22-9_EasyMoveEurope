@extends("layouts.app")

@section("style")
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
    <link rel="stylesheet" href="{{ asset('css/price.css') }}">
    <link rel="stylesheet" href="https://cdn.tutorialjinni.com/intl-tel-input/17.0.8/css/intlTelInput.css"/>
    <script src="https://cdn.tutorialjinni.com/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    <link rel="stylesheet" href="{{ asset('fonts/material-icon/css/material-design-iconic-font.min.css') }}">
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
                        @csrf
                        <div class="d-flex flex-wrap justify-content-between order-cell">
                            <div class="col-lg-4 col-12">
                                <label class="order-label">Who orders?</label>
                            </div>
                            <div class="col-lg-8 col-12 d-flex service-box">
                                <div class="d-flex flex-wrap van-type-section">
                                    <div class="col-md-6 col-sm-12 col-12 mb-2">
                                        <div class="van-item me-1 d-flex justify-content-between px-3">
                                            <label class="d-flex van-label user-label" for="company_user">
                                                <input type="radio" class="btn-check first-checkbtn" name="who_type" value="company" id="company_user"
                                                autocomplete="off">
                                                <img src="{{ asset('img/icon/enterprise.png') }}" class="me-2" alt="" height="50"
                                                    loading="lazy">
                                                <p class="order-type-text">Company</p>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-12">
                                        <div class="van-item ms-1 d-flex justify-content-between px-3">
                                            <label class="d-flex van-label user-label" for="person_user">
                                                <input type="radio" class="btn-check first-checkbtn" name="who_type" value="person" id="person_user"
                                                    autocomplete="off">
                                                <img src="{{ asset('img/icon/person.png') }}" class="me-2" alt="" height="50"
                                                    loading="lazy">
                                                <p class="order-type-text">Private Person</p>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-none">
                            pickup_country<p id="ini_pickup_country" class="">{{$pickup_country}}</P>
                            destination_country<p id="ini_desti_country" class="">{{$destination_country}}</P>
                            <div> 
                                @foreach($pickup_prices as $key => $pickup_price)                                
                                    pickup_box_price<p id="pickup_box_price" class="">{{ $pickup_price->box_min }}</P>
                                    pickup_curtain_price<p id="pickup_curtain_price" class="">{{ $pickup_price->curtain_min }}</P>
                                    pickup_short_price<p id="pickup_short_price" class="">{{ $pickup_price->short_price }}</P>
                                    pickup_long_price<p id="pickup_long_price" class="">{{ $pickup_price->long_price }}</P>
                                @endforeach
                            </div>
                            <div>
                                @foreach($destination_prices as $key => $destination_price)                                
                                    destination_box_price<p id="destination_box_price" class="">{{ $destination_price->box_min }}</P>
                                    destination_curtain_price<p id="destination_curtain_price" class="">{{ $destination_price->curtain_min }}</P>
                                    destination_short_price<p id="destination_short_price" class="">{{ $destination_price->short_price }}</P>
                                    destination_long_price<p id="destination_long_price" class="">{{ $destination_price->long_price }}</P>
                                @endforeach
                            </div>
                        </div>
                        <div class="row mt-5 personal-section">
                            <div class="col-12 col-md-6 personal-infos mb-3">
                                <h2 class="h5"><span>Pickup Address</span></h2>
                                <div class="col-12 mt-4">
                                    <label class="form-check-label" for="pickup_country">COUNTRY</label>
                                    @foreach($pickup_prices as $key => $pickup_price)     
                                        <input type="text" name="pickup_country" id="pickup_country" value="{{ $pickup_price->country }}" class="form-control pickup-country" placeholder="Pickup Country" disabled>                           
                                    @endforeach
                                    <!-- <select id="pickup_country" name="pickup_country" class="pickup-country" onChange="pickupFunction(this);">
                                        <option value="AT" <?php echo $pickup_country == 'AT' ? 'selected' : "" ?> >Austria</option>
                                        <option value="BE" <?php echo $pickup_country == 'BE' ? 'selected' : "" ?> >Belgium</option>
                                        <option value="BG" <?php echo $pickup_country == 'BG' ? 'selected' : "" ?> >Bulgaria</option>
                                        <option value="HR" <?php echo $pickup_country == 'HR' ? 'selected' : "" ?> >Croatia</option>
                                        <option value="CZ" <?php echo $pickup_country == 'CZ' ? 'selected' : "" ?> >Czech Republic</option>
                                        <option value="DK" <?php echo $pickup_country == 'DK' ? 'selected' : "" ?> >Denmark</option>
                                        <option value="EE" <?php echo $pickup_country == 'EE' ? 'selected' : "" ?> >Estonia</option>
                                        <option value="FI" <?php echo $pickup_country == 'FI' ? 'selected' : "" ?> >Finland</option>
                                        <option value="FR" <?php echo $pickup_country == 'FR' ? 'selected' : "" ?> >France</option>
                                        <option value="DE" <?php echo $pickup_country == 'DE' ? 'selected' : "" ?> >Germany</option>
                                        <option value="GR" <?php echo $pickup_country == 'GR' ? 'selected' : "" ?> >Greece</option>
                                        <option value="HU" <?php echo $pickup_country == 'HU' ? 'selected' : "" ?> >Hungary</option>
                                        <option value="IE" <?php echo $pickup_country == 'IE' ? 'selected' : "" ?> >Ireland</option>
                                        <option value="IT" <?php echo $pickup_country == 'IT' ? 'selected' : "" ?> >Italy</option>
                                        <option value="LV" <?php echo $pickup_country == 'LV' ? 'selected' : "" ?> >Latvia</option>
                                        <option value="LT" <?php echo $pickup_country == 'LT' ? 'selected' : "" ?> >Lithuania</option>
                                        <option value="LU" <?php echo $pickup_country == 'LU' ? 'selected' : "" ?> >Luxembourg</option>
                                        <option value="NL" <?php echo $pickup_country == 'NL' ? 'selected' : "" ?> >Netherlands</option>
                                        <option value="NO" <?php echo $pickup_country == 'NO' ? 'selected' : "" ?> >Norway</option>
                                        <option value="PL" <?php echo $pickup_country == 'PL' ? 'selected' : "" ?> >Poland</option>
                                        <option value="PT" <?php echo $pickup_country == 'PT' ? 'selected' : "" ?> >Portugal</option>
                                        <option value="RO" <?php echo $pickup_country == 'RO' ? 'selected' : "" ?> >Romania</option>
                                        <option value="RS" <?php echo $pickup_country == 'RS' ? 'selected' : "" ?> >Serbia</option>
                                        <option value="SK" <?php echo $pickup_country == 'SK' ? 'selected' : "" ?> >Slovakia</option>
                                        <option value="SI" <?php echo $pickup_country == 'SI' ? 'selected' : "" ?> >Slovenia</option>
                                        <option value="ES" <?php echo $pickup_country == 'ES' ? 'selected' : "" ?> >Spain</option>
                                        <option value="SE" <?php echo $pickup_country == 'SE' ? 'selected' : "" ?> >Sweden</option>
                                        <option value="CH" <?php echo $pickup_country == 'CH' ? 'selected' : "" ?> >Switzerland</option>
                                        <option value="GB" <?php echo $pickup_country == 'GB' ? 'selected' : "" ?> >United Kingdom</option>
                                    </select>    -->
                                    <p class="error-valid" id="pickup_country_invalid"><i class="zmdi zmdi-alert-circle-o me-1"></i>Please select the country</p>
                                </div>
                                <div class="d-flex">
                                    <div class="col-12 mt-4">
                                        <label class="form-check-label" for="sender_city">FIND THE ADDRESS</label>
                                        <input type="text" name="sender_city" id="sender_city" class="form-control" onchange="esti_calc()" placeholder="Start typing your address">
                                        <p class="error-valid" id="sender_city_invalid"><i class="zmdi zmdi-alert-circle-o me-1"></i>Start typing your address</p>
                                    </div>
                                </div>
                                <div class="col-12 mt-4">
                                    <label class="form-check-label" for="sender">SENDER</label>
                                    <input type="text" name="sender" id="sender" class="form-control" placeholder="Name & Surname">
                                    <p class="error-valid" id="sender_invalid"><i class="zmdi zmdi-alert-circle-o me-1"></i>Please enter the sender name</p>
                                </div>
                                <div class="col-12 mt-4">
                                    <label class="form-check-label" for="sender_phone">PHONE NUMBER</label>
                                    <input type="number" class="form-control" name="sender_phone" id="sender_phone" placeholder="PHONE NUMBER">
                                    <p class="error-valid" id="sender_phone_invalid"><i class="zmdi zmdi-alert-circle-o me-1"></i>Please enter the phone number</p>
                                </div>
                                <!-- <div class="col-12 mt-4">
                                    <button type="text" class="form-control" name="sender_btn" id="sender_btn">Add another collection address</button>
                                </div> -->
                            </div>
                            <div class="col-12 col-md-6 personal-infos mb-3">
                                <h2 class="h5"><span>Delivery Address</span></h2>
                                <div class="col-12 mt-4">
                                    <label class="form-check-label" for="desti_country">COUNTRY</label>
                                    @foreach($destination_prices as $key => $destination_price)     
                                        <input type="text" name="desti_country" id="desti_country" value="{{ $destination_price->country }}" class="form-control desti-country" placeholder="Destination Country" disabled>
                                    @endforeach
                                    <!-- <select id="desti_country" name="desti_country" class="desti-country" onChange="destiFunction(this);">
                                        <option value="AT" <?php echo $destination_country == 'AT' ? 'selected' : "" ?> >Austria</option>
                                        <option value="BE" <?php echo $destination_country == 'BE' ? 'selected' : "" ?> >Belgium</option>
                                        <option value="BG" <?php echo $destination_country == 'BG' ? 'selected' : "" ?> >Bulgaria</option>
                                        <option value="HR" <?php echo $destination_country == 'HR' ? 'selected' : "" ?> >Croatia</option>
                                        <option value="CZ" <?php echo $destination_country == 'CZ' ? 'selected' : "" ?> >Czech Republic</option>
                                        <option value="DK" <?php echo $destination_country == 'DK' ? 'selected' : "" ?> >Denmark</option>
                                        <option value="EE" <?php echo $destination_country == 'EE' ? 'selected' : "" ?> >Estonia</option>
                                        <option value="FI" <?php echo $destination_country == 'FI' ? 'selected' : "" ?> >Finland</option>
                                        <option value="FR" <?php echo $destination_country == 'FR' ? 'selected' : "" ?> >France</option>
                                        <option value="DE" <?php echo $destination_country == 'DE' ? 'selected' : "" ?> >Germany</option>
                                        <option value="GR" <?php echo $destination_country == 'GR' ? 'selected' : "" ?> >Greece</option>
                                        <option value="HU" <?php echo $destination_country == 'HU' ? 'selected' : "" ?> >Hungary</option>
                                        <option value="IE" <?php echo $destination_country == 'IE' ? 'selected' : "" ?> >Ireland</option>
                                        <option value="IT" <?php echo $destination_country == 'IT' ? 'selected' : "" ?> >Italy</option>
                                        <option value="LV" <?php echo $destination_country == 'LV' ? 'selected' : "" ?> >Latvia</option>
                                        <option value="LT" <?php echo $destination_country == 'LT' ? 'selected' : "" ?> >Lithuania</option>
                                        <option value="LU" <?php echo $destination_country == 'LU' ? 'selected' : "" ?> >Luxembourg</option>
                                        <option value="NL" <?php echo $destination_country == 'NL' ? 'selected' : "" ?> >Netherlands</option>
                                        <option value="NO" <?php echo $destination_country == 'NO' ? 'selected' : "" ?> >Norway</option>
                                        <option value="PL" <?php echo $destination_country == 'PL' ? 'selected' : "" ?> >Poland</option>
                                        <option value="PT" <?php echo $destination_country == 'PT' ? 'selected' : "" ?> >Portugal</option>
                                        <option value="RO" <?php echo $destination_country == 'RO' ? 'selected' : "" ?> >Romania</option>
                                        <option value="RS" <?php echo $destination_country == 'RS' ? 'selected' : "" ?> >Serbia</option>
                                        <option value="SK" <?php echo $destination_country == 'SK' ? 'selected' : "" ?> >Slovakia</option>
                                        <option value="SI" <?php echo $destination_country == 'SI' ? 'selected' : "" ?> >Slovenia</option>
                                        <option value="ES" <?php echo $destination_country == 'ES' ? 'selected' : "" ?> >Spain</option>
                                        <option value="SE" <?php echo $destination_country == 'SE' ? 'selected' : "" ?> >Sweden</option>
                                        <option value="CH" <?php echo $destination_country == 'CH' ? 'selected' : "" ?> >Switzerland</option>
                                        <option value="GB" <?php echo $destination_country == 'GB' ? 'selected' : "" ?> >United Kingdom</option>
                                    </select>    -->
                                    <p class="error-valid" id="desti_country_invalid"><i class="zmdi zmdi-alert-circle-o me-1"></i>Please select the country</p>
                                </div>
                                <div class="d-flex">
                                    <div class="col-12 mt-4">
                                        <label class="form-check-label" for="receiver_city">FIND THE ADDRESS</label>
                                        <input type="text" name="receiver_city" id="receiver_city" class="form-control" onchange="esti_calc()" placeholder="Start typing your address">
                                        <p class="error-valid" id="receiver_city_invalid"><i class="zmdi zmdi-alert-circle-o me-1"></i>Start typing your address</p>
                                    </div>
                                </div>
                                <div class="col-12 mt-4">
                                    <label class="form-check-label" for="receiver">RECEIVER</label>
                                    <input type="text" name="receiver" id="receiver" class="form-control" placeholder="Name & Surname">
                                    <p class="error-valid" id="receiver_invalid"><i class="zmdi zmdi-alert-circle-o me-1"></i>Please enter the receiver name</p>
                                </div>
                                <div class="col-12 mt-4 receiver-phone-input">
                                    <label class="form-check-label" for="receiver_phone">PHONE NUMBER</label>
                                    <input type="number" name="receiver_phone" class="form-control" id="receiver_phone" placeholder="PHONE NUMBER"> 
                                    <p class="error-valid" id="receiver_phone_invalid"><i class="zmdi zmdi-alert-circle-o me-1"></i>Please enter the phone number</p>
                                </div>
                                <!-- <div class="col-12 mt-4">
                                    <button type="text" class="form-control" name="receiver_btn" id="receiver_btn">Add another delivery address</button>
                                </div> -->
                            </div>
                            
                        </div>
                        <div class="mt-3 van-section">
                            <label class="order-label" style="margin-bottom: 25px;">Select Van Type</label>
                            <div class="d-flex flex-wrap van-type-section">
                                <div class="col-lg-6 col-12 mb-2">
                                    <div class="van-item d-flex justify-content-between px-3">
                                        <label class="d-flex flex-wrap van-label" for="plane_van" onclick="tail_show()" onchange="esti_calc()">
                                            <div class="col-md-2 col-4">
                                                <input type="radio" class="btn-check" name="van_type" value="plane" id="plane_van" autocomplete="off">
                                            </div>
                                            <div class="col-md-4 col-8">
                                                <img src="{{ asset('img/icon/large_van.svg') }}" class="me-2" height="50" loading="lazy">
                                            </div>
                                            <div class="col-md-5 col-11">
                                                <h2 class="van-type-text">Curtain sider</h2>
                                                <div>
                                                    <p class="van-type-info">Size: 420 x 210 x 230</p>
                                                    <p class="van-type-info">Weight: 1000 kg</p>
                                                    <p class="van-type-info">Capacity: 19 Cubic</p>
                                                </div>
                                            </div>              
                                            <!-- Button trigger modal -->
                                            <div class="col-md-1 col-1">
                                                <i class="fa-solid fa-circle-info van-info" data-bs-toggle="modal" data-bs-target="#van-type-modal"></i>                                                
                                            </div>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="van-item d-flex justify-content-between px-3">
                                        <label class="d-flex flex-wrap van-label" for="box_van" onclick="tail_hide()" onchange="esti_calc()">
                                            <div class="col-md-2 col-4">
                                                <input type="radio" class="btn-check" name="van_type" value="box" id="box_van" checked="checked" autocomplete="off">
                                            </div>
                                            <div class="col-md-4 col-8">
                                                <img src="{{ asset('img/icon/small_van.svg') }}" class="me-2" alt="" height="50" loading="lazy">
                                            </div>
                                            <div class="col-md-5 col-11">
                                                <h2 class="van-type-text">Box</h2>
                                                <div>
                                                    <p class="van-type-info">Size: 420 x 175 x 180</p>
                                                    <p class="van-type-info">Weight: 1000 kg</p>
                                                    <p class="van-type-info">Capacity: 13 Cubic</p>
                                                </div>
                                            </div>
                                            <!-- Button trigger modal -->
                                            <div class="col-md-1 col-1">
                                                <i class="fa-solid fa-circle-info van-info" data-bs-toggle="modal" data-bs-target="#van-type-modal"></i>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <label class="order-label">Extra Services:</label>
                            </div>
                            <div class="service-options d-flex">
                                <div class="col-md-4 col-12 service-option">
                                    <div class="service-cell"
                                        id="help_loading_card"
                                        aria-checked="false"
                                        tabindex="0"
                                        onkeydown="toggleCheckbox(event)"
                                        onclick="toggleCheckbox(event)"
                                        onfocus="focusCheckbox(event)"
                                        onblur="blurCheckbox(event)">

                                        <input type="checkbox" name="help_loading" value="loading" id="loading" class="d-none">
                                        <div class="col-lg-3 col-12 check-image">
                                            <img class="check-img" src="{{ asset('img/icon/checkbox-unchecked-black.png') }}" alt="">
                                            <p class="check-text">83.30€</p>
                                        </div>
                                        <p class="service-text col-lg-5 col-12">Driver help - Loading</p>
                                        <img class="flat-img col-lg-4 col-12" src="{{ asset('img/icon/delivery-man.png') }}" alt="">
                                    </div>
                                </div>    
                                <div class="col-md-4 col-12 service-option">
                                    <div class="service-cell"
                                        id="help_unloading_card"
                                        aria-checked="false"
                                        tabindex="0"
                                        onkeydown="toggleCheckbox(event)"
                                        onclick="toggleCheckbox(event)"
                                        onfocus="focusCheckbox(event)"
                                        onblur="blurCheckbox(event)">

                                        <input type="checkbox" name="help_unloading" value="unloading" id="unloading" class="d-none">
                                        <div class="col-lg-3 col-12 check-image">
                                            <img class="check-img" src="{{ asset('img/icon/checkbox-unchecked-black.png') }}" alt="">
                                            <p class="check-text">83.30€</p>
                                        </div>
                                        <p class="service-text col-lg-5 col-12">Driver help - Unloading</p>
                                        <img class="flat-img col-lg-4 col-12" src="{{ asset('img/icon/delivery-man (2).png') }}" alt="">
                                    </div>
                                </div>
                                <div class="col-md-4 col-12 service-option" id="tail_lift_item">
                                    <div class="service-cell"
                                        id="help_lift_card"
                                        aria-checked="false"
                                        tabindex="0"
                                        onkeydown="toggleCheckbox(event)"
                                        onclick="toggleCheckbox(event)"
                                        onfocus="focusCheckbox(event)"
                                        onblur="blurCheckbox(event)">

                                        <input type="checkbox" name="tail_lift" value="tail_lift" id="tail_lift" class="d-none">
                                        <div class="col-lg-3 col-12 check-image">
                                            <img class="check-img" id="tail_lift_img" src="{{ asset('img/icon/checkbox-unchecked-black.png') }}" alt="">
                                            <p class="check-text">166.60€</p>
                                        </div>
                                        <p class="service-text col-lg-5 col-12">Tail Lift</p>
                                        <img class="flat-img col-lg-4 col-12" src="{{ asset('img/icon/container.png') }}" alt="">
                                    </div>
                                </div>
                            </div>   

                            <h2 class="h5"><span>Cargo information</span></h2>
                            <div class="col-12 mt-4">
                                <label class="form-check-label cargo-label" for="cargo_info">CARGO</label>
                                <textarea class="form-control" name="cargo_info" id="cargo_info" rows="6" placeholder="Please describe the cargo and enter its approximate dimensions, weight and volume"></textarea>
                                <p class="error-valid" id="cargo_info_invalid"><i class="zmdi zmdi-alert-circle-o me-1"></i>Please enter the cargo informations</p>
                            </div>
                            <div class="col-md-6 mt-4">
                                <label class="form-check-label cargo-label" for="cargo_val">VALUE</label>
                                <input type="number" name="cargo_val" id="cargo_val" class="form-control" placeholder="€">
                                <p class="error-valid" id="cargo_val_invalid"><i class="zmdi zmdi-alert-circle-o me-1"></i>Please enter the cargo value</p>
                            </div>
                            <!-- <div class="col-12 mt-4">
                                <button type="text" class="form-control" name="receiver_btn" id="receiver_btn">Add another delivery address</button>
                            </div> -->
                        </div>
                        <div class="row mt-5 contact-area">
                            <h2 class="h5"><span>Pickup options</span></h2>
                            <p class="desc-text">When do you want the pickup to take place?</p>
                            <div class="col-md-6 mt-4">
                                <label class="form-check-label" for="collection_day">PICK-UP DATE</label>
                                <input placeholder="Day of collection" name="collection_day" class="form-control" onchange="esti_calc()"
                                    type="text" onblur="(this.type='text')" onfocus="(this.type='date')" id="datepicker"
                                    data-date-days-of-week-disabled="0,6">
                                <p class="error-valid" id="collection_day_invalid"><i class="zmdi zmdi-alert-circle-o me-1"></i>Please enter the pickup date</p>
                            </div>

                            <h2 class="h5 mt-5">Contact details</h2>
                            <p class="desc-text">You will receive an order confirmation on this email address when you’re done with the payment.</p>
                            @guest 
                                <div class="col-md-4 mt-4">
                                    <label class="form-check-label" for="contact_name">NAME & SURNAME</label>
                                    <input type="text" name="contact_name" class="form-control" id="contact_name" placeholder="Please enter the contact name">
                                    <p class="error-valid" id="contact_name_invalid"><i class="zmdi zmdi-alert-circle-o me-1"></i>Please enter the contact name</p>
                                </div>
                                <div class="col-md-4 mt-4">
                                    <label class="form-check-label" for="contact_email">EMAIL ADDRESS</label>
                                    <input type="email" name="contact_email" class="form-control" id="contact_email" placeholder="Please enter the email address">
                                    <p class="error-valid" id="contact_email_invalid"><i class="zmdi zmdi-alert-circle-o me-1"></i>Please enter the email address</p>
                                </div>
                                <div class="col-md-4 mt-4">
                                    <label class="form-check-label" for="contact_phone">PHONE NUMBER</label>
                                    <input name="contact_phone" class="form-control" type="number" id="contact_phone" placeholder="PHONE NUMBER">
                                    <p class="error-valid" id="contact_phone_invalid"><i class="zmdi zmdi-alert-circle-o me-1"></i>Please enter the phone number</p>
                                </div>
                                <div class="d-none">
                                    <input type="email" name="user_email" class="form-control" id="user_email" placeholder="User email">
                                    <input type="text" name="user_type" class="form-control" id="user_type" placeholder="User type">
                                </div>
                            @else
                                <div class="col-md-4 mt-4">
                                    <label class="form-check-label" for="contact_name">NAME & SURNAME</label>
                                    <input type="text" name="contact_name" class="form-control" id="contact_name" placeholder="{{ Auth::user()->name }}">
                                    <p class="error-valid" id="contact_name_invalid"><i class="zmdi zmdi-alert-circle-o me-1"></i>Please enter the contact name</p>
                                </div>
                                <div class="col-md-4 mt-4">
                                    <label class="form-check-label" for="contact_email">EMAIL ADDRESS</label>
                                    <input type="email" name="contact_email" class="form-control" id="contact_email" placeholder="{{ Auth::user()->email }}">
                                    <p class="error-valid" id="contact_email_invalid"><i class="zmdi zmdi-alert-circle-o me-1"></i>Please enter the email address</p>
                                </div>
                                <div class="col-md-4 mt-4">
                                    <label class="form-check-label" for="contact_phone">PHONE NUMBER</label>
                                    <input name="contact_phone" class="form-control" type="number" id="contact_phone" placeholder="PHONE NUMBER">
                                    <p class="error-valid" id="contact_phone_invalid"><i class="zmdi zmdi-alert-circle-o me-1"></i>Please enter the phone number</p>
                                </div>
                                <div class="d-none">
                                    <input type="email" name="user_email" class="form-control" id="user_email" value="{{ Auth::user()->email }}" placeholder="{{ Auth::user()->email }}">
                                    <input type="text" name="user_type" class="form-control" id="user_type" placeholder="User type" value="{{ Auth::user()->type }}">
                                </div>
                            @endguest
                            

                            <div class="col-md-12 mt-4">
                                <label class="form-check-label" for="contact_note">SPECIAL NOTES - OPTIONAL</label>
                                <textarea class="form-control" name="contact_note" id="contact_note" rows="5" placeholder="Please describe the cargo and enter its approximate dimensions, weight and volume"></textarea>
                            </div>

                            <div class="form-check privacy-area">
                                <input class="form-check-input privacy-input" type="checkbox" name="term_agree" value="agreed" id="term_agree">
                                <label class="form-check-label" for="term_agree">
                                    I have read and accept the <a href="/privacy">Terms and Conditions of EasyMoveEurope</a>
                                </label>
                                <p class="error-valid" id="term_agree_invalid"><i class="zmdi zmdi-alert-circle-o me-1"></i>Please check and accept the terms and condition</p>
                            </div>
                            
                        </div>
                        <div class="alert alert-danger print-error-msg">
                            <ul></ul>
                        </div>
                        <div class="calculator d-flex flex-wrap">
                            <div class="col-md-4 col-4">
                                <!-- <button type="button" class="btn esti-btn my-3" onclick="esti_calc()">Get a price</button> -->
                                <div class="esti-prices">
                                    <p id="distance_value">Distance: <span id="distance_val" class="esti-price"></span></p>
                                    <p id="duration_value">Duration: <span id="duration_val" class="esti-price"></span></p>
                                    <p id="price_value">Price: € <span id="price_val" class="esti-price"></span></p>
                                </div>
                            </div>
                            <div class="col-md-8 col-8">
                                <div id="map"></div>
                            </div>
                        </div>
                        <div class="col-12 text-center d-flex flex-wrap justify-content-between mt-3" id="service_footer">
                            <div class="col-md-4 col-sm-9 col-9 d-flex justify-content-center mb-3 mx-auto">
                                <div class="">
                                    <p>From</p>
                                    <h3 class="pickup-footer"></h3>
                                </div>
                                <div class="d-flex loc-img">
                                    <img src="{{ asset('img/icon/location.png')}}" class="location-img">
                                    <img src="{{ asset('img/icon/remove.png')}}" class="location-img">
                                    <img src="{{ asset('img/icon/location.png')}}" class="location-img">
                                </div>
                                <div class="">
                                    <p>To</p>
                                    <h3 class="desti-footer"></h3>
                                </div>
                            </div>
                            <!-- <div class="col-md-3 col-sm-6 col-6 measure-cell">
                                <h3 class="where-country">Distance: <span id="footer_distance" class="esti-price"></span></h3>
                            </div>
                            <div class="col-md-3 col-sm-3 col-3 measure-cell">
                                <h3>Price: € <span id="footer_price" class="esti-price"></span></h3>
                            </div> -->
                            <div class="col-md-2 col-sm-12 col-12 measure-cell">
                                <button type="submit" id="submitbtn">Continue</button>
                            </div>
                        </div>
                        
                    </form>
                </div>
                <!-- End Quote Form -->
            </div>
        </div>
    </section>
    <!-- End Get a Quote Section -->
    <div id="fix_footer">
        <div class="fix-footer-wrapper container">
            <div class="col-md-6 col-12 d-flex justify-content-center fix-footer-route">
                <div class="location-area">
                    <p class="where-text">From</p>
                    <h3 class="pickup-footer where-country"></h3>
                </div>
                <div class="d-flex loc-img">
                    <img src="{{ asset('img/icon/location.png')}}" class="location-img">
                    <img src="{{ asset('img/icon/remove.png')}}" class="location-img">
                    <img src="{{ asset('img/icon/location.png')}}" class="location-img">
                </div>
                <div class="location-area">
                    <p class="where-text">To</p>
                    <h3 class="desti-footer where-country"></h3>
                </div>
            </div>
            <div class="col-md-3 col-6 measure-cell">
                <h3 class="where-country">Distance: <span id="fixed_footer_distance" class="esti-price"></span></h3>
            </div>
            <div class="col-md-3 col-6 measure-cell">
                <h3 class="where-country">Price: € <span id="fixed_footer_price" class="esti-price"></span></h3>
            </div>
            <!-- <div class="col-md-3 col-6 measure-cell">
                <button type="submit" class="submitbtn">Continue</button>
            </div> -->
        </div>
    </div>  
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
                                                <td>19</td>
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
                                        <img src="{{ asset('img/icon/plane-van-details.png') }}" alt="" class="img-fluid" loading="lazy"
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
                                                <td>13</td>
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
                                        <img src="{{ asset('img/icon/box-van-details.png') }}" alt="" class="img-fluid" loading="lazy"
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
                                    <div class="col-2">420 x 210 x 230</div>
                                    <div class="col-2">1000</div>
                                    <div class="col-2">19</div>
                                </button></div>
                            <div id="planeVanCollapse" class="accordion-collapse collapse"
                                data-bs-parent="#limitsAccordion" style="">
                                <div class="accordion-body">
                                    <div class="row align-items-center">
                                        <div class="col-md-7 mb-2"><img
                                                src="{{ asset('img/icon/plane-van-details.png') }}" alt=""
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
                                    <div class="col-2">420 x 175 x 180</div>
                                    <div class="col-2">1000</div>
                                    <div class="col-2">13</div>
                                </button></div>
                            <div id="boxVanCollapse" class="accordion-collapse collapse"
                                data-bs-parent="#limitsAccordion" style="">
                                <div class="accordion-body">
                                    <div class="row align-items-center">
                                        <div class="col-md-7 mb-2"><img src="{{ asset('img/icon/box-van-details.png') }}" alt=""
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

<!-- JS -->
<script>
    $(document).ready(function() {
        var user_type = $('#user_type').val();
        if(user_type == '') {
            $( "#person_user").prop('checked', true);
        } else if(user_type == 'user') {
            $( "#person_user").prop('checked', true);
        } else if(user_type == 'company') {
            $( "#company_user").prop('checked', true);
        }
    });
</script>
<script src="{{asset('js/datepicker.js')}}"></script>
<script src="{{asset('js/fixed-footer.js')}}"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDcUccmFJ_K2m8gV048ha6eoHtfx1XMZPc&libraries=places&v=weekly"></script>
<script>
    // Show/Hide the Tail-Lift item
    function tail_show() {
        $("#tail_lift_item").css("display", "block");
    }
    function tail_hide() {
        $("#tail_lift_item").css("display", "none");
    }

    // Setting the pickup and destination country
    var iniPickup = $("#pickup_country").val();
    var iniDesti = $("#desti_country").val();
    // var iniPickup = $("#pickup_country option:selected").text();
    // var iniDesti = $("#desti_country option:selected").text();
    
    $(".pickup-footer").text(iniPickup);
    $(".desti-footer").text(iniDesti);

    var changePickup;
    var pickup_country, destination_country;
    function pickupFunction(sel) {
        changePickup = sel.options[sel.selectedIndex].text;
        pickup_country = sel.options[sel.selectedIndex].value;
        $(".pickup-footer").text(changePickup);
        initialize();
        intlTelInput();
    }
    function destiFunction(sel) {
        changeDesti = sel.options[sel.selectedIndex].text;
        destination_country = sel.options[sel.selectedIndex].value;
        $(".desti-footer").text(changeDesti);
        initialize();
        intlTelInput();
    }

    

    // Google Map API Setting
    google.maps.event.addDomListener(window, 'load', initialize);

    pickup_country = $("#ini_pickup_country").html();
    destination_country = $("#ini_desti_country").text();

    function initialize() {
        var options_pickup = {
            types: ['address'],
            componentRestrictions: { country: pickup_country }
        };
        var options_desti = {
            types: ['address'],
            componentRestrictions: { country: destination_country }
        };
        var pickup_location = document.getElementById('sender_city');
        var destination_location = document.getElementById('receiver_city');

        var autocomplete_pick = new google.maps.places.Autocomplete(pickup_location, options_pickup);
        var autocomplete_desti = new google.maps.places.Autocomplete(destination_location, options_desti);

        autocomplete_pick.addListener('place_changed', function () {

            var first_place = autocomplete_pick.getPlace();

        });
        autocomplete_desti.addListener('place_changed', function () {

            var second_place = autocomplete_desti.getPlace();

        });

    }

    function esti_calc() {
        var pickup_location = document.getElementById("sender_city").value;
        var destination_location = document.getElementById("receiver_city").value;

        if(pickup_location == '' || destination_location == '') {
            Command: toastr["warning"]("Please type a pickup & destination addresses!");
            return;
        }

        const directionsService = new google.maps.DirectionsService();

        directionsService.route(
            {
                origin: pickup_location,
                destination: destination_location,
                travelMode: "DRIVING",
            },
            (response, status) => {
                if (status === "OK") {

                    new google.maps.DirectionsRenderer({
                    suppressMarkers: true,
                    directions: response,
                    map: map,
                    });
                }
            }
        )

        var service = new google.maps.DistanceMatrixService();
        service.getDistanceMatrix(
            {
            origins: [pickup_location],
            destinations: [destination_location],
            travelMode: 'DRIVING',
            }, callback);

        function callback(response, status) {
            if (status == 'OK') {
                var origins = response.originAddresses;
                var destinations = response.destinationAddresses;

                for (var i = 0; i < origins.length; i++) {
                    var results = response.rows[i].elements;
                    for (var j = 0; j < results.length; j++) {
                    var element = results[j];
                    var distance = element.distance.text;
                    var distance_value = element.distance.value;
                    var duration = element.duration.text;
                    var from = origins[i];
                    var to = destinations[j];
                    }
                }
            }

            var pickup_country = $('#pickup_country').val();
            var desti_country = $('#desti_country').val();

            var pickup_box_price = $('#pickup_box_price').html();
            var pickup_curtain_price = $('#pickup_curtain_price').html();
            var pickup_short_price = $('#pickup_short_price').html();
            var pickup_long_price = $('#pickup_long_price').html();

            var destination_box_price = $('#destination_box_price').html();
            var destination_curtain_price = $('#destination_curtain_price').html();
            var destination_short_price = $('#destination_short_price').html();
            var destination_long_price = $('#destination_long_price').html();
            
            var iniPickup = $("#pickup_country option:selected").text();
            var iniDesti = $("#desti_country option:selected").text();
            var van_type = $("input[name='van_type']:checked").val();
            var rest_distance = (distance_value - 500000) / 1000;

            var collection_day = $('#datepicker').val();
            var today = new Date().toISOString().slice(0, 10);
            
            var loading_checked = $("#help_loading_card").attr( "aria-checked" );
            var unloading_checked = $("#help_unloading_card").attr( "aria-checked" );
            var lift_checked = $("#help_lift_card").attr( "aria-checked" );

            var van_type_checked = $('input[name="van_type"]:checked').val();
            
            if(van_type_checked == "box") {
                $("#help_lift_card").attr("aria-checked", "false");
                $("#tail_lift_img").attr("src", "img/icon/checkbox-unchecked-black.png");
            }

            if (van_type == 'box') {
                if (pickup_box_price == destination_box_price) {
                    var min_price = pickup_box_price;
                } else if (pickup_box_price > destination_box_price) {
                    var min_price = pickup_box_price;
                } else if (pickup_box_price < destination_box_price) {
                    var min_price = destination_box_price;
                }
            } else if (van_type == 'plane') {
                if (pickup_curtain_price == destination_curtain_price) {
                    var min_price = pickup_curtain_price;
                } else if (pickup_curtain_price > destination_curtain_price) {
                    var min_price = pickup_curtain_price;
                } else if (pickup_curtain_price < destination_curtain_price) {
                    var min_price = destination_curtain_price;
                }
            }          

            if (distance_value < '500000') {
                var real_price = min_price;                 
            } else if (distance_value > '1000000') {
                var add_price = rest_distance * 0.93;
                var real_price = (Number(min_price) + Number(add_price)).toFixed(2);
            } else if ('500000' < distance_value < '1000000') {
                var add_price = rest_distance * 1.03;
                var real_price = (Number(min_price) + Number(add_price)).toFixed(2);
            }

            if(pickup_country == desti_country) {
                var real_price = Number(real_price) + 150;
                console.log("1");
            }

            if(loading_checked == "true") {
                var real_price = Number(real_price) + 83.3;
                console.log("2");
            }

            if(unloading_checked == "true") {
                var real_price = Number(real_price) + 83.3;
                console.log("3");
            }

            if(lift_checked == "true") {
                var real_price = Number(real_price) + 166.6;
                console.log("4");
            }
            if(collection_day == today) {
                var real_price = Number(real_price) + 95.2;
                console.log("5");
            }

            var weekend_day = new Date(collection_day);
            if(weekend_day.getDay() == 6 || weekend_day.getDay() == 0)
            {
                var real_price = Number(real_price) + 130.9;
                console.log("6");
            }

            var real_price = Number(real_price).toFixed(2);

            document.getElementById("distance_val").innerHTML = distance;
            document.getElementById("fixed_footer_distance").innerHTML = distance;
            document.getElementById("duration_val").innerHTML = duration;
            document.getElementById("price_val").innerHTML = real_price;
            document.getElementById("fixed_footer_price").innerHTML = real_price;
        }
    }

    const map = new google.maps.Map(document.getElementById("map"), {
        center: new google.maps.LatLng(46.03, 14.30),
        zoom: 3,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
    });

    // Setting IntlTelInput Number
    var receiver_phone = document.querySelector("#receiver_phone");
    var sender_phone = document.querySelector("#sender_phone");
    var contact_phone = document.querySelector("#contact_phone");
    
    window.intlTelInput(sender_phone, {
        initialCountry: pickup_country,
        formatOnDisplay: true,
        separateDialCode: true,
        hiddenInput: "sender_full_phone",
        utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
        onlyCountries: ["al", "ad", "at", "by", "be", "ba", "bg", "hr", "cz", "dk",
        "ee", "fo", "fi", "fr", "de", "gi", "gr", "va", "hu", "is", "ie", "it", "lv",
        "li", "lt", "lu", "mk", "mt", "md", "mc", "me", "nl", "no", "pl", "pt", "ro",
        "ru", "sm", "rs", "sk", "si", "es", "se", "ch", "ua", "gb"],
    });
    window.intlTelInput(receiver_phone, {
        initialCountry: destination_country,
        formatOnDisplay: true,
        separateDialCode: true,
        hiddenInput: "receiver_full_phone",
        utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
        separateDialCode: true,
        onlyCountries: ["al", "ad", "at", "by", "be", "ba", "bg", "hr", "cz", "dk",
        "ee", "fo", "fi", "fr", "de", "gi", "gr", "va", "hu", "is", "ie", "it", "lv",
        "li", "lt", "lu", "mk", "mt", "md", "mc", "me", "nl", "no", "pl", "pt", "ro",
        "ru", "sm", "rs", "sk", "si", "es", "se", "ch", "ua", "gb"],
    });
    window.intlTelInput(contact_phone, {
        initialCountry: pickup_country,
        formatOnDisplay: true,
        separateDialCode: true,
        hiddenInput: "contact_full_phone",
        utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
        onlyCountries: ["al", "ad", "at", "by", "be", "ba", "bg", "hr", "cz", "dk",
        "ee", "fo", "fi", "fr", "de", "gi", "gr", "va", "hu", "is", "ie", "it", "lv",
        "li", "lt", "lu", "mk", "mt", "md", "mc", "me", "nl", "no", "pl", "pt", "ro",
        "ru", "sm", "rs", "sk", "si", "es", "se", "ch", "ua", "gb"],
    });
</script>

<script>
    function toggleCheckbox(event) {

        var node = event.currentTarget
        var image = node.getElementsByTagName('img')[0]

        var state = node.getAttribute('aria-checked').toLowerCase()

        if (event.type === 'click' || (event.type === 'keydown' && event.keyCode === 32)) {
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
        esti_calc();
    }

    function focusCheckbox(event) {
        event.currentTarget.className += ' focus'
    }

    function blurCheckbox(event) {
        event.currentTarget.className = event.currentTarget.className .replace(' focus','')
    }
</script>

<script>
    $("#submitbtn").click(function(e){
        e.preventDefault();

        var _token = $("input[name='_token']").val();
        var who_type = $('input[name="who_type"]:checked').val();
        var pickup_country = $('#pickup_country').val();
        var sender_city = $('#sender_city').val();
        var sender = $('#sender').val();
        var sender_phone = $('#sender_phone').val();
        var sender_full_phone = $("input[name='sender_full_phone']").val();
        var desti_country = $('#desti_country').val();
        var receiver_city = $('#receiver_city').val();
        var receiver = $('#receiver').val();
        var receiver_phone = $('#receiver_phone').val();
        var receiver_full_phone = $("input[name='receiver_full_phone']").val();
        var van_type = $('input[name="van_type"]:checked').val();
        var help_loading = $("#help_loading_card").attr( "aria-checked" );
        var help_unloading = $("#help_unloading_card").attr( "aria-checked" );
        var tail_lift = $("#help_lift_card").attr( "aria-checked" );
        var cargo_info = $('#cargo_info').val();
        var cargo_val = $('#cargo_val').val();
        var collection_day = $('#datepicker').val();
        var contact_name = $('#contact_name').val();
        var contact_email = $('#contact_email').val();
        var user_email = $('#user_email').val();
        var contact_phone = $('#contact_phone').val();
        var contact_full_phone = $("input[name='contact_full_phone']").val();
        var contact_note = $('#contact_note').val();
        var term_agree = $('input[name="term_agree"]:checked').val();
        var price = $('#price_val').html();

        if(who_type == '') {
            $('#who_type_invalid').show();
            $("#who_type").focus();
        } else {
            $('#who_type_invalid').hide();
        }
        if(pickup_country == '') {
            $('#pickup_country_invalid').show();
            $("#pickup_country").focus();
        } else {
            $('#pickup_country_invalid').hide();
        }
        if(sender_city == '') {
            $('#sender_city_invalid').show();
            $("#sender_city").focus();
        } else {
            $('#sender_city_invalid').hide();
        }
        if(sender == '') {
            $('#sender_invalid').show();
            $("#sender").focus();
        } else {
            $('#sender_invalid').hide();
        }
        if(sender_phone == '') {
            $('#sender_phone_invalid').show();
            $("#sender_phone").focus();
        } else {
            $('#sender_phone_invalid').hide();
        }
        if(desti_country == '') {
            $('#desti_country_invalid').show();
            $("#desti_country").focus();
        } else {
            $('#desti_country_invalid').hide();
        }
        if(receiver_city == '') {
            $('#receiver_city_invalid').show();
            $("#receiver_city").focus();
        } else {
            $('#receiver_city_invalid').hide();
        }
        if(receiver == '') {
            $('#receiver_invalid').show();
            $("#receiver").focus();
        } else {
            $('#receiver_invalid').hide();
        }
        if(receiver_phone == '') {
            $('#receiver_phone_invalid').show();
            $("#receiver_phone").focus();
        } else {
            $('#receiver_phone_invalid').hide();
        }
        if(cargo_info == '') {
            $('#cargo_info_invalid').show();
            $("#cargo_info").focus();
        } else {
            $('#cargo_info_invalid').hide();
        }
        if(cargo_val == '') {
            $('#cargo_val_invalid').show();
            $("#cargo_val").focus();
        } else {
            $('#cargo_val_invalid').hide();
        }
        if(collection_day == '') {
            $('#collection_day_invalid').show();
            $("#collection_day").focus();
        } else {
            $('#collection_day_invalid').hide();
        }
        if(contact_name == '') {
            $('#contact_name_invalid').show();
            $("#contact_name").focus();
        } else {
            $('#contact_name_invalid').hide();
        }
        if(contact_email == '') {
            $('#contact_email_invalid').show();
            $("#contact_email").focus();
        } else {
            $('#contact_email_invalid').hide();
        }
        if(contact_phone == '') {
            $('#contact_phone_invalid').show();
            $("#contact_phone").focus();
        } else {
            $('#contact_phone_invalid').hide();
        }
        if(term_agree == '') {
            $('#term_agree_invalid').show();
            $("#term_agree").focus();
        } else {
            $('#term_agree_invalid').hide();
        }
        
        if(who_type == '' || pickup_country == '' || sender_city == '' || sender == '' || 
        sender_phone == '' || desti_country == '' || receiver_city == '' || receiver == '' || 
        receiver_phone == '' || cargo_info == '' || cargo_val == '' || collection_day == '' || contact_name == '' || 
        contact_email == '' || contact_phone == '' || term_agree == '') {
            return;
        }

        if(price == '') {
            Command: toastr["warning"]("Please check a price!", "Warning");
            return;
        }

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type:'POST',
            url:"{{ route('price.create') }}",
            data:{
                _token:_token, 
                who_type:who_type, 
                pickup_country:pickup_country,
                sender_city:sender_city,
                sender:sender, 
                sender_phone:sender_phone,
                sender_full_phone:sender_full_phone,
                desti_country:desti_country,
                receiver_city:receiver_city,
                receiver:receiver,
                receiver_phone:receiver_phone,
                receiver_full_phone:receiver_full_phone,
                van_type:van_type,
                help_loading:help_loading, 
                help_unloading:help_loading,
                tail_lift:tail_lift,
                cargo_info:cargo_info,
                cargo_val:cargo_val,
                collection_day:collection_day, 
                contact_name:contact_name,
                contact_email:contact_email,
                user_email: user_email,
                contact_phone:contact_phone,
                contact_full_phone:contact_full_phone,
                contact_note:contact_note,
                term_agree: term_agree,
                price: price,
            },
            success:function(data){
                if(data.status == '5') {
                    Command: toastr["warning"]("You do not have permission to access for this page.", "Warning");
                    return false;
                } else if (data.status == '2') {
                    Command: toastr["success"]("Valid Request", "Success");
                    setTimeout(() => {
                        window.location.href = "/invoice";
                    }, "3000")
                    return false;
                } else if(data.status == '1') {
                    Command: toastr["error"]("Database Error", "Error");
                    return false;
                } else if(data.status == '0') {
                    printErrorMsg(data.error);
                    return false;
                }                                          
            },
            error: function(data) {
                if(data.status == '401') {
                    Command: toastr["warning"]("Please login firstly!", "Warning");
                    setTimeout(() => {
                        window.location.href = "/login";
                    }, "3000")
                    return false;
                } else {
                    Command: toastr["error"]("An error occured!", "Error");
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
</script>
@endsection