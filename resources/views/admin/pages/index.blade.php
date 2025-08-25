@extends('admin.layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid my-2">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Pages List</h1>
                </div>
                <div class="col-sm-6 text-right">
                    <a href="{{ route('pages.create') }}" class="btn btn-primary">Add New Page</a>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <div class="card">
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Slug</th>
                                <th width="150">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($pages as $page)
                                <tr>
                                    <td>{{ $loop->iteration + ($pages->currentPage() - 1) * $pages->perPage() }}</td>
                                    <td>{{ $page->title }}</td>
                                    <td>{{ route('front.home') }}/page/{{ $page->slug }}</td>
                                    <td>
                                        <a href="{{ route('pages.edit', $page->id) }}" class="btn btn-sm btn-info">Edit</a>
                                        <form action="{{ route('pages.destroy', $page->id) }}" method="POST"
                                            style="display:inline-block;"
                                            onsubmit="return confirm('Are you sure you want to delete this page?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center">No pages found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Pagination -->
            <div class="d-flex justify-content-center mt-3">
                {!! $pages->links() !!}
            </div>
        </div>
    </section>
@endsection
