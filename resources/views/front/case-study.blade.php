@extends('front.layouts.app')

@php
    $title = 'Case Study - Opus Technology Limited';
    $description =
        'Explore Opus Technology’s case studies to see how our innovative solutions have helped businesses achieve remarkable results and impact various industries.';
    $keywords =
        'case study, technology solutions, business success, Opus Technology, case studies, technology impact, business transformation, project success';
@endphp


<style>
    .row {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }

    .fixed-card {
        display: flex;
        flex-direction: column;
        height: 100%;
        border: 0px solid #ddd !important;
        border-radius: 0 !important;
        /* Force remove rounding */
        overflow: hidden;
        background-color: #fff;
        box-shadow: 0 0 30px rgba(214, 215, 216, 0.6);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .fixed-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
    }

    .card-img-top {
        height: 150px;
        object-fit: contain;
        padding: 10px;
    }

    .card-block {
        flex-grow: 1;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        padding: 15px;
    }

    .card-title {
        min-height: 50px;
        font-size: 16px;
        font-weight: bold;
        text-align: center;
        color: #666!important;

    }

    .card-text-excerpt {
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
        font-size: 14px;
        min-height: 4.5em;
        color: #444!important;
    }

    .card .btn {
        width: 100%;
        background-color: #0E72B4;
        color: white;
        padding: 10px;
        border-radius: 0 !important;
        /* Force remove rounding */
        text-align: center;
        margin-top: auto;
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    .card .btn:hover {
        background-color: #0D4472;
        color: #fff;
        transition: background-color 0.3s ease, color 0.3s ease;
    }
</style>


@section('content')
    <div class="contact-bg lazy-bg" data-bg="{{ asset('front-assets/img/case.jpg') }}">
        <h1>Case Study</h1>
        <div class="line"></div>
    </div>


    <section id="blog-card" class="padding-top-bottom-90">

        <div class="container">
            <div class="section-title">
                <h2>Case Study</h2>
                <p>Opus Technology Ltd is a leading Software Development and IT consulting service provider company.
                    Combining unparalleled experience, domain expertise, best practices & comprehensive capabilities across
                    various industries & business functions, it collaborates with customers to help them effectively address
                    their operational challenges & grow their businesses stronger.</p>
            </div>
            <div class="row">
                @foreach ($caseStudy as $case)
                    <div class="col-md-3 mb-4">
                        <div class="card fixed-card clickable-card"
                            data-url="{{ route('front.showCaseStudy', ['slug' => $case->slug]) }}">
                            <img class="card-img-top img-responsive max-width-100"
                                src="{{ asset('uploads/casestudies/' . $case->image) }}" loading="lazy"
                                alt="{{ $case->title }}">
                            <div class="card-block p-3">
                                <p class="card-text"><small class="text-muted blog-category">{{ $case->category }}</small>
                                </p>
                                <h4 class="card-title">{{ $case->title }}</h4>
                                <p class="card-text"><small class="text-muted italic">{{ $case->date }}</small></p>
                                <p class="card-text-excerpt">{{ $case->excerpt }}</p>
                                <a href="{{ route('front.showCaseStudy', ['slug' => $case->slug]) }}"
                                    class="btn btn-primary mt-auto" aria-label="Read more about {{ $case->title }}">
                                    Read More <i class="ion-ios-arrow-thin-right"></i>
                                </a>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>



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
