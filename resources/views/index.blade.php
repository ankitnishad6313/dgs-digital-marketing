@extends('main')
@push('title')
    <title>DGS - Digital Marketing Agency</title>
@endpush
@section('main-section')

    <!--===== HERO AREA STARTS =======-->
    <div class="hero1-section-area" style="background-image: url({{ url('/') }}/assets/img/bg/header-bg1.png);">
        <img src="{{ url('/') }}/assets/img/elements/elements1.png" alt="" class="elements1 aniamtion-key-1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="header-main-content heading1">
                        <h5><img src="{{ url('/') }}/assets/img/icons/logo-icons.svg" alt="">Top #1 SEO &
                            Marketing Agency</h5>
                        <h1 class="text-anime-style-3">Elevate Your Brand With Expert SEO & Digital Marketing</h1>
                        <p data-aos="fade-left" data-aos-duration="1000">Welcome to SEOC where we specialize in
                            revolutionizing your online <br class="d-lg-block d-none"> presence through expert SEO and
                            digital marketing solutions. </p>
                        <div class="btn-area" data-aos="fade-left" data-aos-duration="1200">
                            <a href="contact.html" class="header-btn1">Start Ranking Now <span><i
                                        class="fa-solid fa-arrow-right"></i></span></a>
                            <a href="contact.html" class="header-btn2">Contact Now <span><i
                                        class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="header-images-area">
                        <div class="main-images-area">
                            <div class="img1">
                                <img src="{{ url('/') }}/assets/img/all-images/header-img1.png" alt=""
                                    data-aos="zoom-in" data-aos-duration="1000">
                            </div>
                            <div class="img2">
                                <img src="{{ url('/') }}/assets/img/bg/header-imgbg.png" alt="">
                            </div>
                            <div class="icons-area">
                                <img src="{{ url('/') }}/assets/img/icons/sound-icons1.svg" alt=""
                                    class="sound-icons1 aniamtion-key-1">
                                <img src="{{ url('/') }}/assets/img/icons/lite-icons1.svg" alt=""
                                    class="lite-icons1 aniamtion-key-1">
                            </div>
                            <div class="auhtor-icons">
                                <img src="{{ url('/') }}/assets/img/elements/elements2.png" alt=""
                                    class="elements2">
                                <img src="{{ url('/') }}/assets/img/elements/elements3.png" alt=""
                                    class="elements3">
                            </div>
                            <div class="auhtor-images">
                                <img src="{{ url('/') }}/assets/img/all-images/header-author-img1.png" alt=""
                                    class="header-author-img1 aniamtion-key-2">
                                <img src="{{ url('/') }}/assets/img/all-images/header-author-img2.png" alt=""
                                    class="header-author-img2 aniamtion-key-2">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===== HERO AREA ENDS =======-->

    <!--===== ABOUT AREA STARTS =======-->
    <div class="about4-section-area sp6">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="about-images">
                        <figure class="image-anime reveal">
                            <img src="{{ url('/') }}/assets/img/all-images/about-img1.png" alt="">
                        </figure>
                        <img src="{{ url('/') }}/assets/img/elements/star1.png" alt=""
                            class="star1 keyframe5">
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="about-content-area heading8">
                        <div class="arrow-circle">
                            <a href="{{ route('about') }}">
                                <img src="{{ url('/') }}/assets/img/elements/elements4.png" alt=""
                                    class="elements4 keyframe5">
                                <img src="{{ url('/') }}/assets/img/icons/arrow.svg" alt="" class="arrow">
                            </a>
                        </div>
                        <br>
                        <h5><img src="{{ url('/') }}/assets/img/icons/logo-icons3.svg" alt="">About SEOC</h5>
                        <h2 class="text-anime-style-2">Comprehensive SEO & <span>Digital Marketing <img
                                    src="{{ url('/') }}/assets/img/elements/line-img2.png" alt=""></span>
                            Solutions.</h2>
                        <p data-aos="fade-up" data-aos-duration="1000">Welcome to SEOC your trusted partner for
                            comprehensive SEO and digital marketing solutions. With our proven expertise and innovative
                            strategies the digital landscape.</p>
                        <div class="btn-area" data-aos="fade-up" data-aos-duration="1200">
                            <a href="{{ route('about') }}" class="header-btn12">Learn More <i
                                    class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="about-auhtor-images">
                        <img src="{{ url('/') }}/assets/img/elements/elements5.png" alt=""
                            class="elements5 keyframe5">
                        <figure class="image-anime reveal">
                            <img src="{{ url('/') }}/assets/img/all-images/about-img2.png" alt="">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===== ABOUT AREA ENDS =======-->

    <!--===== SERVICE AREA STARTS =======-->
    <div class="service4-section-area sp1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="service4-header heading8 text-center">
                        <h5 data-aos="fade-up" data-aos-duration="1000"><img
                                src="{{ url('/') }}/assets/img/icons/logo-icons3.svg" alt="">Our Service
                        </h5>
                        <h2 class="text-anime-style-1">Our Comprehensive Suite Of Digital Marketing <span>Services. <img
                                    src="{{ url('/') }}/assets/img/elements/line-img2.png" alt=""></span>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="service-auhtor-boxes-area">
                        <div class="bg-images">
                            <div class="img1">
                                <img src="{{ url('/') }}/assets/img/bg/service-bg1.png" alt=""
                                    class="pulse-border">
                            </div>
                        </div>
                        <div class="row gy-5">
                            <div class="col-12 col-lg-4 col-md-6" data-aos="zoom-out" data-aos-duration="1000">
                                <div class="service-box-area">
                                    <div class="icons-area">
                                        <div class="icons">
                                            <img src="{{ url('/') }}/assets/img/icons/service-icon13.svg"
                                                alt="">
                                        </div>
                                        <div class="number">
                                            <h4>01</h4>
                                        </div>
                                    </div>
                                    <div class="content-area">
                                        <a href="#">Social Media Marketing</a>
                                        <p>Our team of experts will optimize your site's on-page elements, create
                                            high-quality content, and build authoritative backlinks to boost your rankings
                                            attract.</p>
                                        <a href="#" class="readmore">Learn More <i
                                                class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-lg-4 col-md-6" data-aos="zoom-out" data-aos-duration="1200">
                                <div class="service-box-area">
                                    <div class="icons-area">
                                        <div class="icons">
                                            <img src="{{ url('/') }}/assets/img/icons/service-icon12.svg"
                                                alt="">
                                        </div>
                                        <div class="number">
                                            <h4>02</h4>
                                        </div>
                                    </div>
                                    <div class="content-area">
                                        <a href="#">WhatsApp Marketing</a>
                                        <p>Maximize your ROI with strategic PPC campaigns tailored to your business
                                            objectives. Whether you're looking to increase brand awareness,</p>
                                        <a href="#" class="readmore">Learn More <i
                                                class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-duration="1000">
                                <div class="service-box-area">
                                    <div class="icons-area">
                                        <div class="icons">
                                            <img src="{{ url('/') }}/assets/img/icons/service-icon11.svg"
                                                alt="">
                                        </div>
                                        <div class="number">
                                            <h4>03</h4>
                                        </div>
                                    </div>
                                    <div class="content-area">
                                        <a href="#">Google Ads</a>
                                        <p>Engage with your audience, build brand loyalty, drive conversions through
                                            strategic social media marketing. From content creation and community
                                            management. </p>
                                        <a href="#" class="readmore">Learn More <i
                                                class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-duration="1200">
                                <div class="service-box-area">
                                    <div class="icons-area">
                                        <div class="icons">
                                            <img src="{{ url('/') }}/assets/img/icons/service-icon4.svg"
                                                alt="">
                                        </div>
                                        <div class="number">
                                            <h4>04</h4>
                                        </div>
                                    </div>
                                    <div class="content-area">
                                        <a href="#">Website Design</a>
                                        <p>Nurture leads, drive conversions, and build customer loyalty with targeted email
                                            marketing campaigns. From automated drip campaigns & personalized newsletters.
                                        </p>
                                        <a href="#" class="readmore">Learn More <i
                                                class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-duration="1000">
                                <div class="service-box-area">
                                    <div class="icons-area">
                                        <div class="icons">
                                            <img src="{{ url('/') }}/assets/img/icons/service-icon17.svg"
                                                alt="">
                                        </div>
                                        <div class="number">
                                            <h4>05</h4>
                                        </div>
                                    </div>
                                    <div class="content-area">
                                        <a href="#">Influencer Marketing</a>
                                        <p>Engage with your audience, build brand loyalty, drive conversions through
                                            strategic social media marketing. From content creation and community
                                            management. </p>
                                        <a href="#" class="readmore">Learn More <i
                                                class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-duration="1200">
                                <div class="service-box-area">
                                    <div class="icons-area">
                                        <div class="icons">
                                            <img src="{{ url('/') }}/assets/img/icons/service-icon14.svg"
                                                alt="">
                                        </div>
                                        <div class="number">
                                            <h4>06</h4>
                                        </div>
                                    </div>
                                    <div class="content-area">
                                        <a href="#">Help & Support</a>
                                        <p>Nurture leads, drive conversions, and build customer loyalty with targeted email
                                            marketing campaigns. From automated drip campaigns & personalized newsletters.
                                        </p>
                                        <a href="#" class="readmore">Learn More <i
                                                class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="space50 d-md-block d-none"></div>
                                <div class="btn-area1 text-center" data-aos="fade-up" data-aos-duration="1200">
                                    <a href="#" class="header-btn12">View More Services <i
                                            class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===== SERVICE AREA ENDS =======-->

    <!--===== PAST WORK AREA STARTS =======-->
    <div class="testimonial4-section-area sp1">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 m-auto">
                    <div class="testimonia4-header text-center heading8">
                        <h5 data-aos="fade-up" data-aos-duration="1000"><img
                                src="{{ url('/') }}/assets/img/icons/logo-icons3.svg" alt="">Featured Post
                        </h5>
                        <h2 class="text-anime-style-1"> Our Past <span>Work <img
                                    src="{{ url('/') }}/assets/img/elements/line-img2.png" alt=""></span>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12" data-aos="zoom-out" data-aos-duration="1200">
                    <div class="testimonial4-slider-area owl-carousel">

                        <div class="testimonial-boxarea">
                            <img src="{{ url('/') }}/assets/img/all-images/choose-img1.png" alt="">
                        </div>

                        <div class="testimonial-boxarea">
                            <img src="{{ url('/') }}/assets/img/all-images/choose-img2.png" alt="">
                        </div>

                        <div class="testimonial-boxarea">
                            <img src="{{ url('/') }}/assets/img/all-images/choose-img3.png" alt="">
                        </div>

                        <div class="testimonial-boxarea">
                            <img src="{{ url('/') }}/assets/img/all-images/choose-img4.png" alt="">
                        </div>

                        <div class="testimonial-boxarea">
                            <img src="{{ url('/') }}/assets/img/all-images/choose-img5.png" alt="">
                        </div>

                        <div class="testimonial-boxarea">
                            <img src="{{ url('/') }}/assets/img/all-images/choose-img6.png" alt="">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===== PAST WORK AREA ENDS =======-->

    <!--===== CASE AREA STARTS =======-->
    <div class="case4-section-area sp1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="case4-header heading8 text-center">
                        <h5 data-aos="fade-up" data-aos-duration="1000"><img
                                src="{{ url('/') }}/assets/img/icons/logo-icons3.svg" alt="">Case Study</h5>
                        <h2 class="text-anime-style-1">Our Handpicked Digital Marketing <span>Case Study <img
                                    src="{{ url('/') }}/assets/img/elements/line-img2.png" alt=""></span>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12" data-aos="fade-up" data-aos-duration="1200">
                    <div class="cs_case_study_1_list">
                        <div class="cs_case_study cs_style_1 cs_hover_active active">
                            <a href="#" class="cs_case_study_thumb cs_bg_filed"
                                data-src="{{ url('/') }}/assets/img/all-images/case-img1.png"></a>
                            <div class="content-area1">
                                <a href="#">Website Design & Development</a>
                            </div>
                            <div class="content-area">
                                <img src="{{ url('/') }}/assets/img/icons/case-icon1.svg" alt="">
                                <div class="space16"></div>
                                <a href="#">Website Design & Development </a>
                                <p>Digital Art. Illustrations</p>
                            </div>
                        </div>
                        <div class="cs_case_study cs_style_1 cs_hover_active">
                            <a href="#" class="cs_case_study_thumb cs_case_study_thumb2 cs_bg_filed"
                                data-src="{{ url('/') }}/assets/img/all-images/case-img2.png"></a>
                            <div class="content-area1">
                                <a href="#">SEO</a>
                            </div>
                            <div class="content-area">
                                <img src="{{ url('/') }}/assets/img/icons/case-icon1.svg" alt="">
                                <div class="space16"></div>
                                <a href="#">SEO</a>
                                <p>Digital Art. Illustrations</p>
                            </div>
                        </div>
                        <div class="cs_case_study cs_style_1 cs_hover_active">
                            <a href="#" class="cs_case_study_thumb cs_case_study_thumb3 cs_bg_filed"
                                data-src="{{ url('/') }}/assets/img/all-images/case-img3.png"></a>
                            <div class="content-area1">
                                <a href="#">PPC Advertising</a>
                            </div>
                            <div class="content-area">
                                <img src="{{ url('/') }}/assets/img/icons/case-icon1.svg" alt="">
                                <div class="space16"></div>
                                <a href="#">PPC Advertising</a>
                                <p>Digital Art. Illustrations</p>
                            </div>
                        </div>
                        <div class="cs_case_study cs_style_1 cs_hover_active">
                            <a href="#" class="cs_case_study_thumb cs_case_study_thumb4 cs_bg_filed"
                                data-src="{{ url('/') }}/assets/img/all-images/case-img4.png"></a>
                            <div class="content-area1">
                                <a href="#">Social Media Marketing</a>
                            </div>
                            <div class="content-area">
                                <img src="{{ url('/') }}/assets/img/icons/case-icon1.svg" alt="">
                                <div class="space16"></div>
                                <a href="#">Social Media Marketing</a>
                                <p>Digital Art. Illustrations</p>
                            </div>
                        </div>
                    </div>
                    <div class="space60 d-lg-block d-none"></div>
                    <div class="space34 d-lg-none d-block"></div>
                    <div class="btn-area1 text-center" data-aos="fade-up" data-aos-duration="1200">
                        <a href="#" class="header-btn12">View More Case Study <i
                                class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===== CASE AREA ENDS =======-->

    <!--===== WORK AREA STARTS =======-->
    <div class="works4-section-area sp2">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="works4-header heading8">
                        <h5 data-aos="fade-up" data-aos-duration="800"><img
                                src="{{ url('/') }}/assets/img/icons/logo-icons3.svg" alt="">Work Process
                        </h5>
                        <h2 class="text-anime-style-1">SEOC Your Path to SEO & Digital <span>Marketing Success <img
                                    src="{{ url('/') }}/assets/img/elements/line-img1.png" alt=""></span>
                        </h2>
                        <div class="space10 d-lg-block d-none"></div>
                        <p data-aos="fade-up" data-aos-duration="1000">From increasing your website's visibility on search
                            engines to engaging with your audience on social media,</p>
                        <div class="space32"></div>
                        <div class="btn-area1" data-aos="fade-up" data-aos-duration="1200">
                            <a href="#" class="header-btn12">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-7">
                    <div class="case-images">
                        <figure class="image-anime reveal">
                            <img src="{{ url('/') }}/assets/img/all-images/case-img8.png" alt="">
                        </figure>
                    </div>
                </div>
                <div class="space50"></div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-duration="800">
                    <div class="works-author-boxarea">
                        <div class="icons">
                            <img src="{{ url('/') }}/assets/img/icons/works-icon4.svg" alt="">
                        </div>
                        <div class="space24"></div>
                        <div class="content-area">
                            <a href="#">Strategy Development</a>
                            <p>Based on our findings, we develop <br class="d-lg-block d-none"> customized digital
                                marketing strategy <br class="d-lg-block d-none"> tailored objective.</p>
                            <a href="#" class="readmore">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-duration="1000">
                    <div class="works-author-boxarea">
                        <div class="icons">
                            <img src="{{ url('/') }}/assets/img/icons/works-icon5.svg" alt="">
                        </div>
                        <div class="space24"></div>
                        <div class="content-area">
                            <a href="#">Monitoring & Optimization</a>
                            <p>We believe in the power of data-driven <br class="d-lg-block d-none"> decision-making.
                                Throughout the <br class="d-lg-block d-none"> campaign,.</p>
                            <a href="#" class="readmore">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-duration="1200">
                    <div class="works-author-boxarea">
                        <div class="icons">
                            <img src="{{ url('/') }}/assets/img/icons/works-icon6.svg" alt="">
                        </div>
                        <div class="space24"></div>
                        <div class="content-area">
                            <a href="#">Continuous Improvement</a>
                            <p>Digital marketing is an ever-evolving field, <br class="d-lg-block d-none"> and we're
                                committed to staying ahead of <br class="d-lg-block d-none"> the SEOC curve.</p>
                            <a href="#" class="readmore">Learn More <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===== WORK AREA ENDS =======-->

    <!--===== PRICING AREA STARTS =======-->
    <div class="pricing-section-area sp2">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 m-auto">
                    <div class="pricing-header heading8 text-center">
                        <h5 data-aos="fade-up" data-aos-duration="1000"><img
                                src="{{ url('/') }}/assets/img/icons/logo-icons3.svg" alt="">Pricing & Plan
                        </h5>
                        <h2 class="text-anime-style-1">SEOC <span>Pricing Plan <img
                                    src="{{ url('/') }}/assets/img/elements/line-img2.png" alt=""></span>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6" data-aos="flip-right" data-aos-duration="800">
                    <div class="pricing-boxarea">
                        <h4>Basic Plan - Starter</h4>
                        <p>Our SEO and Digital Marketing agency <br class="d-lg-block d-none"> offers a range of pricing
                            plans tailored</p>
                        <h1>$999 <span>/monthly</span></h1>
                        <div class="space32"></div>
                        <div class="btn-area1">
                            <a href="#" class="header-btn12">Choose Your Plan <i
                                    class="fa-solid fa-arrow-right"></i></a>
                        </div>
                        <div class="space32"></div>
                        <div class="list-area">
                            <h5>Service Include:</h5>
                            <ul>
                                <li><img src="{{ url('/') }}/assets/img/icons/check14.svg" alt=""
                                        class="check4"><img src="{{ url('/') }}/assets/img/icons/check3.svg"
                                        alt="" class="check3">Keyword Research</li>
                                <li><img src="{{ url('/') }}/assets/img/icons/check14.svg" alt=""
                                        class="check4"><img src="{{ url('/') }}/assets/img/icons/check3.svg"
                                        alt="" class="check3">One Page Optimization</li>
                                <li><img src="{{ url('/') }}/assets/img/icons/check14.svg" alt=""
                                        class="check4"><img src="{{ url('/') }}/assets/img/icons/check3.svg"
                                        alt="" class="check3">Basic Analytics Reporting</li>
                            </ul>
                        </div>
                        <div class="space24"></div>
                        <p class="pera">Small businesses or startups looking to <br class="d-lg-block d-none"> establish
                            their online presence.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="flip-left" data-aos-duration="1000">
                    <div class="pricing-boxarea active">
                        <h4>Standard Plan - Growth</h4>
                        <p>Our SEO and Digital Marketing agency <br class="d-lg-block d-none"> offers a range of pricing
                            plans tailored</p>
                        <h1>$1999 <span>/monthly</span></h1>
                        <div class="space32"></div>
                        <div class="btn-area1">
                            <a href="#" class="header-btn12">Choose Your Plan <i
                                    class="fa-solid fa-arrow-right"></i></a>
                        </div>
                        <div class="space32"></div>
                        <div class="list-area">
                            <h5>Service Include:</h5>
                            <ul>
                                <li><img src="{{ url('/') }}/assets/img/icons/check2.svg" alt=""
                                        class="check2"><img src="{{ url('/') }}/assets/img/icons/check3.svg"
                                        alt="" class="check3">Keyword Research</li>
                                <li><img src="{{ url('/') }}/assets/img/icons/check2.svg" alt=""
                                        class="check2"><img src="{{ url('/') }}/assets/img/icons/check3.svg"
                                        alt="" class="check3">One Page Optimization</li>
                                <li><img src="{{ url('/') }}/assets/img/icons/check2.svg" alt=""
                                        class="check2"><img src="{{ url('/') }}/assets/img/icons/check3.svg"
                                        alt="" class="check3">Basic Analytics Reporting</li>
                            </ul>
                        </div>
                        <div class="space24"></div>
                        <p class="pera">Small businesses or startups looking to <br class="d-lg-block d-none"> establish
                            their online presence.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6" data-aos="flip-right" data-aos-duration="1200">
                    <div class="pricing-boxarea">
                        <h4>Premium Plan - Pro</h4>
                        <p>Our SEO and Digital Marketing agency <br class="d-lg-block d-none"> offers a range of pricing
                            plans tailored</p>
                        <h1>$2999 <span>/monthly</span></h1>
                        <div class="space32"></div>
                        <div class="btn-area1">
                            <a href="#" class="header-btn12">Choose Your Plan <i
                                    class="fa-solid fa-arrow-right"></i></a>
                        </div>
                        <div class="space32"></div>
                        <div class="list-area">
                            <h5>Service Include:</h5>
                            <ul>
                                <li><img src="{{ url('/') }}/assets/img/icons/check14.svg" alt=""
                                        class="check4"><img src="{{ url('/') }}/assets/img/icons/check3.svg"
                                        alt="" class="check3">Keyword Research</li>
                                <li><img src="{{ url('/') }}/assets/img/icons/check14.svg" alt=""
                                        class="check4"><img src="{{ url('/') }}/assets/img/icons/check3.svg"
                                        alt="" class="check3">One Page Optimization</li>
                                <li><img src="{{ url('/') }}/assets/img/icons/check14.svg" alt=""
                                        class="check4"><img src="{{ url('/') }}/assets/img/icons/check3.svg"
                                        alt="" class="check3">Basic Analytics Reporting</li>
                            </ul>
                        </div>
                        <div class="space24"></div>
                        <p class="pera">Small businesses or startups looking to <br class="d-lg-block d-none"> establish
                            their online presence.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===== PRICING AREA ENDS =======-->

    <!--===== TESTIMONIAL AREA STARTS =======-->
    <div class="testimonial4-section-area sp1">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 m-auto">
                    <div class="testimonia4-header text-center heading8">
                        <h5 data-aos="fade-up" data-aos-duration="1000"><img
                                src="{{ url('/') }}/assets/img/icons/logo-icons3.svg" alt="">Testimonials
                        </h5>
                        <h2 class="text-anime-style-1">“What Our <span>Client Say” <img
                                    src="{{ url('/') }}/assets/img/elements/line-img2.png" alt=""></span>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12" data-aos="zoom-out" data-aos-duration="1200">
                    <div class="testimonial4-slider-area owl-carousel">
                        <div class="testimonial-boxarea">
                            <img src="{{ url('/') }}/assets/img/icons/quito5.svg" alt="" class="quito">
                            <p>Working with SEOC has been a game-changer for our business. Their strategic approach to SEO
                                digital marketing has significantly increased our online visibility and lead generation.”
                            </p>
                            <div class="space48"></div>
                            <div class="auhtor-logo">
                                <div class="text">
                                    <a href="#">Sarah L.</a>
                                    <ul>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                    </ul>
                                </div>
                                <div class="logo">
                                    <img src="{{ url('/') }}/assets/img/icons/google1.svg" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="testimonial-boxarea">
                            <img src="{{ url('/') }}/assets/img/icons/quito5.svg" alt="" class="quito">
                            <p>“We've been partnering with SEOC for over a year now, and the results speak for themselves.
                                Their comprehensive digital marketing solutions have helped us achieve measurable growth."
                            </p>
                            <div class="space48"></div>
                            <div class="auhtor-logo">
                                <div class="text">
                                    <a href="#">David M.</a>
                                    <ul>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                    </ul>
                                </div>
                                <div class="logo">
                                    <img src="{{ url('/') }}/assets/img/icons/google1.svg" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="testimonial-boxarea">
                            <img src="{{ url('/') }}/assets/img/icons/quito5.svg" alt="" class="quito">
                            <p>"As a startup, we needed a digital marketing partner that could understand our unique needs
                                and deliver cost-effective solutions. SEOC has been that partner for us.”</p>
                            <div class="space48"></div>
                            <div class="auhtor-logo">
                                <div class="text">
                                    <a href="#">Emily R.</a>
                                    <ul>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                    </ul>
                                </div>
                                <div class="logo">
                                    <img src="{{ url('/') }}/assets/img/icons/google1.svg" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="testimonial-boxarea">
                            <img src="{{ url('/') }}/assets/img/icons/quito5.svg" alt="" class="quito">
                            <p>Working with SEOC has been a game-changer for our business. Their strategic approach to SEO
                                digital marketing has significantly increased our online visibility and lead generation.”
                            </p>
                            <div class="space48"></div>
                            <div class="auhtor-logo">
                                <div class="text">
                                    <a href="#">Sarah L.</a>
                                    <ul>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                    </ul>
                                </div>
                                <div class="logo">
                                    <img src="{{ url('/') }}/assets/img/icons/google1.svg" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="testimonial-boxarea">
                            <img src="{{ url('/') }}/assets/img/icons/quito5.svg" alt="" class="quito">
                            <p>“We've been partnering with SEOC for over a year now, and the results speak for themselves.
                                Their comprehensive digital marketing solutions have helped us achieve measurable growth."
                            </p>
                            <div class="space48"></div>
                            <div class="auhtor-logo">
                                <div class="text">
                                    <a href="#">David M.</a>
                                    <ul>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                    </ul>
                                </div>
                                <div class="logo">
                                    <img src="{{ url('/') }}/assets/img/icons/google1.svg" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="testimonial-boxarea">
                            <img src="{{ url('/') }}/assets/img/icons/quito5.svg" alt="" class="quito">
                            <p>"As a startup, we needed a digital marketing partner that could understand our unique needs
                                and deliver cost-effective solutions. SEOC has been that partner for us.”</p>
                            <div class="space48"></div>
                            <div class="auhtor-logo">
                                <div class="text">
                                    <a href="#">Emily R.</a>
                                    <ul>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                    </ul>
                                </div>
                                <div class="logo">
                                    <img src="{{ url('/') }}/assets/img/icons/google1.svg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===== TESTIMONIAL AREA ENDS =======-->

    <!--===== CTA AREA STARTS =======-->
    <div class="cta4-section-area">
        <img src="{{ url('/') }}/assets/img/bg/cta-bg5.png" alt="" class="cta-bg1 aniamtion-key-2">
        <img src="{{ url('/') }}/assets/img/bg/cta-bg4.png" alt="" class="cta-bg2 aniamtion-key-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 m-auto">
                    <div class="cta-header-area text-center sp4 heading2">
                        <h2 class="text-anime-style-1">Ready To Take Your SEO To <br class="d-md-block d-none"> The Next
                            Level</h2>
                        <p data-aos="fade-up" data-aos-duration="1000">Effective SEO strategies not only elevate a
                            website's visibility but also drive <br class="d-md-block d-none"> targeted traffic, enhance
                            user experience,</p>
                        <div class="btn-area text-center" data-aos="fade-up" data-aos-duration="1200">
                            <a href="{{ route('contact') }}" class="header-btn12"> Get A Free Consultation <i
                                    class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===== CTA AREA ENDS =======-->
@endsection
