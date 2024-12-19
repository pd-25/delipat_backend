@extends('admin.layout.main')
@section('title', 'Dashboard | Add Testimonial')
@section('content')

    <!-- Bootstrap Card -->
    <div class="card mt-3">
        <div class="card-header">
            Add New Testimonial
        </div>
        <div class="card-body">
            <form action="{{ route('testimonials.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-3">
                    <label for="image">Image</label>
                    <input type="file" name="image" class="form-control" required>
                </div>
                <div class="form-group mb-3">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter Name" required>
                </div>
                <div class="form-group mb-3">
                    <label for="designation">Designation</label>
                    <input type="text" name="designation" class="form-control" placeholder="Enter Designation">
                </div>
                <div class="form-group mb-3">
                    <label for="comment">Comment</label>
                    <textarea name="comment" class="form-control" rows="4" placeholder="Enter Comment" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary mt-4">Add Testimonial</button>
            </form>
        </div>
    </div>
@endsection
