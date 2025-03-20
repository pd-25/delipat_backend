@extends('admin.layout.main')
@section('title', 'Dashboard | Partner Logos')
@section('content')

    <h4>Partner Logos</h4>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Bootstrap Card -->
    <div class="card mt-3">
        <div class="card-header d-flex justify-content-between align-items-center">
            Partner Logos
            <a href="{{ route('partner.create') }}" class="btn btn-primary">Upload New Logo</a>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Logo</th>
                        <th>Alt Tag</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($partnerLogos as $logo)
                        <tr>
                            <td>{{ $logo->id }}</td>
                            <td><img src="{{ asset('storage/' . $logo->image) }}" width="100"></td>
                            <td>{{ $logo->alt ?? 'N/A' }}</td>
                            <td class="align-middle">
                                <a href="{{ route('partner.edit', $logo->id) }}" class="btn btn-warning">Edit</a>
                                <!-- Delete Form with SweetAlert -->
                                <form action="{{ route('partner.destroy', $logo->id) }}" method="POST" style="display:inline;" id="delete-form-{{ $logo->id }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-danger" onclick="confirmDelete({{ $logo->id }})">Delete</button>
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
        function confirmDelete(logoId) {
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
                    document.getElementById('delete-form-' + logoId).submit();
                }
            });
        }
    </script>

@endsection
