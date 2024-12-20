@if(count($testimonials) > 0)

   
    <section class="w-100 float-left user-con our-approach-sec">
        <div class="container">
            <div class="team-title text-center mb-4">
                <h2 class="main-header-h2" data-aos="fade-up" data-aos-duration="600">
                    Testimonials
                </h2>
            </div>
            <div class="owl-carousel owl-theme" id="client-slider" data-aos="fade-up" data-aos-duration="600">
                @foreach ($testimonials as $testimonial)
                    <div class="item">
                        <div class="client-review-box">
                            <div class="client-review-content position-relative">
                                <p>{{ $testimonial->comment }}</p>
                                <figure class="mb-0">
                                    <img src="{{ asset('frontend/assets/images/star-img.png') }}" alt="star-img">
                                </figure>
                            </div>
                            <div class="client-info bvvc">
                                <figure class="mb-0">
                                    <img src="{{ asset('storage/' . $testimonial->image) }}" alt="client-img">
                                </figure>
                                <div class="client-name">
                                    <h4>{{ $testimonial->name }}</h4>
                                    @if (!empty($testimonial->designation))
                                        <span class="d-block">{{ $testimonial->designation }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endif
