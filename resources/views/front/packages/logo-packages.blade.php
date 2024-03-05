@extends('front.layout.main')
@section('title')
    <title>The Logic Hive : Creative Logo Design Company and Custom Web Design Agency | About Us</title>
@endsection

@section('content')

    <section class="hero-services hero-subservices" >
        <div class="tp-banner-container wow">
            <div class="tp-banner">
                <ul>
                    <!-- SLIDE  -->
                    <li data-transition="fade" data-slotamount="5" data-masterspeed="200">
                        <!-- MAIN IMAGE -->
                        <img src="{{ asset('assets/img/corporate-pakage-page.png') }}" alt="slidebg1" data-bgfit="cover"
                            data-bgposition="center center" data-bgrepeat="no-repeat">

                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption mediumlarge_light_white_center fade" data-x="15" data-y="160"
                            data-speed="500" data-start="300" data-easing="Power4.easeOut" data-endspeed="300"
                            data-endeasing="Power1.easeIn" data-captionhidden="off" style="z-index: 6">Brand Development
                            Solutions <br>That Blow The Roof!
                        </div>

                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption medium_light_black fade" data-x="15" data-y="250" data-speed="500"
                            data-start="600" data-easing="Power4.easeOut" data-endspeed="300" data-endeasing="Power1.easeIn"
                            data-captionhidden="off" style="z-index: 6">Assisting you with complete brand development <br>
                            services for seed sized and monster
                            sized organizations <div class="clearfix margin-top-20"><a href="{{route('Get-a-Free-Quote')}}"
                                    class="btn-fill-white pull-left">Let's Get Started</a></div>
                        </div>

                    </li>

                    <li data-transition="fade" data-slotamount="5" data-masterspeed="200">
                        <!-- MAIN IMAGE -->
                        <img src="{{ asset('assets/img/img/logo-pakage-page.html') }}" alt="slidebg1" data-bgfit="cover"
                            data-bgposition="center center" data-bgrepeat="no-repeat">

                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption mediumlarge_light_white_center fade" data-x="15" data-y="160"
                            data-speed="500" data-start="300" data-easing="Power4.easeOut" data-endspeed="300"
                            data-endeasing="Power1.easeIn" data-captionhidden="off" style="z-index: 6">Top Notch Brand
                            Identity <br />Development Solutions
                        </div>

                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption medium_light_black fade" data-x="15" data-y="250" data-speed="500"
                            data-start="600" data-easing="Power4.easeOut" data-endspeed="300" data-endeasing="Power1.easeIn"
                            data-captionhidden="off" style="z-index: 6">Assisting corporations worldwide with the best brand
                            <br />identity development
                            solutions they can find.

                            <div class="clearfix margin-top-20"><a href="{{route('Get-a-Free-Quote')}}"
                                    class="btn-fill-white pull-left">Let's Get Started</a></div>

                        </div>

                    </li>

                    <li data-transition="fade" data-slotamount="5" data-masterspeed="200">
                        <!-- MAIN IMAGE -->
                        <img src="{{ asset('assets/img/web-pakage-page.png') }}" alt="slidebg1" data-bgfit="cover"
                            data-bgposition="center center" data-bgrepeat="no-repeat">

                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption mediumlarge_light_white_center fade" data-x="15" data-y="160"
                            data-speed="500" data-start="300" data-easing="Power4.easeOut" data-endspeed="300"
                            data-endeasing="Power1.easeIn" data-captionhidden="off" style="z-index: 6">Sketching Beautiful
                            <br />Interfaces on the Web
                        </div>

                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption medium_light_black fade" data-x="15" data-y="250" data-speed="500"
                            data-start="600" data-easing="Power4.easeOut" data-endspeed="300" data-endeasing="Power1.easeIn"
                            data-captionhidden="off" style="z-index: 6">Providing beautiful and functional web design
                            <br />and development solutions for
                            companies all <br />over the planet. <div class="clearfix"><a href="Get-a-Free-Quote.html"
                                    class="btn-fill-white pull-left margin-top-20">Let's Get Started</a></div>
                        </div>


                    </li>

                </ul>
                <div class="tp-bannertimer"></div>
            </div>
        </div>
    </section>

   


    <div class="packages_paage_packages">

        <section class="section-padding packages-tabs padding-bottom-0">
            <div class="container">

                <ul class="tabs main-mini-tabs">
                    <li onclick="window.location.href='{{route('logo-packages')}}'" class="tab-link  current">Logo</li>
                    <li onclick="window.location.href=' web.html'" class="tab-link">Web</li>
                    <li onclick="window.location.href=' branding.html'" class="tab-link">Corporate Branding</li>
                    <li onclick="window.location.href=' ecommerce.html'" class="tab-link">E-Commerce</li>
                    <li onclick="window.location.href=' motion-graphic.html'" class="tab-link">Video</li>
                    <!--<li  onclick="window.location.href=' https://www.designproficient.com/packages/seo '"  class="tab-link" >SEO</li>-->
                    <!--<li  onclick="window.location.href=' https://www.designproficient.com/packages/social '"  class="tab-link" >Social Media</li>-->
                    <li onclick="window.location.href=' content.html'" class="tab-link">Content Writing</li>

                </ul>

                <div id="nav" class=" mini-tabs">
                    <ul id="navigation">
                        <li><a data-active="tabs" class="nav-anim package-tab-small nav-anim sea-h responsive-tab">All
                                <span class="caret"></span></a>

                            <ul class="tabs">
                                <li onclick="window.location.href='{{route('logo-packages')}}'" class="tab-link  current">Logo</li>
                                <li onclick="window.location.href=' web.html'" class="tab-link">Web</li>
                                <li onclick="window.location.href=' branding.html'" class="tab-link">Corporate Branding
                                </li>
                                <li onclick="window.location.href=' ecommerce.html'" class="tab-link">eCommerce</li>
                                <li onclick="window.location.href=' motion-graphic.html'" class="tab-link">Video</li>
                                <li onclick="window.location.href=' seo.html'" class="tab-link">SEO</li>
                                <li onclick="window.location.href=' social.html'" class="tab-link">Social Media</li>
                                <li onclick="window.location.href=' content.html'" class="tab-link">Content Writing</li>
                            </ul>

                        </li>
                    </ul>
                </div>
            </div>

            <div id="tab1" class="tab-content current">
                <div class="package_slide_wrap">

                    <div class="container make-left">
                        <div class="row">
                            <div class="col-md-12">
                                <h3>Affordable Packages That Suits Your Budget</h3>
                                <p class="text-center max_width">The main objective of Design Proficient is to provide
                                    economical
                                    solutions and offer an excellent brand development service that sets you apart from our
                                    competitors.
                                    Let’s explore our packages and pick the best suits your budget.</p>
                            </div>
                        </div>
                    </div>


                    <div class="container">

                        <section id="customer_examples" class="section section--contest_table section-padding pricing">
                            <div>
                                <div data-size="0">
                                    <div class="contest-list contest-list--scrollable">

                                        <div class="contest-list__item">
                                            <div class="contest">
                                                <div class="single ">
                                                    <h3>Basic Logo <br />Package</h3>
                                                    <span class="old-price">$88<small>.00</small> ONLY <i
                                                            class="cut"></i></span> <span
                                                        class="price">$44<small>.00</small> USD</span>
                                                    <p>Suitable for potential super-startups and brand revamps for
                                                        companies.</p>
                                                    <ul>
                                                        <li><i class="fa fa-check-circle-o"></i>3 Custom Logo Design
                                                            Concepts</li>
                                                        <li><i class="fa fa-check-circle-o"></i>1 Dedicated Designer</li>
                                                        <li><i class="fa fa-check-circle-o"></i>4 Revisions</li>
                                                        <li><i class="fa fa-check-circle-o"></i>48 to 72 hours TAT</li>
                                                        <li><i class="fa fa-check-circle-o"></i>All Final Files Format (AI,
                                                            PSD, EPS, PNG, GIF, JPG,
                                                            PDF)</li>
                                                        <li><i class="fa fa-check-circle-o"></i>100% Unique Design
                                                            Guarantee</li>
                                                        <li><i class="fa fa-check-circle-o"></i>100% Satisfaction Guarantee
                                                        </li>
                                                        <li><i class="fa fa-check-circle-o"></i>100% Money Back Guarantee *
                                                        </li>
                                                        <li><i class="fa fa-check-circle-o"></i>100% Ownership Rights</li>
                                                    </ul>
                                                    <p class="text-center">Add on: <span class="pink sea">$50</span> for
                                                        24 Hours Rush Delivery
                                                    </p>
                                                    <div class="clearfix order-action text-center">
                                                        <input class="btn-line-fill orderModalbtn" data-pkgname=">Basic Logo" data-price="44"
                                                          
                                                            type="submit" value="ORDER NOW" tabindex="0">
                                                    </div>
                                                    {{-- <span class="inclusive-black"><a
                                                            href="package/Basic-Logo-Package.html">VIEW DETAILS</a>
                                                    </span> --}}
                                                  
                                                    <div class="actions row">
                                                        <div class="col-md-6 col-xs-6"><a class="action-no gre clearfix">
                                                                <span><small>Share your
                                                                        idea?</small>{{$phoneNumber}}</span></a></div>
                                                        <div class="col-md-6 col-xs-6"><a
                                                                onclick="$zopim.livechat.window.toggle()"
                                                                class="action-chat ali clearfix pull-right"
                                                                tabindex="0"> <span><small>Want to
                                                                        discuss?</small> Live Chat Now</span></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="contest-list__item">
                                            <div class="contest">
                                                <div class="single">
                                                    <h3>Start Up Logo <br />Package</h3>
                                                    <span class="old-price">$168<small>.00</small> ONLY <i
                                                            class="cut"></i></span> <span
                                                        class="price">$84<small>.00</small> USD</span>
                                                    <p>Suitable for potential super-startups and brand revamps for
                                                        companies.</p>
                                                    <ul>
                                                        <li><i class="fa fa-check-circle-o"></i>5 Custom Logo Design
                                                            Concepts</li>
                                                        <li><i class="fa fa-check-circle-o"></i>By 2 Designers</li>
                                                        <li><i class="fa fa-check-circle-o"></i>FREE Icon</li>
                                                        <li><i class="fa fa-check-circle-o"></i>FREE Business Card Design
                                                        </li>
                                                        <li><i class="fa fa-check-circle-o"></i>UNLIMITED Revisions</li>
                                                        <li><i class="fa fa-check-circle-o"></i>48 to 72 hours TAT</li>
                                                        <li><i class="fa fa-check-circle-o"></i>All Final Files Format (AI,
                                                            PSD, EPS, PNG, GIF, JPG,
                                                            PDF)</li>
                                                        <li><i class="fa fa-check-circle-o"></i>100% Satisfaction Guarantee
                                                        </li>
                                                        <li><i class="fa fa-check-circle-o"></i>100% Unique Design
                                                            Guarantee</li>
                                                        <li><i class="fa fa-check-circle-o"></i>100% Money Back Guarantee *
                                                        </li>
                                                        <li><i class="fa fa-check-circle-o"></i>100% Ownership Rights</li>
                                                    </ul>
                                                    <p class="text-center">Add on: <span class="pink sea">$50</span> for
                                                        24 Hours Rush Delivery
                                                    </p>
                                                    <div class="clearfix order-action">
                                                        <input class="btn-line-fill orderModalbtn" data-pkgname="Start Up Logo" data-price="84"
                                                          
                                                        type="submit" value="ORDER NOW" tabindex="0">
                                                    </div>
                                                    {{-- <span class="inclusive-black"><a
                                                            href="package/Startup-Logo-Package.html">VIEW DETAILS</a>
                                                    </span> --}}
                                                    <div class="actions row">
                                                        <div class="col-md-6 col-xs-6"><a class="action-no gre clearfix">
                                                                <span><small>Share your
                                                                        idea?</small>{{$phoneNumber}}</span></a></div>
                                                        <div class="col-md-6 col-xs-6"><a
                                                                onclick="$zopim.livechat.window.toggle()"
                                                                class="action-chat ali clearfix pull-right"
                                                                tabindex="0"> <span><small>Want to
                                                                        discuss?</small> Live Chat Now</span></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="contest-list__item">
                                            <div class="contest">
                                                <div class="single best-seller">
                                                    <h3>Professional Logo<br />Package</h3>
                                                    <span class="old-price">$248<small>.00</small> ONLY <i
                                                            class="cut"></i></span> <span
                                                        class="price">$124<small>.00</small> USD</span>
                                                    <p>Suitable for potential super-startups and brand revamps for
                                                        companies.</p>
                                                    <ul>
                                                        <li><i class="fa fa-check-circle-o"></i>UNLIMITED Logo Design
                                                            Concepts</li>
                                                        <li><i class="fa fa-check-circle-o"></i>By 3 Designers</li>
                                                        <li><i class="fa fa-check-circle-o"></i>UNLIMITED Revisions</li>
                                                        <li><i class="fa fa-check-circle-o"></i>FREE Stationary Design Set
                                                        </li>
                                                        <li><i class="fa fa-check-circle-o"></i>FREE MS Word Letterhead
                                                        </li>
                                                        <li><i class="fa fa-check-circle-o"></i>48 to 72 hours TAT</li>
                                                        <li><i class="fa fa-check-circle-o"></i>All Final Files Format (AI,
                                                            PSD, EPS, PNG, GIF, JPG,
                                                            PDF)</li>
                                                        <li><i class="fa fa-check-circle-o"></i>100% Ownership Rights</li>
                                                        <li><i class="fa fa-check-circle-o"></i>100% Satisfaction Guarantee
                                                        </li>
                                                        <li><i class="fa fa-check-circle-o"></i>100% Unique Design
                                                            Guarantee</li>
                                                        <li><i class="fa fa-check-circle-o"></i>100% Money Back Guarantee *
                                                        </li>
                                                        <li><i class="fa fa-check-circle-o"></i>15% Discount on your next
                                                            order</li>
                                                    </ul>
                                                    <p class="text-center">Add on: <span class="pink sea">$50</span> for
                                                        24 Hours Rush Delivery
                                                    </p>
                                                    <div class="clearfix order-action">
                                                        <input class="btn-line-fill orderModalbtn" data-pkgname="Professional Logo" data-price="124"
                                                          
                                                        type="submit" value="ORDER NOW" tabindex="0">
                                                    </div>
                                                    {{-- <span class="inclusive-black"><a
                                                            href="package/Professional-Logo-Package.html">VIEW
                                                            DETAILS</a> </span> --}}
                                                    <div class="actions row">
                                                        <div class="col-md-6 col-xs-6"><a class="action-no gre clearfix">
                                                                <span><small>Share your
                                                                        idea?</small>{{$phoneNumber}}</span></a></div>
                                                        <div class="col-md-6 col-xs-6"><a
                                                                onclick="$zopim.livechat.window.toggle()"
                                                                class="action-chat ali clearfix pull-right"
                                                                tabindex="0"> <span><small>Want to
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
                                                            class="cut"></i></span> <span
                                                        class="price">$174<small>.00</small> USD</span>
                                                    <p>Suitable for potential super-startups and brand revamps for
                                                        companies.</p>
                                                    <ul>
                                                        <li><i class="fa fa-check-circle-o"></i>UNLIMITED Logo Design
                                                            Concepts</li>
                                                        <li><i class="fa fa-check-circle-o"></i>By 5 Design Artist</li>
                                                        <li><i class="fa fa-check-circle-o"></i>FREE Stationary Design Set
                                                        </li>
                                                        <li><i class="fa fa-check-circle-o"></i>UNLIMITED Revisions</li>
                                                        <li><i class="fa fa-check-circle-o"></i>FREE MS Word Letterhead
                                                        </li>
                                                        <li><i class="fa fa-check-circle-o"></i>Free Email Signature</li>
                                                        <li><i class="fa fa-check-circle-o"></i>All Final Files Format (AI,
                                                            PSD, EPS, PNG, GIF, JPG,
                                                            PDF)</li>
                                                        <li><i class="fa fa-check-circle-o"></i>100% Ownership Rights</li>
                                                        <li><i class="fa fa-check-circle-o"></i>100% Satisfaction Guarantee
                                                        </li>
                                                        <li><i class="fa fa-check-circle-o"></i>100% Unique Design
                                                            Guarantee</li>
                                                        <li><i class="fa fa-check-circle-o"></i>100% Money Back Guarantee *
                                                        </li>
                                                        <li><i class="fa fa-check-circle-o"></i>48 to 72 hours TAT</li>
                                                        <li><i class="fa fa-check-circle-o"></i>15% Discount on your next
                                                            order</li>
                                                    </ul>
                                                    <p class="text-center">Add on: <span class="pink sea">$50</span> for
                                                        24 Hours Rush Delivery
                                                    </p>
                                                    <div class="clearfix order-action">
                                                        <input class="btn-line-fill orderModalbtn" data-pkgname="Elite Logo" data-price="174"                                                          
                                                        type="submit" value="ORDER NOW" tabindex="0">
                                                    </div>
                                                    {{-- <span class="inclusive-black"><a
                                                            href="package/Elite-Logo-Package.html">VIEW DETAILS</a>
                                                    </span> --}}
                                                    <div class="actions row">
                                                        <div class="col-md-6 col-xs-6"><a class="action-no gre clearfix">
                                                                <span><small>Share your
                                                                        idea?</small>{{$phoneNumber}}</span></a></div>
                                                        <div class="col-md-6 col-xs-6"><a
                                                                onclick="$zopim.livechat.window.toggle()"
                                                                class="action-chat ali clearfix pull-right"
                                                                tabindex="0"> <span><small>Want to
                                                                        discuss?</small> Live Chat Now</span></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="contest-list__item">
                                            <div class="contest">
                                                <div class="single best-seller">
                                                    <h3>Business Logo <br />Package</h3>
                                                    <span class="old-price">$488<small>.00</small> ONLY <i
                                                            class="cut"></i></span> <span
                                                        class="price">$244<small>.00</small> USD</span>
                                                    <p>Suitable for potential super-startups and brand revamps for
                                                        companies.</p>
                                                    <ul>
                                                        <li><i class="fa fa-check-circle-o"></i>UNLIMITED Logo Design
                                                            Concepts</li>
                                                        <li><i class="fa fa-check-circle-o"></i>By 8 Design Artist</li>
                                                        <li><i class="fa fa-check-circle-o"></i>UNLIMITED Revisions</li>
                                                        <li><i class="fa fa-check-circle-o"></i>2 Stationary Design Sets
                                                        </li>
                                                        <li><i class="fa fa-check-circle-o"></i>Double Sided Flyer Design
                                                        </li>
                                                        <li><i class="fa fa-check-circle-o"></i>Bi-Fold Brochure</li>
                                                        <li><i class="fa fa-check-circle-o"></i>FREE MS Word Letterhead
                                                        </li>
                                                        <li><i class="fa fa-check-circle-o"></i>Social Media Banners Design
                                                        </li>
                                                        <li><i class="fa fa-check-circle-o"></i>Free Email Signature</li>
                                                        <li><i class="fa fa-check-circle-o"></i>FREE Fax Template</li>
                                                        <li><i class="fa fa-check-circle-o"></i>All Final Files Format (AI,
                                                            PSD, EPS, PNG, GIF, JPG,
                                                            PDF)</li>
                                                        <li><i class="fa fa-check-circle-o"></i>100% Ownership Rights</li>
                                                        <li><i class="fa fa-check-circle-o"></i>100% Satisfaction Guarantee
                                                        </li>
                                                        <li><i class="fa fa-check-circle-o"></i>100% Unique Design
                                                            Guarantee</li>
                                                        <li><i class="fa fa-check-circle-o"></i>100% Money Back Guarantee *
                                                        </li>
                                                    </ul>
                                                    <p class="text-center">Add on: <span class="pink sea">$50</span> for
                                                        24 Hours Rush Delivery
                                                    </p>
                                                    <div class="clearfix order-action">
                                                        <input class="btn-line-fill orderModalbtn" data-pkgname="Business Logo" data-price="244"                                                          
                                                        type="submit" value="ORDER NOW" tabindex="0">
                                                    </div>
                                                    {{-- <span class="inclusive-black"><a
                                                            href="package/Business-Logo-Package.html">VIEW DETAILS</a>
                                                    </span> --}}
                                                    <div class="actions row">
                                                        <div class="col-md-6 col-xs-6"><a class="action-no gre clearfix">
                                                                <span><small>Share your
                                                                        idea?</small>{{$phoneNumber}}</span></a></div>
                                                        <div class="col-md-6 col-xs-6"><a
                                                                onclick="$zopim.livechat.window.toggle()"
                                                                class="action-chat ali clearfix pull-right"
                                                                tabindex="0"> <span><small>Want to
                                                                        discuss?</small> Live Chat Now</span></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="contest-list__item">
                                            <div class="contest">
                                                <div class="single">
                                                    <h3>Gold Logo <br />Package</h3>
                                                    <span class="old-price">$1,048<small>.00</small> ONLY <i
                                                            class="cut"></i></span> <span
                                                        class="price">$514<small>.00</small> USD</span>
                                                    <p>Suitable for potential super-startups and brand revamps for
                                                        companies.</p>
                                                    <ul>
                                                        <li> <i class="fa fa-check-circle-o"></i>UNLIMITED Logo Design
                                                            Concepts</li>
                                                        <li> <i class="fa fa-check-circle-o"></i>By 8 Design Artist</li>
                                                        <li> <i class="fa fa-check-circle-o"></i>UNLIMITED Revisions</li>
                                                        <li> <i class="fa fa-check-circle-o"></i>2 Stationary Design Sets
                                                        </li>
                                                        <li> <i class="fa fa-check-circle-o"></i>FREE MS Word Letterhead
                                                        </li>
                                                        <li> <i class="fa fa-check-circle-o"></i>Free Email Signature</li>
                                                        <li> <i class="fa fa-check-circle-o"></i>3 Page Custom Website</li>
                                                        <li> <i class="fa fa-check-circle-o"></i>Content Management System
                                                        </li>
                                                        <li> <i class="fa fa-check-circle-o"></i>2 Stock Photos</li>
                                                        <li> <i class="fa fa-check-circle-o"></i>2 Banner Designs</li>
                                                        <li> <i class="fa fa-check-circle-o"></i>jQuery Slider</li>
                                                        <li> <i class="fa fa-check-circle-o"></i>All Final Files Format
                                                            (AI, PSD, EPS, PNG, GIF,
                                                            JPG, PDF)</li>
                                                        <li> <i class="fa fa-check-circle-o"></i>100% Ownership Rights</li>
                                                        <li> <i class="fa fa-check-circle-o"></i>100% Satisfaction
                                                            Guarantee</li>
                                                        <li> <i class="fa fa-check-circle-o"></i>100% Unique Design
                                                            Guarantee</li>
                                                        <li> <i class="fa fa-check-circle-o"></i>100% Money Back Guarantee
                                                            *</li>
                                                    </ul>
                                                    <p class="text-center">Add on: <span class="pink sea">$50</span> for
                                                        24 Hours Rush Delivery
                                                    </p>
                                                    <div class="clearfix order-action">
                                                        <input class="btn-line-fill orderModalbtn" data-pkgname="Gold Logo" data-price="514"                                                          
                                                        type="submit" value="ORDER NOW" tabindex="0">
                                                    </div>
                                                    {{-- <span class="inclusive-black"><a
                                                            href="package/Gold-Logo-Package.html">VIEW DETAILS</a>
                                                    </span> --}}
                                                    <div class="actions row">
                                                        <div class="col-md-6 col-xs-6"><a class="action-no gre clearfix">
                                                                <span><small>Share your
                                                                        idea?</small>{{$phoneNumber}}</span></a></div>
                                                        <div class="col-md-6 col-xs-6"><a
                                                                onclick="$zopim.livechat.window.toggle()"
                                                                class="action-chat ali clearfix pull-right"
                                                                tabindex="0"> <span><small>Want to
                                                                        discuss?</small> Live Chat Now</span></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="contest-list__item">
                                            <div class="contest">
                                                <div class="single ">
                                                    <h3>3D Logo <br />Package</h3>
                                                    <span class="old-price">$1,088<small>.00</small> ONLY <i
                                                            class="cut"></i></span> <span
                                                        class="price">$534<small>.00</small> USD</span>
                                                    <p>Suitable for potential super-startups and brand revamps for
                                                        companies.</p>
                                                    <ul>
                                                        <li><i class="fa fa-check-circle-o"></i>3 Unique 3D Logo Concepts
                                                        </li>
                                                        <li><i class="fa fa-check-circle-o"></i>Light Effects and VFX</li>
                                                        <li><i class="fa fa-check-circle-o"></i>Fully Rendered</li>
                                                        <li><i class="fa fa-check-circle-o"></i>Multiple 3D Angles</li>
                                                        <li><i class="fa fa-check-circle-o"></i>By 3 Award Winning
                                                            Designers</li>
                                                        <li><i class="fa fa-check-circle-o"></i>72 hours Turnaround Time
                                                        </li>
                                                        <li><i class="fa fa-check-circle-o"></i>UNLIMITED Revisions</li>
                                                        <li><i class="fa fa-check-circle-o"></i>100% Ownership Rights</li>
                                                        <li><i class="fa fa-check-circle-o"></i>100% Satisfaction Guarantee
                                                        </li>
                                                        <li><i class="fa fa-check-circle-o"></i>100% Unique Design
                                                            Guarantee</li>
                                                        <li><i class="fa fa-check-circle-o"></i>100% Satisfaction Guarantee
                                                        </li>
                                                        <li><i class="fa fa-check-circle-o"></i>100% Money Back Guarantee *
                                                        </li>
                                                    </ul>
                                                    <p class="text-center">Add on: <span class="pink sea">$50</span> for
                                                        24 Hours Rush Delivery
                                                    </p>
                                                    <div class="clearfix order-action">
                                                        <input class="btn-line-fill orderModalbtn" data-pkgname="3D Logo" data-price="534"                                                          
                                                        type="submit" value="ORDER NOW" tabindex="0">
                                                    </div>
                                                    {{-- <span class="inclusive-black"><a
                                                            href="package/3D-Logo-Package.html">VIEW DETAILS</a>
                                                    </span> --}}
                                                    <div class="actions row">
                                                        <div class="col-md-6 col-xs-6"><a class="action-no gre clearfix">
                                                                <span><small>Share your
                                                                        idea?</small>{{$phoneNumber}}</span></a></div>
                                                        <div class="col-md-6 col-xs-6"><a
                                                                onclick="$zopim.livechat.window.toggle()"
                                                                class="action-chat ali clearfix pull-right"
                                                                tabindex="0"> <span><small>Want to
                                                                        discuss?</small> Live Chat Now</span></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="contest-list__item">
                                            <div class="contest">
                                                <div class="single">
                                                    <h3>Professional <br /> illustrative Package</h3>
                                                    <span class="old-price">$1,188<small>.00</small> ONLY <i
                                                            class="cut"></i></span> <span
                                                        class="price">$584<small>.00</small> USD</span>
                                                    <p>Suitable for potential super-startups and brand revamps for
                                                        companies.</p>
                                                    <ul>
                                                        <li><i class="fa fa-check-circle-o"></i>UNLIMITED Logo Design
                                                            Concepts</li>
                                                        <li><i class="fa fa-check-circle-o"></i>By 4 Designers</li>
                                                        <li><i class="fa fa-check-circle-o"></i>UNLIMITED Revisions</li>
                                                        <li><i class="fa fa-check-circle-o"></i>24 to 48 hours TAT</li>
                                                        <li><i class="fa fa-check-circle-o"></i>100% Ownership Rights</li>
                                                        <li><i class="fa fa-check-circle-o"></i>100% Satisfaction Guarantee
                                                        </li>
                                                        <li><i class="fa fa-check-circle-o"></i>100% Unique Design
                                                            Guarantee</li>
                                                        <li><i class="fa fa-check-circle-o"></i>100% Money Back Guarantee *
                                                        </li>
                                                    </ul>
                                                    <p class="text-center">Add on: <span class="pink sea">$50</span> for
                                                        24 Hours Rush Delivery
                                                    </p>
                                                    <div class="clearfix order-action">
                                                        <input class="btn-line-fill orderModalbtn" data-pkgname="Professional Logo" data-price="584"                                                          
                                                        type="submit" value="ORDER NOW" tabindex="0">
                                                    </div>
                                                    {{-- <span class="inclusive-black"><a
                                                            href="package/Professional-Illustrative-Package.html">VIEW
                                                            DETAILS</a> </span> --}}
                                                    <div class="actions row">
                                                        <div class="col-md-6 col-xs-6"><a class="action-no gre clearfix">
                                                                <span><small>Share your
                                                                        idea?</small>{{$phoneNumber}}</span></a></div>
                                                        <div class="col-md-6 col-xs-6"><a
                                                                onclick="$zopim.livechat.window.toggle()"
                                                                class="action-chat ali clearfix pull-right"
                                                                tabindex="0"> <span><small>Want to
                                                                        discuss?</small> Live Chat Now</span></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="contest-list__item">
                                            <div class="contest">
                                                <div class="single">
                                                    <h3>Basic Illustrative <br />Logo Package</h3>
                                                    <span class="old-price">$588<small>.00</small> ONLY <i
                                                            class="cut"></i></span> <span
                                                        class="price">$284<small>.00</small> USD</span>
                                                    <p>Suitable for potential super-startups and brand revamps for
                                                        companies.</p>
                                                    <ul>
                                                        <li><i class="fa fa-check-circle-o"></i>3 Custom Logo Design
                                                            Concepts</li>
                                                        <li><i class="fa fa-check-circle-o"></i>By 2 Designers</li>
                                                        <li><i class="fa fa-check-circle-o"></i>UNLIMITED Revisions</li>
                                                        <li><i class="fa fa-check-circle-o"></i>48 to 72 hours TAT</li>
                                                        <li><i class="fa fa-check-circle-o"></i>All Final Files Format (AI,
                                                            PSD, EPS, PNG, GIF, JPG,
                                                            PDF)</li>
                                                        <li><i class="fa fa-check-circle-o"></i>100% Ownership Rights</li>
                                                        <li><i class="fa fa-check-circle-o"></i>100% Satisfaction Guarantee
                                                        </li>
                                                        <li><i class="fa fa-check-circle-o"></i>100% Unique Design
                                                            Guarantee</li>
                                                        <li><i class="fa fa-check-circle-o"></i>100% Money Back Guarantee *
                                                        </li>
                                                    </ul>
                                                    <p class="text-center">Add on: <span class="pink sea">$50</span> for
                                                        24 Hours Rush Delivery
                                                    </p>
                                                    <div class="clearfix order-action">
                                                        <input class="btn-line-fill orderModalbtn" data-pkgname="Basic Illustrative" data-price="284"                                                          
                                                        type="submit" value="ORDER NOW" tabindex="0">
                                                    </div>
                                                    {{-- <span class="inclusive-black"><a
                                                            href="package/Basic-Illustrative-Logo-Package.html">VIEW
                                                            DETAILS</a> </span> --}}
                                                    <div class="actions row">
                                                        <div class="col-md-6 col-xs-6"><a class="action-no gre clearfix">
                                                                <span><small>Share your
                                                                        idea?</small>{{$phoneNumber}}</span></a></div>
                                                        <div class="col-md-6 col-xs-6"><a
                                                                onclick="$zopim.livechat.window.toggle()"
                                                                class="action-chat ali clearfix pull-right"
                                                                tabindex="0"> <span><small>Want to
                                                                        discuss?</small> Live Chat Now</span></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="contest-list__item">
                                            <div class="contest">
                                                <div class="single">
                                                    <h3>Startup Illustrative <br />Logo Package</h3>
                                                    <span class="old-price">$788<small>.00</small> ONLY <i
                                                            class="cut"></i></span> <span
                                                        class="price">$384<small>.00</small> USD</span>
                                                    <p>Suitable for potential super-startups and brand revamps for
                                                        companies.</p>
                                                    <ul>
                                                        <li><i class="fa fa-check-circle-o"></i>4 Custom Logo Design
                                                            Concepts</li>
                                                        <li><i class="fa fa-check-circle-o"></i>By 3 Designers</li>
                                                        <li><i class="fa fa-check-circle-o"></i>48 to 72 hours TAT</li>
                                                        <li><i class="fa fa-check-circle-o"></i>UNLIMITED Revisions</li>
                                                        <li><i class="fa fa-check-circle-o"></i>All Final Files Format (AI,
                                                            PSD, EPS, PNG, GIF, JPG,
                                                            PDF)</li>
                                                        <li><i class="fa fa-check-circle-o"></i>100% Ownership Rights</li>
                                                        <li><i class="fa fa-check-circle-o"></i>100% Satisfaction Guarantee
                                                        </li>
                                                        <li><i class="fa fa-check-circle-o"></i>100% Unique Design
                                                            Guarantee</li>
                                                        <li><i class="fa fa-check-circle-o"></i>100% Money Back Guarantee *
                                                        </li>
                                                    </ul>
                                                    <p class="text-center">Add on: <span class="pink sea">$50</span> for
                                                        24 Hours Rush Delivery
                                                    </p>
                                                    <div class="clearfix order-action">
                                                        <input class="btn-line-fill orderModalbtn" data-pkgname="Startup Illustrative" data-price="384"                                                          
                                                        type="submit" value="ORDER NOW" tabindex="0">
                                                    </div>
                                                    {{-- <span class="inclusive-black"><a
                                                            href="package/Startup-Illustrative-Logo-Package.html">VIEW
                                                            DETAILS</a> </span> --}}
                                                    <div class="actions row">
                                                        <div class="col-md-6 col-xs-6"><a class="action-no gre clearfix">
                                                                <span><small>Share your
                                                                        idea?</small>{{$phoneNumber}}</span></a></div>
                                                        <div class="col-md-6 col-xs-6"><a
                                                                onclick="$zopim.livechat.window.toggle()"
                                                                class="action-chat ali clearfix pull-right"
                                                                tabindex="0"> <span><small>Want to
                                                                        discuss?</small> Live Chat Now</span></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="contest-list__item" data-placeholder="">
                                            <div class="contest contest--cta">
                                                <div class="contest__description">
                                                    <div class="holder-offer">
                                                        <div class="d_t">
                                                            <div class="d_c"> <img
                                                                    src="{{ asset('assets/img/packge.png') }}">
                                                                <h3>Customize your <br />own package</h3>
                                                                <p>We saved a spot for you to customize your package.</p>
                                                                <a class="btn-line-fill" href="{{route('custom-packages')}}">
                                                                    <span class="button__inner">
                                                                        <span class="button__label"> Get started now
                                                                        </span> </span> </a>
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

                    </div>

                </div>
            </div>
          

        </section>

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
@endsection
