@extends("layouts.app")

@section("style")
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
@endsection

@section("content")
<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('{{ asset('img/EasyMove/B2B client1.jpg') }}');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2 class="mt-5">How it works</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Breadcrumbs -->

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
                            <a href="service-details" class="readmore stretched-link"><span>Learn More</span><i
                                    class="bi bi-arrow-right"></i></a>
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
                            <a href="service-details" class="readmore stretched-link"><span>Learn More</span><i
                                    class="bi bi-arrow-right"></i></a>
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
                            <a href="service-details" class="readmore stretched-link"><span>Learn More</span><i
                                    class="bi bi-arrow-right"></i></a>
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
                            <a href="service-details" class="readmore stretched-link"><span>Learn More</span><i
                                    class="bi bi-arrow-right"></i></a>
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
                            <a href="service-details" class="readmore stretched-link"><span>Learn More</span><i
                                    class="bi bi-arrow-right"></i></a>
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
                            <a href="service-details" class="readmore stretched-link"><span>Learn More</span><i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div><!-- End Service Item -->

            </div>

        </div>
    </section>
    <!-- End Featured Services Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
        <div class="container">

            <div class="row gy-4 align-items-center features-item" data-aos="fade-up">

            <div class="col-md-5">
                <img src="{{ asset('img/EasyMove/private move.jpg') }}" class="img-fluid" alt="">
            </div>
            <div class="col-md-7">
                <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
                <p class="fst-italic">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.
                </p>
                <ul>
                <li><i class="bi bi-check"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                <li><i class="bi bi-check"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                <li><i class="bi bi-check"></i> Ullam est qui quos consequatur eos accusamus.</li>
                </ul>
            </div>
            </div><!-- Features Item -->

            <div class="row gy-4 align-items-center features-item" data-aos="fade-up">
            <div class="col-md-5 order-1 order-md-2">
                <img src="{{ asset('img/EasyMove/img5.jpg') }}" class="img-fluid" alt="">
            </div>
            <div class="col-md-7 order-2 order-md-1">
                <h3>Corporis temporibus maiores provident</h3>
                <p class="fst-italic">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.
                </p>
                <p>
                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                culpa qui officia deserunt mollit anim id est laborum
                </p>
            </div>
            </div><!-- Features Item -->

            <div class="row gy-4 align-items-center features-item" data-aos="fade-up">
            <div class="col-md-5">
                <img src="{{ asset('img/EasyMove/B2B client1.jpg') }}" class="img-fluid" alt="">
            </div>
            <div class="col-md-7">
                <h3>Sunt consequatur ad ut est nulla consectetur reiciendis animi voluptas</h3>
                <p>Cupiditate placeat cupiditate placeat est ipsam culpa. Delectus quia minima quod. Sunt saepe odit aut quia voluptatem hic voluptas dolor doloremque.</p>
                <ul>
                <li><i class="bi bi-check"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                <li><i class="bi bi-check"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                <li><i class="bi bi-check"></i> Facilis ut et voluptatem aperiam. Autem soluta ad fugiat.</li>
                </ul>
            </div>
            </div><!-- Features Item -->

            <div class="row gy-4 align-items-center features-item" data-aos="fade-up">
            <div class="col-md-5 order-1 order-md-2">
                <img src="{{ asset('img/EasyMove/B2B client.jpg') }}" class="img-fluid" alt="">
            </div>
            <div class="col-md-7 order-2 order-md-1">
                <h3>Quas et necessitatibus eaque impedit ipsum animi consequatur incidunt in</h3>
                <p class="fst-italic">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.
                </p>
                <p>
                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                culpa qui officia deserunt mollit anim id est laborum
                </p>
            </div>
            </div><!-- Features Item -->

        </div>
    </section>
    <!-- End Features Section -->

</main>
<!-- End #main -->
@endsection