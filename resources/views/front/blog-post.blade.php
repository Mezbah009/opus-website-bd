@extends('front.layouts.app')

@php
    $title = "Opus Technology Limited - Software & IT Solutions in Bangladesh";
    $description = "Opus Technology Limited is a leading software company in Bangladesh providing enterprise solutions, fintech, AI, cybersecurity, and IT consultancy.";
    $keywords = "Software Company in Bangladesh, IT Solutions, Enterprise Software, Fintech, AI, Cybersecurity, Mobile Apps, Web Development";
@endphp

@section('content')
<div class="container mt-5">
    <div class="row">
        {{-- Change this to col-lg-8 --}}
        <div class="col-lg-12">
            <!-- Post content-->
            <article>
                <!-- Post header-->
                <header class="mb-4">
                    <!-- Post title-->
                    <h1 class="fw-bolder mb-1">{{ $blogPost->title }}</h1>
                    <!-- Post meta content-->
                    <div class="text-muted fst-italic mb-2">Posted on {{
                        \Carbon\Carbon::parse($blogPost->date)->format('F d, Y') }}</div>
                    <!-- Post categories-->
                    <a class="badge bg-secondary text-decoration-none link-light" href="#!">{{ $blogPost->category
                        }}</a>
                </header>
                <!-- Preview image figure-->
                <figure class="mb-4"><img class="img-fluid rounded"
                        src="{{ asset('uploads/blogs/' . $blogPost->image) }}" alt="{{ $blogPost->title }}" /></figure>
                <!-- Post content-->
                <p class="fs-5 mb-4">{!!$blogPost->description!!}</p>
            </article>
            <!-- Comments section-->
            {{-- <section class="mb-5">
                <div class="card bg-light">
                    <div class="card-body">
                        <!-- Comment form-->
                        <form class="mb-4"><textarea class="form-control" rows="3"
                                placeholder="Join the discussion and leave a comment!"></textarea></form>
                        <!-- Comment with nested comments-->
                        <div class="d-flex mb-4">
                            <!-- Parent comment-->
                            <div class="flex-shrink-0"><img class="rounded-circle"
                                    src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
                            <div class="ms-3">
                                <div class="fw-bold">Commenter Name</div>
                                If you're going to lead a space frontier, it has to be government; it'll never be
                                private enterprise. Because the space frontier is dangerous, and it's expensive, and it
                                has unquantified risks.
                                <!-- Child comment 1-->
                                <div class="d-flex mt-4">
                                    <div class="flex-shrink-0"><img class="rounded-circle"
                                            src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
                                    <div class="ms-3">
                                        <div class="fw-bold">Commenter Name</div>
                                        And under those conditions, you cannot establish a capital-market evaluation of
                                        that enterprise. You can't get investors.
                                    </div>
                                </div>
                                <!-- Child comment 2-->
                                <div class="d-flex mt-4">
                                    <div class="flex-shrink-0"><img class="rounded-circle"
                                            src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
                                    <div class="ms-3">
                                        <div class="fw-bold">Commenter Name</div>
                                        When you put money directly to a problem, it makes a good headline.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single comment-->
                        <div class="d-flex">
                            <div class="flex-shrink-0"><img class="rounded-circle"
                                    src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
                            <div class="ms-3">
                                <div class="fw-bold">Commenter Name</div>
                                When I look at the universe and all the ways the universe wants to kill us, I find it
                                hard to reconcile that with statements of beneficence.
                            </div>
                        </div>
                    </div>
                </div>
            </section> --}}
        </div>
        <!-- Side widgets-->
        {{-- <div class="col-lg-4">
            <!-- Search widget-->
            <div class="card mb-4">
                <div class="card-header">Search</div>
                <div class="card-body">
                    <form method="GET">
                        <div class="input-group">
                            <input class="form-control" type="text" name="keyword" placeholder="Enter search term..."
                                aria-label="Enter search term..." aria-describedby="button-search"
                                value="{{ request()->get('keyword') }}">
                            <div class="input-group-append">
                                <button class="btn btn-primary" id="button-search" type="submit">Go!</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Side widget-->
            <div class="card mb-4">
                <div class="card-header">Side Widget</div>
                <div class="card-body">You can put anything you want inside of these side widgets. They are easy to use,
                    and feature the Bootstrap 5 card component!</div>
            </div>
        </div> --}}
    </div>
</div>

@endsection
