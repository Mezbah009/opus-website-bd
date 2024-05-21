@extends('front.layouts.app')

@section('content')

<div class="contact-bg" style="background-image: url('{{ asset("front-assets/img/Jobs.jpg") }}');">
    <h2>Jobs</h2>
    <div class="line">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>

<div class="container mt-5 pt-4">
    <div class="row align-items-end mb-4">
        <div>
            <div class="section-title text-center text-md-start">
                <h4 class="title mb-4">Find the perfect jobs</h4>
                <p class="text-muted mb-0 para-desc">Join us and contribute to the enterprise market’s disruption! Join us; we’ll give you a fantastic opportunity to grow and learn while being a part of a fun team and experience.</p>
                <h6><strong>Email: hr@opus-bd.com</strong></h6>
            </div>
        </div><!--end col-->
    </div><!--end row-->

    <div class="row">
        @foreach ($jobs as $job)
        <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
            <div class="card border-0 bg-light rounded shadow">
                <div class="card-body p-4">
                    <span class="badge rounded-pill bg-primary float-md-end mb-3 mb-sm-0">{{ $job->job_type }}</span>
                    <h5>{{ $job->designation }}</h5>
                    <div class="mt-3">
                    <span class="text-muted d-block">Post Date: &nbsp <i class="fa fa-calendar" aria-hidden="true"></i> {{ $job->start_date }} &nbsp&nbsp</span>
                        <span class="text-muted d-block">Last Submission Date: &nbsp<i class="fa fa-calendar" aria-hidden="true"></i> {{ $job->end_date }} &nbsp&nbsp
                        </span>
                    </div>

                    <div class="mt-3">
                        <a href="{{ route('job.show', ['slug' => $job->slug]) }}" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>
        </div><!--end col-->
        @endforeach
    </div><!--end row-->
</div>
<br><br><br>
@endsection
