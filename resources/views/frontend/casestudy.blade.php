@extends('frontend.layout.app')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
<!-- BANNER SECTION -->
<section id="back-top" class="w-100 float-left banner-con common-banner position-relative">
    <div class="banner-inner-con position-relative">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-7">
                    <div class="banner-title">
                        <h1 class="main-header-h2" data-aos="fade-up" data-aos-duration="600">Our Case Studies</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- BANNER SECTION -->

<!-- BLOG SECTION -->
<section class="blog-posts blogpage-section w-100 float-left">
    <div class="container">
        <div class="row wow fadeInUp">
            <div id="blog" class="col-xl-12">
                <div class="row">
                    @foreach($blogs as $blog)
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-aos="fade-up" data-aos-duration="600">
                            <div class="blog-box">
                                <figure class="blog-image mb-0">
                                    <a href="{{ route('blog.show', $blog->slug) }}">
                                        <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}" class="img-fluid">
                                    </a>
                                </figure>
                                <div class="lower-portion">
                                    <i class="fa-solid fa-user"></i>
                                    <span class="text-size-14 text-mr">By : Admin</span>
                                    <i class="tag-mb fa-solid fa-tag"></i>
                                    <span class="text-size-14"></span>
                                    <h5>
                                        <a href="{{ route('case-study.show', $blog->slug) }}" style="color: #023244;">{{ $blog->title }}</a>
                                    </h5>
                                    <p>{{ Str::limit($blog->short_description, 100) }}</p>
                                </div>
                                <div class="button-portion">
                                    <div class="date">
                                        <i class="mb-0 calendar-ml fa-solid fa-calendar-days"></i>
                                        <span class="mb-0 text-size-14">{{ $blog->created_at->format('M d, Y') }}</span>
                                    </div>
                                    <div class="button">
                                        <a class="mb-0 read_more text-decoration-none" href="{{ route('case-study.show', $blog->slug) }}">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="pagination-wrapper mt-4">
                    {{ $blogs->links('pagination::bootstrap-4') }} <!-- Pagination links -->
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
