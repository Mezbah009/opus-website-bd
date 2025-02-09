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

                                <p>In today’s digital world, safeguarding your data, systems, and networks is more critical
                                    than ever. Cyber threats are evolving rapidly, making it essential to have robust
                                    security measures in place. At Opus Technology, we offer cutting-edge Cyber Security
                                    Solutions designed to provide comprehensive protection against cyberattacks, data
                                    breaches, and emerging threats. Our expert team ensures your business remains secure,
                                    resilient, and fully compliant with industry regulations. Whether you need threat
                                    detection, risk assessment, or incident response, we tailor our solutions to fit your
                                    unique IT infrastructure. Stay ahead of cyber threats with Opus Technology—because
                                    security is not an option, it’s a necessity.
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

        {{-- Fifth section --}}

        <div class="contact-body">
            <section id="contact" class="contact">
                <div class="container" data-aos="fade-up">
                    <div class="row">
                        <div class="row">
                            <div class="col-lg-3 d-flex" data-aos="fade-up">
                                <div class="info-boxs">
                                    <img src="{{ asset('front-assets/img/cyberlogo/1.png') }}" alt="..." width="80px"
                                        style="padding: 8px; display: block; margin: 0 auto;">
                                    <h3 style="text-align:center; margin-bottom: 10px;">Network Security
                                    </h3>
                                    <p>Protect your business from unauthorized access with robust network security measures,
                                        including firewalls, intrusion detection systems, and secure VPNs.
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-3 d-flex" data-aos="fade-up">
                                <div class="info-boxs">
                                    <img src="{{ asset('front-assets/img/cyberlogo/2.png') }}" alt="..." width="80px"
                                        style="padding: 8px; display: block; margin: 0 auto;">
                                    <h3 style="text-align:center; margin-bottom: 10px;">Cloud Security
                                    </h3>
                                    <p>Secure your data and applications in the cloud. We ensure that your cloud
                                        infrastructure is safe, scalable, and compliant with industry standards.
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-3 d-flex" data-aos="fade-up">
                                <div class="info-boxs">
                                    <img src="{{ asset('front-assets/img/cyberlogo/3.png') }}" alt="..." width="80px"
                                        style="padding: 8px; display: block; margin: 0 auto;">
                                    <h3 style="text-align:center; margin-bottom: 10px;">Endpoint Security
                                    </h3>
                                    <p>Safeguard all your devices, from desktops to mobile devices, with advanced endpoint
                                        protection that ensures no device goes unprotected.
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-3 d-flex" data-aos="fade-up">
                                <div class="info-boxs">
                                    <img src="{{ asset('front-assets/img/cyberlogo/4.png') }}" alt="..." width="80px"
                                        style="padding: 8px; display: block; margin: 0 auto;">
                                    <h3 style="text-align:center; margin-bottom: 10px;">Incident Response & Recovery
                                    </h3>
                                    <p>In the event of a cyber attack or data breach, we provide immediate support to
                                        minimize damage and quickly restore your systems to full functionality.
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-3 d-flex" data-aos="fade-up">
                                <div class="info-boxs">
                                    <img src="{{ asset('front-assets/img/cyberlogo/5.png') }}" alt="..." width="80px"
                                        style="padding: 8px; display: block; margin: 0 auto;">
                                    <h3 style="text-align:center; margin-bottom: 10px;">Data Encryption & Protection
                                    </h3>
                                    <p>We use advanced encryption techniques to secure your sensitive information, ensuring
                                        that it is protected from data breaches and unauthorized access.
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-3 d-flex" data-aos="fade-up">
                                <div class="info-boxs">
                                    <img src="{{ asset('front-assets/img/cyberlogo/6.png') }}" alt="..." width="80px"
                                        style="padding: 8px; display: block; margin: 0 auto;">
                                    <h3 style="text-align:center; margin-bottom: 10px;">Compliance & Regulatory Solutions
                                    </h3>
                                    <p>We help you stay compliant with various regulations such as GDPR, PCI-DSS, and HIPAA
                                        by providing tailored security solutions that align with industry standards.
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
