  <footer class="footer-area style-two mg-top-100" style="background: url(assets/img/other/1.png);">
      <div class="footer-top">
          <div class="container">
              <div class="row">
                  <div class="col-lg-6 col-md-4">
                      <a href="index.html">
                          <!-- <img src="assets/img/logo.png" alt="img"> -->

                      </a>
                  </div>
                  <div class="col-lg-6 col-md-8 text-md-right mt-3 mt-md-0">
                      <ul class="social-area">
                          <li><a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                          <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                          <li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                          <li><a href="#"><i class="fab fa-skype" aria-hidden="true"></i></a></li>

                      </ul>
                  </div>
              </div>
          </div>
      </div>
      <div class="footer-middle">
          <div class="container">
              <div class="row">
                  <div class="col-lg-4 col-md-6">
                      <div class="widget widget_about">
                          <h4 class="widget-title">Contact Us</h4>
                          <div class="details">
                              <p><i class="fas fa-map-marker-alt"></i>PSSF Commercial Complex,Ground Floor,Parking
                                  Tower</p>
                              <p><i class="fas fa-map-marker-alt"></i>P.O.Box 79464,Sam Nujoma Road,Dar es Salaam</p>
                              <p><i class="fas fa-phone-volume"></i> +(255) 763 949 719</p>
                              <p><i class="fas fa-phone-volume"></i> +(255) 787 372 411</p>
                              <p><i class="fas fa-envelope"></i> info.goodlife@.co.tz</p>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                      <div class="widget widget_nav_menu">
                          <h4 class="widget-title">Quick link</h4>
                          <ul>
                              <li><a href="{{ route('home.about') }}">About Us</a></li>
                              <li><a href="{{ route('home.property') }}">Property</a></li>
                              <li><a href="{{ route('home.blog') }}">Blog</a></li>
                              <li><a href="{{ route('home.contact') }}">Contact Us</a></li>
                          </ul>
                      </div>
                  </div>

                  <div class="col-lg-4 col-md-6">
                      <div class="widget widget_subscribe">
                          <h4 class="widget-title">Newslatter</h4>
                          <div class="details">

                              <div class="footer-subscribe-inner">
                                  <input type="text" placeholder="Your Mail">
                                  <a class="btn btn-base" href="#">Subscribe</a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="footer-bottom">
          <div class="container">
              <div class="row">
                  <div class="col-lg-6 align-self-center">
                      <p>2022, Copy Right By Goodlifeproperty. All Rights Reserved</p>
                  </div>
                  <div class="col-lg-6 text-lg-right">
                      <ul>
                          <li>
                              <a href="{{ route('home.index') }}">Home</a>
                          </li>
                          <li>
                              <a href="{{ route('home.about') }}">About</a>
                          </li>
                          <li>
                              <a href="{{ route('home.blog') }}">Blog</a>
                          </li>
                          <li>
                              <a href="{{ route('home.contact') }}">Contact</a>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </footer>
  <!-- footer area end -->

  <!-- back to top area start -->
  <div class="back-to-top">
      <span class="back-top"><i class="fa fa-angle-up"></i></span>
  </div>
  <!-- back to top area end -->

  <!-- all plugins here -->
  <script src="{{ asset('assets/js/vendor.js') }}"></script>
  <!-- main js  -->
  <script src="{{ asset('assets/js/main.js') }}"></script>
  </body>

  </html>
