@extends('front.layouts.app')
@section('content')
    <!-- breadcrumb -->
<div class="contact-bg lazy-bg" data-bg="{{ asset('front-assets/img/Services.jpg') }}">
    <h1>page</h1>
    <div class="line"></div>
    <p class="text">We provide Amazing Solutions</p>
</div>
    <!-- breadcrumb end -->


    <!-- privacy policy -->
    <div class="py-120">
        <div class="container">
            <div class="row">
                <div class="col">

                    <div class="terms-content">
                        <h3>{{ $page->title }}</h3>
                        <p>
                        <p>{!! $page->content !!}</p>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- privacy policy end -->
@endsection
