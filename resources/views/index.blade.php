@extends("layouts.app")

@section("style")
<link rel="stylesheet" href="{{ asset('css/landing.css') }}">
@endsection

@section("content")
<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center">
    <div class="container">
        <div class="row gy-4 d-flex justify-content-between">
            <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                <h2 data-aos="fade-up">Dedicated Van Service</h2>
                <h4 data-aos="fade-up" data-aos-delay="100">For residential or commercial move,<br /> rent a dedicated
                    van with driver</h4>
                <form class="form-search mb-3" data-aos="fade-up" data-aos-delay="200" action="{{ route('price.index') }}" method="POST">
                    @csrf
                    <div>
                        <div class="d-flex justify-content-between mt-3">
                            <div class="col-6">
                                <div class="me-1">
                                    <label>From (Pickup Country)</label>
                                    <div class="d-flex">
                                        <i class="fa-solid fa-location-dot awesome-icon"></i>
                                        <select id="pickup_country" name="pickup_country" class="form-control select-country country-input" required>
                                            <option value="">Search to type</option>
                                            <option value="AL">Albania</option>
                                            <option value="AD">Andorra</option>
                                            <option value="AT">Austria</option>
                                            <option value="BY">Belarus</option>
                                            <option value="BE">Belgium</option>
                                            <option value="BA">Bosnia and Herzegovina</option>
                                            <option value="BG">Bulgaria</option>
                                            <option value="HR">Croatia</option>
                                            <option value="CZ">Czech Republic</option>
                                            <option value="DK">Denmark</option>
                                            <option value="EE">Estonia</option>
                                            <option value="FO">Faroe Islands</option>
                                            <option value="FI">Finland</option>
                                            <option value="FR">France</option>
                                            <option value="DE">Germany</option>
                                            <option value="GI">Gibraltar</option>
                                            <option value="GR">Greece</option>
                                            <option value="VA">Holy See (Vatican City State)</option>
                                            <option value="HU">Hungary</option>
                                            <option value="IS">Iceland</option>
                                            <option value="IE">Ireland</option>
                                            <option value="IT">Italy</option>
                                            <option value="LV">Latvia</option>
                                            <option value="LI">Liechtenstein</option>
                                            <option value="LT">Lithuania</option>
                                            <option value="LU">Luxembourg</option>
                                            <option value="MK">Macedonia, the Former Yugoslav Republic of</option>
                                            <option value="MT">Malta</option>
                                            <option value="MD">Moldova, Republic of</option>
                                            <option value="MC">Monaco</option>
                                            <option value="ME">Montenegro</option>
                                            <option value="NL">Netherlands</option>
                                            <option value="NO">Norway</option>
                                            <option value="PL">Poland</option>
                                            <option value="PT">Portugal</option>
                                            <option value="RO">Romania</option>
                                            <option value="SM">San Marino</option>
                                            <option value="RS">Serbia</option>
                                            <option value="SK">Slovakia</option>
                                            <option value="SI">Slovenia</option>
                                            <option value="ES">Spain</option>
                                            <option value="SE">Sweden</option>
                                            <option value="CH">Switzerland</option>
                                            <option value="UA">Ukraine</option>
                                            <option value="GB">United Kingdom</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="ms-1">
                                    <label>To (Delivery Country)</label>
                                    <div class="d-flex">
                                        <i class="fa-solid fa-location-dot awesome-icon"></i>
                                        <select id="destination_country" name="destination_country" class="form-control select-country country-input" required>
                                            <option value="">Search to type</option>
                                            <option value="AL">Albania</option>
                                            <option value="AD">Andorra</option>
                                            <option value="AT">Austria</option>
                                            <option value="BY">Belarus</option>
                                            <option value="BE">Belgium</option>
                                            <option value="BA">Bosnia and Herzegovina</option>
                                            <option value="BG">Bulgaria</option>
                                            <option value="HR">Croatia</option>
                                            <option value="CZ">Czech Republic</option>
                                            <option value="DK">Denmark</option>
                                            <option value="EE">Estonia</option>
                                            <option value="FO">Faroe Islands</option>
                                            <option value="FI">Finland</option>
                                            <option value="FR">France</option>
                                            <option value="DE">Germany</option>
                                            <option value="GI">Gibraltar</option>
                                            <option value="GR">Greece</option>
                                            <option value="VA">Holy See (Vatican City State)</option>
                                            <option value="HU">Hungary</option>
                                            <option value="IS">Iceland</option>
                                            <option value="IE">Ireland</option>
                                            <option value="IT">Italy</option>
                                            <option value="LV">Latvia</option>
                                            <option value="LI">Liechtenstein</option>
                                            <option value="LT">Lithuania</option>
                                            <option value="LU">Luxembourg</option>
                                            <option value="MK">Macedonia, the Former Yugoslav Republic of</option>
                                            <option value="MT">Malta</option>
                                            <option value="MD">Moldova, Republic of</option>
                                            <option value="MC">Monaco</option>
                                            <option value="ME">Montenegro</option>
                                            <option value="NL">Netherlands</option>
                                            <option value="NO">Norway</option>
                                            <option value="PL">Poland</option>
                                            <option value="PT">Portugal</option>
                                            <option value="RO">Romania</option>
                                            <option value="SM">San Marino</option>
                                            <option value="RS">Serbia</option>
                                            <option value="SK">Slovakia</option>
                                            <option value="SI">Slovenia</option>
                                            <option value="ES">Spain</option>
                                            <option value="SE">Sweden</option>
                                            <option value="CH">Switzerland</option>
                                            <option value="UA">Ukraine</option>
                                            <option value="GB">United Kingdom</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="submit-button">
                        <button type="submit" class="submitbtn">Continue</button>
                        <!-- <button type="submit" class="submitbtn btn btn-primary">Continue</button> -->
                    </div>
                </form>
            </div>

            <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
                <img src="{{ asset('img/EasyMove/main.png') }}" class="img-fluid mb-3 mb-lg-0" alt="">
                <div class="row mt-5" data-aos="fade-up" data-aos-delay="400">

                    <div class="col-lg-3 col-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="37000" data-purecounter-duration="5"
                                class="purecounter"></span>
                            <p>Vans across Europe</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="21" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Logistics experts</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="11" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Years of experience</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="7108" data-purecounter-duration="3"
                                class="purecounter"></span>
                            <p>Happy clients</p>
                        </div>
                    </div><!-- End Stats Item -->

                </div>
            </div>

        </div>
    </div>
