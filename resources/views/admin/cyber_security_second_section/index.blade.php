@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <h2>Cyber Security Second Section</h2>
        <a href="{{ route('cyber_security_second_section.create') }}" class="btn btn-primary mb-3">Add New</a>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Icon</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($sections as $section)
                    <tr>
                        <td>{{ $section->id }}</td>
                        <td>
                            @if($section->icon)
                                <img src="{{ asset($section->icon) }}" width="50" height="50">
                            @else
                                No Image
                            @endif
                        </td>
                        <td>{{ $section->title }}</td>
                        <td>{{ $section->description }}</td>
                        <td>
                            <a href="{{ route('cyber_security_second_section.edit', $section->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('cyber_security_second_section.destroy', $section->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
