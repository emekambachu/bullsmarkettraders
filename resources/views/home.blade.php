@extends('layouts.main')

@section('title')
Home
@endsection

@section('content')

    <!-- Banner Area Start-->
    <section class="banner-area banner-slider-2">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">

                    <div class="slide-inner slide-bg-image" data-background="{{ asset('main/img/banner/1.png') }}">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xl-8">
                                    <div class="banner-inner banner-inner-2 text-center">
                                        <p class="text-white">Trade forex, commodities, synthetic and stock indices from a single account</p>
                                        <h1 class="text-white">BullsMarket Traders</h1>
                                        <a class="btn btn-pink" href="{{ url('about') }}">
                                            About us <i class="la la-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end slide-inner -->
                </div>
                <!-- end swiper-slide -->

                <div class="swiper-slide">
                    <div class="slide-inner slide-bg-image" data-background="{{ asset('main/img/banner/1.png') }}">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xl-8">
                                    <div class="banner-inner banner-inner-2 text-center">
                                        <p class="text-white">A trusted destination for traders worldwide, Authorised by FCA, ASIC & FSCA</p>
                                        <h1 class="text-white">Multi-regulated Traders</h1>
                                        <a class="btn btn-pink" href="{{ url('services') }}">
                                            Services <i class="la la-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end slide-inner -->
                </div>
                <!-- end swiper-slide -->
            </div>
            <!-- end swiper-wrapper -->

            <!-- swipper controls -->
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>
    <!-- Banner Area End -->

    <!-- call-to-action-Area Start-->
    <section class="cta-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-9 align-self-center">
                    <h4>Looking for a Best Business Plan Consultant?</h4>
                </div>
                <div class="col-xl-4 col-lg-3 align-self-center text-lg-right">
                    <a class="btn btn-blue" href="{{ url('contact') }}">CONTACT US</a>
                </div>
            </div>
        </div>
    </section>
    <!-- call-to-action-Area End-->

    <!-- service-Area Start-->
    <section class="service-area pd-top-96 pd-bottom-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section-title section-title-2 text-center">
                        <h6 class="sub-title">Services</h6>
                        <h2 class="title">Our Trading Services</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">

                <div class="col-lg-4 col-sm-6">
                    <div class="single-service-wrap">
                        <div class="thumb">
                            <img src="{{ asset('main/img/service/1.png') }}" alt="img">
                        </div>
                        <div class="single-service-details">
                            <h5><a href="">Cryptocurrencies</a></h5>
                            <p>Cryptocurrency is the future and with awesome rates and the best trading team, we help grow your crypto currencies with diversified portfolios across various market.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="single-service-wrap">
                        <div class="thumb">
                            <img src="{{ asset('main/img/service/2.png') }}" alt="img">
                        </div>
                        <div class="single-service-details">
                            <h5><a href="">Forex</a></h5>
                            <p>Options for investing cash including certificates of deposit and the money market funds. With CDs.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="single-service-wrap">
                        <div class="thumb">
                            <img src="{{ asset('main/img/service/3.png') }}" alt="img">
                        </div>
                        <div class="single-service-details">
                            <h5><a href="">Options Trading</a></h5>
                            <p>We offer the best Forex and Options trading services operating closely with an expert team.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center">
                    <a class="btn btn-border-2" href="{{ url('services') }}">SEE ALL SERVICES<i class="la la-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- service-Area End-->

    <!-- industries-Area Start-->
    <section class="industries-area bg-grey-2 pd-top-96 pd-bottom-70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section-title section-title-2 text-center">
                        <h6 class="sub-title">Industries</h6>
                        <h2 class="title">Our Industries Features</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-sm-6">
                    <div class="single-industries-wrap">
                        <div class="media">
                            <div class="thumb">
                                <img src="{{ asset('main/img/industries/1.png') }}" alt="img">
                            </div>
                            <div class="single-industries-details media-body">
                                <a href="#"><i class="fa fa-ellipsis-v float-right"></i></a>
                                <h6><a href="">Constant Progression</a></h6>
                                <p>Interest is applied to your account 24/7. Once it has been added to your account balance, you can either reinvest it to increase your daily profit, or you can withdraw it.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="single-industries-wrap">
                        <div class="media">
                            <div class="thumb">
                                <img src="{{ asset('main/img/industries/1.png') }}" alt="img">
                            </div>
                            <div class="single-industries-details media-body">
                                <a href="#"><i class="fa fa-ellipsis-v float-right"></i></a>
                                <h6><a href="">Unique Platform</a></h6>
                                <p>Our team has developed a unique platform for user-friendly and safe to work with investments.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="single-industries-wrap">
                        <div class="media">
                            <div class="thumb">
                                <img src="{{ asset('main/img/industries/2.png') }}" alt="img">
                            </div>
                            <div class="single-industries-details media-body">
                                <a href="#"><i class="fa fa-ellipsis-v float-right"></i></a>
                                <h6><a href="">Quickly and Instantly</a></h6>
                                <p>You can create your mutual fund</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- industries-Area End-->

    <!-- about-Area Start-->
    <section class="about-area pd-top-96 pd-bottom-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="section-title section-title-2">
                        <h6 class="sub-title">Binary Trading</h6>
                        <h2 class="title"><span>About</span> us</h2>
                    </div>
                </div>
                <div class="col-lg-7 align-self-center">
                    <p>After gaining knowledge and experience for years our mission was apparent, we needed to clear a path for small to mid-sized investors to smarter innovative trading and increased profits. Cryptocurrency market is developing in a rapid pace and is one of promising options of economy.<br>
                        To that end we provide support to our investors with a stable and easy-to-use technology built to manage their investment , from trading to making profits. Margin traders are not left behind in this.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="about-video-wrap">
                        <div class="thumb">
                            <img src="{{ asset('main/img/about/bg.png') }}" alt="img">
                        </div>
                    </div>
                    <div class="about-nav-pills">
                        <ul class="nav nav-pills">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="pill" href="#pills-support">
                                <span class="thumb">
                                    <img src="{{ asset('main/img/about/1.png') }}" alt="img">
                                </span> ONLINE SUPPORT
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#pills-comunication">
                                <span class="thumb">
                                    <img src="{{ asset('main/img/about/2.png') }}" alt="img">
                                </span> BEST COMMUNICATION
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#pills-delivery">
                                <span class="thumb">
                                    <img src="{{ asset('main/img/about/3.png') }}" alt="img">
                                </span> DELIVERY ON TIME
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="pills-support">
{{--                                <h5><a href="#">Every human mind painted in innumerable color</a></h5>--}}
{{--                                <p>Suscipit fringilla quod, ab mus laoreet? Consequuntur hymenaeos, laoreet tempore pharetra tempore, cursus atque, ipsum quisquam voluptates. Dignissim nostra laudantium luctus, ratione, dolores ipsa, magni maxime excepturi?</p>--}}
                                <a class="btn" href="{{ url('about') }}">About us <i class="la la-arrow-right"></i></a>
                            </div>
                            <div class="tab-pane fade" id="pills-comunication">
{{--                                <h5><a href="#">Human mind painted in innumerable color</a></h5>--}}
{{--                                <p>Tempore Suscipit fringilla quod, ab mus laoreet? Consequuntur hymenaeos, laoreet tempore pharetra, cursus atque, ipsum quisquam voluptates. Dignissim nostra laudantium luctus, ratione, dolores ipsa, magni maxime excepturi?</p>--}}
                                <a class="btn" href="{{ url('about') }}">About us <i class="la la-arrow-right"></i></a>
                            </div>
                            <div class="tab-pane fade" id="pills-delivery">
{{--                                <h5><a href="#">Cursus atque, ipsum quisquam voluptates ipsa.</a></h5>--}}
{{--                                <p>Dolores Suscipit fringilla quod, ab mus laoreet? Consequuntur hymenaeos, laoreet tempore pharetra tempore, cursus atque, ipsum quisquam voluptates. Dignissim nostra laudantium luctus, ratione, ipsa, magni maxime excepturi?</p>--}}
                                <a class="btn"
                                   href="{{ url('about') }}">About us <i class="la la-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="message-wrap text-center">
                        <h6 class="title">Get Advisor for consultations</h6>
                        <form class="message-form-wrap">
                            <p>Dapibus voluptatem taciti curtur! Fuga aliquet ad quas justo at ullam </p>
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
                    <div class="about-contact-wrap">
                        <img src="{{ asset('main/img/icon/phone.png') }}" alt="img">
                        <h6>Call Us: +1(631)343-5226</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-Area End-->

    <!-- history-Area Start-->
    <section class="history-area-2 pd-top-96 pd-bottom-70"
             style="background: url({{ asset('main/img/history/bg.png') }});">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title section-title-2 style-white text-center">
                        <h2 class="title">Cryptocurrency Metrics</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-12 col-sm-6">
                    <!-- TradingView Widget BEGIN -->
                    <div class="tradingview-widget-container">
                        <div class="tradingview-widget-container__widget"></div>
                        <div class="tradingview-widget-copyright"></div>
                        <script type="text/javascript"
                                src="https://s3.tradingview.com/external-embedding/embed-widget-screener.js" async>
                            {
                                "width": "100%",
                                "height": "600",
                                "defaultColumn": "overview",
                                "screener_type": "crypto_mkt",
                                "displayCurrency": "USD",
                                "colorTheme": "light",
                                "locale": "en"
                            }
                        </script>
                    </div>
                    <!-- TradingView Widget END -->
                </div>
            </div>
        </div>
    </section>
    <!-- history-Area end-->

    <section class="industries-area bg-grey-2 pd-top-96 pd-bottom-70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section-title section-title-2 text-center">
                        <h6 class="sub-title">Industries</h6>
                        <h2 class="title">Our Industries Features</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">

                @foreach($packages as $package)
                <div class="col-lg-4 col-sm-6">
                    <div class="single-industries-wrap">
                        <div class="media">
                            <div class="thumb">
                                <img src="{{ asset('main/img/industries/1.png') }}" alt="img">
                            </div>
                            <div class="single-industries-details media-body">
                                <a href="#"><i class="fa fa-ellipsis-v float-right" aria-hidden="true"></i></a>
                                <h6 style="color: #002E5B;"><a href="">{{ $package->name }}</a></h6>
                                <div>
                                    @if(!empty($package->min))
                                        <p style="font-size: 18px; color: #DD1C63;">
                                            Minimum: {{ '$'.number_format($package->min) }}</p>
                                    @endif

                                    @if(!empty($package->max))
                                        <p style="font-size: 18px; color: #DD1C63;">
                                            Maximum: {{ '$'.number_format($package->max) }}</p>
                                    @else
                                        <p style="font-size: 18px; color: #DD1C63;">and above</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div>
                            <ul class="" style="list-style: none;">
                                @if(!empty($package->option1))
                                    <li style="font-size: 15px;">{{ $package->option1 }}</li>
                                @endif

                                @if(!empty($package->option2))
                                    <li style="font-size: 15px;">{{ $package->option2 }}</li>
                                @endif

                                @if(!empty($package->option3))
                                    <li style="font-size: 15px;">{{ $package->option3 }}</li>
                                @endif

                                @if(!empty($package->roi))
                                    <li style="font-size: 15px;">{{ $package->roi }}</li>
                                @endif

                                @if(!empty($package->referral_bonus))
                                    <li style="font-size: 15px;">{{ $package->referral_bonus }}% Referral Bonus</li>
                                @endif

                                @if(!empty($package->expert_advice))
                                    <li style="font-size: 15px;">{{ $package->expert_advice }}</li>
                                @endif
                            </ul>
                        </div>
                        <a class="details-btn" href="{{ route('register') }}">Sign up<span>
                            <i class="la la-arrow-right"></i></span>
                        </a>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>

    <!-- gallery-Area Start-->
{{--    <section class="gallery-area pd-top-96 pd-bottom-100">--}}
{{--        <div class="container">--}}
{{--            <div class="row justify-content-center">--}}
{{--                <div class="col-12">--}}
{{--                    <div class="section-title section-title-2 text-center">--}}
{{--                        <h6 class="sub-title">Gallery</h6>--}}
{{--                        <h2 class="title">Working Gallery Case Study</h2>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-12">--}}
{{--                    <div class="isotope-filters gallery-isotope-btn text-center">--}}
{{--                        <button class="button active" data-filter="*">All Cases</button>--}}
{{--                        <button class="button" data-filter=".cat-1">Consulting</button>--}}
{{--                        <button class="button" data-filter=".cat-2">Business</button>--}}
{{--                        <button class="button" data-filter=".cat-3">Analysis</button>--}}
{{--                        <button class="button" data-filter=".cat-4">Finance </button>--}}
{{--                        <button class="button" data-filter=".cat-5">Marketing</button>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!-- start-project-section -->--}}
{{--            <div class="gallery-section">--}}
{{--                <div class="gallery-isotope row">--}}
{{--                    <div class="gallery-sizer col-1"></div>--}}
{{--                    <!-- gallery item start here -->--}}
{{--                    <div class="gallery-item col-lg-4 col-sm-6 cat-1 cat-3 cat-5">--}}
{{--                        <div class="gallery-single-wrap">--}}
{{--                            <div class="thumb">--}}
{{--                                <img src="{{ asset('main/img/gallery/1.png') }}" alt="image">--}}
{{--                                <a class="gallery-fancybox" href="{{ asset('main/img/gallery/1.png') }}" data-fancybox="video">--}}
{{--                                <span class="full-screen">--}}
{{--                                    <img src="{{ asset('main/img/icon/full-screen.png') }}" alt="icon">--}}
{{--                                </span>--}}
{{--                                </a>--}}
{{--                                <span>WEB ANALYTICS</span>--}}
{{--                            </div>--}}
{{--                            <div class="gallery-details">--}}
{{--                                <h6><a href="">Business Consulting</a></h6>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="gallery-item col-lg-4 col-sm-6 cat-3 cat-4">--}}
{{--                        <div class="gallery-single-wrap">--}}
{{--                            <div class="thumb">--}}
{{--                                <img src="{{ asset('main/img/gallery/2.png') }}" alt="image">--}}
{{--                                <a class="gallery-fancybox" href="{{ asset('main/img/gallery/2.png') }}" data-fancybox="video">--}}
{{--                                <span class="full-screen">--}}
{{--                                    <img src="{{ asset('main/img/icon/full-screen.png') }}" alt="icon">--}}
{{--                                </span>--}}
{{--                                </a>--}}
{{--                                <span>MAR ANALYTICS</span>--}}
{{--                            </div>--}}
{{--                            <div class="gallery-details">--}}
{{--                                <h6><a href="">Marketing Consulting</a></h6>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="gallery-item col-lg-4 col-sm-6 cat-3 cat-2 cat-5">--}}
{{--                        <div class="gallery-single-wrap">--}}
{{--                            <div class="thumb">--}}
{{--                                <img src="{{ asset('main/img/gallery/3.png') }}" alt="image">--}}
{{--                                <a class="gallery-fancybox" href="{{ asset('main/img/gallery/3.png') }}" data-fancybox="video">--}}
{{--                                <span class="full-screen">--}}
{{--                                    <img src="{{ asset('main/img/icon/full-screen.png') }}" alt="icon">--}}
{{--                                </span>--}}
{{--                                </a>--}}
{{--                                <span>FIN ANALYTICS</span>--}}
{{--                            </div>--}}
{{--                            <div class="gallery-details">--}}
{{--                                <h6><a href="">Finance Consulting</a></h6>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="gallery-item col-lg-4 col-sm-6 cat-3 cat-4 cat-1">--}}
{{--                        <div class="gallery-single-wrap">--}}
{{--                            <div class="thumb">--}}
{{--                                <img src="{{ asset('main/img/gallery/4.png') }}" alt="image">--}}
{{--                                <a class="gallery-fancybox" href="{{ asset('main/img/gallery/4.png') }}" data-fancybox="video">--}}
{{--                                <span class="full-screen">--}}
{{--                                    <img src="{{ asset('main/img/icon/full-screen.png') }}" alt="icon">--}}
{{--                                </span>--}}
{{--                                </a>--}}
{{--                                <span>TAX ANALYTICS</span>--}}
{{--                            </div>--}}
{{--                            <div class="gallery-details">--}}
{{--                                <h6><a href="">Tax & Vat Consulting</a></h6>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="gallery-item col-lg-4 col-sm-6 cat-2 cat-1 cat-5">--}}
{{--                        <div class="gallery-single-wrap">--}}
{{--                            <div class="thumb">--}}
{{--                                <img src="{{ asset('main/img/gallery/5.png') }}" alt="image">--}}
{{--                                <a class="gallery-fancybox" href="{{ asset('main/img/gallery/5.png') }}"--}}
{{--                                   data-fancybox="video">--}}
{{--                                <span class="full-screen">--}}
{{--                                    <img src="{{ asset('main/img/icon/full-screen.png') }}" alt="icon">--}}
{{--                                </span>--}}
{{--                                </a>--}}
{{--                                <span>HR ANALYTICS</span>--}}
{{--                            </div>--}}
{{--                            <div class="gallery-details">--}}
{{--                                <h6><a href="">HR Consulting</a></h6>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="gallery-item col-lg-4 col-sm-6 cat-1 cat-4 cat-2">--}}
{{--                        <div class="gallery-single-wrap">--}}
{{--                            <div class="thumb">--}}
{{--                                <img src="{{ asset('main/img/gallery/6.png') }}" alt="image">--}}
{{--                                <a class="gallery-fancybox" href="{{ asset('main/img/gallery/6.png') }}" data-fancybox="video">--}}
{{--                                    <span class="full-screen"><img src="{{ asset('main/img/icon/full-screen.png') }}" alt="icon"></span>--}}
{{--                                </a>--}}
{{--                                <span>ACC ANALYTICS</span>--}}
{{--                            </div>--}}
{{--                            <div class="gallery-details">--}}
{{--                                <h6><a href="">Account Consulting</a></h6>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!-- project section End -->--}}
{{--            <div class="row">--}}
{{--                <div class="col-12 text-center">--}}
{{--                    <a class="btn btn-border-2" href="">SEE ALL PROJECT <i class="la la-arrow-right"></i></a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <!-- gallery-Area End-->

    <!-- client-Area Start-->
    <section class="client-area text-center pd-top-88 pd-bottom-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="section-title section-title-2 text-center">
                        <h2 class="title">We are Working Many Clients World Wide</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="client-slider owl-carousel owl-theme">
                        <div class="item">
                            <div class="single-client-wrap">
                                <div class="thumb">
                                    <a href="#">
                                        <img src="{{ asset('images/partners/cl-logo1.png') }}" alt="img">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="single-client-wrap">
                                <div class="thumb">
                                    <a href="#">
                                        <img src="{{ asset('images/partners/cl-logo2.png') }}" alt="img">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="single-client-wrap">
                                <div class="thumb">
                                    <a href="#">
                                        <img src="{{ asset('images/partners/cl-logo3.png') }}" alt="img">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="single-client-wrap">
                                <div class="thumb">
                                    <a href="#">
                                        <img src="{{ asset('images/partners/cl-logo4.png') }}" alt="img">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="single-client-wrap">
                                <div class="thumb">
                                    <a href="#">
                                        <img src="{{ asset('images/partners/cl-logo5.png') }}" alt="img">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="more-client-info">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="single-client-info">
                                    <h1 class="client-count">
                                        <span class="counter">23</span>
                                        <span>+</span>
                                    </h1>
                                    <h4>Countries</h4>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 align-self-center">
                                <div class="single-client-info media">
                                    <div class="thumb">
                                        <img src="{{ asset('main/img/client/icon1.png') }}" alt="img">
                                    </div>
                                    <div class="media-body align-self-center">
                                        <h5>Business Responsibility</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 align-self-center">
                                <div class="single-client-info media">
                                    <div class="thumb">
                                        <img src="{{ asset('main/img/client/icon2.png') }}" alt="img">
                                    </div>
                                    <div class="media-body align-self-center">
                                        <h5>Online <br> 100% Security</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- client-Area End-->

    <!-- helping-Area Start-->
    <section class="helping-area pd-top-88 pd-bottom-100"
             style="background: url({{ asset('main/img/help/bg.png') }});">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="help-wrap text-center">
                        <h3>How Can We Help You?</h3>
                        <div class="row justify-content-center">
                            <div class="col-lg-6">
                                <div class="single-subscribe-wrap">
                                    <input type="text" placeholder="Email address">
                                    <button class="btn btn-pink">SEND US</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- helping-Area End-->

    <!-- testimonial-Area Start-->
    <section class="testimonial-area testimonial-area-2 pd-top-96 pd-bottom-96">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title section-title-2 text-center">
                        <h6 class="sub-title">Satisfied Clients</h6>
                        <h2 class="title">Media</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="testimonial-slider owl-carousel owl-theme">

                        <div class="item">
                            <div class="testimonial-wrap-2">
                                <div class="thumb">
                                    <img src="{{ asset('images/testimonial/aljazeera.png') }}" alt="img">
                                    <span><i class="fa fa-quote-right"></i></span>
                                </div>
                                <div class="testimonial-wrap-details">
                                    <div class="rating-wrap text-right">
                                        <i class="la la-star-half-o"></i>
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                    </div>
                                    <h6>Aljazeera Finance, 2019</h6>
                                    <p>BullsMarket Traders Financial performance continues to rise against the market's down trend. They have proven to have a solid plan for investors.</p>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="testimonial-wrap-2">
                                <div class="thumb">
                                    <img src="{{ asset('images/testimonial/cnbc.png') }}" alt="img">
                                    <span><i class="fa fa-quote-right"></i></span>
                                </div>
                                <div class="testimonial-wrap-details">
                                    <div class="rating-wrap text-right">
                                        <i class="la la-star-half-o"></i>
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                        <i class="la la-star"></i>
                                    </div>
                                    <h6>CNBC International</h6>
                                    <p>Phoenix Binary Investors achieve 43% returns in revenue from Stocks, Cryptocurrencies and Forex Trading.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial-Area End-->

    <!-- blog-Area Start-->
    <section class="blog-area bg-grey pd-top-96 pd-bottom-96">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title section-title-2 text-center">
                        <h6 class="sub-title">What's news</h6>
                        <h2 class="title">Get Update From Our Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <!-- 24-7 Press Release Newswire Landing Page Widget Code Starts Here --> <script type="text/javascript" src="https://news.24-7pressrelease.com/247pr-news-widget.js?widgettitle=Cryptocurrency News&amp;categories=489,&amp;showRelease=1&amp;width=auto&amp;headlinebold=1&amp;headlinesonly=0&amp;headlinecolor=f7921a&amp;briefcolor=666666&amp;textcolor=333333&amp;typeface=arial&amp;fontsize=11&amp;width=auto&amp;headlinesepstyle=dotted&amp;showimages=1&amp;numstories=5&amp;bgcolor=ffffff&amp;urldest=247pr"></script> <!-- 24-7 Press Release Newswire Landing Page Widget Code Ends Here -->
                </div>
            </div>
        </div>
    </section>
    <!-- blog-Area End-->
@endsection
