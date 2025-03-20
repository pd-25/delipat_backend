@extends('admin.layout.main')
@section('title', 'Dashboard | Upload Partner Logo')
@section('content')

    <h4>Upload Partner Logo</h4>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Bootstrap Card -->
    <div class="card mt-3">
        <div class="card-header">Upload New Partner Logo</div>
        <div class="card-body">
            <form action="{{ route('partner.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="image" class="form-label">Partner Logo (Image)</label>
                    <input type="file" class="form-control" id="image" name="image" required>
                </div>
                <div class="mb-3">
                    <label for="alt" class="form-label">Alt Tag (Optional)</label>
                    <input type="text" class="form-control" id="alt" name="alt" placeholder="Enter alt text">
                </div>
                <button type="submit" class="btn btn-success">Upload Logo</button>
                <a href="{{ route('partner.index') }}" class="btn btn-secondary">Back</a>
            </form>
        </div>
    </div>

@endsection
