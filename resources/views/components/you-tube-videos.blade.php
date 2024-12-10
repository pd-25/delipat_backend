@if(!empty($videos))
<section class="w-100 float-left user-con position-relative">
    <div class="plan-box position-relative">
        <div class="container">
            <div class="blog-title text-center position-relative" data-aos="fade-up" data-aos-duration="600">
                <h2 class="main-header-h2" data-aos="fade-up" data-aos-duration="600">Videos</h2>
            </div>
           
            <div class="owl-carousel owl-theme" id="case-study-slider">
                @foreach($videos as $video)
                    <div class="item">
                        <div class="card case-study-card" data-aos="fade-up" data-aos-duration="600">
                            <div class="case_study_inner_card">
                                <iframe 
                                    src="https://www.youtube.com/embed/{{ $video['id']['videoId'] }}" 
                                    allowfullscreen>
                                </iframe>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endif
