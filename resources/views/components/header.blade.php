<!-- resources/views/components/header.blade.php -->


<!-- ======= Header ======= -->

<header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center">
        <div class="logo me-auto">
            <!-- <h1><a href="index.html">OPUS</a></h1> -->
            <!-- Uncomment below if you prefer to use an image logo -->
            <a href="{{ route('front.home') }}"><img src="{{ asset('front-assets/img/opus-logo.png') }}" alt=" Opus logo"
                    class="img-fluid"></a>
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
                <li><a class="nav-link scrollto {{ Request::is('case-study') ? 'active' : '' }}"
                        href="{{ route('front.caseStudy') }}">Case Study</a></li>
                <li><a class="nav-link scrollto {{ Request::is('blog') ? 'active' : '' }}"
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
