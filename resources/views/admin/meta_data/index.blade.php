@extends('admin.layout.main')
@section('title', 'Meta Data | ')
@section('content')
    <h4>Meta Data</h4>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Bootstrap Card -->
    <div class="card mt-3">
        <div class="card-header d-flex justify-content-between align-items-center">
            Meta Data List
            <a href="{{ route('seo-settings.create') }}" class="btn btn-primary">Add New Meta Data</a>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Page Name</th>
                        <th>Meta Title</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($metaData as $meta)
                        <tr>
                            <td>{{ $meta->id }}</td>
                            <td>{{ $meta->page_name }}</td>
                            <td>{{ $meta->meta_title }}</td>
                            <td class="align-middle">
                                {{-- <a href="{{ route('seo-settings.show', $meta->id) }}" class="btn btn-info">View</a> --}}
                                <a href="{{ route('seo-settings.edit', $meta->id) }}" class="btn btn-warning">Edit</a>
                                <!-- Delete Form with SweetAlert -->
                                <form action="{{ route('seo-settings.destroy', $meta->id) }}" method="POST" style="display:inline;" id="delete-form-{{ $meta->id }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-danger" onclick="confirmDelete({{ $meta->id }})">Delete</button>
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
        function confirmDelete(metaId) {
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
                    document.getElementById('delete-form-' + metaId).submit();
                }
            });
        }
    </script>
@endsection
