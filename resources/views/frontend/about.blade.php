@extends('frontend.layout.app')
@section('content')
<!-- BANNER SECTION -->
<section id="back-top" class="w-100 float-left banner-con common-banner position-relative">
    <div class="banner-inner-con position-relative">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-7">
                    <div class="banner-title">
                        <h1 class="main-header-h2" data-aos="fade-up" data-aos-duration="600">About Us – Delipat</h1>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 order-md-0 order-1">
                    <div class="banner-img">
                       
                    </div>
                </div>
            </div>
            <!-- wrapper -->
        </div>
    </div>
</section>
<!-- BANNER SECTION -->
<!-- CLEAN SECTION -->
<section class="w-100 float-left team-con textbox-center">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 col-md-8" data-aos="fade-up" data-aos-duration="600">
                <div class="who-we-are-image-box">
                        <img src="{{asset('frontend/assets/images/salesforce.webp')}}" alt="clean-img" class="who-we-are-img">
                </div>
            </div>
            <div class="col-lg-6 col-md-10">
            <div class="who-we-are-content">
                <h2 data-aos="fade-up" data-aos-duration="600" class="main-header-h2">Who We Are ?</h2>
                <p data-aos="fade-up" data-aos-duration="600">Delipat is a leading Salesforce and CRM consulting
                    firm dedicated to empowering businesses with innovative, data-driven solutions. Our team of
                    certified Salesforce and HubSpot consultants brings extensive experience across industries,
                    providing tailored CRM solutions that drive productivity, streamline operations, and foster
                    meaningful customer relationships. Headquartered in Durgapur, West Bengal, we serve clients
                    across the globe, transforming their approach to customer relationship management with precision
                    and reliability.
                </p>

                <div class="d-flex align-items-center more-details">
                    <div class="generic-btn d-inline-block" data-aos="fade-up" data-aos-duration="600">
                        <a href="https://calendly.com/expertsalesforce/30min/" target="_blank">Connect with Us Today!
                        </a>
                    </div>

                </div>
            </div>
            </div>
           
        </div>
    </div>
</section>
<!-- CLEAN SECTION -->
<!-- GOALS SECTION -->
<section class="w-100 float-left team-con our_journey_area textbox-center">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-6 col-md-10 mb-4">
                <div class="our_mission_content">
                    <h2 class=" main-header-h2" data-aos="fade-up" data-aos-duration="600">Our Mission</h2>
                    <h4 class="common-h4">Empowering Businesses with Strategic CRM Solutions
                    </h4>
                    <p class="mb-0" data-aos="fade-up" data-aos-duration="600">Our mission at Delipat is to bridge the
                        gap between technology and business strategy. We aim to provide high-impact Salesforce and CRM
                        solutions that help businesses achieve exceptional growth and operational efficiency. By
                        harnessing the capabilities of platforms like Salesforce and HubSpot, we help our clients
                        optimize sales strategies, enhance customer interactions, and boost revenue.</p>
                    <span class="color-01d0cc mission-card-span">Join Us in Our Mission</span>
                </div>
                <div class="mt-4">
                    <div class="generic-btn d-inline-block" data-aos="fade-up" data-aos-duration="600">
                        <a href="#">Let’s Discuss Your CRM Goals
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-8 col-12">
                <div class="our_mission_image_div" data-aos="fade-up"
                    data-aos-duration="600">
                    <img src="{{asset('frontend/assets/images/about-page/our-mission.webp')}}" alt="mission-icon" class="our_mission_img">
                </div>
            </div>
            </div>
        </div>
    </div>
