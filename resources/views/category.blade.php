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
    @include('includes.navbar')
      <section class="section section-breadcrumb">
   {{--      <div class="parallax-container breadcrumb-wrapper" data-parallax-img="images/bg-03.jpg">
          <div class="parallax-content section-xl context-dark">
            <div class="shell context-dark">
              <p class="heading-1">Categories</p>
            </div>
          </div>
        </div> --}}
        <ul class="breadcrumb-custom">
          <li><a href="./">Home</a></li>
          <li><a href="#">Shop</a></li>
          <li>Categories
          </li>
        </ul>
      </section>
      <!-- Departments-->
      <section class="section section-lg bg-white">
        <div class="shell">
          <div class="range range-60">
            <div class="cell-lg-8">
              <h3 class="section-title text-center text-sm-left">Product Categories</h3>
              <div class="range range-40 range-lg-60">

                @if(count($categorys) > 0)

                @foreach($categorys as $category)

                <div class="cell-xs-5 cell-sm-33 cell-md-25">
                  <div class="thumb-default">
                  <a href="category/{{array_get($category,'id')}}-{{str_slug(array_get($category,'title'))}}">
                    @if (array_get($category, 'has_picture') && array_get($category, 'has_picture.type') == 'category')
                      <img src="/{{array_get($category, 'has_picture.filepath')}}" alt="" width="270" height="289"/>
                    @else 
                      <img src="/ui/images/product-1-270x289.jpg" alt="" width="270" height="289"/>
                    @endif
                  </a>
                    <div class="thumb-default-caption">
                      <h5 class="thumb-default-title">
                        <a href="category/{{array_get($category,'id')}}-{{str_slug(array_get($category,'title'))}}">{{array_get($category, 'title')}}</a></h5>
                        <p>{{array_get($category, 'description') ? array_get($category, 'description'): ''}}</p>
                    </div>
                  </div>
                </div>
                @endforeach
              @endif


              </div>
            </div>
            <div class="cell-lg-2">
              <div class="aside-info aside-info-style-1 aside-info-solo">
                <div class="aside-info-item">
                  <ul>
                    <li><a href="#">Medical Supplies </a></li>
                    <li><a href="#">Health Concerns</a></li>
                    <li><a href="#">Personal Care </a></li>
                    <li><a href="#">Diet & Fitness</a></li>
                    <li><a href="#">Vitamins</a></li>
                    <li><a href="#">Baby & Child Care </a></li>
                  </ul>
                </div>
              </div>
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