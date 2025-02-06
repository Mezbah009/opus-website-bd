@extends('front.layouts.app')

@section('content')

<div class="contact-bg" style="background-image: url('{{ asset("front-assets/img/ai.jpg") }}');">
    <h2>Our AI Solutions </h2>
    <div class="line">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>

<!-- ======= Our Portfolio Section ======= -->
<section id="portfolio" class="portfolio section-bg">
    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="section-title">
            <h2>Our AI Solutions </h2>
            <p>At Opus Technology, we are committed to helping businesses harness the transformative potential of artificial intelligence. Whether you’re looking to streamline operations, enhance customer experiences, or innovate your offerings, our AI solutions are your gateway to a smarter, more efficient future.
            </p>
        </div>
        <section id="about" class="about">
            <div class="container" data-aos="fade-up" style="box-shadow: none;">
                <div class="row no-gutters">
                    <div class="col-lg-6 d-flex flex-column justify-content-center about-content">

                        <div class="section-title">

                            <p>Take your business to the next level with AI Solutions by Opus Technology. Our innovative artificial intelligence technologies empower organizations to automate processes, unlock data-driven insights, and deliver exceptional customer experiences. From intelligent automation to advanced analytics, our AI solutions are designed to optimize operations, drive innovation, and fuel growth across industries.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 video-box">
                        <img src="{{ asset('front-assets/img/ai2.jpg') }}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </section>

        {{-- Fifth section --}}

        <div class="contact-body">
            <section id="contact" class="contact">
                <div class="container" data-aos="fade-up">
                    <div class="row">
                        <div class="row">
                            <div class="col-lg-3 d-flex" data-aos="fade-up">
                                <div class="info-boxs">
                                    <img src="{{ asset('front-assets/img/ailogo/1.png') }}"
                                        alt="..." width="80px" style="padding: 8px; display: block; margin: 0 auto;">
                                    <h3 style="text-align:center; margin-bottom: 10px;">TOTA: Your Smart Virtual Assistant
                                    </h3>
                                    <p>TOTA is an AI chatbot offering 24/7 instant responses,
                                        personalized support, and task automation to improve
                                        customer interaction and streamline communication.
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-3 d-flex" data-aos="fade-up">
                                <div class="info-boxs">
                                    <img src="{{ asset('front-assets/img/ailogo/2.png') }}"
                                        alt="..." width="80px" style="padding: 8px; display: block; margin: 0 auto;">
                                    <h3 style="text-align:center; margin-bottom: 10px;">AI-Powered Media Analysis
                                    </h3>
                                    <p>Our AI media analysis tool tracks trends, measures
                                        sentiment, and offers real-time insights, helping businesses
                                        make data-driven decisions and stay competitive.
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-3 d-flex" data-aos="fade-up">
                                <div class="info-boxs">
                                    <img src="{{ asset('front-assets/img/ailogo/3.png') }}"
                                        alt="..." width="80px" style="padding: 8px; display: block; margin: 0 auto;">
                                    <h3 style="text-align:center; margin-bottom: 10px;">AI Based Data-Driven Insights
                                    </h3>
                                    <p>Our AI Date-Driven tools offer advanced analytics, real-time
                                        reporting, and interactive dashboards, turning complex data
                                        into actionable insights for growth and performance.
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-3 d-flex" data-aos="fade-up">
                                <div class="info-boxs">
                                    <img src="{{ asset('front-assets/img/ailogo/4.png') }}"
                                        alt="..." width="80px" style="padding: 8px; display: block; margin: 0 auto;">
                                    <h3 style="text-align:center; margin-bottom: 10px;">AI-Powered Credit Scoring Engine
                                    </h3>
                                    <p>Our AI engine uses alternative data to deliver accurate
                                        credit scores, expanding credit access and enhancing
                                        decision-making for financial institutions
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-3 d-flex" data-aos="fade-up">
                                <div class="info-boxs">
                                    <img src="{{ asset('front-assets/img/ailogo/5.png') }}"
                                        alt="..." width="80px" style="padding: 8px; display: block; margin: 0 auto;">
                                    <h3 style="text-align:center; margin-bottom: 10px;">Real-Time Human Movement Analysis
                                    </h3>
                                    <p>Our AI camera system analyzes human movement in
                                        real-time, boosting security and efficiency with accurate
                                        tracking and actionable insights.
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-3 d-flex" data-aos="fade-up">
                                <div class="info-boxs">
                                    <img src="{{ asset('front-assets/img/ailogo/6.png') }}"
                                        alt="..." width="80px" style="padding: 8px; display: block; margin: 0 auto;">
                                    <h3 style="text-align:center; margin-bottom: 10px;">RPA-Based Financial Transaction Analysis
                                    </h3>
                                    <p>Our RPA solution automates financial transaction analysis,
                                        ensuring fast, accurate processing, streamlining workflows,
                                        detecting anomalies, and improving decision-making.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- End  Section -->
</section><!-- End Our Portfolio Section -->




<script>
    document.addEventListener('DOMContentLoaded', function() {
        const portfolioWraps = document.querySelectorAll('.portfolio-wrap');
        portfolioWraps.forEach(function(portfolioWrap) {
            portfolioWrap.addEventListener('click', function() {
                const url = portfolioWrap.getAttribute('data-url');
                window.location.href = url;
            });
        });
    });
</script>

@endsection