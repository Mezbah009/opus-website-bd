@extends('front.layouts.app')

@section('content')
<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">
        <div class="row justify-content-center">
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">

                <!-- Success message -->
                @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                @endif

                <!-- Error message -->
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('demo.store') }}" method="post" role="form" class="php-email-form" id="demoForm" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6 form-group">
                            <input type="text" name="first_name" class="form-control" id="first_name" placeholder="First Name" required>
                        </div>
                        <div class="col-lg-6 form-group">
                            <input type="text" name="last_name" class="form-control" id="last_name" placeholder="Last Name" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                        </div>
                        <div class="col-lg-6 form-group">
                            <input type="tel" class="form-control" name="mobile" id="mobile" placeholder="Your Phone Number" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="product_id">Select Product Name</label>
                        <select class="form-control" id="product_id" name="product_id" required>
                            <option value="" disabled selected>Select a product</option>
                            @foreach($products as $product)
                                <option value="{{ $product->id }}">{{ $product->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="org_name" id="org_name" placeholder="Organization Name" required>
                    </div>
                    <div class="text-center">
                        <button type="submit" id="submitBtn">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection

