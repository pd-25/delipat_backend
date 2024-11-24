@extends('admin.layout.main')

@section('title', 'Dashboard | Create Site Setting')

@section('content')
    <h3>Create Site Setting</h3>
    
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('site-settings.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="logo1" class="form-label">Header Logo</label>
            <input type="file" class="form-control" id="logo1" name="logo1">
        </div>
        <div class="mb-3">
            <label for="logo2" class="form-label">Footer Logo </label>
            <input type="file" class="form-control" id="logo2" name="logo2">
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter Phone Number" value="{{ old('phone') }}">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email Address" value="{{ old('email') }}">
        </div>
        <div class="mb-3">
            <label for="facebooklink" class="form-label">Facebook Link</label>
            <input type="url" class="form-control" id="facebooklink" name="facebooklink" placeholder="Enter Facebook Link" value="{{ old('facebooklink') }}">
        </div>
        <div class="mb-3">
            <label for="twitterlink" class="form-label">Twitter Link</label>
            <input type="url" class="form-control" id="twitterlink" name="twitterlink" placeholder="Enter Twitter Link" value="{{ old('twitterlink') }}">
        </div>
        <div class="mb-3">
            <label for="instagramlink" class="form-label">Instagram Link</label>
            <input type="url" class="form-control" id="instagramlink" name="instagramlink" placeholder="Enter Instagram Link" value="{{ old('instagramlink') }}">
        </div>
        <div class="mb-3">
            <label for="youtubelink" class="form-label">YouTube Link</label>
            <input type="url" class="form-control" id="youtubelink" name="youtubelink" placeholder="Enter YouTube Link" value="{{ old('youtubelink') }}">
        </div>
        <div class="mb-3">
            <label for="linkdinlink" class="form-label">LinkedIn Link</label>
            <input type="url" class="form-control" id="linkdinlink" name="linkdinlink" placeholder="Enter LinkedIn Link" value="{{ old('linkdinlink') }}">
        </div>
        <div class="mb-3" style="background: orange; color: white; padding: 10px;">
            <strong> Seo Settings </strong>
        </div> 
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title" value="{{ old('title') }}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3" placeholder="Enter Description">{{ old('description') }}</textarea>
        </div>
        <div class="mb-3">
            <label for="header_script" class="form-label">Header Script</label>
            <textarea class="form-control" id="header_script" name="header_script" rows="3" placeholder="Enter Header Script">{{ old('header_script') }}</textarea>
        </div>
        <div class="mb-3">
            <label for="footer_script" class="form-label">Footer Script</label>
            <textarea class="form-control" id="footer_script" name="footer_script" rows="3" placeholder="Enter Footer Script">{{ old('footer_script') }}</textarea>
        </div>
        <div class="mb-3">
            <label for="body_script" class="form-label">Body Script</label>
            <textarea class="form-control" id="body_script" name="body_script" rows="3" placeholder="Enter Body Script">{{ old('body_script') }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection
