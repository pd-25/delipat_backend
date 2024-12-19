@extends('admin.layout.main')
@section('title', 'Dashboard | Edit Testimonial')
@section('content')

    <!-- Bootstrap Card -->
    <div class="card mt-3">
        <div class="card-header">
            Edit Testimonial
        </div>
        <div class="card-body">
            <form action="{{ route('testimonials.update', $testimonial->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group mb-3">
                    <label for="image">Current Image</label>
                    <div class="mb-3">
                        <img src="{{ asset('storage/'.$testimonial->image) }}" alt="{{ $testimonial->name }}" width="100" height="100" class="rounded-circle">
                    </div>
                    <label for="image">Upload New Image (optional)</label>
                    <input type="file" name="image" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" value="{{ $testimonial->name }}" placeholder="Enter Name" required>
                </div>
                <div class="form-group mb-3">
                    <label for="designation">Designation</label>
                    <input type="text" name="designation" class="form-control" value="{{ $testimonial->designation }}" placeholder="Enter Designation">
                </div>
                <div class="form-group mb-3">
                    <label for="comment">Comment</label>
                    <textarea name="comment" class="form-control" rows="4" placeholder="Enter Comment" required>{{ $testimonial->comment }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary mt-4">Update Testimonial</button>
            </form>
        </div>
    </div>
@endsection
