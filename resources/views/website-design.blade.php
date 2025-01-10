@extends('main')
@push('title')
    <title>DGS - Digital Marketing Agency</title>
@endpush
@section('main-section')
    <!--===== HERO AREA STARTS =======-->
    <div class="about-header-area"
        style="background-image: url({{ url('/') }}/assets/img/bg/inner-header.png); background-repeat: no-repeat; background-size: cover; background-position: center;">
        <img src="{{ url('/') }}/assets/img/elements/elements1.png" alt="" class="elements1 aniamtion-key-1">
        <img src="{{ url('/') }}/assets/img/elements/star2.png" alt="" class="star2 keyframe5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 m-auto">
                    <div class="about-inner-header heading9 text-center">
                        <h1>Website Design</h1>
                        <a href="{{ route('home') }}">Home <i class="fa-solid fa-angle-right"></i> Services <i
                                class="fa-solid fa-angle-right"></i> <span>Website Design</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===== HERO AREA ENDS =======-->

    <!--===== ABOUT AREA STARTS =======-->
    <div class="service-inner2-section-area sp8">
        <img src="{{ url('/') }}/assets/img/elements/instagram1.png" alt="" class="instagram1">
        <img src="{{ url('/') }}/assets/img/elements/linkedin1.png" alt="" class="linkedin1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="service-images">
                        <img src="{{ url('/') }}/assets/img/elements/facebook1.png" alt="" class="facebook1">
                        <img src="{{ url('/') }}/assets/img/elements/twitter1.png" alt="" class="twitter1">
                        <img src="{{ url('/') }}/assets/img/all-images/service-img11.png" alt="">
                        <img src="{{ url('/') }}/assets/img/bg/inner-bg1.png" alt="" class="inner-bg1">
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="service-content heading2">
                        <h5>Website Design</h5>
                        <h2>Website Design</h2>
                        <p>Welcome to SEOC’s Website Design Services. Our team specializes in crafting and executing
                            social media strategies that elevate your brand, engage your audience, and drive measurable
                            results. Harness the power of social media to grow your business and connect with customers on a
                            deeper level.</p>
                        <div class="space32"></div>
                        <div class="btn-area1">
                            <a href="#" class="header-btn1">View Our Services <span><i
                                        class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===== ABOUT AREA ENDS =======-->


    <!--===== CASE AREA STARTS =======-->
    <div class="case1-section-area sp1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 m-auto">
                    <div class="case-header-area heading2 text-center">
                        <h5>Case Study</h5>
                        <h2 class="text-anime-style-3">SEOC Case Study</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="cs_case_study_1_list">
                        <div class="cs_case_study cs_style_1 cs_hover_active active">
                            <a href="#" class="cs_case_study_thumb cs_bg_filed"
                                data-src="{{ url('/') }}/assets/img/all-images/case-img1.png"></a>
                            <div class="content-area1">
                                <a href="#">Website Design & Development</a>
                            </div>
                            <div class="content-area">
                                <a href="#">Website Design & Development </a>
                                <p>We understand the critical role that a well-designed and user-friendly website plays in
                                    shaping your online presence driving.</p>
                            </div>
                        </div>
                        <div class="cs_case_study cs_style_1 cs_hover_active">
                            <a href="#" class="cs_case_study_thumb cs_case_study_thumb2 cs_bg_filed"
                                data-src="{{ url('/') }}/assets/img/all-images/case-img2.png"></a>
                            <div class="content-area1">
                                <a href="#">SEO</a>
                            </div>
                            <div class="content-area">
                                <a href="#">SEO</a>
                                <p>We understand the critical role that a well-designed and user-friendly website plays in
                                    shaping your online presence driving.</p>
                            </div>
                        </div>
                        <div class="cs_case_study cs_style_1 cs_hover_active">
                            <a href="#" class="cs_case_study_thumb cs_case_study_thumb3 cs_bg_filed"
                                data-src="{{ url('/') }}/assets/img/all-images/case-img3.png"></a>
                            <div class="content-area1">
                                <a href="#">PPC Advertising</a>
                            </div>
                            <div class="content-area">
                                <a href="#">PPC Advertising</a>
                                <p>We understand the critical role that a well-designed and user-friendly website plays in
                                    shaping your online presence driving.</p>
                            </div>
                        </div>
                        <div class="cs_case_study cs_style_1 cs_hover_active">
                            <a href="#" class="cs_case_study_thumb cs_case_study_thumb4 cs_bg_filed"
                                data-src="{{ url('/') }}/assets/img/all-images/case-img4.png"></a>
                            <div class="content-area1">
                                <a href="#">Website Design</a>
                            </div>
                            <div class="content-area">
                                <a href="#">Website Design</a>
                                <p>We understand the critical role that a well-designed and user-friendly website plays in
                                    shaping your online presence driving.</p>
                            </div>
                        </div>
                        <div class="cs_case_study cs_style_1 cs_hover_active">
                            <a href="#" class="cs_case_study_thumb cs_case_study_thumb5 cs_bg_filed"
                                data-src="{{ url('/') }}/assets/img/all-images/case-img5.png"></a>
                            <div class="content-area1">
                                <a href="#">Content Marketing</a>
                            </div>
                            <div class="content-area">
                                <a href="#">Content Marketing</a>
                                <p>We understand the critical role that a well-designed and user-friendly website plays in
                                    shaping your online presence driving.</p>
                            </div>
                        </div>
                        <div class="cs_case_study cs_style_1 cs_hover_active">
                            <a href="#" class="cs_case_study_thumb cs_case_study_thumb6 cs_bg_filed"
                                data-src="{{ url('/') }}/assets/img/all-images/case-img6.png"></a>
                            <div class="content-area1">
                                <a href="#">Email Marketing</a>
                            </div>
                            <div class="content-area">
                                <a href="#">Email Marketing</a>
                                <p>We understand the critical role that a well-designed and user-friendly website plays in
                                    shaping your online presence driving.</p>
                            </div>
                        </div>
                        <div class="cs_case_study cs_style_1 cs_hover_active " style="margin: 0 !important;">
                            <a href="#" class="cs_case_study_thumb cs_case_study_thumb7 cs_bg_filed"
                                data-src="{{ url('/') }}/assets/img/all-images/case-img7.png"></a>
                            <div class="content-area1">
                                <a href="#">Analytics & Reporting</a>
                            </div>
                            <div class="content-area">
                                <a href="#">Analytics & Reporting</a>
                                <p>We understand the critical role that a well-designed and user-friendly website plays in
                                    shaping your online presence driving.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===== CASE AREA ENDS =======-->


    <!--===== SERVICE AREA STARTS =======-->
    <div class="service1-section-area sp1 bg2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 m-auto">
                    <div class="service-header-area heading2 text-center">
                        <h5>Our Service</h5>
                        <h2>Social Media Service</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="service-all-boxes-area">
                        <div class="service-boxarea">
                            <a href="#">Search Engine Optimization ( SEO)</a>
                            <div class="space40"></div>
                            <img src="{{ url('/') }}/assets/img/icons/service-icon1.svg" alt="">
                            <div class="space40"></div>
                            <p>Enhance your online visibility & drive organic traffic with our advanced SEO techniques. We
                                optimize your website to rank higher.</p>
                        </div>

                        <div class="service-boxarea box2">
                            <a href="#">Pay-Per-Click (PPC) Advertising</a>
                            <div class="space40"></div>
                            <img src="{{ url('/') }}/assets/img/icons/service-icon2.svg" alt="">
                            <div class="space40"></div>
                            <p>Reach your audience instantly and drive qualified leads with targeted PPC campaigns. Our
                                experts craft compelling ad copy and optimize.</p>
                        </div>

                        <div class="service-boxarea box3">
                            <a href="#">Website Design</a>
                            <div class="space66"></div>
                            <img src="{{ url('/') }}/assets/img/icons/service-icon3.svg" alt="">
                            <div class="space40"></div>
                            <p>Build a strong brand presence and engage with your audience on social media platforms. We
                                create strategic social media campaigns to boost brand.</p>
                        </div>

                        <div class="service-boxarea box4">
                            <a href="#">Website Design and Development</a>
                            <div class="space40"></div>
                            <img src="{{ url('/') }}/assets/img/icons/service-icon4.svg" alt="">
                            <div class="space40"></div>
                            <p>Make a lasting impression with a professionally designed and user-friendly website. Our web
                                design and development services ensure website.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 m-auto">
                    <div class="space50"></div>
                    <div class="btn-area1 text-center">
                        <a href="#" class="header-btn1">View More Services <span><i
                                    class="fa-solid fa-arrow-right"></i></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===== SERVICE AREA ENDS =======-->

    <!--===== CHOOSE AREA STARTS =======-->
    <div class="choose-section-area sp1">
        <img src="{{ url('/') }}/assets/img/bg/cta-bg1.png" alt="" class="cta-bg1 aniamtion-key-2">
        <img src="{{ url('/') }}/assets/img/bg/cta-bg2.png" alt="" class="cta-bg2 aniamtion-key-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="choose-header-area text-center heading2">
                        <h5>Why Choose Us</h5>
                        <h2>Why Choose SEOC For PPC?</h2>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="accordian-tabs-area">
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseOne" aria-expanded="false"
                                        aria-controls="flush-collapseOne">
                                        1. Customized Strategies
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse show"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">We believe in transparency and provide regular updates and
                                        detailed reports on your campaign's progress.</div>
                                    <div class="space10"></div>
                                    <div class="accordion-body body2">Ready to boost your online presence and drive more
                                        organic traffic to your website.</div>
                                </div>
                            </div>
                            <div class="space24"></div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                        aria-controls="flush-collapseTwo">
                                        2.Transparent Reporting
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">We believe in transparency and provide regular updates and
                                        detailed reports on your campaign's progress.</div>
                                    <div class="space10"></div>
                                    <div class="accordion-body body2">Ready to boost your online presence and drive more
                                        organic traffic to your website.</div>
                                </div>
                            </div>
                            <div class="space24"></div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseThree" aria-expanded="false"
                                        aria-controls="flush-collapseThree">
                                        3.Proven Results
                                    </button>
                                </h2>
                                <div id="flush-collapseThree" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">We believe in transparency and provide regular updates and
                                        detailed reports on your campaign's progress.</div>
                                    <div class="space10"></div>
                                    <div class="accordion-body body2">Ready to boost your online presence and drive more
                                        organic traffic to your website.</div>
                                </div>
                            </div>
                            <div class="space24"></div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseFour" aria-expanded="false"
                                        aria-controls="flush-collapseFour">
                                        4.Expert Team
                                    </button>
                                </h2>
                                <div id="flush-collapseFour" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">We believe in transparency and provide regular updates and
                                        detailed reports on your campaign's progress.</div>
                                    <div class="space10"></div>
                                    <div class="accordion-body body2">Ready to boost your online presence and drive more
                                        organic traffic to your website.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-all-images-area">
                        <img src="{{ url('/') }}/assets/img/elements/elements14.png" alt=""
                            class="elements12 keyframe5">
                        <img src="{{ url('/') }}/assets/img/elements/elements15.png" alt=""
                            class="elements13 keyframe5">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="img1">
                                    <div class="space100"></div>
                                    <img src="{{ url('/') }}/assets/img/all-images/service-img5.png" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="img2">
                                    <img src="{{ url('/') }}/assets/img/all-images/service-img9.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===== CHOOSE AREA ENDS =======-->

    <!--===== CTA AREA STARTS =======-->
    <div class="cta-section-area">
        <img src="{{ url('/') }}/assets/img/bg/cta-bg1.png" alt="" class="cta-bg1 aniamtion-key-2">
        <img src="{{ url('/') }}/assets/img/bg/cta-bg2.png" alt="" class="cta-bg2 aniamtion-key-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 m-auto">
                    <div class="cta-header-area text-center sp4 heading2">
                        <h2>Ready To Take Your SEO To <br class="d-md-block d-none"> The Next Level</h2>
                        <p>Effective SEO strategies not only elevate a website's visibility but also drive <br
                                class="d-md-block d-none"> targeted traffic, enhance user experience,</p>
                        <div class="btn-area text-center">
                            <a href="{{ route('contact') }}" class="header-btn1">Free Consultation <span><i
                                        class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===== CTA AREA ENDS =======-->
@endsection
