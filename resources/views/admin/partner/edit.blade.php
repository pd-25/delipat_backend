@extends('admin.layout.main')
@section('title', 'Dashboard | Edit Partner Logo')
@section('content')

    <h4>Edit Partner Logo</h4>

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
        <div class="card-header">Update Partner Logo</div>
        <div class="card-body">
            <form action="{{ route('partner.update', $partnerLogo->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="current_image" class="form-label">Current Logo</label><br>
                    <img src="{{ asset('storage/' . $partnerLogo->image) }}" width="150">
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Upload New Logo (Optional)</label>
                    <input type="file" class="form-control" id="image" name="image">
                </div>

                <div class="mb-3">
                    <label for="alt" class="form-label">Alt Tag</label>
                    <input type="text" class="form-control" id="alt" name="alt" value="{{ $partnerLogo->alt }}" placeholder="Enter alt text">
                </div>

                <button type="submit" class="btn btn-success">Update Logo</button>
                <a href="{{ route('partner.index') }}" class="btn btn-secondary">Back</a>
            </form>
        </div>
    </div>

@endsection
