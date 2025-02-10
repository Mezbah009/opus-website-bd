@extends('front.layouts.app')

@section('content')
<div class="contact-bg" style="background-image: url('{{ asset('front-assets/img/Services.jpg') }}');">
    {{-- <h3>Get in Touch with Us</h3> --}}
    <h2>Services</h2>
    <div class="line">
        <div></div>
        <div></div>
        <div></div>
    </div>
    <p class="text">We provide Amazing Solutions</p>
</div>

<div class="section-title" style="padding-top: 60px">

</div>

<!-- =======  Custom Software ======= -->

<div class="container" data-aos="fade-up" style="box-shadow: none;">
    @foreach ($services as $index => $service)
    <div class="section-title">
        <h2>{{ $service->title }}</h2>
    </div>

    <div id="about" class="about showcase-item {{ $index % 2 == 0 ? 'left' : 'right' }}">
        <div class="row no-gutters">
            @if ($index % 2 == 0)
            <!-- Image on the left, content on the right -->
            <div class="col-lg-6 video-box">
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
            <div class="col-lg-6 video-box">
                <img src="{{ asset('uploads/services/' . $service->image) }}" class="img-fluid" alt="{{ $service->title }}">
            </div>
            @endif
        </div>
    </div>
    @endforeach
</div>

@endsection