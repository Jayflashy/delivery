<footer>
    <section class="footer-area footer-area1 footer-area3 white-bg pt-100 pb-90">
       <div class="container">
          <div class="row">
             <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="footer-widget footer3-widget footer3-widget1 mb-50 pr-20">
                   <div class="footer-widget-title">
                      <h4>about us</h4>
                   </div>
                   <p>{{get_setting('description')}}
                   </p>
                   <div class="footer-social-link mt-40">
                      <ul>
                         <li><a href="{{get_setting('facebook')}}"><i class="fab fa-facebook-f"></i></a></li>
                         <li><a href="{{get_setting('twitter')}}"><i class="fab fa-twitter"></i></a></li>
                         <li><a href="{{get_setting('telegram')}}"><i class="fab fa-telegram"></i></a></li>
                         <li><a href="{{get_setting('instagram')}}"><i class="fab fa-instagram"></i></a></li>
                         <li><a href="{{get_setting('whatsapp')}}"><i class="fab fa-whatsapp"></i></a></li>
                      </ul>
                   </div>
                </div>
             </div>
             <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="footer-widget footer3-widget footer3-widget2 mb-50 pl-10">
                   <div class="footer-widget-title">
                      <h4>Contact us</h4>
                   </div>
                   <div class="footer-widget">
                         <p>Email: {{get_setting('email')}}</p>
                         <p>Phone: {{get_setting('phone')}}</p>
                         <p>Address: {{get_setting('address')}}</p>
                   </div>
                </div>
             </div>
             <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="footer-widget footer3-widget footer3-widget4 mb-50">
                   <div class="footer-widget-title">
                      <h4>Useful Links</h4>
                   </div>
                  <div class="footer-widget-link">
                    <ul>
                        <li><a href="{{route('about')}}">About Us</a></li>
                        <li><a href="{{route('services')}}">Services</a></li>
                        <li><a href="#">Our Team</a></li>
                        <li><a href="{{route('contact')}}">Contact Us</a></li>
                        {{-- <li><a href="#">FAQ &amp; Ans</a></li> --}}
                     </ul>
                     <ul>
                        <li><a href="services">Road Transportation</a></li>
                        <li><a href="services">Our Services</a></li>
                        <li><a href="services">Air Freight</a></li>
                        <li><a href="services">Warehousing</a></li>
                     </ul>
                  </div>
                </div>
             </div>
          </div>
       </div>
    </section>
    <div class="footer__bottom-area p-relative">
       <div class="footer-menu-area position p-absolute">
          <div class="container">
             <div class="theme-bg clip-box-xs">
                <div class="footer-menu-box">
                   <div class="row align-items-center">
                      <div class="col-xxl-7 col-lg-5">
                         <div class="footer-menu mb-15">
                            <nav>
                               <ul>
                                  <li><a href="{{route('track')}}">Tracking</a></li>
                                  <li><a href="terms">Terms & Conditions</a></li>
                                  <li><a href="#">careers</a></li>
                               </ul>
                            </nav>
                         </div>
                      </div>
                      <div class="col-xxl-5 col-lg-7">
                         <div class="footer-brand m-img mb-15 text-center text-lg-end">
                            <img src="{{static_asset('front/img/footer/footer-icon-img.png')}}" alt="footer icon">
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
       <div class="copy-right-area grey-bg-2">
          <div class="container">
             <div class="copy-right-text copy-right-text-3 text-center">
                <p>Copyright & design by <a href="#">@bdevs</a> - {{Date('Y')}}</p>
             </div>
          </div>
       </div>
    </div>
 </footer>
