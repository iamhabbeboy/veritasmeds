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
          <h3 class="section-title">shopping cart</h3>
          <div class="range range-30 range-md-justify">
            <div class="cell-xs-10">
              <div class="table-custom-responsive table-shopping-cart">
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
                    <tr>
                      <td><span class="icon icon-primary material-icons-close icon-lg"></span></td>
                      <td><img src="/ui/images/cart-1-29x83.png" alt="" width="29" height="83"/>
                      </td>
                      <td><a class="text-gray-darker" href="single-product.html"> Allegra Childrens 12 Hour Allergy Liquid, 4 oz</a></td>
                      <td>$5.10</td>
                      <td>1</td>
                      <td>$5.10</td>
                    </tr>
                    <tr>
                      <td><span class="icon icon-primary material-icons-close icon-lg"></span></td>
                      <td><img src="/ui/images/cart-2-40x78.png" alt="" width="40" height="78"/>
                      </td>
                      <td><a class="text-gray-darker" href="single-product.html"> Centrum Adults, 200 tablets</a></td>
                      <td>$3.50</td>
                      <td>1</td>
                      <td>$3.50</td>
                    </tr>
                    <tr>
                      <td> </td>
                      <td class="text-regular">All items</td>
                      <td class="text-regular">Description</td>
                      <td class="text-regular">Your total</td>
                      <td class="text-gray-darker"> 2</td>
                      <td class="text-gray-darker"> $8.60</td>
                    </tr>
                  </tbody>
                </table>
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
            <div class="cell-md-3 text-md-right shopping-button-block"><a class="button button-primary" href="#">update your cart</a><a class="button button-primary" href="#">proceed to Checkout</a></div>
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