@extends('admin.layout.main')
@section('title', 'Dashboard | Services')
@section('content')
    <div class="container">
        <h4>Services</h4>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Bootstrap Card -->
        <div class="card mt-3">
            <div class="card-header d-flex justify-content-between align-items-center">
                Services List
                <a href="{{ route('services.create') }}" class="btn btn-primary btn-sm">Create New Service</a>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Slug</th>
                            <th>Meta Title</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($services as $service)
                            <tr>
                                <td>{{ substr($service->sec1_heading, 0, 14) }}...</td>
                                <td>{{ $service->slug }}</td>
                                <td>{{ $service->meta_title }}</td>
                                <td class="d-flex">
                                    {{-- Uncomment below if you want to add a view functionality --}}
                                    {{-- <a href="{{ route('services.show', $service) }}" class="btn btn-info btn-sm me-2">View</a> --}}
                                    <a href="{{ route('services.edit', $service) }}" class="btn btn-warning btn-sm me-2">Edit</a>
                                    <form action="{{ route('services.destroy', $service) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this service?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <!-- Pagination -->
                <div class="pagination">
                    {{ $services->links('pagination::bootstrap-4') }}
                </div>

                <!-- Bootstrap CSS & JS CDN Links -->
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-OPoCMTIhfgGJgu6eDxBnxrfzd9kUKD5jgiZlqHfjMTvNNtvuZmlOE8HjsqvMdKwK" crossorigin="anonymous">
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-qL7tlG+uG43V0FukLi7kxOuk2J/Z0D9+He4E4YoM5B/T9N42PSXeey2fNlWlb3Ew" crossorigin="anonymous"></script>
            </div>
        </div>
    </div>
@endsection
