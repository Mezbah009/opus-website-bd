@extends('front.layouts.app')

@php
    $title = "Fintech Solutions - Opus Technology";
    $description = "Opus Technology offers innovative fintech solutions to revolutionize financial services, enhance security, and improve transaction efficiency.";
    $keywords = "fintech solutions, financial technology, payment processing, blockchain, digital banking, mobile payments, Opus Technology";
@endphp

@section('content')
    <div class="contact-bg" style="background-image: url('{{ asset('front-assets/img/Fintech.jpg') }}');">
        {{-- <h3>Get in Touch with Us</h3> --}}
        <h1>Our Fintech Solutions</h1>
        <div class="line">
            <div></div>
            <div></div>
            <div></div>
        </div>
        {{-- <p class="text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Assumenda iste facilis quos impedit
        fuga nobis modi debitis laboriosam velit reiciendis quisquam alias corporis, maxime enim, optio ab dolorum sequi
        qui.</p> --}}
    </div>

    <!-- ======= Our Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="section-title">
            <h2>Our Fintech Products</h2>
            <p>Opus Technology Ltd is a leading Software Development and IT consulting service provider company. We provide state-of-the-art fintech solutions designed to transform financial services and empower businesses to thrive in the digital economy.</p>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <ul id="portfolio-flters">
                    <li data-filter="*" class="filter-active">All</li>
                    <li data-filter=".filter-cb">Conventional Banking</li>
                    <li data-filter=".filter-ib">Islamic Banking</li>
                    <li data-filter=".filter-mf">Micro-Finance</li>
                </ul>
            </div>
        </div>

        <div class="row portfolio-container">
            @foreach ($sections as $section)
            <div class="col-lg-4 col-md-6 portfolio-item {{$section->fin_cat}}">
                <div class="portfolio-wrap" data-url="{{ route('product.show', ['slug' => $section->link]) }}"
                    style="cursor: pointer;">
                    <img src="{{ asset('uploads/first_section/' . $section->logo) }}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        {{-- <h4>{{$section->title}}</h4>
                        <p style="word-wrap: break-word; padding-right:10px; padding-left:10px;">
                            {{$section->description}}</p> --}}
                        <div class="portfolio-links">
                            {{-- <a href="/uploads/first_section/{{ $section->logo }}" data-gallery="portfolioGallery"
                                class="portfolio-lightbox" title="App 1"><i class="bi bi-plus"></i></a>
                            <a href="{{ route('product.show', ['slug' => $section->link]) }}" title="More Details"><i
                                    class="bi bi-arrow-right"></i></a> --}}
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>


    {{-- <section id="portfolio" class="portfolio section-bg">
        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="section-title">
                <h2>Our Fintech Products</h2>
                <p>Opus Technology Ltd is a leading Software Development and IT consulting service provider company.
                    Combining unparalleled experience, domain expertise, best practices & comprehensive capabilities across
                    various industries & business functions, it collaborates with customers to help them effectively address
                    their operational challenges & grow their businesses stronger.</p>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-cb">Conventional Banking</li>
                        <li data-filter=".filter-ib">Islamic Banking</li>
                        <li data-filter=".filter-mf">Micro-Finance</li>
                    </ul>
                </div>
            </div>



            <div class="row portfolio-container">
                @foreach ($sections as $section)
                    <div class="col-lg-4 col-md-6 portfolio-item {{ $section->fin_cat }}">
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
            </div>

        </div>
    </section> --}}

    <!-- End Our Portfolio Section -->

    <!-- JavaScript for click functionality -->
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
