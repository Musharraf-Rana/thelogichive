<section class="section-padding gray_bg get_quote footer_get_quote">
    <div class="container">
        <div class="row">
            <div class="col-md-push-2 col-md-8 col-xs-12">

                <h3 class="text-center">Get Free Consultancy</h3>



                <p class="text-center grey">If you are interested in speaking with The Logic Hive about an upcoming
                    project, there are a number of ways we can make that happen.

                    Filling out the form would help us get the right person in touch with you, or you could give us a
                    call.</p>
                <form method="POST" action="https://www.thelogichive.com/quote/save" id="quoteFormBottom"
                    autocomplete="off">

                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6 margin-bottom-20 field-mergedright">
                            <input type="text" autocomplete="off" class="form-control" placeholder="Full Name"
                                name="name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Full Name'"
                                required="required" />
                        </div>
                        <input type="hidden" name="_token" value="wcBPDCXTm7Gfn5iFURHk8xUWFsbV2Da5M5fDAMY8">
                        <div class="col-xs-12 col-sm-6 col-md-6 margin-bottom-20 field-mergedleft">
                            <input type="email" autocomplete="off" class="form-control" placeholder="Email"
                                name="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'"
                                required="required" />
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 margin-bottom-20 field-mergedright">
                            <input type="number" min="1" autocomplete="off" class="form-control"
                                placeholder="Phone Number" name="number" onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Phone Number'" required="required" />
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 margin-bottom-20 field-mergedleft">
                            <input type="text" autocomplete="off" class="form-control" placeholder="Country"
                                name="country" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Country'"
                                required="required" />
                        </div>
                        {{-- <div class="col-xs-12 col-sm-6 col-md-6 margin-bottom-20 field-mergedright">
                <select class="cs-select cs-skin-elastic services" name="interest" id="interest" required="required">
                  <option value="" disabled>I am Interested in</option>
                  <option value="Logo Design">Logo Design </option>
                  <option value="Brand Development ">Brand Development </option>
                  <option value="Web Design & Development ">Web Design & Development </option>
                  <option value="App Design & Development">App Design & Development </option>
                  <option value="Back-End Development">Back-End Development </option>
                  <option value="Digital Marketing ">Digital Marketing </option>
                  <option value="Marketing Collaterals">Marketing Collaterals </option>
                  <option value="Motion Graphics">Motion Graphics </option>
                  <option value="Website Management">Website Management </option>
                  <option value="Domain Registration">Domain Registration </option>
                  <option value="Creative Copywriting">Creative Copywriting </option>
                  <option value="2D & 3D Illustration">2D & 3D Illustration </option>
                </select>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-6 margin-bottom-20 field-mergedleft">
                <select class="cs-select cs-skin-elastic services" name="budget" id="budget" required="required">
                  <option value="" disabled>Forecasted-Budget</option>
                  <option>Less than $1000</option>
                  <option>$1000 to $2000</option>
                  <option>$2000 to $5000</option>
                  <option>$5000 to $10,000 </option>
                  <option>$20,000 to $30,000</option>
                  <option>$35,000 to $50,000</option>
                  <option>$50,000 and above</option>
                </select>

              </div> --}}
                        <div class="col-xs-12 col-sm-12 col-md-12 margin-bottom-20">
                            <textarea class="form-control" name="description" placeholder="Talk about your project" onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Project Description'" required="required"></textarea>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 margin-bottom-20 field-mergedleft">
                            <input class="checkbx-btn" style="height: auto;margin: -5px 0 0 6px;vertical-align: top;"
                                type="checkbox" autocomplete="off" class="form-control" required
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Country'"
                                required="required" />
                            <p class="checkbx-btnpara"
                                style="display: inline-block; padding: 0; margin: -10px 0 0 8px; font-size: 14px;">
                                Please hit the
                                check box to confirm your request</p>
                        </div>
                        <div class="col-md-12 col-xs-12 margin-bottom-20 field-mergedleft mid-body">
                            <div class="clearfix">

                                <!--<div class="col-lg-12">
                  



                <div class="company_profile pull-right">
                  <label class="control control--checkbox">
                  include Company Profile
                  <input type="checkbox" checked="checked"/>
                  <div class="control__indicator"></div>
                  </label>
                </div>



                <div class="company_profile fill-help pull-left">
                  <label class="control control--checkbox">
                  Please Fill all the field
                 
                  
                  </label>
                </div>

                </div>-->

                            </div>
                            <div class="text-center">
                                <input class="btn-fill btn-quote" type="submit" id="quoteSubmit" name="quote"
                                    value="CONTACT OUR TEAM" />
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="page" value="{{ route('home') }}" />
                </form>
            </div>
            <!-- end col-md-6 -->

        </div>
        <!-- end row -->

    </div>
    <!-- end container -->

