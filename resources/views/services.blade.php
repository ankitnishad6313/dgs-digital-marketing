@extends('main')
@push('title')
    <title>DGS - Digital Marketing Agency</title>
@endpush
@section('main-section')

<!--===== HERO AREA STARTS =======-->
<div class="about-header-area" style="background-image: url({{ url('/') }}/assets/img/bg/inner-header.png); background-repeat: no-repeat; background-size: cover; background-position: center;">
    <img src="{{ url('/') }}/assets/img/elements/elements1.png" alt="" class="elements1 aniamtion-key-1">
    <img src="{{ url('/') }}/assets/img/elements/star2.png" alt="" class="star2 keyframe5">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 m-auto">
                <div class="about-inner-header heading9 text-center">
                    <h1>Our Best Services</h1>
                    <a href="{{ route('home') }}">Home <i class="fa-solid fa-angle-right"></i> <span>Services</span></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--===== HERO AREA ENDS =======-->

<!--===== SERVICE AREA STARTS =======-->
<div class="service1-section-area sp2">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="service-all-boxes-area1">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="service-boxarea">
                        <a href="#">Search Engine Optimization ( SEO)</a>
                        <div class="space40"></div>
                        <img src="{{ url('/') }}/assets/img/icons/service-icon1.svg" alt="">
                        <div class="space40"></div>
                        <p>Enhance your online visibility & drive organic traffic with our advanced SEO techniques. We optimize your website to rank higher.</p>
                      </div>
                </div>
           
            <div class="col-lg-3 col-md-6">
                <div class="service-boxarea">
                    <a href="#">Pay-Per-Click (PPC) Advertising</a>
                    <div class="space40"></div>
                    <img src="{{ url('/') }}/assets/img/icons/service-icon2.svg" alt="">
                    <div class="space40"></div>
                    <p>Reach your audience instantly and drive qualified leads with targeted PPC campaigns. Our experts craft compelling ad copy and optimize.</p>
                  </div>
            </div>
  
            <div class="col-lg-3 col-md-6">
                <div class="service-boxarea">
                    <a href="{{ route('social-media-marketing') }}">Social Media Marketing</a>
                    <div class="space66"></div>
                    <img src="{{ url('/') }}/assets/img/icons/service-icon3.svg" alt="">
                    <div class="space40"></div>
                    <p>Build a strong brand presence and engage with your audience on social media platforms. We create strategic social media campaigns </p>
                  </div>
            </div>
  
            <div class="col-lg-3 col-md-6">
                <div class="service-boxarea">
                    <a href="#">Website Design and Development</a>
                    <div class="space40"></div>
                    <img src="{{ url('/') }}/assets/img/icons/service-icon4.svg" alt="">
                    <div class="space40"></div>
                    <p>Make a lasting impression with a professionally designed and user-friendly website. Our web design and development services ensure.</p>
                  </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="service-boxarea">
                    <a href="#">Content Marketing</a>
                    <div class="space40"></div>
                    <img src="{{ url('/') }}/assets/img/icons/service-icon15.svg" alt="">
                    <div class="space40"></div>
                    <p>We craft compelling content that educates, entertains, and inspires your audience, driving engagement and building brand loyalty. </p>
                  </div>
            </div>
       
        <div class="col-lg-3 col-md-6">
            <div class="service-boxarea">
                <a href="#">Email Marketing</a>
                <div class="space40"></div>
                <img src="{{ url('/') }}/assets/img/icons/service-icon16.svg" alt="">
                <div class="space40"></div>
                <p>We design and implement effective email marketing campaigns to nurture leads, promote products or services, and drive conversions.</p>
              </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="service-boxarea">
                <a href="#">Analytics And Reporting</a>
                <div class="space40"></div>
                <img src="{{ url('/') }}/assets/img/icons/service-icon17.svg" alt="">
                <div class="space40"></div>
                <p>We track and measure the performance of your digital marketing campaigns using advanced analytics tools. </p>
              </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="service-boxarea">
                <a href="#">One Page SEO Optimization</a>
                <div class="space40"></div>
                <img src="{{ url('/') }}/assets/img/icons/service-icon18.svg" alt="">
                <div class="space40"></div>
                <p>We optimize key on-page elements of your website, including title tags, meta descriptions, headers, and content with your target keywords.</p>
              </div>
        </div>
          </div>
        </div>
        </div>
      </div>
    </div>
  </div>
<!--===== SERVICE AREA ENDS =======-->

