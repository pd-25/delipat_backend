@extends('admin.layout.main')
@section('title', 'Dashboard | ')
@section('content')

    <!-- Bootstrap Card -->
    <div class="card mt-3">
        <div class="card-header">
            Upload New Image
        </div>
        <div class="card-body">
            <form action="{{ route('gallery.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" name="image" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary mt-4">Upload</button>
            </form>
        </div>
    </div>
@endsection
