@extends('front.layouts.app')

@php
    $title = "Our Services - Opus Technology Limited";
    $description = "Explore the wide range of services offered by Opus Technology. From software development to digital marketing, we provide end-to-end solutions to drive your business success.";
    $keywords = "IT services, software development, digital marketing, custom solutions, business solutions, Opus Technology, service provider, technology solutions";
@endphp


@section('content')
<div class="contact-bg" style="background-image: url('{{ asset('front-assets/img/Services.jpg') }}');">
    {{-- <h3>Get in Touch with Us</h3> --}}
    <h1>Our Services</h1>
    <div class="line">
        <div></div>
        <div></div>
        <div></div>
    </div>
    <p class="text">We provide Amazing Solutions</p>
</div>

<div class="section-title">

</div>

<!-- =======  Custom Software ======= -->

<div class="container" data-aos="fade-up" style="box-shadow: none;">
    @foreach ($services as $index => $service)
    <div class="section-title" style="padding-top: 60px; padding-bottom: 0 !important;">
        <h2>{{ $service->title }}</h2>
    </div>

    <div id="about" class="about showcase-item {{ $index % 2 == 0 ? 'left' : 'right' }}">
        <div class="row no-gutters">
            @if ($index % 2 == 0)
            <!-- Image on the left, content on the right -->
            <div class="col-lg-6 d-flex justify-content-center align-items-center">
                <img src="{{ asset('uploads/services/' . $service->image) }}" class="img-fluid" alt="{{ $service->title }}">
            </div>
            <div class="col-lg-6 d-flex flex-column justify-content-center about-content">
                <div>
                    <p class="fs-5 mb-4 service-description">{!! $service->description !!}</p>
                </div>
            </div>
            @else
            <!-- Content on the left, image on the right -->
            <div class="col-lg-6 d-flex flex-column justify-content-center about-content">
                <div>
                    <p class="fs-5 mb-4 service-description">{!! $service->description !!}</p>
                </div>
            </div>
            <div class="col-lg-6 d-flex justify-content-center align-items-center">
                <img src="{{ asset('uploads/services/' . $service->image) }}" class="img-fluid" alt="{{ $service->title }}">
            </div>
            @endif
        </div>
    </div>

    @endforeach
</div>
<!-- hkl -->
@endsection
