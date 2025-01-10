<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     @stack('title')
     <!--=====FAB ICON=======-->
    <link rel="shortcut icon" href="{{ url('/') }}/assets/img/logo/fav-logo4.png" type="image/x-icon">

    <!--===== CSS LINK =======-->
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/plugins/bootstrap.min.css">
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/plugins/aos.css">
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/plugins/fontawesome.css">
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/plugins/magnific-popup.css">
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/plugins/mobile.css">
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/plugins/owlcarousel.min.css">
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/plugins/sidebar.css">
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/plugins/slick-slider.css">
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/plugins/nice-select.css">
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/main.css">

    <!--=====  JS SCRIPT LINK =======-->
    <script src="{{ url('/') }}/assets/js/plugins/jquery-3-6-0.min.js"></script>
</head>
<body class="homepage4-body">

<!--===== PRELOADER STARTS =======-->
<div class="preloader preloader3">
  <div class="loading-container">
    <div class="loading"></div>
    <div id="loading-icon"><img src="{{ url('/') }}/assets/img/logo/preloader3.png" alt=""></div>
  </div>
</div>
<!--===== PRELOADER ENDS =======-->

<!--===== PROGRESS STARTS=======-->
<div class="paginacontainer">
     <div class="progress-wrap">
       <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
         <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
       </svg>
     </div>
   </div>
 <!--===== PROGRESS ENDS=======-->

   <!--=====HEADER START=======-->
   <header>
    <div class="header-area homepage4 header header-sticky d-none d-lg-block " id="header">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="header-elements">
              <div class="site-logo">
                <a href="{{ route('home') }}"><img src="{{ url('/') }}/assets/img/logo/logo5.png" alt=""></a>
              </div>
              <div class="main-menu">
                <ul>
                  <li><a href="{{ route('home') }}">Home </a>
                  </li>
                  <li><a href="{{ route('about') }}">About</a></li>
                  <li><a href="{{ route('services') }}">Services <i class="fa-solid fa-angle-down"></i></a>
                    <ul class="dropdown-padding">
                      <li><a href="{{ route('social-media-marketing') }}">Social Media Marketing</a></li>
                      <li><a href="{{ route('whatsapp-marketing') }}">Whatsapp Marketing</a></li>
                      <li><a href="{{ route('website-design') }}">Website Design</a></li>
                      <li><a href="{{ route('influencer-marketing') }}">Influencer Marketing</a></li>
                      <li><a href="{{ route('help-and-support') }}">Help And Support</a></li>
                      <li><a href="{{ route('google-ads') }}">Google Ads</a></li>
                    </ul>
                  </li>
                  {{-- <li><a href="{{ route('blogs') }}">Blogs</a></li> --}}
                  <li><a href="{{ route('contact') }}">Contact Us</a></li>
                </ul>
              </div>

              <div class="btn-area">
                <a href="{{ route('contact') }}" class="header-btn12">Get In Touch <i class="fa-solid fa-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!--=====HEADER END =======-->

  <!--===== MOBILE HEADER STARTS =======-->
 <div class="mobile-header mobile-haeder4 d-block d-lg-none">
  <div class="container-fluid">
    <div class="col-12">
      <div class="mobile-header-elements">
        <div class="mobile-logo">
          <a href="{{ route('home') }}"><img src="{{ url('/') }}/assets/img/logo/logo2.png" alt=""></a>
        </div>
        <div class="mobile-nav-icon dots-menu">
          <i class="fa-solid fa-bars"></i>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="mobile-sidebar mobile-sidebar4">
  <div class="logosicon-area">
    <div class="logos">
      <img src="{{ url('/') }}/assets/img/logo/logo2.png" alt="">
    </div>
    <div class="menu-close">
      <i class="fa-solid fa-xmark"></i>
    </div>
   </div>
  <div class="mobile-nav mobile-nav1">
    <ul class="mobile-nav-list nav-list1">
      <li><a href="{{ route('home') }}" >Home </a>
      </li>
      <li><a href="{{ route('about') }}">About</a></li>
      <li><a href="{{ route('services') }}">Services</a>
        <ul class="sub-menu">
          <li><a href="{{ route('social-media-marketing') }}">Social Media Marketing</a></li>
          <li><a href="{{ route('whatsapp-marketing') }}">Whatsapp Marketing</a></li>
          <li><a href="{{ route('website-design') }}">Website Design</a></li>
          <li><a href="{{ route('influencer-marketing') }}">Influencer Marketing</a></li>
          <li><a href="{{ route('help-and-support') }}">Help And Support</a></li>
          <li><a href="{{ route('google-ads') }}">Google Ads</a></li>
        </ul>
      </li>
      {{-- <li><a href="{{ route('blogs') }}">Blogs</a></li> --}}
     
      <li><a href="{{ route('contact') }}">Contact Us</a></li>
    </ul>

    <div class="allmobilesection">
      <a href="{{ route('contact') }}"  class="header-btn12">Get Started <i class="fa-solid fa-arrow-right"></i></a>
      <div class="single-footer">
        <h3>Contact Info</h3>
        <div class="footer1-contact-info">
          <div class="contact-info-single">
            <div class="contact-info-icon">
              <i class="fa-solid fa-phone-volume"></i>
            </div>
            <div class="contact-info-text">
              <a href="tel:+3(924)4596512">+3(924)4596512</a>
            </div>
          </div>

          <div class="contact-info-single">
            <div class="contact-info-icon">
              <i class="fa-solid fa-envelope"></i>
            </div>
            <div class="contact-info-text">
              <a href="mailto:info@example.com">info@example.com</a>
            </div>
          </div>

          <div class="single-footer">
            <h3>Our Location</h3>
            
            <div class="contact-info-single">
              <div class="contact-info-icon">
                <i class="fa-solid fa-location-dot"></i>
              </div>
              <div class="contact-info-text">
                <a href="mailto:info@example.com" >55 East Birchwood Ave.Brooklyn, <br> New York 11201,United States</a>
              </div>
            </div>

          </div>
          <div class="single-footer">
            <h3>Social Links</h3>
            
            <div class="social-links-mobile-menu">
              <ul>
                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
     </div>
  </div>
