  @extends('layout.app')
   @section('content')
    <!-- Page-->
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
      <!-- Swiper-->
      <section class="swiper-main-wrap wow fadeIn">
        <div class="swiper-container swiper-slider" data-index-bullet="true" data-clickable="true" data-custom-pagination="#swiper-pagination-index" data-slide-effect="fade" data-autoplay="4000" data-simulate-touch="false">
          <div class="swiper-wrapper">
            <div class="swiper-slide" data-slide-bg="ui/images/slide-01.jpg">
              <div class="swiper-slide-caption">
                <div class="section-lg">
                  <div class="container">
                    <h1 data-caption-animate="fadeInUp" data-caption-delay="100">Get Specialty Medications at your door step</h1>
                    <ul class="list-marked list-marked-type-1 list-marked-primary" data-caption-animate="fadeInUp" data-caption-delay="250">
                      <li>
                        <h3>Free and Fast delivery within Lagos</h3>
                      </li>
                      <li>
                        <h3>Medications delivered by trusted experts</h3>
                      </li>
                    </ul><a class="button button-primary" href="faq.html" data-caption-animate="fadeInUp" data-caption-delay="450">Learn More</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide" data-slide-bg="ui/images/slide-02.jpg">
              <div class="swiper-slide-caption">
                <div class="section-lg">
                  <div class="container">
                    <h1 data-caption-animate="fadeInUp" data-caption-delay="100">Affordable Lab Tests</h1>
                    <ul class="list-marked list-marked-type-1 list-marked-primary" data-caption-animate="fadeInUp" data-caption-delay="250">
                      <li>
                        <h3>Comprehensive information on your health</h3>
                      </li>
                      <li>
                        <h3>Only high-quality equipment</h3>
                      </li>
                    </ul><a class="button button-primary" href="register.html" data-caption-animate="fadeInUp" data-caption-delay="450">Get started</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide" data-slide-bg="ui/images/slide-03.jpg">
              <div class="swiper-slide-caption">
                <div class="section-lg">
                  <div class="container">
                    <h1 data-caption-animate="fadeInUp" data-caption-delay="100">Use our Wellness 65+ Plan today!</h1>
                    <ul class="list-marked list-marked-type-1 list-marked-primary" data-caption-animate="fadeInUp" data-caption-delay="250">
                      <li>
                        <h3>Specialty care for the Elderly</h3>
                      </li>
                      <li>
                        <h3>Available only in Lagos</h3>
                      </li>
                    </ul><a class="button button-primary" href="Service.html" data-caption-animate="fadeInUp" data-caption-delay="450">See Services</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-pagination swiper-pagination-index" id="swiper-pagination-index"></div>
      </section>
      <!-- Opening Hours-->
      <section class="section section-lg bg-white section-after-swiper-modern section-full-width">
        <div class="shell">
          <div class="range range-30 block-classic-wrap">
            <div class="cell-sm-5 cell-lg-3 reveal-sm-flex">
              <div class="block-classic block-classic-bg-image">
                <div class="block-classic-title">
                  <h3>Opening Hours</h3>
                </div>
                <ul class="list large">
                  <li>Weekdays          <span>8.00 – 20.00</span></li>
                  <li>Saturday	 <span>9.30 – 17.30</span></li>
                  <li>Sunday <span>9.30 – 15.00</span></li>
                </ul>
                <p class="text-gray-darker"><span class="heading-5">John Smith </span> <span class="text-bold">Head pharmacist</span>
                </p>
                <div class="block-classic-link"><span class="icon mdi-phone"></span><a class="text-bold" href="tel:#">1-800-700-6200</a></div>
              </div>
            </div>
            <div class="cell-sm-5 cell-lg-3 reveal-sm-flex">
              <div class="block-classic block-classic-secondaty">
                <div class="block-classic-title">
                  <h3>Search for Advice </h3>
                </div>
                <p>Search our drug information guide for helpful advice on some of the most commonly prescribed medications.</p>
                <form class="form-search rd-search" action="search-results.html" method="GET">
                  <div class="form-wrap form-wrap-validation">
                    <label class="form-label" for="forms-search">Search by drug name</label>
                    <input class="form-input" id="forms-search" type="text" name="s" autocomplete="off">
                    <button class="button-search icon fl-bigmug-line-search74" type="submit"></button>
                  </div>
                  <div class="button-block">
                    <button class="heading-5 text-bold" type="submit">Advanced search<span class="icon fa-angle-right"></span></button>
                  </div>
                </form>
              </div>
            </div>
            <div class="cell-lg-4 reveal-md-flex">
              <div class="block-classic">
                <div class="block-classic-title">
                  <h3 class="text-secondary text-center text-lg-left">Refill Prescriptions</h3>
                </div>
                <form class="rd-mailform block-center" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php" style="max-width: 584px">
                  <div class="range range-xs-center range-20 range-narrow">
                    <div class="cell-sm-10">
                      <div class="form-wrap form-wrap-validation">
                        <label class="form-label" for="text-1">Enter your prescription number</label>
                        <input class="form-input form-input-gray" id="text-1" type="text" name="text" data-constraints="@Required">
                      </div>
                    </div>
                    <div class="cell-sm-10">
                      <div class="form-wrap form-wrap-validation">
                        <label class="form-label" for="text-2">Transfer prescriptions</label>
                        <input class="form-input form-input-gray" id="text-2" type="text" name="text" data-constraints="@Required">
                      </div>
                    </div>
                    <div class="cell-sm-7">
                      <div class="form-wrap form-wrap-validation">
                        <label class="form-label" for="text-3">Manage & refill  your prescription</label>
                        <input class="form-input form-input-gray" id="text-3" type="text" name="text" data-constraints="@Required">
                      </div>
                    </div>
                    <div class="cell-sm-3">
                      <div class="form-button">
                        <button class="button button-primary button-block" type="submit">Submit</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="section section-full-width section-lg bg-gray-lighter">
        <div class="shell">
          <div class="range range-30 range-lg-justify">
            <div class="cell-lg-4">
              <div class="range range-30">
                <div class="cell-sm-5">
                  <div class="block-services-classic">
                    <div class="block-services-icon"><img src="ui/images/icon-1.png" alt=""></div>
                    <h4 class="block-services-title"><a href="single-service.html">Online Pharmacy</a></h4>
                    <p>We offer  the best and the safest pharmacy products online.</p>
                  </div>
                </div>
                <div class="cell-sm-5">
                  <div class="block-services-classic">
                    <div class="block-services-icon"><img src="ui/images/icon-2.png" alt=""></div>
                    <h4 class="block-services-title"><a href="single-service.html">Expert Advice</a></h4>
                    <p>Our professional team is always available to help.</p>
                  </div>
                </div>
                <div class="cell-sm-5">
                  <div class="block-services-classic">
                    <div class="block-services-icon"><img src="ui/images/icon-3.png" alt=""></div>
                    <h4 class="block-services-title"><a href="single-service.html">Flu Vaccinations </a></h4>
                    <p>Please feel free to stop by for a vaccination anytime.</p>
                  </div>
                </div>
                <div class="cell-sm-5">
                  <div class="block-services-classic">
                    <div class="block-services-icon"><img src="ui/images/icon-4.png" alt=""></div>
                    <h4 class="block-services-title"><a href="single-service.html">Online Doctor</a></h4>
                    <p>This service is a simple way to get the prescription medicine.  </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="cell-lg-5">
              <div class="about-unit">
                <h3 class="section-title about-unit-title wow fadeInUp" data-wow-delay=".4s">welcome to Pharmacy!</h3>
                <p class="wow fadeInUp about-unit-text" data-wow-delay=".5s">Our Pharmacy offers the very best prices on medicines and pharmaceutical products, coupled with a fantastic service. We stock a great range of branded and non-branded products, ensuring you great value for money when you buy from our online chemist. We offer quick delivery and a simple payment procedure to take the hassle out of buying.</p>
                <div class="about-unit-quote">
                  <div class="about-unit-quote-left wow fadeIn" data-wow-delay=".8s"><img src="ui/images/doctor-01-240x298.jpg" alt="" width="240" height="298"/>
                  </div>
                  <div class="about-unit-quote-body">
                    <div class="about-unit-quote-content">
                      <div class="about-unit-quote-content-left wow fadeIn" data-wow-delay="1.2s"><span>“</span></div>
                      <div class="about-unit-quote-content-body wow fadeIn" data-wow-delay="1.3s">
                        <p>We believe in delivering the highest level of customer service and in ensuring the health and safety of each and every patient who visits our site. Our goal is to combine the convenience and discretion of an online pharmacy and doctor service. </p>
                      </div>
                    </div>
                    <h4 class="about-unit-quote-title wow fadeInUp" data-wow-delay=".9s">John Smith</h4>
                    <p class="about-unit-quote-cite wow fadeInUp" data-wow-delay="1s">Head pharmacist</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="section-lg bg-secondary context-dark text-center">
        <div class="shell">
          <div class="range range-40 range-xs-center">
            <div class="cell-sm-9 cell-lg-6">
              <h3 class="section-title">Customer reviews</h3>
            </div>
            <div class="cell-sm-9 cell-lg-7">
              <!-- Owl Carousel-->
              <div class="owl-carousel carousel-arrow-white" data-items="1" data-dots="false" data-nav="true" data-stage-padding="15" data-loop="true" data-autoplay="true" data-margin="30" data-mouse-drag="false">
                <div class="block-testimonials-classic">
                  <div class="testimonials-classic-quote"><span>“</span></div>
                  <div class="testimonials-classic-text">
                    <p>I want to recommend this Pharmacy to everybody. I have fought with my extra weight for years using different waist trimmers and belts but with these caps, I understood that what I need is just to eat less. I almost do not feel hunger and put off weight natural way. I want to get rid of 2 pounds and plan to buy online again soon.</p>
                  </div>
                  <div class="testimonials-classic-author">
                    <figure><img src="ui/images/user-1-135x135.jpg" alt=""></figure>
                    <h4>Sam Johnson</h4>
                    <p>Patient</p>
                  </div>
                </div>
                <div class="block-testimonials-classic">
                  <div class="testimonials-classic-quote"><span>“</span></div>
                  <div class="testimonials-classic-text">
                    <p>When I placed an order for my granddad I gave his address and my phone and it took a bit longer to deliver the products because they phoned me and my granddaddy to check everything and I was nervous because of it. I understand that they work like this as it helps to avoid credit card fraud. I will order from them again because they are honest.</p>
                  </div>
                  <div class="testimonials-classic-author">
                    <figure><img src="ui/images/user-2-135x135.jpg" alt=""></figure>
                    <h4>Tom Wilson</h4>
                    <p>Director</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section section-lg bg-white section-full-width">
        <div class="shell">
          <div class="range range-30">
            <div class="cell-lg-8">
              <div class="box text-center text-sm-left">
                <div class="box-left">
                  <h3 class="section-title">Featured Products</h3>
                </div>
                <div class="box-right">
                  <div class="owl-outer-navigation" id="owl-carousel-nav-2">
                    <div class="owl-arrow owl-arrow-prev fa-angle-left"></div>
                    <div class="owl-arrow owl-arrow-next fa-angle-right"></div>
                  </div>
                </div>
              </div>
              <div class="owl-carousel" data-items="1" data-xs-items="2" data-sm-items="3" data-md-items="3" data-lg-items="4" data-stage-padding="0" data-loop="true" data-autoplay="true" data-margin="30" data-mouse-drag="false" data-nav-custom="#owl-carousel-nav-2">
              @if(count($products) > 0)
                @foreach($products as $product)
                <div class="item wow fadeInUp" data-wow-delay="1s">
                  <div class="product-item">
                    <figure>
                      <a href="#">
                        <img src="ui/images/product-item-4-270x289.jpg" alt="" width="270" height="289"/></a></figure>
                    <div class="product-item-caption">
                      <p><a href="single-product.html">{{$product->title}}</a></p>
                      <h5 class="product-price">@money($product->price, 'NGN')</h5><a class="button button-primary" href="shopping-cart.html">add to cart</a>
                    </div>
                  </div>
                </div>
                @endforeach
              @endif
              </div>
            </div>
            <div class="cell-lg-2 wow fadeIn" data-wow-delay="1.2s">
              <div class="demo-image-block"><a class="demo-image-block-link" href="single-service.html"><img src="ui/images/about-02-270x527.jpg" alt="" width="270" height="527"/>
                  <div class="demo-image-block-link-text"><span class="heading-3">Automated Courtesy Refills</span><span class="heading-5">Sign up & we`ll refill your prescriptions</span></div></a></div>
            </div>
          </div>
        </div>
      </section>

      <!-- Latest News-->

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
                      <div class="unit-body"><a class="link-footer large text-spacing-75 font-sec" href="tel:#">080-2543-9828</a></div>
                    </div>
                  </li>
                  <li>
                    <div class="unit unit-spacing-xs unit-horizontal unit-custom unit-top">
                      <div class="unit-left">
                        <p class="large">E-mail:</p>
                      </div>
                      <div class="unit-body" style="position: relative; top: -1px"><a class="link-footer large" href="mailto:#">info@veritasmeds.com.ng</a></div>
                    </div>
                  </li>
                  <li>
                    <div class="unit unit-spacing-xs unit-horizontal">
                      <div class="unit-left">
                        <p class="large">Address:  </p>
                      </div>
                      <div class="unit-body"><a class="link-footer" href="#">1/3, Isheri Olofin, Lasu Road, Lagos</a></div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="cell-lg-4">
              <div>
                <h5 class="section-title">Looking for a Specialty Medication?</h5>
                <p class="text-secondary-light">Our Pharmacy takes a headache out of shopping for all of your discount pharmacy needs with online pharmacy shopping, massive discounts on over 12,000+ products and a retail shop presence offering everything from health, skin care, weight loss and everyone's favorite big-name shopping brands. </p><a class="button button-primary" href="products.html">Visit our store</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <footer class="page-footer-full section section-full-width">
        <div class="shell">
          <div class="range range-15">
            <div class="cell-sm-5">
              <p class="copyright">Veritas Specialty Pharmacy	&#169; <span class="copyright-year"></span>. <a href="privacy-policy.html">Privacy Policy</a>
              </p>
            </div>
            <div class="cell-sm-5 text-sm-right">
              <ul class="list-inline">
                <li><a class="icon fa-facebook" href="#"></a></li>
                <li><a class="icon fa-twitter" href="#"></a></li>
                <li><a class="icon fa-google-plus" href="#"></a></li>
                <li><a class="icon fa-pinterest-p" href="#"></a></li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"> </div>
@stop