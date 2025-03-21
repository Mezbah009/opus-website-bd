@extends('front.layouts.app')

@php
    $title = "Our Clients - Opus Technology Limited";
    $description = "Explore the diverse industries and businesses that trust Opus Technology to deliver innovative solutions and support their growth.";
    $keywords = "clients, partners, business success, Opus Technology, industry solutions, client portfolio, technology solutions";
@endphp

@section('content')


<div class="contact-bg lazy-bg" data-bg="{{ asset('front-assets/img/clients.jpg') }}">
    <h1>Our Valuable Clients</h1>
    <div class="line"></div>
</div>

<!-- ======= Our Portfolio Section ======= -->
<section id="portfolio" class="portfolio section-bg">
    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="section-title">
            {{-- <h2>Our Valuable Clients</h2> --}}
            <p>At OPUS System Solutions, we extend our heartfelt gratitude to the incredible organizations that have
                become our cherished partners on our journey to harmonize technology with Islamic ethics. These valued
                clients have not only entrusted us with their technology needs but have also played a pivotal role in
                shaping our vision and mission.</p>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <ul id="portfolio-flters">
                    <li data-filter="*" class="filter-active">All</li>
                    <li data-filter=".filter-fin">Fintech</li>
                    <li data-filter=".filter-gov">Government Organization</li>
                    <li data-filter=".filter-real">Real Estate</li>
                    <li data-filter=".filter-ngo">NGO</li>
                    <li data-filter=".filter-tel">Telecom</li>
                    <li data-filter=".filter-edu">Education</li>
                    <li data-filter=".filter-hea">Healthcare</li>
                    <li data-filter=".filter-manu">Manufacturing And Trading</li>
                    <li data-filter=".filter-ins">Inspection & Testing</li>
                    <li data-filter=".filter-club">Club and Restaurants</li>
                    <li data-filter=".filter-tech">Technology</li>
                    <li data-filter=".filter-man">Management Consultancy</li>
                </ul>
            </div>
        </div>

        <div class="row portfolio-container">
            @foreach($clients as $client)
            <div class="col-lg-4 col-md-6 portfolio-item {{$client->category}}">
                <div class="portfolio-wrap" data-url="{{ $client->link }}" style="cursor: pointer;">
                    <img src="{{ asset('uploads/first_section/' . $client->logo) }}" class="img-fluid" loading="lazy" alt="{{$client->title}}" style="margin: 0 auto; display: block;">
                    <div class="portfolio-info">
                        <h4>{{$client->title}}</h4>
                        <p style="word-wrap: break-word; padding-right:10px; padding-left:10px;">
                            {{$client->description}}</p>
                        <div class="portfolio-links">
                            {{-- <a href="/uploads/first_section/{{ $client->logo }}" data-gallery="portfolioGallery"
                                class="portfolio-lightbox" title="App 1"><i class="bi bi-plus"></i></a>
                            <a href="{{ $client->link }}" title="More Details" target="_blank"><i class="bi bi-link"></i></a> --}}
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section><!-- End Our Portfolio Section -->

<!-- JavaScript for click functionality -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const portfolioWraps = document.querySelectorAll('.portfolio-wrap');
        portfolioWraps.forEach(function(portfolioWrap) {
            portfolioWrap.addEventListener('click', function() {
                const url = portfolioWrap.getAttribute('data-url');
                window.open(url, '_blank');
            });
        });
    });
</script>



<script>
    document.addEventListener("DOMContentLoaded", function() {
        let lazyBackgrounds = document.querySelectorAll(".lazy-bg");

        lazyBackgrounds.forEach((bg) => {
            let observer = new IntersectionObserver(
                (entries, observer) => {
                    entries.forEach((entry) => {
                        if (entry.isIntersecting) {
                            entry.target.style.backgroundImage =
                                `url('${entry.target.dataset.bg}')`;
                            observer.unobserve(entry.target);
                        }
                    });
                }, {
                    rootMargin: "0px 0px 200px 0px"
                } // Load before entering the viewport
            );

            observer.observe(bg);
        });
    });
</script>



@endsection
