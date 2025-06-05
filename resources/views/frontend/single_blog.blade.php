@extends('frontend.layout.app')

@section('content')

<!-- BANNER SECTION -->
<section id="back-top" class="w-100 float-left banner-con common-banner position-relative">
    <div class="banner-inner-con position-relative">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-7">
                    <div class="banner-title">
                        <h1 class="main-header-h2 text-white" data-aos="fade-up" data-aos-duration="600">
                            {{ $blog->title }}
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SINGLE BLOG SECTION -->
<section class="w-100 float-left single-blog-con position-relative py-5">
    <div class="container">
        <div class="row">
            <!-- Blog Content -->
            <div class="col-lg-8 col-md-8">
                <div class="single-blog-details" data-aos="fade-up" data-aos-duration="600">
                    @if($blog->image)
                    <figure>
                        <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}" class="img-fluid w-100">
                    </figure>
                    @endif

                    <h2 class="mt-3">{{ $blog->title }}</h2>

                    <ul class="list-unstyled d-flex gap-3 admin-con my-3">
                        <li><i class="fas fa-user"></i> By: Admin</li>
                        <li><i class="fas fa-calendar-alt"></i> {{ $blog->created_at->format('M d, Y') }}</li>
                    </ul>

                    <div class="blog-description">
                        {!! $blog->description !!}
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4 col-md-4">
                @if($relatedBlogs->count())
                <div class="single-generic-box mb-4" data-aos="fade-up" data-aos-duration="600">
                    <h3>Popular Posts</h3>
                    <div class="recant-post">
                        <ul class="list-unstyled mb-0">
                            @foreach($relatedBlogs as $related)
                            <li class="mb-3">
                                <div class="recant-post-box d-flex">
                                    <figure class="mb-0 me-3" style="width: 80px;">
                                        <img src="{{ asset('storage/' . $related->image) }}" alt="{{ $related->title }}" class="img-fluid">
                                    </figure>
                                    <div class="recant-post-content">
                                        <a href="{{ route('blog.show', $related->slug) }}">
                                            <h4 class="mb-1">{{ $related->title }}</h4>
                                        </a>
                                        <div class="recant-calander text-muted small">
                                            <i class="fas fa-calendar-alt"></i> {{ $related->created_at->format('M d, Y') }}
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</section>

<!-- FAQ SECTION -->
@if($blog->faqs && count($blog->faqs))
<section class="w-100 float-left faq-box video-gradient-sec py-5">
    <div class="container">
        <div class="blog-title text-center mb-4" data-aos="fade-up" data-aos-duration="600">
            <h2>Frequently Asked <span class="color-01d0cc">Questions</span></h2>
        </div>
        <div class="row" data-aos="fade-up" data-aos-duration="600">
            <div class="col-12">
                <div class="accordion-section">
                    <div class="accordion" id="faqAccordion">
                        @foreach($blog->faqs as $index => $faq)
                        <div class="accordion-card mb-3">
                            <div class="accordion-header" id="heading{{ $index }}">
                                <a href="#" class="accordion-btn collapsed d-block" data-toggle="collapse"
                                    data-target="#collapse{{ $index }}" aria-expanded="false"
                                    aria-controls="collapse{{ $index }}">
                                    <h5 class="mb-0">{{ $faq->question }}</h5>
                                </a>
                            </div>
                            <div id="collapse{{ $index }}" class="collapse"
                                aria-labelledby="heading{{ $index }}" data-parent="#faqAccordion">
                                <div class="accordion-body pt-2">
                                    <p class="mb-0">{{ $faq->answer }}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif

@endsection
