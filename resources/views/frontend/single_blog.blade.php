@extends('frontend.layout.app')
@section('content')

<!-- BANNER SECTION -->
<section id="back-top" class="w-100 float-left banner-con common-banner position-relative">
    <div class="banner-inner-con position-relative">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-7">
                    <div class="banner-title">
                        <!-- <h1 class="text-white" data-aos="fade-up" data-aos-duration="600">{{ $blog->title }}</h1> -->
                        <h1 class="main-header-h2" data-aos="fade-up" data-aos-duration="600">{{ $blog->title }}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- BANNER SECTION -->
<!-- SINGLE BLOG SECTION -->
<section class="w-100 float-left single-blog-con position-relative">
    <div class="wrapper">
        <div class="row">
            <div class="col-lg-8 col-md-8">
                <div class="single-blog-details" data-aos="fade-up" data-aos-duration="600">
                    <figure>
                        <img src="{{ asset('storage/' . $blog->image) }}" style="width:100%" alt="{{ $blog->title }}">
                    </figure>
                    <h2 data-aos="fade-up" data-aos-duration="600">{{ $blog->title }}</h2>
                    <ul class="list-unstyled position-relative d-flex admin-con" data-aos="fade-up"
                        data-aos-duration="600">
                        <li><i class="fas fa-user"></i> By : Admin</li>
                        <li><i class="fas fa-calendar-alt"></i> {{ $blog->created_at->format('M d, Y') }}</li>
                    </ul>
                    <div data-aos="fade-up" data-aos-duration="600">{!! $blog->description !!}</div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                {{-- <div class="single-generic-box" data-aos="fade-up" data-aos-duration="600">
                    <h3>Search News</h3>
                    <div class="search-input">
                        <input type="text" placeholder="Type Keywords">
                    </div>
                </div> --}}
                {{-- <div class="single-generic-box" data-aos="fade-up" data-aos-duration="600">
                    <h3>Tags</h3>
                    <div class="tag-link">
                        <ul class="list-unstyled mb-0">
                            @foreach($blog->tags as $tag)
                            <li><a href="#">{{ trim($tag) }}</a></li>
                            @endforeach
                        </ul>
                    </div>

                </div> --}}
                <div class="single-generic-box mb-0" data-aos="fade-up" data-aos-duration="600">
                    <h3>Popular Posts</h3>
                    <div class="recant-post">
                        <ul class="list-unstyled mb-0">
                            @foreach($relatedBlogs as $related)
                            <li>
                                <div class="recant-post-box position-relative">
                                    <figure class="mb-0">
                                        <img src="{{ asset('storage/' . $related->image) }}"
                                            alt="{{ $related->title }}">
                                    </figure>
                                    <div class="recant-post-content">
                                        <a href="{{ route('blog.show', $related->slug) }}">
                                            <h4>{{ $related->title }}</h4>
                                        </a>
                                        <div class="recant-calander">
                                            <i class="fas fa-calendar-alt"></i> {{ $related->created_at->format('M d,
                                            Y') }}
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
<section class="w-100 float-left faq-box  video-gradient-sec">
    <div class="container">
        <div class="blog-title text-center position-relative" data-aos="fade-up" data-aos-duration="600">
            <h2 class="aos-init aos-animate">Frequently Asked
                <span class="color-01d0cc">Questions</span>
            </h2>
        </div>
        <div class="aos-init aos-animate" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="accordion-section">
                        <div class="accordion" id="faqAccordion">
                            @foreach($blog->faqs as $faq)
                            <div class="accordion-card">
                                <div class="accordion-header" id="heading{{ $loop->index }}">
                                    <a href="#" class="accordion-btn collapsed" data-toggle="collapse"
                                        data-target="#collapse{{ $loop->index }}" aria-expanded="false"
                                        aria-controls="collapse{{ $loop->index }}">
                                        <h5>{{ $faq->question }}</h5>
                                    </a>
                                </div>
                                <div id="collapse{{ $loop->index }}" class="collapse"
                                    aria-labelledby="heading{{ $loop->index }}" data-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p>{{ $faq->answer }}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection