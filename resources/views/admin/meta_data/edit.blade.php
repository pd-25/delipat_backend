@extends('admin.layout.main')
@section('title', 'Edit Meta Data | ')
@section('content')
    <h4>Edit Meta Data</h4>

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
            Edit Meta Data
        </div>
        <div class="card-body">
            <form action="{{ route('seo-settings.update', $metaData->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="page_name" class="form-label">Page Name</label>
                    <select name="page_name" id="page_name" class="form-control" required>
                        <option value="">Select Page</option>
                        <option value="home" {{ $metaData->page_name == 'home' ? 'selected' : '' }}>Home</option>
                        <option value="gallery" {{ $metaData->page_name == 'gallery' ? 'selected' : '' }}>Gallery</option>
                        <option value="service" {{ $metaData->page_name == 'service' ? 'selected' : '' }}>Service</option>
                        <option value="service" {{ $metaData->page_name == 'industry' ? 'selected' : '' }}>Industry</option>
                        <option value="case-study" {{ $metaData->page_name == 'case-study' ? 'selected' : '' }}>Case Study</option>
                        <option value="blog" {{ $metaData->page_name == 'blog' ? 'selected' : '' }}>Blog</option> 
                        <option value="about-us" {{ $metaData->page_name == 'about-us' ? 'selected' : '' }}>About Us</option>
                        <option value="contact-us" {{ $metaData->page_name == 'contact-us' ? 'selected' : '' }}>Contact Us</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="meta_title" class="form-label">Meta Title</label>
                    <input type="text" name="meta_title" id="meta_title" class="form-control" value="{{ $metaData->meta_title }}" required>
                </div>

                <div class="mb-3">
                    <label for="meta_description" class="form-label">Meta Description</label>
                    <textarea name="meta_description" id="meta_description" rows="4" class="form-control" required>{{ $metaData->meta_description }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="headerscript" class="form-label">Header Script</label>
                    <textarea name="headerscript" id="headerscript" rows="4" class="form-control">{{ $metaData->headerscript }}</textarea>
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('seo-settings.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
@endsection