</section>
<section class="section-padding mult-contact-form contact-form-footer">
    <div class="container">
        <div class="col-xs-12 col-sm-4 col-md-4 mult-contact-form-inner">
            <h3>Email</h3>
            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-12 clearfix">

                    <p class="clearfix">
                        <span class="icon-mail"></span>

                        <span>

                            <small class="phone-number"><a href="mailto:idea@thelogichive.com"
                                    target="_top">idea@thelogichive.com </a></small>
                            <small class="phone-number"><a href="mailto:share@thelogichive.com"
                                    target="_top">share@thelogichive.com </a></small>

                        </span>



                    </p>

                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 mult-contact-form-inner">
            <h3>Contact</h3>
            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-12 clearfix">

                    <p class="clearfix">

                        <span class="icon-placeholder"></span>

                        <span class="para">Mid-Market, 1390 Market Street, <br>Suite 200, San Francisco, 94102,
                            USA</span>
                    </p>

                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 mult-contact-form-inner">
            <h3>Phone</h3>
            <div class="row">

                <div class="col-md-12 col-xs-12 col-sm-12 clearfix">


                    <p class="clearfix">

                        <span class="icon-phone-call"></span>

                        <span>

                            <small class="phone-number">{{$phoneNumber}} - US</small>
                            {{-- <small class="phone-number">+44-800-0418105 - UK</small> --}}

                        </span>

                    </p>

                </div>
            </div>
        </div>

    </div>
    <!-- end container -->

</section>
<footer class="wow">
    <div class="container sub-footer section-padding">
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="clearfix">
                <div class="col-md-4 col-lg-4 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h3>TOP NOTCH SERVICES</h3>
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                    href="#collapseOne" aria-expanded="false" aria-controls="collapseTwo">
                                    <i class="more-less glyphicon glyphicon-plus"></i>
                                    <i class="more-less glyphicon glyphicon-minus"></i>
                                    TOP NOTCH SERVICES
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse" role="tabpanel"
                            aria-labelledby="headingOne">
                            <div class="panel-body">
                                <div class="col-md-6 col-lg-6 col-xs-12">
                                    <div class="clearfix">
                                        <div class="address">
                                            <ul>
                                                <li><a href="services/Brand-Development.html">Brand Development</a>
                                                </li>
                                                <li><a href="web.html">Web Design and Development</a></li>
                                                <li><a href="services/Back-End-Development.html">Back-End
                                                        Development</a></li>
                                                <li><a href="services/Digital-Marketing.html">Digital Marketing</a>
                                                </li>
                                                <li><a href="services/Marketing-Collateral.html">Marketing
                                                        Collateral</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-xs-12">
                                    <ul>
                                        <li><a href="services/Motion-Graphics.html">Motion Graphics</a></li>
                                        <li><a href="services/Website-Management.html">Website Management</a></li>
                                        <li><a href="services/Domain-Registration.html">Domain Registration</a></li>
                                        <li><a href="services/Creative-Copywriting.html">Creative Copywriting</a></li>
                                        <li><a href="services/2D-%26-3D-illustration-animation.html">2D & 3D
                                                Illustration</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="col-md-2 col-lg-2 col-xs-12">

                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h3>PACKAGES</h3>
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                    href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <i class="more-less glyphicon glyphicon-plus"></i>
                                    <i class="more-less glyphicon glyphicon-minus"></i>
                                    PACKAGES
                                </a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
                            aria-labelledby="headingTwo">
                            <div class="panel-body">
                                <div class="col-md-12 col-lg-12 col-xs-12">
                                    <ul>
                                        <li><a href="packages/logo.html">Logo Packages</a></li>
                                        <li><a href="packages/web.html">Web Packages</a></li>
                                        <li><a href="packages/branding.html">Corporate Branding</a></li>
                                        <li><a href="packages/ecommerce.html">Ecommerce</a></li>
                                        <li><a href="packages/motion-graphic.html">Motion Graphics</a></li>
                                        <li><a href="packages/seo.html">SEO</a></li>
                                        <li><a href="packages/social.html">Social Media</a></li>
                                        <li><a href="packages/content.html">Content Writing</a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="col-md-2 col-lg-2 col-xs-12">

                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h3>COMPANY</h3>
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                    href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <i class="more-less glyphicon glyphicon-plus"></i>
                                    <i class="more-less glyphicon glyphicon-minus"></i>
                                    COMPANY
                                </a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                            aria-labelledby="headingThree">
                            <div class="panel-body">
                                <div class="col-md-12 col-lg-12 col-xs-12 col-md-2">
                                    <ul>
                                        <li><a href="{{ route('about') }}">About</a></li>
                                        <li><a href="services.html">Services</a></li>
                                        <li><a href="{{ route('showcase') }}">Showcase</a></li>
                                        <li><a href="{{ route('contact') }}">Contact</a></li>
                                        <li><a href="{{ route('testimonial') }}">Testimonial</a></li>
                                        <li><a href="https://designproficient.com/blog/">Blog</a></li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-lg-4 col-xs-12">

                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingFour">
                            <h3>Follow Us</h3>

                        </div>
                        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel"
                            aria-labelledby="headingFour">
                            <div class="panel-body">
                                <div class="col-md-12 col-lg-12 col-xs-12 col-md-2">


                                    <ul class="footer-group">
                                        <li><a target="_blank" href="https://www.facebook.com/DesignProficient/"><i
                                                    class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a target="_blank" href="https://twitter.com/dsnproficient"><i
                                                    class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a target="_blank"
                                                href="https://www.linkedin.com/company-beta/13343612"><i
                                                    class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                        <li><a target="_blank"
                                                href="https://www.instagram.com/designproficientofficial/"><i
                                                    class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                        <li><a target="_blank" href="https://medium.com/@designproficient"><i
                                                    class="fa fa-medium" aria-hidden="true"></i></a> </li>
                                        <li><a target="_blank"
                                                href="https://www.pinterest.com/DesignProficientOfficial/"><i
                                                    class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                                        <li><a target="_blank" href="https://vimeo.com/designproficientofficial"><i
                                                    class="fa fa-vimeo" aria-hidden="true"></i></a></li>
                                        <li><a target="_blank" href="https://dribbble.com/design-proficient"><i
                                                    class="fa fa-dribbble" aria-hidden="true"></i></a> </li>
                                    </ul>
                                    <a href="http://www.dmca.com/Protection/Status.aspx?ID=e8023e7e-ce1b-46c1-bf63-1c0fcb4ff438"
                                        title="DMCA.com Protection Status" class="dmca-badge"> <img
                                            src="https://images.dmca.com/Badges/_dmca_premi_badge_4.png?ID=e8023e7e-ce1b-46c1-bf63-1c0fcb4ff438"
                                            alt="DMCA.com Protection Status" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>
    <section class="copright">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-xs-12">
                    <p>© 2019 The Logic Hive | All rights reserved.</p>
                </div>
                <div class="col-md-8"> <span class="privacy pull-right">
                        <a href="https://www.designproficient.com/privacy-policy">Privacy Policy</a>
                        <a href="https://www.designproficient.com/terms">Terms of Service</a></span> </div>
            </div>
        </div>
    </section>
