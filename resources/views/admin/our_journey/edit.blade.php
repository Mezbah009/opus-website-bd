@extends('admin.layouts.app')

@section('content')
    <div class="container mt-5">
        <h1>Edit Journey</h1>

        <!-- Display validation errors -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Form for editing an existing journey -->
        <form action="{{ route('journeys.update', $journey->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="year">Year</label>
                <input type="number" name="year" id="year" class="form-control" value="{{ old('year', $journey->year) }}" required>
            </div>

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $journey->title) }}" required>
            </div>

            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" id="image" class="form-control-file">
                @if($journey->image)
                    <img src="{{ asset($journey->image) }}" alt="{{ $journey->title }}" class="img-thumbnail mt-2" width="100">
                @else
                    <p>No image uploaded</p>
                @endif
            </div>

            <button type="submit" class="btn btn-primary mt-3">Update Journey</button>
            <a href="{{ route('journeys.index') }}" class="btn btn-secondary mt-3 ml-2">Back to List</a>
        </form>
    </div>
@endsection
