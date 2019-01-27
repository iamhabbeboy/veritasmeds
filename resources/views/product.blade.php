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
     {{--    <div class="parallax-container breadcrumb-wrapper" data-parallax-img="images/bg-03.jpg">
          <div class="parallax-content section-xl context-dark">
            <div class="shell context-dark">
              <p class="heading-1">Products</p>
            </div>
          </div>
        </div> --}}
        <ul class="breadcrumb-custom">
          <li><a href="./">Home</a></li>
          <li><a href="#">Shop</a></li>
          <li>Products
          </li>
        </ul>
      </section>
      <!-- Departments-->
      <section class="section section-lg bg-white">
        <div class="shell">
          <div class="range range-60">
            <div class="cell-md-2">
              <h4>Categories</h4>
              <div class="aside-info aside-info-style-1 aside-info-solo">
                <div class="aside-info-item">
                  <ul>
                    @if (count($categorys) > 0)
                     @foreach($categorys as $category)
                      <li><a href="/category/{{$category->id}}-{{str_slug($category->title)}}">{{$category->title}}</a></li>
                    @endforeach
                    @else
                      <li><a href="#">N/A</a></li>
                    @endif
                  </ul>
                </div>
              </div>
            </div>
            <div class="cell-md-8">
              <h4 class="text-center text-sm-left">Featured Products</h4>
              <div class="range range-40 range-lg-60">
                @if (count($products) > 0)
                @foreach($products as $product)
                <div class="cell-xs-5 cell-sm-33 cell-md-25">
                  <div class="product-item">
                    <figure>
                      <a href="/product/{{array_get($product, 'id')}}-{{str_slug(array_get($product, 'title'))}}">
                      {{-- <img src="/ui/images/product-item-1-270x289.jpg" alt="" width="270" height="289"/> --}}
                      <img src="/{{array_get($product, 'has_picture.0.filepath')}}" alt="" width="270" height="289"/>
                    </a></figure>
                    <div class="product-item-caption">
                      <p><a href="/product/{{array_get($product, 'id')}}-{{str_slug(array_get($product,'title'))}}">{{array_get($product,'title')}}</a></p>
                      <h5 class="product-price">@money(array_get($product,'price'), 'NGN')</h5><a class="button button-primary" href="/product/{{array_get($product, 'id')}}-{{str_slug(array_get($product, 'title'))}}">add to cart</a>
                    </div>
                  </div>
                </div>
                @endforeach
              @else
                <h3>No product available</h3>
              @endif

              </div>
              {{-- <ul class="pagination-custom pagination-left">
                <li class="disabled"><span class="icon fa-angle-left"></span></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><span class="no-hover">...</span></li>
                <li><a href="#">10</a></li>
                <li><a href="#"><span class="icon fa-angle-right"></span></a></li>
              </ul> --}}
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
@stop