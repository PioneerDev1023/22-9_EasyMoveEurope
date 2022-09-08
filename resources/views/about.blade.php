@extends("layouts.app")

@section("style")
<link rel="stylesheet" href="{{ asset('css/landing.css') }}">
@endsection

@section("content")
<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('{{ asset('img/EasyMove/about us 1.jpg') }}');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2 class="mt-5">About US</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about pt-5">
        <div class="container" data-aos="fade-up">

            <div class="row gy-4">
                <div class="content order-last  order-lg-first">
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
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End About Us Section -->

    <!-- ======= Stats Counter Section ======= -->
    <section id="stats-counter" class="stats-counter pt-0">
        <div class="container" data-aos="fade-up">

            <div class="row gy-4">

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="37000" data-purecounter-duration="5"
                            class="purecounter"></span>
                        <p>Vans across Europe</p>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="21" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Logistics experts</p>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="11" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Years of experience</p>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="7108" data-purecounter-duration="3"
                            class="purecounter"></span>
                        <p>Happy clients</p>
                    </div>
                </div><!-- End Stats Item -->

            </div>

        </div>
    </section><!-- End Stats Counter Section -->

</main>
<!-- End #main -->
@endsection