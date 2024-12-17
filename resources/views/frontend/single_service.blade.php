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
                            <h1 class="banner-text-h1" data-aos="fade-up" data-aos-duration="600">{{$service->sec1_heading}}</h1>
                            </h1>
                            
                            <p data-aos="fade-up" data-aos-duration="600" class="banner-p aos-init aos-animate">{!! $service->sec1_description !!}</p>
                            <div class="d-flex align-items-center more-details">
                            <div class="generic-btn d-inline-block" data-aos="fade-up" data-aos-duration="600">
                                <a href="https://calendly.com/expertsalesforce/30min/" target="_blank">Talk to a
                                    Consultant
                                </a>
                            </div>
                            <div class="call-con position-relative d-inline-block" data-aos="fade-up"
                                data-aos-duration="600">
                                <img src="{{asset('frontend/assets/images/headphones-icon.png')}}"
                                    alt="headphones-icon">
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
                                <img src="{{asset('storage/'.$service->sec1_image)}}" alt="home-girls-img">
                            </figure>
                        </div>
                    </div>
                </div>
                <!-- wrapper -->
            </div>
        </div>
    </section>
    <!-- BANNER SECTION -->
   
  <!-- SERVICE SECTION -->
<!-- SERVICE SECTION -->
<section class="w-100 float-left pb-0 service-area">
    <div class="service-inner-box position-relative">
        <div class="container">
            @if(!empty($service->sec2_heading)) 
            <div class="service-title text-center position-relative">
                <h2 class="main-header-h2" data-aos="fade-up" data-aos-duration="600">
                   {{$service->sec2_heading}}
                </h2>
            </div>
            @endif

            <div class="service-inner-con" data-aos="fade-up" data-aos-duration="600">
                <div class="row d-flex justify-content-center">
                    @if(!empty($service->sec2_service1_heading) && !empty($service->sec2_service1_description) && !empty($service->sec2_service1_icon))
                    <div class="item col-md-4 mb-4">
                        <div class="service-item text-center">
                            <figure>
                                <img src="{{asset('storage/'.$service->sec2_service1_icon)}}" alt="service-img">
                            </figure>
                            <h3>{{$service->sec2_service1_heading}}</h3>
                            <p class="mb-4">{{$service->sec2_service1_description}}</p>
                        </div>
                    </div>
                    @endif

                    @if(!empty($service->sec2_service2_heading) && !empty($service->sec2_service2_description) && !empty($service->sec2_service2_icon))
                    <div class="item col-md-4 mb-4">
                        <div class="service-item text-center slider-service-box">
                            <figure>
                                <img src="{{asset('storage/'.$service->sec2_service2_icon)}}" alt="service-img">
                            </figure>
                            <h3>{{$service->sec2_service2_heading}}</h3>
                            <p>{{$service->sec2_service2_description}}</p>
                        </div>
                    </div>
                    @endif

                    @if(!empty($service->sec2_service3_heading) && !empty($service->sec2_service3_description) && !empty($service->sec2_service3_icon))
                    <div class="item col-md-4 mb-4">
                        <div class="service-item text-center">
                            <figure>
                                <img src="{{asset('storage/'.$service->sec2_service3_icon)}}" alt="service-img">
                            </figure>
                            <h3>{{$service->sec2_service3_heading}}</h3>
                            <p>{{$service->sec2_service3_description}}</p>
                        </div>
                    </div>
                    @endif

                    @if(!empty($service->sec2_service4_heading) && !empty($service->sec2_service4_description) && !empty($service->sec2_service4_icon))
                    <div class="item col-md-4 mb-4">
                        <div class="service-item text-center">
                            <figure>
                                <img src="{{asset('storage/'.$service->sec2_service4_icon)}}" alt="service-img">
                            </figure>
                            <h3>{{$service->sec2_service4_heading}}</h3>
                            <p class="mb-4">{{$service->sec2_service4_description}}</p>
                        </div>
                    </div>
                    @endif

                    @if(!empty($service->sec2_service5_heading) && !empty($service->sec2_service5_description) && !empty($service->sec2_service5_icon))
                    <div class="item col-md-4 mb-4">
                        <div class="service-item text-center slider-service-box">
                            <figure>
                                <img src="{{asset('storage/'.$service->sec2_service5_icon)}}" alt="service-img">
                            </figure>
                            <h3>{{$service->sec2_service5_heading}}</h3>
                            <p>{{$service->sec2_service5_description}}</p>
                        </div>
                    </div>
                    @endif

                    @if(!empty($service->sec2_service6_heading) && !empty($service->sec2_service6_description) && !empty($service->sec2_service6_icon))
                    <div class="item col-md-4 mb-4">
                        <div class="service-item text-center">
                            <figure>
                                <img src="{{asset('storage/'.$service->sec2_service6_icon)}}" alt="service-img">
                            </figure>
                            <h3>{{$service->sec2_service6_heading}}</h3>
                            <p>{{$service->sec2_service6_description}}</p>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
