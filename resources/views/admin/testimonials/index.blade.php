@extends('admin.layout.main')
@section('title', 'Dashboard | Testimonials')
@section('content')
    <div class="container">
        <h4>Testimonials</h4>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Bootstrap Card -->
        <div class="card mt-3">
            <div class="card-header d-flex justify-content-between align-items-center">
                Testimonials List
                <a href="{{ route('testimonials.create') }}" class="btn btn-primary btn-sm">Create New Testimonial</a>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Designation</th>
                            <th>Comment</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($testimonials as $testimonial)
                            <tr>
                                <td>
                                    <img src="{{ asset('storage/'.$testimonial->image) }}" alt="{{ $testimonial->name }}" width="50" height="50" class="rounded-circle">
                                </td>
                                <td>{{ $testimonial->name }}</td>
                                <td>{{ $testimonial->designation }}</td>
                                <td>{{ Str::limit($testimonial->comment, 50, '...') }}</td>
                                <td class="d-flex">
                                    <a href="{{ route('testimonials.edit', $testimonial) }}" class="btn btn-warning btn-sm me-2">Edit</a>
                                    <form action="{{ route('testimonials.destroy', $testimonial) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this testimonial?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <!-- Pagination -->
                <div class="pagination">
                    {{ $testimonials->links('pagination::bootstrap-4') }}
                </div>
            </div>
        </div>
    </div>
@endsection
