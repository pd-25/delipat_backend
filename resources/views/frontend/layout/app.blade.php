@php
    $siteSettings = App\Models\SiteSetting::first();

    use App\Models\Blog;
    $caseStudies = Blog::where('type','case-studies')->latest()->get();
@endphp
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{asset('frontend/assets/images/favicon.png')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <title>{{$pagemeta->meta_title ?? $siteSettings->title ?? 'Delipat'}}</title>
    <meta name="description" content="{{$pagemeta->meta_description ?? $siteSettings->description ?? 'Delipat'}}">
    {!! $pagemeta->headerscript ?? $siteSettings->header_script ?? '' !!}
    <link rel="stylesheet" href="{{asset('frontend/assets/css/unpkg.com_blaze-slider@1.9.3_dist_blaze.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/aos.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/superclasses.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/custom.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/custom-style.css')}}">

    <link rel="stylesheet" href="{{asset('frontend/assets/css/mobile.css')}}">
</head>

<body>
    {!! $siteSettings->body_script ?? '' !!}
    <!-- <div class="loader-mask">
        <div class="loader">
            <div></div>
            <div></div>
        </div>
    </div> -->
    <!-- TOP BAR CON -->
    <div class="sticky-header">
        <div class="w-100 float-left top-bar-con lower-nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div
                            class="socisl-con d-flex align-items-center justify-content-md-start justify-content-center h-100">
                            <span class="text-white d-inline-block text-uppercase">Follow Us:</span>
                            <ul class="list-unstyled mb-0 d-flex">
                                @if(!empty($siteSettings->facebooklink))
                                    <li><a href="{{$siteSettings->facebooklink}}"><i
                                                class="fab fa-facebook-f d-flex align-items-center justify-content-center"></i></a>
                                    </li>
                                @endif
                                @if(!empty($siteSettings->twitterlink))
                                    <li><a href="{{$siteSettings->twitterlink}}"><i
                                                class="fab fa-twitter d-flex align-items-center justify-content-center"></i></a>
                                    </li>
                                @endif
                                @if(!empty($siteSettings->linkdinlink))
                                    <li><a href="{{$siteSettings->linkdinlink}}"><i
                                                class="fab fa-linkedin-in d-flex align-items-center justify-content-center"></i></a>
                                    </li>
                                @endif
                                @if(!empty($siteSettings->instagramlink))

                                    <li><a href="{{$siteSettings->instagramlink}}"><i
                                                class="fab fa-instagram d-flex align-items-center justify-content-center"></i></a>
                                    </li>
                                @endif
                                @if(!empty($siteSettings->youtubelink))
                                    <li><a href="{{$siteSettings->youtubelink}}"><i
                                                class="fab fa-youtube d-flex align-items-center justify-content-center"></i></a>
                                    </li>
                                @endif

                            </ul>
                        </div>
                    </div>
                    <!-- <div class="col-lg-3 col-md-none d-md-none d-lg-block">
                    <div class="top-nav-image-box">
                        <img src="{{asset('frontend/assets/img/ridge-partner-desktop.jpeg')}}" class="top-nav-image" loading="lazy" alt="salesforce-ridge-partner">
                    </div>
                </div> -->
                    <div
                        class="col-lg-6 col-md-6 col-12 d-flex justify-content-md-end align-items-center justify-content-center">
                        <div class="client-info">
                            <ul class="list-unstyled mb-0 d-flex align-items-center">
                                @if(!empty($siteSettings->phone))
                                    <li>
                                        <a style="color: white;" href="tel:{{$siteSettings->phone}}">
                                            <!-- <img src="{{asset('frontend/assets/images/phone-icon.png')}}" alt="phone-icon"> -->
                                            <img src="{{asset('frontend/assets/img/whatsapp.png')}}"
                                                style="width: 20px; padding: 0px; margin: -2px 0px 0px 0px;"> | <img
                                                src="{{asset('frontend/assets/img/viber.png')}}"
                                                style="width: 16px; padding: 0px; margin: -3px 0px 0px 0px;">
                                            {{$siteSettings->phone}}
                                        </a>
                                    </li>
                                @endif

                                {{-- @if(!empty($siteSettings->email))
                                <li><a style="color: white;" href="mailto:{{$siteSettings->email}}"> <i
                                            class="fa fa-envelope" aria-hidden="true"></i>
                                        {{$siteSettings->email}}</a></li>
                                @endif --}}

                                <div class="generic-btn">
                                    <a class="book-bt" href="https://calendly.com/expertsalesforce/30min/"
                                        target="_blank">Book a Meeting
                                    </a>
                                </div>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- container -->
            </div>
        </div>
        <!-- TOP BAR CON -->
        <!-- HEADER -->

    </div>
    <header class="w-100 float-left header-con">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark px-0  dropdown">
                <a class="navbar-brand d-lg-none" href="{{route('index')}}">
                    <img src="{{asset('storage/' . $siteSettings->logo1)}}" alt="mobile-logo">
                </a>
                <div class="flex-div">
                    <div class="top-nav-image-box-mobile">
                        <img src="{{asset('frontend/assets/img/ridge-partner-mobile.jpeg')}}"
                            class="top-nav-image-mobile" alt="salesforce-ridge-partner">
                    </div>
                    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                        data-target="#navbarToggle" aria-controls="navbarToggle" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        <span class="navbar-toggler-icon"></span>
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>


                <!--  Use flexbox utility classes to change how the child elements are justified  -->
                <div class="collapse navbar-collapse justify-content-between" id="navbarToggle">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link p-0 {{ Route::is('index') ? 'active' : '' }}"
                                href="{{route('index')}}">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link p-0 {{ Route::is('about') ? 'active' : '' }}"
                                href="{{route('about')}}">ABOUT US </a>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link p-0 {{ Route::is('service') ? 'active' : '' }}"
                                href="{{route('service')}}">services</a>
                            <div class="megamenu">
                                <div class="container">
                                    <div class="row justify-content-center align-items-center">
                                        <div class="col-lg-4 col-sm-12">
                                            <div class="megamenu-items">
                                                <h3 class="heading">Salesforce Services</h3>
                                                <ul class="megamenuitems-ul">
                                                    <li class="megamenuitems-li"><a class="megamenu-link" href="#">Link
                                                            1</a></li>
                                                    <li class="megamenuitems-li"><a class="megamenu-link" href="#">Link
                                                            2</a></li>
                                                    <li class="megamenuitems-li"><a class="megamenu-link" href="#">Link
                                                            3</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-12">
                                            <div class="megamenu-items">
                                                <h3 class="heading">Hubspot Services</h3>
                                                <ul>
                                                    <li class="megamenuitems-li"><a class="megamenu-link" href="#">Link
                                                            1</a></li>
                                                    <li class="megamenuitems-li"><a class="megamenu-link" href="#">Link
                                                            2</a></li>
                                                    <li class="megamenuitems-li"><a class="megamenu-link" href="#">Link
                                                            3</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-12">
                                            <div class="megamenu-items">
                                                <h3 class="heading">Others Services</h3>
                                                <ul class="megamenuitems-ul">
                                                    <li class="megamenuitems-li"><a class="megamenu-link" href="#">Link
                                                            1</a></li>
                                                    <li class="megamenuitems-li"><a class="megamenu-link" href="#">Link
                                                            2</a></li>
                                                    <li class="megamenuitems-li"><a class="megamenu-link" href="#">Link
                                                            3</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li> --}}

                        {{-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle {{ Route::is('service') ? 'active' : '' }}"
                                id="navbarDropdown" role="button" data-toggle="dropdown" href="{{route('service')}}"
                                aria-haspopup="true" aria-expanded="false">
                                Services
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <div class="row justify-content-center align-items-center">
                                    <div class="col-lg-4 col-sm-12">
                                        <div class="megamenu-items">
                                            <h3 class="heading">Salesforce Services</h3>
                                            <ul class="megamenuitems-ul">
                                                <li class="megamenuitems-li"><a class="megamenu-link" href="#">Link
                                                        1</a></li>
                                                <li class="megamenuitems-li"><a class="megamenu-link" href="#">Link
                                                        2</a></li>
                                                <li class="megamenuitems-li"><a class="megamenu-link" href="#">Link
                                                        3</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-12">
                                        <div class="megamenu-items">
                                            <h3 class="heading">Hubspot Services</h3>
                                            <ul>
                                                <li class="megamenuitems-li"><a class="megamenu-link" href="#">Link
                                                        1</a></li>
                                                <li class="megamenuitems-li"><a class="megamenu-link" href="#">Link
                                                        2</a></li>
                                                <li class="megamenuitems-li"><a class="megamenu-link" href="#">Link
                                                        3</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-12">
                                        <div class="megamenu-items">
                                            <h3 class="heading">Others Services</h3>
                                            <ul class="megamenuitems-ul">
                                                <li class="megamenuitems-li"><a class="megamenu-link" href="#">Link
                                                        1</a></li>
                                                <li class="megamenuitems-li"><a class="megamenu-link" href="#">Link
                                                        2</a></li>
                                                <li class="megamenuitems-li"><a class="megamenu-link" href="#">Link
                                                        3</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li> --}}
                        {{-- <li class="nav-item">
                            <a class="nav-link p-0 {{ Route::is('service') ? 'active' : '' }}"
                                href="{{route('service')}}">Services</a>
                        </li> --}}
                        <li class="nav-item">
                            <a class="nav-link p-0 {{ request()->is('service/salesforce-consulting-Implementation') ? 'active' : '' }}"
                                href="{{ url('/service/salesforce-consulting-Implementation') }}">Salesforce</a>

                        </li>

                    </ul>
                    <!--   Show this only lg screens and up   -->
                    <a class="navbar-brand d-none d-lg-block" href="{{route('index')}}">
                        <figure class="mb-0">
                            <img src="{{asset('storage/' . $siteSettings->logo1)}}" alt="delipat"
                                style="max-width:190px">
                        </figure>
                    </a>
                    <ul class="navbar-nav">

                        {{-- <li class="nav-item dropdown"> --}}
                            {{--
                        <li class="nav-item">
                            <a class="nav-link p-0 {{ Route::is('gallery') ? 'active' : '' }}"
                                href="{{route('gallery')}}">Gallery</a>
                        </li> --}}
                        <li class="nav-item sdey-dropdown">
                            <div class="d-flex">
                                <a href="{{ route('case-study') }}" class="nav-link p-0 sdey-link">
                                    Case Studies
                                </a>
                                <span class="sdey-arrow">&#9662;</span>
                            </div>


                            <ul class="sdey-menu">
                                  @foreach($caseStudies as $caseStudy)
                                    <li><a href="{{ route('case-study.show', $caseStudy->slug) }}">{{ $caseStudy->title }}</a></li>
                                  @endforeach
                            </ul>
                        </li>


                      

                       
                        {{-- <li class="nav-item">
                            <a class="nav-link p-0 {{ request()->is('service/hubspot-consulting-optimization') ? 'active' : '' }}"
                                href="{{ url('/service/hubspot-consulting-optimization') }}">HubSpot</a>

                        </li> --}}
                        <li class="nav-item">
                            <a class="nav-link p-0 {{ Route::is('industry') ? 'active' : '' }}"
                                href="{{route('industry')}}">industry</a>
                        </li>


                        {{-- <li class="nav-item">
                            <a class="nav-link p-0 {{ Route::is('blog') ? 'active' : '' }}"
                                href="{{route('blog')}}">Blog</a>

                        </li> --}}
                        <li class="nav-item">
                            <a class="nav-link p-0 {{ Route::is('contactus') ? 'active' : '' }}"
                                href="{{route('contactus')}}">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    @yield('content')

    <!-- FOOTER SECTION -->
    <footer class="w-100 float-left footer-con position-relative experienced_certified_area footer-area">
        <div class="wrapper">
            <div class="footer-box position-relative">
                <div class="site-map">
                    <h4>About Us</h4>
                    <p class="mb-0">
                        Delipat specializes in Salesforce and HubSpot consulting, offering tailored solutions to
                        optimize CRM & CMS strategies, streamline workflows, and drive business growth through expert
                        guidance and support.
                    </p>
                </div>
                <div class="site-map">
                    <h4>Quick Links</h4>
                    <ul class="list-unstyled mb-0">
                        <li><a href="{{route('index')}}">Home</a></li>
                        <!-- <li><a href="{{route('about')}}">About Us</a></li> -->
                        <li><a href="{{route('service')}}">Services</a></li>
                        {{-- <li><a href="{{route('gallery')}}">Gallery</a></li> --}}
                        <li><a href="{{route('blog')}}">Blog</a></li>
                        <li><a href="{{route('contactus')}}">Contact Us</a></li>
                    </ul>
                </div>
                <div class="site-map">
                    <h4>Important Links</h4>
                    <ul class="list-unstyled mb-0">
                        <li><a href="{{route('privacy')}}">Privacy Policy</a></li>
                        <li><a href="{{route('terms')}}">Terms & Conditions</a></li>
                        <li><a href="{{route('refund')}}">Refund Policy</a></li>

                        <li><a href="#">Site Map</a></li>
                        {{-- <li><a href="{{route('contactus')}}">CONTACT US</a></li> --}}
                    </ul>
                </div>
                <div class="site-map">
                    <h4>Get Free Estimate</h4>
                    @if(!empty($siteSettings->phone))
                        <div class="footer-phone">
                            <a href="tel:{{$siteSettings->phone}}">{{$siteSettings->phone}}</a>
                        </div>
                        <div class="d-flex ">
                            {{-- <span class="d-block">Our online scheduling and payment system is safe.</span> --}}
                            <div class="online-btn mr-2">
                                <a href="tel:{{$siteSettings->phone}}">Call Now</a>
                            </div>
                            <div class="online-btn">
                                <a href="https://delipat.com/pay-now/">Pay Now</a>
                            </div>
                        </div>
                    @endif
                    <div class="footer-image-box">
                        <img src="{{asset('frontend/assets/img/ridge-partner-desktop.jpeg')}}" class="top-nav-image"
                            loading="lazy" alt="salesforce-ridge-partner">
                    </div>
                </div>

            </div>
        </div>
    </footer>
    <!-- FOOTER SECTION -->
    <!-- COPYRIGHT CON -->
    <div class="w-100 float-left copyright-con position-relative">
        <a href="#back-top">
            <div class="black-btn">
                <img src="{{asset('frontend/assets/images/top-arrow.png')}}" alt="top-arrow">
            </div>
        </a>
        <div class="wrapper">
            <div class="copyright-inner-con d-flex align-items-center justify-content-between">
                <div class="footer-social">
                    <ul class="list-unstyled mb-0 d-flex">
                        @if(!empty($siteSettings->facebooklink))
                            <li><a href="{{$siteSettings->facebooklink}}"><i
                                        class="fab fa-facebook-f d-flex align-items-center justify-content-center"></i></a>
                            </li>
                        @endif
                        @if(!empty($siteSettings->twitterlink))
                            <li><a href="{{$siteSettings->twitterlink}}"><i
                                        class="fab fa-twitter d-flex align-items-center justify-content-center"></i></a>
                            </li>
                        @endif
                        @if(!empty($siteSettings->linkdinlink))
                            <li><a href="{{$siteSettings->linkdinlink}}"><i
                                        class="fab fa-linkedin-in d-flex align-items-center justify-content-center"></i></a>
                            </li>
                        @endif
                        @if(!empty($siteSettings->instagramlink))

                            <li><a href="{{$siteSettings->instagramlink}}"><i
                                        class="fab fa-instagram d-flex align-items-center justify-content-center"></i></a>
                            </li>
                        @endif
                        @if(!empty($siteSettings->youtubelink))
                            <li><a href="{{$siteSettings->youtubelink}}"><i
                                        class="fab fa-youtube d-flex align-items-center justify-content-center"></i></a>
                            </li>
                        @endif

                    </ul>
                </div>
                <div class="copyright-txt"><span>©2024 Delipat , All Rights Reserved. </span></div>
            </div>
        </div>
    </div>



    <!-- COPYRIGHT CON -->
    <script src="{{asset('frontend/assets/js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/popper.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/owl.carousel.js')}}"></script>
    <script src="{{asset('frontend/assets/js/unpkg.com_blaze-slider@1.9.3_dist_blaze-slider.dev.js')}}"></script>
    <script src="{{asset('frontend/assets/js/aos.js')}}"></script>
    <script src="{{asset('frontend/assets/js/contact-form.js')}}"></script>
    <script src="{{asset('frontend/assets/js/custom.js')}}"></script>
    <script src="{{asset('frontend/assets/js/jquery.validate.js')}}"></script>
    <script>
        $('#client-slider').owlCarousel({
            loop: true,
            margin: 30,
            nav: true,
            navText: ["<img src='{{asset('frontend/assets/images/left-arrow.png')}}'>", "<img src='{{asset('frontend/assets/images/right-arrow.png')}}')}}'>"],
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                720: {
                    items: 2
                },
                1000: {
                    items: 3
                }
            }
        })
        $('#service-slider').owlCarousel({
            loop: true,
            margin: 30,
            nav: true,
            navText: ["<img src='{{asset('frontend/assets/images/left-arrow.png')}}'>", "<img src='{{asset('frontend/assets/images/right-arrow.png')}}'>"],
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                800: {
                    items: 2
                },
                1100: {
                    items: 3
                }

            }
        })
        $('#case-study-slider').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3
                }
            }
        })
        $("#partner-slider").owlCarousel({
            loop: true,              // Infinite loop
            margin: 20,             // Space between items
            nav: true,              // Show navigation arrows
            dots: false,            // Hide dots
            autoplay: true,         // Auto scroll
            autoplayTimeout: 3000,  // Time between slides (in ms)
            autoplaySpeed: 1000,    // Animation speed
            smartSpeed: 1000,       // Transition speed
            fluidSpeed: 1000,       // Speed for fluid transitions
            responsive: {
                0: {
                    items: 2        // 2 items on mobile
                },
                600: {
                    items: 3        // 3 items on tablet
                },
                1000: {
                    items: 5        // 5 items on desktop
                }
            }

        });

    </script>
    <script>
        AOS.init();
    </script>
    {!! $siteSettings->footer_script ?? '' !!}
</body>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
    (function () {
        var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/67596fb249e2fd8dfef64214/1ieqlokvt';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
</script>
<script>
    window.addEventListener('scroll', function () {
        const header = document.querySelector('.sticky-header');
        if (window.scrollY > 50) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    });
</script>
  <script>
                            document.addEventListener('DOMContentLoaded', function () {
                                const dropdown = document.querySelector('.sdey-dropdown');
                                const arrow = dropdown.querySelector('.sdey-arrow');

                                arrow.addEventListener('click', function (e) {
                                    e.stopPropagation(); // Prevent body click listener
                                    dropdown.classList.toggle('open');
                                });

                                document.addEventListener('click', function (e) {
                                    if (!dropdown.contains(e.target)) {
                                        dropdown.classList.remove('open');
                                    }
                                });
                            });
                        </script>

<!--End of Tawk.to Script-->

</html>