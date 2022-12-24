
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>ECOMMMERCE</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/fontawesome-all.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/jquery-ui.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/flaticon.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/aos.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/slick.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/default.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
        @livewireStyles()
    </head>
    <body>

        {{-- <!-- preloader -->
        <div id="preloader">
            <div id="loading-center">
                <div class="loader">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
        <!-- preloader-end --> --}}


		<!-- Scroll-top -->
        <button class="scroll-top scroll-to-target" data-target="html">
            <i class="fas fa-angle-up"></i>
        </button>
        <!-- Scroll-top-end-->

        <!-- header-area -->
        <header>

            <!-- header-message -->
            <div class="header-message-wrap">
                <div class="container custom-container">
                    <div class="row">
                        <div class="col-12">
                            <div class="top-notify-message">
                                <p>Bienvenue Sur Dstore Marketplace </p>
                                <span class="message-remove">X</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header-message-end -->

            <!-- header-top-start -->
            <div class="header-top-wrap">
                <div class="container custom-container">
                    <div class="row align-items-center">
                        <div class="col-md-7">
                            <div class="header-top-left">
                                <ul>
                                    <li class="header-top-lang">
                                        <div class="dropdown">
                                            <button class="dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">Nos Collections</button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                                <a class="dropdown-item" href="{{route('sotre.index')}}">Nos Produits </a>
                                                <a class="dropdown-item" href="{{route('category.index')}}">Nos Categories</a>

                                            </div>
                                        </div>
                                    </li>

                                    <li class="header-work-time">
                                    Commander entre : <span> Lundi  8H jusqu'au Samedi 16h</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="header-top-right">
                                <ul>
                                    @guest
                                    <li><a href="{{route('login')}}">Mon Compte </a></li>
                                        @else
                                        <li><a href="{{route('dashboard')}}">Tableau de bord</a></li>
                                    @endguest
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header-top-end -->

            <!-- header-search-area -->
            <div class="header-search-area">
                <div class="container custom-container">
                    <div class="row align-items-center">
                        <div class="col-xl-2 col-lg-3 d-none d-lg-block">
                            <div class="logo">
                                <a href="{{url('/')}}"><img src="{{asset('assets/img/logo/logo.png')}}" alt="Logo"></a>

                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-9">
                            <div class="d-block d-sm-flex align-items-center justify-content-end">
                                <div class="header-search-wrap">
                                    <form action="#">
                                        <input type="text" placeholder="Rechercher un produit ...">
                                        <button><i class="flaticon-loupe-1"></i></button>
                                    </form>
                                </div>
                                <div class="header-action">
                                    <ul>
                                        <li class="header-phone">
                                            <div class="icon"><i class="flaticon-telephone"></i></div>

                                            <a href="tel:"><span>Contact </span>+225 945767677</a>
                                        </li>
                                        @guest
                                        <li class="header-user">
                                            @if(Route::has('login'))
                                            <a href="{{route('login')}}"><i class="flaticon-user"></i></a>
                                            @endif
                                        </li>
                                            @else
                                            <li class="header-user">
                                                @if(Route::has('login'))
                                                <a href="{{route('dashboard')}}"><i class="flaticon-user"></i></a>
                                                @endif
                                            </li>
                                        @endguest

                                        <li class="header-wishlist">
                                            <a href="#"><i class="flaticon-heart-shape-outline"></i></a>

                                        </li>
                                        @livewire('counter-component')
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header-search-area-end -->

            <div id="sticky-header" class="menu-area">
                <div class="container custom-container">
                    <div class="row">
                        <div class="col-12">
                            <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                            <div class="menu-wrap">
                                <nav class="menu-nav">
                                    <div class="logo d-block d-lg-none">
                                        <a href="{{url('/')}}">
                                            <img src="{{asset('assets/img/logo/logo.png')}}" alt=""></a>
                                    </div>
                                        @livewire('categort-appcomponent')

                                    <div class="navbar-wrap main-menu d-none d-lg-flex">
                                        <ul class="navigation">
                                            <li class="active menu-item"><a href="{{url('/')}}">Accueil</a>
                                            </li>
                                            <li><a href="{{route('category.index')}}">Nos Categories</a></li>
                                            <li><a href="{{route('sotre.index')}}">Nos Produits </a></li>

                                            <li class="menu-item-has-children"><a >Mon Espace</a>
                                                <ul class="submenu">
                                                    @guest
                                                    <li><a href="{{route('login')}}">Connexion</a></li>
                                                    <li><a href="{{route('register')}}">Inscription</a></li>
                                                    @else
                                                    <li><a href="{{route('dashboard')}}">Tableau de bord</a></li>

                                                    @endguest

                                                </ul>
                                            </li>
                                            <li><a href="{{route('article.index')}}">Acutalites </a></li>
                                        </ul>
                                    </div>
                                    <div class="header-super-store d-none d-xl-block d-lg-none d-md-block">
                                        <div class="">
                                            <button class="dropdown-toggle"> <i class="flaticon-shop"></i>DSTORE
                                            </button>
                                        </div>
                                    </div>
                                </nav>
                            </div>
                            <!-- Mobile Menu  -->
                            <div class="mobile-menu">
                                <nav class="menu-box">
                                    <div class="close-btn"><i class="fas fa-times"></i></div>
                                    <div class="nav-logo"><a href="{{url('/')}}"><img src="{{asset('assets/img/logo/logo.png')}}" alt="" title=""></a>
                                    </div>
                                    <div class="menu-outer">
                                        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                                    </div>
                                    <div class="social-links">
                                        <ul class="clearfix">
                                            <li><a href="{{url('/cart')}}"><i class="flaticon-shopping-basket"></i></a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <div class="menu-backdrop"></div>
                            <!-- End Mobile Menu -->
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header-area-end -->


     @yield('content')


        <!-- footer-area -->
        <footer>
            <div class="footer-area gray-bg pt-80 pb-30">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="footer-widget mb-50">
                                <div class="footer-logo mb-25">
                                    <a href="{{url('/')}}"><img src="{{asset('assets/img/logo/logo.png')}}" alt=""></a>
                                </div>
                                <div class="footer-contact-list">
                                    <ul>
                                        <li>
                                            <div class="icon"><i class="flaticon-place"></i></div>
                                            <p>Abidjan Deux-Plateau Vallon</p>
                                        </li>
                                        <li>
                                            <div class="icon"><i class="flaticon-telephone-1"></i></div>
                                            <h5 class="number"><a href="tel:12027993245">+2250768365966</a></h5>
                                        </li>
                                        <li>
                                            <div class="icon"><i class="flaticon-mail"></i></div>
                                         <a href="mail:dstore@gmail.com">  <p>dstore@gmail.com</p></a>
                                        </li>
                                        <li>
                                            <div class="icon"><i class="flaticon-wall-clock"></i></div>
                                            <p>Du Lundi Au Samedi </p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="footer-social">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                            <div class="footer-widget mb-50">
                                <div class="fw-title">
                                    <h5 class="title">Nos Services</h5>
                                </div>
                                <div class="fw-link">
                                    <ul>
                                        <li><a href="shop.html"></a></li>
                                        <li><a href="cart.html">Order Status</a></li>
                                        <li><a href="shop.html">International Shipping</a></li>
                                        <li><a href="checkout.html">Payment Method</a></li>
                                        <li><a href="blog.html">Our Blog</a></li>
                                        <li><a href="terms-conditios.html">Orders and Returns</a></li>
                                        <li><a href="checkout.html">Track Your Orders</a></li>
                                        <li><a href="index.html">Footer Links</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                            <div class="footer-widget mb-50">
                                <div class="fw-title">
                                    <h5 class="title">Liens Utiles</h5>
                                </div>
                                <div class="fw-link">
                                    <ul>
                                        <li><a href="checkout.html">Delivery</a></li>
                                        <li><a href="terms-conditios.html">Legal Notice</a></li>
                                        <li><a href="about-us.html">About us</a></li>
                                        <li><a href="contact.html">Sitemap</a></li>
                                        <li><a href="checkout.html">Track Your Orders</a></li>
                                        <li><a href="index.html">Footer Links</a></li>
                                        <li><a href="terms-conditios.html">Orders and Returns</a></li>
                                        <li><a href="contact.html">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="footer-widget footer-box-widget mb-50">
                                <div class="f-download-wrap">
                                    <div class="fw-title">
                                        <h5 class="title">Download App</h5>
                                    </div>
                                    <div class="download-btns">
                                        <a href="#"><img src="{{asset('assets/img/icon/g_play.png')}}" alt=""></a>
                                        <a href="#"><img src="{{asset('assets/img/icon/app_store.png')}}" alt=""></a>
                                    </div>
                                </div>
                                <div class="f-newsletter">
                                    <div class="fw-title">
                                        <h5 class="title">NewsLetter</h5>
                                    </div>
                                    <form action="#">
                                        <input type="email" placeholder="Email Address">
                                        <button><i class="flaticon-send"></i></button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-wrap">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="copyright-text">
                                <p>Copyright &copy; Tous Droits Reservés à DSTORE MARKET</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="payment-accepted text-center text-md-right">
                                <img src="{{asset('assets/img/images/payment_card.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer-area-end -->





		<!-- JS here -->
        <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
        <script src="{{asset('assets/js/vendor/jquery-3.6.0.min.js')}}"></script>
        <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script>
        <script src="{{asset('assets/js/imagesloaded.pkgd.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery.countdown.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery-ui.min.js')}}"></script>
        <script src="{{asset('assets/js/slick.min.js')}}"></script>
        <script src="{{asset('assets/js/ajax-form.js')}}"></script>
        <script src="{{asset('assets/js/wow.min.js')}}"></script>
        <script src="{{asset('assets/js/aos.js')}}"></script>
        <script src="{{asset('assets/js/plugins.js')}}"></script>
        <script src="{{asset('assets/js/main.js')}}"></script>
        @livewireScripts()
    </body>
</html>
