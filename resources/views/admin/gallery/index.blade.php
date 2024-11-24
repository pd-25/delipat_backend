@extends('admin.layout.main')
@section('title', 'Dashboard | ')
@section('content')
    <h4>Gallery Images</h4>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Bootstrap Card -->
    <div class="card mt-3">
        <div class="card-header d-flex justify-content-between align-items-center">
            Gallery Images
            <a href="{{ route('gallery.create') }}" class="btn btn-primary">Upload New Image</a>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($galleryImages as $image)
                        <tr>
                            <td>{{ $image->id }}</td>
                            <td><img src="{{ asset('storage/' . $image->image_path) }}" width="100"></td>
                            <td class="align-middle">
                                <a href="{{ route('gallery.show', $image->id) }}" class="btn btn-info">View</a>
                                <a href="{{ route('gallery.edit', $image->id) }}" class="btn btn-warning">Edit</a>
                                <!-- Delete Form with SweetAlert -->
                                <form action="{{ route('gallery.destroy', $image->id) }}" method="POST" style="display:inline;" id="delete-form-{{ $image->id }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-danger" onclick="confirmDelete({{ $image->id }})">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

   
        <!-- Include SweetAlert2 -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            function confirmDelete(imageId) {
                Swal.fire({
                    title: 'Are you sure?',
                    text: 'You won\'t be able to revert this!',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Yes, delete it!',
                    cancelButtonText: 'Cancel',
                    reverseButtons: true
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Submit the form if confirmed
                        document.getElementById('delete-form-' + imageId).submit();
                    }
                });
            }
        </script>
  
@endsection
