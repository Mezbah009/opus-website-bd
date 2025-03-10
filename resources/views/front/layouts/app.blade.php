<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- <title>Opus Technology Limited - Software & IT Solutions in Bangladesh</title> --}}

    @yield('title')

    <meta name="description"
        content="Opus Technology Limited is a leading software company in Bangladesh providing enterprise solutions, fintech, AI, cybersecurity, and IT consultancy.">
    <meta name="keywords"
        content="Software Company in Bangladesh, IT Solutions, Enterprise Software, Fintech, AI, Cybersecurity, Mobile Apps, Web Development">
    <meta name="author" content="Opus Technology Limited">

    <!-- Canonical URL -->
    <link rel="canonical" href="https://opus-bd.com/">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Opus Technology Limited - Software & IT Solutions in Bangladesh">
    <meta property="og:description"
        content="We offer cutting-edge software solutions, fintech services, and enterprise IT consultancy.">
    <meta property="og:image" content="{{ asset('front-assets/img/opus-logo.png') }}">
    <meta property="og:url" content="https://opus-bd.com/">
    <meta property="og:type" content="website">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Opus Technology Limited - Software & IT Solutions in Bangladesh">
    <meta name="twitter:description"
        content="We offer cutting-edge software solutions, fintech services, and enterprise IT consultancy.">
    <meta name="twitter:image" content="{{ asset('front-assets/img/opus-logo.png') }}">

    <!-- Favicons -->
    {{-- <link href="{{ asset('front-assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('front-assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon"> --}}

    <link rel="icon" href="{{ asset('front-assets/img/favicon.png') }}" type="image/png">

    <!-- Structured Data (JSON-LD Schema) -->
    <script type="application/ld+json">
        {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "Opus Technology Limited",
        "url": "https://opus-bd.com/",
        "logo": "{{ asset('front-assets/img/opus-logo.png') }}",
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+8802222225006",
            "contactType": "customer service",
            "areaServed": "BD",
            "availableLanguage": "en"
        },
        "sameAs": [
            "https://www.facebook.com/OpusTechnologyGlobal/",
            "https://www.linkedin.com/company/opus-technology-limited/",
            "https://www.youtube.com/@opustechnologylimited"
        ]
        }
        </script>

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('front-assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front-assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('front-assets/vendor/aos_team/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('front-assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front-assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('front-assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front-assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front-assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">


    <!-- Existing Stylesheets -->
    <link href="{{ asset('front-assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front-assets/css/style.css') }}" rel="stylesheet">


    <!-- Template Main CSS File -->
    <link href="{{ asset('front-assets/css/style.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">




    {{-- others CSS --}}

    {{--
    <link href="{{ asset('front-assets/others/asset/css/bootstrap.min.css')}}" rel="stylesheet"> --}}

    <!-- Font Awesome CSS -->
    <link href="{{ asset('front-assets/others/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- Animate CSS -->
    <link href="{{ asset('front-assets/others/css/animate.css') }}" rel="stylesheet">
    <!-- Owl-Carousel -->
    <link rel="stylesheet" href="{{ asset('front-assets/others/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('front-assets/others/css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('front-assets/others/css/owl.transitions.css') }}">
    <!-- Custom CSS -->

    <link rel="stylesheet" href="{{ asset('front-assets/css/custom.css') }}">
    {{--
    <link href="{{ asset('front-assets/others/css/style.css')}}" rel="stylesheet"> --}}
    <link href="{{ asset('front-assets/others/css/responsive.css') }}" rel="stylesheet">



    <!-- =======================================================
  * Template Name: Mamba
  * Template URL: https://bootstrapmade.com/mamba-one-page-bootstrap-template-free/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
======================================================== -->

</head>

<body>

    <!-- ======= Top Bar ======= -->
    <section id="topbar" class="d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope-fill"></i><a href="mailto:contact@example.com">info@opus-bd.com</a>
                <i class="bi bi-phone-fill phone-icon"></i> +8802222225006
                <i class="bi bi-phone-fill phone-icon"></i> +88-01811317129
            </div>
            <div class="social-links d-none d-md-block">
                <a href="https://www.facebook.com/OpusTechnologyGlobal/" class="facebook" target="_blank">
                    <i class="bi bi-facebook"></i>
                </a>
                <a href="https://www.linkedin.com/company/opus-technology-limited/" class="linkedin" target="_blank">
                    <i class="bi bi-linkedin"></i>
                </a>
                <a href="https://www.youtube.com/@opustechnologylimited" class="youtube" target="_blank">
                    <i class="bi bi-youtube"></i>
                </a>
            </div>

        </div>
    </section>

    <!-- ======= Header ======= -->
    {{-- <header id="header" class="d-flex align-items-center">
        <div class="container d-flex align-items-center">
            <div class="logo me-auto">
                <!-- <h1><a href="index.html">OPUS</a></h1> -->
                <!-- Uncomment below if you prefer to use an image logo -->
                <a href="{{ route('front.home') }}"><img src="{{ asset('front-assets/img/opus-logo.png') }}"
                        alt="" class="img-fluid"></a>
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto {{ Request::is('/') ? 'active' : '' }}"
                            href="{{ route('front.home') }}">Home</a></li>
                    <li><a class="nav-link scrollto {{ Request::is('about-us') ? 'active' : '' }}"
                            href="{{ route('front.about') }}">About</a></li>
                    <li><a class="nav-link scrollto {{ Request::is('products') ? 'active' : '' }}"
                            href="{{ route('front.products') }}">Product</a></li>
                    <li><a class="nav-link scrollto {{ Request::is('fintech') ? 'active' : '' }}"
                            href="{{ route('front.fintech') }}">Fintech</a></li>
                    <li><a class="nav-link scrollto {{ Request::is('clients') ? 'active' : '' }}"
                            href="{{ route('front.clients') }}">Clients</a></li>
                    <li><a class="nav-link scrollto {{ Request::is('services') ? 'active' : '' }}"
                            href="{{ route('front.services') }}">Services</a></li>
                    <li><a class="nav-link scrollto {{ Request::is('blogs') ? 'active' : '' }}"
                            href="{{ route('front.blog') }}">Blogs</a></li>
                    <li><a class="nav-link scrollto {{ Request::is('jobs') ? 'active' : '' }}"
                            href="{{ route('front.jobs') }}">Jobs</a>
                    </li>
                    <li><a class="nav-link scrollto {{ Request::is('contact-us') ? 'active' : '' }}"
                            href="{{ route('front.contact') }}">Contact</a></li>

                    <!-- New Request Demo Button -->
                    <li>
                        <a class="btn-primary text-whites " href="{{ route('front.demo') }}">Request Demo</a>
                    </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
        </div>
    </header><!-- End Header --> --}}


    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex align-items-center">
            <div class="logo me-auto">
                <!-- <h1><a href="index.html">OPUS</a></h1> -->
                <!-- Uncomment below if you prefer to use an image logo -->
                <a href="{{ route('front.home') }}"><img src="{{ asset('front-assets/img/opus-logo.png') }}"
                        alt="" class="img-fluid"></a>
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto {{ Request::is('/') ? 'active' : '' }}"
                            href="{{ route('front.home') }}">Home</a></li>
                    <li><a class="nav-link scrollto {{ Request::is('about-us') ? 'active' : '' }}"
                            href="{{ route('front.about') }}">About</a></li>

                    <!-- Dropdown Menu for Product -->
                    <li class="dropdown">
                        <a href="#"
                            class="nav-link scrollto dropdown-toggle {{ Request::is('products') ? 'active' : '' }}"
                            data-bs-toggle="dropdown">Product</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('front.products') }}">Enterprise
                                    Solutions</a>
                            </li>
                            <li><a class="dropdown-item" href="{{ route('front.fintech') }}">Fintech Solutions</a>
                            </li>
                            <li><a class="dropdown-item" href="{{ route('front.mobileApp') }}">Mobile App
                                    Solutions</a>
                            </li>
                            <li><a class="dropdown-item" href="{{ route('front.aiSolutions') }}">AI Solutions</a>
                            </li>
                            <li><a class="dropdown-item" href="{{ route('front.systemSolutions') }}">System
                                    Solutions</a></li>
                            <li><a class="dropdown-item" href="{{ route('front.cyberSecurity') }}">Cyber Security
                                    Solutions</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto {{ Request::is('services') ? 'active' : '' }}"
                            href="{{ route('front.services') }}">Services</a></li>
                    <li><a class="nav-link scrollto {{ Request::is('clients') ? 'active' : '' }}"
                            href="{{ route('front.clients') }}">Clients</a></li>
                    <li><a class="nav-link scrollto {{ Request::is('clients') ? 'active' : '' }}"
                            href="{{ route('front.caseStudy') }}">Case Study</a></li>
                    <li><a class="nav-link scrollto {{ Request::is('blogs') ? 'active' : '' }}"
                            href="{{ route('front.blog') }}">Blogs</a></li>
                    <li><a class="nav-link scrollto {{ Request::is('jobs') ? 'active' : '' }}"
                            href="{{ route('front.jobs') }}">Jobs</a></li>
                    <li><a class="nav-link scrollto {{ Request::is('contact-us') ? 'active' : '' }}"
                            href="{{ route('front.contact') }}">Contact</a></li>

                    <!-- Request Demo Button -->
                    {{-- <li>
                        <a class="btn-primary text-whites" href="{{ route('front.demo') }}">Request Demo</a>
                    </li> --}}
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
        </div>
    </header><!-- End Header -->




    <!-- End Hero -->

    <main id="main">

        @yield('content')

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="row" style="text-align: center">
                        @if (isset(footer()['contacts']) && footer()['contacts']->isNotEmpty())
                            @foreach (footer()['contacts'] as $contact)
                                <div class="col-lg-4 d-flex" data-aos="fade-up">
                                    <div class="info-box">
                                        <img src="{{ asset('uploads/first_section/' . $contact->image) }}"
                                            alt="Contact Image" width="150px">
                                        {{-- <h3>{{ $contact->country_name }}</h3> --}}
                                        {{-- <h5>{{ $contact->company_name }}</h5> --}}
                                        <h3>{{ $contact->office_name }}</h3>
                                        <p>{{ $contact->address }}</p>

                                        <p><i class="bx bx-phone"></i> {{ $contact->mobile }}</p>
                                        <div class="social-links mt-3">
                                            <a href="{{ $contact->website }}" class="website"><i
                                                    class="bx bxl-internet-explorer"></i></a>
                                            <a href="{{ $contact->facebook }}" class="facebook"><i
                                                    class="bx bxl-facebook"></i></a>
                                            <a href="{{ $contact->youtube }}" class="youtube"><i
                                                    class="bx bxl-youtube"></i></a>
                                            <a href="{{ $contact->linkedIn }}" class="linkedin"><i
                                                    class="bx bxl-linkedin"></i></a>
                                        </div>

                                    </div>

                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
                <br>
                <br>
                {{-- <div style="text-align: center">
                    @if (isset(footer()['numbers']) && footer()['numbers']->isNotEmpty())
                    @foreach (footer()['numbers'] as $number)
                    <p>{{ $number->phone }}</p>

                    <p>{{ $number->email }}</p>

                    @endforeach
                    @endif


                </div> --}}
            </div>
        </div>
    </footer><!-- End Footer -->

    {{-- 2nd footer --}}

    <footer class="bg-dark text-white pt-4" id="footer">
        <div class="container" style="padding-top: 30px">
            <div class="row">
                <div class="col-md-6 d-flex">

                    <div class="col-12">
                        <div class="row" style="padding: 0% 10% 0% 0%">
                            <div class="d-flex" style="margin-bottom: 20px;">

                                <img src="{{ asset('front-assets/img/9001.png') }}" alt="ISO 9001:2015 Certified"
                                    class="img-fluid" style="width: 150px;height: 150px; margin-right: 10px;">

                                <div style="text-align: justify">

                                    <p style="margin-top: 15px;"> Make a deal with an ISO 9001:2015 Certified Company
                                        .ISO 9001 : 2015 is the international standard that specifies requirements for
                                        Quality
                                        Management System (QMS). Opus Technology Limited is an ISO 9001 : 2015 certified
                                        company,
                                        ensuring high quality and standards in our services.</p>
                                </div>
                            </div>
                            <div class="d-flex">
                                <img src="{{ asset('front-assets/img/27001.png') }}" alt="ISO 9001:2015 Certified"
                                    class="img-fluid" style="width: 150px;height: 150px; margin-right: 10px;">
                                <div style="text-align: justify">

                                    <p style="margin-top: 15px;">Make a deal with an ISO 27001:2022 Certified Company
                                        .Being Certified indicates that an organization has implemented an information
                                        security
                                        management system (ISMS) in accordance with the requirements specified in the
                                        2022
                                        version
                                        of the ISO 27001 standard.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <h5>Importace Link</h5>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('front.home') }}" class="text-white">Home</a></li>
                        <li><a href="{{ route('front.about') }}" class="text-white">About</a></li>
                        <li><a href="{{ route('front.products') }}" class="text-white">Product</a></li>
                        <li><a href="{{ route('front.fintech') }}" class="text-white">Fintech</a></li>
                        <li><a href="{{ route('front.clients') }}" class="text-white">Clients</a></li>
                        <li><a href="{{ route('front.clients') }}" class="text-white">Clients</a></li>
                        <li><a href="{{ route('front.services') }}" class="text-white">Services</a></li>
                        <li><a href="{{ route('front.blog') }}" class="text-white">Blogs</a></li>
                        <li><a href="{{ route('front.jobs') }}" class="text-white">Jobs</a></li>
                        <li><a href="{{ route('front.contact') }}" class="text-white">Contact</a></li>

                    </ul>
                </div>
                <div class="col-md-3">
                    <h5>Our Services</h5>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('front.services') }}" class="text-white">Custom Software
                                Development</a></li>
                        <li><a href="{{ route('front.services') }}" class="text-white">Mobile Application
                                Development</a></li>
                        <li><a href="{{ route('front.services') }}" class="text-white">Web Application
                                Development</a></li>
                        <li><a href="{{ route('front.services') }}" class="text-white">Business Intelligence</a></li>
                        <li><a href="{{ route('front.services') }}" class="text-white">Artificial Intelligence
                                (AI)</a></li>
                        <li><a href="{{ route('front.services') }}" class="text-white">Blockchain</a></li>
                        <li><a href="{{ route('front.services') }}" class="text-white">Re-engineering & Migration</a>
                        </li>
                        <li><a href="{{ route('front.services') }}" class="text-white">Digital Marketing</a></li>
                    </ul>
                </div>

                <div class="social-links" style="text-align: center; padding:10px; font-size: 30px; color:#ffffff">
                    {{-- <a href="{{ $contact->website }}" class="website"><i class="bx bxl-internet-explorer"></i></a>
                    --}}
                    <a href="{{ $contact->facebook }}" class="facebook" target="_blank" rel="noopener noreferrer">
                        <i class="bx bxl-facebook"></i>
                    </a>
                    <a href="{{ $contact->youtube }}" class="youtube" target="_blank" rel="noopener noreferrer">
                        <i class="bx bxl-youtube"></i>
                    </a>
                    <a href="{{ $contact->linkedIn }}" class="linkedin" target="_blank" rel="noopener noreferrer">
                        <i class="bx bxl-linkedin"></i>
                    </a>

                </div>



            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Opus</span></strong>. All Rights Reserved
                Designed by <a href="https://opus-bd.com/">Opus Technology Limited</a>
            </div>
        </div>
    </footer>

    {{-- --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    {{-- --}}

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('front-assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('front-assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('front-assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('front-assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('front-assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('front-assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('front-assets/vendor/php-email-form/validate.js') }}"></script>


    <!-- Template Main JS File -->
    <script src="{{ asset('front-assets/js/main.js') }}"></script>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-LE332BQECE"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-LE332BQECE');
    </script>




    {{-- others JS --}}

    <!-- jQuery Version 2.1.1 -->
    <script src="{{ asset('front-assets/others/js/jquery-2.1.1.min.js') }}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('front-assets/others/asset/js/bootstrap.min.js') }}"></script>
    <!-- Plugin JavaScript -->
    <script src="{{ asset('front-assets/others/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('front-assets/others/js/classie.js') }}"></script>
    <script src="{{ asset('front-assets/others/js/count-to.js') }}"></script>
    <script src="{{ asset('front-assets/others/js/jquery.appear.js') }}"></script>
    <script src="{{ asset('front-assets/others/js/cbpAnimatedHeader.js') }}"></script>
    <script src="{{ asset('front-assets/others/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('front-assets/others/js/jquery.fitvids.js') }}"></script>
    <script src="{{ asset('front-assets/others/js/styleswitcher.js') }}"></script>
    <!-- Contact Form JavaScript -->
    <script src="{{ asset('front-assets/others/js/jqBootstrapValidation.js') }}"></script>
    <script src="{{ asset('front-assets/others/js/contact_me.js') }}"></script>
    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('front-assets/others/js/script.js') }}"></script>

</body>

</html>
