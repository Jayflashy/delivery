@extends('front.layouts.master')
@section('title', 'Services')
@section('content')
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
