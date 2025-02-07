@extends('front.layouts.app')



<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Arial, sans-serif;
    }



    .container {
        max-width: 1000px;
        margin: 0 auto;
        position: relative;
    }

    .header {
        margin-bottom: 50px;
    }

    h1 {
        font-size: 3.5rem;
        color: #cc2b2b;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
    }

    .subtitle {
        font-size: 2rem;
        color: #89a7e0;
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
    }

    .timeline {
        position: relative;
        padding-top: 20px;
    }

    .timeline::before {
        content: '';
        position: absolute;
        left: 50%;
        width: 100px;
        height: 100%;
        background: repeating-linear-gradient(0deg,
                rgba(0, 0, 0, 0.2) 0px,
                rgba(0, 0, 0, 0.2) 2px,
                transparent 2px,
                transparent 20px);
        transform: translateX(-50%);
    }

    .timeline-item {
        display: flex;
        margin-bottom: 30px;
        position: relative;
        min-height: 150px;
    }

    .timeline-content {
        width: 45%;
        padding: 15px;
    }

    .timeline-image {
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        width: 300px;
        height: 170px;
        background: #000;
        border: 3px solid #7fc0eb;
        border-radius: 4px;
        overflow: hidden;
    }

    .timeline-image::before,
    .timeline-image::after {
        content: '';
        position: absolute;
        top: -8px;
        bottom: -8px;
        width: 24px;
        background: repeating-linear-gradient(0deg,
                #000,
                #000 4px,
                #333 4px,
                #333 12px);
    }

    .timeline-image::before {
        left: -24px;
    }

    .timeline-image::after {
        right: -24px;
    }

    .timeline-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .year {
        font-size: 1.8rem;
        font-weight: bold;
        margin-bottom: 10px;
        color: #000000;
    }

    .description {
        font-size: 1rem;
        line-height: 1.4;
        color: #000000;
    }

    /* Left side content */
    .timeline-item:nth-child(odd) .timeline-content {
        margin-right: auto;
        text-align: right;
        padding-right: 120px;
    }

    /* Right side content */
    .timeline-item:nth-child(even) .timeline-content {
        margin-left: auto;
        text-align: left;
        padding-left: 120px;
    }
</style>

@section('content')
    <div class="contact-bg" style="background-image: url('{{ asset('front-assets/img/about-us.jpg') }}');">
        <h2>About us</h2>
        <div class="line">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>


    <!-- ======= About Us Section ======= -->
    {{-- <section id="about" class="about">
    <div class="container" data-aos="fade-up">

        <div class="row no-gutters">
            <div class="col-lg-6 video-box">
                <img src="{{ asset('front-assets/img/about.jpg')}}" class="img-fluid" alt="">
                <a href="https://youtu.be/eNz-5QvXmog?si=P5S7DF078CSD3xj1" class="venobox play-btn mb-4"
                    data-vbtype="video" data-autoplay="true"></a>
            </div>

            <div class="col-lg-6 d-flex flex-column justify-content-center about-content">

                <div class="section-title">
                    <h2>Who We Are</h2>
                    <p>Opus Technology Limited is a company that specializes in creating, designing, maintaining
                        software applications, developing custom software, mobile apps, web development,
                        artificial intelligence, games, animation and so. Opus Technology Limited started
                        operating from 2012 and since then delivering advanced software that empowers,
                        innovates, and transforms the office completely and digitally for all our clients.</p>
                </div>

                <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon"><i class="bx bx-rocket"></i></div>
                    <h4 class="title"><a href="">Our Mission</a></h4>
                    <p class="description">We aim to provide world-class software solutions for all our
                        prospective clients from all over the world and build the best innovative software using
                        our cutting edge technology and expert software development team.</p>
                </div>

                <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon"><i class="bx bx-compass"></i></div>
                    <h4 class="title"><a href="">Our Vision</a></h4>
                    <p class="description">We want to serve customers from every corner of the world and provide
                        them with the best IT solutions so that we are able to create a worldwide goodwill on
                        the IT sector and achieve good worldwide recognition for being one of the best IT
                        companies out there.</p>
                </div>

            </div>
        </div>

    </div>
</section><!-- End About Us Section --> --}}


    <!-- ======= Second Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">
            @foreach ($home_second_section as $key => $home_second_sections)
                <div class="row no-gutters">


                    <div class="col-lg-6 d-flex flex-column justify-content-center about-content">

                        <div class="section-title">
                            <img src="{{ asset('uploads/first_section/' . $home_second_sections->logo) }}" class="img-fluid"
                                alt="">
                            {{-- <h2>{{ $home_second_sections->title }}</h2> --}}
                            <p>{!! $home_second_sections->description !!} </p>
                            <!-- <a href="{{ $home_second_sections->link }}"
                                                                                    class="btn-get-started animate__animated animate__fadeInUp scrollto">{{ $home_second_sections->button_name }}</a> -->
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex justify-content-center align-items-center">
                        <img src="{{ asset('uploads/first_section/' . $home_second_sections->image) }}" class="img-fluid"
                            alt=""
                            style="max-width: 100%; max-height: 400px; object-fit: cover; border-radius: 0px;">
                    </div>
                </div>
            @endforeach

        </div>
    </section>

    <!-- End About Us Section -->


    <!-- ======= Counts Section ======= -->
    <section class="counts section-bg">
        <div class="container">

            <div class="row">

                <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up">
                    <div class="count-box">
                        <i class="bi bi-simple-smile" style="color: #20b38e;"></i>
                        <span data-purecounter-start="0" data-purecounter-end="360" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Successful Project Implementation</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="count-box">
                        <i class="bi bi-document-folder" style="color: #c042ff;"></i>
                        <span data-purecounter-start="0" data-purecounter-end="120" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Customers Worldwide</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="400">
                    <div class="count-box">
                        <i class="bi bi-live-support" style="color: #46d1ff;"></i>
                        <span data-purecounter-start="0" data-purecounter-end="65" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Resources</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="600">
                    <div class="count-box">
                        <i class="bi bi-users-alt-5" style="color: #ffb459;"></i>
                        <span data-purecounter-start="0" data-purecounter-end="45" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Technical Resources</p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Counts Section -->


    {{-- Our Journey --}}

    <section class="counts section-bg">
        <div class="section-title" style="padding-top: 0px">
            <h2>Our Journey Creating Memories</h2>
        </div>

        <div class="container">
            {{-- <div class="header">
                <h1>Our Journey</h1>
                <div class="subtitle">creating memories</div>
            </div> --}}

            <div class="timeline">
                <div class="timeline-item">
                    <div class="timeline-content">

                        <h4 style="color: gray; font-size: 40px; font-weight: bold;">2012</h4>

                        <p style="color: #5f6061; font-size: 18px;">Company Establishment & BASIS Membership Acquisition
                        </p>
                    </div>
                    <div class="timeline-image">
                        <img src="front-assets/img/our-journey/1.png" alt="2012 milestone">
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-content">
                        <h4 style="color: gray; font-size: 40px; font-weight: bold;">2013</h4>


                        <p style="color: #5f6061; font-size: 18px;">Software Implementation for Nokia Care Service Center.
                        </p>
                    </div>
                    <div class="timeline-image">
                        <img src="front-assets/img/our-journey/2.png" alt="2013 milestone">
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-content">

                        <h4 style="color: gray; font-size: 40px; font-weight: bold;">2014</h4>

                        <p style="color: #5f6061; font-size: 18px;">Implemented an ERP Solution for bKash Limited</p>
                    </div>
                    <div class="timeline-image">
                        <img src="front-assets/img/our-journey/3.png" alt="2014 milestone">
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-content">
                        <h4 style="color: gray; font-size: 40px; font-weight: bold;">2015</h4>


                        <p style="color: #5f6061; font-size: 18px;">Implemented Payroll Management Software for Agrani Bank
                            PLC.</p>
                    </div>
                    <div class="timeline-image">
                        <img src="front-assets/img/our-journey/4.png" alt="2015 milestone">
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-content">
                        <h4 style="color: gray; font-size: 40px; font-weight: bold;">2016</h4>

                        <p style="color: #5f6061; font-size: 18px;">Started working with Overseas client: Japan project.
                        </p>

                    </div>
                    <div class="timeline-image">
                        <img src="front-assets/img/our-journey/5.png" alt="2016 milestone">
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-content">
                        <h4 style="color: gray; font-size: 40px; font-weight: bold;">2017</h4>

                        <p style="color: #5f6061; font-size: 18px;"> Implemented RTGS Fintech System.<br>Achieved ISO
                            Certification.</p>
                    </div>
                    <div class="timeline-image">
                        <img src="front-assets/img/our-journey/6.png" alt="2017 milestone">
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-content">
                        <h4 style="color: gray; font-size: 40px; font-weight: bold;">2018</h4>


                        <p style="color: #5f6061; font-size: 18px;"> Recipient of BASIS
                            National ICT Award
                            for Business Service.</p>

                    </div>
                    <div class="timeline-image">
                        <img src="front-assets/img/our-journey/7.png" alt="2017 milestone">
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-content">
                        <h4 style="color: gray; font-size: 40px; font-weight: bold;">2019</h4>


                        <p style="color: #5f6061; font-size: 18px;"> Recipient of BASIS
                            National ICT Award
                            for Inclusion
                            Communication
                            Service..</p>
                    </div>
                    <div class="timeline-image">
                        <img src="front-assets/img/our-journey/8.png" alt="2017 milestone">
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-content">
                        <h4 style="color: gray; font-size: 40px; font-weight: bold;">2020</h4>


                        <p style="color: #5f6061; font-size: 18px;"> Implemented Artificial
                            Intelligence (AI)
                            Project for Sweden
                            and Denmark.<br>
                            First Fintech Solution:
                            RTGS Provided to
                            Government Bank.</p>
                    </div>
                    <div class="timeline-image">
                        <img src="front-assets/img/our-journey/9.png" alt="2017 milestone">
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-content">
                        <h4 style="color: gray; font-size: 40px; font-weight: bold;">2021</h4>


                        <p style="color: #5f6061; font-size: 18px;"> Implemented an
                            Online General Diary
                            (GD) Service for the
                            Bangladesh Police.</p>
                    </div>
                    <div class="timeline-image">
                        <img src="front-assets/img/our-journey/11.png" alt="2017 milestone">
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-content">
                        <h4 style="color: gray; font-size: 40px; font-weight: bold;">2022</h4>


                        <p style="color: #5f6061; font-size: 18px;"> Launch of
                            Microfinance
                            Banking System
                            in Uganda, Kenya,
                            Zambia & Tanzania</p>
                    </div>
                    <div class="timeline-image">
                        <img src="front-assets/img/our-journey/10.png" alt="2017 milestone">
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-content">
                        <h4 style="color: gray; font-size: 40px; font-weight: bold;">2023</h4>


                        <p style="color: #5f6061; font-size: 18px;"> Implemented
                            Digital Banking
                            Solution for
                            Lanka Bangla
                            Finance Ltd.</p>
                    </div>
                    <div class="timeline-image">
                        <img src="front-assets/img/our-journey/9.png" alt="2017 milestone">
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-content">
                        <h4 style="color: gray; font-size: 40px; font-weight: bold;">2024</h4>

                        <p style="color: #5f6061; font-size: 18px;"> Launched an AI-Based
                            Chatbot &Launched
                            a Credit Scoring System
                            for a Government Bank.</p>
                    </div>
                    <div class="timeline-image">
                        <img src="front-assets/img/our-journey/8.png" alt="2017 milestone">
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-content">
                        <h4 style="color: gray; font-size: 40px; font-weight: bold;">2025</h4>

                        <p style="color: #5f6061; font-size: 18px;"> Implemented Nationwide
                            Commodities Market
                            Monitoring System
                            with government
                            agencies..</p>
                    </div>
                    <div class="timeline-image">
                        <img src="front-assets/img/our-journey/12.png" alt="2017 milestone">
                    </div>
                </div>
            </div>
        </div>


    </section>
    {{-- end section --}}


    {{-- Global Presence section --}}

    <section>
        <div class="section-title" style="padding-top: 60px">
            <h2></h2>
            <h2>Global Presence</h2>
        </div>

        <div id="about" class="about">
            <div class="container" data-aos="fade-up" style="box-shadow: none;">
                @foreach ($accreditations as $key => $accreditation)
                    <div class="row no-gutters">
                        <div class="col-lg-6 d-flex flex-column justify-content-center about-content">
                            <div class="section-title">
                                {{-- <h1>{{ $accreditation->title }} </h1> --}}
                                <p>With a proven track record of delivering innovative software solutions,
                                    Opus has established a strong presence in various countries worldwide.
                                    Our team of skilled engineers has successfully implemented projects in
                                    diverse regions, including USA, Australia, Sweden, Denmark, UAE,
                                    Malaysia, Uganda, Kenya, Zambia and Tanzania. This global reach
                                    enables us to understand and cater to the unique requirements of
                                    different markets, ensuring our solutions are culturally relevant and
                                    effective. </p>
                            </div>
                        </div>
                        <div class="col-lg-6 d-flex justify-content-center align-items-center">
                            <img src="front-assets/img/Global-Presence.png" class="img-fluid" alt=""
                                style="max-width: 100%; max-height: 350px; object-fit: cover; border-radius: 0px;">
                        </div>


                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- end  -->


    <!-- Service Showcase -->
    <section class="counts section-bg">
        <div class="section-title">
            <h2></h2>
            <h2>Service Showcase</h2>
        </div>
        <div class="container" style="position: relative; padding: 50px 0;">
            <div
                style="content: ''; position: absolute; top: 0; left: 50%; width: 4px; height: 100%; background: rgb(162, 206, 232); transform: translateX(-50%);">
            </div>

            <div
                style="position: relative; width: 50%; padding: 20px; box-sizing: border-box; left: 0; text-align: right;">
                <div
                    style="position: absolute; top: 20px; width: 20px; height: 20px; background: rgb(162, 206, 232); border-radius: 50%; left: calc(50% - 10px);">
                </div>
                <h4 style="color: gray; font-size: 24px; font-weight: bold;">2017</h4>
                <p style="color: gray; font-size: 18px;">JAPAN IT WEEK SPRING</p>
                <img src="front-assets/img/service-howcase/s1.png" alt="Description"
                    style="width: 350px; height: 200px; border-radius: 5px; margin-top: 10px;">
            </div>

            <div
                style="position: relative; width: 50%; padding: 20px; box-sizing: border-box; left: 50%; text-align: left;">
                <div
                    style="position: absolute; top: 20px; width: 20px; height: 20px; background: rgb(162, 206, 232); border-radius: 50%; left: calc(50% - 10px);">
                </div>
                <h4 style="color: gray; font-size: 24px; font-weight: bold;">2018</h4>
                <p style="color: gray; font-size: 18px;">CEBIT ASEAN, THAILAND JAPAN IT WEEK SPRING<br>BASIS SOFTEXPO,
                    BANGLADESH</p>
                <img src="front-assets/img/service-howcase/s2.png" alt="Description"
                    style="width: 350px; height: 200px; border-radius: 5px; margin-top: 10px;">
            </div>

            <div
                style="position: relative; width: 50%; padding: 20px; box-sizing: border-box; left: 0; text-align: right;">
                <div
                    style="position: absolute; top: 20px; width: 20px; height: 20px; background: rgb(162, 206, 232); border-radius: 50%; left: calc(50% - 10px);">
                </div>
                <h4 style="color: gray; font-size: 24px; font-weight: bold;">2019</h4>
                <p style="color: gray; font-size: 18px;">JAPAN IT WEEK SPRING CHINA INTERNATIONAL IMPORT EXPO <br> ITU
                    TELECOM WORLD, HUNGARY. BASIS SOFTEXPO, BANGLADESH</p>
                <img src="front-assets/img/service-howcase/s3.png" alt="Description"
                    style="width: 350px; height: 200px; border-radius: 5px; margin-top: 10px;">
            </div>

            <div
                style="position: relative; width: 50%; padding: 20px; box-sizing: border-box; left: 50%; text-align: left;">
                <div
                    style="position: absolute; top: 20px; width: 20px; height: 20px; background: rgb(162, 206, 232); border-radius: 50%; left: calc(50% - 10px);">
                </div>
                <h4 style="color: gray; font-size: 24px; font-weight: bold;">2024</h4>
                <p style="color: gray; font-size: 18px;">WTO & ITC CO-ORGANIZED SHETRADES SUMMIT, ABU DHABI</p>
                <img src="front-assets/img/service-howcase/s4.png" alt="Description"
                    style="width: 350px; height: 200px; border-radius: 5px; margin-top: 10px;">
            </div>

            <div
                style="position: relative; width: 50%; padding: 20px; box-sizing: border-box; left: 0; text-align: right;">
                <div
                    style="position: absolute; top: 20px; width: 20px; height: 20px; background: rgb(162, 206, 232); border-radius: 50%; left: calc(50% - 10px);">
                </div>
                <h4 style="color: gray; font-size: 24px; font-weight: bold;">2025</h4>
                <p style="color: gray; font-size: 18px;">PARTICIPATE CES 2025 IN USA<br>POWERED BY THE CONSUMER TECHNOLOGY
                    ASSOCIATION</p>
                <img src="front-assets/img/service-howcase/s5.png" alt="Description"
                    style="width: 350px; height: 200px; border-radius: 5px; margin-top: 10px;">
            </div>
        </div>
    </section>

    {{-- End Our Journey Section  --}}

    <br><br><br><br>

    {{-- Accreditation section --}}

    <div class="section-title" style="padding-top: 60px">
        <h2></h2>
        <h2>Accreditation</h2>
    </div>

    <div id="about" class="about">
        <div class="container" data-aos="fade-up" style="box-shadow: none;">
            @foreach ($accreditations as $key => $accreditation)
                <div class="row no-gutters">
                    <div class="col-lg-6 d-flex justify-content-center align-items-center">
                        <img src="{{ asset('uploads/first_section/' . $accreditation->image) }}" class="img-fluid"
                            alt=""
                            style="max-width: 100%; max-height: 200px; object-fit: cover; border-radius: 0px;">
                    </div>
                    <div class="col-lg-6 d-flex flex-column justify-content-center about-content">
                        <div class="section-title">
                            <h1>{{ $accreditation->title }} </h1>
                            <p>{!! $accreditation->description !!} </p>
                        </div>
                    </div>

                </div>
            @endforeach

        </div>
    </div>

    {{-- Awards section --}}

    <div class="section-title">
        <h2></h2>
        <h2>Awards</h2>
    </div>

    <div id="about" class="about">
        <div class="container" data-aos="fade-up" style="box-shadow: none;">
            @foreach ($awards as $key => $award)
                <div class="row no-gutters">
                    <div class="col-lg-12 video-box">
                        <img src="{{ asset('uploads/first_section/' . $award->image) }}" class="img-fluid"
                            alt="">
                    </div>

                </div>
            @endforeach

        </div>
    </div>


    {{-- quality section --}}

    {{-- <div class="section-title" style="padding-top: 30px">
        <h2></h2>
        <h2>Quality Management</h2>
    </div>

    <div id="about" class="about">
        <div class="container" data-aos="fade-up" style="box-shadow: none;">
            @foreach ($qualities as $key => $quality)
                <div class="row no-gutters">
                    <div class="col-lg-6 d-flex flex-column justify-content-center about-content">
                        <div class="section-title">
                            <h1>{{ $quality->title }} </h1>
                            <p>{!! $quality->description !!} </p>
                        </div>
                    </div>
                    <div class="col-lg-6 video-box">
                        <img src="{{ asset('uploads/first_section/' . $quality->image) }}" class="img-fluid" alt="">
                    </div>

                </div>
            @endforeach

        </div>
    </div> --}}



    <div class="section-title" style="padding-top: 30px">
        <h2></h2>
        <h2>Quality Management</h2>
    </div>

    <div id="about" class="about">
        <div class="container" data-aos="fade-up" style="box-shadow: none;">
            @foreach ($qualities as $key => $quality)
                <div class="row no-gutters align-items-center">
                    <div class="col-lg-6 d-flex flex-column justify-content-center about-content">
                        <div class="section-title">
                            <h1>{{ $quality->title }}</h1>
                            <p>{!! $quality->description !!}</p>
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex justify-content-center align-items-center">
                        <img src="{{ asset('uploads/first_section/' . $quality->image) }}" class="img-fluid"
                            alt=""
                            style="max-width: 100%; max-height: 300px; object-fit: cover; border-radius: 10px;">
                    </div>
                </div>
            @endforeach
        </div>
    </div>








    {{-- management --}}
    <div class="section-title" style="padding-top: 30px">
        <h2>Our Team</h2>
        <h3><strong>Top Management</strong></h3>
    </div>

    <section>
        <div class="container-manage">
            @foreach ($managements as $management)
                <div class="card_manage">
                    <img src="{{ asset('uploads/first_section/' . $management->image) }}" alt="{{ $management->name }}">
                    <h3>{{ $management->name }}</h3>
                    <h4>{{ $management->designation }}</h4>
                    <p>{{ $management->description }}</p>
                    <div class="read-more">
                        <a href="{{ route('leader.show', ['link' => $management->link ?? 'default']) }}">Read More</a>
                        <div class="social-icons">
                            @if ($management->facebook)
                                <a href="{{ $management->facebook }}"><i class="bi bi-facebook"></i></a>
                            @endif
                            @if ($management->linkedin)
                                <a href="{{ $management->linkedin }}"><i class="bi bi-linkedin"></i></a>
                            @endif
                        </div>
                    </div>

                </div>
            @endforeach
        </div>
    </section>

    <!-- ======= Our Team Section ======= -->
    {{-- <section id="team" class="team">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Core Management Team</h2>
                <p></p>
            </div>

            <div class="row">
                @foreach ($teamMembers as $member)
                    <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up">
                        <div class="member">
                            <div class="pic">
                                <img src="{{ asset('uploads/users/' . $member->image) }}" class="img-fluid"
                                    alt="{{ $member->name }}" height="300px" width="350px">
                            </div>


                            <div class="member-info">
                                <h4>{{ $member->name }}</h4>
                                <span>{{ $member->designation }}</span>
                                <div class="social">
                                    @if ($member->twitter)
                                        <a href="{{ $member->twitter }}"><i class="bi bi-twitter"></i></a>
                                    @endif
                                    @if ($member->facebook)
                                        <a href="{{ $member->facebook }}"><i class="bi bi-facebook"></i></a>
                                    @endif
                                    @if ($member->instagram)
                                        <a href="{{ $member->instagram }}"><i class="bi bi-instagram"></i></a>
                                    @endif
                                    @if ($member->linkedin)
                                        <a href="{{ $member->linkedin }}"><i class="bi bi-linkedin"></i></a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section> --}}






    <section id="team" class="team section light-background">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Core Management Team</h2>
            <p>Our team consists of skilled professionals dedicated to innovation, excellence, and delivering top-notch
                solutions.</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row justify-content-center">
                @foreach ($teamMembers as $member)
                    <div class="col-lg-3 col-md-3 col-sm-6 d-flex flex-column align-items-center member"
                        data-aos="fade-up" data-aos-delay="100">
                        <div class="member-img">
                            <img src="{{ asset('uploads/users/' . $member->image) }}" class="img-fluid rounded-circle"
                                alt="{{ $member->name }}">
                            <div class="social">
                                @if ($member->twitter)
                                    <a href="{{ $member->twitter }}"><i class="bi bi-twitter"></i></a>
                                @endif
                                @if ($member->facebook)
                                    <a href="{{ $member->facebook }}"><i class="bi bi-facebook"></i></a>
                                @endif
                                @if ($member->instagram)
                                    <a href="{{ $member->instagram }}"><i class="bi bi-instagram"></i></a>
                                @endif
                                @if ($member->linkedin)
                                    <a href="{{ $member->linkedin }}"><i class="bi bi-linkedin"></i></a>
                                @endif
                            </div>
                        </div>
                        <div class="member-info text-center">
                            <h4>{{ $member->name }}</h4>
                            <span>{{ $member->designation }}</span>
                        </div>
                    </div><!-- End Team Member -->
                @endforeach
            </div>

        </div>

    </section>


    <!-- End Our Team Section -->
@endsection
