@extends('admin.layout.main')
@section('title', 'Dashboard | ')
@section('content')
    

    <!-- Bootstrap Card -->
    <div class="card mt-3">
        <div class="card-header">
            Edit Image
        </div>
        <div class="card-body">
            <form action="{{ route('gallery.update', $galleryImage->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" name="image" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary mt-4">Update</button>
            </form>
        </div>
    </div>
@endsection
