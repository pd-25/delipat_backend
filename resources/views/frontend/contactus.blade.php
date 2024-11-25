@extends('frontend.layout.app')
@section('content')
<section id="back-top" class="w-100 float-left banner-con home-banner position-relative">
    <div class="banner-inner-con position-relative">
        <div class="wrapper2">
            <div class="row">
                <div class="col-lg-7 col-md-7">
                    <div class="banner-title">
                        <h1 class="text-white" data-aos="fade-up" data-aos-duration="600">Contact Us</h1>
                        <p class="mb-0" data-aos="fade-up" data-aos-duration="600">Lorem ipsum dolor sit amet,
                            consectetur adipisicing elit, sed do eiusmod tempor incid
                            idunt ut labore et dolore magna aliqua enim ad minim veniam.</p>
                    </div>
                </div>
                <!-- <div class="col-lg-5 col-md-5 order-md-0 order-1">
                    <div class="banner-img" data-aos="fade-up" data-aos-duration="600">
                      
                    </div>
                </div> -->
            </div>
            <!-- wrapper -->
        </div>
    </div>
</section>
<!-- BANNER SECTION -->
<!--  -->
<section class="w-100 float-left contact-form-con">
    <div class="wrapper">
        <div class="contact-box2 w-100 float-left">
            <div class="contact-form">
                <h2 class="mb-0" data-aos="fade-up" data-aos-duration="600">Get in Touch with Delipat’s CRM Experts</h2>
                <p data-aos="fade-up" data-aos-duration="600">Have questions about our CRM solutions? <br>
                    Need more information on Salesforce or HubSpot services? <br>
                    Our team is ready to assist you and provide the insights you need to make informed decisions.
                    </p>
                <form data-aos="fade-up" data-aos-duration="600"  method="post" id="contactpage">
                    <ul class="list-unstyled">
                        <li>
                            <div class="input-field">
                                <div class="input-field-icon position-relative d-inline-block">
                                    <img src="{{asset('frontend/assets/images/form-user-icon.png')}}" alt="form-user-icon">
                                </div>
                                <input type="text" placeholder="Your Name" name="fname" id="fname">
                            </div>
                        </li>
                        <li>
                            <div class="input-field">
                                <div class="input-field-icon position-relative d-inline-block">
                                    <img src="{{asset('frontend/assets/images/form-email-icon.png')}}" alt="form-email">
                                </div>
                                <input type="email" placeholder="Your Email" name="email" id="email">
                            </div>
                        </li>
                        <li>
                            <div class="input-field">
                                <div class="input-field-icon position-relative d-inline-block">
                                    <img src="{{asset('frontend/assets/images/form-tel-icon.png')}}" alt="form-tel-icon">
                                </div>
                                <input type="tel" placeholder="Your Phone"  name="phone" id="phone">
                            </div>
                        </li>
                        <li>
                            <div class="input-field">
                                <div class="input-field-icon position-relative d-inline-block">
                                    <img src="{{asset('frontend/assets/images/form-plane-icon.png')}}" alt="form-plane-icon">
                                </div>
                                <textarea placeholder="Message" name="subject" id="subject"></textarea>
                            </div>
                        </li>
                    </ul>
                    <button class="contact-submit-btn" id="submit">Send</button>
                </form>
            </div>
            <div class="contact-info">
                <h2 data-aos="fade-up" data-aos-duration="600">INFo</h2>
                <ul class="list-unstyled mb-0">
                    <li data-aos="fade-up" data-aos-duration="600">
                        <div class="contact-info-item">
                            <figure class="mb-0">
                                <img src="{{asset('frontend/assets/images/contact-location-icon.png')}}" alt="contact-location-icon">
                            </figure>
                            <div class="contact-info-content">
                                <h5>Address</h5>
                                <span>2nd floor, Phase 2, Webel IT Park, Palashdiha, Durgapur, West Bengal 713208
                                </span>
                            </div>
                        </div>
                    </li>
                    <li data-aos="fade-up" data-aos-duration="600">
                        <div class="contact-info-item">
                            <figure class="mb-0">
                                <img src="{{asset('frontend/assets/images/contact-phone-icon.png')}}" alt="contact-phone-icon">
                            </figure>
                            <div class="contact-info-content">
                                <h5>Phone</h5>
                                <a href="tel:+61383766284">+91 81598 76853</a>
                            </div>
                        </div>
                    </li>
                    <li data-aos="fade-up" data-aos-duration="600">
                        <div class="contact-info-item">
                            <figure class="mb-0">
                                <img src="{{asset('frontend/assets/images/contact-email-icon.png')}}" alt="contact-email-icon">
                            </figure>
                            <div class="contact-info-content">
                                <h5>Email</h5>
                                <a href="mailto:Info@letsclean.com">info@delipat.com</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
   
    </div>
</section>
@endsection