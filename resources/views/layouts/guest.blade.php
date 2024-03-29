{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
    </body>
</html> --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.ico') }}">
    <link
        href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&subset=latin,latin-ext"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&subset=latin,latin-ext"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/chosen.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/color-01.css') }}">
    @livewireStyles
</head>

<body class="home-page home-01 ">

    <!-- mobile menu -->
    <div class="mercado-clone-wrap">
        <div class="mercado-panels-actions-wrap">
            <a class="mercado-close-btn mercado-close-panels" href="#">x</a>
        </div>
        <div class="mercado-panels"></div>
    </div>

    <!--header-->
    <header id="header" class="header header-style-1">
        <div class="container-fluid">
            <div class="row">
                <div class="topbar-menu-area">
                    <div class="container">
                        <div class="topbar-menu left-menu">
                            <ul>
                                <li class="menu-item">
                                    <a title="Hotline: (+254)702894648" href="#"><span
                                            class="icon label-before fa fa-mobile"></span>Hotline: (+254)702894648</a>
                                </li>
                            </ul>
                        </div>
                        <div class="topbar-menu right-menu">
                            <ul>
                                {{-- <li class="menu-item" ><a title="Register or Login" href="login.html">Login</a></li>
								<li class="menu-item" ><a title="Register or Login" href="register.html">Register</a></li> --}}
                                {{-- <li class="menu-item lang-menu menu-item-has-children parent">
									<a title="English" href="#"><span class="img label-before"><img src="{{asset('assets/images/lang-en.png')}}" alt="lang-en"></span>English<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                </li> --}}
                                {{-- <ul class="submenu lang" >
										<li class="menu-item" ><a title="hungary" href="#"><span class="img label-before"><img src="{{asset('assets/images/lang-hun.png')}}" alt="lang-hun"></span>Hungary</a></li>
										<li class="menu-item" ><a title="german" href="#"><span class="img label-before"><img src="{{asset('assets/images/lang-ger.png')}}" alt="lang-ger" ></span>German</a></li>
										<li class="menu-item" ><a title="french" href="#"><span class="img label-before"><img src="{{asset('assets/images/lang-fra.png')}}" alt="lang-fre"></span>French</a></li>
										<li class="menu-item" ><a title="canada" href="#"><span class="img label-before"><img src="{{asset('assets/images/lang-can.png')}}" alt="lang-can"></span>Canada</a></li>
									</ul>
								</li>
								<li class="menu-item menu-item-has-children parent" >
									<a title="Dollar (USD)" href="#">Dollar (USD)<i class="fa fa-angle-down" aria-hidden="true"></i></a>
									<ul class="submenu curency" >
										<li class="menu-item" >
											<a title="Pound (GBP)" href="#">Pound (GBP)</a>
										</li>
										<li class="menu-item" >
											<a title="Euro (EUR)" href="#">Euro (EUR)</a>
										</li>
										<li class="menu-item" >
											<a title="Dollar (USD)" href="#">Dollar (USD)</a>
										</li>
									</ul>
								</li> --}}
                                @if (Route::has('login'))
                                    @auth
                                        {{-- admin dashboard --}}
                                        @if (Auth::user()->user_type === 'ADMIN')
                                            <li class="menu-item menu-item-has-children parent">
                                                <a title="My Account" href="#">My Account({{ Auth::user()->name }})<i
                                                        class="fa fa-angle-down" aria-hidden="true"></i></a>
                                                <ul class="submenu curency">
                                                    <li class="menu-item">
                                                        <a title="Dashboard"
                                                            href="{{ route('admin.dashboard') }}">Dashboard</a>
                                                    </li>
													<li class=menu-item>
														<a href="{{ route('logout') }}" onlclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
													</li>
													<form action="{{ route('logout') }}" id="logout-form" method="POST" >
														@csrf
														
													</form>
                                                </ul>
                                            </li>
                                        @else
                                            {{-- Users dashboard --}}
                                            <li class="menu-item menu-item-has-children parent">
                                                <a title="My Account" href="#">My Account({{ Auth::user()->name }})<i
                                                        class="fa fa-angle-down" aria-hidden="true"></i></a>
                                                <ul class="submenu curency">
                                                    <li class="menu-item">
                                                        <a title="Dashboard"
                                                            href="{{ route('user.dashboard') }}">Dashboard</a>
                                                    </li>
													<li class=menu-item>
														<a href="{{ route('logout') }}" onlclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
													</li>
												
													<form method="POST" action="{{ route('logout') }}">
														@csrf
													</form>
													
                                                </ul>
                                            </li>
                                        @endif
                                    @else
                                        <li class="menu-item"><a title=" Login"
                                                href="{{ route('login') }}">Login</a></li>
                                        <li class="menu-item"><a title="Register"
                                                href="{{ route('register') }}">Register</a></li>
                                    @endif
                                @endif
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="mid-section main-info-area">

                            <div class="wrap-logo-top left-section">
                                <a href="/home" class="link-to-home"><img src="{{ 'assets/images/logo-top-1.png' }}"
                                        alt="mercado"></a>
                            </div>

                            <div class="wrap-search center-section">
                                <div class="wrap-search-form">
                                    <form action="#" id="form-search-top" name="form-search-top">
                                        <input type="text" name="search" value="" placeholder="Search here...">
                                        <button form="form-search-top" type="button"><i class="fa fa-search"
                                                aria-hidden="true"></i></button>
                                        <div class="wrap-list-cate">
                                            <input type="hidden" name="product-cate" value="0" id="product-cate">
                                            <a href="#" class="link-control">All Category</a>
                                            <ul class="list-cate">
                                                <li class="level-0">All Category</li>
                                                <li class="level-1">Quitars</li>
                                                <li class="level-2"> Acoustic Guitars   </li>
                                                <li class="level-2">Semi Acoustic Guitars</li>
                                                <li class="level-2">Classical Guitars</li>
                                                <li class="level-2">Trans Acoustic Guitar</li>
                                                <li class="level-2">Electric Guitars</li>
                                                <li class="level-2">Bass Guitar</li>
                                                <li class="level-1">Keyboards </li>
                                                <li class="level-2">Arranger Workstation</li>
                                                <li class="level-2">Synthesizers</li>
                                                <li class="level-2">Midi Keyboard</li>
                                                <li class="level-2">Portable Keyboard</li>
                                                <li class="level-2">Piaggero </li>
                                                <li class="level-2">Keyboard Stand</li>
                                                <li class="level-1">Piano</li> 
                                                <li class="level-2">Grand Piano</li>
                                                <li class="level-2">Upright Piano</li>
                                                <li class="level-2">Digital Piano</li>
                                                <li class="level-1">Dj Equipments</li>
                                                <li class="level-1">Pa Equipment</li>
                                                <li class="level-1">Drums</li>
                                                <li class="level-1">Music Production</li>


                                            </ul>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="wrap-icon right-section">
                                <div class="wrap-icon-section wishlist">
                                    <a href="#" class="link-direction">
                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                        <div class="left-info">
                                            <span class="index">0 item</span>
                                            <span class="title">Wishlist</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="wrap-icon-section minicart">
                                    <a href="#" class="link-direction">
                                        <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                        <div class="left-info">
                                            <span class="index">4 items</span>
                                            <span class="title">CART</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="wrap-icon-section show-up-after-1024">
                                    <a href="#" class="mobile-navigation">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="nav-section header-sticky">
                        <div class="header-nav-section">
                            <div class="container">
                                <ul class="nav menu-nav clone-main-menu" id="mercado_haead_menu"
                                    data-menuname="Sale Info">
                                    <li class="menu-item"><a href="#" class="link-term">Weekly Featured</a><span
                                            class="nav-label hot-label">hot</span></li>
                                    <li class="menu-item"><a href="#" class="link-term">Hot Sale items</a><span
                                            class="nav-label hot-label">hot</span></li>
                                    <li class="menu-item"><a href="#" class="link-term">Top new items</a><span
                                            class="nav-label hot-label">hot</span></li>
                                    <li class="menu-item"><a href="#" class="link-term">Top Selling</a><span
                                            class="nav-label hot-label">hot</span></li>
                                    <li class="menu-item"><a href="#" class="link-term">Top rated items</a><span
                                            class="nav-label hot-label">hot</span></li>
                                </ul>
                            </div>
                        </div>

                        <div class="primary-nav-section">
                            <div class="container">
                                <ul class="nav primary clone-main-menu" id="mercado_main" data-menuname="Main menu">
                                    <li class="menu-item home-icon">
                                        <a href="/home" class="link-term mercado-item-title"><i class="fa fa-home"
                                                aria-hidden="true"></i></a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="/shop" class="link-term mercado-item-title">Shop</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="/cart" class="link-term mercado-item-title">Cart</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="/checkout" class="link-term mercado-item-title">Checkout</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="about-us.html" class="link-term mercado-item-title">About Us</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="contact-us.html" class="link-term mercado-item-title">Contact Us</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        {{ $slot }}

        <footer id="footer">
            <div class="wrap-footer-content footer-style-1">

                <div class="wrap-function-info">
                    <div class="container">
                        <ul>
                            <li class="fc-info-item">
                                <i class="fa fa-truck" aria-hidden="true"></i>
                                <div class="wrap-left-info">
                                    <h4 class="fc-name">Free Shipping</h4>
                                    <p class="fc-desc">Free On Oder Over $99</p>
                                </div>

                            </li>
                            <li class="fc-info-item">
                                <i class="fa fa-recycle" aria-hidden="true"></i>
                                <div class="wrap-left-info">
                                    <h4 class="fc-name">Guarantee</h4>
                                    <p class="fc-desc">30 Days Money Back</p>
                                </div>

                            </li>
                            <li class="fc-info-item">
                                <i class="fa fa-credit-card-alt" aria-hidden="true"></i>
                                <div class="wrap-left-info">
                                    <h4 class="fc-name">Safe Payment</h4>
                                    <p class="fc-desc">Safe your online payment</p>
                                </div>

                            </li>
                            <li class="fc-info-item">
                                <i class="fa fa-life-ring" aria-hidden="true"></i>
                                <div class="wrap-left-info">
                                    <h4 class="fc-name">Online Suport</h4>
                                    <p class="fc-desc">We Have Support 24/7</p>
                                </div>

                            </li>
                        </ul>
                    </div>
                </div>
                <!--End function info-->

                <div class="main-footer-content">

                    <div class="container">

                        <div class="row">

                            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                <div class="wrap-footer-item">
                                    <h3 class="item-header">Contact Details</h3>
                                    <div class="item-content">
                                        <div class="wrap-contact-detail">
                                            <ul>
                                                <li>
                                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                    <p class="contact-txt">The Junction between River Road and Luthuli ave
                                                        , Nairobi, Kenya</p>
                                                </li>
                                                <li>
                                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                                    <p class="contact-txt">(+254)702894648 - (+254)702894648</p>
                                                </li>
                                                <li>
                                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                                    <p class="contact-txt">info@jamoaudioempire.com</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">

                                <div class="wrap-footer-item">
                                    <h3 class="item-header">Hot Line</h3>
                                    <div class="item-content">
                                        <div class="wrap-hotline-footer">
                                            <span class="desc">Call Us toll Free</span>
                                            <b class="phone-number"> (+254)702894648 - (+254)702894648</b>
                                        </div>
                                    </div>
                                </div>

                                <div class="wrap-footer-item footer-item-second">
                                    <h3 class="item-header">Sign up for newsletter</h3>
                                    <div class="item-content">
                                        <div class="wrap-newletter-footer">
                                            <form action="#" class="frm-newletter" id="frm-newletter">
                                                <input type="email" class="input-email" name="email" value=""
                                                    placeholder="Enter your email address">
                                                <button class="btn-submit">Subscribe</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12 box-twin-content ">
                                <div class="row">
                                    <div class="wrap-footer-item twin-item">
                                        <h3 class="item-header">My Account</h3>
                                        <div class="item-content">
                                            <div class="wrap-vertical-nav">
                                                <ul>
                                                    <li class="menu-item"><a href="#" class="link-term">My
                                                            Account</a></li>
                                                    <li class="menu-item"><a href="#" class="link-term">Brands</a>
                                                    </li>
                                                    <li class="menu-item"><a href="#" class="link-term">Gift
                                                            Certificates</a></li>
                                                    <li class="menu-item"><a href="#"
                                                            class="link-term">Affiliates</a></li>
                                                    <li class="menu-item"><a href="#" class="link-term">Wish
                                                            list</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wrap-footer-item twin-item">
                                        <h3 class="item-header">Infomation</h3>
                                        <div class="item-content">
                                            <div class="wrap-vertical-nav">
                                                <ul>
                                                    <li class="menu-item"><a href="#" class="link-term">Contact
                                                            Us</a></li>
                                                    <li class="menu-item"><a href="#" class="link-term">Returns</a>
                                                    </li>
                                                    <li class="menu-item"><a href="#" class="link-term">Site
                                                            Map</a></li>
                                                    <li class="menu-item"><a href="#"
                                                            class="link-term">Specials</a></li>
                                                    <li class="menu-item"><a href="#" class="link-term">Order
                                                            History</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row">

                            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                <div class="wrap-footer-item">
                                    <h3 class="item-header">We Using Safe Payments:</h3>
                                    <div class="item-content">
                                        <div class="wrap-list-item wrap-gallery">
                                            <img src="assets/images/payment.png" style="max-width: 260px;">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                <div class="wrap-footer-item">
                                    <h3 class="item-header">Social network</h3>
                                    <div class="item-content">
                                        <div class="wrap-list-item social-network">
                                            <ul>
                                                <li><a href="#" class="link-to-item" title="twitter"><i
                                                            class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                <li><a href="#" class="link-to-item" title="facebook"><i
                                                            class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                <li><a href="#" class="link-to-item" title="pinterest"><i
                                                            class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                                <li><a href="#" class="link-to-item" title="instagram"><i
                                                            class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                                {{-- <li><a href="#" class="link-to-item" title="vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li> --}}
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>

                    <div class="wrap-back-link">
                        <div class="container">
                            <div class="back-link-box">
                                <h3 class="backlink-title">Quick Links</h3>
                                <div class="back-link-row">

                                      <ul class="list-back-link">
                                        <li><span class="row-title">Guitars:</span></li>
                                        <li><a href="#" class="redirect-back-link" title="Plesc YPads">Acoustic Guitars</a></li>
                                        <li><a href="#" class="redirect-back-link" title="Samsyng Tablets">Semi Acoustic Guitars</a></li>
                                        <li><a href="#" class="redirect-back-link"
                                                title="Qindows Tablets">Classical Guitars</a></li>
                                        <li><a href="#" class="redirect-back-link" title="Calling Tablets">Trans Acoustic Guitar</a></li>
                                        <li><a href="#" class="redirect-back-link"
                                                title="Micrumex Tablets">Electric Guitars</a></li>
                                        <li><a href="#" class="redirect-back-link" title="Lenova Tablets Bsus">Bass Guitar</a></li>

                                    </ul>

                                    <ul class="list-back-link">
                                        <li><span class="row-title">Keyboards:</span></li>
                                        <li><a href="#" class="redirect-back-link" title="mobile">Arranger
                                                Workstation</a></li>
                                        <li><a href="#" class="redirect-back-link" title="yphones">Synthesizers</a>
                                        </li>
                                        <li><a href="#" class="redirect-back-link" title="Gianee Mobiles GL">Midi
                                                Keyboard</a></li>
                                        <li><a href="#" class="redirect-back-link" title="Mobiles Karbonn">Portable Keyboard</a></li>
                                        <li><a href="#" class="redirect-back-link"
                                                title="Mobiles Viva">Piaggero</a></li>
                                        <li><a href="#" class="redirect-back-link" title="Mobiles Intex">Keyboad
                                                accessories</a>
                                        <li>
                                        <li><a href="#" class="redirect-back-link" title="Mobiles Viva">Keyboard
                                                Stand</a></li>

                                        </li>
                                        </li>
                                    </ul>

                                    <ul class="list-back-link">
                                        <li><span class="row-title">Piano:</span></li>
                                        <li><a href="#" class="redirect-back-link" title="Plesc YPads">Grand
                                                Piano</a></li>
                                        <li><a href="#" class="redirect-back-link" title="Samsyng Tablets">Upright
                                                Piano</a></li>
                                        <li><a href="#" class="redirect-back-link" title="Qindows Tablets">Digital
                                                Piano</a></li>
                                        <li><a href="#" class="redirect-back-link" title="Calling Tablets">Piano
                                                Accesories</a></li>

                                    </ul>

                                  

                                    <ul class="list-back-link">
                                        <li><span class="row-title">Dj Equipment:</span></li>
                                        <li><a href="#" class="redirect-back-link" title="Sarees Silk">Dj
                                                Monitors</a></li>
                                        <li><a href="#" class="redirect-back-link" title="sarees Salwar">Turn
                                                Tables</a></li>
                                        <li><a href="#" class="redirect-back-link" title="Suits Lehengas">
                                                Controllers</a></li>
                                        <li><a href="#" class="redirect-back-link" title="Biba Jewellery"> Dj
                                                Mixers</a></li>
                                        <li><a href="#" class="redirect-back-link" title="Rings Earrings">CD
                                                Players</a></li>
                                        <li><a href="#" class="redirect-back-link" title="Diamond Rings">All In one
                                                Dj System</a></li>
                                        <li><a href="#" class="redirect-back-link" title="Loose Diamond Shoes">Dj
                                                Accessories</a></li>

                                    </ul>
                                    <ul class="list-back-link">
                                        <li><span class="row-title">PA Equipment:</span></li>
                                        <li><a href="#" class="redirect-back-link"
                                                title="Sarees Silk">Amplifier</a></li>
                                        <li><a href="#" class="redirect-back-link" title="sarees Salwar">Line Array
                                                System</a></li>
                                        <li><a href="#" class="redirect-back-link"
                                                title="Suits Lehengas">Speakers</a></li>
                                        <li><a href="#" class="redirect-back-link" title="Biba Jewellery">Signal
                                                Processors</a></li>
                                        <li><a href="#" class="redirect-back-link"
                                                title="Rings Earrings">Mixers</a></li>

                                    </ul>
                                  
                                    <ul class="list-back-link">
                                        <li><span class="row-title">Music Production:</span></li>
                                        <li><a href="#" class="redirect-back-link"
                                                title="Sarees Silk">Earphones/Headphones</a></li>
                                        <li><a href="#" class="redirect-back-link"
                                                title="sarees Salwar">Condenser</a></li>
                                        <li><a href="#" class="redirect-back-link" title="Suits Lehengas">Studio
                                                Monitors</a></li>
                                        <li><a href="#" class="redirect-back-link" title="Biba Jewellery">Audio
                                                Monitors</a></li>
                                        <li><a href="#" class="redirect-back-link" title="Rings Earrings">Midi
                                                Keyboards</a></li>
                                        <li><a href="#" class="redirect-back-link" title="Diamond Rings">Audio
                                                Interfaces</a></li>

                                    </ul>  
                                    <ul class="list-back-link">
                                        <li><span class="row-title">Drums:</span></li>
                                        <li><a href="#" class="redirect-back-link" title="Sarees Silk">Acoustic
                                                Drums</a></li>
                                        <li><a href="#" class="redirect-back-link" title="sarees Salwar"> Electric
                                                Drums</a></li>
                                        <li><a href="#" class="redirect-back-link" title="Suits Lehengas">Drum
                                                Accessories</a></li>

                                    </ul>


                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="coppy-right-box">
                    <div class="container">
                        <div class="coppy-right-item item-left">
                            <p class="coppy-right-text">Copyright © 2023 Jamo Audio Empire. All rights reserved</p>
                        </div>
                        <div class="coppy-right-item item-right">
                            <div class="wrap-nav horizontal-nav">
                                <ul>
                                    <li class="menu-item"><a href="about-us.html" class="link-term">About us</a></li>
                                    <li class="menu-item"><a href="privacy-policy.html" class="link-term">Privacy
                                            Policy</a></li>
                                    <li class="menu-item"><a href="terms-conditions.html" class="link-term">Terms &
                                            Conditions</a></li>
                                    <li class="menu-item"><a href="return-policy.html" class="link-term">Return
                                            Policy</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </footer>

        <script src="{{ asset('assets/js/jquery-1.12.4.minb8ff.js?ver=1.12.4') }}"></script>
        <script src="{{ asset('assets/js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.flexslider.js') }}"></script>
        <script src="{{ asset('assets/js/chosen.jquery.min.js') }}"></script>
        <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.sticky.js') }}"></script>
        <script src="{{ asset('assets/js/functions.js') }}"></script>
        @livewireScripts
    </body>

    </html>
