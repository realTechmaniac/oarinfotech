<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Oarinfotech</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="asset2/css/bootstrap.min.css"/>

    <!-- Slick -->
    <link type="text/css" rel="stylesheet" href="asset2/css/slick.css"/>
    <link type="text/css" rel="stylesheet" href="asset2/css/slick-theme.css"/>

    <!-- nouislider -->
    <link type="text/css" rel="stylesheet" href="asset2/css/nouislider.min.css"/>

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="asset2/css/font-awesome.min.css">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="asset2/css/style.css"/>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
.carousel-control .glyphicon-chevron-right, .fa-angle-right, .carousel-control .icon-next {
    right:30%;
    margin-right: -10px;
}
.carousel-control .glyphicon-chevron-left, .fa-angle-left, .carousel-control .icon-next {
    left:30%;
    margin-left: -10px;
}
.carousel-control .glyphicon-chevron-left, .fa-angle-left, .carousel-control .glyphicon-chevron-right, .fa-angle-right, .carousel-control .icon-next, .carousel-control .icon-prev {
    position: absolute;
    top: 50%;
    z-index: 5;
    display: inline-block;
    margin-top: -10px;
    font-size: 25px;
    background: black;
    padding: 10px;
    width: 50px;
    height: 50px;
  line-height: 30px;
}
/*======= media queries in css =======*/

/*////////////// XTRA SMALL DEVICES( mobile phones ) //////////////*/
@media (min-width: 300px) and (max-width: 479px){  
.carousel-control .glyphicon-chevron-left, .fa-angle-left, .carousel-control .glyphicon-chevron-right, .fa-angle-right, .carousel-control .icon-next, .carousel-control .icon-prev {
    position: absolute;
    top: 50%;
    z-index: 5;
    display: inline-block;
    margin-top: -10px;
    font-size: 20px;
    background: black;
    padding: 10px;
    width: 30px;
    height: 30px;
    line-height: 10px;
}
.carousel-control .glyphicon-chevron-right, .fa-angle-right, .carousel-control .icon-next {
    right:30%;
    margin-right: -10px;
}
.carousel-control .glyphicon-chevron-left, .fa-angle-left, .carousel-control .icon-next {
    left:30%;
    margin-left: -10px;
}
  }

/*////////////// TAB OR LARGE MOBILE PHONE //////////////*/
@media (min-width: 768px) and (max-width: 991px){  
.carousel-control .glyphicon-chevron-left, .fa-angle-left, .carousel-control .glyphicon-chevron-right, .fa-angle-right, .carousel-control .icon-next, .carousel-control .icon-prev {
    position: absolute;
    top: 50%;
    z-index: 5;
    display: inline-block;
    margin-top: -10px;
    font-size: 20px;
    background: black;
    padding: 10px;
    width: 30px;
    height: 30px;
    line-height: 10px;
}
.carousel-control .glyphicon-chevron-right, .fa-angle-right, .carousel-control .icon-next {
    right:30%;
    margin-right: -10px;
}
.carousel-control .glyphicon-chevron-left, .fa-angle-left, .carousel-control .icon-next {
    left:30%;
    margin-left: -10px;
}
  }

/*////////////// MEDIUM DEVICES LAPTOPS //////////////*/
@media (min-width: 992px) and (max-width: 1199px){  
.carousel-control .glyphicon-chevron-left, .fa-angle-left, .carousel-control .glyphicon-chevron-right, .fa-angle-right, .carousel-control .icon-next, .carousel-control .icon-prev {
    position: absolute;
    top: 50%;
    z-index: 5;
    display: inline-block;
    margin-top: -10px;
    font-size: 20px;
    background: black;
    padding: 10px;
    width:40px;
    height:40px;
    line-height: 10px;
}
.carousel-control .glyphicon-chevron-right, .fa-angle-right, .carousel-control .icon-next {
    right:30%;
    margin-right: -10px;
}
.carousel-control .glyphicon-chevron-left, .fa-angle-left, .carousel-control .icon-next {
    left:30%;
    margin-left: -10px;
}
  }
  <style type="text/css">
    * {
    
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
}

body {
  overflow: hidden;
  position: relative;
}


/* Preloader */

#preloader {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #f5f5f5;
  /* change if the mask should have another color then white */
  z-index: 99;
  /* makes sure it stays on top */
}

