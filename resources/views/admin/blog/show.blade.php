@extends('admin.layout.main')
@section('title', 'Dashboard | ')
@section('content')
<div class="container">
    <h1>{{ $blog->title }}</h1>
    <p><strong>Slug:</strong> {{ $blog->slug }}</p>
    <p><strong>Short Description:</strong> {{ $blog->short_description }}</p>
    <p>{!! nl2br(e($blog->description)) !!}</p>
    <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}" class="img-fluid mb-3">

    <h3>FAQs</h3>
    @foreach ($blog->faqs as $faq)
        <div class="faq">
            <h5>Q: {{ $faq->question }}</h5>
            <p>A: {{ $faq->answer }}</p>
        </div>
    @endforeach

    <a href="{{ route('blogs.index') }}" class="btn btn-secondary mt-3">Back to Blogs</a>
</div>
@endsection
