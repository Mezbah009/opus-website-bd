@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <h2>Edit Section</h2>
        <form action="{{ route('cyber_security_second_section.update', $section->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label>Title</label>
                <input type="text" name="title" class="form-control" value="{{ $section->title }}">
            </div>
            <div class="form-group">
                <label>Description</label>
                <textarea name="description" class="form-control">{{ $section->description }}</textarea>
            </div>
            <div class="form-group">
                <label>Icon</label>
                <input type="file" name="icon" class="form-control">
                <img src="{{ asset('storage/'.$section->icon) }}" width="50">
            </div>
            <button type="submit" class="btn btn-success">Update</button>
        </form>
    </div>
@endsection
