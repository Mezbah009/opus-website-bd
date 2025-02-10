@extends('admin.layouts.app')
@section('content')

<div class="container">
    <h2>Cyber Security First Sections</h2>
    <a href="{{ route('cyber_security.create') }}" class="btn btn-primary">Add New</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Description</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sections as $section)
                <tr>
                    <td>{{ $section->id }}</td>
                    <td>{{ $section->description }}</td>
                    <td>
                        @if($section->image)
                            <img src="{{ asset($section->image) }}" width="100" />
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('cyber_security.edit', $section->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('cyber_security.destroy', $section->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?');">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
