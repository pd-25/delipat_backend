@extends('admin.layout.main')
@section('title', 'Add Meta Data | ')
@section('content')
    <h4>Add Meta Data</h4>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card mt-3">
        <div class="card-header">
            Add New Meta Data
        </div>
        <div class="card-body">
            <form action="{{ route('seo-settings.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="page_name" class="form-label">Page Name</label>
                    <select name="page_name" id="page_name" class="form-control" required>
                        <option value="">Select Page</option>
                        <option value="home">Home</option>
                        <option value="gallery">Gallery</option>
                        <option value="service">Service</option>
                        <option value="blog">Blog</option>
                        <option value="about-us">About Us</option>
                        <option value="contact-us">Contact Us</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="meta_title" class="form-label">Meta Title</label>
                    <input type="text" name="meta_title" id="meta_title" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="meta_description" class="form-label">Meta Description</label>
                    <textarea name="meta_description" id="meta_description" rows="4" class="form-control" required></textarea>
                </div>

                <div class="mb-3">
                    <label for="headerscript" class="form-label">Header Script</label>
                    <textarea name="headerscript" id="headerscript" rows="4" class="form-control"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Save</button>
                <a href="{{ route('seo-settings.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
@endsection
