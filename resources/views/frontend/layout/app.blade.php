<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{asset('frontend/assets/images/favicon.png')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <title>Delipat | Home</title>
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
    <!-- <div class="loader-mask">
        <div class="loader">
            <div></div>
            <div></div>
        </div>
    </div> -->
    <!-- TOP BAR CON -->
    <div class="w-100 float-left top-bar-con">
        <div class="wrapper">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="socisl-con d-flex align-items-center justify-content-md-start justify-content-center">
                        <span class="text-white d-inline-block text-uppercase">Follow Us:</span>
                        <ul class="list-unstyled mb-0 d-flex">
                            <li><a href="https://www.facebook.com/"><i
                                        class="fab fa-facebook-f d-flex align-items-center justify-content-center"></i></a>
                            </li>
                            <li><a href="https://twitter.com/i/flow/login?redirect_after_login=%2F%3Flang%3Den"><i
                                        class="fab fa-twitter d-flex align-items-center justify-content-center"></i></a>
                            </li>
                            <li><a href="https://www.linkedin.com/login"><i
                                        class="fab fa-linkedin-in d-flex align-items-center justify-content-center"></i></a>
                            </li>
                            <li><a href="https://www.instagram.com/"><i
                                        class="fab fa-instagram d-flex align-items-center justify-content-center"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div
                    class="col-lg-6 col-md-6 col-12 d-flex justify-content-md-end align-items-center justify-content-center">
                    <div class="client-info">
                        <ul class="list-unstyled mb-0 d-flex">
                            <li><a style="color: white;" href="tel:+911234567890"><img
                                        src="{{asset('frontend/assets/images/phone-icon.png')}}" alt="phone-icon"> +61
                                    3 8376
                                    6284</a></li>
                            <li><a style="color: white;" href="mailto:Info@Delipat.com"><img
                                        src="{{asset('frontend/assets/images/email-icon.png')}}" alt="email-icon">
                                    Info@Delipat.com</a></li>
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
        <div class="wrapper">
            <nav class="navbar navbar-expand-lg navbar-dark px-0">
                <a class="navbar-brand d-lg-none" href="#">
                    <img src="{{asset('frontend/assets/images/mobile-logo.png')}}" alt="mobile-logo">
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
                        <li class="nav-item">
                            <a class="nav-link p-0 {{ Route::is('service') ? 'active' : '' }}" href="{{route('service')}}">services</a>
                        </li>
                    </ul>
                    <!--   Show this only lg screens and up   -->
                    <a class="navbar-brand d-none d-lg-block" href="#">
                        <figure class="mb-0">
                            <img src="{{asset('frontend/assets/images/logo-img.png')}}" alt="logo-img">
                        </figure>
                    </a>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link p-0 {{ Route::is('gallery') ? 'active' : '' }}" href="{{route('gallery')}}">Gallery</a>
                        </li>
                        <li class="nav-item dropdown">
                        <li class="nav-item">
                            <a class="nav-link p-0 {{ Route::is('blog') ? 'active' : '' }}" href="{{route('blog')}}">Blog</a>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link p-0 " href="contact.html">Contact Us</a>
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
                        <li><a href="#">services</a></li>
                        <li><a href="{{route('gallery')}}">Gallery</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="contact.html">CONTACT US</a></li>
                    </ul>
                </div>
                <div class="site-map">
                    <h4>Get Free Estimate</h4>
                    <div class="footer-phone">
                        <a href="tel:+911234567890">+1234567890</a>
                    </div>
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
                        <li><a href="https://www.facebook.com/"><i
                                    class="fab fa-facebook-f d-flex align-items-center justify-content-center"></i></a>
                        </li>
                        <li><a href="https://twitter.com/i/flow/login?redirect_after_login=%2F%3Flang%3Den"><i
                                    class="fab fa-twitter d-flex align-items-center justify-content-center"></i></a>
                        </li>
                        <li><a href="https://www.linkedin.com/login"><i
                                    class="fab fa-linkedin-in d-flex align-items-center justify-content-center"></i></a>
                        </li>
                        <li><a href="https://www.instagram.com/"><i
                                    class="fab fa-instagram d-flex align-items-center justify-content-center"></i></a>
                        </li>
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
            margin: 38,
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
                1000: {
                    items: 3
                }
            }
        })
    </script>
    <script>
        AOS.init();
    </script>
</body>

</html>