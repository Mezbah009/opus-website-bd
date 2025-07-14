@extends('front.layouts.app')

@php
    $title = $caseStudyPost->title . ' - Opus Technology Limited';
    $description = $caseStudyPost->excerpt
        ? Str::limit(strip_tags($caseStudyPost->excerpt), 160)
        : Str::limit(strip_tags($caseStudyPost->description), 160);
    $keywords = $caseStudyPost->title; // Optional: replace with tags if you use them
@endphp

@section('content')
    <br><br>
    <div class="container ">
        <div class="row">
            <div class="">
                <!-- Post content-->
                <article>
                    <!-- Post header-->
                    <header class="mb-12">
                        <!-- Post title-->
                        <h1 class="fw-bolder mb-1">{{ $caseStudyPost->title }}</h1>
                    </header>
                    <!-- Post content-->
                    <p class="fs-6 mb-12">{!! $caseStudyPost->description !!}</p>
                </article>

            </div>

        </div>
    </div>
    <br><br><br><br>
@endsection
