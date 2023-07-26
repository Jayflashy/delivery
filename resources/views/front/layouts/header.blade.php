<header>
    <div class="header__top-3">
       <div class="container-fluid">
          <div class="row justify-content-end">
             <div class="col-xxl-10 col-xl-9 col-lg-9 col-sm-9">
                <div
                   class="header__top-3-text theme-bg clip-box-xxs d-flex align-items-center justify-content-between">
                   <div class="header__text">
                      <span class="uppercase">We’re more than just transport. <b><a href="{{route('contact')}}">Free
                               Counsultancy</a></b> </span>
                   </div>
                   <div class="header__top-3-link t-right">
                      <ul>
                         <li><a href="{{get_setting('facebook')}}"><i class="fab fa-facebook-f"></i></a></li>
                         <li><a href="{{get_setting('twitter')}}"><i class="fab fa-twitter"></i></a></li>
                         <li><a href="{{get_setting('telegram')}}"><i class="fab fa-telegram"></i></a></li>
                         <li><a href="{{get_setting('whatsapp')}}"><i class="fab fa-whatsapp"></i></a></li>
                         <li><a href="{{get_setting('instagram')}}"><i class="fab fa-instagram"></i></a></li>
                      </ul>
                   </div>
                </div>
             </div>
             <div class="col-xxl-2 col-xl-3 col-lg-3 col-sm-3">
                <div class="header__top-3-btn t-right">
                   <a href="{{route('contact')}}" class="fill-btn fill-lg-btn clip-md-btn">get estimation</a>
                </div>
             </div>
          </div>
       </div>
    </div>
    <div id="header-sticky" class="header__bottom-3 menu-sticky">
       <div class="container-fluid">
          <div class="row align-items-center">
             <div class="col-xxl-2 col-xl-2 col-lg-2 col-6">
                <div class="logo">
                   <a href="{{route('index')}}"><img src="{{my_asset(get_setting('logo'))}}" alt="Logo"></a>
                </div>
             </div>
             <div class="col-xxl-6 col-xl-8 col-lg-8 col-6">
                <div class="main-menu main-menu-3">
                   <nav id="mobile-menu">
                      <ul>
                         <li class="menu-item">
                            <a href="{{route('index')}}">Home</a>
                         </li>
                         <li class="menu-item">
                            <a href="{{route('about')}}">About</a>
                         </li>
                         <li class="menu-item">
                            <a href="{{route('services')}}">Services</a>
                         </li>
                         <li class="menu-item">
                            <a href="{{route('track')}}">Track Shipment</a>
                         </li>
                         <li><a href="{{route('contact')}}">contact</a></li>
                      </ul>
                   </nav>
                </div>
                <div class="header__toggle-btn sidebar-toggle-btn text-end d-block d-lg-none">
                   <div class="header__bar">
                      <span></span>
                      <span></span>
                      <span></span>
                   </div>
                </div>
             </div>
             <div class="col-xxl-4 col-xl-2 col-lg-2 d-none d-lg-block">
                <div class="header__bottom-3-wrapper">
                   <div class="header__bottom-3-info">
                      <div class="header__bottom-3-item">
                         <div class="header__bottom-3-icon mr-10">
                            <i class="flaticon-telephone-call"></i>
                         </div>
                         <div class="header__bottom-3-text">
                            <h5><a href="tel:{{get_setting('phone')}}">{{get_setting('phone')}}</a></h5>
                         </div>
                      </div>
                      <div class="header__bottom-3-item">
                         <div class="header__bottom-3-icon mr-10">
                            <i class="flaticon-envelope"></i>
                         </div>
                         <div class="header__bottom-3-text">
                            <h5><a href="mailto:{{get_setting('email')}}">{{get_setting('email')}}</a></h5>
                         </div>
                      </div>
                   </div>
                   <div class="header__bottom-3-ecom">
                      <div class="header__bottom-3-squre sidebar-toggle-btn">
                         <a href="javascript:void(0)"><i class="flaticon-menu"></i></a>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
    <!-- Sidebar Area Start Here  -->
    <div class="sidebar__area">
       <div class="sidebar__wrapper">
          <div class="sidebar__close">
             <button class="sidebar__close-btn" id="sidebar__close-btn">
                <i class="fal fa-times"></i>
             </button>
          </div>
          <div class="sidebar__content">
             <div class="sidebar__logo mb-40">
                <a href="{{route('index')}}">
                   <img src="{{my_asset(get_setting('logo'))}}" alt="logo.png">
                </a>
             </div>
             <div class="mobile-menu fix mb-10 mean-container">
             </div>
             <div class="sidebar__contact mt-30 mb-30">
                <div class="sidebar__info fix">
                   <div class="sidebar__info-item">
                      <div class="sidebar__info-icon">
                         <i class="flaticon-telephone-call"></i>
                      </div>
                      <div class="sidebar__info-text">
                         <span>Call us now</span>
                         <h5><a href="tel:{{get_setting('phone')}}">{{get_setting('phone')}}</a></h5>
                      </div>
                   </div>
                   <div class="sidebar__info-item">
                      <div class="sidebar__info-icon">
                         <i class="flaticon-envelope"></i>
                      </div>
                      <div class="sidebar__info-text">
                         <span>Email now</span>
                         <h5><a href="mailto:{{get_setting('email')}}">{{get_setting('email')}}</a></h5>
                      </div>
                   </div>
                   <div class="sidebar__info-item">
                      <div class="sidebar__info-icon">
                         <i class="flaticon-pin"></i>
                      </div>
                      <div class="sidebar__info-text">
                         {{-- <span>12/A, New Boston Hall</span> --}}
                         <h5>{{get_setting('address')}}</h5>
                      </div>
                   </div>
                </div>
             </div>
             <div class="sidebar__social">
                <ul>
                   <li><a href="{{get_setting('facebook')}}"><i class="fab fa-facebook-f"></i></a></li>
                   <li><a href="{{get_setting('twitter')}}"><i class="fab fa-twitter"></i></a></li>
                   <li><a href="{{get_setting('telegram')}}"><i class="fab fa-telegram"></i></a></li>
                   <li><a href="{{get_setting('whatsapp')}}"><i class="fab fa-whatsapp"></i></a></li>
                </ul>
             </div>
          </div>
       </div>
    </div>
    <!-- Sidebar Area Start Here  -->
    <div class="body-overlay"></div>
</header>
