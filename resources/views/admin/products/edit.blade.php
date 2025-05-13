@extends('admin.layouts.app')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid my-2">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Update Product</h1>
            </div>
            <div class="col-sm-6 text-right">
                <a href="{{ route('products.index') }}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <form method="POST" action="{{ route('products.update', $product->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" name="title" required value="{{ $product->title }}">
                                <p class="error"></p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="button_name">Product Category</label>
                                <select name="button_name" id="button_name" class="form-control">
                                    <option value="" disabled {{ !$product->button_name ? 'selected' : '' }}>Select Product Category</option>
                                    <option value="filter-sig" {{ $product->button_name === 'filter-sig' ? 'selected' : '' }}>Enterprise Solutions</option>
                                    <option value="filter-fin" {{ $product->button_name === 'filter-fin' ? 'selected' : '' }}>Fintech Solutions</option>
                                    <option value="filter-app" {{ $product->button_name === 'filter-app' ? 'selected' : '' }}>Mobile App Solutions</option>
                                </select>

                            </div>
                        </div>


                        <div class="col-md-6" id="fintechDropdown" style="{{ $product->button_name === 'filter-fin' ? '' : 'display: none;' }}"
                            >
                            <div class="mb-3">
                                <label for="fin_cat">Fintech Options</label>
                                <select name="fin_cat" id="fintechOptions" class="form-control">
                                    <option value="" disabled {{ !$product->fin_cat ? 'selected' : '' }}>Select Fintech Option</option>
                                    <option value="filter-cb" {{ $product->fin_cat === 'filter-cb' ? 'selected' : '' }}>Conventional Banking</option>
                                    <option value="filter-ib" {{ $product->fin_cat === 'filter-ib' ? 'selected' : '' }}>Islamic Banking</option>
                                    <option value="filter-mf" {{ $product->fin_cat === 'filter-mf' ? 'selected' : '' }}>Micro-Finance</option>
                                </select>

                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="link">Link</label>
                                <input type="text" readonly name="slug" id="slug" class="form-control" placeholder="Link" value="{{ $product->link }}">
                                <p class="error"></p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="description">Description</label>
                                <textarea type="text" name="description" id="description" class="form-control" placeholder="Description">{{ $product->description }}</textarea>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="mb-1">
                                <label for="image">Image</label>
                                <input type="hidden" id="image_id" name="image_id">

                                <div id="image" class="dropzone dz-clickable">
                                    <div class="dz-message needsclick">
                                        <br>Drop files here or click to upload.<br><br>
                                    </div>
                                </div>
                            </div>
                            @if (!@empty($product->logo))
                            <div>
                                <img width="250" src="{{asset('uploads/first_section/'.$product->logo)}}" alt="">
                            </div>
                            @endif
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="meta_title">Meta Title</label>
                                <input type="text" name="meta_title" id="meta_title" class="form-control" placeholder="Meta Title" value="{{ $product->meta_title }}">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="meta_description">Meta Description</label>
                                <textarea name="meta_description" id="meta_description" class="form-control" placeholder="Meta Description">{{ $product->meta_description }}</textarea>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="meta_keywords">Meta Keywords</label>
                                <input type="text" name="meta_keywords" id="meta_keywords" class="form-control" placeholder="e.g. fintech, banking, mobile apps" value="{{ $product->meta_keywords }}">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="pb-5 pt-3">
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('products.index') }}" class="btn btn-outline-dark ml-3">Cancel</a>
            </div>
        </div>
    </form>

    <!-- /.card -->
</section>
<!-- /.content -->
@endsection
@section('customJs')


<script>
    $("#sectionForm").submit(function(event) {
        event.preventDefault();
        var element = $(this);
        $("button[type=submit]").prop('disabled', true);
        $.ajax({
            url: '{{ route("products.store") }}',
            type: 'POST',
            data: element.serializeArray(), // Fixed typo: 'data' instead of 'date'
            dataType: 'json',
            headers: {

                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) { // Fixed typo: 'function' instead of 'funtion'
                // Handle success response here
                $("button[type=submit]").prop('disabled', false);
                if (response["status"] == true) {
                    window.location.href = "{{route('products.index')}}"



                } else {
                    var errors = response['errors'];
                    $(".error").removeClass('is-invalid').html(''); // Remove error classes and clear error messages
                    $("input[type='text'], select").removeClass('is-invalid');
                    $.each(errors, function(key, value) {
                        $(`#${key}`).addClass('is-invalid'); // Add the 'is-invalid' class to the input
                        $(`#${key}`).next('p').addClass('invalid-feedback').html(value); // Add the error message
                    });

                }

            },
            error: function(jqXHR, exception) {
                console.log("Something went wrong");
            }
        })
    });

    $("#title").change(function() {
        var title = $(this).val();
        $("button[type=submit]").prop('disabled', true);
        $.ajax({
            url: '{{ route("getSlug") }}',
            type: 'get',
            data: {
                title: title
            },
            dataType: 'json',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                $("button[type=submit]").prop('disabled', false);
                if (response["status"] == true) {
                    $("#slug").val(response["slug"]);
                }
            },
            error: function(jqXHR, exception) {
                console.log("Something went wrong");
            }
        });
    });


    Dropzone.autoDiscover = false;
    const dropzone = $("#image,#logo").dropzone({
        init: function() {
            this.on('addedfile', function(file) {
                if (this.files.length > 1) {
                    this.removeFile(this.files[0]);
                }
            });
        },
        url: "{{ route('temp-images.create') }}",
        maxFiles: 1,
        paramName: 'image',
        addRemoveLinks: true,
        acceptedFiles: "image/jpeg,image/png,image/gif",
        headers: {

            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function(file, response) {
            $("#image_id").val(response.image_id);
            console.log(response)
        }
    });
</script>

<script>
   document.getElementById("button_name").addEventListener("change", function () {
    var selectedValue = this.value;
    if (selectedValue === "filter-fin") {
        document.getElementById("fintechDropdown").style.display = "block";
    } else {
        document.getElementById("fintechDropdown").style.display = "none";
    }
});

</script>


@endsection
