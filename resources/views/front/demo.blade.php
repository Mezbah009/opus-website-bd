@extends('front.layouts.app')

@section('content')

<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">
        <div class="row justify-content-center">
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                <form action="{{ route('demo.store') }}" method="post" role="form" class="php-email-form" id="demoForm" enctype="multipart/form-data">
                    @csrf
                    <!-- Form fields -->
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
                        <select class="form-control" name="prod_name" id="prod_name" required>
                            <option value="" disabled selected>Select Product Name</option>
                            <option value="Product 1">Product 1</option>
                            <option value="Product 2">Product 2</option>
                            <option value="Product 3">Product 3</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="org_name" id="org_name" placeholder="Organization Name" required>
                    </div>
                    <!-- <div class="my-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div> -->
                    <div class="text-center"><button type="submit">Send Message</button></div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection

@section('customJs')
<script>
    $("#demoForm").submit(function(event) {
        event.preventDefault();
        var element = $(this);
        $("button[type=submit]").prop('disabled', true);
        $.ajax({
            url: '{{ route("demo.store") }}',
            type: 'POST',
            data: element.serializeArray(),
            dataType: 'json',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                $("button[type=submit]").prop('disabled', false);
                if (response["status"] == true) {
                    // Handle success response here
                    window.location.href = "{{ route('front.demo') }}";
                } else {
                    var errors = response['errors'];
                    $(".error").removeClass('is-invalid').html(''); // Remove error classes and clear error messages
                    $("input[type='text'], select").removeClass('is-invalid');
                    $.each(errors, function(key, value) {
                        $("#" + key).addClass('is-invalid'); // Add the 'is-invalid' class to the input
                        $("#" + key).next('p').addClass('invalid-feedback').html(value); // Add the error message
                    });
                }
            },
            error: function(jqXHR, exception) {
                console.log("Something went wrong");
            }
        });
    });
</script>
@endsection
