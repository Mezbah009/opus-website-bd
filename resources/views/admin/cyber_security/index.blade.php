@extends('admin.layouts.app')
@section('content')
    <div class="container">

        <section class="content-header">
            <div class="container-fluid my-2">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1> Cyber Security First Sections</h1>
                    </div>
                    <div class="col-sm-6 text-right">
                        <a href="{{ route('cyber_security.create') }}" class="btn btn-primary">Second Section</a>
                        <a href="{{ route('cyber_security.create') }}" class="btn btn-primary">First Section</a>
                        {{-- <a href="{{ route('products.index') }}" class="btn btn-primary">Back</a> --}}
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </section>


        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif


    {{-- cyber sequrity  FIRST section --}}

        <section class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body table-responsive p-0">

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
                                @foreach ($sections as $section)
                                    <tr>
                                        <td>{{ $section->id }}</td>
                                        <td>{{ $section->description }}</td>
                                        <td>
                                            @if ($section->image)
                                                <img src="{{ asset($section->image) }}" width="100" />
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('cyber_security.edit', $section->id) }}"
                                                class="btn btn-warning">Edit</a>
                                            <form action="{{ route('cyber_security.destroy', $section->id) }}"
                                                method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger"
                                                    onclick="return confirm('Are you sure?');">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
    </div>
    </section>



    {{-- END cyber sequrity  FIRST section --}}


    
@endsection
