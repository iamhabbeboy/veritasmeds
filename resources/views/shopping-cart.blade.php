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
          <li>Cart Page
          </li>
        </ul>
      </section>
  
      <section class="section-lg bg-white section">
        <div class="shell">
          <h3 class="section-title">
          shopping cart 
         </h3>
          <div style="font-size: 18px !important;float:right;">Total product(s) in cart: 
          {{ Session::has('pharm_cart') ? count(Session::get('pharm_cart')) : 0 }} </div>
          <div class="range range-30 range-md-justify">
            <div class="cell-xs-10">
              <div class="table-custom-responsive table-shopping-cart">
                @if (Session::has('pharm_cart'))
                <table class="table-custom table-custom-secondary">
                  <thead>
                    <tr>
                      <th> </th>
                      <th>Product</th>
                      <th> </th>
                      <th>Price</th>
                      <th>Quantity</th>
                      <th>Total</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                      $total = 0;
                    @endphp
                    @foreach($combine_carts as $cart)
                        @php $total = $total + (float) (array_get($cart, 'qty') * array_get($cart, 'price')); @endphp
                      <tr>
                        <td>
                        <a href="#"><span class="icon icon-primary material-icons-close icon-lg"></span></a>
                        <a href="#"><span class="icon icon-primary material-icons-edit icon-lg"></span></a>
                        </td>
                        <td><img src="/{{array_get($cart, 'has_picture.0.filepath')}}" alt="" width="29" height="83"/>
                        </td>
                        <td><a class="text-gray-darker" href="single-product.html"> {{array_get($cart, 'title')}}</a></td>
                        <td>@money(array_get($cart, 'price'), 'NGN')</td>
                        <td>{{array_get($cart, 'qty') ?? 'N/A'}} </td>
                        <td> @money(array_get($cart, 'price') * array_get($cart, 'qty'), 'NGN')</td>
                      </tr>
                    @endforeach
                    <tr>
                      <td colspan="2">
                      
                      </td>
                      <td coslpan="4">
                        
                      </td>
                      <td colspan="2">
                        <h3 style="color: #666">Grand Total </h3>
                      </td>
                      <td >
                        <h3 style="color: #666">@money($total, 'NGN')</h3>
                      </td>
                    </tr>
                  </tbody>
                </table>
                @else
                  <div class="alert alert-info">No product in cart </div>
                @endif
              </div>
            </div>
            <div class="cell-md-4">
              <form class="range range-10 range-spacing-xs">
                <div class="cell-sm-6">
                  <div class="form-wrap form-wrap-validation">
                    <label class="form-label" for="coupone">Coupone code</label>
                    <input class="form-input" id="coupone" type="text" name="name" data-constraints="@Required">
                  </div>
                </div>
                <div class="cell-sm-4">
                  <div class="form-button">
                    <button class="button button-block button-primary" type="submit">apply coupon</button>
                  </div>
                </div>
              </form>
            </div>
            <div class="cell-md-3 text-md-right shopping-button-block">
            {{-- <a class="button button-primary" href="#">update your cart</a> --}}
            <a class="button button-primary" href="/account/sign-up">proceed to Checkout</a></div>
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