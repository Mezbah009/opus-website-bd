@extends('front.layouts.app')

@section('content')
    <div class="contact-bg" style="background-image: url('{{ asset('front-assets/img/cyber.jpg') }}');">
        <h2>Our Cyber Security Solutions</h2>
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
                <h2>Our Cyber Security Solutions</h2>
                <p>Cyber Security Solutions: Your Trusted Partner for Comprehensive Security Solutions. Opus is a leading
                    provider of specialized security services, including vulnerability assessment and penetration testing
                    (VAPT), system security, and application security. Our team of experienced professionals is dedicated to
                    safeguarding your digital assets and protecting your organization from cyber threats, With a focus on
                    proactive security measures, Opus offers a comprehensive suite of services to help you identify and
                    mitigate potential vulnerabilities. Our VAPT experts employ advanced techniques and tools to assess your
                    systems' security posture and provide actionable recommendations for improvement.</p>
            </div>

            {{-- <div class="row">
            <div class="col-lg-12">
                <ul id="portfolio-flters">
                    <li data-filter="*" class="filter-active">All</li>
                    <li data-filter=".filter-fin">Fintech</li>
                    <li data-filter=".filter-sig">Signature</li>
                </ul>
            </div>
        </div> --}}






            {{-- <div class="row portfolio-container">
                @foreach ($sections as $section)
                    <div class="col-lg-4 col-md-6 portfolio-item {{ $section->button_name }}">
                        <div class="portfolio-wrap" data-url="{{ route('product.show', ['slug' => $section->link]) }}"
                            style="cursor: pointer;">
                            <div class="flip-container">
                                <div class="flipper">
                                    <!-- Front Side -->
                                    <div class="front">
                                        <img src="{{ asset('uploads/first_section/' . $section->logo) }}" class="img-fluid"
                                            alt="{{ $section->title }}">
                                    </div>
                                    <!-- Back Side -->
                                    <div class="back">
                                        <div class="portfolio-info">
                                            <h4>{{ $section->title }}</h4>
                                            <p>{{ $section->description }}</p>
                                            <a href="{{ route('product.show', ['slug' => $section->link]) }}"
                                                title="More Details">
                                                <i class="bi bi-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div> --}}



            <section id="about" class="about">
                <div class="container" data-aos="fade-up" style="box-shadow: none;">
                    <div class="row no-gutters">
                        <div class="col-lg-6 d-flex flex-column justify-content-center about-content">

                            <div class="section-title">

                                <p>Cyber Security Solutions at Opus Technology
                                    In today’s digital world, safeguarding your data and systems is more critical than ever.
                                    At Opus Technology, we offer cutting-edge Cyber Security Solutions that provide
                                    comprehensive protection against emerging threats. With our expertise, we ensure that
                                    your business remains secure, resilient, and compliant, no matter how complex your IT
                                    infrastructure may be.

                                    Our Cyber Security Services Include:
                                <ul style="padding-left: 20px; list-style-type: disc; text-align: left; margin: 0;">
                                    <li style="margin-bottom: 10px;">Risk Assessment & Vulnerability Management
                                        Identify potential risks and vulnerabilities within your organization. We help you
                                        understand your security posture and recommend strategies for improvement.</li>
                                    <li style="margin-bottom: 10px;">Network Security
                                        Protect your business from unauthorized access with robust network security
                                        measures, including firewalls, intrusion detection systems, and secure VPNs.</li>
                                    <li style="margin-bottom: 10px;"> Cloud Security
                                        Secure your data and applications in the cloud. We ensure that your cloud
                                        infrastructure is safe, scalable, and compliant with industry standards.</li>
                                </ul>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6 video-box">
                            <img src="{{ asset('front-assets/img/cyber1.jpg') }}" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </section>

        </div>
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
