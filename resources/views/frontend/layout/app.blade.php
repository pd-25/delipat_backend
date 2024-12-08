@php
    $siteSettings = App\Models\SiteSetting::first();
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
    <div class="w-100 float-left top-bar-con">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="socisl-con d-flex align-items-center justify-content-md-start justify-content-center">
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
                <div
                    class="col-lg-6 col-md-6 col-12 d-flex justify-content-md-end align-items-center justify-content-center">
                    <div class="client-info">
                        <ul class="list-unstyled mb-0 d-flex">
                            @if(!empty($siteSettings->phone))
                                <li>
                                    <a style="color: white;" href="tel:{{$siteSettings->phone}}">
                                        <!-- <img src="{{asset('frontend/assets/images/phone-icon.png')}}" alt="phone-icon"> -->
                                        <i class="fa fa-mobile" aria-hidden="true"></i>
                                        {{$siteSettings->phone}}
                                    </a>
                                </li>
                            @endif

                                    @if(!empty($siteSettings->email))
                            <li><a style="color: white;" href="mailto:{{$siteSettings->email}}">    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    {{$siteSettings->email}}</a></li>
                                    @endif
                        </ul>
                    </div>
                </div>
            </div>
            <!-- container -->
        </div>
    </div>
    <!-- TOP BAR CON -->
    <!-- HEADER --> 
    <header class="w-100 float-left header-con">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark px-0  dropdown">
                <a class="navbar-brand d-lg-none" href="{{route('index')}}">
                    <img src="{{asset('storage/'.$siteSettings->logo1)}}" alt="mobile-logo">
                </a>

                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                    data-target="#navbarToggle" aria-controls="navbarToggle" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!--  Use flexbox utility classes to change how the child elements are justified  -->
                <div class="collapse navbar-collapse justify-content-between" id="navbarToggle">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link p-0 {{ Route::is('index') ? 'active' : '' }}" href="{{route('index')}}">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link p-0 {{ Route::is('about') ? 'active' : '' }}" href="{{route('about')}}">ABOUT US </a>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link p-0 {{ Route::is('service') ? 'active' : '' }}" href="{{route('service')}}">services</a>
                            <div class="megamenu">
                                <div class="container">
                                    <div class="row justify-content-center align-items-center">
                                        <div class="col-lg-4 col-sm-12">
                                            <div class="megamenu-items">
                                                <h3 class="heading">Salesforce Services</h3>
                                                <ul class="megamenuitems-ul">
                                                    <li class="megamenuitems-li"><a class="megamenu-link" href="#">Link 1</a></li>
                                                    <li class="megamenuitems-li"><a class="megamenu-link" href="#">Link 2</a></li>
                                                    <li class="megamenuitems-li"><a class="megamenu-link" href="#">Link 3</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-12">
                                            <div class="megamenu-items">
                                                <h3 class="heading">Hubspot Services</h3>
                                                <ul>
                                                    <li class="megamenuitems-li"><a class="megamenu-link" href="#">Link 1</a></li>
                                                    <li class="megamenuitems-li"><a class="megamenu-link" href="#">Link 2</a></li>
                                                    <li class="megamenuitems-li"><a class="megamenu-link" href="#">Link 3</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-12">
                                            <div class="megamenu-items">
                                                <h3 class="heading">Others Services</h3>
                                                <ul class="megamenuitems-ul">
                                                    <li class="megamenuitems-li"><a class="megamenu-link" href="#">Link 1</a></li>
                                                    <li class="megamenuitems-li"><a class="megamenu-link" href="#">Link 2</a></li>
                                                    <li class="megamenuitems-li"><a class="megamenu-link" href="#">Link 3</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li> --}}

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle {{ Route::is('service') ? 'active' : '' }}" id="navbarDropdown" role="button" data-toggle="dropdown"  href="{{route('service')}}"
                                aria-haspopup="true" aria-expanded="false" > 
                                Services
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <div class="row justify-content-center align-items-center">
                                    <div class="col-lg-4 col-sm-12">
                                        <div class="megamenu-items">
                                            <h3 class="heading">Salesforce Services</h3>
                                            <ul class="megamenuitems-ul">
                                                <li class="megamenuitems-li"><a class="megamenu-link" href="#">Link 1</a></li>
                                                <li class="megamenuitems-li"><a class="megamenu-link" href="#">Link 2</a></li>
                                                <li class="megamenuitems-li"><a class="megamenu-link" href="#">Link 3</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-12">
                                        <div class="megamenu-items">
                                            <h3 class="heading">Hubspot Services</h3>
                                            <ul>
                                                <li class="megamenuitems-li"><a class="megamenu-link" href="#">Link 1</a></li>
                                                <li class="megamenuitems-li"><a class="megamenu-link" href="#">Link 2</a></li>
                                                <li class="megamenuitems-li"><a class="megamenu-link" href="#">Link 3</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-12">
                                        <div class="megamenu-items">
                                            <h3 class="heading">Others Services</h3>
                                            <ul class="megamenuitems-ul">
                                                <li class="megamenuitems-li"><a class="megamenu-link" href="#">Link 1</a></li>
                                                <li class="megamenuitems-li"><a class="megamenu-link" href="#">Link 2</a></li>
                                                <li class="megamenuitems-li"><a class="megamenu-link" href="#">Link 3</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link p-0 {{ Route::is('industry') ? 'active' : '' }}" href="{{route('industry')}}">industry</a>
                        </li>
                    </ul>
                    <!--   Show this only lg screens and up   -->
                    <a class="navbar-brand d-none d-lg-block" href="{{route('index')}}">
                        <figure class="mb-0">
                            <img src="{{asset('storage/'.$siteSettings->logo1)}}" alt="logo-img">
                        </figure>
                    </a>
                    <ul class="navbar-nav">
                       

                        <li class="nav-item dropdown">
                        <li class="nav-item">
                            <a class="nav-link p-0 {{ Route::is('gallery') ? 'active' : '' }}" href="{{route('gallery')}}">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link p-0 {{ Route::is('case-study') ? 'active' : '' }}" href="{{route('case-study')}}">Case Studies</a>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link p-0 {{ Route::is('blog') ? 'active' : '' }}" href="{{route('blog')}}">Blog</a>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link p-0 {{ Route::is('contactus') ? 'active' : '' }}" href="{{route('contactus')}}">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    @yield('content')
 
    <!-- FOOTER SECTION -->
    <footer class="w-100 float-left footer-con position-relative">
        <div class="wrapper">
            <div class="footer-box position-relative">
                <div class="site-map">
                    <h4>About Us</h4>
                    <p class="mb-0">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                        fugiat nulla pariatur. Excepteur sint occaecat cupidatat.</p>
                </div>
                <div class="site-map">
                    <h4>Quick Links</h4>
                    <ul class="list-unstyled mb-0">
                        <li><a href="{{route('index')}}">HOME</a></li>
                        <li><a href="{{route('about')}}">ABOUT US</a></li>
                        <li><a href="{{route('service')}}">services</a></li>
                        <li><a href="{{route('gallery')}}">Gallery</a></li>
                        <li><a href="{{route('blog')}}">Blog</a></li>
                        <li><a href="{{route('contactus')}}">CONTACT US</a></li>
                    </ul>
                </div>
                <div class="site-map">
                    <h4>Get Free Estimate</h4>
                    @if(!empty($siteSettings->phone))
                    <div class="footer-phone">
                        <a href="tel:{{$siteSettings->phone}}">{{$siteSettings->phone}}</a>
                    </div>
                    @endif
                    <span class="d-block">Our online scheduling and payment system is safe.</span>
                    <div class="online-btn">
                        <a href="#">Reques With Online Form</a>
                    </div>
                </div>
                <div class="site-map">
                    <h4>Work Days</h4>
                    <ul class="list-unstyled schedule">
                        <li>Mon - sat</li>
                        <li>09am - 05pm</li>
                    </ul>
                    <ul class="list-unstyled mb-0 schedule">
                        <li>Sunday</li>
                        <li>Closed</li>
                    </ul>
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
            navText: ["<img src='{{asset('frontend/assets/images/left-arrow.png')}}'>", "<img src='assets/images/right-arrow.png')}}'>"],
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
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
            loop:true,
            margin:10,
            nav:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:2
                },
                1000:{
                    items:3
                }
            }
        })

      
    </script>
    <script>
        AOS.init();
    </script>
    {!! $siteSettings->footer_script ?? '' !!}
</body>

</html>