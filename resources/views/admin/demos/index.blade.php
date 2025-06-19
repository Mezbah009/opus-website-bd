@extends('admin.layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid my-2">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Demo Requests</h1>
                </div>
                <div class="col-sm-6 text-right">
                    <a href="{{ route('demos.export') }}" class="btn btn-primary">Export to Excel</a>
                </div>
            </div>
        </div>
    </section>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <section class="content">
        <div class="card">
            <div class="card-body p-0">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>Organization</th>
                            <th>Product</th>
                            <th>Submitted At</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($demos as $demo)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $demo->first_name }} {{ $demo->last_name }}</td>
                                <td>{{ $demo->email }}</td>
                                <td>{{ $demo->mobile }}</td>
                                <td>{{ $demo->org_name }}</td>
                                <td>{{ $demo->product->title ?? 'N/A' }}</td>
                                <td>{{ $demo->created_at->format('d M Y') }}</td>
                                <td>
                                    <form action="{{ route('demos.destroy', $demo->id) }}" method="POST"
                                        onsubmit="return confirm('Are you sure you want to delete this demo request?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                </td>

                            </tr>
                        @endforeach

                    </tbody>
                </table>

                <div class="px-3 py-2">
                    {{ $demos->links() }}
                </div>
            </div>
        </div>
    </section>
@endsection
