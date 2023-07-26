@extends('front.layouts.master')

@section('title', "Home")

@section('page-header')
<section class="banner-area banner-area3 pos-rel">
    <div class="swiper-container slider__active-3">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="single-banner banner-overlay-3 single-banner-3 d-flex align-items-center banner-840">
                <div class="banner-bg banner-bg3" data-background="{{my_asset(get_setting('slider1'))}}">
                </div>
                <div class="container pos-rel">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-12 col-lg-8 col-md-9">
                            <div class="banner-content banner-content3 text-center">
                            <div class="banner-meta-text bdevs-el-subtitle" data-animation="fadeInUp" data-delay=".3s">
                                <span>Welcome to our cargo agency</span>
                            </div>
                            <h1 class="banner-title bdevs-el-title" data-animation="fadeInUp" data-delay=".5s">
                                Transport Anything <br> From Anywhere.
                            </h1>
                            <div class="banner-btn justify-content-center" data-animation="fadeInUp" data-delay=".7s">
                                <a href="{{route('contact')}}" class="fill-btn clip-btn bdevs-el-btn">Get Estimation</a>
                                <a href="{{route('services')}}" class="skew-btn bdevs-el-sec-btn">Our Services</a>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner-content3-round1 vert-move"></div>
                <div class="banner-content3-round2 hori-move"></div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="single-banner banner-overlay-3 single-banner-3 d-flex align-items-center banner-840">
                <div class="banner-bg banner-bg3" data-background="{{my_asset(get_setting('slider2'))}}">
                </div>
                <div class="container pos-rel">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-12 col-lg-8 col-md-9">
                            <div class="banner-content banner-content3 text-center">
                            <div class="banner-meta-text bdevs-el-subtitle" data-animation="fadeInUp" data-delay=".3s">
                                <span>Unlocking the Potential of Efficient Shipping</span>
                            </div>
                            <h1 class="banner-title bdevs-el-title" data-animation="fadeInUp" data-delay=".5s">
                                Air transportation <br> From us.
                            </h1>
                            <div class="banner-btn justify-content-center" data-animation="fadeInUp" data-delay=".7s">
                                <a href="{{route('contact')}}" class="fill-btn clip-btn bdevs-el-btn">Get Estimation</a>
                                <a href="{{route('services')}}" class="skew-btn bdevs-el-sec-btn">Our Services</a>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner-content3-round1 vert-move"></div>
                <div class="banner-content3-round2 hori-move"></div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="single-banner banner-overlay-3 single-banner-3 d-flex align-items-center banner-840">
                <div class="banner-bg banner-bg3" data-background="{{my_asset(get_setting('slider3'))}}">
                </div>
                <div class="container pos-rel">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-12 col-lg-8 col-md-9">
                            <div class="banner-content banner-content3 text-center">
                            <div class="banner-meta-text bdevs-el-subtitle" data-animation="fadeInUp" data-delay=".3s">
                                <span>Experience Seamless Delivery Services</span>
                            </div>
                            <h1 class="banner-title bdevs-el-title" data-animation="fadeInUp" data-delay=".5s">
                                get best services <br> From us..
                            </h1>
                            <div class="banner-btn justify-content-center" data-animation="fadeInUp" data-delay=".7s">
                                <a href="{{route('contact')}}" class="fill-btn clip-btn bdevs-el-btn">Get Estimation</a>
                                <a href="{{route('services')}}" class="skew-btn bdevs-el-sec-btn">Our Services</a>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner-content3-round1 vert-move"></div>
                <div class="banner-content3-round2 hori-move"></div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="single-banner banner-overlay-3 single-banner-3 d-flex align-items-center banner-840">
                <div class="banner-bg banner-bg3" data-background="{{my_asset(get_setting('slider4'))}}">
                </div>
                <div class="container pos-rel">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-12 col-lg-8 col-md-9">
                            <div class="banner-content banner-content3 text-center">
                            <div class="banner-meta-text bdevs-el-subtitle" data-animation="fadeInUp" data-delay=".3s">
                                <span>Deliver with Ease, Anywhere, Anytime</span>
                            </div>
                            <h1 class="banner-title bdevs-el-title" data-animation="fadeInUp" data-delay=".5s">
                                Efficient and <br> Reliable Cargo Services
                            </h1>
                            <div class="banner-btn justify-content-center" data-animation="fadeInUp" data-delay=".7s">
                                <a href="{{route('contact')}}" class="fill-btn clip-btn bdevs-el-btn">Get Estimation</a>
                                <a href="{{route('services')}}" class="skew-btn bdevs-el-sec-btn">Our Services</a>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner-content3-round1 vert-move"></div>
                <div class="banner-content3-round2 hori-move"></div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="single-banner banner-overlay-3 single-banner-3 d-flex align-items-center banner-840">
                <div class="banner-bg banner-bg3" data-background="{{my_asset(get_setting('slider5'))}}">
                </div>
                <div class="container pos-rel">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-12 col-lg-8 col-md-9">
                            <div class="banner-content banner-content3 text-center">
                            <div class="banner-meta-text bdevs-el-subtitle" data-animation="fadeInUp" data-delay=".3s">
                                <span>Efficient Logistics Services Tailored to Your Needs</span>
                            </div>
                            <h1 class="banner-title bdevs-el-title" data-animation="fadeInUp" data-delay=".5s">
                                Fast, Secure, and <br> Reliable Delivery
                            </h1>
                            <div class="banner-btn justify-content-center" data-animation="fadeInUp" data-delay=".7s">
                                <a href="{{route('contact')}}" class="fill-btn clip-btn bdevs-el-btn">Get Estimation</a>
                                <a href="{{route('services')}}" class="skew-btn bdevs-el-sec-btn">Our Services</a>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner-content3-round1 vert-move"></div>
                <div class="banner-content3-round2 hori-move"></div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="single-banner banner-overlay-3 single-banner-3 d-flex align-items-center banner-840">
                <div class="banner-bg banner-bg3" data-background="{{my_asset(get_setting('slider6'))}}">
                </div>
                <div class="container pos-rel">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-12 col-lg-8 col-md-9">
                            <div class="banner-content banner-content3 text-center">
                            <div class="banner-meta-text bdevs-el-subtitle" data-animation="fadeInUp" data-delay=".3s">
                                <span>Seamless Logistics for Stress-Free Delivery</span>
                            </div>
                            <h1 class="banner-title bdevs-el-title" data-animation="fadeInUp" data-delay=".5s">
                                Your Trusted Partner for <br> Swift Delivery
                            </h1>
                            <div class="banner-btn justify-content-center" data-animation="fadeInUp" data-delay=".7s">
                                <a href="{{route('contact')}}" class="fill-btn clip-btn bdevs-el-btn">Get Estimation</a>
                                <a href="{{route('services')}}" class="skew-btn bdevs-el-sec-btn">Our Services</a>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner-content3-round1 vert-move"></div>
                <div class="banner-content3-round2 hori-move"></div>
                </div>
            </div>
        </div>
        <!-- If we need navigation buttons -->
        <div class="slider-nav">
            <div class="slider-button-prev"><i class="fal fa-long-arrow-left"></i></div>
            <div class="slider-button-next"><i class="fal fa-long-arrow-right"></i></div>
        </div>
        <!-- If we need pagination -->
        <div class="slider-pagination slider1-pagination"></div>
    </div>
