<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <!-- Site Title-->
    <title>Veritas Specialty Pharmacy</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato:400,400i,700">
    <link rel="stylesheet" href="/ui/css/bootstrap.css">
    <link rel="stylesheet" href="/ui/css/fonts.css">
    <link rel="stylesheet" href="/ui/css/style.css">
		<!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"></script>
		<![endif]-->
  </head>
  <body>
    @yield('content')

          <footer class="page-footer-full section section-full-width">
        <div class="shell">
          <div class="range range-15">
            <div class="cell-sm-5">
              <p class="copyright">Phamacy  &#169; <span class="copyright-year"></span>. <a href="privacy-policy.html">Privacy Policy</a>
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
   <!-- Javascript-->
    <script src="/ui/js/core.min.js"></script>
    <script src="/ui/js/script.js"></script>
    @include('includes.script')
  </body>
</html>