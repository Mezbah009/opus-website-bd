@extends('admin.layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid my-2">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Page</h1>
                </div>
                <div class="col-sm-6 text-right">
                    <a href="{{ route('pages.index') }}" class="btn btn-primary">Back to List</a>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <form method="POST" action="{{ route('pages.update', $page->id) }}">
            @csrf
            @method('PUT')

            <div class="container-fluid">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <!-- Title -->
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="title">Title <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control @error('title') is-invalid @enderror"
                                        name="title" id="title" value="{{ old('title', $page->title) }}" required>
                                    @error('title')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Content -->
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="content">Content</label>
                                    <textarea name="content" id="content" class="summernote @error('content') is-invalid @enderror" rows="8">{{ old('content', $page->content) }}</textarea>
                                    @error('content')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Submit -->
                <div class="pt-3 pb-5">
                    <button type="submit" class="btn btn-success">Update Page</button>
                    <a href="{{ route('pages.index') }}" class="btn btn-outline-dark ml-2">Cancel</a>
                </div>
            </div>
        </form>
    </section>
@endsection