</section>

@endsection

@section('content')

 <!-- Services Area Start Here  -->
 <section class="services__area pb-60">
    <div class="container">
       <div class="services-one">
          <div class="services__box services__box--space wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">
             <div class="row">
                <div class="col-lg-3 col-xl-3 col-md-6">
                   <div class="services__item text-center">
                      <div class="services__item-icon">
                         <i class="flaticon-boat"></i>
                      </div>
                      <div class="services__item-content">
                         <h3><a href="{{route('services')}}">ocean <br> transportation</a></h3>
                         <p>The quality data, best network building
                            uptime, fastest output
                         </p>
                         <div class="services__item-btn">
                            <a href="{{route('services')}}">service details</a>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="col-lg-3 col-xl-3 col-md-6">
                   <div class="services__item text-center">
                      <div class="services__item-icon">
                         <i class="flaticon-plane"></i>
                      </div>
                      <div class="services__item-content">
                         <h3><a href="{{route('services')}}">airways <br>transportation</a></h3>
                         <p>The quality data, best network building
                            uptime, fastest output
                         </p>
                         <div class="services__item-btn">
                            <a href="{{route('services')}}">service details</a>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="col-lg-3 col-xl-3 col-md-6">
                   <div class="services__item text-center">
                      <div class="services__item-icon">
                         <i class="flaticon-frontal-truck"></i>
                      </div>
                      <div class="services__item-content">
                         <h3><a href="{{route('services')}}">road <br> transportation</a></h3>
                         <p>The quality data, best network building
                            uptime, fastest output
                         </p>
                         <div class="services__item-btn">
                            <a href="{{route('services')}}">service details</a>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="col-lg-3 col-xl-3 col-md-6">
                   <div class="services__item text-center">
                      <div class="services__item-icon">
                         <i class="flaticon-train"></i>
                      </div>
                      <div class="services__item-content">
                         <h3><a href="{{route('services')}}">train <br> transportation</a></h3>
                         <p>The quality data, best network building
                            uptime, fastest output
                         </p>
                         <div class="services__item-btn">
                            <a href="{{route('services')}}">service details</a>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
 <!-- Services Area End Here  -->