#status {
  position: absolute;
  left: 50%;
  /* centers the loading animation horizontally one the screen */
  top: 50%;
  /* centers the loading animation vertically one the screen */
  /* is width and height divided by two */
}

.spinner-sm {
  width: 50px;
  height: 50px;
  background-image: url(http://www.lumavi.de/templates/automobile_darmas/images/icon_darmas_white.png);
  background-size: 40%;
  background-position: center center;
  background-repeat: no-repeat;
  background-color: #214577;
  border-radius: 50%;
}
.spinner-sm:after,
.spinner-sm:before {
  content: '';
  display: block;
  width: 50px;
  height: 50px;
  border-radius: 50%;
}
.spinner-sm-1:after {
  position: absolute;
  top: -4px;
  left: -4px;
  border: 4px solid transparent;
  border-top-color: #214577;
  border-bottom-color: #214577;
  animation: spinny 0.8s linear infinite;
}
@keyframes spinny {
  0% {
    transform: rotate(0deg) scale(1);
  }
  50% {
    transform: rotate(90deg) scale(1.2);
  }
  100% {
    transform: rotate(360deg) scale(1);
  }
}
@keyframes spinny {
  0% {
    transform: rotate(0deg) scale(1);
  }
  50% {
    transform: rotate(90deg) scale(1.2);
  }
  100% {
    transform: rotate(360deg) scale(1);
  }
}
  </style>
</style>

    </head>
  <body>
    <!-- HEADER -->

   <div id="preloaders" class="preloader"></div>
    <section>
        <header>
      <!-- TOP HEADER -->
      <div id="top-header">
        <div class="container">
          <ul class="header-links pull-left">
            <li><a href="#"><i class="fa fa-phone"></i>+2348066490082</a></li>
            <li><a href="#"><i class="fa fa-envelope-o"></i> admin@oarinfotech.com</a></li>
            <li><a href="#"><i class="fa fa-map-marker"></i>VSF 11, Bannex Plaza</a></li>
          </ul>
          <ul class="header-links pull-right">
            <li><a href="/showlogin" class="btn btn-warning btn-sm" style="background-color: #fff; color: blue;">Sign Up<i class=""></i></a></li>
            <li><a href="#"><i class="fa fa-user-o"></i> My Account</a></li>
          </ul>
        </div>
      </div>
      <!-- /TOP HEADER -->

      <!-- MAIN HEADER -->
      <div id="header">
        <!-- container -->
        <div class="container">
          <!-- row -->
          <div class="row">
            <!-- LOGO -->
            <div class="col-md-3">
              <div class="header-logo">
                <a href="#" class="logo">
                  <img src="./asset2/img/reedited.png" alt="">
                </a>
              </div>
            </div>
            <!-- /LOGO -->

            <!-- SEARCH BAR -->
            <div class="col-md-6">
              <div class="header-search">
                <form>
                  <select class="input-select">
                    <option value="0">All Categories</option>
                    <option value="1">Phones</option>
                    <option value="2">Laptops</option>
                    <option value="2">Accesories</option>
                  </select>
                  <input class="input" placeholder="Search here">
                  <button class="search-btn">Search</button>
                </form>
              </div>
            </div>
            <!-- /SEARCH BAR -->

            <!-- ACCOUNT -->
            <div class="col-md-3 clearfix">
              <div class="header-ctn">
                <!-- Wishlist -->
                <!-- <div>
                  <a href="#">
                    <i class="fa fa-heart-o"></i>
                    <span>Your Wishlist</span>
                    <div class="qty">2</div>
                  </a>
                </div> -->
                <!-- /Wishlist -->

                <!-- Cart -->
                <div class="dropdown">
                  <a href="/cart">
                    <i class="fa fa-shopping-cart"></i>
                    <span>Your Bookings</span>
                    <div class="qty">{{Session::has('cart')? Session::get('cart')->totalQty:0}}</div>
                  </a>
                  <div class="cart-dropdown">
                    <div class="cart-list">
                      <div class="product-widget">
                        <div class="product-img">
                          <img src="./asset2/img/product01.png" alt="">
                        </div>
                        <div class="product-body">
                          <h3 class="product-name"><a href="#">product name goes here</a></h3>
                          <h4 class="product-price"><span class="qty">1x</span>$980.00</h4>
                        </div>
                        <button class="delete"><i class="fa fa-close"></i></button>
                      </div>

                      <div class="product-widget">
                        <div class="product-img">
                          <img src="./asset2/img/product02.png" alt="">
                        </div>
                        <div class="product-body">
                          <h3 class="product-name"><a href="#">product name goes here</a></h3>
                          <h4 class="product-price"><span class="qty">3x</span>$980.00</h4>
                        </div>
                        <button class="delete"><i class="fa fa-close"></i></button>
                      </div>
                    </div>
                    <div class="cart-summary">
                      <small>3 Item(s) selected</small>
                      <h5>SUBTOTAL: $2940.00</h5>
                    </div>
                    <div class="cart-btns">
                      <a href="#">View Cart</a>
                      <a href="#">Checkout  <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                  </div>
                </div>
                <!-- /Cart -->

                <!-- Menu Toogle -->
                <div class="menu-toggle">
                  <a href="#">
                    <i class="fa fa-bars"></i>
                    <span>Menu</span>
                  </a>
                </div>
                <!-- /Menu Toogle -->
              </div>
            </div>
            <!-- /ACCOUNT -->
          </div>
          <!-- row -->
        </div>
        <!-- container -->
      </div>
      <!-- /MAIN HEADER -->
    </header>
    </section>
    
    <!-- /HEADER -->

    <!-- NAVIGATION -->
    <nav id="navigation">
      <!-- container -->
      <div class="container">
        <!-- responsive-nav -->
        <div id="responsive-nav">
          <!-- NAV -->
          <ul class="main-nav nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="/about">About Us</a></li>
            <li><a href="/store">Store</a></li>
            <li><a href="/contact">Contact</a></li>
            <li><a href="#">Smartphones</a></li>
            <li><a href="#">Accessories</a></li>
          </ul>          
        </div>
        <!-- /responsive-nav -->
      </div>
      <!-- /container -->
    </nav>
    <!-- /NAVIGATION -->

     
          @yield('content')




    <!-- FOOTER -->
    <footer id="footer" style="padding-top: 70px;">
      <!-- top footer -->
      <div class="section">
        <!-- container -->
        <div class="container">
          <!-- row -->
          <div class="row">
            <div class="col-md-3 col-xs-6">
              <div class="footer">
                <h3 class="footer-title mt-5">About Us</h3>
                <p>Oar Info-Tech focuses on your IT requirements so you can zero in on your business growth.</p>
                <ul class="footer-links">
                  <li><a href="#"><i class="fa fa-map-marker"></i>1734 Stonecoal Road</a></li>
                  <li><a href="#"><i class="fa fa-phone"></i>+2348066490092</a></li>
                  <li><a href="#"><i class="fa fa-envelope-o"></i>admin@oarinfotech.com</a></li>
                </ul>
              </div>
            </div>

            <div class="col-md-3 col-xs-6">
              <div class="footer">
                <h3 class="footer-title">Categories</h3>
                <ul class="footer-links">
                  <li><a href="#">Hot deals</a></li>
                  <li><a href="#">Laptops</a></li>
                  <li><a href="#">Smartphones</a></li>
                  <li><a href="#">Phones</a></li>
                  <li><a href="#">Accessories</a></li>
                </ul>
              </div>
            </div>

            <div class="clearfix visible-xs"></div>

            <div class="col-md-3 col-xs-6">
              <div class="footer">
                <h3 class="footer-title">Information</h3>
                <ul class="footer-links">
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Contact Us</a></li>
                 
                </ul>
              </div>
            </div>

            <div class="col-md-3 col-xs-6">
              <div class="footer">
                <h3 class="footer-title">Service</h3>
                <ul class="footer-links">
                  <li><a href="#">My Account</a></li>
                  <li><a href="#">View Bookings</a></li>
                  
                </ul>
              </div>
            </div>
          </div>
          <!-- /row -->
        </div>
        <!-- /container -->
      </div>
      <!-- /top footer -->

     
    </footer>
    <!-- /FOOTER -->

    <!-- jQuery Plugins -->
    <script src="asset2/js/jquery.min.js"></script>
    <script src="asset2/js/jquery.min.js"></script>
    <script src="asset2/js/bootstrap.min.js"></script>
    <script src="asset2/js/slick.min.js"></script>
    <script src="asset2/js/nouislider.min.js"></script>
    <script src="asset2/js/jquery.zoom.min.js"></script>
    <script src="asset2/js/main.js"></script>


    

  </body>
</html>