</section>
<!-- === our values area starts === -->
<section class="w-100 float-left team-con industry-serve textbox-center">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-6 col-md-10 mb-4" data-aos="fade-up" data-aos-duration="600">
                <div class="our-values-content">
                    <h2 class="main-header-h2">Our Values</h2>
                    <h4 class="common-h4" data-aos="fade-up" data-aos-duration="600">Creating Business Excellence with CRM Expertise
                    </h4>
              
                    <div class="generic-list">
                        <ul class="list-unstyled">
                            <li data-aos="fade-up" data-aos-duration="600">
                                <span class="d-block">Innovation First</span>
                                <p class="mb-0">We constantly push the boundaries of conventional solutions, pioneering
                                    new ways to simplify CRM for businesses.</p>
                            </li>
                            <li data-aos="fade-up" data-aos-duration="600">
                                <span class="d-block">Customer-Centric Approach</span>
                                <p class="mb-0">Our solutions are designed with your business needs in mind, ensuring
                                    every tool and strategy aligns with your growth goals.</p>
                            </li>
                            <li data-aos="fade-up" data-aos-duration="600">
                                <span class="d-block">Agility & Reliability</span>
                                <p class="mb-0">We prioritize responsiveness and flexibility, adapting to your evolving
                                    business needs with scalable, reliable solutions.</p>
                            </li>
                            <li data-aos="fade-up" data-aos-duration="600">
                                <span class="d-block">Integrity & Trust</span>
                                <p class="mb-0">At Delipat, we believe in forging long-lasting relationships based on
                                    transparency, reliability, and client trust.</p>
                            </li>
                        </ul>
                    </div>
                    <div class="d-flex align-items-center more-details">
                        <div class="generic-btn d-inline-block" data-aos="fade-up" data-aos-duration="600">
                            <a href="#">Meet our experts now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-10" data-aos="fade-up" data-aos-duration="600">
            <div class="our-values-img-box">
                        <img src="{{asset('frontend/assets/images/about-page/our-values.png')}}" alt="our-values" class="trusted-crm">
                
                </div>
            </div>
        </div>
    </div>

</section>
<!-- === our values area end === -->
<section class="w-100 float-left team-con our_journey_area">
    <div class="container">
        <div class="text-center mb-5">
            <h2 data-aos="fade-up" data-aos-duration="600" class="main-header-h2">Our Journey</h2>
            <p class="lead">Founded by visionary CEO Rajesh Chatterjee, who has more than 15 years of experience
                with HubSpot and Salesforce implementation, Delipat started with a commitment to challenge the CRM
                landscape. Over the years, our team has grown in both size and expertise, attracting passionate
                professionals dedicated to excellence in Salesforce and HubSpot consulting. Today, Delipat is a
                trusted CRM partner, renowned for its innovative approach and customized solutions that address
                industry-specific challenges.</p>
        </div>

        <div class="row text-center g-4">
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow our-journey-card">
                    <div class="card-body">
                        <div class="card-img-div">
                            <img src="{{asset('frontend/assets/images/about-page/projects-completed.png')}}" alt="project" class="our-jouner-img"
                                loading="lazy">
                        </div>
                        <h5 class="card-title fw-bold">150+ Projects Completed</h5>
                        <p class="card-text">Delivering successful CRM solutions across various industries.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow our-journey-card">
                    <div class="card-body">
                        <div class="card-img-div">
                            <img src="{{asset('frontend/assets/images/about-page/satisfied-clients.png')}}" alt="project" class="our-jouner-img"
                                loading="lazy">
                        </div>
                        <h5 class="card-title fw-bold">150+ Satisfied Clients</h5>
                        <p class="card-text">Building long-lasting relationships through customized solutions.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow our-journey-card">
                    <div class="card-body">
                        <div class="card-img-div">
                            <img src="{{asset('frontend/assets/images/about-page/industries-served.png')}}" alt="project" class="our-jouner-img"
                                loading="lazy">
                        </div>
                        <h5 class="card-title fw-bold">8+ Industries Served</h5>
                        <p class="card-text">Specialized expertise in industry-specific CRM challenges.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="our-jounney-btn-box more-details" bis_skin_checked="1">
            <div class="generic-btn d-inline-block aos-init aos-animate" data-aos="fade-up" data-aos-duration="600"
                bis_skin_checked="1">
                <a href="https://calendly.com/expertsalesforce/30min/" target="_blank">Start Your Project Today</a>
            </div>

        </div>

    </div>

