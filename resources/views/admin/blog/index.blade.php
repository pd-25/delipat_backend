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
                <a href="{{ route('blogs.create') }}" class="btn btn-primary btn-sm">Create New Blog</a>
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
                                    {{-- <a href="{{ route('blogs.show', $blog) }}" class="btn btn-info btn-sm me-2">View</a> --}}
                                    <a href="{{ route('blogs.edit', $blog) }}" class="btn btn-warning btn-sm me-2">Edit</a>
                                    <form action="{{ route('blogs.destroy', $blog) }}" method="POST" style="display:inline;">
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
                <div class="d-flex justify-content-center">
                    {{ $blogs->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
