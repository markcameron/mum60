<!DOCTYPE HTML>
<html class="no-js">
  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-114931811-1"></script>
    <script>
     window.dataLayer = window.dataLayer || [];
     function gtag(){dataLayer.push(arguments);}
     gtag('js', new Date());

     gtag('config', 'UA-114931811-1');
    </script>

    <!-- Basic Page Needs
         ================================================== -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Sabina turns 60 - Donate to her trip of a lifetime</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Mobile Specific Metas
         ================================================== -->
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <!-- CSS
         ================================================== -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap-theme.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="vendor/magnific/magnific-popup.css" rel="stylesheet" type="text/css">
    <link href="vendor/owl-carousel/css/owl.carousel.css" rel="stylesheet" type="text/css">
    <link href="vendor/owl-carousel/css/owl.theme.css" rel="stylesheet" type="text/css">
    <!--[if lte IE 9]><link rel="stylesheet" type="text/css" href="css/ie.css" media="screen" /><![endif]-->
    <link href="css/custom.css" rel="stylesheet" type="text/css"><!-- CUSTOM STYLESHEET FOR STYLING -->
    <!-- Color Style -->
    <link href="colors/color1.css" rel="stylesheet" type="text/css">
    <!-- SCRIPTS
         ================================================== -->
    <script src="js/modernizr.js"></script><!-- Modernizr -->

    <style>
      .flex-caption-table {
      width:50%;
      }
      @media only screen and (max-width: 767px) {
      .flex-caption {
      display:block;
      }
      .flex-caption-table {
      width:100%;
      }
      .flex-caption-text h2 {
      font-size:48px;
      }
      }
    </style>

  </head>
  <body class="home">
    <!--[if lt IE 7]>
      <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
    <![endif]-->
    <div class="body">
      <!-- Site Header Wrapper -->
      <div class="site-header-wrapper">
        <!-- Site Header -->
        <header class="site-header">

        </header>
      </div>
      <!-- Hero Area -->

      @yield('content')

      <!-- Site Footer -->
      <div class="site-footer-bottom">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-sm-6">
              <div class="copyrights-col-left">
                <p>&copy; 2018 Cameron Family</p>
              </div>
            </div>
            <div class="col-md-6 col-sm-6"></div>
            <div class="copyrights-col-right">
              <ul class="footer-menu">
              </ul>
            </div>
          </div>
        </div>
      </div>
      <a id="back-to-top"><i class="fa fa-angle-double-up"></i></a>
    </div>

    <!-- Donate Form Modal -->
    <div class="modal fade" id="DonateModal" tabindex="-1" role="dialog" data-backdrop="static">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <div class="row">
              <div class="col-md-6 col-sm-6 donate-amount-option">
                <h4>Choose an amount</h4>
                <ul class="predefined-amount">
                  <li><label><input type="radio" name="donation-amount" value="20">CHF 20</label></li>
                  <li><label><input type="radio" name="donation-amount" value="50">CHF 50</label></li>
                  <li><label><input type="radio" name="donation-amount" value="100">CHF 100</label></li>
                  <li><label><input type="radio" name="donation-amount" value="200">CHF 200</label></li>
                </ul>
              </ul>
              </div>
              <span class="donation-choice-breaker">Or</span>
              <div class="col-md-6 col-sm-6 donate-amount-option">
                <h4>Enter your own</h4>
                <div class="input-group">
                  <span class="input-group-addon" id="basic-addon1">CHF</span>
                  <input type="number" class="form-control" name="custom_amount">
                </div>
              </div>
            </div>
          </div>
          <div class="modal-body" style="display:none;background-color:#F23827;color:white;">
            <div class="row">
              <div class="col-xs-12">
                Either your custom amount isn't valid or you haven't chosen anything!
              </div>
            </div>
          </div>
          <div class="modal-footer text-align-center">
            <button type="button" class="btn btn-primary" id="donate-other">Donate</button>
            <div class="spacer-20"></div>
          </div>
        </div>
      </div>
    </div>

    <style>
     #overlay {
       background-color: rgba(0, 0, 0, 0.7);
       color: #EEEEEE;
       position: fixed;
       height: 100%;
       width: 100%;
       z-index: 5000;
       top: 0;
       left: 0;
       float: left;
       text-align: center;
       padding-top: 25%;
     }
    </style>
    <div id="overlay" style="display:none;">
      <img src="/images/loader.gif" alt="Loading" /><br/>
      Processing...
    </div>

    <script src="js/jquery-2.1.3.min.js"></script> <!-- Jquery Library Call -->
    <script src="vendor/magnific/jquery.magnific-popup.min.js"></script> <!-- PrettyPhoto Plugin -->
    <script src="js/ui-plugins.js"></script> <!-- UI Plugins -->
    <script src="js/helper-plugins.js"></script> <!-- Helper Plugins -->
    <script src="vendor/owl-carousel/js/owl.carousel.min.js"></script> <!-- Owl Carousel -->
    <script src="js/bootstrap.js"></script> <!-- UI -->
    <script src="js/init.js"></script> <!-- All Scripts -->
    <script src="vendor/flexslider/js/jquery.flexslider.js"></script> <!-- FlexSlider -->
    <script src="js/circle-progress.js"></script> <!-- Circle Progress Bars -->

    @yield('js')

  </body>
</html>
