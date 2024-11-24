@extends('admin.layout.main')
@section('title', 'Dashboard | ')
@section('content')
<div class="container">
    <h3>Edit Site Setting</h3>
    <form action="{{ route('site-settings.update', $siteSetting->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="logo1" class="form-label">Header Logo</label>
            <input type="file" class="form-control" id="logo1" name="logo1">
            @if ($siteSetting->logo1)
                <img src="{{ asset('storage/' . $siteSetting->logo1) }}" alt="Logo 1" width="100">
            @endif
        </div>
        
        <div class="mb-3">
            <label for="logo2" class="form-label">Footer Logo</label>
            <input type="file" class="form-control" id="logo2" name="logo2">
            @if ($siteSetting->logo2)
                <img src="{{ asset('storage/' . $siteSetting->logo2) }}" alt="Logo 2" width="100">
            @endif
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="text" class="form-control" id="phone" name="phone" value="{{ $siteSetting->phone }}" placeholder="Enter Phone Number">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $siteSetting->email }}" placeholder="Enter Email Address">
        </div>
        <div class="mb-3">
            <label for="facebooklink" class="form-label">Facebook Link</label>
            <input type="url" class="form-control" id="facebooklink" name="facebooklink" value="{{ $siteSetting->facebooklink }}" placeholder="Enter Facebook Link">
        </div>
        <div class="mb-3">
            <label for="twitterlink" class="form-label">Twitter Link</label>
            <input type="url" class="form-control" id="twitterlink" name="twitterlink" value="{{ $siteSetting->twitterlink }}" placeholder="Enter Twitter Link">
        </div>
        <div class="mb-3">
            <label for="instagramlink" class="form-label">Instagram Link</label>
            <input type="url" class="form-control" id="instagramlink" name="instagramlink" value="{{ $siteSetting->instagramlink }}" placeholder="Enter Instagram Link">
        </div>
        <div class="mb-3">
            <label for="youtubelink" class="form-label">YouTube Link</label>
            <input type="url" class="form-control" id="youtubelink" name="youtubelink" value="{{ $siteSetting->youtubelink }}" placeholder="Enter YouTube Link">
        </div>
        <div class="mb-3">
            <label for="linkdinlink" class="form-label">LinkedIn Link</label>
            <input type="url" class="form-control" id="linkdinlink" name="linkdinlink" value="{{ $siteSetting->linkdinlink }}" placeholder="Enter LinkedIn Link">
        </div>
        <div class="mb-3" style="background: orange; color: white; padding: 10px;">
            <strong> Seo Settings </strong>
        </div> 
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $siteSetting->title }}" placeholder="Enter Title">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3" placeholder="Enter Description">{{ $siteSetting->description }}</textarea>
        </div>
        <div class="mb-3">
            <label for="header_script" class="form-label">Header Script</label>
            <textarea class="form-control" id="header_script" name="header_script" rows="3" placeholder="Enter Header Script">{{ $siteSetting->header_script }}</textarea>
        </div>
        <div class="mb-3">
            <label for="footer_script" class="form-label">Footer Script</label>
            <textarea class="form-control" id="footer_script" name="footer_script" rows="3" placeholder="Enter Footer Script">{{ $siteSetting->footer_script }}</textarea>
        </div>
        <div class="mb-3">
            <label for="body_script" class="form-label">Body Script</label>
            <textarea class="form-control" id="body_script" name="body_script" rows="3" placeholder="Enter Body Script">{{ $siteSetting->body_script }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