<!-- About Us Area Start Here  -->
<section class="about__area about__area-padding pt-60 pb-60 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-xl-5">
                <div class="about__img mb-60 p-relative wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".3s">
                <img src="{{static_asset('front/img/about/about-img.png')}}" alt="About">
                <div class="about__time-img p-absolute w-img vert-move">
                    <img src="{{static_asset('front/img/about/about-time.png')}}" alt="About Time Images">
                </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-7">
                <div class="about__content mb-60 wow fadeInRight" data-wow-duration="1.5s" data-wow-delay=".5s">
                <div class="section__title mb-35">
                    <span class="sub-title">about us</span>
                    <h2 class="title">A company involved in <br> servicing, maintenance.</h2>
                </div>
                <div class="about__content-inner mb-35">
                    <p class="mb-15">From finance, retail, and travel, to social media, cybersecurity, adtech,
                        and more, market leaders are leveraging web data to maintain their transt
                        advantage. Discover how it can work for you.
                    </p>
                    <p>With over 60 years of experience, we understand what a vital role we
                        play for our customers. We strive to work seamlessly with our customers
                        as if we were an in-house department. Transport offers a host of logistic
                        management services and supply chain solutions.
                    </p>
                </div>
                <div class="about__btn">
                    <a class="fill-btn clip-btn" href="{{route('about')}}">learn more</a>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Us Area End Here  -->

<!-- Services Cta Area Start Here  -->
<section class="services__cta">
    <div class="container-fluid container-lg">
        <div class="services__cta-box p-relative services__cta-overlay"
            data-background="assets/img/services/services-cta-bg.png">
            <div class="services__cta-wrapper">
                <div class="services__cta-item t-right mb-15">
                <h3>New to cargo service?</h3>
                </div>
                <div class="services__cta-item text-center mb-15">
                <i class="flaticon-telephone-call"></i>
                </div>
                <div class="services__cta-item mb-15">
                <h3>call us on <a href="tel:{{get_setting('phone')}}">{{get_setting('phone')}}</a></h3>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Services Cta Area End Here  -->

<!-- Funfact area start  -->
<section class="dp-funfact-area pt-120 pb-90">
<div class="container">
    <div class="dp-funfactor-grid wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">
        <div class="dp-funfact-wrapper mb-30">
            <div class="dp-funfact-icon">
                <i class="fal fa-globe"></i>
            </div>
            <div class="dp-funfact-content">
                <h3 class="counter">19300</h3>
                <p>Worldwide Clients</p>
            </div>
        </div>
        <div class="dp-funfact-wrapper mb-30">
            <div class="dp-funfact-icon">
                <i class="fal fa-users"></i>
            </div>
            <div class="dp-funfact-content">
                <h3 class="counter">17083</h3>
                <p>Company Staffs</p>
            </div>
        </div>
        <div class="dp-funfact-wrapper mb-30">
            <div class="dp-funfact-icon">
                <i class="fal fa-smile"></i>
            </div>
            <div class="dp-funfact-content">
                <h3 class="counter">17227</h3>
                <p>Satisfied Clients</p>
            </div>
        </div>
        <div class="dp-funfact-wrapper mb-30">
            <div class="dp-funfact-icon">
                <i class="fal fa-truck"></i>
            </div>
            <div class="dp-funfact-content">
                <h3 class="counter">18907</h3>
                <p>Successful Delivery</p>
            </div>
        </div>
    </div>
</div>
</section>
<!-- Funfact area end  -->

<!-- Services CTA Area Start Here  -->
<section class="services__cta bg-css overlay pt-125 pb-120" data-background="{{static_asset('front/img/cta/services-cta.png')}}">
    <div class="container">
        <div class="row justify-content-center wow fadeInUp" data-wow-duration="1.5s"
        data-wow-delay=".3s">
            <div class="col-lg-6">
                <div class="services__cta-3-content text-center">
                <div class="services__cta-3-play">

                    {{-- <a href="../../../../external.html?link=https://www.youtube.com/watch?v=5Gsam6jyRI0"
                        class="popup-video play-btn play-btn-white"><i class="fas fa-play"></i></a> --}}
                </div>
                <h2 class="services__cta-3-title">New to cargo service?<br> need help?</h2>
                <div class="services__cta-3-btn">
                    <a class="fill-btn" href="tel:{{get_setting('phone')}}">make a call</a>
                    <a href="{{route('contact')}}" class="skew-btn">get a quote</a>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Services CTA Area End Here  -->
@endsection
