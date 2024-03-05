@extends('front.layout.main')
@section('title')
    <title>The Logic Hive: Web Design San Francisco for Small Business & Corporate</title>
@endsection

@section('content')
    <section class="hero hero-home">
        <span class="hero-overlay"></span>
        <div class="homepage-hero-module wow">
            <div class="video-container">
                <div class="filter"></div>
                <video autoplay loop class="fillWidth">
                    <source src="{{ asset('assets/videos/Mock-up.mp4') }}" type="video/mp4" />
                    Your browser does not support the video tag. I suggest you upgrade your browser.
                </video>
                <div class="poster hidden"> <img src="{{ asset('assets/videos/Mock-up.jpg')}}') }}" alt=""> </div>
            </div>
        </div>
        <div class="container">
            <div class="d_t">
                <div class="d_c">

                    <h4 class=" wow fadeInDown" data-wow-delay="0.2s">We Build Brands</h4>
                    <h3 class=" wow fadeInDown" data-wow-delay="0.4s">Web Design Agency<br> & Best Branding Solutions</h3>
                    <p class=" wow fadeInDown" data-wow-delay="0.6s">We help brand to transform their vision into brand
                        identity
                        with Professional web design services. <br> The Logic Hive is leading Web Design Agency in USA, UK
                        and
                        around the globe that offers quality work to help customers <br> in developing strong online
                        presence and
                        maintain reputation. </p>
                    <div class="actions wow fadeInDown" data-wow-delay="0.8s"> <a onclick="$zopim.livechat.window.toggle()"
                            style="cursor: pointer;" class="btn-fill"> Let's Get Started </a></div>
                </div>
            </div>
            <span class="scroll-btn"> <a href="#GlobalClients"> <span class="mouse"> <span> </span> </span> </a> </span>
        </div>
    </section>

    <section id="faq" class="section-padding clients-answer wow fadeInDown" data-wow-delay="0.2s">
        <div class="container">
            <div class="clearfix">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 fadeInDown">
                    <div class="client-drop">
                        <h4 class="text-left"><span class="pur">Frequently Asked Questions</span></h4>
                        <select class="cs-select cs-skin-elastic clients-answer-inner">
                            <option value="" disabled selected>What do you need help with?</option>
                            <option value="clients-1" data-class="faq-opt">What is The Logic Hive?</option>
                            <option value="clients-2" data-class="faq-opt">What services do you provide?</option>
                            <option value="clients-3" data-class="faq-opt">Are there any limitations geographically for
                                clients?
                            </option>
                            <option value="clients-4" data-class="faq-opt">Can I discuss my ideas or will the agency handle
                                all that?
                            </option>
                            <option value="clients-5" data-class="faq-opt">Will there be a communication gap?</option>
                            <option value="clients-6" data-class="faq-opt">How soon can your agency get started on my
                                project?
                            </option>
                            <option value="clients-7" data-class="faq-opt">Are there any packages that I can avail?</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                    <div class="clients-sec">
                        <div class="faq-sections wow fadeInDown">
                            <div class="clients-1">
                                <h4>What is The Logic Hive?</h4>
                                The Logic Hive is the best creative digital agency providing best customer services in
                                overall online
                                branding industry. They are located in in San Francisco, California but serving customer in
                                all regions
                                of US and also have corporate around the world. Our huge services line include delivering
                                logo and till
                                online digital marketing solutions till tracking and reporting of projects.
                            </div>
                            <div class="clients-2">
                                <h4>What services do you provide?</h4>
                                At The Logic Hive, we provide you with nothing but the best range of services from web
                                design and
                                development to stationary design and even social media marketing solutions along with
                                hundreds of other
                                services. We’re a 360-degree digital marketing agency that provides all solutions to its
                                clients all
                                over the world in 14 different countries.
                            </div>
                            <div class="clients-3">
                                <h4>Are there any limitations geographically for clients?</h4>
                                No, there isn’t. Our experts work with clients and customers all over the world. We’ve
                                worked with
                                clients all over the planet and have successfully transformed them into better corporations
                                in general.
                                Our team’s mission is for a perfectly digital planet and for that we like to work with
                                international
                                corporations all the time.
                            </div>
                            <div class="clients-4">
                                <h4>Can I discuss my ideas or will the agency handle all that?</h4>
                                We encourage our clients into putting forward unique and out of the box ideas helping them
                                stand out
                                against their competitors. We’re a group of thinkers that like to pitch in to creativity
                                ourselves as
                                well but would love to work on your idea if you have one.
                            </div>
                            <div class="clients-5">
                                <h4>Will there be a communication gap?</h4>
                                Our experts here at The Logic Hive are strong in communication with the client. This is one
                                of the
                                many reasons why we offer 24/7 client coordination on every project we take over.
                                Additionally, we are
                                fluent in the most spoken global language on the planet, i.e. English to communicate freely
                                with clients
                                all over the planet.
                            </div>
                            <div class="clients-6">
                                <h4>How soon can your agency get started on my project?</h4>
                                We love to do things quickly and with just the right balance. We can start working on your
                                project right
                                away. All you’ll have to do is call us and discuss your project or book a call and let us
                                call you back.
                                After we’ve discussed the brief and your requirements, it’s time to hand over the project to
                                our team
                                and we’ll provide you with a project timeline. It is that easy!
                            </div>
                            <div class="clients-7">
                                <h4>Are there any packages that I can avail?</h4>
                                Of course! You can find our packages and combo packages on their respective pages. If you
                                can’t find
                                anything suitable for yourself, we can always prepare a custom quote for your project.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding clients-section wow" id="GlobalClients">
        <div class="container">
            <div class="comp-symbol text-center wow fadeInDown" data-wow-delay="0.1s"><img src="{{asset('assets/img/logo-symbol.png')}}"> </div>
            <h3 class="text-center wow fadeInDown" data-wow-delay="0.2s">Web Designs Services by Professional for Local
                Businesses & Global Corporations</h3>
            <p class="text-center wow fadeInDown" data-wow-delay="0.4s">We entertain corporates, small and large scale
                businesses and achieving success in almost all professions including IT technology, management, academics,
                international and local businesses website design solution in US.</p>
        </div>
        <div class="container-wrap">
            <div class="clients wow fadeInDown" data-wow-delay="0.8s">
                <section class="client-slider slider">
                    <div> <img src="{{asset('assets/img/clients/clients01.png')}}"> </div>
                    <div> <img src="{{asset('assets/img/clients/clients02.png')}}"> </div>
                    <div> <img src="{{asset('assets/img/clients/clients03.png')}}"> </div>
                    <div> <img src="{{asset('assets/img/clients/clients04.png')}}"> </div>
                    <div> <img src="{{asset('assets/img/clients/clients05.png')}}"> </div>
                    <div> <img src="{{asset('assets/img/clients/clients06.png')}}"> </div>
                    <div> <img src="{{asset('assets/img/clients/clients07.png')}}"> </div>
                    <div> <img src="{{asset('assets/img/clients/clients08.png')}}"> </div>
                </section>
            </div>
        </div>
    </section>

    <div class="packages_fold wow">
        <section class="section-padding supreme">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h2 class=" wow fadeInDown" data-wow-delay="0.2s">Offering web design at Affordable<br> Prices with
                            unique
                            Packages</h2>
                        <p class=" wow fadeInDown" data-wow-delay="0.4s">It’s our priority to serve the industry with the
                            best
                            possible services at the cheapest prices. Our conceptual and creative work is already rocking
                            the industry
                            and we provide you with the best possible web design at affordable prices and economical
                            packages in San
                            Francisco, Austin, California and other regions of US.</p>
                        <div class="actions wow fadeInDown clearfix" data-wow-delay="0.6s"><a href="packages.html"
                                class="btn-fill pull-left"><i class="fa fa-play" aria-hidden="true"></i> FIND MORE
                                PACKAGES</a> <a onclick="$zopim.livechat.window.toggle()" style="cursor: pointer;"
                                class="btn-line-fill ali-fill pull-left">Let's Get Started </a></div>
                    </div>
                    <div class="col-md-4 no-xs wow fadeInDown" data-wow-delay="0.2s">
                        <div class="badge-guranteed"><img class="packages" src="{{asset('assets/img/d.png')}}"></div>
                    </div>
                </div>
        </section>

        <div class="package_slide_wrap packages_wrap_home">
            <div class="container">

                <section id="customer_examples"
                    class="section section--contest_table section-padding pricing wow fadeInDown" data-wow-delay="0.8s">
                    <div>
                        <div>
                            <div class="contest-list contest-list--scrollable package-slider">
                                <div class="contest-list__item">
                                    <div class="contest">
                                        <div class="single best-seller">
                                            <h3>Professional Logo<br /> Packages</h3> <span
                                                class="old-price">$248<small>.00</small> ONLY <i class="cut"></i></span>
                                            <span class="price">$124<small>.00</small> USD</span>
                                            <p>Suitable for potential super-startups and brand revamps for companies.</p>
                                            <ul>
                                                <li><i class="fa fa-check-circle-o"></i>UNLIMITED Logo Design Concepts</li>
                                                <li><i class="fa fa-check-circle-o"></i>By 3 Designers</li>
                                                <li><i class="fa fa-check-circle-o"></i>UNLIMITED Revisions</li>
                                                <li><i class="fa fa-check-circle-o"></i>FREE Stationary Design Set</li>
                                                <li><i class="fa fa-check-circle-o"></i>FREE MS Word Letterhead</li>
                                                <li><i class="fa fa-check-circle-o"></i>48 to 72 hours TAT</li>
                                                <li><i class="fa fa-check-circle-o"></i>All Final Files Format (AI, PSD,
                                                    EPS, PNG, GIF, JPG,
                                                    PDF)</li>
                                                <li><i class="fa fa-check-circle-o"></i>100% Ownership Rights</li>
                                                <li><i class="fa fa-check-circle-o"></i>100% Satisfaction Guarantee</li>
                                                <li><i class="fa fa-check-circle-o"></i>100% Unique Design Guarantee</li>
                                                <li><i class="fa fa-check-circle-o"></i>100% Money Back Guarantee *</li>
                                                <li><i class="fa fa-check-circle-o"></i>15% Discount on your next order</li>
                                            </ul>
                                            <p class="text-center">Add on: <span class="pink sea">$50</span> for 24 Hours
                                                Rush Delivery</p>
                                            <div class="clearfix order-action">
                                                <input class="btn-line-fill"
                                                    onclick="window.location.href='order/logo/PROFESSIONAL%20LOGO%20PACKAGE/124.html'"
                                                    type="submit" value="ORDER NOW" tabindex="0">
                                            </div><span class="inclusive-black"><a
                                                    href="package/Professional-Logo-Package.html">VIEW
                                                    DETAILS</a> </span>
                                            <div class="actions row">
                                                <div class="col-md-6 col-xs-6"><a class="action-no gre clearfix">
                                                        <span><small>Share your
                                                                idea?</small>{{$phoneNumber}}</span></a></div>
                                                <div class="col-md-6 col-xs-6"><a
                                                        onclick="$zopim.livechat.window.toggle()"
                                                        class="action-chat ali clearfix pull-right" tabindex="0">
                                                        <span><small>Want to
                                                                discuss?</small> Live Chat Now</span></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="contest-list__item">
                                    <div class="contest">
                                        <div class="single ">
                                            <h3>Basic Website<br /> Packages</h3> <span
                                                class="old-price">$488<small>.00</small> ONLY <i
                                                    class="cut"></i></span> <span class="price">$244<small>.00</small>
                                                USD</span>
                                            <p>Suitable for potential super-startups and brand revamps for companies.</p>
                                            <ul>
                                                <li><i class="fa fa-check-circle-o"></i>2 Stock Images</li>
                                                <li><i class="fa fa-check-circle-o"></i>3 Page Website</li>
                                                <li><i class="fa fa-check-circle-o"></i>1 jQuery Slider Banner</li>
                                                <li><i class="fa fa-check-circle-o"></i>Contact/Query Form</li>
                                                <li><i class="fa fa-check-circle-o"></i>Complete W3C Certified HTML</li>
                                                <li><i class="fa fa-check-circle-o"></i>48 to 72 hours TAT</li>
                                                <li><i class="fa fa-check-circle-o"></i>Complete Deployment</li>
                                                <li><i class="fa fa-check-circle-o"></i>100% Satisfaction Guarantee</li>
                                                <li><i class="fa fa-check-circle-o"></i>100% Unique Design Guarantee</li>
                                                <li><i class="fa fa-check-circle-o"></i>100% Money Back Guarantee *</li>
                                            </ul>
                                            <p class="text-center">Add on: <span class="pink sea">$50</span> for 24 Hours
                                                Rush Delivery</p>
                                            <div class="clearfix order-action text-center">
                                                <input class="btn-line-fill"
                                                    onclick="window.location.href='order/web/BASIC%20WEBSITE%20PACKAGE/244.html'"
                                                    type="submit" value="ORDER NOW" tabindex="0">
                                            </div><span class="inclusive-black"><a
                                                    href="package/Start-Up-Website-Package.html">VIEW
                                                    DETAILS</a> </span>
                                            <div class="actions row">
                                                <div class="col-md-6 col-xs-6"><a class="action-no gre clearfix">
                                                        <span><small>Share your
                                                                idea?</small>{{$phoneNumber}}</span></a></div>
                                                <div class="col-md-6 col-xs-6"><a
                                                        onclick="$zopim.livechat.window.toggle()"
                                                        class="action-chat ali clearfix pull-right" tabindex="0">
                                                        <span><small>Want to
                                                                discuss?</small> Live Chat Now</span></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="contest-list__item">
                                    <div class="contest">
                                        <div class="single ">
                                            <h3>Startup Video <br />
                                                packages</h3>
                                            <span class="old-price">$1,598<small>.00</small> ONLY <i
                                                    class="cut"></i></span> <span class="price">$499<small>.00</small>
                                                USD</span>
                                            <p>Suitable for potential super-startups and brand revamps for companies.</p>
                                            <ul>
                                                <li><i class="fa fa-check-circle-o"></i>30 Second Video</li>
                                                <li><i class="fa fa-check-circle-o"></i>Professional Script</li>
                                                <li><i class="fa fa-check-circle-o"></i>Storyboard</li>
                                                <li><i class="fa fa-check-circle-o"></i>Animation</li>
                                                <li><i class="fa fa-check-circle-o"></i>Voice - Over & Sound Effects</li>
                                                <li><i class="fa fa-check-circle-o"></i>4 weeks Delivery</li>
                                                <li><i class="fa fa-check-circle-o"></i>Unlimited Revisions</li>
                                            </ul>
                                            <p class="text-center">Add on: <span class="pink sea">$500</span> for
                                                expedited services</p>
                                            <div class="clearfix order-action text-center">
                                                <input class="btn-line-fill"
                                                    onclick="window.location.href='order/packagevideo/STARTUP%20VIDEO%20PACKAGE/499.html'"
                                                    type="submit" value="ORDER NOW" tabindex="0">
                                            </div>
                                            <span class="inclusive-black"><a
                                                    href="package/Video-Startup-Package.html">VIEW DETAILS</a>
                                            </span>
                                            <div class="actions row">
                                                <div class="col-md-6 col-xs-6"><a class="action-no gre clearfix">
                                                        <span><small>Share your
                                                                idea?</small>{{$phoneNumber}}</span></a></div>
                                                <div class="col-md-6 col-xs-6"><a
                                                        onclick="$zopim.livechat.window.toggle()"
                                                        class="action-chat ali clearfix pull-right" tabindex="0">
                                                        <span><small>Want to
                                                                discuss?</small> Live Chat Now</span></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="contest-list__item">
                                    <div class="contest">
                                        <div class="single ">
                                            <h3>Basic Logo <br />Package</h3>
                                            <span class="old-price">$88<small>.00</small> ONLY <i
                                                    class="cut"></i></span> <span class="price">$44<small>.00</small>
                                                USD</span>
                                            <p>Suitable for potential super-startups and brand revamps for companies.</p>
                                            <ul>
                                                <li><i class="fa fa-check-circle-o"></i>3 Custom Logo Design Concepts</li>
                                                <li><i class="fa fa-check-circle-o"></i>1 Dedicated Designer</li>
                                                <li><i class="fa fa-check-circle-o"></i>4 Revisions</li>
                                                <li><i class="fa fa-check-circle-o"></i>48 to 72 hours TAT</li>
                                                <li><i class="fa fa-check-circle-o"></i>All Final Files Format (AI, PSD,
                                                    EPS, PNG, GIF, JPG,
                                                    PDF)</li>
                                                <li><i class="fa fa-check-circle-o"></i>100% Unique Design Guarantee</li>
                                                <li><i class="fa fa-check-circle-o"></i>100% Satisfaction Guarantee</li>
                                                <li><i class="fa fa-check-circle-o"></i>100% Money Back Guarantee *</li>
                                                <li><i class="fa fa-check-circle-o"></i>100% Ownership Rights</li>
                                            </ul>
                                            <p class="text-center">Add on: <span class="pink sea">$50</span> for 24 Hours
                                                Rush Delivery</p>
                                            <div class="clearfix order-action text-center">
                                                <input class="btn-line-fill"
                                                    onclick="window.location.href='order/logo/BASIC%20LOGO%20PACKAGE/44.html'"
                                                    type="submit" value="ORDER NOW" tabindex="0">
                                            </div>
                                            <span class="inclusive-black"><a href="package/Basic-Logo-Package.html">VIEW
                                                    DETAILS</a> </span>
                                            <div class="actions row">
                                                <div class="col-md-6 col-xs-6"><a class="action-no gre clearfix">
                                                        <span><small>Share your
                                                                idea?</small>{{$phoneNumber}}</span></a></div>
                                                <div class="col-md-6 col-xs-6"><a
                                                        onclick="$zopim.livechat.window.toggle()"
                                                        class="action-chat ali clearfix pull-right" tabindex="0">
                                                        <span><small>Want to
                                                                discuss?</small> Live Chat Now</span></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="contest-list__item">
                                    <div class="contest">
                                        <div class="single">
                                            <h3>Elite Logo <br />package</h3>
                                            <span class="old-price">$348<small>.00</small> ONLY <i
                                                    class="cut"></i></span> <span class="price">$174<small>.00</small>
                                                USD</span>
                                            <p>Suitable for potential super-startups and brand revamps for companies.</p>
                                            <ul>
                                                <li><i class="fa fa-check-circle-o"></i>UNLIMITED Logo Design Concepts</li>
                                                <li><i class="fa fa-check-circle-o"></i>By 5 Design Artist</li>
                                                <li><i class="fa fa-check-circle-o"></i>FREE Stationary Design Set</li>
                                                <li><i class="fa fa-check-circle-o"></i>UNLIMITED Revisions</li>
                                                <li><i class="fa fa-check-circle-o"></i>FREE MS Word Letterhead</li>
                                                <li><i class="fa fa-check-circle-o"></i>Free Email Signature</li>
                                                <li><i class="fa fa-check-circle-o"></i>All Final Files Format (AI, PSD,
                                                    EPS, PNG, GIF, JPG,
                                                    PDF)</li>
                                                <li><i class="fa fa-check-circle-o"></i>100% Ownership Rights</li>
                                                <li><i class="fa fa-check-circle-o"></i>100% Satisfaction Guarantee</li>
                                                <li><i class="fa fa-check-circle-o"></i>100% Unique Design Guarantee</li>
                                                <li><i class="fa fa-check-circle-o"></i>100% Money Back Guarantee *</li>
                                                <li><i class="fa fa-check-circle-o"></i>48 to 72 hours TAT</li>
                                                <li><i class="fa fa-check-circle-o"></i>15% Discount on your next order
                                                </li>
                                            </ul>
                                            <p class="text-center">Add on: <span class="pink sea">$50</span> for 24 Hours
                                                Rush Delivery</p>
                                            <div class="clearfix order-action">
                                                <input class="btn-line-fill"
                                                    onclick="window.location.href='order/logo/ELITE%20LOGO%20PACKAGE/174.html'"
                                                    type="submit" value="ORDER NOW" tabindex="0">
                                            </div>
                                            <span class="inclusive-black"><a href="package/Elite-Logo-Package.html">VIEW
                                                    DETAILS</a> </span>
                                            <div class="actions row">
                                                <div class="col-md-6 col-xs-6"><a class="action-no gre clearfix">
                                                        <span><small>Share your
                                                                idea?</small>{{$phoneNumber}}</span></a></div>
                                                <div class="col-md-6 col-xs-6"><a
                                                        onclick="$zopim.livechat.window.toggle()"
                                                        class="action-chat ali clearfix pull-right" tabindex="0">
                                                        <span><small>Want to
                                                                discuss?</small> Live Chat Now</span></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="contest-list__item">
                                    <div class="contest" id="conttwo">
                                        <div class="single">

                                            <h3>Startup Website<br />
                                                packages</h3>
                                            <span class="old-price">$788<small>.00</small> ONLY <i
                                                    class="cut"></i></span> <span class="price">$394<small>.00</small>
                                                USD</span>
                                            <p>Suitable for potential super-startups and brand revamps for companies.</p>
                                            <a href="javascript:;" id="cltwo" class="clanchor">Click Here To See More
                                                Detail</a>
                                            <div class="wrap">
                                                <ul>
                                                    <li><i class="fa fa-check-circle-o"></i>5 Stock Photos</li>
                                                    <li><i class="fa fa-check-circle-o"></i>5 Page Website</li>
                                                    <li><i class="fa fa-check-circle-o"></i>3 Banner Design</li>
                                                    <li><i class="fa fa-check-circle-o"></i>1 jQuery Slider Banner</li>
                                                    <li><i class="fa fa-check-circle-o"></i>FREE Google Friendly Sitemap
                                                    </li>
                                                    <li><i class="fa fa-check-circle-o"></i>Complete W3C Certified HTML
                                                    </li>
                                                    <li><i class="fa fa-check-circle-o"></i>48 to 72 hours TAT</li>
                                                    <li><i class="fa fa-check-circle-o"></i>100% Satisfaction Guarantee
                                                    </li>
                                                    <li><i class="fa fa-check-circle-o"></i>100% Unique Design Guarantee
                                                    </li>
                                                    <li><i class="fa fa-check-circle-o"></i>100% Money Back Guarantee *
                                                    </li>
                                                    <li><i class="fa fa-check-circle-o"></i>Mobile Responsive will be
                                                        Additional $200*</li>
                                                    <li><i class="fa fa-check-circle-o"></i>CMS will be Additional $250*
                                                    </li>
                                                </ul>
                                                <p class="text-center">Add on: <span class="pink sea">$500</span> for
                                                    expedited services</p>
                                                <div class="clearfix order-action">
                                                    <input class="btn-line-fill"
                                                        onclick="window.location.href='order/web/STARTUP%20WEBSITE%20PACKAGE/394.html'"
                                                        type="submit" value="ORDER NOW" tabindex="0">
                                                </div>
                                                <span class="inclusive-black"><a
                                                        href="package/Start-Up-Website-Package.html">VIEW DETAILS</a>
                                                </span>
                                                <div class="actions row">
                                                    <div class="col-md-6 col-xs-6"><a class="action-no gre clearfix">
                                                            <span><small>Share your
                                                                    idea?</small>{{$phoneNumber}}</span></a></div>
                                                    <div class="col-md-6 col-xs-6"><a
                                                            onclick="$zopim.livechat.window.toggle()"
                                                            class="action-chat ali clearfix pull-right" tabindex="0">
                                                            <span><small>Want to
                                                                    discuss?</small> Live Chat Now</span></a></div>
                                                </div>
                                            </div>
                                            <a href="tel:18669768874" class="showcall" tabindex="0"> Call Now</a>
                                        </div>
                                    </div>
                                </div>


                                <div class="contest-list__item">
                                    <div class="contest">
                                        <div class="single ">
                                            <h3>Basic Combo <br>
                                                Package</h3>
                                            <span class="old-price">$1,288<small>.00</small> ONLY <i
                                                    class="cut"></i></span> <span class="price">$644<small>.00</small>
                                                USD</span>
                                            <p>Suitable for potential super-startups and brand revamps for companies.</p>
                                            <ul>
                                                <li><i class="fa fa-check-circle-o"></i>5 Custom Logo Design Concepts</li>
                                                <li><i class="fa fa-check-circle-o"></i>By 2 Designers</li>
                                                <li><i class="fa fa-check-circle-o"></i> Icon Design</li>
                                                <li><i class="fa fa-check-circle-o"></i>Business Card, Letterhead,
                                                    Envelope, Fax Template</li>
                                                <li><i class="fa fa-check-circle-o"></i>MS Word Letterhead</li>
                                                <li><i class="fa fa-check-circle-o"></i>5 Page Website</li>
                                                <li><i class="fa fa-check-circle-o"></i>Mobile Responsive</li>
                                                <li><i class="fa fa-check-circle-o"></i>Team of Expert Designers &
                                                    Developers</li>
                                                <li><i class="fa fa-check-circle-o"></i>8 Stock images</li>
                                                <li><i class="fa fa-check-circle-o"></i>5 Banner Designs</li>
                                                <li><i class="fa fa-check-circle-o"></i>jQuery Sliders</li>
                                                <li><i class="fa fa-check-circle-o"></i>Free Google Friendly Sitemap</li>
                                                <li><i class="fa fa-check-circle-o"></i>Complete W3C Certified HTML</li>
                                                <li><i class="fa fa-check-circle-o"></i>Complete Deployment</li>
                                                <li><i class="fa fa-check-circle-o"></i>Facebook Page Design</li>
                                                <li><i class="fa fa-check-circle-o"></i>All Final File Formats</li>
                                                <li><i class="fa fa-check-circle-o"></i>Dedicated Account Manager</li>
                                                <li><i class="fa fa-check-circle-o"></i>100% Ownership Rights</li>
                                                <li><i class="fa fa-check-circle-o"></i>100% Satisfaction Guarantee</li>
                                                <li><i class="fa fa-check-circle-o"></i>100% Unique Design Guarantee</li>
                                                <li><i class="fa fa-check-circle-o"></i>100% Money Back Guarantee *</li>
                                            </ul>
                                            <p class="text-center">Add on: <span class="pink sea">$500</span> for
                                                expedited services</p>
                                            <div class="clearfix order-action text-center">
                                                <input class="btn-line-fill"
                                                    onclick="window.location.href='order/combo/BASIC%20COMBO%20PACKAGE/644.html'"
                                                    type="submit" value="ORDER NOW" tabindex="0">
                                            </div>
                                            <span class="inclusive-black"><a href="package/Basic-Combo-Package.html">VIEW
                                                    DETAILS</a> </span>
                                            <div class="actions row">
                                                <div class="col-md-6 col-xs-6"><a class="action-no gre clearfix">
                                                        <span><small>Share your
                                                                idea?</small>{{$phoneNumber}}</span></a></div>
                                                <div class="col-md-6 col-xs-6"><a
                                                        onclick="$zopim.livechat.window.toggle()"
                                                        class="action-chat ali clearfix pull-right" tabindex="0">
                                                        <span><small>Want to
                                                                discuss?</small> Live Chat Now</span></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>
    <div class="section-padding branding-package branding-cust multiply wow">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-6 col-sm-6 col-xs-12 sec-combo">
                    <h3 class="wow fadeInDown" data-wow-delay="0.2s">Web Design Solutions<br> for Startups,<br> Corporate
                        &
                        Enterprises</h3>
                    <p class="margin-bottom-40 wow fadeInDown" data-wow-delay="0.4s">Corporate web design express a large
                        &
                        professional business that has integrity, huge following and authority within and outside the
                        industry. Our
                        web designing company has a team of expert and professional designers ready to work on your brand at
                        any
                        time. Especially, for companies looking to revamp or searching for brand development from the
                        scratch. Our
                        professional will make sure to perfectly cater all your requirements and desires under shortest
                        timeframe
                        and serve you with best quality work. <br><br>Our team of experts focus on customer satisfaction and
                        consider it as an ultimate goal of our organization. This is one of the many reasons why our work is
                        globally admired and recognized by many famous brands.</p>
                    <div class="actions text-center margin-top-20 wow fadeInDown" data-wow-delay="0.6s"><a
                            onclick="$zopim.livechat.window.toggle()" style="cursor: pointer;"
                            class="btn-fill-white pull-left">Let's
                            Get Started</a></div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 sec-combo-two wow fadeInDown" data-wow-delay="0.2s">
                    <div class="single ">
                        <h4>Branding Package</h4>
                        <h3>Start Up Combo</h3>
                        <p>Companies that require comprehensive branding solution.</p>
                        <span class="old-price">$1,988<small>.00</small> ONLY <i class="cut"></i></span> <span
                            class="price">$994<small>.00</small></span>
                        <ul>
                            <li><i class="fa fa-check-circle-o"></i>Unlimited Custom Logo Design Concepts</li>
                            <li><i class="fa fa-check-circle-o"></i>6 Dedicated Designers</li>
                            <li><i class="fa fa-check-circle-o"></i>UNLIMITED Pages Website</li>
                            <li><i class="fa fa-check-circle-o"></i>Mobile Responsive</li>
                            <li><i class="fa fa-check-circle-o"></i>Icon Design</li>
                            <li><i class="fa fa-check-circle-o"></i>Business Card, Letterhead, Envelope</li>
                            <li><i class="fa fa-check-circle-o"></i>MS Word Letterhead</li>
                            <li><i class="fa fa-check-circle-o"></i>5 Stock Photos + 3 Banner Designs</li>
                            <li><i class="fa fa-check-circle-o"></i>Complete W3C Certified HTML</li>
                            <li><i class="fa fa-check-circle-o"></i>Complete Deployment</li>
                            <li><i class="fa fa-check-circle-o"></i>Facebook Page Design</li>
                            <li><i class="fa fa-check-circle-o"></i>All Final File Formats</li>
                            <li><i class="fa fa-check-circle-o"></i>Dedicated Account Manager</li>
                            <li><i class="fa fa-check-circle-o"></i>100% Ownership Rights</li>
                            <li><i class="fa fa-check-circle-o"></i>100% Satisfaction Guarantee</li>
                            <li><i class="fa fa-check-circle-o"></i>100% Unique Design Guarantee</li>
                            <li><i class="fa fa-check-circle-o"></i>100% Money Back Guarantee</li>
                        </ul>
                        <div class="clearfix order-action"> <input class="btn-fill-white"
                                onclick="window.location.href='order/branding/Start%20Up%20Combo/994.html'" type="submit"
                                value="ORDER NOW" tabindex="0"> </div>
                        <p class="text-center">Add on: <span class="sea">$50</span> for 24 Hours Rush Delivery</p>
                        <span class="inclusive-black"><a href="package/Start-Up-Combo-Package.html">VIEW DETAILS</a>
                        </span>
                        <div class="actions clearfix"> <a class="action-no gre clearfix"> <span
                                    class="icon-support"></span>
                                <span><small>Share your idea?</small>1.866.978.6636 <small
                                        class="border-right"></small></span> </a> <a
                                onclick="$zopim.livechat.window.toggle()" class="action-chat ali clearfix pull-right"
                                tabindex="0">
                                <span class="icon-chat"></span> <span><small>Want to discuss?</small> Live Chat
                                    Now</span></a> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="section-padding qualities wow">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <h3 class="wow fadeInDown" data-wow-delay="0.2s">Solutions That Make The World Revolve</h3>
                    <p class="text-center wow fadeInDown" data-wow-delay="0.4s">Our team of experts focus on client and
                        customer
                        satisfaction as the ultimate goal for our projects. <br>This is one of the many reasons why our work
                        is
                        globally acclaimed and recognized.</p>
                </div>
            </div>
            <div class="row margin-bottom-20 margin-top-20 quick-contact-slider wow fadeInDown" data-wow-delay="0.6s">

                <div class="col-md-2 col-lg-2 col-sm-2 col-xs-12">

                    <div class="quality">

                        <div class="quality-img-edit"><img src="{{asset('assets/img/Constant-Client-Coordination.png')}}" alt="100% icon">
                        </div>
                        <h4>01. 24/7 Client <br>Coordination</h4>
                        <p>We’re always in contact with our clients keeping them in loop with everything that our team is
                            working
                            on.</p>
                    </div>


                </div>
                <div class="col-md-2 col-lg-2 col-sm-2 col-xs-12">
                    <div class="quality">

                        <div class="quality-img-edit"><img src="{{asset('assets/img/Customer-Satisfaction.png')}}" alt="100% icon"></div>
                        <h4>02. Goal-Oriented <br>Projects</h4>
                        <p>Our team focuses mostly on achieving targets and creating results that directly affect the ROI of
                            the
                            project.</p>
                    </div>
                </div>
                <div class="col-md-2 col-lg-2 col-sm-2 col-xs-12">
                    <div class="quality">

                        <div class="quality-img-edit"><img src="{{asset('assets/img/Ownership-Rights.png')}}" alt="100% icon"></div>
                        <h4>03. 100% Ownership <br>Rights</h4>
                        <p>We work side by side with clients at all times and provide them 100% ownership rights after the
                            project
                            is complete.</p>
                    </div>
                </div>
                <div class="col-md-2 col-lg-2 col-sm-2 col-xs-12">
                    <div class="quality">

                        <div class="quality-img-edit"><img src="{{asset('assets/img/Secure-Money-Back-Guarantee.png')}}" alt="100% icon">
                        </div>
                        <h4>04. Secure Money Back Guarantee</h4>
                        <p>Even though we have a 97% satisfaction rate, we provide our customers with a secure money back
                            guarantee.
                        </p>
                    </div>
                </div>
                <div class="col-md-2 col-lg-2 col-sm-2 col-xs-12">
                    <div class="quality">

                        <div class="quality-img-edit"><img src="{{asset('assets/img/Industry-Proven-Professionals.png')}}" alt="100% icon">
                        </div>
                        <h4>05. Renowned and Recognized Experts</h4>
                        <p>Our team of experts has made its mark all over the industry and has worked with some of the
                            biggest
                            corporations worldwide.</p>
                    </div>
                </div>

            </div>

            <div class="actions wow fadeInDown text-center" data-wow-delay="0.6s"><a href="Get-a-Free-Quote.html"
                    class="btn-fill ">Get a free quote</a> <a onclick="$zopim.livechat.window.toggle()"
                    style="cursor: pointer;" class="btn-line-fill ali-fill ">Want to Discuss </a></div>



        </div>
    </section>
    <div class="section-padding portfolio_fold wow">
        <div class="container">
            <h3 class="wow fadeInDown" data-wow-delay="0.2s">Satisfied Services to Over 4000+ Global Clientele</h3>
            <p class="text-center wow fadeInDown" data-wow-delay="0.4s">Excellency can’t be succeeded without working
                alongside with amazing customers around the globe. Your Brand website Design by Professional Agency is Just
                a
                Click Away to become our satisfied customer.</p>
        </div>
        <div class="clearfix portfolio">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
                    <div class="filter-wrapper ">
                        <div class="cbp-l-filters-buttonCenter clearfix js-filters-mosaic-flat no-xs">
                            <div class="filter-industry">
                                <div data-filter="*" id="filter-industry"
                                    class="cbp-filter-item-active cbp-filter-item all-btn"> All
                                </div>
                                <div data-filter=".abstract" class="cbp-filter-item"> Abstract </div>
                                <div data-filter=".accounting" class="cbp-filter-item"> Accounting</div>
                                <div data-filter=".agriculture" class="cbp-filter-item"> Agriculture </div>
                                <div data-filter=".artphotography" class="cbp-filter-item"> Art & Photography </div>
                                <div data-filter=".automotive" class="cbp-filter-item"> Automotive</div>
                                <div data-filter=".consultancy" class="cbp-filter-item"> Business and Consultancy </div>
                                <div data-filter=".fundst" class="cbp-filter-item"> Charity and Fundst </div>
                                <div data-filter=".garments" class="cbp-filter-item"> Clothing and Garments </div>
                                <div data-filter=".communication" class="cbp-filter-item"> Communication </div>
                                <div data-filter=".construction" class="cbp-filter-item"> Construction </div>
                                <div data-filter=".medical" class="cbp-filter-item"> Medical and Drug </div>
                                <div data-filter=".ecommerce" class="cbp-filter-item"> E-Commerce and Retail </div>
                                <div data-filter=".education" class="cbp-filter-item"> Education </div>
                                <div data-filter=".electronic" class="cbp-filter-item"> Electronic </div>
                                <div data-filter=".entertainment" class="cbp-filter-item"> Entertainment </div>
                                <div data-filter=".management" class="cbp-filter-item"> Event Management </div>
                                <div data-filter=".studio" class="cbp-filter-item"> Film and Studio </div>
                                <div data-filter=".restaurant" class="cbp-filter-item"> Food and Restaurant </div>
                                <div data-filter=".technology" class="cbp-filter-item"> Information Technology </div>
                                <div data-filter=".justice" class="cbp-filter-item"> Law and Justice </div>
                                <div data-filter=".networking" class="cbp-filter-item"> Networking </div>
                            </div>
                        </div>
                    </div>
                    <section class="actions-port">
                        <div class="no">
                            <div class="cta-block">
                                <span class="icon-support"></span>
                                <div class="info"> <small>Share your idea? </small> <span>1 866 976 8874</span> </div>
                            </div>
                        </div>
                        <div class="chat">
                            <div class="cta-block">
                                <span class="icon-chat"></span>
                                <div class="info"> <small>Want to discuss? </small> <a href="#">Live Chat Now</a>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 set-min-height-portfolio">
                    <div class="portfolio_drop-xs">
                        <div class="cbp-l-filters-buttonCenter js-filters-mosaic-flat only-xs">
                            <div id="js-filters-lightbox-gallery1"
                                class="cbp-l-filters-dropdown cbp-l-filters-dropdown-floated">
                                <div class="cbp-l-filters-dropdownWrap">
                                    <div class="cbp-l-filters-dropdownHeader">Sort Gallery By Service</div>
                                    <div class="cbp-l-filters-dropdownList only-xs-drop">
                                        <div data-filter="*" class="cbp-filter-item"> All </div>
                                        <div data-filter=".identity" class="cbp-filter-item filter-enable"> Logo </div>
                                        <div data-filter=".web-design" class="cbp-filter-item filter-disable"> Website
                                        </div>
                                        <div data-filter=".mobile" class="cbp-filter-item filter-disable"> Mobile </div>
                                        <div data-filter=".graphic" class="cbp-filter-item filter-disable"> Graphic </div>
                                        <div data-filter=".motiongraphic" class="cbp-filter-item filter-disable"> Motion
                                            Graphics </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cbp-l-filters-buttonCenter js-filters-mosaic-flat no-xs">
                        <div data-filter="*" id="filter-main" style="display:none;"
                            class="cbp-filter-item-active cbp-filter-item all-btn"> All </div>
                        <div data-filter=".identity" class="cbp-filter-item filter-enable"> Logo </div>
                        <div data-filter=".web-design" class="cbp-filter-item filter-disable"> Website </div>
                        <div data-filter=".mobile" class="cbp-filter-item filter-disable"> Mobile </div>
                        <div data-filter=".graphic" class="cbp-filter-item filter-disable"> Graphic </div>
                        <div data-filter=".motiongraphic" class="cbp-filter-item filter-disable"> Motion Graphics </div>
                    </div>
                    <div id="" class="js-grid-mosaic-flat cbp cbp-l-grid-mosaic-flat">
                        <div class="cbp-item education consultancy electronic networking accounting electronic">
                            <a href="#portfolio02" data-toggle="modal" class="cbp-caption" data-title=" ">
                                <div class="cbp-caption-defaultWrap"> <img src="{{asset('assets/img/portfolio/ms-e901.png')}}"> </div>
                                <div class="cbp-caption-activeWrap mbgyellow">
                                    <div class="cbp-l-caption-alignCenter">
                                        <div class="cbp-l-caption-body">
                                            <div class="cbp-l-caption-title"><small>Education and Human
                                                    Resource</small><br>ERI</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="cbp-item automotive consultancy garments networking accounting electronic">
                            <a href="#portfolio17" data-toggle="modal" class="cbp-caption" data-title=" ">
                                <div class="cbp-caption-defaultWrap"> <img src="{{asset('assets/img/portfolio/ol-portfolio.png')}}"> </div>
                                <div class="cbp-caption-activeWrap mbgorange">
                                    <div class="cbp-l-caption-alignCenter">
                                        <div class="cbp-l-caption-body">
                                            <div class="cbp-l-caption-title"><small>Travel and
                                                    Hospitality</small><br>Masterpiece Premium
                                                Wines</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="cbp-item accounting ecommerce">
                            <a href="#portfolio47" data-toggle="modal" class="cbp-caption" data-title=" ">
                                <div class="cbp-caption-defaultWrap"> <img
                                        src="{{asset('assets/img/portfolio/takecareofyourbills-t-financial.png')}}">
                                </div>
                                <div class="cbp-caption-activeWrap mbgpink">
                                    <div class="cbp-l-caption-alignCenter">
                                        <div class="cbp-l-caption-body">
                                            <div class="cbp-l-caption-title"><small>WEB UI/UX</small><br>Take Care Of Your
                                                Bills</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="cbp-item software-hi-tech motiongraphic construction">
                            <a href="#portfolio48" data-toggle="modal" class="cbp-caption" data-title=" ">
                                <div class="cbp-caption-defaultWrap"> <img src="{{asset('assets/img/portfolio/motion-graphics-01.gif')}}">
                                </div>
                                <div class="cbp-caption-activeWrap mbgblack">
                                    <div class="cbp-l-caption-alignCenter">
                                        <div class="cbp-l-caption-body">
                                            <div class="cbp-l-caption-title"><small>Motion Graphics</small><br>CloudMoose
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div
                            class="cbp-item medical abstract consultancy fundst communication garments restaurant accounting communication education electronic">
                            <a href="#portfolio05" data-toggle="modal" class="cbp-caption " data-title=" ">
                                <div class="cbp-caption-defaultWrap"> <img src="{{asset('assets/img/portfolio/the-vet-01.png')}}"> </div>
                                <div class="cbp-caption-activeWrap mbgblack">
                                    <div class="cbp-l-caption-alignCenter">
                                        <div class="cbp-l-caption-body">
                                            <div class="cbp-l-caption-title"><small>Healthcare and Life
                                                    science</small><br>The Vet</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div
                            class="cbp-item construction advertising identity fundst entertainment accounting communication education electronic">
                            <a href="#portfolio15" data-toggle="modal" class="cbp-caption" data-title=" ">
                                <div class="cbp-caption-defaultWrap"> <img src="{{asset('assets/img/portfolio/vs-portfolio.png')}}"> </div>
                                <div class="cbp-caption-activeWrap mbgblue">
                                    <div class="cbp-l-caption-alignCenter">
                                        <div class="cbp-l-caption-body">
                                            <div class="cbp-l-caption-title"><small>Real Estate and
                                                    Property</small><br>Vista Events Greece
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="cbp-item web-design abstract">
                            <a href="#portfolio42" data-toggle="modal" class="cbp-caption" data-title=" ">
                                <div class="cbp-caption-defaultWrap"> <img
                                        src="{{asset('assets/img/portfolio/logosanctuary-t-advertising.png')}}"> </div>
                                <div class="cbp-caption-activeWrap mbgyellow">
                                    <div class="cbp-l-caption-alignCenter">
                                        <div class="cbp-l-caption-body">
                                            <div class="cbp-l-caption-title"><small>WEB UI/UX</small><br>Logosanctuary
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="cbp-item artphotography">
                            <a href="#portfolio49" data-toggle="modal" class="cbp-caption" data-title=" ">
                                <div class="cbp-caption-defaultWrap"> <img src="{{asset('assets/img/portfolio/motion-graphics-02.gif')}}">
                                </div>
                                <div class="cbp-caption-activeWrap mbgblue">
                                    <div class="cbp-l-caption-alignCenter">
                                        <div class="cbp-l-caption-body">
                                            <div class="cbp-l-caption-title"><small>Motion Graphics</small><br>TenEighty
                                                Group </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="cbp-item web-designe construction">
                            <a href="#portfolio36" data-toggle="modal" class="cbp-caption" data-title=" ">
                                <div class="cbp-caption-defaultWrap"> <img
                                        src="{{asset('assets/img/portfolio/NK_Afro-Signatures_R1-media-t.png')}}"> </div>
                                <div class="cbp-caption-activeWrap mbgorange">
                                    <div class="cbp-l-caption-alignCenter">
                                        <div class="cbp-l-caption-body">
                                            <div class="cbp-l-caption-title"><small>WEB UI/UX</small><br>Afrosignatures
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div
                            class="cbp-item advertising identity automotive graphic ecommerce electronic restaurant communication">
                            <a href="#portfolio10" data-toggle="modal" class="cbp-caption" data-title=" ">
                                <div class="cbp-caption-defaultWrap"> <img src="{{asset('assets/img/portfolio/ak-portfolio-2.png')}}"> </div>
                                <div class="cbp-caption-activeWrap mbgpink">
                                    <div class="cbp-l-caption-alignCenter">
                                        <div class="cbp-l-caption-body">
                                            <div class="cbp-l-caption-title"><small>Automotive and
                                                    Transport</small><br>Cape Liberty Transfers
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div
                            class="cbp-item advertising identity automotive accounting consultancy electronic restaurant networking communication">
                            <a href="#portfolio11" data-toggle="modal" class="cbp-caption" data-title=" ">
                                <div class="cbp-caption-defaultWrap"> <img src="{{asset('assets/img/portfolio/ak-portfolio.png')}}"> </div>
                                <div class="cbp-caption-activeWrap mbgblack">
                                    <div class="cbp-l-caption-alignCenter">
                                        <div class="cbp-l-caption-body">
                                            <div class="cbp-l-caption-title"><small>Automotive and
                                                    Transport</small><br>LBoogie Trucking</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="cbp-item software-hi-tech motiongraphic artphotography">
                            <a href="#portfolio50" data-toggle="modal" class="cbp-caption" data-title=" ">
                                <div class="cbp-caption-defaultWrap"> <img src="{{asset('assets/img/portfolio/motion-graphics-03.gif')}}">
                                </div>
                                <div class="cbp-caption-activeWrap mbgyellow">
                                    <div class="cbp-l-caption-alignCenter">
                                        <div class="cbp-l-caption-body">
                                            <div class="cbp-l-caption-title"><small>Motion Graphics</small><br>GeniusSearch
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div
                            class="cbp-item advertising identity abstract artphotography consultancy garments ecommerce entertainment restaurant communication">
                            <a href="#portfolio01" data-toggle="modal" class="cbp-caption " data-title=" ">
                                <div class="cbp-caption-defaultWrap"> <img src="{{asset('assets/img/portfolio/Raw-01.png')}}"> </div>
                                <div class="cbp-caption-activeWrap mbgblue">
                                    <div class="cbp-l-caption-alignCenter">
                                        <div class="cbp-l-caption-body">
                                            <div class="cbp-l-caption-title"><small>Advertising</small><br>Rustic Art
                                                Woodworks</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div
                            class="cbp-item advertising identity medical graphic consultancy ecommerce networking communication">
                            <a href="#portfolio13" data-toggle="modal" class="cbp-caption" data-title=" ">
                                <div class="cbp-caption-defaultWrap"> <img src="{{asset('assets/img/portfolio/sports.png')}}"> </div>
                                <div class="cbp-caption-activeWrap mbgyellow">
                                    <div class="cbp-l-caption-alignCenter">
                                        <div class="cbp-l-caption-body">
                                            <div class="cbp-l-caption-title"><small>Healthcare and Life
                                                    Science</small><br>Fitness Legion
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div
                            class="cbp-item advertising identity medical education graphic artphotography consultancy ecommerce entertainment management technology networking communication">
                            <a href="#portfolio06" data-toggle="modal" class="cbp-caption" data-title=" ">
                                <div class="cbp-caption-defaultWrap"> <img src="{{asset('assets/img/portfolio/17-portfolio.png')}}"> </div>
                                <div class="cbp-caption-activeWrap mbgorange">
                                    <div class="cbp-l-caption-alignCenter">
                                        <div class="cbp-l-caption-body">
                                            <div class="cbp-l-caption-title"><small>Software and Hi-Tech</small><br>Tech
                                                Works</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="cbp-item software-hi-tech motiongraphic advertising">
                            <a href="#portfolio51" data-toggle="modal" class="cbp-caption" data-title=" ">
                                <div class="cbp-caption-defaultWrap"> <img src="{{asset('assets/img/portfolio/motion-graphics-04.gif')}}">
                                </div>
                                <div class="cbp-caption-activeWrap mbgorange">
                                    <div class="cbp-l-caption-alignCenter">
                                        <div class="cbp-l-caption-body">
                                            <div class="cbp-l-caption-title"><small>Motion Graphics</small><br>RippleBanks
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div
                            class="cbp-item media-entertainment communication accounting garments entertainment management technology communication">
                            <a href="#portfolio14" data-toggle="modal" class="cbp-caption " data-title=" ">
                                <div class="cbp-caption-defaultWrap"> <img src="{{asset('assets/img/portfolio/ms-portfolio.png')}}"> </div>
                                <div class="cbp-caption-activeWrap mbgpink">
                                    <div class="cbp-l-caption-alignCenter">
                                        <div class="cbp-l-caption-body">
                                            <div class="cbp-l-caption-title"><small>Software and Hi-Tech</small><br>S
                                                Networks</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="cbp-item web-design medical">
                            <a href="#portfolio44" data-toggle="modal" class="cbp-caption" data-title=" ">
                                <div class="cbp-caption-defaultWrap"> <img src="{{asset('assets/img/portfolio/olfitness-t-sports.png')}}">
                                </div>
                                <div class="cbp-caption-activeWrap mbgblack">
                                    <div class="cbp-l-caption-alignCenter">
                                        <div class="cbp-l-caption-body">
                                            <div class="cbp-l-caption-title"><small>WEB UI/UX</small><br>Olfitness</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div
                            class="cbp-item advertising identity construction abstract garments management technology justice construction">
                            <a href="#portfolio18" data-toggle="modal" class="cbp-caption" data-title=" ">
                                <div class="cbp-caption-defaultWrap"> <img src="{{asset('assets/img/portfolio/msb-portfolio.png')}}"> </div>
                                <div class="cbp-caption-activeWrap mbgblue">
                                    <div class="cbp-l-caption-alignCenter">
                                        <div class="cbp-l-caption-body">
                                            <div class="cbp-l-caption-title"><small>Education and Human
                                                    Resource</small><br>The Building
                                                Service Centre</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="cbp-item software-hi-tech motiongraphic">
                            <a href="#portfolio53" data-toggle="modal" class="cbp-caption" data-title=" ">
                                <div class="cbp-caption-defaultWrap"> <img src="{{asset('assets/img/portfolio/motion-graphics-06.gif')}}">
                                </div>
                                <div class="cbp-caption-activeWrap mbgpink">
                                    <div class="cbp-l-caption-alignCenter">
                                        <div class="cbp-l-caption-body">
                                            <div class="cbp-l-caption-title"><small>Motion Graphics</small><br>Try Before
                                                Hire</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="cbp-item advertising identity medical agriculture artphotography studio construction">
                            <a href="#portfolio16" data-toggle="modal" class="cbp-caption" data-title=" ">
                                <div class="cbp-caption-defaultWrap"> <img src="{{asset('assets/img/portfolio/portfolio_07.png')}}"> </div>
                                <div class="cbp-caption-activeWrap mbgyellow">
                                    <div class="cbp-l-caption-alignCenter">
                                        <div class="cbp-l-caption-body">
                                            <div class="cbp-l-caption-title"><small>Travel and
                                                    Hospitality</small><br>La’more Hookah</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="cbp-item automotive-transport automotive advertising identity agriculture">
                            <a href="#portfolio03" data-toggle="modal" class="cbp-caption " data-title=" ">
                                <div class="cbp-caption-defaultWrap"> <img src="{{asset('assets/img/portfolio/13-01-t.png')}}"> </div>
                                <div class="cbp-caption-activeWrap mbgorange">
                                    <div class="cbp-l-caption-alignCenter">
                                        <div class="cbp-l-caption-body">
                                            <div class="cbp-l-caption-title"><small>Automotive and
                                                    Transport</small><br>High End Movers</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="cbp-item advertising identity accounting education garments studio justice accounting">
                            <a href="#portfolio19" data-toggle="modal" class="cbp-caption" data-title=" ">
                                <div class="cbp-caption-defaultWrap"> <img src="{{asset('assets/img/portfolio/un-portfolio.png')}}"> </div>
                                <div class="cbp-caption-activeWrap mbgpink">
                                    <div class="cbp-l-caption-alignCenter">
                                        <div class="cbp-l-caption-body">
                                            <div class="cbp-l-caption-title"><small>Education and Human
                                                    Resource</small><br>United Education
                                                Community</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="cbp-item software-hi-tech motiongraphic construction advertising">
                            <a href="#portfolio54" data-toggle="modal" class="cbp-caption" data-title=" ">
                                <div class="cbp-caption-defaultWrap"> <img src="{{asset('assets/img/portfolio/motion-graphics-07.gif')}}">
                                </div>
                                <div class="cbp-caption-activeWrap mbgblack">
                                    <div class="cbp-l-caption-alignCenter">
                                        <div class="cbp-l-caption-body">
                                            <div class="cbp-l-caption-title"><small>Motion Graphics</small><br>The
                                                Enterprise Solution
                                                Platform</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div
                            class="cbp-item real-estate-property technology advertising identity abstract artphotography garments agriculture fundst studio justice">
                            <a href="#portfolio24" data-toggle="modal" class="cbp-caption" data-title=" ">
                                <div class="cbp-caption-defaultWrap"> <img src="{{asset('assets/img/portfolio/portfolio_10.png')}}"> </div>
                                <div class="cbp-caption-activeWrap mbgblack">
                                    <div class="cbp-l-caption-alignCenter">
                                        <div class="cbp-l-caption-body">
                                            <div class="cbp-l-caption-title"><small>Automotive</small><br>DealerLog360
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="cbp-item web-designt">
                            <a href="#portfolio41" data-toggle="modal" class="cbp-caption" data-title=" ">
                                <div class="cbp-caption-defaultWrap"> <img src="{{asset('assets/img/portfolio/bitgen-t-softwear.png')}}">
                                </div>
                                <div class="cbp-caption-activeWrap mbgsblue">
                                    <div class="cbp-l-caption-alignCenter">
                                        <div class="cbp-l-caption-body">
                                            <div class="cbp-l-caption-title"><small>WEB UI/UX</small><br>BitGen
                                                Technologies LLC</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="cbp-item web-design ecommerce">
                            <a href="#portfolio45" data-toggle="modal" class="cbp-caption" data-title=" ">
                                <div class="cbp-caption-defaultWrap"> <img
                                        src="{{asset('assets/img/portfolio/revolutionary-t-education.png')}}"> </div>
                                <div class="cbp-caption-activeWrap mbgyellow">
                                    <div class="cbp-l-caption-alignCenter">
                                        <div class="cbp-l-caption-body">
                                            <div class="cbp-l-caption-title"><small>WEB UI/UX</small><br>Revolutionary
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="cbp-item software-hi-tech motiongraphic artphotography">
                            <a href="#portfolio55" data-toggle="modal" class="cbp-caption" data-title=" ">
                                <div class="cbp-caption-defaultWrap"> <img src="{{asset('assets/img/portfolio/motion-graphics-08.gif')}}">
                                </div>
                                <div class="cbp-caption-activeWrap mbgblue">
                                    <div class="cbp-l-caption-alignCenter">
                                        <div class="cbp-l-caption-body">
                                            <div class="cbp-l-caption-title"><small>Motion Graphics</small><br>Samuel Evans
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="cbp-item web-design">
                            <a href="#portfolio46" data-toggle="modal" class="cbp-caption" data-title=" ">
                                <div class="cbp-caption-defaultWrap"> <img
                                        src="{{asset('assets/img/portfolio/sensationnelbridal-t-media.png')}}"> </div>
                                <div class="cbp-caption-activeWrap mbgorange">
                                    <div class="cbp-l-caption-alignCenter">
                                        <div class="cbp-l-caption-body">
                                            <div class="cbp-l-caption-title"><small>WEB UI/UX</small><br>Sensationnelbridal
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="cbp-item web-design">
                            <a href="#portfolio30" data-toggle="modal" class="cbp-caption" data-title=" ">
                                <div class="cbp-caption-defaultWrap"> <img
                                        src="{{asset('assets/img/portfolio/Home-(SA)-(8)-Financial-t.png')}}"> </div>
                                <div class="cbp-caption-activeWrap mbgpink">
                                    <div class="cbp-l-caption-alignCenter">
                                        <div class="cbp-l-caption-body">
                                            <div class="cbp-l-caption-title"><small>WEB UI/UX</small><br>Guardian</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="cbp-item web-design">
                            <a href="#portfolio34" data-toggle="modal" class="cbp-caption" data-title=" ">
                                <div class="cbp-caption-defaultWrap"> <img
                                        src="{{asset('assets/img/portfolio/N_Perceptive-MG-travel-t.png')}}"> </div>
                                <div class="cbp-caption-activeWrap mbgblack">
                                    <div class="cbp-l-caption-alignCenter">
                                        <div class="cbp-l-caption-body">
                                            <div class="cbp-l-caption-title"><small>WEB UI/UX</small><br>Perspective
                                                Management</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div
                            class="cbp-item advertising identity automotive artphotography artphotography garments agriculture fundst justice">
                            <a href="#portfolio12" data-toggle="modal" class="cbp-caption" data-title=" ">
                                <div class="cbp-caption-defaultWrap"> <img src="{{asset('assets/img/portfolio/jh-portfolio.png')}}"> </div>
                                <div class="cbp-caption-activeWrap mbgsblue">
                                    <div class="cbp-l-caption-alignCenter">
                                        <div class="cbp-l-caption-body">
                                            <div class="cbp-l-caption-title"><small>Travel and Hospitality</small><br>The
                                                Travel Wagon</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="cbp-item web-design">
                            <a href="#portfolio32" data-toggle="modal" class="cbp-caption" data-title=" ">
                                <div class="cbp-caption-defaultWrap"> <img
                                        src="{{asset('assets/img/portfolio/N_EGI-Applications-Inc-Advertising-t.png')}}">
                                </div>
                                <div class="cbp-caption-activeWrap mbgyellow">
                                    <div class="cbp-l-caption-alignCenter">
                                        <div class="cbp-l-caption-body">
                                            <div class="cbp-l-caption-title"><small>WEB UI/UX</small><br>EGI Installer
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="cbp-item software-hi-tech motiongraphic">
                            <a href="#portfolio56" data-toggle="modal" class="cbp-caption" data-title=" ">
                                <div class="cbp-caption-defaultWrap"> <img src="{{asset('assets/img/portfolio/motion-graphics-09.gif')}}">
                                </div>
                                <div class="cbp-caption-activeWrap mbgyellow">
                                    <div class="cbp-l-caption-alignCenter">
                                        <div class="cbp-l-caption-body">
                                            <div class="cbp-l-caption-title"><small>Motion Graphics</small><br>CarDirectly
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="cbp-item web-design">
                            <a href="#portfolio33" data-toggle="modal" class="cbp-caption" data-title=" ">
                                <div class="cbp-caption-defaultWrap"> <img
                                        src="{{asset('assets/img/portfolio/N_gresilva-USA-health-t.png')}}"> </div>
                                <div class="cbp-caption-activeWrap mbgorange">
                                    <div class="cbp-l-caption-alignCenter">
                                        <div class="cbp-l-caption-body">
                                            <div class="cbp-l-caption-title"><small>WEB UI/UX</small><br>Gresilva Grills
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="cbp-item web-design automotive">
                            <a href="#portfolio43" data-toggle="modal" class="cbp-caption" data-title=" ">
                                <div class="cbp-caption-defaultWrap"> <img
                                        src="{{asset('assets/img/portfolio/mnlakestransportation-t-automative.png')}}">
                                </div>
                                <div class="cbp-caption-activeWrap mbgpink">
                                    <div class="cbp-l-caption-alignCenter">
                                        <div class="cbp-l-caption-body">
                                            <div class="cbp-l-caption-title"><small>WEB UI/UX</small><br>MN LAKES
                                                Transportation LLC</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="cbp-item web-design construction">
                            <a href="#portfolio37" data-toggle="modal" class="cbp-caption" data-title=" ">
                                <div class="cbp-caption-defaultWrap"> <img
                                        src="{{asset('assets/img/portfolio/NK_Beast-Strong-sports-t.png')}}"> </div>
                                <div class="cbp-caption-activeWrap mbgblack">
                                    <div class="cbp-l-caption-alignCenter">
                                        <div class="cbp-l-caption-body">
                                            <div class="cbp-l-caption-title"><small>WEB UI/UX</small><br>Beast Strong Power
                                                House</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="cbp-item web-design construction">
                            <a href="#portfolio38" data-toggle="modal" class="cbp-caption" data-title=" ">
                                <div class="cbp-caption-defaultWrap"> <img
                                        src="{{asset('assets/img/portfolio/NK_Get-Real-Stone-real-state-t.png')}}">
                                </div>
                                <div class="cbp-caption-activeWrap mbgsblue">
                                    <div class="cbp-l-caption-alignCenter">
                                        <div class="cbp-l-caption-body">
                                            <div class="cbp-l-caption-title"><small>WEB UI/UX</small><br>Get Real Stone
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="cbp-item web-design agriculture">
                            <a href="#portfolio40" data-toggle="modal" class="cbp-caption" data-title=" ">
                                <div class="cbp-caption-defaultWrap"> <img
                                        src="{{asset('assets/img/portfolio/NK_R-CISC_R6-softwear-t.png')}}"> </div>
                                <div class="cbp-caption-activeWrap mbgyellow">
                                    <div class="cbp-l-caption-alignCenter">
                                        <div class="cbp-l-caption-body">
                                            <div class="cbp-l-caption-title"><small>WEB UI/UX</small><br>R-CISC</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="cbp-item education-human-resource agriculture">
                            <a href="#portfolio39" data-toggle="modal" class="cbp-caption" data-title=" ">
                                <div class="cbp-caption-defaultWrap"> <img
                                        src="{{asset('assets/img/portfolio/NK_Lean-Guitar-Online-education-t.png')}}">
                                </div>
                                <div class="cbp-caption-activeWrap mbgorange">
                                    <div class="cbp-l-caption-alignCenter">
                                        <div class="cbp-l-caption-body">
                                            <div class="cbp-l-caption-title"><small>WEB UI/UX</small><br>Learn Guitar</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="cbp-item web-design">
                            <a href="#portfolio31" data-toggle="modal" class="cbp-caption" data-title=" ">
                                <div class="cbp-caption-defaultWrap"> <img
                                        src="{{asset('assets/img/portfolio/N_Battle-League-gaming-t.png')}}"> </div>
                                <div class="cbp-caption-activeWrap mbgpink">
                                    <div class="cbp-l-caption-alignCenter">
                                        <div class="cbp-l-caption-body">
                                            <div class="cbp-l-caption-title"><small>WEB UI/UX</small><br>Battle Games</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>













                        <div class="cbp-item software-hi-tech mobile">
                            <a href="#app_portfolio05" data-toggle="modal" class="cbp-caption" data-title=" ">
                                <div class="cbp-caption-defaultWrap"> <img src="{{asset('assets/img/portfolio-9-iphone.jpg')}}"> </div>
                                <div class="cbp-caption-activeWrap mbgpink">
                                    <div class="cbp-l-caption-alignCenter">
                                        <div class="cbp-l-caption-body">
                                            <div class="cbp-l-caption-title"><small>Mobile</small><br>YUMM</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="cbp-item software-hi-tech motiongraphic">
                            <a href="#portfolio57" data-toggle="modal" class="cbp-caption" data-title=" ">
                                <div class="cbp-caption-defaultWrap"> <img src="{{asset('assets/img/portfolio/motion-graphics-10.gif')}}">
                                </div>
                                <div class="cbp-caption-activeWrap mbgorange">
                                    <div class="cbp-l-caption-alignCenter">
                                        <div class="cbp-l-caption-body">
                                            <div class="cbp-l-caption-title"><small>Motion Graphic</small><br>Blinds</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="cbp-item software-hi-tech mobile">
                            <a href="#app_portfolio08" data-toggle="modal" class="cbp-caption" data-title=" ">
                                <div class="cbp-caption-defaultWrap"> <img src="{{asset('assets/img/portfolio-2-iphone.jpg')}}"> </div>
                                <div class="cbp-caption-activeWrap mbgpink">
                                    <div class="cbp-l-caption-alignCenter">
                                        <div class="cbp-l-caption-body">
                                            <div class="cbp-l-caption-title"><small>Mobile</small><br>Shopping App</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="cbp-item software-hi-tech mobile">
                            <a href="#app_portfolio10" data-toggle="modal" class="cbp-caption" data-title=" ">
                                <div class="cbp-caption-defaultWrap"> <img src="{{asset('assets/img/portfolio-3-iphone.jpg')}}"> </div>
                                <div class="cbp-caption-activeWrap mbgpink">
                                    <div class="cbp-l-caption-alignCenter">
                                        <div class="cbp-l-caption-body">
                                            <div class="cbp-l-caption-title"><small>Mobile</small><br>Movie Rating App
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="cbp-item software-hi-tech mobile">
                            <a href="#app_portfolio01" data-toggle="modal" class="cbp-caption" data-title=" ">
                                <div class="cbp-caption-defaultWrap"> <img src="{{asset('assets/img/portfolio-5-iphone.jpg')}}"> </div>
                                <div class="cbp-caption-activeWrap mbgpink">
                                    <div class="cbp-l-caption-alignCenter">
                                        <div class="cbp-l-caption-body">
                                            <div class="cbp-l-caption-title"><small>Mobile</small><br>Real Estate App
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="cbp-item software-hi-tech mobile">
                            <a href="#app_portfolio07" data-toggle="modal" class="cbp-caption" data-title=" ">
                                <div class="cbp-caption-defaultWrap"> <img src="{{asset('assets/img/portfolio-6-iphone.jpg')}}"> </div>
                                <div class="cbp-caption-activeWrap mbgpink">
                                    <div class="cbp-l-caption-alignCenter">
                                        <div class="cbp-l-caption-body">
                                            <div class="cbp-l-caption-title"><small>Mobile</small><br>Music Player App
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="cbp-item software-hi-tech mobile">
                            <a href="#app_portfolio02" data-toggle="modal" class="cbp-caption" data-title=" ">
                                <div class="cbp-caption-defaultWrap"> <img src="{{asset('assets/img/portfolio-clock-iphone.jpg')}}"> </div>
                                <div class="cbp-caption-activeWrap mbgblack">
                                    <div class="cbp-l-caption-alignCenter">
                                        <div class="cbp-l-caption-body">
                                            <div class="cbp-l-caption-title"><small>Mobile</small><br>Fitness App</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="cbp-item software-hi-tech mobile">
                            <a href="#app_portfolio03" data-toggle="modal" class="cbp-caption" data-title=" ">
                                <div class="cbp-caption-defaultWrap"> <img src="{{asset('assets/img/portfolio-7-iphone.jpg')}}"> </div>
                                <div class="cbp-caption-activeWrap mbgpink">
                                    <div class="cbp-l-caption-alignCenter">
                                        <div class="cbp-l-caption-body">
                                            <div class="cbp-l-caption-title"><small>Mobile</small><br>Flight Booking App
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="cbp-item software-hi-tech mobile">
                            <a href="#app_portfolio04" data-toggle="modal" class="cbp-caption" data-title=" ">
                                <div class="cbp-caption-defaultWrap"> <img src="{{asset('assets/img/portfolio-8-iphone.jpg')}}"> </div>
                                <div class="cbp-caption-activeWrap mbgpink">
                                    <div class="cbp-l-caption-alignCenter">
                                        <div class="cbp-l-caption-body">
                                            <div class="cbp-l-caption-title"><small>Mobile</small><br>HealthCare app</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="cbp-item software-hi-tech mobile">
                            <a href="#app_portfolio10" data-toggle="modal" class="cbp-caption" data-title=" ">
                                <div class="cbp-caption-defaultWrap"> <img src="{{asset('assets/img/portfolio-4-iphone.jpg')}}"> </div>
                                <div class="cbp-caption-activeWrap mbgpink">
                                    <div class="cbp-l-caption-alignCenter">
                                        <div class="cbp-l-caption-body">
                                            <div class="cbp-l-caption-title"><small>Mobile</small><br>YUMM</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="cbp-item software-hi-tech mobile">
                            <a href="#app_portfolio06" data-toggle="modal" class="cbp-caption" data-title=" ">
                                <div class="cbp-caption-defaultWrap"> <img src="{{asset('assets/img/portfolio-10-iphone.jpg')}}"> </div>
                                <div class="cbp-caption-activeWrap mbgblack">
                                    <div class="cbp-l-caption-alignCenter">
                                        <div class="cbp-l-caption-body">
                                            <div class="cbp-l-caption-title"><small>Mobile</small><br>Find Location App
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!--                <div id="js-loadMore-mosaic-flat" class="cbp-l-loadMore-button">
       <a href="ajax-lightbox-gallery/loadMore.html" class="cbp-l-loadMore-link" rel="nofollow">
       <span class="cbp-l-loadMore-defaultText">LOAD MORE</span>
       <span class="cbp-l-loadMore-loadingText">LOADING...</span>
       <span class="cbp-l-loadMore-noMoreLoading">NO MORE WORKS</span>
       </a>
       </div>
     -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="section-padding count wow">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <h3 class="text-center wow fadeInDown" data-wow-delay="0.2s">Numbers We Feel Proud Of!</h3>
                    <p class="text-center wow fadeInDown" data-wow-delay="0.4s">When we say we aim for the best, we set
                        it as our
                        goal to make a change and move mountains with the projects we do. Reach us today with your project
                        goals and
                        join hands to achieve excellence.
                    </p>
                </div>
            </div>
            <div class="book-area">
            </div>
            <div class="count-area statistics">
                <div class="row text-center statistics-inner">
                    <div class="col-xs-3 col-sm-3 col-md-3 stat clearfix" data-count="5678">
                        <span class="number">3410</span>
                        <h6 class="count-title">Satisfied Customer</h6>

                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3 stat clearfix" data-count="9892">
                        <span class="number">7281</span>
                        <h6 class="count-title">Projects Completed</h6>
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3 stat clearfix" data-count="15890">
                        <span class="number">1791</span>
                        <h6 class="count-title">Launched Products</h6>
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3 stat clearfix" data-count="1015">
                        <span class="number">995</span>
                        <h6 class="count-title">Daily Visits</h6>
                    </div>
                </div>
            </div>



        </div>


    </section>
    <div class="add_border">
        <section class="section-padding progress-area wow">


            <div class="container">
                <div class="col-md-6">
                    <section class="flags">

                        <h3 class="text-left  wow fadeInDown" data-wow-delay="0.2">Globally Satisfied Clientele</h3>
                        <p class="wow fadeInDown" data-wow-delay="0.4s">Where words don’t do justice to our portfolio,
                            our clients
                            do. We’ve established ourselves in industry as a leading web design company in several different
                            countries
                            and have worked with thousands of clients all over the world.</p>





                        <div class="row marg-btm wow fadeInDown" data-wow-delay="0.2s">
                            <div class="col-md-12">
                                <br />
                                <div class="flag"><img src="{{asset('assets/img/location.png')}}"></div>
                            </div>
                        </div>

                    </section>
                </div>
                <div class="col-md-6">
                    <section class="progress-bars">
                        <h3 class="text-left wow fadeInDown" data-wow-delay="0.2s">We’re a Growth Focused Web Design
                            Agency</h3>
                        <p class="bottom-space wow fadeInDown" data-wow-delay="0.4s">We love to discuss numbers that
                            defines our
                            performance to our clients and customers.</p>
                        <div class="skill">
                            <h4 class="text-left">ROI Increase</h4>
                            <div class="skill-bar skill1 wow slideInLeft animated" data-wow-delay="0.1s">
                                <span class="skill-count1">95%</span>
                            </div>
                        </div>
                        <div class="skill">
                            <h4 class="text-left">Conversion Ratio Increase</h4>
                            <div class="skill-bar skill2 wow slideInLeft animated" data-wow-delay="0.2s">
                                <span class="skill-count2">85%</span>
                            </div>
                        </div>
                        <div class="skill">
                            <h4 class="text-left">Satisfied Clients</h4>
                            <div class="skill-bar skill3 wow slideInLeft animated" data-wow-delay="0.3s">
                                <span class="skill-count3">99%</span>
                            </div>
                        </div>
                        <div class="skill">
                            <h4 class="text-left">Returning Customers</h4>
                            <div class="skill-bar skill4 wow slideInLeft animated" data-wow-delay="0.4s">
                                <span class="skill-count4">65%</span>
                            </div>
                        </div>
                        <div class="skill">
                            <h4 class="text-left">Unique Customers</h4>
                            <div class="skill-bar skill5 wow slideInLeft animated" data-wow-delay="0.5s">
                                <span class="skill-count5">80%</span>
                            </div>
                        </div>

                        <div class="skill">
                            <h4 class="text-left">Money back Guarantee</h4>
                            <div class="skill-bar skill6 wow slideInLeft animated" data-wow-delay="0.6s">
                                <span class="skill-count6">100%</span>
                            </div>
                        </div>
                    </section>
                </div>


            </div>
        </section>

        </section>

    </div>
    <section class="section-padding process wow">
        <div class="container">
            <div class="clearfix">
                <div class="row">
                    <div class="col-md-12">

                        <h3 class="wow fadeInDown" data-wow-delay="0.2s">Remedy to create the perfect Web design for
                            your Company
                        </h3>

                        <p class="wow fadeInDown text-center main" data-wow-delay="0.4s">We’ve got a proven formula of
                            success to
                            guarantee best results for our clients. If it isn’t a 100% then it isn’t enough for us. To
                            ensure each
                            project is getting nothing but the best, we make sure we follow a set of rules that keep us on
                            track in
                            terms of performances and results.</p>


                    </div>
                </div>

                <div class="row methodolgy-slider slider main-cust-slider wow fadeInDown" data-wow-delay="0.6s">
                    <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12 text-center cust-slider">
                        <div class="process-img"><img src="{{asset('assets/img/strategy.png')}}" alt="100% icon"></div>
                        <h4>Strategy</h4>
                        <p>Our business analysts and design gurus analyze your project and plan out a complete strategy for
                            proper
                            implementation to make sure the results meet the requirements.</p>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12 text-center cust-slider">
                        <div class="process-img"><img src="{{asset('assets/img/app-design.png')}}" alt="100% icon"></div>
                        <h4>Design</h4>
                        <p>After the proper strategy is laid out for implementation, our design experts start illustrating
                            concepts
                            to create a creative masterpiece for maximum client satisfaction.</p>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12 text-center cust-slider">
                        <div class="process-img"><img src="{{asset('assets/img/result.png')}}" alt="100% icon"></div>
                        <h4>Results</h4>
                        <p>We don’t rest till you get the absolute best from your design. This is mainly why we keep a close
                            eye on
                            how your design is providing you the results that you need.</p>
                    </div>
                </div>




                <div class="actions text-center margin-top-20 wow fadeInDown" data-wow-delay="0.8s">
                    <a href="book-a-call.html" class="btn-fill">Book a Call</a>
                    <a onclick="$zopim.livechat.window.toggle()" class="btn-line-fill sea-fill">Want to Discuss</a>

                </div>
            </div>
        </div>
    </section>
    <section class="section-padding testimonials wow fadeInDown" data-wow-delay="0.2s">
        <div class="container">

            <div class="testimonial-slider">

                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12 fadeInDown">
                        <div class="testimonial_inner">
                            <div class="testimonial_bg">
                                <div class="testimonial_bg-inner">
                                    <img class="img-responsive" src="{{asset('assets/img/testimonial-bg-01.png')}}">
                                    <div class="testimonial_radius">
                                        SR

                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 fadeInDown">

                        <div class="testimonial-details">

                            <div class="testimonial-sec-tab">
                                <div class="testimonial-sec-inner clearfix">
                                    <div class="testimonial-co"></div>
                                    <h3>Extremely Satisfied with the services!</h3>

                                    <p>Received my project on time and provided me proper assistance along the way. Loved
                                        working with
                                        them! </p>

                                    <p class="testimonial-second-name">— Sarah Ramirez, Brand Owner</p>
                                    <div class="star"><i class="fa fa-star" aria-hidden="true"></i><i
                                            class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star"
                                            aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i
                                            class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-half-o"
                                            aria-hidden="true"></i>
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>
                </div>


                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12 fadeInDown">
                        <div class="testimonial_inner">
                            <div class="testimonial_bg">
                                <div class="testimonial_bg-inner">
                                    <img class="img-responsive" src="{{asset('assets/img/testimonial-bg-02.png')}}">
                                    <div class="testimonial_radius">
                                        CB
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 fadeInDown">

                        <div class="testimonial-details">

                            <div class="testimonial-sec-tab">
                                <div class="testimonial-sec-inner clearfix">
                                    <div class="testimonial-co"></div>
                                    <h3>Remarkable work on my website</h3>

                                    <p>Thanks to The Logic Hive, my website is now performing excellently. I’ve worked with
                                        them on 5
                                        projects all of them were amazing.</p>

                                    <p class="testimonial-second-name">— Claire Bennet, Owner</p>
                                    <div class="star"><i class="fa fa-star" aria-hidden="true"></i><i
                                            class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star"
                                            aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i
                                            class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-half-o"
                                            aria-hidden="true"></i>
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12 fadeInDown">
                        <div class="testimonial_inner">
                            <div class="testimonial_bg">
                                <div class="testimonial_bg-inner">
                                    <img class="img-responsive" src="{{asset('assets/img/testimonial-bg-03.png')}}">
                                    <div class="testimonial_radius">
                                        JW

                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 fadeInDown">

                        <div class="testimonial-details">

                            <div class="testimonial-sec-tab">
                                <div class="testimonial-sec-inner clearfix">
                                    <div class="testimonial-co"></div>
                                    <h3>Loved The Work The Team Put In!</h3>

                                    <p>The team provided me proper identity and branding solutions. I'll be working with
                                        them over new
                                        projects very soon</p>

                                    <p class="testimonial-second-name">Jessica Williams, Owner</p>
                                    <div class="star"><i class="fa fa-star" aria-hidden="true"></i><i
                                            class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star"
                                            aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i
                                            class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-half-o"
                                            aria-hidden="true"></i>
                                    </div>



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
    <section class="section-padding awards wow">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="wow fadeInDown" data-wow-delay="0.4s">Our Valued Clients Are Our Greatest Asset</h3>
                    <p class="text-center wow fadeInDown" data-wow-delay="0.6s">Each and every project we handle have
                        one major
                        factor in common that is constructing a strong marketing<br> pillars for your business. The ultimate
                        web
                        design inspire your customers and increase<br> the credibility. They enhance reliability, improve
                        trust flow
                        and the<br> increase confidence of your customers to make a purchase.</p>
                </div>
            </div>
            <div class="row wow fadeInDown" data-wow-delay="0.6s">

                <section class="award-slid">
                    <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
                        <div class="awards-img"><img src="{{asset('assets/img/award-01.png')}}" alt="100% icon"></div>
                        <h4>Fastcompany 50 - <br>Most Innovative Companies</h4>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
                        <div class="awards-img"><img src="{{asset('assets/img/award-02.png')}}" alt="100% icon"></div>
                        <h4>2011 OnMobile 100<br> Top Private Companies</h4>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
                        <div class="awards-img"><img src="{{asset('assets/img/award-03.png')}}" alt="100% icon"></div>
                        <h4>Always On Global<br> - Top 250 Company</h4>
                    </div>




                </section>


            </div>
            <div class="row">
                <div class="col-md-12"></div>
            </div>
        </div>
    </section>

  @include('front.faq')
@endsection
