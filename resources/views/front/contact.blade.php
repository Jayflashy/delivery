@extends('front.layouts.master')
@section('title', 'Contact Us')
@section('content')
<section class="contact-area contact--area pt-120 pb-110 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s">
    <div class="container">
        <div class="row">
            <div class="col-xxl-5 col-xl-6 col-lg-5">
                <div class="contact--wrapper mb-60">
                    <div class="section__title mb-45">
                        <span class="sub-title">contact with us</span>
                        <h2 class="title">Speak with our consultant</h2>
                    </div>
                    <div class="contact-info mr-20">
                        <div class="single-contact-info d-flex align-items-center">
                            <div class="contact-info-icon">
                                <a href="#"><i class="flaticon-telephone-call"></i></a>
                            </div>
                            <div class="contact-info-text">
                                <span>Call us now</span>
                                <h5><a href="tel:{{get_setting('phone')}}">{{get_setting('phone')}}</a></h5>
                            </div>
                        </div>
                        <div class="single-contact-info d-flex align-items-center">
                            <div class="contact-info-icon">
                                <a href="#"><i class="flaticon-envelope"></i></a>
                            </div>
                            <div class="contact-info-text">
                                <span>send email</span>
                                <h5><a href="mailto:{{get_Setting('email')}}">{{get_setting('email')}}</a> </h5>
                            </div>
                        </div>
                        <div class="single-contact-info d-flex align-items-center">
                            <div class="contact-info-icon">
                                <a href="#"><i class="flaticon-pin"></i></a>
                            </div>
                            <div class="contact-info-text">
                                <span>visit office</span>
                                <h5><a href="">{{get_setting('address')}}</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-7 col-xl-6 col-lg-7">
                <div class="contact-form mb-60">
                    <form action="{{route('contact')}}" id="contact-form" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-xxl-6 col-xl-6 col-lg-6">
                                <div class="single-input-field">
                                    <input name="name" type="text" required placeholder="Your Name">
                                    <i class="fas fa-user"></i>
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6">
                                <div class="single-input-field">
                                    <input name="email" type="email" required placeholder="Email Adress">
                                    <i class="fas fa-envelope"></i>
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6">
                                <div class="single-input-field">
                                    <input name="phone" type="text" placeholder="Phone">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6">
                                <div class="single-input-field select">
                                    <input type="text" name="subject" id="subject" required placeholder="Subject">
                                </div>
                            </div>
                            <div class="col-xxl-12 col-xl-12 col-lg-12">
                                <div class="single-input-field textarea">
                                    <textarea rows="10" required cols="10" placeholder="Write Massage" name="massage"></textarea>
                                    <i class="fas fa-edit"></i>
                                </div>
                            </div>
                            <div class="col-xxl-12 col-xl-12">
                                <button type="submit" class="fill-btn clip-btn">Send a message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="red-bg">
    <div class="container">
        <hr>
    </div>
</div>
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
