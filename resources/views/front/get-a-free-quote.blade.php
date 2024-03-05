@extends('front.layout.main')
@section('title')
    <title>Get a custom quote | The Logic Hive</title>
@endsection
<style type="text/css">
    .header,
    footer {
        display: none !important
    }

    .logo {
        padding-top: 82px;
    }

    .getQuote .d_t {
        width: 100%;
    }

    .getQuote .d_t .logo {
        background-color: #2e2e2e;
    }

    .get_quote.section-padding {
        padding: 10px 0px 60px 0px;
    }

    .share-wrapper {
        background-color: #2e2e2e;
    }

    .footer_get_quote {
        display: none !important
    }

    .contact-form-footer {
        display: none !important
    }
</style>

@section('content')
    <section class="getQuote">
        <div class="share-wrapper">
            <div class="d_t">
                <div class="d_c">
                    <div class="text-center logo"><a href="{{route('home')}}"><img
                                src="{{ asset('assets/img/logo-inside.png') }}"></a></div>
                    <section class="section-padding gray_bg get_quote">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-push-2 col-md-8">

                                    <h3 class="text-center">Get a Free Quote</h3>



                                    <p class="text-center grey">If you are interested in speaking with The Logic Hive
                                        about an upcoming
                                        project, there are a number of ways we can make that happen.

                                        Filling out the form would help us get the right person in touch with you, or you
                                        could give us a
                                        call.</p>
                                    <form method="POST" action="" id="quoteForm" autocomplete="off">

                                        <div class="row">
                                            <div class="col-xs-12 col-sm-6 col-md-6 margin-bottom-20 field-mergedright">
                                                <input type="text" autocomplete="off" class="form-control"
                                                    placeholder="Full Name" name="name" onfocus="this.placeholder = ''"
                                                    onblur="this.placeholder = 'Full Name'" required="required" />
                                            </div>

                                            <div class="col-xs-12 col-sm-6 col-md-6 margin-bottom-20 field-mergedleft">
                                                <input type="email" autocomplete="off" class="form-control"
                                                    placeholder="Email" name="email" onfocus="this.placeholder = ''"
                                                    onblur="this.placeholder = 'Email'" required="required" />
                                            </div>
                                            <div class="col-xs-12 col-sm-6 col-md-6 margin-bottom-20 field-mergedright">
                                                <input type="number" min="1" autocomplete="off" class="form-control"
                                                    placeholder="Phone Number" name="number"
                                                    onfocus="this.placeholder = ''"
                                                    onblur="this.placeholder = 'Phone Number'" required="required" />
                                            </div>
                                            <div class="col-xs-12 col-sm-6 col-md-6 margin-bottom-20 field-mergedleft">
                                                <input type="text" autocomplete="off" class="form-control"
                                                    placeholder="Country" name="country" onfocus="this.placeholder = ''"
                                                    onblur="this.placeholder = 'Country'" required="required" />
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12 margin-bottom-20 field-mergedright">
                                                <select class="cs-select cs-skin-elastic services" name="interest"
                                                    id="interest" required="required">
                                                    <option value="" disabled>I am Interested in</option>
                                                    <option value="Logo Design">Logo Design </option>
                                                    <option value="Brand Development ">Brand Development </option>
                                                    <option value="Web Design & Development ">Web Design & Development
                                                    </option>
                                                    <option value="App Design & Development">App Design & Development
                                                    </option>
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
                                            <div class="col-md-6 col-sm-6 col-xs-12 margin-bottom-20 field-mergedleft">
                                                <select class="cs-select cs-skin-elastic" name="budget" id="budget"
                                                    required="required">
                                                    <option value="" disabled>Forecasted-Budget</option>
                                                    <option>$5000 to $10,000 </option>
                                                    <option>$20,000 to $30,000</option>
                                                    <option>$35,000 to $50,000</option>
                                                    <option>$50,000 and above</option>
                                                </select>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12 margin-bottom-20">
                                                <textarea class="form-control" name="description" placeholder="Talk about your project" onfocus="this.placeholder = ''"
                                                    onblur="this.placeholder = 'Project Description'" required="required"></textarea>
                                            </div>
                                            <div class="col-md-12 col-xs-12 margin-bottom-20 field-mergedleft">
                                                <div class="clearfix">
                                                </div>
                                                <div class="text-center">
                                                    <input class="btn-fill btn-quote" type="submit" id="quoteSubmit"
                                                        name="quote" value="CONTACT OUR TEAM" />
                                                </div>
                                            </div>
                                        </div>
                                        <input type="hidden" name="page" value="Get-a-Free-Quote.html" />
                                    </form>
                                </div>
                                <!-- end col-md-6 -->

                            </div>
                            <!-- end row -->

                        </div>
                        <!-- end container -->

                    </section>
                    <section class="section-padding mult-contact-form">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4">
                                    <h3>Email</h3>
                                    <div class="row">

                                        <div class="col-md-12 clearfix">

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
                                <div class="col-md-4">
                                    <h3>Contact</h3>
                                    <div class="row">

                                        <div class="col-md-12 clearfix">
                                            <p class="clearfix">
                                                <span class="icon-placeholder"></span>
                                                <span class="para">Mid-Market, 1390 Market Street, <br>Suite 200, San
                                                    Francisco, 94102,
                                                    USA</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <h3>Phone</h3>
                                    <div class="row">
                                        <div class="col-md-12 clearfix">
                                            <p class="clearfix">
                                                <span class="icon-phone-call"></span>
                                                <span>
                                                    <small class="phone-number">1-866-978-6636 - US</small>
                                                    <small class="phone-number">44 800 0418105 - UK</small>
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- end row -->
                            </div>
                        </div>
                        <!-- end container -->
                    </section>
                    <!--end get_quote Section-->
                </div>
            </div>
        </div>
    </section>
@endsection
