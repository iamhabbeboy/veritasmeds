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
      <!-- Departments-->
      <section class="section section-breadcrumb">

        <ul class="breadcrumb-custom">
          <li><a href="./">Home</a></li>
          <li><a href="#">Shop</a></li>
          <li>Single Product
          </li>
        </ul>
      </section>
      <section class="section-lg bg-white section">
        <div class="shell">
          <div class="range range-40">
            <div class="cell-md-5 cell-lg-3">
              <div class="product-slider">
                <!-- Slick Carousel-->
                <div class="slick-slider carousel-parent" data-arrows="false" data-loop="false" data-dots="false" data-swipe="true" data-items="1" data-child="#child-carousel" data-for="#child-carousel">
                @if (array_get($product, 'has_picture'))
                  @foreach (array_column(array_get($product, 'has_picture'), 'filepath') as $picture )
                  <div class="item">
                    <img src="/{{$picture}}" alt="">
                  </div>
                  @endforeach
                @endif

                </div>
                <div class="slick-slider" id="child-carousel" data-for=".carousel-parent" data-arrows="true" data-loop="false" data-dots="false" data-swipe="true" data-items="4" data-xs-items="4" data-sm-items="4" data-md-items="4" data-lg-items="4" data-slide-to-scroll="1">
                   @if (array_get($product, 'has_picture'))
                  @foreach (array_column(array_get($product, 'has_picture'), 'filepath') as $picture )
                  <div class="item">
                    <img src="/{{$picture}}" alt="" style="width:90px;height:106px"/>
                  </div>
                  @endforeach
                  @endif

                </div>
              </div>
            </div>
            <div class="cell-md-5 cell-lg-5">
              <h3 class="section-title">{{array_get($product, 'title')}}</h3>
              <p class="large">{!! array_get($product, 'description') !!}</p>
        
              @if(array_get($product, 'has_brand'))
                <p class="large">Manufactured by {{array_get($product, 'has_brand.title')}}</p>
              @endif
              <div class="range range-30">
                <div class="cell-xs-10">
                  <ul class="list-inline list-inline-xs">
                    <li><span class="icon fa-star icon-xs icon-primary"></span></li>
                    <li><span class="icon fa-star icon-xs icon-primary"></span></li>
                    <li><span class="icon fa-star icon-xs icon-primary"></span></li>
                    <li><span class="icon fa-star icon-xs icon-primary"></span></li>
                    <li><span class="icon fa-star icon-xs icon-gray"></span></li>
                    <li class="text-bold text-gray-darker list-inline-item-offset-sm">2 customer reviews</li>
                  </ul>
                </div>
                <div class="cell-xs-10">
                  <ul class="list-inline">
                    <li>
                      <input class="form-input" type="number" data-zeros="true" value="1" min="1" max="20" id="quantity-count">
                    </li>
                    <li class="text-bold text-gray-darker">Quantity</li>
                  </ul>
                </div>
                <div class="cell-xs-10">
                  <ul class="list-inline heading-4 text-bold">
                    {{-- <li class="text-strike text-gray-light">{@money(array_get($product, 'price'), 'NGN')</li> --}}
                    <li>@money(array_get($product, 'price'), 'NGN')</li>
                  </ul>
                </div>
                <div class="cell-xs-10">
                  <ul class="list-inline">
                    <li class="text-bold text-gray-darker">Share this</li>
                    <li><a class="icon icon-primary fa-facebook" href="#"></a></li>
                    <li><a class="icon icon-primary fa-twitter" href="#"></a></li>
                    <li><a class="icon icon-primary fa-google-plus" href="#"></a></li>
                    <li><a class="icon icon-primary fa-instagram" href="#"></a></li>
                    <li><a class="icon icon-primary fa-pinterest-p" href="#"></a></li>
                    <li><a class="icon icon-primary fa-rss" href="#"></a></li>
                    <li><a class="icon icon-primary fa-envelope" href="#"></a></li>
                  </ul>
                </div>
                <div class="cell-xs-10">
                <form id="cart-form">
                  <input type="hidden" value="{{Session::token()}}" name="_token" id="_token">
                  <input type="hidden" value="{{array_get($product, 'id')}}:{{array_get($product, 'price')}}" id="cart-info">
                </form>
                <a class="button button-primary" href="javascript:void(0)" id="add-cart">add to cart</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section section-lg bg-white">
        <div class="shell">
          <div class="range range-30">
            <div class="cell-md-5 cell-lg-3">
              {{-- <h4>About Product</h4>
              <p>Relieves symptoms due to hay fever <br>For itchy, watery eyes<br>Alcohol and dye free <br>Non-drowsy <br>Ages 2 years and older <br>Indoor and outdoor allergies <br>12 hour relief</p> --}}
            </div>
            <div class="cell-md-5 cell-lg-5">
              <h4>Reviews</h4>
              <div class="comment">
                <div class="comment-inner">
                  <div class="comment-left"><img class="img-circle" src="/ui/images/blog-post-01-70x70.jpg" alt="" width="70" height="70"/>
                  </div>
                  <div class="comment-body">
                    <div class="comment-body-header">
                      <div class="comment-name">Jessica H. Wheaton</div>
                      <div class="comment-time">3 days ago</div>
                    </div>
                    <div class="comment-body-content">
                      <p>I loved everything about buying from you! My purchase was carefully packaged and quickly shipped. I was also pleased with great service and delivery times. There is no such awesome store on the web. </p>
                      <ul class="list-inline list-inline-lg">
                        <li>
                          <div class="object-inline object-inline-lg"><span class="icon mdi-thumb-up-outline"></span><a class="text-spacing-80 text-gray-darker text-bold" href="#">32</a></div>
                        </li>
                        <li>
                          <div class="object-inline object-inline-lg text-spacing-0"><span class="icon mdi-comment-outline"></span><a class="text-gray-darker text-bold" href="#">Reply</a></div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="comment">
                <div class="comment-inner">
                  <div class="comment-left"><img class="img-circle" src="/ui/images/blog-post-02-70x70.jpg" alt="" width="70" height="70"/>
                  </div>
                  <div class="comment-body">
                    <div class="comment-body-header">
                      <div class="comment-name">John H. White     </div>
                      <div class="comment-time">1 day ago</div>
                    </div>
                    <div class="comment-body-content">
                      <p>Hi, my order arrived yesterday. I love it! Thank you! What a fast service...you guys are great! I wish every site was like this one. I will surely share my experience with my friends! </p>
                      <ul class="list-inline list-inline-lg">
                        <li>
                          <div class="object-inline object-inline-lg"><span class="icon mdi-thumb-up-outline"></span><a class="text-spacing-80 text-gray-darker text-bold" href="#">32</a></div>
                        </li>
                        <li>
                          <div class="object-inline object-inline-lg text-spacing-0"><span class="icon mdi-comment-outline"></span><a class="text-gray-darker text-bold" href="#">Reply</a></div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="comment">
                <div class="comment-inner">
                  <div class="comment-left"><img class="img-circle" src="/ui/images/blog-post-01-70x70.jpg" alt="" width="70" height="70"/>
                  </div>
                  <div class="comment-body" style="width: 100%; padding-right: 10px">
                    <div class="comment-body-header">
                      <div class="comment-name">Tamara H. Jackson  </div>
                    </div>
                    <div class="comment-body-content">
                      <form class="rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post">
                        <div class="form-wrap form-wrap-validation">
                          <label class="form-label" for="forms-2-message">Your review</label>
                          <textarea class="form-input" id="forms-2-message" name="message" data-constraints="@Required"></textarea>
                        </div>
                        <div class="form-button text-right">
                          <button class="button button-primary" type="submit">Submit</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section-lg bg-white section">
        <div class="shell">
          <div class="range range-40">
            <div class="cell-xs-5 cell-sm-33 cell-md-25 cell-lg-2">
              <div class="product-item">
                <figure><a href="single-product.html"><img src="/ui/images/product-item-1-270x289.jpg" alt="" width="270" height="289"/></a></figure>
                <div class="product-item-caption">
                  <p><a href="single-product.html">Alavert Orally Disintegrating Tablets, 60 tab</a></p>
                  <h5 class="product-price">$24.98</h5>
                  <a class="button button-primary" href="shopping-cart.html">add to cart</a>
                </div>
              </div>
            </div>
            <div class="cell-xs-5 cell-sm-33 cell-md-25 cell-lg-2">
              <div class="product-item">
                <figure><a href="single-product.html"><img src="/ui/images/product-item-7-270x289.jpg" alt="" width="270" height="289"/></a></figure>
                <div class="product-item-caption">
                  <p><a href="single-product.html">Donec sit amet ullamcorper ipsum n at metus a ante sollicitudin </a></p>
                  <h5 class="product-price">$4.99</h5><a class="button button-primary" href="shopping-cart.html">add to cart</a>
                </div>
              </div>
            </div>
            <div class="cell-xs-5 cell-sm-33 cell-md-25 cell-lg-2">
              <div class="product-item">
                <figure><a href="single-product.html"><img src="/ui/images/product-item-4-270x289.jpg" alt="" width="270" height="289"/></a></figure>
                <div class="product-item-caption">
                  <p><a href="single-product.html">Arm & Hammer Antiperspirant/ Deodorant, Invisible Solid, Fresh</a></p>
                  <h5 class="product-price">$3.99</h5><a class="button button-primary" href="shopping-cart.html">add to cart</a>
                </div>
              </div>
            </div>
            <div class="cell-xs-5 cell-sm-33 cell-md-25 cell-lg-2">
              <div class="product-item">
                <figure><a href="single-product.html"><img src="/ui/images/product-item-5-270x289.jpg" alt="" width="270" height="289"/></a></figure>
                <div class="product-item-caption">
                  <p><a href="single-product.html">Almay Anti-Perspirant & Deodorant, Clear Gel, Powder Fresh, 2.25 oz</a></p>
                  <h5 class="product-price">$2.79</h5><a class="button button-primary" href="shopping-cart.html">add to cart</a>
                </div>
              </div>
            </div>
            <div class="cell-xs-5 cell-sm-33 cell-md-25 cell-lg-2">
              <div class="product-item">
                <figure><a href="single-product.html"><img src="/ui/images/product-item-2-270x289.jpg" alt="" width="270" height="289"/></a></figure>
                <div class="product-item-caption">
                  <p><a href="single-product.html">Centrum Flavor Burst Chews, Mixed Fruit, 60 ea</a></p>
                  <h5 class="product-price">$8.99</h5><a class="button button-primary" href="shopping-cart.html">add to cart</a>
                </div>
              </div>
            </div>
          </div>
          <ul class="pagination-custom pagination-sm-left">
            <li class="disabled"><span class="icon fa-angle-left"></span></li>
            <li class="active"><span>1</span></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><span class="no-hover">...</span></li>
            <li><a href="#">10</a></li>
            <li><a href="#"><span class="icon fa-angle-right"></span></a></li>
          </ul>
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

@stop