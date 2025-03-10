@extends('front.layouts.app')

@section('title')
<title> Ai Solutions || Opus Technology Limited - Software & IT Solutions in Bangladesh</title>
@endsection

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
                @foreach ($first_sections as $index => $first_section)
                    <div class="row no-gutters">
                        <div class="col-lg-6 d-flex flex-column justify-content-center about-content">
                            <div class="section-title">
                                <p>{{ $first_section->description }}
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6 video-box">
                            <img src="{{ asset($first_section->image) }}" class="img-fluid" alt="">
                        </div>
                    </div>
                @endforeach
            </div>
        </section>





             {{-- second  section --}}
             <section>
                <div class="contact-body">
                    <section id="contact" class="contact">
                        <div class="container" data-aos="fade-up">
                            <div class="row">
                                @foreach ($second_sections as $index => $second_section)
                                    <div class="col-lg-3 d-flex" data-aos="fade-up">
                                        <div class="info-boxs">
                                            <img src="{{ asset($second_section->icon) }}" alt="..." width="80px"
                                                style="padding: 8px; display: block; margin: 0 auto;">
                                            <h3 style="text-align:center; margin-bottom: 10px;">{{ $second_section->title }}
                                            </h3>
                                            <p>{{ $second_section->description }}
                                            </p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </section>
                </div>
            </section>
            <br>


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
