@extends('layout.app')
@section('content')
    <div class="text-left page">
      <!-- Page preloader-->
      <div class="page-loader">
        <div>
          <div class="page-loader-body">
            <div id="ballsWaveG">
              <div class="ballsWaveG" id="ballsWaveG_1"> </div>
              <div class="ballsWaveG" id="ballsWaveG_2"></div>
              <div class="ballsWaveG" id="ballsWaveG_3"></div>
              <div class="ballsWaveG" id="ballsWaveG_4"></div>
              <div class="ballsWaveG" id="ballsWaveG_5"></div>
              <div class="ballsWaveG" id="ballsWaveG_6"></div>
              <div class="ballsWaveG" id="ballsWaveG_7"></div>
              <div class="ballsWaveG" id="ballsWaveG_8"></div>
            </div>
          </div>
        </div>
      </div>
      <!-- Page Header-->
     @include('includes.navbar')
        <ul class="breadcrumb-custom">
          <li><a href="/">Home</a></li>
          <li>Login
          </li>
        </ul>
      </section>
      <!-- section 404-->
      <section class="section section-lg bg-white">
        <div class="shell">
          <div class="range">
            <div class="cell-lg-5">
              <h3 class="section-title text-center text-sm-left">Log in</h3>
              <ul class="button-group-modern button-group-modern-social">
                <li><a class="button button-social button-facebook button-icon button-icon-left" href="#"><span class="icon icon-md-biger fa-facebook"></span><span class="button-text">Facebook</span></a></li>
                <li><a class="button button-social button-twitter button-icon button-icon-left" href="#"><span class="icon icon-md-biger fa-twitter"></span><span class="button-text">Twitter</span></a></li>
                <li><a class="button button-social button-google button-icon button-icon-left" href="#"><span class="icon icon-md-biger fa-google-plus"></span><span class="button-text">Google+</span></a></li>
                <li class="group-text"><span class="heading-5 text-bold">or</span></li>
              </ul>
              <br>
              <!-- RD Mailform-->
              <form class="text-left" data-form-output="form-output-global" data-form-type="contact" method="post" action="/account/login-auth">
                @csrf
                @if (Session::has('error'))
                  <div class="alert alert-danger">{{Session('error')}}</div>
                @endif
                <div class="range range-20 range-spacing-xs">
                  <div class="cell-sm-4">
                    <div class="form-wrap form-wrap-validation">
                      {{-- <label class="form-label" for="forms-login-name">Email Address</label> --}}
                        <input class="form-input" id="forms-login-email" type="email" name="email" placeholder="Email Address" required>
                    </div>
                  </div>
                  <div class="cell-sm-4">
                    <div class="form-wrap form-wrap-validation">
                      {{-- <label class="form-label" for="forms-login-email">Password</label> --}}
                      <input class="form-input" id="forms-login-email" type="password" placeholder="Password" name="password" required>
                    </div>
                  </div>
                  <div class="cell-sm-2">
                    <div class="form-button">
                      <button class="button button-block button-primary" type="submit">log in</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
      <!-- Page Footer-->
      <!-- Contact us-->
      <section class="section section-md section-full-width bg-secondary context-dark pre-footer">
        <div class="shell">
          <div class="range range-40">
            <div class="cell-lg-3 cell-sm-5">
              <div style="max-width: 283px">
                <h5 class="section-title">Latest news</h5>
                <ul class="list list-lg">
                  <li>
                    <article class="news-mini">
                      <p class="text-bold">2 hours ago</p>
                      <p class="news-mini-title"><a href="news-page.html">Integrative Medicine & Cancer Treatment Worldwide</a></p>
                    </article>
                  </li>
                  <li>
                    <article class="news-mini">
                      <p class="text-bold">2 hours ago</p>
                      <p class="news-mini-title"><a href="news-page.html">The Basics of Providing Better Health Care For Families</a></p>
                    </article>
                  </li>
                </ul>
              </div>
            </div>
            <div class="cell-lg-3 cell-sm-5">
              <div style="max-width: 294px">
                <h5 class="section-title">Contact Information</h5>
                <ul class="list list-lg">
                  <li>
                    <div class="unit unit-spacing-xs unit-horizontal unit-custom unit-top">
                      <div class="unit-left">
                        <p class="large">Phone:</p>
                      </div>
                      <div class="unit-body"><a class="link-footer large text-spacing-75 font-sec" href="tel:#">1-800-700-6200</a></div>
                    </div>
                  </li>
                  <li>
                    <div class="unit unit-spacing-xs unit-horizontal unit-custom unit-top">
                      <div class="unit-left">
                        <p class="large">E-mail:</p>
                      </div>
                      <div class="unit-body" style="position: relative; top: -1px"><a class="link-footer large" href="mailto:#">info@demolink.org</a></div>
                    </div>
                  </li>
                  <li>
                    <div class="unit unit-spacing-xs unit-horizontal">
                      <div class="unit-left">
                        <p class="large">Address:  </p>
                      </div>
                      <div class="unit-body"><a class="link-footer" href="#">London, UK 10, Firs Avenue, Muswell Hill</a></div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="cell-lg-4">
              <div>
                <h5 class="section-title">Looking for a quality medication?</h5>
                <p class="text-secondary-light">Our Pharmacy takes a headache out of shopping for all of your discount pharmacy needs with online pharmacy shopping, massive discounts on over 12,000+ products and a retail shop presence offering everything from health, skin care, weight loss and everyone's favorite big-name shopping brands. </p><a class="button button-primary" href="products.html">Visit our store</a>
              </div>
            </div>
          </div>
        </div>
      </section>

    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"> </div>
@stop