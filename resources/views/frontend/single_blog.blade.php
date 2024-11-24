@extends('frontend.layout.app')
@section('content')
<section id="back-top" class="w-100 float-left banner-con home-banner position-relative">
    <div class="banner-inner-con position-relative">
        <div class="wrapper2">
            <div class="row">
                <div class="col-lg-7 col-md-7">
                    <div class="banner-title">
                        <h1 class="text-white" data-aos="fade-up" data-aos-duration="600">{{ $blog->title }}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- SINGLE BLOG SECTION -->
<section class="w-100 float-left single-blog-con position-relative">
    <div class="wrapper">
        <div class="row">
            <div class="col-lg-8 col-md-8">
                <div class="single-blog-details" data-aos="fade-up" data-aos-duration="600">
                    <figure>
                        <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}">
                    </figure>
                    <h2 data-aos="fade-up" data-aos-duration="600">{{ $blog->title }}</h2>
                    <ul class="list-unstyled position-relative d-flex admin-con" data-aos="fade-up" data-aos-duration="600">
                        <li><i class="fas fa-user"></i> By : Admin</li>
                        <li><i class="fas fa-calendar-alt"></i> {{ $blog->created_at->format('M d, Y') }}</li>
                    </ul>
                    <p data-aos="fade-up" data-aos-duration="600">{{ $blog->description }}</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="single-generic-box" data-aos="fade-up" data-aos-duration="600">
                    <h3>Search News</h3>
                    <div class="search-input">
                        <input type="text" placeholder="Type Keywords">
                    </div>
                </div>
                <div class="single-generic-box" data-aos="fade-up" data-aos-duration="600">
                    <h3>Tags</h3>
                    <div class="tag-link">
    <ul class="list-unstyled mb-0">
        @foreach($blog->tags as $tag)
            <li><a href="#">{{ trim($tag) }}</a></li>
        @endforeach
    </ul>
</div>

                </div>
                <div class="single-generic-box mb-0" data-aos="fade-up" data-aos-duration="600">
                    <h3>Popular Posts</h3>
                    <div class="recant-post">
                        <ul class="list-unstyled mb-0">
                            @foreach($relatedBlogs as $related)
                                <li>
                                    <div class="recant-post-box position-relative">
                                        <figure class="mb-0">
                                            <img src="{{ asset('storage/' . $related->image) }}" alt="{{ $related->title }}">
                                        </figure>
                                        <div class="recant-post-content">
                                            <a href="{{ route('blog.show', $related->slug) }}">
                                                <h4>{{ $related->title }}</h4>
                                            </a>
                                            <div class="recant-calander">
                                                <i class="fas fa-calendar-alt"></i> {{ $related->created_at->format('M d, Y') }}
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
