<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - Bulls Market Traders</title>
    <!-- favicon -->
    <link rel=icon href="{{ asset('bullsmarket_logoonly.png') }}" sizes="20x20" type="image/png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ asset('main/css/vendor.css') }}">
    <link rel="stylesheet" href="{{ asset('main/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('main/css/responsive.css') }}">

    @yield('top-assets')

</head>

<body>

<!-- preloader area start -->
<div class="preloader" id="preloader">
    <div class="preloader-inner">
        <div class="spinner">
            <div class="dot1"></div>
            <div class="dot2"></div>
        </div>
    </div>
</div>
<div class="body-overlay" id="body-overlay"></div>
<!-- preloader area end -->

<!-- search popup area start -->
<div class="search-popup" id="search-popup">
    <form action="" class="search-form">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Search.....">
        </div>
        <button type="submit" class="submit-btn"><i class="fa fa-search"></i></button>
    </form>
</div>
<!-- //. search Popup -->

<!-- topbar area start -->
<div class="topbar-area topbar-area-2">
    <div class="container">
        <div class="row">
            <div class="col-sm-2 align-self-center">
                <div id="google_translate_element"></div>
            </div>
            <div class="col-md-7 col-sm-10 align-self-center">
                <div class="topbar-content text-lg-right">
                    <span><i class="fa fa-map-marker-alt" aria-hidden="true"></i>04 Tuesday 2020, New York USA </span>
                    <span class="mr-0">
                        <img src="{{ asset('main/img/icon/timer-p.png') }}" alt="icon">Mon - Sat: 9am-5pm</span>
                </div>
            </div>
            <div class="col-md-3 align-self-center d-none d-lg-block">
                <div class="topbar-content topbar-contact text-lg-right">
                    <span class="mr-0">Call Us - +1(631)343-5226</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- topbar area end -->

<!-- navbar start -->
<div class="navbar-area navbar-area-2">
    <nav class="navbar navbar-expand-lg">
        <div class="container nav-container">
            <div class="navbar-inner">
                <div class="responsive-mobile-menu">
                    <button class="menu toggle-btn d-block d-lg-none" data-target="#themefie_main_menu" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-left"></span>
                        <span class="icon-right"></span>
                    </button>
                </div>
                <div class="logo">
                    <a class="main-logo" href="{{ url('/') }}">
                        <img src="{{ asset('bullsmarket_logo.png') }}" alt="img"></a>
                </div>
                <div class="nav-right-part nav-right-part-mobile">
                    <a class="search header-search" href="#"><i class="fa fa-search"></i></a>
                </div>
                <div class="collapse navbar-collapse" id="themefie_main_menu">
                    <ul class="navbar-nav menu-open">
                        <li>
                            <a href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="menu-item-has-children current-menu-item">
                            <a href="#">Company</a>
                            <ul class="sub-menu">
                                <li><a href="{{ url('about') }}">About us</a></li>
                                <li><a href="{{ url('terms') }}">Terms and Conditions</a></li>
                                <li><a href="{{ url('legal') }}">Legal</a></li>
{{--                                <li><a href="{{ url('faq') }}">FAQ</a></li>--}}
                            </ul>
                        </li>
                        <li>
                            <a href="{{ url('services') }}">Services</a>
                        </li>
                        <li>
                            <a href="{{ url('contact') }}">Contact</a>
                        </li>
                        <li>
                            <a style="color: #DD1C63;" href="{{ route('register') }}">Sign up</a>
                        </li>
                        <li>
                            <a style="color: #DD1C63;" href="{{ route('login') }}">Login</a>
                        </li>
                    </ul>
                </div>
                <div class="nav-right-part nav-right-part-desktop">
                    <ul>
                        <li class="">
                            <ul class="social-area text-center">
                                <li><a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-google" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <script type="text/javascript"
            src="https://files.coinmarketcap.com/static/widget/coinMarquee.js"></script>
    <div id="coinmarketcap-widget-marquee" coins="1,1027,825,1839,2010,52" currency="USD"
         theme="dark" transparent="false" show-symbol-logo="true">
    </div>
</div>
<!-- navbar end -->

@yield('content')

<!-- footer area start -->
<footer class="footer-area footer-area-2" style="background: url({{ asset('main/img/footer/bg-2.png') }});">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-8">
                <div class="footer-widget widget widget_category">
                    <h4 class="widget-title">Popular Categories</h4>
                    <div class="footer-subscribe-wrap">
                        <h6><img src="{{ asset('main/img/icon/envelope.png') }}" alt="img">Newsletter</h6>
                        <div class="single-subscribe-wrap">
                            <input type="text" placeholder="Email address">
                            <button class="btn btn-pink">Subscribe</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-5">
                <div class="footer-widget widget widget_info">
                    <h4 class="widget-title">Information</h4>
                    <p><i class="fa fa-map-marker-alt"></i>Location <br> 454 read, 36 Floor <br> New York, USA</p>
                    <p class="phone"><i class="fa fa-phone-alt"></i>+1(631)343-5226</p>
                    <p class="email"><i class="fa fa-envelope"></i>info@bullsmarkettraders.com</p>
                </div>
            </div>

            <div class="col-xl-4 col-md-6 col-sm-7">
                <div class="message-wrap text-center">
                    <h6 class="title">Request a Callback</h6>
                    <form class="message-form-wrap">
                        <div class="single-input-wrap input-group">
                            <label>FULL NAME</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="single-input-wrap input-group">
                            <label>EMAIL ADDRESS</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="single-input-wrap input-group">
                            <label>WRITE SOMETHING</label>
                            <textarea class="form-control" rows="4" name="note"></textarea>
                        </div>
                        <div class="submit-area text-center">
                            <button type="submit" class="btn btn-pink w-100">SEND YOUR MESSAGE</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</footer>
<!-- footer area end -->

<!-- footer area start -->
<div class="footer-content-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-8">
                <div class="media">
                    <img src="{{ asset('bullsmarket_logo.png') }}" alt="img">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- footer area end -->

<!--Footer bottom-->
<div class="footer-bottom footer-bottom-2">
    <div class="container">
        <div class="copyright-area">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <p>@CopyRight All right {{ date('Y') }}. Bulls Market Traders</p>
                </div>
                <div class="col-md-4 text-md-right">
                    <ul class="social-area social-area-2">
                        <li>
                            <a href="#">
                                <img src="{{ asset('main/img/icon/instagram.png') }}" alt="img">
                            </a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="#"><img src="{{ asset('main/img/icon/dribbble.png') }}" alt="img"></a>
                        </li>
                        <li><a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Footer bottom-->

<!-- back to top area start -->
<div class="back-to-top">
    <span class="back-top"><i class="fa fa-angle-up"></i></span>
</div>
<!-- back to top area end -->


<!-- all plugins here -->
<script src="{{ asset('main/js/vendor.js') }}"></script>
<!-- main js  -->
<script src="{{ asset('main/js/main.js') }}"></script>

@yield('bottom-assets')

<script src="//code.tidio.co/te41kel09g3ykbnw3jhbddjjzihmchen.js" async></script>

<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
    }
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</body>

</html>