</section>
<section class="w-100 float-left team-con">
    <div class="container">
        <div class="text-center mb-5">
            <h2 data-aos="fade-up" data-aos-duration="600" class="main-header-h2">Why Choose Delipat?
            </h2>
        </div>

        <div class="row text-center g-4">
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="why-choose-card">
                        <div class="why-choose-delipat-image-div">
                            <img src="{{asset('frontend/assets/images/about-page/why-choose-delipat/salesforce-certified-consultants.png')}}" alt="project" class="why-choose-img"
                        loading="lazy">
                        </div>
                        <div class="why-choose-card-content">
                            <h5 class="card-title choose-delipat-h5">Salesforce-Certified Consultants</h5>
                            <p class="card-text">With certifications across Salesforce and HubSpot, we ensure that
                                you’re working with skilled experts committed to delivering exceptional service.</p>
                        </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 mb-4">
                <div class="why-choose-card">
                        <div class="why-choose-delipat-image-div">
                                <img src="{{asset('frontend/assets/images/about-page/why-choose-delipat/proven-results-driven-solutions.png')}}" alt="project" class="why-choose-img"
                            loading="lazy">
                        </div>
                        <div class="why-choose-card-content">
                            <h5 class="card-title choose-delipat-h5">Proven, Results-Driven Solutions</h5>
                            <p class="card-text">Our focus is on achieving measurable outcomes—whether you’re looking to
                                increase sales, enhance customer satisfaction, or optimize internal workflows.</p>
                        </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 mb-4">
                <div class="why-choose-card">
                        <div class="why-choose-delipat-image-div">
                                <img src="{{asset('frontend/assets/images/about-page/why-choose-delipat/end-to-end-support.png')}}" alt="project" class="why-choose-img"
                            loading="lazy">
                        </div>
                        <div class="why-choose-card-content">
                            <h5 class="card-title choose-delipat-h5">End-to-End Support</h5>
                            <p class="card-text">From initial consultation to post-implementation support, we’re here to
                                guide you at every step, ensuring your CRM system evolves with your needs.</p>
                        </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 mb-4">
                <div class="why-choose-card">
                        <div class="why-choose-delipat-image-div">
                                <img src="{{asset('frontend/assets/images/about-page/why-choose-delipat/reliable-transparent.png')}}" alt="project" class="why-choose-img"
                            loading="lazy">
                        </div>
                        <div class="why-choose-card-content">
                            <h5 class="card-title choose-delipat-h5">Reliable & Transparent</h5>
                            <p class="card-text">With our commitment to high-quality service, we pride ourselves on
                                exceeding client expectations in every project.</p>
                        </div>
                </div>
            </div>
        </div>
        <div class="d-flex align-items-center more-details justify-content-center mt-5" bis_skin_checked="1">
            <div class="generic-btn d-inline-block aos-init aos-animate" data-aos="fade-up" data-aos-duration="600"
                bis_skin_checked="1">
                <a href="https://calendly.com/expertsalesforce/30min/" target="_blank">CONTACT US Today</a>
            </div>

        </div>

    </div>

