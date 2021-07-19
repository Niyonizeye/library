
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>{{ config('app.name', 'Laravel') }}</title>

	<link rel='stylesheet' id='bootstrap-css' href='bootstrap-4.0.0/css/bootstrap.min.css' type='text/css' media='all' />

	<link rel='stylesheet' id='font-awesome-css' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css' type='text/css' media='all' />

	<link rel='stylesheet' id='google-fonts-css' href='https://fonts.googleapis.com/css?family=Lato%3A300%2C400%2C700%2C900&#038;subset=latin%2Clatin-ext' type='text/css' media='all' />
	
    <link rel='stylesheet' id='owl-carousel-css' href='{{ asset('bootstrap-4.0.0/css/owl.carousel.min.css')}}' type='text/css' media='all' />

	<link rel='stylesheet' id='fancybox-css-css' href='{{ asset('bootstrap-4.0.0/css/jquery.fancybox.min.css')}}' type='text/css' media='all' />
	
    <link rel='stylesheet' id='meetupevent-style-css' href='{{ asset('bootstrap-4.0.0/css/style.css')}}' type='text/css' media='all' />

	<link rel="stylesheet" href="{{ asset('style.css') }}">

    <script type='text/javascript' src='{{ asset('bootstrap-4.0.0/js/jquery.js')}}'></script>

	<script type='text/javascript' src='{{ asset('bootstrap-4.0.0/js/jquery-migrate.min.js')}}'></script>

</head>

<body class="home page-template page-template-tmpl-frontpage page-template-tmpl-frontpage-php page page-id-5">

<div id="page" class="site">

    <header id="masthead" class="site-header">

        <div class="container main-header-container">

            <div class="site-branding" style="line-height: 60px;">

                <a href="/" class="logo-link" rel="home" target="_self"> Library Management System</a>

                {{-- <a href="/" class="logo-link" rel="home" target="_self"><img src="images/logolibrary.png" alt="logo" /></a> --}}

            </div>

            <nav id="site-navigation" class="main-navigation" data-el="aria">

                <ul id="mastmenu" class="nav primary-menu">
                    <li id="menu-item-297" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-297"><a href="/">Home</a></li>

                    <li id="menu-item-39" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-39"><a href="#about">About library</a></li>

                    <li class="menu-item menu-item-type-custom menu-item-object-custom">

                        <a  href="{{ route('home') }}">{{ __('Books') }}</a>
                    </li>

                    <li id="menu-item-122" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-122"><a href="#contact">Contact</a></li>

                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))

                            <li class="menu-item menu-item-type-custom menu-item-object-custom">

                                <a  href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))

                            <li class="menu-item menu-item-type-custom menu-item-object-custom">

                                <a href="{{ route('register') }}">{{ __('Register') }}</a>
                                
                            </li>

                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" style="width: 100px"  href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </nav>
            <nav id="site-nav-tools" class="site-nav-tools">
                <button class="menu-toggle" aria-controls="site-navigation" aria-expanded="false" data-el="aria">
                <span class="screen-reader-text">Primary Menu</span>
                <span class="menu-icon"></span>
            </button>
            </nav>
        </div>
    </header>

 @yield('content')

<section id="contact" class="section contact-section" data-eltype="frontpagesection">
    <div class="content-section-contact">
        <div class="container">
            <div class="row">
                <div class="section-inner col-md-6">
                    <div class="section-header">
                        <h3 class="section-title">Library Location</h3>
                        <div class="section-info">
                            <p><a href="mailto:">info@library.com </a></p>
                            
                                <span class="small">kigali, NYARUGENGE</span>
                        </div>
                    </div>
                    <div class="section-content">
                        <div class="wpcf7" id="wpcf7-f130-p5-o1">
                            <div class="screen-reader-response"></div>
                            <form method="post" class="wpcf7-form">
                                <div class="form-content">
                                    <div class="row">
                                        <div class="col-12 col-lg-6">
                                            <span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Your Name" required/></span>
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Your Email Address" required/></span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <span class="wpcf7-form-control-wrap message"><textarea name="message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Type your Message"></textarea></span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <input type="submit" value="Contact for ticket bookings" class="wpcf7-form-control wpcf7-submit" />
                                        </div>
                                    </div>
                                </div>
                                <div class="wpcf7-response-output wpcf7-display-none"></div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="gmap-col col-md-6" data-role="image-box" data-position="last">
                    <div class="contact-map" data-role="image">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3806.8802434873924!2d78.34407571532005!3d17.417533888060586!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb9478ef706b2b%3A0xe8ee71e36c4b2857!2sWaverock%2C+Rd+Number+2%2C+Financial+District%2C+Nanakramguda%2C+Hyderabad%2C+Telangana+500032!5e0!3m2!1sen!2sin!4v1565329506142!5m2!1sen!2sin" width="700" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</main>
</div>
</div>
    <footer id="colophon" class="site-footer text-center">
        <div class="footer-bottom">
            <div class="container">
                <div class="footer-menu-container">
                    <ul id="footer-menu" class="footer-menu">
                        <li id="menu-item-323" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-323"><a href="#hero">Home</a></li>
                        <li id="menu-item-83" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-83"><a href="#about">about The Library</a></li>
                        <li id="menu-item-325" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-325"><a href="#contact">Contact Us</a></li>
                    </ul>
                </div>
                <div class="site-info">
                    <p>&copy; 2021. All RIghts Reserved. RWAMUHIZI JAMES. Designed &amp; Developed by <a href="#" target="_blank" rel="noopener">RWAMUHIZI JAMES</a></p>
                </div>
            </div>
        </div>
    </footer>
    <a href="javascript:void(0)" class="back-to-top" data-eltype="totopbtn">
    <span class="screen-reader-text">Back to top</span>
    <i class="fa fa-angle-up"></i>
</a>
</div>
<script type='text/javascript' src='{{ asset('bootstrap-4.0.0/js/poper.js')}}'></script>
<script type='text/javascript' src='{{ asset('bootstrap-4.0.0/js/bootstrap.min.js')}}'></script>
<script type='text/javascript' src='{{ asset('bootstrap-4.0.0/js/jquery.fancybox.min.js')}}'></script>
<script type='text/javascript' src='{{ asset('bootstrap-4.0.0/js/owl.carousel.min.js')}}'></script>
<script type='text/javascript' src='{{ asset('bootstrap-4.0.0/js/slick.min.js')}}'></script>
<script type='text/javascript' src='{{ asset('bootstrap-4.0.0/js/script.min.js')}}'></script>
<script type='text/javascript' src='{{ asset('bootstrap-4.0.0/js/function.js')}}'></script>
</body>

</html>
    