</footer>




<div class="modal fade" id="orderModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-custom" role="document">
        <div class="modal-content">
            <div class="d_t" style="background: black;padding: 14px 0px;">
                <div class="d_c">
                    <div class="text-center logo"><a href="{{ route('home') }}"><img
                                src="{{ asset('assets/img/logo-inside.png') }}"></a></div>
                    <form id="orderForm">
                      <input type="hidden" name="pkgname" id="pkgName">
                      <input type="hidden" name="pkgprice" id="pkgPrice">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-6 margin-bottom-20 field-mergedright">
                                    <input type="text" autocomplete="off" class="form-control"
                                        placeholder="Full Name" name="name" onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Full Name'" required="required" />
                                </div>
                                <input type="hidden" name="_token"
                                    value="wcBPDCXTm7Gfn5iFURHk8xUWFsbV2Da5M5fDAMY8">
                                <div class="col-xs-12 col-sm-6 col-md-6 margin-bottom-20 field-mergedleft">
                                    <input type="email" autocomplete="off" class="form-control"
                                        placeholder="Email" name="email" onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Email'" required="required" />
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6 margin-bottom-20 field-mergedright">
                                    <input type="number" min="1" autocomplete="off" class="form-control"
                                        placeholder="Phone Number" name="number" onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Phone Number'" required="required" />
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6 margin-bottom-20 field-mergedleft">
                                    <input type="text" autocomplete="off" class="form-control"
                                        placeholder="Country" name="country" onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Country'" required="required" />
                                </div>


                                <div class="col-xs-12 col-sm-12 col-md-12 margin-bottom-20">
                                    <textarea class="form-control" name="description" placeholder="Talk about your project"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Project Description'" required="required"></textarea>
                                </div>

                                <div class="col-md-12 col-xs-12 margin-bottom-20 field-mergedleft mid-body">
                                    <div class="clearfix">



                                    </div>
                                    <div class="text-center">
                                        <input class="btn-fill btn-quote" type="submit" id="quoteSubmit"
                                            name="quote" value="CONTACT OUR TEAM" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