</div>
<!--===== MOBILE HEADER STARTS =======-->

@yield('main-section')

<!--===== FOOTER AREA STARTS =======-->
<div class="footer4-section-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <div class="footer-logo-area">
            <img src="{{ url('/') }}/assets/img/logo/logo5.png" alt="">
            <p>By optimizing content, leveraging relevant keywords, and adhering to best practices, businesses can secure prominent position (SEO)</p>
            <ul>
              <li><a href="#"><img src="{{ url('/') }}/assets/img/icons/facebook4.svg" alt=""></a></li>
              <li><a href="#"><img src="{{ url('/') }}/assets/img/icons/instagram4.svg" alt=""></a></li>
              <li><a href="#"><img src="{{ url('/') }}/assets/img/icons/linkedin4.svg" alt=""></a></li>
              <li><a href="#"><img src="{{ url('/') }}/assets/img/icons/twitter3.svg" alt=""></a></li>
            </ul>
          </div>
        </div>
  
        <div class="col-lg-2 col-md-6">
          <div class="footer-logo-area1">
            <h3>About Link</h3>
            <ul>
              {{-- <li><a href="{{ route('blogs') }}">Our Blog</a></li> --}}
            <li><a href="{{ route('about') }}">About Us</a></li>
            <li><a href="{{ route('services') }}">Services</a></li>
            <li><a href="{{ route('contact') }}">Contact Us</a></li>
            </ul>
          </div>
        </div>
  
        <div class="col-lg-3 col-md-6">
          <div class="footer-logo-area2">
            <h3>Get in touch</h3>
            <ul>
              <li><a href="#"><img src="{{ url('/') }}/assets/img/icons/email.svg" alt=""><span>Infoseoc@gmail.com</span></a></li>
              <li><a href="#"><img src="{{ url('/') }}/assets/img/icons/location.svg" alt=""><span>8708 Technology Forest <br class="d-lg-block d-none"> Pl Suite 125 -G, The <br class="d-lg-block d-none"> Woodlands, TX 773</span></a></li>
              <li><a href="tel:123-456-7890"><img src="{{ url('/') }}/assets/img/icons/phone.svg" alt=""><span>123-456-7890</span></a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="footer-logo-area3">
            <h3>Our Location</h3>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d206167.03260180372!2d80.77769949830774!3d26.848902829067065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399bfd991f32b16b%3A0x93ccba8909978be7!2sLucknow%2C%20Uttar%20Pradesh!5e1!3m2!1sen!2sin!4v1736499979528!5m2!1sen!2sin" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
      <div class="space80 d-lg-block d-none"></div>
      <div class="space40 d-lg-none d-block"></div>
      <div class="row">
        <div class="col-lg-12">
          <div class="copyright-area">
            <div class="pera">
              <p>ⓒCopyright 2024 SEOC . All rights reserved</p>
            </div>
            <ul>
              <li><a href="#">Terms & Conditions</a></li>
              <li><a href="#" class="m-0"> Privacy Policy </a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
<!--===== FOOTER AREA ENDS =======-->


<!--===== JS SCRIPT LINK =======-->
<script src="{{ url('/') }}/assets/js/plugins/bootstrap.min.js"></script>
<script src="{{ url('/') }}/assets/js/plugins/fontawesome.js"></script>
<script src="{{ url('/') }}/assets/js/plugins/aos.js"></script>
<script src="{{ url('/') }}/assets/js/plugins/counter.js"></script>
<script src="{{ url('/') }}/assets/js/plugins/gsap.min.js"></script>
<script src="{{ url('/') }}/assets/js/plugins/ScrollTrigger.min.js"></script>
<script src="{{ url('/') }}/assets/js/plugins/Splitetext.js"></script>
<script src="{{ url('/') }}/assets/js/plugins/sidebar.js"></script>
<script src="{{ url('/') }}/assets/js/plugins/magnific-popup.js"></script>
<script src="{{ url('/') }}/assets/js/plugins/mobilemenu.js"></script>
<script src="{{ url('/') }}/assets/js/plugins/owlcarousel.min.js"></script>
<script src="{{ url('/') }}/assets/js/plugins/gsap-animation.js"></script>
<script src="{{ url('/') }}/assets/js/plugins/nice-select.js"></script>
<script src="{{ url('/') }}/assets/js/plugins/waypoints.js"></script>
<script src="{{ url('/') }}/assets/js/plugins/slick-slider.js"></script>
<script src="{{ url('/') }}/assets/js/plugins/circle-progress.js"></script>
<script src="{{ url('/') }}/assets/js/main.js"></script>

</body>

</html>