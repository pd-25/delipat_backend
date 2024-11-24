@extends('admin.layout.main')
@section('title', 'Dashboard | ')
@section('content')
    

    <!-- Bootstrap Card -->
    <div class="card mt-3">
        <div class="card-header">
            Image Details
        </div>
        <div class="card-body text-center">
            <img src="{{ asset('storage/' . $galleryImage->image_path) }}" width="300" class="img-fluid">
            <a href="{{ route('gallery.index') }}" class="btn btn-primary mt-3">Back to Gallery</a>
        </div>
    </div>
@endsection
