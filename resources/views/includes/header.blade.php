<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Oar Infotech</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="asset/images/favicon.ico">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    

    <!-- All css files are included here. -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="{{asset('asset/css/bootstrap.min.css')}}">
    <!-- Owl Carousel main css -->
    <link rel="stylesheet" href="{{asset('asset/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/owl.theme.default.min.css')}}">
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="{{asset('asset/css/core.css')}}">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="{{asset('asset/css/shortcode/shortcodes.css')}}">
    <!-- Theme main style -->
    <link rel="stylesheet" href="{{asset('asset/style.css')}}">
    <!-- Responsive css -->
    <link rel="stylesheet" href="{{asset('asset/css/responsive.css')}}">
    <!-- User style -->
    <link rel="stylesheet" href="{{asset('asset/css/custom.css')}}">
    <link rel="stylesheet" type="text/css" href="asset/preloader">

    <!-- Modernizr JS -->
    <script src="{{asset('asset/js/vendor/modernizr-2.8.3.min.js')}}"></script>

</head>

<body>
     
    
    <!-- Body main wrapper start -->
    <div class="wrapper fixed__footer">
        <!-- Start Header Style -->
        <header id="header" class="htc-header header--3 bg__white" style="background-color: #F6F6F8;  height:100px;">
            <!-- Start Mainmenu Area -->
            <div id="sticky-header-with-topbar" class="mainmenu__area sticky__header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2 col-lg-2 col-sm-3 col-xs-3">
                            <div class="logo">
                                <a href="index.html">
                                    <img src="asset/images/logo/oarlogo.png" alt="logo">
                                </a>
                            </div>
                        </div>
                        <!-- Start MAinmenu Ares -->
                        <div class="col-md-6 col-lg-6 col-sm-4 col-xs-4">
                            <nav class="mainmenu__nav hidden-xs hidden-sm">
                                <ul class="main__menu">
                                    <li class="drop"><a href="/">Home</a></li>
                                    <li class="drop"><a href="/shop">Shop</a>
                                       
                                    </li>
                                    
                                    <li class="drop"><a href="/about">About Us</a>
                                       
                                    </li>
                                    
                                        
                                    </li>
                                    <li><a href="/contact">contact</a></li>
                                </ul>
                            </nav>
                            <div class="mobile-menu clearfix visible-xs visible-sm">
                                <nav id="mobile_dropdown">
                                    <ul>
                                        <li><a href="/">Home</a></li>
                                        <li><a href="/about">About Us</a>
                                            
                                        </li>
                                        
                                        <li><a href="/shop">Shop</a>
                                        </li>
                                        <li><a href="/contact">contact</a></li>
                                    </ul>
                                </nav>
                            </div>                          
                        </div>
                        <!-- End MAinmenu Ares -->
                        <div class="col-md-4 col-sm-6 col-xs-4">  
                            <ul class="menu-extra">
                                @guest
                                    <li><a href="/login"><span><strong>LOGIN</strong></span></a></li>
                                    <li><a href="/register"><span><strong>REGISTER</strong></span></a></li>
                                @else

                                <li class="hidden-xs">

                                    <a href="/userdashboard">
                                    ACCOUNT
                                    </a>
                                </li>
                                <li class="hidden-xs">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('LOGOUT') }}
                                    </a>
                                </li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">

                                        @csrf

                                </form>

                                @endguest

                                <li class="hidden-sm"><a href="/cart">CART</a> <span class="">@if(Cart::instance('default')->count() > 0)<sup class="badge badge-success" style="background-color: blue; font-weight: bolder;"><strong>{{Cart::instance('default')->count()}} </strong></sup></span>

                                </li>
                                @endif
                                
                                <li class="search search__open hidden-xs" type="submit"><span class="ti-search"></span></li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="mobile-menu-area"></div>
                </div>
            </div>
            <!-- End Mainmenu Area -->
        </header>
        <!-- End Header Style -->
