@extends('front.layouts.app')


<style>
    .fixed-card {
        height: 100%;
        /* Ensures all cards are equal height */
        display: flex;
        flex-direction: column;
    }

    .card-img-top {
        height: 200px;
        /* Adjust image height */
        object-fit: cover;
        /* Crop image to fit */
    }

    .card-block {
        flex-grow: 1;
        /* Expands to fill available space */
        display: flex;
        flex-direction: column;
    }

    .card-title {
        min-height: 20px;
        /* Ensures all titles take up same space */
    }

    .card-text {
        flex-grow: 1;
        /* Makes the excerpt area flexible */
        min-height: 20px;
        /* Ensures all excerpts take up same space */
    }

    .card .btn {
        margin-top: auto;
        /* Pushes the button to the bottom */
    }
</style>

@section('content')
    <div class="contact-bg" style="background-image: url('{{ asset('front-assets/img/case.jpg') }}');">
        {{-- <h3>Get in Touch with Us</h3> --}}
        <h2>Case Study</h2>
        <div class="line">
            <div></div>
            <div></div>
            <div></div>
        </div>
        {{-- <p class="text">We provide Amazing Solutions</p> --}}
    </div>


    <section id="blog-card" class="padding-top-bottom-90">
        <div class="container">
            {{-- <div class="heading-wraper text-center margin-bottom-80">
                <h4>latest published</h4>
                <hr class="heading-devider gradient-orange">
            </div> --}}
            <div class="row">
                @foreach ($caseStudy as $case)
                    <div class="col-md-4 mb-4">
                        <div class="card fixed-card clickable-card"
                            data-url="{{ route('front.showCaseStudy', ['slug' => $case->slug]) }}">
                            <img class="card-img-top img-responsive max-width-100"
                                src="{{ asset('uploads/casestudies/' . $case->image) }}" alt="{{ $case->title }}">
                            <div class="card-block p-3">
                                <p class="card-text"><small class="text-muted blog-category">{{ $case->category }}</small>
                                </p>
                                <h4 class="card-title">{{ $case->title }}</h4>
                                <p class="card-text"><small class="text-muted italic">{{ $case->date }}</small></p>
                                <p class="card-text">{{ $case->excerpt }}</p>
                                <a href="{{ route('front.showCaseStudy', ['slug' => $case->slug]) }}"
                                    class="btn btn-primary mt-auto">
                                    Read More <i class="ion-ios-arrow-thin-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
