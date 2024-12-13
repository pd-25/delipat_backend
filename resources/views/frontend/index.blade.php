@extends('frontend.layout.app')
@section('content')
   <!-- HEADER -->
    <!-- HEADER -->
    <!-- BANNER SECTION -->
    <section id="back-top" class="w-100 float-left banner-con home-banner">
        <div class="banner-inner-con position-relative">
            <div class="container">
                <div class="row justify-conetnt-center align-items-start">
                    <div class="col-lg-8">
                        <div class="banner-title generic-box-content">
                            <h1 class="banner-text-h1" data-aos="fade-up" data-aos-duration="600">Delipat – Your Premier
                                <img style="width:10%" src="{{ asset('frontend/assets/img/Salesforce_logo.png') }}" alt="delipat-salesforce" class="img-fluid">
                                &                                 <img style="width:11%" src="{{ asset('frontend/assets/img/HubSpot_Logo.png') }}" alt="delipat-hubspot" class="img-fluid">
                                Consulting Partner
                            </h1>
                            <h4 class="common-h4" data-aos="fade-up" data-aos-duration="600">Unlock CRM Potential with
                                Tailored Solutions for Every Business
                            </h4>
                            <p data-aos="fade-up" data-aos-duration="600">Whether you’re a growing startup or an
                                established enterprise, Delipat's CRM consulting
                                services ensure you achieve operational excellence, streamlined customer management, and
                                scalable growth.</p>
                            <div class="d-flex align-items-center more-details">
                                <div class="generic-btn d-inline-block" data-aos="fade-up" data-aos-duration="600">
                                    <a href="https://calendly.com/expertsalesforce/30min/" target="_blank">Talk to a Consultant
                                    </a>
                                </div>
                                <div class="call-con position-relative d-inline-block" data-aos="fade-up"
                                    data-aos-duration="600">
                                    <img src="{{asset('frontend/assets/images/headphones-icon.png')}}" alt="headphones-icon">
                                    <div class="call-number">
                                        <span class="d-block">Consult with Us Now</span>
                                        <a href="tel:+918159876853">
                                            +91 81598 76853
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 order-lg-0 order-1">
                        <div class="banner-img">
                            <figure class="mb-0">
                                <img src="{{asset('frontend/assets/images/main-banner-image.webp')}}" alt="home-girls-img">
                            </figure>
                        </div>
                    </div>
                </div>
                <!-- wrapper -->
            </div>
        </div>
    </section>
    <!-- BANNER SECTION -->
    <!-- CLEAN SECTION -->
    <section class="w-100 float-left clean-con">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-6 col-md-8 col-12 mb-3" data-aos="fade-up" data-aos-duration="600">
                    <div class="trusted-crm-image-box">
                            <img src="{{asset('frontend/assets/images/trusted-crm.png')}}" alt="clean-img" class="trusted-crm">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="trusted-crm-content-box">
                    <h2 class="main-header-h2" data-aos="fade-up" data-aos-duration="600">Trusted CRM Experts with a Proven Track Record.</h2>
                    <p data-aos="fade-up" data-aos-duration="600">With a certified team and years of experience, we
                        deliver Salesforce and HubSpot solutions tailored to your industry. Our expertise spans CRM
                        setup, implementation, customization, integration, and training, providing end-to-end support to
                        accelerate your business success.
                    </p>
                    <div class="generic-list">
                        <ul class="list-unstyled">
                            <li data-aos="fade-up" data-aos-duration="600">
                                <span class="d-block">Full Suite of Services</span>
                                <p class="mb-0">Implementation, integration, customization, and more</p>
                            </li>
                            <li data-aos="fade-up" data-aos-duration="600">
                                <span class="d-block">Certified Consultants</span>
                                <p class="mb-0">Salesforce and HubSpot expertise at every level.</p>
                            </li>
                            <li data-aos="fade-up" data-aos-duration="600">
                                <span class="d-block">Industry-Specific Solutions</span>
                                <p class="mb-0">Tailored strategies for finance, healthcare, retail, and more.</p>
                            </li>
                            <li data-aos="fade-up" data-aos-duration="600">
                                <span class="d-block">Global Reach, Local Focus</span>
                                <p class="mb-0"> Supporting businesses worldwide with personalized care.</p>
                            </li>
                        </ul>
                    </div>
                    <div class="d-flex align-items-center more-details">
                        <div class="generic-btn d-inline-block" data-aos="fade-up" data-aos-duration="600">
                            <a href="https://calendly.com/expertsalesforce/30min/" target="_blank">Talk to a CRM Expert </a>
                        </div>
                        <div class="call-con position-relative d-inline-block" data-aos="fade-up"
                            data-aos-duration="600">
                            <!-- <img src="assets/images/headphones-icon.png" alt="headphones-icon"> -->
                            <div class="generic-btn d-inline-block" data-aos="fade-up" data-aos-duration="600">
                                <a href="{{route('about')}}">Know us More </a>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CLEAN SECTION -->
    <!-- SERVICE SECTION -->
    <section class="w-100 float-left  pb-0 service-area">
        <div class="service-inner-box position-relative">
            <div class="container">
                <div class="service-title text-center position-relative">

                    <h2 class="main-header-h2" data-aos="fade-up" data-aos-duration="600" class="aos-init aos-animate">
                        Our Services
                    </h2>
                </div>
                <div class="service-inner-con" data-aos="fade-up" data-aos-duration="600">
                    <div class="owl-carousel owl-theme" id="service-slider">
                        <div class="item">
                            <div class="service-item text-center">
                                <figure>
                                    <img src="{{asset('frontend/assets/images/service/service-card-1.png')}}" alt="service-img">
                                </figure>
                                <h3>Salesforce Consulting & Implementation
                                </h3>
                                <p class="mb-4">From initial setup to advanced customizations, we help you leverage
                                    Salesforce to its
                                    full potential. Our solutions include Sales, Service, Marketing Cloud, and Pardot,
                                    all designed to drive ROI and enhance customer experience.</p>
                                <!-- <a href="#"><img src="assets/images/left-angle.png" alt="left-angle"></a> -->
                                <div class="generic-btn position-btn-div d-block text-center aos-init aos-animate"
                                    data-aos="fade-up" data-aos-duration="600" bis_skin_checked="1">
                                    <a style="width: auto; border-radius:8px ;" class=" position-btn-a" href="#">Explore<br>
                                        Salesforce Solutions</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="service-item text-center slider-service-box">
                                <figure>
                                    <img src="{{asset('frontend/assets/images/service/service-card-2.png')}}" alt="service-img">
                                </figure>
                                <h3>HubSpot Consulting & Optimization
                                </h3>
                                <p>HubSpot offers robust inbound marketing, sales, and customer service capabilities.
                                    Our certified consultants optimize HubSpot to align with your growth goals, ensuring
                                    seamless integrations and effective lead nurturing.
                                </p>
                                <div class="generic-btn position-btn-div d-block text-center aos-init aos-animate"
                                    data-aos="fade-up" data-aos-duration="600" bis_skin_checked="1">
                                    <a style="width: auto; border-radius:8px ;" class=" position-btn-a" href="#">Learn
                                        About <br> HubSpot Services</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="service-item text-center">
                                <figure>
                                    <img src="{{asset('frontend/assets/images/service/service-card-3.png')}}" alt="service-img">
                                </figure>
                                <h3>Integration & Automation Solutions
                                </h3>
                                <p>Connect your CRM with essential third-party tools like Mailchimp, DocuSign, and more.
                                    Streamline processes and increase team productivity through seamless integration and
                                    automation.
                                </p>
                                <div class="generic-btn position-btn-div d-block text-center aos-init aos-animate"
                                    data-aos="fade-up" data-aos-duration="600" bis_skin_checked="1">
                                    <a style="width: auto; border-radius:8px ;" class=" position-btn-a" href="#">Start<br>
                                        Your Integration</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- SERVICE SECTION -->

    <!-- Solutions to Address Your Pain Points -->
    <section class="w-100 float-left user-con solution-address-sec">
        <div class="container">
            <div class=" row justify-content-center align-items-center">
                <div class="col-lg-6 col-md-8 mb-3" data-aos="fade-up" data-aos-duration="600">
                    <div class="soluion-address-image-box">
                            <img src="{{asset('frontend/assets/images/solution-side.webp')}}" alt="crm-solution" class="solution-image">
                    </div>
                </div>
                <div class="col-lg-6 col-md-10 transparent-bg">
                    <div class="solution-address-content-box">
                    <h2 class="main-header-h2" data-aos="fade-up" data-aos-duration="600">Solutions to Address Your Pain Points</h2>
                    <p data-aos="fade-up" data-aos-duration="600">Delipat’s CRM expertise helps you overcome common
                        business hurdles by aligning systems, enhancing team productivity, and enabling real-time data
                        insights. Our customized solutions empower you to
                    </p>
                    <div class="generic-list">
                        <ul class="list-unstyled">
                                <li data-aos="fade-up" data-aos-duration="600">
                                    <span class="d-block">Boost Sales Productivity</span>
                                    <p class="mb-0"> Automate workflows, track leads, and optimize your sales pipeline
                                    </p>
                                </li>
                                <li data-aos="fade-up" data-aos-duration="600">
                                    <span class="d-block">Enhance Customer Engagement</span>
                                    <p class="mb-0">Leverage customer data for personalized marketing and service
                                    </p>
                                </li>
                                <li data-aos="fade-up" data-aos-duration="600">
                                    <span class="d-block">Improve Data Accessibility</span>
                                    <p class="mb-0">Access insights across departments for agile decision-making
                                    </p>
                                </li>
                                <li data-aos="fade-up" data-aos-duration="600">
                                    <span class="d-block">Achieve Rapid ROI</span>
                                    <p class="mb-0">Implement CRM solutions with measurable outcomes.</p>
                                </li>
                            </ul>
                    </div>
                    <div class="d-flex align-items-center more-details">
                        <div class="generic-btn d-inline-block" data-aos="fade-up" data-aos-duration="600">
                            <a href="https://calendly.com/expertsalesforce/30min/" target="_blank">Let’s talk business</a>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
     <!-- Solutions to Address Your Pain Points -->

    <!-- industries we serve starts  -->
    <section class="clean-con industry-serve">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-6 col-md-8 col-sm-12 mb-3" data-aos="fade-up" data-aos-duration="600">
                    <div class="industry-box-img m-auto">
                            <img src="{{asset('frontend/assets/images/we-serve-1.png')}}" alt="clean-img" class="trusted-crm">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12  m-auto">
                    <div class="industry-content-div">
                        <h2 class="main-header-h2" data-aos="fade-up" data-aos-duration="600">Industries We Serve</h2>
                            
                        <p data-aos="fade-up" data-aos-duration="600">Our CRM solutions cater to a range of industries, each
                            with unique challenges and objectives. Explore how Delipat tailors its Salesforce and HubSpot
                            services for your industry:
                        </p>
                        <div class="generic-list">
                            <ul class="list-unstyled">
                                    <li data-aos="fade-up" data-aos-duration="600">
                                        <span class="d-block">Healthcare</span>
                                        <p class="mb-0">Streamlined patient data management

                                        </p>
                                    </li>
                                    <li data-aos="fade-up" data-aos-duration="600">
                                        <span class="d-block">Financial Services</span>
                                        <p class="mb-0">Enhanced security and compliance

                                        </p>
                                    </li>
                                    <li data-aos="fade-up" data-aos-duration="600">
                                        <span class="d-block">Retail</span>
                                        <p class="mb-0">Personalized customer journeys and smarter inventory

                                        </p>
                                    </li>
                                    <li data-aos="fade-up" data-aos-duration="600">
                                        <span class="d-block">Manufacturing</span>
                                        <p class="mb-0">Data-driven supply chain and production insights
                                        </p>
                                    </li>
                                    <li data-aos="fade-up" data-aos-duration="600">
                                        <span class="d-block">Technology</span>
                                        <p class="mb-0">Scalable CRM solutions for rapid innovation
                                        </p>
                                    </li>
                                </ul>
                        </div>
                    </div>
                    <div class="d-flex align-items-center more-details">
                        <div class="generic-btn d-inline-block" data-aos="fade-up" data-aos-duration="600">
                            <a href="{{route('industry')}}">Discover Industry Solutions</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   <!-- industries we serve end  -->

    <section class="w-100 float-left user-con our-approach-sec">
        <div class="container">
            <div class="team-title text-center mb-4">
                <h2 class="main-header-h2" data-aos="fade-up" data-aos-duration="600" class="aos-init aos-animate">Our Approach
                  is Our Strength
                </h2>
            </div>
            <div class="row mb-5">
                <!-- Discovery Phase Card -->
                <div class="col-xl-3 col-lg-6 col-md-6 col-12 mb-4">
                    <div class="approach-card">
                        <div class="card text-center h-100" data-aos="fade-up" data-aos-duration="600">
                            <div class="card-body">
                                <div class="approach-image-div">  <img src="{{asset('frontend/assets/images/discovery.png')}}" alt="discover-icon" class="approach-card-image"></div>
                                <h3 class="card-title">Discovery</h3>
                                <p class="card-text">We assess your current systems, analyze key challenges, and define the
                                    roadmap for success.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Customization Phase Card -->
                <div class="col-xl-3 col-lg-6 col-md-6 col-12 mb-4">
                     <div class="approach-card">
                        <div class="card text-center h-100" data-aos="fade-up" data-aos-duration="600">
                            <div class="card-body">
                             <div class="approach-image-div">  <img src="{{asset('frontend/assets/images/customization.png')}}" alt="cutomization-icon" class="approach-card-image"></div>
                                <h3 class="card-title">Customization</h3>
                                <p class="card-text">Delipat designs a unique CRM architecture aligned with your goals,
                                    integrating essential tools.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Implementation Phase Card -->
                <div class="col-xl-3 col-lg-6 col-md-6 col-12 mb-4">
                    <div class="approach-card">
                        <div class="card text-center h-100" data-aos="fade-up" data-aos-duration="600">
                            <div class="card-body">
                                <div class="approach-image-div">  <img src="{{asset('frontend/assets/images/implementation.png')}}" alt="implementation-icon" class="approach-card-image"></div>
                                <h3 class="card-title">Implementation</h3>
                                <p class="card-text">Our team ensures a smooth deployment, including data migration and user
                                    training for effective adoption.</p>
                            </div>
                        </div>
                    </div>  
                </div>
                <!-- Ongoing Support Phase Card -->
                <div class="col-xl-3 col-lg-6 col-md-6 col-12 mb-4">
                    <div class="approach-card">
                        <div class="card text-center h-100" data-aos="fade-up" data-aos-duration="600">
                            <div class="card-body">
                                <div class="approach-image-div">  <img src="{{asset('frontend/assets/images/ongoing-support.png')}}" alt="ongoing-support" class="approach-card-image"></div>
                                <h3 class="card-title">Ongoing Support</h3>
                                <p class="card-text">Post-implementation support includes updates, maintenance, and
                                    optimization to keep your CRM functioning at peak performance.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="generic-btn d-block text-center aos-init aos-animate" data-aos="fade-up" data-aos-duration="600"
                bis_skin_checked="1">
                <a href="https://calendly.com/expertsalesforce/30min/" target="_blank">Book a Strategy Session</a>
            </div>

        </div>
    </section>

    <!-- CONTACT-SECTION -->
    <section class="contact_area w-100 team-con float-left">
        <div class="w-100">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-7 col-md-7 order-md-0 h-100 d-flex flex-column align-items-center ">
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
                            <figure class="mb-0 position-relative">
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
    </section>
    
    <!-- CONTACT-SECTION -->

    <!-- USER SECTION -->
    {{-- <x-you-tube-videos /> --}}

    <!-- USER SECTION -->

    <!-- BLOG SECTION -->
    <section class="w-100 float-left faq-box  video-gradient-sec">
        <div class="container">
            <div class="blog-title text-center position-relative" data-aos="fade-up" data-aos-duration="600">
                <h2 class="main-header-h2" data-aos="fade-up" data-aos-duration="600" class="aos-init aos-animate">Frequently Asked
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
                                            <h5>What CRM systems do you specialize in?</h5>
                                        </a>
                                    </div>
                                    <div id="collapseOne1" class="collapse" aria-labelledby="headingOne1"
                                        data-parent="#faqAccordion1">
                                        <div class="accordion-body">
                                            <p>We specialize in Salesforce and HubSpot, providing a full range of
                                                consulting, implementation, and optimization services.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-card">
                                    <div class="accordion-header" id="headingTwo1">
                                        <a href="#" class="accordion-btn collapsed" data-toggle="collapse"
                                            data-target="#collapseTwo1" aria-expanded="false"
                                            aria-controls="collapseTwo1">
                                            <h5>How long does a typical CRM implementation take?</h5>
                                        </a>
                                    </div>
                                    <div id="collapseTwo1" class="collapse" aria-labelledby="headingTwo1"
                                        data-parent="#faqAccordion1">
                                        <div class="accordion-body">
                                            <p>The timeline varies based on project complexity. Most projects range from
                                                a few weeks to a few months.</p>
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
                                            <h5>What industries do you support?</h5>
                                        </a>
                                    </div>
                                    <div id="collapseOne2" class="collapse" aria-labelledby="headingOne2"
                                        data-parent="#faqAccordion2">
                                        <div class="accordion-body">
                                            <p>We work with clients across industries, including healthcare, retail,
                                                finance, technology, and more.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-card">
                                    <div class="accordion-header" id="headingTwo2">
                                        <a href="#" class="accordion-btn collapsed" data-toggle="collapse"
                                            data-target="#collapseTwo2" aria-expanded="false"
                                            aria-controls="collapseTwo2">
                                            <h5>How can I know which CRM solution is right for me?</h5>
                                        </a>
                                    </div>
                                    <div id="collapseTwo2" class="collapse" aria-labelledby="headingTwo2"
                                        data-parent="#faqAccordion2">
                                        <div class="accordion-body">
                                            <p>Schedule a consultation with our experts, who will assess your needs and
                                                recommend the best-fit CRM platform.</p>
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
    <!-- BLOG SECTION -->

@endsection