<!--===== WORK AREA STARTS =======-->
<div class="works-inner-section-area sp10">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="works-header-area heading2">
                    <h5>Why Choose Us</h5>
                    <h2>Experience the Advantage Why We're the Right Choice</h2>
                    <p>At SEOC we understand that you have many options when it comes to digital marketing services. So why should you choose us? Here are a few reasons</p>
                    <div class="space32"></div>
                    <div class="works-content-box">
                        <div class="icons">
                            <img src="{{ url('/') }}/assets/img/icons/works-icons7.svg" alt="">
                        </div>
                        <div class="content">
                            <a href="#">Proven Result</a>
                            <p>We have a track record of delivering tangible results for our clients. From increasing website traffic and improving search. </p>
                        </div>
                    </div>
                    <div class="space20"></div>
                    <div class="works-content-box">
                        <div class="icons">
                            <img src="{{ url('/') }}/assets/img/icons/works-icons8.svg" alt="">
                        </div>
                        <div class="content">
                            <a href="#">Customized Solutions</a>
                            <p>We believe that one size does not fit all when it comes to digital marketing. That's why we take the time to understand your SEO. </p>
                        </div>
                    </div>
                    <div class="space20"></div>
                    <div class="works-content-box">
                        <div class="icons">
                            <img src="{{ url('/') }}/assets/img/icons/works-icons9.svg" alt="">
                        </div>
                        <div class="content">
                            <a href="#">Dedicated Support</a>
                            <p>Your success is our top priority. That's why provide dedicated support and guidance every step of the way to running seo.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-all-images-area">
                    <img src="{{ url('/') }}/assets/img/elements/elements14.png" alt="" class="elements12 keyframe5">
                    <img src="{{ url('/') }}/assets/img/elements/elements15.png" alt="" class="elements13 keyframe5">
                    <div class="row">
                      <div class="col-lg-6 col-md-6">
                        <div class="img1 image-anime">
                            <div class="space100"></div>
                          <img src="{{ url('/') }}/assets/img/all-images/about-img6.png" alt="">
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6">
                        <div class="img2 image-anime">
                          <img src="{{ url('/') }}/assets/img/all-images/about-img5.png" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</div>
<!--===== WORK AREA ENDS =======-->


<!--===== SKILLS AREA STARTS =======-->
<div class="skills-section-area sp2">
  <img src="{{ url('/') }}/assets/img/bg/cta-bg1.png" alt="" class="cta-bg1 aniamtion-key-2">
  <img src="{{ url('/') }}/assets/img/bg/cta-bg2.png" alt="" class="cta-bg2 aniamtion-key-1">
  <div class="container">
      <div class="row">
          <div class="col-lg-3 m-auto">
              <div class="skills-header text-center heading2">
                  <h5>Skills</h5>
                  <h2>Our Skills</h2>
              </div>
          </div>
      </div>
      <div class="col-lg-10 m-auto">
        <div class="circle-progress-area">
          <div class="row">
            <div class="col-lg-3 col-md-6">
              <div class="progresbar">
                <div class="progressbar">
                   <div class="circle" data-percent="82">
                    <canvas></canvas>
                       <div>82%</div>
                  </div>
                </div>
                <p>S M M</p>
              </div>
            </div>

            <div class="col-lg-3 col-md-6">
              <div class="progresbar">
                <div class="progressbar">
                  <div class="circle two" data-percent="49">
                    <canvas></canvas>
                      <div>49%</div>
                 </div>
               </div>
               <p>P P C</p>
              </div>
            </div>

            <div class="col-lg-3 col-md-6">
              <div class="progresbar">
                <div class="progressbar">
                  <div class="circle three" data-percent="99">
                    <canvas></canvas>
                     <div>99%</div>
                  </div>
                 </div>
                 <p>SEO</p>
              </div>
            </div>

            <div class="col-lg-3 col-md-6">
              <div class="progresbar">
                <div class="progressbar">
                  <div class="circle four" data-percent="95">
                    <canvas></canvas>
                     <div>95%</div>
                  </div>
                 </div>
                 <p>Digital Marketing</p>
              </div>
            </div>
        </div>
        </div>
      </div>
  </div>
</div>
<!--===== SKILLS AREA ENDS =======-->

<!--===== CTA AREA STARTS =======-->
<div class="cta-section-area">
  <img src="{{ url('/') }}/assets/img/bg/cta-bg1.png" alt="" class="cta-bg1 aniamtion-key-2">
  <img src="{{ url('/') }}/assets/img/bg/cta-bg2.png" alt="" class="cta-bg2 aniamtion-key-1">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 m-auto">  
        <div class="cta-header-area text-center sp4 heading2">
          <h2>Ready To Take Your SEO To <br class="d-md-block d-none"> The Next Level</h2>
          <p>Effective SEO strategies not only elevate a website's visibility but also drive <br class="d-md-block d-none"> targeted traffic, enhance user experience,</p>
          <div class="btn-area text-center">
            <a href="{{ route('contact') }}" class="header-btn1">Free Consultation <span><i class="fa-solid fa-arrow-right"></i></span></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--===== CTA AREA ENDS =======-->

@endsection