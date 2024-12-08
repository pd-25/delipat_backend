@extends('frontend.layout.app')
@section('content')

<!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Fancybox CSS -->
<link href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" rel="stylesheet">

<!-- BANNER SECTION -->
<section id="back-top" class="w-100 float-left banner-con common-banner home-banner position-relative">
    <div class="banner-inner-con position-relative">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-7">
                    <div class="banner-title">
                        <h1 class="main-header-h2">Gallery</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- GALLERY SECTION -->
<section class="w-100 float-left gallery-project gallery-banner">
    <div class="wrapper">
        <div class="gellery-page-project position-relative">
            <div class="project-box d-flex flex-wrap">
                @foreach($gallery as $image)
                    <div class="project-item position-relative m-2" style="width: 250px;">
                        <figure class="mb-0">
                            <a href="{{ asset('storage/' . $image->image_path) }}" 
                               data-fancybox="gallery" 
                               data-caption="{{ $image->alt_text ?? 'Gallery Image' }}">
                                <img src="{{ asset('storage/' . $image->image_path) }}" 
                                     alt="{{ $image->alt_text ?? 'Gallery Image' }}" 
                                     class="img-fluid rounded shadow">
                            </a>
                        </figure>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<!-- Fancybox JS -->
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js"></script>

<!-- Fancybox Initialization -->
<script>
    $(document).ready(function () {
        // Ensure Fancybox is defined
        if (typeof Fancybox !== 'undefined') {
            Fancybox.bind("[data-fancybox='gallery']", {
                Toolbar: true,  // Enable toolbar with navigation
                Thumbs: true,   // Show thumbnails
                loop: true,     // Enable infinite loop navigation
                infinite: true, // Enable infinite scrolling
            });
        } else {
            console.error('Fancybox is not defined. Please check your script inclusion.');
        }
    });
</script>

@endsection
