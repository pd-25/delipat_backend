@extends('admin.layout.main')
@section('title', 'Dashboard | Blogs')
@section('content')
    <div class="container">
        <h4>Blogs</h4>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Bootstrap Card -->
        <div class="card mt-3">
            <div class="card-header d-flex justify-content-between align-items-center">
                Blogs List
                <a href="{{ route('case-studies.create') }}" class="btn btn-primary btn-sm">Create New Blog</a>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Slug</th>
                            <th>Short Description</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($blogs as $blog)
                            <tr>
                                <td>{{ $blog->title }}</td>
                                <td>{{ $blog->slug }}</td>
                                <td>{{ $blog->short_description }}</td>
                                <td class="d-flex">
                                    {{-- <a href="{{ route('case-studies.show', $blog) }}" class="btn btn-info btn-sm me-2">View</a> --}}
                                    <a href="{{ route('case-studies.edit', $blog) }}" class="btn btn-warning btn-sm me-2">Edit</a>
                                    <form action="{{ route('case-studies.destroy', $blog) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this blog?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <!-- Pagination -->
                <div class="pagination">
                    {{ $blogs->links('pagination::bootstrap-4') }}
                </div>
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-OPoCMTIhfgGJgu6eDxBnxrfzd9kUKD5jgiZlqHfjMTvNNtvuZmlOE8HjsqvMdKwK" crossorigin="anonymous">
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-qL7tlG+uG43V0FukLi7kxOuk2J/Z0D9+He4E4YoM5B/T9N42PSXeey2fNlWlb3Ew" crossorigin="anonymous"></script>
            
            </div>
        </div>
    </div>

@endsection
