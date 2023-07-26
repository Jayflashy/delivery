@extends('front.layouts.master')
@section('title', 'About Us')
@section('content')

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
