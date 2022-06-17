<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge" /><![endif]-->
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width,initial-scale=1"><!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" href="{{asset('apple-touch-icon.png')}}">
    <link rel="icon" href="favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,300,400,500,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Caveat" rel="stylesheet">
    <title>Desarrollo Web Creamos aplicaciones web a la medida</title><!-- themeforest:css -->
    <link rel="stylesheet" href="{{asset('css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('css/aos.css')}}">
    <link rel="stylesheet" href="{{asset('css/cookieconsent.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('css/odometer-theme-minimal.css')}}">
    <link rel="stylesheet" href="{{asset('css/prism-okaidia.css')}}">
    <link rel="stylesheet" href="{{asset('css/simplebar.css')}}">
    <link rel="stylesheet" href="{{asset('css/smart_wizard_all.css')}}">
    <link rel="stylesheet" href="{{asset('css/swiper-bundle.css')}}">
    <link rel="stylesheet" href="{{asset('css/dashcore.css')}}">
    <link rel="stylesheet" href="{{asset('css/rtl.css')}}">
    <link rel="stylesheet" href="{{asset('css/demo.css')}}">
    <link rel="stylesheet" href="{{asset('css/estilos.css')}}">
    @livewireStyles




    <!-- endinject -->
</head>

<body>


    <!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
    <!-- ./Making stripe menu navigation -->



    <nav class="st-nav navbar main-nav navigation fixed-top" id="main-nav">
        <div class="container">
            <ul class="st-nav-menu nav navbar-nav">
                <li class="st-nav-section nav-item"><a href="#main" class="navbar-brand"><img src="{{asset('img/logo.png')}}" alt="Dashcore" class="logo logo-sticky d-inline-block d-md-none"> <img src="img/logo-light.png" alt="Dashcore" class="logo d-none d-md-inline-block"></a></li>
                <li class="st-nav-section st-nav-primary nav-item">
                    <a class="st-root-link nav-link" href="{{route('home')}}">Home</a>
                    <a class="st-root-link item-products st-has-dropdown nav-link" data-dropdown="blocks">Blocks</a>
                    <a class="st-root-link item-products st-has-dropdown nav-link" data-dropdown="pages">Pages</a>
                    <a class="st-root-link item-company st-has-dropdown nav-link" data-dropdown="components">UI Components</a>
                    <a class="st-root-link item-blog nav-link" href="{{route('blog')}}">Blog</a>
                    <a class="st-root-link item-shop st-has-dropdown nav-link" href="#contactenos" data-dropdown="shop">Contactenos</a></li>



                    @if (Route::has('login'))

        |               <li class="st-nav-section st-nav-secondary nav-item">
                            @auth
                                <a class="btn btn-rounded btn-outline me-3 px-3" href="{{ url('/dashboard') }}">
                                    <i class="fas fa-sign-in-alt d-none d-md-inline me-md-0 me-lg-2"></i>
                                    <span class="d-md-none d-lg-inline">Dashboard</span>
                                </a>
                            @else
                                <a class="btn btn-rounded btn-outline me-3 px-3" href="{{ route('login') }}" >
                                    <i class="fas fa-sign-in-alt d-none d-md-inline me-md-0 me-lg-2"></i>
                                    <span class="d-md-none d-lg-inline">Ingresar</span>
                                </a>
                                @if (Route::has('register'))
                                    <a class="btn btn-rounded btn-solid px-3" href="{{ route('register') }}">
                                        <i class="fas fa-user-plus d-none d-md-inline me-md-0 me-lg-2"></i>
                                        <span class="d-md-none d-lg-inline">Registrarse</span>
                                    </a>
                                @endif
                            @endif

                        </li>
                    @endif





                <li class="st-nav-section st-nav-mobile nav-item"><button class="st-root-link navbar-toggler" type="button"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button>
                    <div class="st-popup">
                        <div class="st-popup-container"><a class="st-popup-close-button">Close</a>
                            <div class="st-dropdown-content-group">
                                <h4 class="text-uppercase regular">Pages</h4><a class="regular text-primary" href="about.html"><i class="far fa-building me-2"></i> About </a><a class="regular text-success" href="contact.html"><i class="far fa-envelope me-2"></i> Contact </a><a class="regular text-warning" href="pricing.html"><i class="fas fa-hand-holding-usd me-2"></i> Pricing </a><a class="regular text-info" href="faqs.html"><i class="far fa-question-circle me-2"></i> FAQs</a>
                            </div>
                            <div class="st-dropdown-content-group border-top bw-2">
                                <h4 class="text-uppercase regular">Components</h4>
                                <div class="row">
                                    <div class="col me-4"><a target="_blank" href="components/alert.html">Alerts</a> <a target="_blank" href="components/badge.html">Badges</a> <a target="_blank" href="components/button.html">Buttons</a> <a target="_blank" href="components/color.html">Colors</a> <a target="_blank" href="components/accordion.html">Accordion</a> <a target="_blank" href="components/cookie-law.html">Cookielaw</a></div>
                                    <div class="col me-4"><a target="_blank" href="components/overlay.html">Overlay</a> <a target="_blank" href="components/progress.html">Progress</a> <a target="_blank" href="components/lightbox.html">Lightbox</a> <a target="_blank" href="components/tab.html">Tabs</a> <a target="_blank" href="components/tables.html">Tables</a> <a target="_blank" href="components/typography.html">Typography</a></div>
                                </div>
                            </div>
                            <div class="st-dropdown-content-group bg-light b-t"><a href="login.html">Sign in <i class="fas fa-arrow-right"></i></a></div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="st-dropdown-root">
            <div class="st-dropdown-bg">
                <div class="st-alt-bg"></div>
            </div>
            <div class="st-dropdown-arrow"></div>
            <div class="st-dropdown-container">
                <div class="st-dropdown-section" data-dropdown="blocks">
                    <div class="st-dropdown-content">
                        <div class="st-dropdown-content-group">
                            <div class="row">
                                <div class="col me-4"><a class="dropdown-item" target="_blank" href="blocks/call-to-action.html">Call to actions</a> <a class="dropdown-item" target="_blank" href="blocks/contact.html">Contact</a> <a class="dropdown-item" target="_blank" href="blocks/counter.html">Counters</a> <a class="dropdown-item" target="_blank" href="blocks/faqs.html">FAQs</a></div>
                                <div class="col me-4"><a class="dropdown-item" target="_blank" href="blocks/footer.html">Footers</a> <a class="dropdown-item" target="_blank" href="blocks/form.html">Forms</a> <a class="dropdown-item" target="_blank" href="blocks/navbar.html">Navbar</a> <a class="dropdown-item" target="_blank" href="blocks/navigation.html">Navigation</a></div>
                                <div class="col"><a class="dropdown-item" target="_blank" href="blocks/pricing.html">Pricing</a> <a class="dropdown-item" target="_blank" href="blocks/slider.html">Sliders</a> <a class="dropdown-item" target="_blank" href="blocks/team.html">Team</a> <a class="dropdown-item" target="_blank" href="blocks/testimonial.html">Testimonials</a></div>
                            </div>
                        </div>
                        <div class="st-dropdown-content-group">
                            <h3 class="link-title"><i class="fas fa-long-arrow-alt-right icon"></i> Coming soon</h3>
                            <div class="ms-5"><span class="dropdown-item text-secondary">Dividers </span><span class="dropdown-item text-secondary">Gallery </span><span class="dropdown-item text-secondary">Screenshots</span></div>
                        </div>
                    </div>
                </div>
                <div class="st-dropdown-section" data-dropdown="pages">
                    <div class="st-dropdown-content">
                        <div class="st-dropdown-content-group">
                            <div class="mb-4">
                                <h3 class="text-darker light text-nowrap"><span class="bold regular">Useful pages</span> you'll need</h3>
                                <p class="text-secondary mt-0">Get a complete design stack</p>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <ul class="me-4">
                                        <li>
                                            <h4 class="text-uppercase regular">Error</h4>
                                        </li>
                                        <li><a target="_blank" href="403.html">403 Error</a></li>
                                        <li><a target="_blank" href="404.html">404 Error</a></li>
                                        <li><a target="_blank" href="500.html">500 Error</a></li>
                                    </ul>
                                </div>
                                <div class="col">
                                    <ul class="me-4">
                                        <li>
                                            <h4 class="text-uppercase regular">User</h4>
                                        </li>
                                        <li><a target="_blank" href="login.html">Login</a></li>
                                        <li><a target="_blank" href="register.html">Register</a></li>
                                        <li><a target="_blank" href="forgot.html">Forgot</a></li>
                                    </ul>
                                </div>
                                <div class="col">
                                    <ul>
                                        <li>
                                            <h4 class="text-uppercase regular">Extra</h4>
                                        </li>
                                        <li><a target="_blank" href="pricing.html">Pricing</a></li>
                                        <li><a target="_blank" href="terms.html">Terms</a></li>
                                        <li><a target="_blank" href="faqs.html">FAQ</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="st-dropdown-content-group"><a class="dropdown-item bold" href="about.html"><i class="far fa-building icon"></i> About </a><a class="dropdown-item bold" href="contact.html"><i class="far fa-envelope icon"></i> Contact </a><a class="dropdown-item bold" href="pricing.html"><i class="fas fa-hand-holding-usd icon"></i> Pricing</a></div>
                    </div>
                </div>
                <div class="st-dropdown-section" data-dropdown="components">
                    <div class="st-dropdown-content">
                        <div class="st-dropdown-content-group"><a class="dropdown-item" target="_blank" href="components/color.html">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="bg-dark text-contrast icon-md center-flex rounded-circle me-2"><i class="fas fa-palette"></i></div>
                                    <div class="flex-fill">
                                        <h3 class="link-title m-0">Colors</h3>
                                        <p class="m-0 text-secondary">Get to know DashCore color options</p>
                                    </div>
                                </div>
                            </a><a class="dropdown-item" target="_blank" href="components/form-controls.html">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="bg-secondary text-contrast icon-md center-flex rounded-circle me-2"><i class="fab fa-wpforms"></i></div>
                                    <div class="flex-fill">
                                        <h3 class="link-title m-0">Forms</h3>
                                        <p class="m-0 text-secondary">All forms elements</p>
                                    </div>
                                </div>
                            </a><a class="dropdown-item" target="_blank" href="components/accordion.html">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="bg-success text-contrast icon-md center-flex rounded-circle me-2"><i class="fas fa-bars"></i></div>
                                    <div class="flex-fill">
                                        <h3 class="link-title m-0">Accordion</h3>
                                        <p class="m-0 text-secondary">Useful accordion elements</p>
                                    </div>
                                </div>
                            </a><a class="dropdown-item" target="_blank" href="components/cookie-law.html">
                                <div class="d-flex align-items-center mb-4">
                                    <div class="bg-info text-contrast icon-md center-flex rounded-circle me-2"><i class="fas fa-cookie-bite"></i></div>
                                    <div class="flex-fill">
                                        <h3 class="link-title m-0">CookieLaw</h3>
                                        <p class="m-0 text-secondary">Comply with the hideous EU Cookie Law</p>
                                    </div>
                                </div>
                            </a>
                            <h4 class="text-uppercase regular">Huge components list</h4>
                            <div class="row">
                                <div class="col me-4"><a class="dropdown-item" target="_blank" href="components/alert.html">Alerts</a> <a class="dropdown-item" target="_blank" href="components/badge.html">Badges</a> <a class="dropdown-item" target="_blank" href="components/button.html">Buttons</a></div>
                                <div class="col me-4"><a class="dropdown-item" target="_blank" href="components/overlay.html">Overlay</a> <a class="dropdown-item" target="_blank" href="components/progress.html">Progress</a> <a class="dropdown-item" target="_blank" href="components/lightbox.html">Lightbox</a></div>
                                <div class="col me-4"><a class="dropdown-item" target="_blank" href="components/tab.html">Tabs</a> <a class="dropdown-item" target="_blank" href="components/tables.html">Tables</a> <a class="dropdown-item" target="_blank" href="components/typography.html">Typography</a></div>
                            </div>
                        </div>
                        <div class="st-dropdown-content-group"><a class="dropdown-item" target="_blank" href="components/wizard.html">Wizard </a><span class="dropdown-item d-flex align-items-center text-muted">Timeline <i class="fas fa-ban ms-auto"></i> </span><span class="dropdown-item d-flex align-items-center text-muted">Process <i class="fas fa-ban ms-auto"></i></span></div>
                    </div>
                </div>

                <div class="st-dropdown-section" data-dropdown="shop">
                    <div class="st-dropdown-content">
                        <div class="st-dropdown-content-group"><a class="dropdown-item mb-4" target="_blank" href="shop/">
                                <div class="d-flex align-items-center">
                                    <div class="bg-success text-contrast icon-md center-flex rounded-circle me-2"><i class="fas fa-shopping-basket"></i></div>
                                    <div class="flex-fill">
                                        <h3 class="link-title m-0">Inicio</h3>
                                        <p class="m-0 text-secondary">Online store home with an outstanding UX</p>
                                    </div>
                                </div>
                            </a><a class="dropdown-item" target="_blank" href="shop/cart.html">
                                <div class="d-flex align-items-center">
                                    <div class="bg-info text-contrast icon-md center-flex rounded-circle me-2"><i class="fas fa-shopping-cart"></i></div>
                                    <div class="flex-fill">
                                        <h3 class="link-title m-0">Cart</h3>
                                        <p class="m-0 text-secondary">Online store shopping cart</p>
                                    </div>
                                </div>
                            </a></div>
                        <div class="st-dropdown-content-group">
                            <h3 class="link-title"><i class="fas fa-money-check-alt icon"></i> Checkout</h3>
                            <div class="ms-5"><a class="dropdown-item text-secondary" target="_blank" href="shop/checkout-customer.html">Customer <i class="fas fa-angle-right ms-2"></i> </a><a class="dropdown-item text-secondary" target="_blank" href="shop/checkout-shipping.html">Shipping Information <i class="fas fa-angle-right ms-2"></i> </a><a class="dropdown-item text-secondary" target="_blank" href="shop/checkout-payment.html">Payment Methods <i class="fas fa-angle-right ms-2"></i> </a><a class="dropdown-item text-secondary" target="_blank" href="shop/checkout-confirmation.html">Order Review <i class="fas fa-angle-right ms-2"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <main class="position-relative overflow-hidden">
        <!-- ./Page header -->
        {{ $slot }}




        <footer class="site-footer section b-t">
            <div class="container pb-3">
                <div class="row gap-y text-center text-md-start">
                    <div class="col-md-4 me-auto"><img src="{{asset('img/logo.png')}}" alt="" class="logo">
                        <p>DesarrolloWeb.us</p>
                    </div>
                    <div class="col-md-2">
                        <h6 class="py-2 bold text-uppercase">Empresa</h6>
                        <nav class="nav flex-column"><a class="nav-item py-2" href="about.html">Nosotros</a> <a class="nav-item py-2" href="#">Servicios</a> <a class="nav-item py-2" href="blog/blog-grid.html">Blog</a></nav>
                    </div>
                    <div class="col-md-2">
                        <h6 class="py-2 bold text-uppercase">Servicios</h6>
                        <nav class="nav flex-column"><a class="nav-item py-2" href="#">Desarrollo Web</a> <a class="nav-item py-2" href="#">Desarrollo Movil</a> <a class="nav-item py-2" href="#">Gestion de Redes Sociales</a></nav>
                    </div>
                    <div class="col-md-2">
                        <h6 class="py-2 bold text-uppercase">Canales</h6>
                        <nav class="nav flex-column"><a class="nav-item py-2" href="#">Contactenos</a> <a class="nav-item py-2" href="#">Buscar</a></nav>
                    </div>
                </div>
                <hr class="mt-5">
                <div class="row small align-items-center">
                    <div class="col-md-4">
                        <p class="mt-2 mb-md-0 text-secondary text-center text-md-start">{{date('Y')}} Desarrollo Web US. Todos los derechos reservados</p>
                    </div>
                    <div class="col-md-8">
                        <nav class="nav justify-content-center justify-content-md-end"><a href="#" class="btn btn-circle btn-sm btn-secondary me-3 op-4"><i class="fab fa-facebook"></i></a> <a href="#" class="btn btn-circle btn-sm btn-secondary me-3 op-4"><i class="fab fa-twitter"></i></a> <a href="#" class="btn btn-circle btn-sm btn-secondary op-4"><i class="fab fa-instagram"></i></a></nav>
                    </div>
                </div>
            </div>
        </footer>

    </main><!-- themeforest:js -->

    <a href="https://api.whatsapp.com/send?phone=573013809957" class="btn-wsp" target="_blank">
	    <i class="fa fa-whatsapp icono"></i>
	</a>

    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>



    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.js')}}"></script>
    <script src="{{asset('js/card.js')}}"></script>
    <script src="{{asset('js/counterup2.js')}}"></script>
    <script src="{{asset('js/noise.js')}}"></script>
    <script src="{{asset('js/noframework.waypoints.js')}}"></script>
    <script src="{{asset('js/odometer.js')}}"></script>
    <script src="{{asset('js/prism.js')}}"></script>
    <script src="{{asset('js/simplebar.js')}}"></script>
    <script src="{{asset('js/swiper-bundle.js')}}"></script>
    <script src="{{asset('js/jquery.easing.js')}}"></script>
    <script src="{{asset('js/jquery.validate.js')}}"></script>
    <script src="{{asset('js/jquery.smartWizard.js')}}"></script>
    <script src="{{asset('js/feather.js')}}"></script>
    <script src="{{asset('js/aos.js')}}"></script>
    <script src="{{asset('js/typed.js')}}"></script>
    <script src="{{asset('js/jquery.magnific-popup.js')}}"></script>
    <script src="{{asset('js/cookieconsent.js')}}"></script>
    <script src="{{asset('js/jquery.animatebar.js')}}"></script>
    <script src="{{asset('js/common.js')}}"></script>
    <script src="{{asset('js/forms.js')}}"></script>
    <script src="{{asset('js/stripe-bubbles.js')}}"></script>
    <script src="{{asset('js/stripe-menu.js')}}"></script>
    <script src="{{asset('js/credit-card.js')}}"></script>
    <script src="{{asset('js/pricing.js')}}"></script>
    <script src="{{asset('js/shop.js')}}"></script>
    <script src="{{asset('js/svg.js')}}"></script>
    <script src="{{asset('js/site.js')}}"></script>
    <script src="{{asset('js/wizards.js')}}"></script>
    <script src="{{asset('js/cookie-consent-util.js')}}"></script>
    <script src="{{asset('js/cookie-consent-themes.js')}}"></script>
    <script src="{{asset('js/cookie-consent-custom-css.js')}}"></script>
    <script src="{{asset('js/cookie-consent-informational.js')}}"></script>
    <script src="{{asset('js/cookie-consent-opt-out.js')}}"></script>
    <script src="{{asset('js/cookie-consent-opt-in.js')}}"></script>
    <script src="{{asset('js/cookie-consent-location.js')}}"></script>
    <script src="{{asset('js/demo.js')}}"></script>
    @livewireScripts

    <script>
        Livewire.on('alert',function(message){
            Swal.fire(
            message,
            'Click en el boton',
            'success'
            )
        })
    </script>

    <!-- endinject -->
</body>

</html>
