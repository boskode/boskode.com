<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=DM+Sans:300,400,700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
<div id="app">
    <div class="site-wrap" id="home-section">
        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>

        <header class="site-navbar site-navbar-target" role="banner">
            <div class="container mb-3">
                <div class="d-flex align-items-center">
                    <div class="site-logo mr-auto">
                        <a href="{{ route('home') }}">{{ config('app.name') }}.com<span class="text-primary">.</span></a>
                    </div>
                    <div class="site-quick-contact d-none d-lg-flex ml-auto ">
                        <div class="d-flex site-info align-items-center mr-5">
                            <span class="block-icon mr-3"><span class="icon-map-marker"></span></span>
                            <span>34 Street Name, City Name Here, <br> United States</span>
                        </div>
                        <div class="d-flex site-info align-items-center">
                            <span class="block-icon mr-3"><span class="icon-clock-o"></span></span>
                            <span>Sunday - Friday 8:00AM - 4:00PM <br> Saturday CLOSED</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="menu-wrap d-flex align-items-center">
                    <span class="d-inline-block d-lg-none">
                        <a href="#" class="text-black site-menu-toggle js-menu-toggle py-5">
                            <span class="icon-menu h3 text-black"></span>
                        </a>
                    </span>
                    <nav class="site-navigation text-left mr-auto d-none d-lg-block" role="navigation">
                        <ul class="site-menu main-menu js-clone-nav mr-auto ">
                            <li class="active"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
                            <li><a href="services.html" class="nav-link">Services</a></li>
                            <li><a href="projects.html" class="nav-link">Projects</a></li>
                            <li><a href="about.html" class="nav-link">About</a></li>
                            <li><a href="blog.html" class="nav-link">Blog</a></li>
                            <li><a href="contact.html" class="nav-link">Contact</a></li>
                        </ul>
                    </nav>
                    <div class="top-social ml-auto">
                        <a href="#"><span class="icon-facebook"></span></a>
                        <a href="#"><span class="icon-twitter"></span></a>
                        <a href="#"><span class="icon-linkedin"></span></a>
                    </div>
                </div>
            </div>
        </header>

        <div class="ftco-blocks-cover-1">
            <div class="site-section-cover overlay" data-stellar-background-ratio="0.5"
                 style="background-image: url('{{ asset('images/hero_1.jpg') }}')">
                <div class="container">
                    <div class="row align-items-center ">
                        <div class="col-md-5 mt-5 pt-5">
                            <h1 class="mb-3">Digital Agency with Excellent Services.</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta veritatis in tenetur
                                doloremque, maiores doloribus officia iste. Dolores.</p>
                            <p class="mt-5"><a href="#" class="btn btn-primary">About Us</a></p>
                        </div>
                        <div class="col-md-6 ml-auto">
                            <div class="white-dots">
                                <img src="{{ asset('images/img_2.jpg') }}" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @yield('content')

        <footer class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <h2 class="footer-heading mb-3">About Us</h2>
                        <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and
                            Consonantia, there live the blind texts.</p>
                        <h2 class="footer-heading mb-4">Newsletter</h2>
                        <form action="#" class="d-flex subscribe">
                            <input aria-label="email" type="text" class="form-control mr-3" placeholder="Email">
                            <input type="submit" value="Send" class="btn btn-primary">
                        </form>
                    </div>
                    <div class="col-lg-8 ml-auto">
                        <div class="row">
                            <div class="col-lg-4 ml-auto">
                                <h2 class="footer-heading mb-4 mt-md-0 mt-4">Navigation</h2>
                                <ul class="list-unstyled">
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Testimonials</a></li>
                                    <li><a href="#">Terms of Service</a></li>
                                    <li><a href="#">Privacy</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-4">
                                <h2 class="footer-heading mb-4">Navigation</h2>
                                <ul class="list-unstyled">
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Testimonials</a></li>
                                    <li><a href="#">Terms of Service</a></li>
                                    <li><a href="#">Privacy</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row pt-5 mt-5 text-center">
                    <div class="col-md-12">
                        <div class="border-top pt-5">
                            <p>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;{{ now()->year }}
                                All rights reserved | This template is made with <i class="icon-heart text-danger"
                                                                                    aria-hidden="true"></i> by <a
                                    href="https://colorlib.com" target="_blank" rel="nofollow">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/jquery.stellar.js') }}"></script>
<script type="text/javascript">
  $(window).stellar({
    horizontalScrolling: false,
    responsive: true
  });
</script>
</body>
</html>