</section>
<!-- End Hero Section -->

<main id="main">

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
        <div class="container">
            <h2 class="how-title">How it works</h2>

            <div class="row gy-4">

                <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up">
                    <div class="number-section">
                        <i class="number-icon fa-solid fa-1"></i>
                    </div>
                    <div class="service-detail">
                        <div class="icon flex-shrink-0"><i class="fas fa-address-card"></i></div>
                        <div>
                            <h4 class="title">Enter the addresses</h4>
                        </div>
                    </div>
                </div>
                <!-- End Service Item -->

                <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="number-section">
                        <i class="number-icon fa-solid fa-2"></i>
                    </div>
                    <div class="service-detail">
                        <div class="icon flex-shrink-0"><i class="fas fa-hand-holding-usd"></i></div>
                        <div>
                            <h4 class="title">Get the price instantly</h4>
                        </div>
                    </div>
                </div>
                <!-- End Service Item -->

                <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
                    <div class="number-section">
                        <i class="number-icon fa-solid fa-3"></i>
                    </div>
                    <div class="service-detail">
                        <div class="icon flex-shrink-0"><i class="fas fa-book"></i></div>
                        <div>
                            <h4 class="title">Book the transport</h4>
                        </div>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up">
                    <div class="number-section">
                        <i class="number-icon fa-solid fa-4"></i>
                    </div>
                    <div class="service-detail">
                        <div class="icon flex-shrink-0"><i class="fa-solid fa-box-open"></i></div>
                        <div>
                            <h4 class="title">Prepare your goods</h4>
                        </div>
                    </div>
                </div>
                <!-- End Service Item -->

                <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="number-section">
                        <i class="number-icon fa-solid fa-5"></i>
                    </div>
                    <div class="service-detail">
                        <div class="icon flex-shrink-0"><i class="fa-solid fa-truck-ramp-box"></i></div>
                        <div>
                            <h4 class="title">Collection</h4>
                        </div>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
                    <div class="number-section">
                        <i class="number-icon fa-solid fa-6"></i>
                    </div>
                    <div class="service-detail">
                        <div class="icon flex-shrink-0"><i class="fa-solid fa-truck"></i></div>
                        <div>
                            <h4 class="title">Delivery</h4>
                        </div>
                    </div>
                </div><!-- End Service Item -->

            </div>

        </div>
    </section>
    <!-- End Featured Services Section -->

    <!-- ======= Call To Action Section ======= -->
    <section id="call-to-action" class="call-to-action">
        <div class="container" data-aos="zoom-out">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="call-title">For your company or for a private move, the dedicated van service is the ideal solution.</h2>
                    <p>
                        "You can move anything in Europe with a van dedicated only for your cargo. For your company or
                        for a private move, the dedicated van service is the ideal solution.
                        <br />
                        We have access to more than 37,000 vans spread across Europe, so we can collect your cargo any
                        day and any time that you choose and deliver it in the time you need."
                    </p>
                    <br/>
                    <h4 style="color: white;">Advantages: </h4>
                    <p>
                        <i class="fa-solid fa-hourglass-half me-2"></i>Customized pick-up and delivery time -Collection and deliveries on weekends, day and night -Same day collection available for urgent transport
                        <br/>
                        <i class="fa-solid fa-truck me-2"></i>Transport of heavy and bulky items -No special packaging is required -Ideal for transporting fragile items
                    </p>
                    </dic>
                </div>

            </div>
    </section>
    <!-- End Call To Action Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about pt-0">
        <div class="container" data-aos="fade-up">
            <h2 class="about-title">About Us</h2>
            <p class="about-text">
                It all came about when the company founder entered the US domestic moving business. After working 4 years in the sector, he moved to Romania, where he rejoined another transport
                company and acquired even more expertise in this business. After a few more years and being frustrated by the way companies failed to provide a high quality service and seeing a great
                opportunity there, he decided to let his entrepreneurial side speak louder and start his own business. There, Easy move Europe was born.
                <br /><br />
                Van’s Delivery Service has seen so much growth since Bob Van Zytveld started the business in 1925, he
                would barely recognize it today. But some things haven’t changed. The company is still providing
                customers with exceptional service. Even after all these years, their motto is still “Courtesy and
                Promptness Assured.”
            </p>
            <br /><br />
            <p class="about-footer">
                "In business and relationships, my rule to act with others the way we would like the others to act 
                with me, because that way we will always be fair"
            </p>
            <p class="about-founder">
                <span>James Kaljmes</span>(Founder and CO of Easy move Europe)
            </p>
        </div>
    </section>
    <!-- End About Us Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
        <div class="container">

            <div class="slides-1 swiper" data-aos="fade-up">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <h3>Rodrigo Farias</h3>
                            <h4>Entrepreneu</h4>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                “With our friends of Easy move, we can put our cargo in their hands and focus on our business, as they are reliable and extremely professional.
                                <br/>
                                With them, we don't have dissatisfied customers calling us asking where the cargo is or complaining about delays.”
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <h3>Ava Williams</h3>
                            <h4>Client from UK</h4>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                “We have already used Easy Move Europe's services 2 times for relocation and each time they have been extremely efficient
                                <br/>
                                And always go above and beyond expectations. I have already recommended it to several friends and they are all satisfied.“
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section>
    <!-- End Testimonials Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <span>Frequently Asked Questions</span>
                <h2>Frequently Asked Questions</h2>

            </div>

            <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="200">
                <div class="col-lg-10">

                    <div class="accordion accordion-flush" id="faqlist">

                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-content-1">
                                    <i class="bi bi-question-circle question-icon"></i>
                                    Is there any insurance included when I hire the van service?
                                </button>
                            </h3>
                            <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                <div class="accordion-body acc-content">
                                    Yes, every shipment with our dedicated van delivery is covered by CMR conventions and extended liability is also available (for commercial shipments). The value is currently around 10 euros per kilo and apply to occurrence of theft, damaged goods, gross negligence in international and domestic transport.
                                </div>
                            </div>
                        </div><!-- # Faq item-->

                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-content-2">
                                    <i class="bi bi-question-circle question-icon"></i>
                                    Do you have only these two types of vans and measurements?
                                </button>
                            </h3>
                            <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                <div class="accordion-body acc-content">
                                    No, we have other types, models and sizes of vans. The size you see in the description is an average, sizes may vary. We will always try to maintain the capacity contracted by you (13 and 19 cubic meters), so it is important that you provide us with as much information as possible about your cargo so that we can send you the appropriate van.
                                    To transport dangerous items we also have the ADR van and to transport perishable items that need controlled temperature, we have the refrigerated vans, which can be hired separately, just contact us via email or phone and we will provide you with a quote.
                                </div>
                            </div>
                        </div><!-- # Faq item-->

                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-content-3">
                                    <i class="bi bi-question-circle question-icon"></i>
                                    Will the driver always help to load/unload the load?
                                </button>
                            </h3>
                            <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                <div class="accordion-body acc-content">
                                    No, please note that the driver's main focus is driving and he will help load and/or unload the cargo if this is contracted to at the time you hire the transport.
                                    Please note that not all drivers are physically able to help, so you need to let us know in advance so that the ideal driver is chosen.
                                </div>
                            </div>
                        </div><!-- # Faq item-->

                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-content-4">
                                    <i class="bi bi-question-circle question-icon"></i>
                                    How does the help service work?
                                </button>
                            </h3>
                            <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                <div class="accordion-body acc-content">
                                    When you hire the help service, you need to consider that the driver will help to load/unload from the first floor level to the van and vice versa. For cases where loading/unloading is in apartments that do not have an elevator, you need to let us know in advance, as not all drivers are physically able to go up and down stairs.
                                </div>
                            </div>
                        </div><!-- # Faq item-->

                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-content-5">
                                    <i class="bi bi-question-circle question-icon"></i>
                                    What can’t be shipped?
                                </button>
                            </h3>
                            <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                <div class="accordion-body acc-content">
                                    <span style="font-weight: 600;">Hazardous goods:</span> e.g. firearms, explosives, ammunition, hazardous materials, radioactives.
                                    <br/>
                                    <span style="font-weight: 600;">Illegal goods:</span> Drugs, endangered species, other products illegal under EU laws.
                                    <br/>
                                    <span style="font-weight: 600;">Livestock:</span> Live stock animals, horses, pets, mice, worms, insects.
                                    <br/>
                                    <span style="font-weight: 600;">Money:</span> Currencies, banknotes and coins.
                                    <br/>
                                    <span style="font-weight: 600;">Securities:</span> Bonds, stocks, negotiable documents and all types of securities.    
                                </div>
                            </div>
                        </div><!-- # Faq item-->

                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-content-6">
                                    <i class="bi bi-question-circle question-icon"></i>
                                    About custom procedures, when should I be concerned and who should take care of it for me?
                                </button>
                            </h3>
                            <div id="faq-content-6" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                <div class="accordion-body acc-content">
                                    For transport within the EU, no special documentation is usually required, but when the country of origin or destination is not part of the European Union, the customer always needs to prepare the documentation in advance. Each country has different rules, so you can consult us and we will guide you through this process.
                                    In some cases you will be able to prepare the necessary documentation only with our help, but most of the time it is a broker that will carry out this work.
                                </div>
                            </div>
                        </div><!-- # Faq item-->

                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-content-7">
                                    <i class="bi bi-question-circle question-icon"></i>
                                    How to pack the goods for shipping?
                                </button>
                            </h3>
                            <div id="faq-content-7" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                <div class="accordion-body acc-content">
                                    With the dedicated van delivery, you do not need to package your shipment in any specific way. The shipper is able to accommodate the goods in the van however they like, packed or not.
                                    However, note that in the movement of the van on the highway one item can crash into the other causing damage and no one wants that to happen, so we still recommend protecting your goods for transport to avoid damage.
                                </div>
                            </div>
                        </div><!-- # Faq item-->

                    </div>

                </div>
            </div>

        </div>
    </section>
    <!-- End Frequently Asked Questions Section -->

</main>
<!-- End #main -->

<script>
    $( document ).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        // $(".submitbtn").click(function(event) {
        //     event.preventDefault();

        //     var pickup_text = $("#pickup_country :selected").text();
        //     var pickup_value = $("#pickup_country").val();
        //     var destination_text = $("#destination_country :selected").text();
        //     var destination_value = $("#destination_country").val();

        //     $.ajax({
        //         type:'POST',
        //         url:"{{ route('price.index') }}",
        //         data:{ pickup_text:pickup_text,
        //             pickup_value:pickup_value,
        //             destination_text:destination_text,
        //             destination_value:destination_value
        //         },
        //         success:function(data){
        //             window.location.href = "{{route('price.index')}}"
        //         }
        //     });
            
        // });
        
    });
</script>
@endsection