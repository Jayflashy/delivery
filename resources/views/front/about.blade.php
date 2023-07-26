@extends('front.layouts.master')
@section('title', 'About Us')
@section('content')
    <!-- About Us 3 Area Start Here -->
    <section class="about__3 about__gray-bg p-relative pt-120 pb-60 wow fadeInUp" data-wow-duration="1.5s"
        data-wow-delay=".3s">
        <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6">
                <div class="about__3-img-wrapper p-relative mb-60">
                    <div class="about__3-top w-img">
                    <img src="{{static_asset('front/img/about/about-3-1.png')}}" alt="About">
                    </div>
                    <div class="about__3-main w-img">
                    <img src="{{static_asset('front/img/about/about-page-1.jpg')}}" alt="About">
                    </div>
                    <div class="about__3-text clip-box-sm">
                    <span><i class="far fa-trophy-alt"></i></span>
                    <h4 class="about__3-title">25 Years of experience</h4>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="about__3-content mb-60">
                    <div class="section__title mb-30">
                    <span class="sub-title">about us</span>
                    <h2 class="title">A company involved in <br> servicing, maintenance.</h2>
                    </div>
                    <div class="about__3-content-inner p-relative">
                    <div class="about__3-content-left">
                        <p>From finance, retail, and travel, to social media,
                            cybersecurity, adtech, and more, market leaders
                            are leveraging web data to maintain their transt
                            advantage. Discover how it can work for you.
                        </p>
                        <p>The Binance, retail, and travel, to social media,
                            cybersecurity, adtech, and more...
                        </p>
                        <div class="about__3-content-btn mt-35">
                            <a href="{{route('contact')}}" class="skew-btn">Contact Us</a>
                        </div>
                    </div>
                    <div class="about__3-content-right">
                        <div class="about__3-shadow">
                            <div class="about__3-content-num">
                                <h2>20</h2>
                                <h6>Project done</h6>
                            </div>
                        </div>
                        <div class="about__3-shadow">
                            <div class="about__3-content-num">
                                <h2>91</h2>
                                <h6>star ratings</h6>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- About Us 3 Area End Here -->

    <!-- Services 3 Area Start Here  -->
    <section class="services__3 grey-bg-4 pt-120 pb-90 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">
        <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="section__title mb-55 text-center">
                    <span class="sub-title">services</span>
                    <h2 class="title">what we do</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-md-6">
                <div class="services__3-item mb-30">
                    <div class="services__3-item-num">
                    <h3>01</h3>
                    </div>
                    <div class="services__3-item-icon">
                    <i class="flaticon-boat"></i>
                    </div>
                    <h3 class="services__3-item-title"><a href="{{route('services')}}">ocean transportation</a></h3>
                    <p class="services__3-item-text">The quality data, best network building uptime,
                    fastest output from uur team jackle.
                    </p>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="services__3-item mb-30">
                    <div class="services__3-item-num">
                    <h3>02</h3>
                    </div>
                    <div class="services__3-item-icon">
                    <i class="flaticon-plane"></i>
                    </div>
                    <h3 class="services__3-item-title"><a href="{{route('services')}}">Air transportation</a></h3>
                    <p class="services__3-item-text">The quality data, best network building uptime,
                    fastest output from uur team jackle.
                    </p>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="services__3-item mb-30">
                    <div class="services__3-item-num">
                    <h3>03</h3>
                    </div>
                    <div class="services__3-item-icon">
                    <i class="flaticon-frontal-truck"></i>
                    </div>
                    <h3 class="services__3-item-title"><a href="{{route('services')}}">truck transportation</a></h3>
                    <p class="services__3-item-text">The quality data, best network building uptime,
                    fastest output from uur team jackle.
                    </p>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="services__3-item mb-30">
                    <div class="services__3-item-num">
                    <h3>04</h3>
                    </div>
                    <div class="services__3-item-icon">
                    <i class="flaticon-train"></i>
                    </div>
                    <h3 class="services__3-item-title"><a href="{{route('services')}}">train transportation</a></h3>
                    <p class="services__3-item-text">The quality data, best network building uptime,
                    fastest output from uur team jackle.
                    </p>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="services__3-item mb-30">
                    <div class="services__3-item-num">
                    <h3>05</h3>
                    </div>
                    <div class="services__3-item-icon">
                    <i class="flaticon-box"></i>
                    </div>
                    <h3 class="services__3-item-title"><a href="{{route('services')}}">package transport</a></h3>
                    <p class="services__3-item-text">The quality data, best network building uptime,
                    fastest output from uur team jackle.
                    </p>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="services__3-item mb-30">
                    <div class="services__3-item-num">
                    <h3>06</h3>
                    </div>
                    <div class="services__3-item-icon">
                    <i class="flaticon-bicycle"></i>
                    </div>
                    <h3 class="services__3-item-title"><a href="{{route('services')}}">bicycle transport</a></h3>
                    <p class="services__3-item-text">The quality data, best network building uptime,
                    fastest output from uur team jackle.
                    </p>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- Services 3 Area End Here  -->

    <!-- approach area start  -->
    <section class="approach__area fix grey-bg-4">
        <div class="approach__img m-img">
        <img src="{{static_asset('front/img/approach/approch-img.jpg')}}" alt="approach">
        </div>
        <div class="container">
        <div class="row g-0 justify-content-end">
            <div class="col-lg-6">
                <div class="approach__content wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">
                    <div class="section__title mb-35">
                    <span class="sub-title">approach</span>
                    <h2 class="title">100% Satisfaction
                        Guarantee
                    </h2>
                    </div>
                    <div class="approach__text">
                    <p>{{get_setting('title')}} is a representative logistics operator providing full range of service
                        in
                        the sphere of customs
                        clearance
                        transportation worldwide for any cargo.
                    </p>
                    <ul>
                        <li><i class="fal fa-check-circle"></i>Commercial expertise</li>
                        <li><i class="fal fa-check-circle"></i>Logistical expertise</li>
                        <li><i class="fal fa-check-circle"></i>Sustainability goals</li>
                        <li><i class="fal fa-check-circle"></i>Cost Optimization</li>
                        <li><i class="fal fa-check-circle"></i>Reduce Transit Time</li>
                        <li><i class="fal fa-check-circle"></i>Managing Logistics</li>
                    </ul>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- approach area end -->
    <!-- mission area start  -->
    <section class="mission__area p-relative fix grey-bg-4 mb-120">
        <div class="mission__img m-img">
           <img src="{{static_asset('front/img/mission/mission-img.jpg')}}" alt="mission">
        </div>
        <div class="container">
           <div class="row g-0">
              <div class="col-lg-6">
                 <div class="mission__content wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">
                    <div class="section__title mb-35">
                       <span class="sub-title">Our Mission</span>
                       <h2 class="title">Our global logistics
                          expertise supply
                       </h2>
                    </div>
                    <div class="mission__text">
                       <p>{{get_setting('title')}} is a representative logistics operator providing full range of service
                          in
                          the sphere of customs
                          clearance
                          transportation worldwide for any cargo.
                       </p>
                       <div class="mission__text-inner">
                          <img src="{{static_asset('front/img/mission/mission-contact-img.jpg')}}" alt="mission">
                          <div class="mission__text-contact">
                             <div class="single-contact-info d-flex align-items-center">
                                <div class="contact-info-icon">
                                   <a href="#"><i class="flaticon-envelope"></i></a>
                                </div>
                                <div class="contact-info-text">
                                   <span>send email</span>
                                   <h5><a href="mailto:{{get_setting('email')}}">{{get_setting('email')}}</a> </h5>
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
    <!-- mission area end -->
@endsection

@section('page-header')
<section class="page-title-area breadcrumb-spacing" data-background="{{static_asset('front/img/breadcrumb/breadcrumb-bg.png')}}">
    <div class="container">
       <div class="row justify-content-center">
          <div class="col-xxl-9">
             <div class="page-title-wrapper text-center">
                <h3 class="page-title mb-25">@yield('title')</h3>
                <div class="breadcrumb-menu">
                   <nav aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                      <ul class="trail-items">
                         <li class="trail-item trail-begin"><a href="{{route('index')}}"><span>Home</span></a></li>
                         <li class="trail-item trail-end"><span>@yield('title')</span></li>
                      </ul>
                   </nav>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
@endsection
