@extends('front.layout.main')
@section('title')
    <title>Reviews From Our Satisfied Customers!  | The Logic Hive </title>
@endsection

@section('content')

<style type="text/css">
    .secondary-nav-wrap {
      display: none;
    }

    header .logo a {
      background-position: bottom center;
    }

    .call-action span {
      color: #16a085;
    }

    .call-action span small {
      color: #626262;
    }

    .nav-toggle {
      opacity: 0.3;
    }

    .hero-services {
      background: url('none.html');
      background-size: auto !important;
      height: auto;
      background-color: #fff !important;
    }

    #header-sroll {
      background-color: #fff;
      box-shadow: 1px -10px 26px #b7b7b7;
    }





    header #header-sroll ul#navigation li a {
      color: #888888;
      opacity: 1;
      -webkit-transition: none;
      -moz-transition: none;
      -ms-transition: none;
      -o-transition: none;
      transition: none;
    }

    header #header-sroll .call-action span {
      color: #2c2c2c;
      -webkit-transition: none;
      -moz-transition: none;
      -ms-transition: none;
      -o-transition: none;
      transition: none;
    }

    header #header-sroll .call-action span small {
      color: #888888;
      -webkit-transition: none;
      -moz-transition: none;
      -ms-transition: none;
      -o-transition: none;
      transition: none;
    }

    header #header-sroll .call-action a {
      color: #888888;
      -webkit-transition: none;
      -moz-transition: none;
      -ms-transition: none;
      -o-transition: none;
      transition: none;
    }


    header #header-sroll .nav-toggle span,
    header #header-sroll .nav-toggle span:before,
    header #header-sroll .nav-toggle span:after {
      background: #631a79;
    }


    .top-action .btn-line-fill {
      color: #fff;
    }

    header #header-sroll .top-action .btn-line-fill {
      color: #b8285a;
    }

    #header-sroll.small .top-action .btn-line-fill {
      color: #b8285a;
    }

    .top-action .btn-line-fill:hover {
      color: #fff !important;
    }

    #header-sroll.small .nav-toggle span,
    #header-sroll.small .nav-toggle span:before,
    #header-sroll.small .nav-toggle span:after {
      background: #631a79;
    }
  </style>




  <div class="testimonials-main-video">
    <section class="section-padding testimonials wow fadeInDown" data-wow-delay="0.2s">
      <div class="container">
        <div class="">
          <div class="row ">

            <div class="col-md-6 col-sm-6 col-xs-12 fadeInDown">
              <div class="testimonial_inner">
                <div class="testimonial_bg">
                  <div class="testimonial_bg-inner">

                    <video width="500" height="380" controls preload="metadata">
                      <source src="{{asset('assets/videos/Rick-May_Dennis_client_x264.mp4#t=0.1')}}" type="video/mp4">
                      Your browser does not support the video tag.
                    </video>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-sm-6 col-xs-12 fadeInDown">
              <div class="testimonial-details">
                <div class="testimonial-sec-tab">
                  <div class="testimonial-sec-inner clearfix">
                    <div class="testimonial-co"></div>

                    <h3>The Logic Hive Rocked!!</h3>
                    <p>The website they developed for me looks amazing, Couldn't ask for a better team to work with,
                      They are responsive and did incredible job. </p>
                    <p class="testimonial-second-name">— Rick May, Rick May Photography</p>

                    <div class="star"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star"
                        aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star"
                        aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>


          <div class="row mtpx-fortestimonial">

            <div class="col-md-6 col-sm-6 col-xs-12 fadeInDown">
              <div class="testimonial-details">
                <div class="testimonial-sec-tab">
                  <div class="testimonial-sec-inner clearfix">
                    <div class="testimonial-co"></div>

                    <h3>Five Stars and Two Thumbs Up!!</h3>
                    <p>From start to finish the process was seamless and smooth, Logo and Business cards looks great. I
                      highly recommend working with The Logic Hive team. </p>
                    <p class="testimonial-second-name">— Ryan Labossiere, Rocky Mountain Riptide</p>

                    <div class="star"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star"
                        aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star"
                        aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-sm-6 col-xs-12 fadeInDown">
              <div class="testimonial_inner">
                <div class="testimonial_bg">
                  <div class="testimonial_bg-inner">

                    <video width="500" height="380" controls preload="metadata">
                      <source src="{{asset('assets/videos/123_Danny_Client_x264.mp4#t=0.1')}}" type="video/mp4">
                      Your browser does not support the video tag.
                    </video>
                  </div>
                </div>
              </div>
            </div>

          </div>

          <div class="row mtpx-fortestimonial">

            <div class="col-md-6 col-sm-6 col-xs-12 fadeInDown">
              <div class="testimonial_inner">
                <div class="testimonial_bg">
                  <div class="testimonial_bg-inner">

                    <video width="500" height="380" controls preload="metadata">
                      <source src="{{asset('assets/videos/1234_Danny_Client_x264.mp4#t=0.1')}}" type="video/mp4">
                      Your browser does not support the video tag.
                    </video>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-sm-6 col-xs-12 fadeInDown">
              <div class="testimonial-details">
                <div class="testimonial-sec-tab">
                  <div class="testimonial-sec-inner clearfix">
                    <div class="testimonial-co"></div>

                    <h3>Big Shout-out to the The Logic Hive Team!!</h3>
                    <p>Wow! They turned my dream into reality and bring it to live. from Logo creation, Web and App
                      development they have been Rocking it all through. They have the talented team you can trust.</p>
                    <p class="testimonial-second-name">— Bhooshan Ramchurn, SteamWipe</p>

                    <div class="star"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star"
                        aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star"
                        aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>

          <div class="row mtpx-fortestimonial">

            <div class="col-md-6 col-sm-6 col-xs-12 fadeInDown">
              <div class="testimonial-details">
                <div class="testimonial-sec-tab">
                  <div class="testimonial-sec-inner clearfix">
                    <div class="testimonial-co"></div>

                    <h3>We Couldn't Ask for a Better Job!!</h3>
                    <p>I want to thank The Logic Hive team for doing such a great job on our Website, it was easy and
                      phenominal. Thankyou very much and looking forward to doing business with The Logic Hive in the
                      future.</p>
                    <p class="testimonial-second-name">— Michael Vanzille, Achievers Day School</p>

                    <div class="star"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star"
                        aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star"
                        aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-sm-6 col-xs-12 fadeInDown">
              <div class="testimonial_inner">
                <div class="testimonial_bg">
                  <div class="testimonial_bg-inner">

                    <video width="500" height="380" controls preload="metadata">
                      <source src="{{asset('assets/videos/Achievers-Day-School_Dennis_client_x264.mp4#t=0.1')}}" type="video/mp4">
                      Your browser does not support the video tag.
                    </video>
                  </div>
                </div>
              </div>
            </div>

          </div>

          <div class="row mtpx-fortestimonial">

            <div class="col-md-6 col-sm-6 col-xs-12 fadeInDown">
              <div class="testimonial_inner">
                <div class="testimonial_bg">
                  <div class="testimonial_bg-inner">

                    <video width="500" height="380" controls preload="metadata">
                      <source src="{{asset('assets/videos/Bundle-You_Dennis_client_x264.mp4#t=0.1')}}" type="video/mp4">
                      Your browser does not support the video tag.
                    </video>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-sm-6 col-xs-12 fadeInDown">
              <div class="testimonial-details">
                <div class="testimonial-sec-tab">
                  <div class="testimonial-sec-inner clearfix">
                    <div class="testimonial-co"></div>

                    <h3>Working with The Logic Hive is a Blessing!!</h3>
                    <p>Truely Amazing! I honestly can't thank them enough. the whole process was very smooth and the
                      team is like family to me now.</p>
                    <p class="testimonial-second-name">— Hayden Wertz, Bundle You</p>

                    <div class="star"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star"
                        aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star"
                        aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>

          <div class="row mtpx-fortestimonial">

            <div class="col-md-6 col-sm-6 col-xs-12 fadeInDown">
              <div class="testimonial-details">
                <div class="testimonial-sec-tab">
                  <div class="testimonial-sec-inner clearfix">
                    <div class="testimonial-co"></div>

                    <h3>We Highly Recommend the Services at The Logic Hive!!</h3>
                    <p>For about year and a half we've been working with The Logic Hive. The team is very supportive,
                      quick and efficient. We're very please with the service they have provided.</p>
                    <p class="testimonial-second-name">— Curt Nordal, GoldenState Soccer</p>

                    <div class="star"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star"
                        aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star"
                        aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-sm-6 col-xs-12 fadeInDown">
              <div class="testimonial_inner">
                <div class="testimonial_bg">
                  <div class="testimonial_bg-inner">

                    <video width="500" height="380" controls preload="metadata">
                      <source src="{{asset('assets/videos/Curt-Nordal_Jasper_Client_x264.mp4#t=0.1')}}" type="video/mp4">
                      Your browser does not support the video tag.
                    </video>
                  </div>
                </div>
              </div>
            </div>

          </div>

          <div class="row mtpx-fortestimonial">

            <div class="col-md-6 col-sm-6 col-xs-12 fadeInDown">
              <div class="testimonial_inner">
                <div class="testimonial_bg">
                  <div class="testimonial_bg-inner">

                    <video width="500" height="380" controls preload="metadata">
                      <source src="{{asset('assets/videos/Mike-heppert.mp4#t=0.1')}}" type="video/mp4">
                      Your browser does not support the video tag.
                    </video>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-sm-6 col-xs-12 fadeInDown">
              <div class="testimonial-details">
                <div class="testimonial-sec-tab">
                  <div class="testimonial-sec-inner clearfix">
                    <div class="testimonial-co"></div>

                    <h3>I Would Recommend The Logic Hive to Anyone!!</h3>
                    <p>They helped us developed a website from scratch, They've been easily accessible, efficient,
                      responsive and a pleasure to working with them throughout the entire project.</p>
                    <p class="testimonial-second-name">— Mike Heppert, Owner at Life for Kids</p>

                    <div class="star"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star"
                        aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star"
                        aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>

          <div class="row mtpx-fortestimonial">

            <div class="col-md-6 col-sm-6 col-xs-12 fadeInDown">
              <div class="testimonial-details">
                <div class="testimonial-sec-tab">
                  <div class="testimonial-sec-inner clearfix">
                    <div class="testimonial-co"></div>

                    <h3>I Can't Recommend The Logic Hive Highly Enough!!</h3>
                    <p>I have been working with The Logic Hive for a couple of years now, They have designed and
                      developed couple of logos and websites for us. They have been very responsive to all our emails
                      and get the work done in very timely manner. </p>
                    <p class="testimonial-second-name">— Lisa Taylor, Beach Life Society</p>

                    <div class="star"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star"
                        aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star"
                        aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-sm-6 col-xs-12 fadeInDown">
              <div class="testimonial_inner">
                <div class="testimonial_bg">
                  <div class="testimonial_bg-inner">

                    <video width="500" height="380" controls preload="metadata">
                      <source src="{{asset('assets/videos/Lisa-Taylor-Testimonial_Jasper_Client_x264.mp4#t=0.1')}}" type="video/mp4">
                      Your browser does not support the video tag.
                    </video>
                  </div>
                </div>
              </div>
            </div>

          </div>

          <div class="row mtpx-fortestimonial">

            <div class="col-md-6 col-sm-6 col-xs-12 fadeInDown">
              <div class="testimonial_inner">
                <div class="testimonial_bg">
                  <div class="testimonial_bg-inner">
                    <iframe class="testimonials_video_frame" src="https://player.vimeo.com/video/237600588"
                      webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-sm-6 col-xs-12 fadeInDown">
              <div class="testimonial-details">
                <div class="testimonial-sec-tab">
                  <div class="testimonial-sec-inner clearfix">
                    <div class="testimonial-co"></div>

                    <h3>Sending Out a Great Thankyou To The Logic Hive</h3>
                    <p>Elijah Excavation sending out a great thankyou to The Logic Hive for their services! Orlando,
                      you did a wonderful job. Looking forward to working more with you. </p>
                    <p class="testimonial-second-name">— Joseph D Plumme, Elijah Excavation</p>

                    <div class="star"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star"
                        aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star"
                        aria-hidden="true"></i><i class="fa fa-star-half-o" aria-hidden="true"></i>
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

  <section class="section-padding testimonials testimonials-custom-add wow fadeInDown" data-wow-delay="0.2s">
    <div class="container">

      <div class="row">
        <div class="col-md-12">

          <h3 class="wow fadeInDown" data-wow-delay="0.2s">Numbers That Move Mountains</h3>

          <p class="wow fadeInDown text-center main" data-wow-delay="0.4s">When we say we aim for the best, we
            definitely mean we set it as our goal to make a change and move mountains<br>
            with the projects we do. Reach us today with your project goals and join hands to design excellence.</p>


        </div>
      </div>

      <div>


        <div class="row set-height">
          <div class="col-md-6 col-xs-12">

            <div class="testi_box">


              <div class="user_aplha">CR</div>

              <h3>Loved Their Customer Support!</h3>
              <p>The team at The Logic Hive were excellent to connect with. I got a beautiful logo design from them
                without any hassle. Would definitely recommend working with them </p>

              <span class="testi_owner">Cynthia Rashford, Masterpiece Premium Wines</span>

              <span class="stars">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>

              </span>


            </div>

          </div>
          <div class="col-md-6 col-xs-12">

            <div class="testi_box">

              <div class="user_aplha">CH</div>

              <h3>Love my Logo!</h3>
              <p>I was a bit hesitant at first but after viewing the logo design for the Travel Wagon, I felt like the
                money I invested was well-spent. </p>

              <span class="testi_owner">Chase Helmsley, The Travel Wagon</span>

              <span class="stars">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>

              </span>

            </div>

          </div>
        </div>
        <div class="row set-height">
          <div class="col-md-6 col-xs-12">

            <div class="testi_box">


              <div class="user_aplha">CR</div>

              <h3>These Guys are Good</h3>
              <p>From the start to the very end, I got excellent customer services and amazing brand development
                services. Loved working with The Logic Hive</p>

              <span class="testi_owner">Casey Reynolds, High End Movers</span>

              <span class="stars">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-half-o" aria-hidden="true"></i>

              </span>


            </div>



          </div>
          <div class="col-md-6 col-xs-12">

            <div class="testi_box">


              <div class="user_aplha">GS</div>

              <h3>Very Happy With The Services</h3>
              <p>After I received my logo I needed some minor changes and I felt like it would be a problem but as
                always, the staff at The Logic Hive helped me through every step. It was a great experience</p>

              <span class="testi_owner">Gloria Sylvester, Vista Events Greece</span>

              <span class="stars">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-half-o" aria-hidden="true"></i>

              </span>


            </div>



          </div>
        </div>
        <div class="row set-height">
          <div class="col-md-6 col-xs-12">

            <div class="testi_box">


              <div class="user_aplha">SC</div>

              <h3>Remodeled The Look</h3>
              <p>I run a small veterinary clinic for pets and The Logic Hive provided me with the perfect makeover
                that I needed. Shoutout to the support team who were always super helpful!</p>

              <span class="testi_owner">Sebastian Crawford, The Vet</span>

              <span class="stars">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-half-o" aria-hidden="true"></i>

              </span>
            </div>

          </div>
          <div class="col-md-6 col-xs-12">

            <div class="testi_box">


              <div class="user_aplha">BK</div>

              <h3>Awesome Web Design Services</h3>
              <p>The Logic Hive’s amazing web design team gave my website a whole new look! I am extremely
                overwhelmed by the services provided. </p>

              <span class="testi_owner">Brandon Kholer, Beast Strong Powerhouse</span>

              <span class="stars">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-half-o" aria-hidden="true"></i>

              </span>


            </div>



          </div>
        </div>

        <div class="row set-height">
          <div class="col-md-6 col-xs-12">

            <div class="testi_box">


              <div class="user_aplha">SN</div>

              <h3>Exceptional Work by DP Team</h3>
              <p>I got some extra panels added to the website and got it redesigned. The services were brilliantly
                prices and excellently executed. </p>

              <span class="testi_owner">Stephen Niemann, Perceptive Management Group</span>

              <span class="stars">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-half-o" aria-hidden="true"></i>

              </span>


            </div>



          </div>
          <div class="col-md-6 col-xs-12">

            <div class="testi_box">


              <div class="user_aplha">XM</div>

              <h3>Animated Video is Crazy Good!</h3>
              <p>We got ourselves a beautifully animated video for X Time and the work that The Logic Hive put in to
                it clearly speaks boundaries. Loved the experience! </p>

              <span class="testi_owner">Xavier Mathews, X Time</span>

              <span class="stars">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-half-o" aria-hidden="true"></i>

              </span>


            </div>



          </div>
        </div>

        <div class="row set-height">
          <div class="col-md-6 col-xs-12">

            <div class="testi_box">


              <div class="user_aplha">CF</div>

              <h3>Brilliant Responsive Work</h3>
              <p>We talked to The Logic Hive regarding web design services for our website and how it was affecting
                our rankings. The team provided us responsive web design services and SEO consultation too! </p>

              <span class="testi_owner">The Colbert Family, R-CISC</span>

              <span class="stars">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-half-o" aria-hidden="true"></i>

              </span>


            </div>

          </div>
          <div class="col-md-6 col-xs-12">

            <div class="testi_box">


              <div class="user_aplha">TS</div>

              <h3>Excellent Web Consultation For My Website</h3>
              <p>I was a bit confused when I got to The Logic Hive but the excellent team helped us along the way!
                We’re more than happy working with them.</p>

              <span class="testi_owner">Tiara Simpson , Afrosignature</span>

              <span class="stars">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-half-o" aria-hidden="true"></i>

              </span>


            </div>



          </div>
        </div>


        <div class="row set-height">
          <div class="col-md-6 col-xs-12">

            <div class="testi_box">


              <div class="user_aplha">GG</div>

              <h3>Web Looks Amazing!</h3>
              <p>My website looks far better thanks to the web design and development services I just received.
                Thankyou, Team The Logic Hive </p>

              <span class="testi_owner">George Gresilva, Gresilva Grills</span>

              <span class="stars">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-half-o" aria-hidden="true"></i>

              </span>


            </div>

          </div>
          <div class="col-md-6 col-xs-12">

            <div class="testi_box">


              <div class="user_aplha">VL</div>

              <h3>5/5 stars for animation</h3>
              <p>I needed an excellent animated video for my business and I had a script in mind. The Logic Hive’s
                animation team were very helpful and gave me just the perfect video that I wanted </p>

              <span class="testi_owner">Vanessa Lumbergh, Welcome Pickups</span>

              <span class="stars">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-half-o" aria-hidden="true"></i>

              </span>


            </div>



          </div>
        </div>


        <div class="row set-height">
          <div class="col-md-6 col-xs-12">

            <div class="testi_box">


              <div class="user_aplha">MN</div>

              <h3>Script Assistance was amazing</h3>
              <p>I didn’t expect consultation and script assistance were part of the plan and the services the team
                provided were off the hook! I loved working with The Logic Hive </p>

              <span class="testi_owner">Miranda Newburn, Execast</span>

              <span class="stars">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-half-o" aria-hidden="true"></i>

              </span>


            </div>



          </div>
          <div class="col-md-6 col-xs-12">

            <div class="testi_box">


              <div class="user_aplha">TB</div>

              <h3>Superb Explainer Video Services</h3>
              <p>I love the way their team cooperated with us throughout the process and helped us get the explainer
                video that we awesome for our business</p>

              <span class="testi_owner">Team Blinds</span>

              <span class="stars">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-half-o" aria-hidden="true"></i>

              </span>


            </div>



          </div>
        </div>


      </div>



    </div>
    </div>
    </div>

    <div class="text-center portfolio_button bottom"><a onclick="$zopim.livechat.window.toggle()"
        class="btn-line-fill">ALL YOU NEED TO POWER YOUR BUSINESS </a></div>

  </section>

@endsection