<!-- SERVICE SECTION -->



   

<section class="w-100 float-left user-con our-approach-sec">
    <div class="container">
        @if(!empty($service->sec3_heading))
        <div class="team-title text-center mb-4">
            <h2 class="main-header-h2" data-aos="fade-up" data-aos-duration="600">{{ $service->sec3_heading }}</h2>
        </div>
        @endif
        <div class="row mb-5">
            @foreach(range(1, 4) as $i)
                @php
                    $icon = "sec3_service{$i}_icon";
                    $heading = "sec3_service{$i}_heading";
                    $description = "sec3_service{$i}_description";
                @endphp
                @if(!empty($service->$icon) && !empty($service->$heading) && !empty($service->$description))
                <div class="col-xl-3 col-lg-6 col-md-6 col-12 mb-4">
                    <div class="approach-card">
                        <div class="card text-center h-100" data-aos="fade-up" data-aos-duration="600">
                            <div class="card-body">
                                <div class="approach-image-div">
                                    <img src="{{ asset('storage/' . $service->$icon) }}" alt="approach-icon-{{ $i }}" class="approach-card-image">
                                </div>
                                <h3 class="card-title">{{ $service->$heading }}</h3>
                                <p class="card-text">{{ $service->$description }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            @endforeach
        </div>

        <div class="generic-btn d-block text-center" data-aos="fade-up" data-aos-duration="600">
            <a href="https://calendly.com/expertsalesforce/30min/">Talk to a Consultant</a>
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
                            <img src="{{asset('frontend/assets/images/contact-side-image.webp')}}" alt="contact-img"
                                class="contact-img">
                        </figure>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 order-md-0" data-aos="fade-up" data-aos-duration="600">
                    <form class="form-con contact-form w-100 frbg" data-aos="fade-up" data-aos-duration="600"
                        method="POST" id="contactpage"
                        action="https://webto.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8"
                        onsubmit="handleSubmit(event)">
                        <input type="hidden" name="oid" value="00D5i000002Qa7p">
                        <input type="hidden" name="retURL" value="https://delipat.com/thank-you">
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="form-input-div">
                                    <input type="text" placeholder="First Name" id="first_name" maxlength="40"
                                        name="first_name">
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-input-div">
                                    <input type="text" placeholder="Last Name" id="last_name" maxlength="80"
                                        name="last_name" size="20">
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="row">
                                    <div class="col-4 col-md-2">
                                        <select id="00N5i00000TVZps" class="form-field" name="00N5i00000TVZps"
                                            title="Country Code">
                                            <option value="" disabled >Select Country Code</option>
                                            <option value="+93	       Afghanistan">+93 Afghanistan</option>
                                            <option value="+355	Albania">+355 Albania</option>
                                            <option value="+213	Algeria">+213 Algeria</option>
                                            <option value="+1	       United States" selected>+1 United States</option>
                                            <option value="+376	Andorra">+376 Andorra</option>
                                            <option value="+244	Angola">+244 Angola</option>
                                            <option value="+1	       Antigua and Barbuda">+1 Antigua and Barbuda
                                            </option>
                                            <option value="+358	Finland">+358 Finland</option>
                                            <option value="+599	Aruba">+599 Aruba</option>
                                            <option value="+297	Ascension Island">+297 Ascension Island</option>
                                            <option value="+61	        Australia">+61 Australia</option>
                                            <option value="+43	        Austria">+43 Austria</option>
                                            <option value="+994	Azerbaijan">+994 Azerbaijan</option>
                                            <option value="+973	Bahrain">+973 Bahrain</option>
                                            <option value="+880	Bangladesh">+880 Bangladesh</option>
                                            <option value="+1	        Barbados">+1 Barbados</option>
                                            <option value="+375	Belarus">+375 Belarus</option>
                                            <option value="+32	        Belgium">+32 Belgium</option>
                                            <option value="+501	Belize">+501 Belize</option>
                                            <option value="+229	Benin">+229 Benin</option>
                                            <option value="+1	        Bermuda">+1 Bermuda</option>
                                            <option value="+975	Bhutan">+975 Bhutan</option>
                                            <option value="+591	Bolivia">+591 Bolivia</option>
                                            <option value="+387	Bosnia and Herzegovina">+387 Bosnia and Herzegovina
                                            </option>
                                            <option value="+267	Botswana">+267 Botswana</option>
                                            <option value="+55	        Brazil">+55 Brazil</option>
                                            <option value="+246	British Indian Ocean Territory">+246 British Indian
                                                Ocean Territory</option>
                                            <option value="+673	Brunei">+673 Brunei</option>
                                            <option value="+359	Bulgaria">+359 Bulgaria</option>
                                            <option value="+226	Burkina Faso">+226 Burkina Faso</option>
                                            <option value="+257	Burundi">+257 Burundi</option>
                                            <option value="+238	Cabo Verde">+238 Cabo Verde</option>
                                            <option value="+855	Cambodia">+855 Cambodia</option>
                                            <option value="+237	Cameroon">+237 Cameroon</option>
                                            <option value="+1	        Canada">+1 Canada</option>
                                            <option value="+236	Central African Republic">+236 Central African Republic
                                            </option>
                                            <option value="+235	Chad">+235 Chad</option>
                                            <option value="+56	       Chile">+56 Chile</option>
                                            <option value="+86	       China">+86 China</option>
                                            <option value="+57	       Colombia">+57 Colombia</option>
                                            <option value="+269	Comoros">+269 Comoros</option>
                                            <option value="+242	Congo, Democratic Republic of the">+242 Congo,
                                                Democratic Republic of the</option>
                                            <option value="+243	Congo, Republic of the">+243 Congo, Republic of the
                                            </option>
                                            <option value="+682	Cook Islands">+682 Cook Islands</option>
                                            <option value="+506	Costa Rica">+506 Costa Rica</option>
                                            <option value="+225	Côte d&#39;Ivoire">+225 Côte d&#39;Ivoire</option>
                                            <option value="+385	Croatia">+385 Croatia</option>
                                            <option value="+53	        Cuba">+53 Cuba</option>
                                            <option value="+599	Curaçao">+599 Curaçao</option>
                                            <option value="+357	Cyprus">+357 Cyprus</option>
                                            <option value="+420	Czech Republic">+420 Czech Republic</option>
                                            <option value="+251	Djibouti">+251 Djibouti</option>
                                            <option value="+46       	Sweden">+46 Sweden</option>
                                            <option value="+44    	United Kingdom">+44 United Kingdom</option>
                                            <option value="+253	Eritrea">+253 Eritrea</option>
                                            <option value="+372	Estonia">+372 Estonia</option>
                                            <option value="+254	Ethiopia">+254 Ethiopia</option>
                                            <option value="+503	El Salvador">+503 El Salvador</option>
                                            <option value="+233	Ghana">+233 Ghana</option>
                                            <option value="+350	Gibraltar">+350 Gibraltar</option>
                                            <option value="+299	Greenland">+299 Greenland</option>
                                            <option value="+220	Gambia">+220 Gambia</option>
                                            <option value="+224	Guinea">+224 Guinea</option>
                                            <option value="+245	Guinea-Bissau">+245 Guinea-Bissau</option>
                                            <option value="+500	Guyana">+500 Guyana</option>
                                            <option value="+354	Iceland">+354 Iceland</option>
                                            <option value="+91  	India">+91 India</option>
                                            <option value="+62  	Indonesia">+62 Indonesia</option>
                                            <option value="+98	        Iran">+98 Iran</option>
                                            <option value="+964	Iraq">+964 Iraq</option>
                                            <option value="+353	Ireland">+353 Ireland</option>
                                            <option value="+972	Israel">+972 Israel</option>
                                            <option value="+39  	Italy">+39 Italy</option>
                                            <option value="+221	Senegal">+221 Senegal</option>
                                            <option value="+258	Mozambique">+258 Mozambique</option>
                                            <option value="+962	Jordan">+962 Jordan</option>
                                            <option value="+7	         Kazakhstan">+7 Kazakhstan</option>
                                            <option value="+254	Kenya">+254 Kenya</option>
                                            <option value="+686	Kiribati">+686 Kiribati</option>
                                            <option value="+383	Kosovo">+383 Kosovo</option>
                                            <option value="+965	Kuwait">+965 Kuwait</option>
                                            <option value="+996	Kyrgyzstan">+996 Kyrgyzstan</option>
                                            <option value="+850	North Korea">+850 North Korea</option>
                                            <option value="+82	        South Korea">+82 South Korea</option>
                                            <option value="+963	Syria">+963 Syria</option>
                                            <option value="+967	Yemen">+967 Yemen</option>
                                            <option value="+268	Lesotho">+268 Lesotho</option>
                                            <option value="+370	Lithuania">+370 Lithuania</option>
                                            <option value="+352	Luxembourg">+352 Luxembourg</option>
                                            <option value="+856	Laos">+856 Laos</option>
                                            <option value="+371	Latvia">+371 Latvia</option>
                                            <option value="+218	Libya">+218 Libya</option>
                                            <option value="+423	Liechtenstein">+423 Liechtenstein</option>
                                            <option value="+961	Lebanon">+961 Lebanon</option>
                                            <option value="+266	Lesotho">+266 Lesotho</option>
                                            <option value="+231	Liberia">+231 Liberia</option>
                                            <option value="+212	Morocco">+212 Morocco</option>
                                            <option value="+261	Madagascar">+261 Madagascar</option>
                                            <option value="+389	North Macedonia">+389 North Macedonia</option>
                                            <option value="+265	Malawi">+265 Malawi</option>
                                            <option value="+60     	Malaysia">+60 Malaysia</option>
                                            <option value="+966	Saudi Arabia">+966 Saudi Arabia</option>
                                            <option value="+223	Mali">+223 Mali</option>
                                            <option value="+356	Malta">+356 Malta</option>
                                            <option value="+692	Marshall Islands">+692 Marshall Islands</option>
                                            <option value="+230	Mauritius">+230 Mauritius</option>
                                            <option value="+262	Mayotte">+262 Mayotte</option>
                                            <option value="+52	        Mexico">+52 Mexico</option>
                                            <option value="+691	Micronesia, Federated States of">+691 Micronesia,
                                                Federated States of</option>
                                            <option value="+373	Moldova">+373 Moldova</option>
                                            <option value="+377	Monaco">+377 Monaco</option>
                                            <option value="+378	Montenegro">+378 Montenegro</option>
                                            <option value="+216	Tunisia">+216 Tunisia</option>
                                            <option value="+90	         Turkey">+90 Turkey</option>
                                            <option value="+993	Turkmenistan">+993 Turkmenistan</option>
                                            <option value="+688	Tuvalu">+688 Tuvalu</option>
                                            <option value="+256	Uganda">+256 Uganda</option>
                                            <option value="+380	Ukraine">+380 Ukraine</option>
                                            <option value="+971	United Arab Emirates">+971 United Arab Emirates</option>
                                            <option value="+598	Uruguay">+598 Uruguay</option>
                                            <option value="+1	       US Virgin Islands">+1 US Virgin Islands</option>
                                            <option value="+92     	Pakistan">+92 Pakistan</option>
                                            <option value="+678	Vanuatu">+678 Vanuatu</option>
                                            <option value="+58	         Venezuela">+58 Venezuela</option>
                                            <option value="+681	Wallis and Futuna">+681 Wallis and Futuna</option>
                                            <option value="+262	Western Sahara">+262 Western Sahara</option>
                                            <option value="+968	Oman">+968 Oman</option>
                                            <option value="+255	Tanzania">+255 Tanzania</option>
                                            <option value="+676	Tonga">+676 Tonga</option>
                                            <option value="+228	Togo">+228 Togo</option>
                                            <option value="+670	East Timor">+670 East Timor</option>
                                            <option value="+976	Mongolia">+976 Mongolia</option>
                                            <option value="+252	Somalia">+252 Somalia</option>
                                            <option value="+239	São Tomé and Príncipe">+239 São Tomé and Príncipe
                                            </option>
                                            <option value="+381	Serbia">+381 Serbia</option>
                                            <option value="+260	Zambia">+260 Zambia</option>
                                        </select>
                                    </div>
                                    <div class="col-8 col-md-10 pl-0">
                                        <div class="form-input-div">

                                            <input placeholder="Your Phone Number" id="phone" maxlength="40"
                                                name="phone" size="20" type="tel">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-input-div">
                                    <input placeholder="email" id="email" maxlength="80" name="email" size="20"
                                        type="email">
                                </div>
                            </div>
                            <div class="col-md-12 col-12">
                                <div class="form-input-div">
                                    <textarea placeholder="Enter your message" name="description" id="description"
                                        rows="5" cols="50"></textarea>
                                </div>
                            </div>
                            <input type="hidden" id="00N5i00000TVZqC" name="00N5i00000TVZqC" value="DeliPat Home Page"
                                title="Lead Coming From">
                            <div class="col-12">
                                <div class="form-button-div">
                                    <input class="submit-btn" type="submit" name="Submit Now" id="submit"
                                        style="background: #013144; color: #fff; border: none; padding: 10px 20px; font-size: 16px; border-radius: 8px; cursor: pointer;">
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

       <!-- CONTACT-SECTION -->

    <!-- USER SECTION -->
    {{-- <x-you-tube-videos /> --}}

    <!-- USER SECTION -->

    <!-- BLOG SECTION -->
    <section class="w-100 float-left faq-box video-gradient-sec">
    <div class="container">
        <div class="blog-title text-center position-relative" data-aos="fade-up" data-aos-duration="600">
            <h2 class="main-header-h2" data-aos="fade-up" data-aos-duration="600">Frequently Asked Questions</h2>
        </div>
        <div class="aos-init aos-animate" data-aos="fade-up">
            <div class="row">
                @foreach ($service->faqs as $index => $faq)
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="accordion-section">
                            <div class="accordion" id="faqAccordion{{ $index + 1 }}">
                                <div class="accordion-card">
                                    <div class="accordion-header" id="heading{{ $index + 1 }}">
                                        <a href="#" class="accordion-btn collapsed" data-toggle="collapse"
                                            data-target="#collapse{{ $index + 1 }}" aria-expanded="false"
                                            aria-controls="collapse{{ $index + 1 }}">
                                            <h5>{{ $faq->question }}</h5>
                                        </a>
                                    </div>
                                    <div id="collapse{{ $index + 1 }}" class="collapse" aria-labelledby="heading{{ $index + 1 }}"
                                        data-parent="#faqAccordion{{ $index + 1 }}">
                                        <div class="accordion-body">
                                            <p>{{ $faq->answer }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

    <!-- BLOG SECTION -->
<style>
.item {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
}
.service-item {

    width: 360px;
    min-height: 470px;
    position: relative;
}
@media only screen and (max-width: 767px) {
    .service-item {
        min-height: 400px;
    }
}
    </style>
@endsection