</section>
<!-- GOALS SECTION -->
<!-- TEAM SECTION -->
{{-- <section class="w-100 float-left team-con experienced_certified_area">
    <div class="wrapper">
        <div class="team-title-box text-center mb-5">
            <h2 data-aos="fade-up" data-aos-duration="600" class="main-header-h2"> Experienced. Certified.
                Dedicated.<br>
               Meet the Delipat Team 
            </h2>
            <p>Our team is the backbone of our success. Comprised of CRM experts, developers, and strategists, each
                member is certified and highly skilled, committed to understanding your unique business challenges
                and delivering solutions that make a measurable impact. Meet the people who drive your CRM success
                forward with passion and expertise.</p>
            <div class="d-flex align-items-center more-details justify-content-center mt-5" bis_skin_checked="1">
                <div class="generic-btn d-inline-block aos-init aos-animate" data-aos="fade-up"
                    data-aos-duration="600" bis_skin_checked="1">
                    <a href="#">Meet the Delipat Team
                    </a>
                </div>

            </div>
        </div>

    
    </div>
</section> --}}
<!-- TEAM SECTION -->
<!-- CONTACT-SECTION -->
 <!-- CONTACT-SECTION -->
 <div class="contact_area w-100 w-100 team-con float-left">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-7 col-md-7 order-md-0 h-100 d-flex flex-column align-items-center">
                        <div class="contact-title">
                            <h2 class="main-header-h2" data-aos="fade-up" data-aos-duration="600">Get Started with Delipat
                                Today</h2>
                            <h4 class="common-h4" data-aos="fade-up" data-aos-duration="600">Take the First Step
                                Towards a Seamless CRM Experience</h4>
                            <p class="" data-aos="fade-up" data-aos-duration="600">Ready to transform your
                                business? Connect with our CRM experts to discuss your needs, challenges, and goals.
                                Let’s tailor a solution that helps you maximize growth and streamline operations with
                                confidence.</p>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5">
                        <div class="contact-img-div">
                            <figure class="mb-0">
                                <img src="{{asset('frontend/assets/images/contact-side-image.webp')}}" alt="contact-img" class="contact-img">
                            </figure>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 order-md-0" data-aos="fade-up"
                        data-aos-duration="600">
                        <form class="form-con contact-form w-100 frbg" data-aos="fade-up" data-aos-duration="600" method="post"
                            id="contactpage">
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="form-input-div">
                                        <input type="text" placeholder="Your Name" name="fname" id="fname">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-input-div">
                                        <input type="text" placeholder="Your Name" name="fname" id="fname">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-input-div">
                                        <input type="text" placeholder="Your Name" name="fname" id="fname">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-input-div">
                                        <input type="text" placeholder="Your Name" name="fname" id="fname">
                                    </div>
                                </div>
                                <div class="col-md-12 col-12">
                                    <div class="form-input-div">
                                        <textarea placeholder="Your Message" name="subject" id="subject" rows="5" cols="50"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-button-div">
                                        <button class="submit-btn" id="submit">Send Now</button>
                                    </div>
                                </div>
                            </div>
                           
                        </form>
                    </div>
                </div>
          
        </div>
</div>

<!-- CONTACT-SECTION -->

<!-- USER SECTION -->

<section class="w-100 float-left faq-box  video-gradient-sec">
    <div class="container">
        <div class="blog-title text-center position-relative" data-aos="fade-up" data-aos-duration="600">
            <h2 class="main-header-h2">Frequently Asked
                Questions
            </h2>
        </div>
        <div class="aos-init aos-animate" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="accordion-section">
                        <div class="accordion" id="faqAccordion1">
                            <div class="accordion-card">
                                <div class="accordion-header" id="headingOne1">
                                    <a href="#" class="accordion-btn collapsed" data-toggle="collapse"
                                        data-target="#collapseOne1" aria-expanded="false"
                                        aria-controls="collapseOne1">
                                        <h5>Do you offer customized CRM solutions?</h5>
                                    </a>
                                </div>
                                <div id="collapseOne1" class="collapse" aria-labelledby="headingOne1"
                                    data-parent="#faqAccordion1">
                                    <div class="accordion-body">
                                        <p>Absolutely! Every solution we design is tailored to meet your specific
                                            business goals and industry requirements.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-card">
                                <div class="accordion-header" id="headingTwo1">
                                    <a href="#" class="accordion-btn collapsed" data-toggle="collapse"
                                        data-target="#collapseTwo1" aria-expanded="false"
                                        aria-controls="collapseTwo1">
                                        <h5>Can you help us decide if Salesforce or HubSpot is right for us?</h5>
                                    </a>
                                </div>
                                <div id="collapseTwo1" class="collapse" aria-labelledby="headingTwo1"
                                    data-parent="#faqAccordion1">
                                    <div class="accordion-body">
                                        <p>Yes! Our experts assess your business needs to recommend the most
                                            suitable CRM platform for you.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="accordion-section">
                        <div class="accordion" id="faqAccordion2">
                            <div class="accordion-card">
                                <div class="accordion-header" id="headingOne2">
                                    <a href="#" class="accordion-btn collapsed" data-toggle="collapse"
                                        data-target="#collapseOne2" aria-expanded="false"
                                        aria-controls="collapseOne2">
                                        <h5>What kind of support do you provide after implementation?</h5>
                                    </a>
                                </div>
                                <div id="collapseOne2" class="collapse" aria-labelledby="headingOne2"
                                    data-parent="#faqAccordion2">
                                    <div class="accordion-body">
                                        <p>We offer ongoing support and maintenance to ensure your CRM system
                                            remains optimized and up-to-date.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection