<!DOCTYPE html>
<html lang="en-US">

<head>
    <!-- required meta -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- #favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon" />
    <!-- #title -->
    <title>@yield('title') &dash; Update Your Money</title>
    <!-- #keywords -->
    <meta name="keywords"
        content="cryptocurrency, financial, financial company, HYIP, hyip business, HYIP,hyip website, illustration hyip" />
    <!-- #description -->
    <meta name="description" content="Sports Hyip Investment HTML Template" />
    <!-- #author -->
    <meta name="author" content="Muhammad Yasir Amin" />

    <!-- ==== css dependencies start ==== -->

    <!-- bootstrap five css -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap/css/bootstrap.min.css') }}" />
    <!-- font awesome five css -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/font-awesome/css/all.min.css') }}" />
    <!-- nice select css -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/nice-select/css/nice-select.css') }}" />
    <!-- magnific popup css -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/magnific-popup/css/magnific-popup.css') }}" />
    <!-- slick css -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/slick/css/slick.css') }}" />

    <!-- ==== css dependencies end ==== -->

    <!-- main css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</head>

<body>
    <!-- ==== topbar start ==== -->
    <div class="topbar d-none d-lg-block">
        <div class="container">
            <div class="topbar__area">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="topbar__left__content">
                            <p class="tertiary">
                                <a href="">
                                    <img src="{{ asset('assets/images/icons/mail.png') }}" alt="Email Us" />
                                </a> info@updateyourmoney.com
                            </p>
                            <p class="tertiary">
                                <a href="tel:+17087362094">
                                    <i class=" fas fa-phone-alt"></i>
                                </a>+17087362094
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="topbar__right__content">
                            <div class="social text-start text-lg-end">
                                <a href="javascript:void(0)">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="javascript:void(0)">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="javascript:void(0)">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="javascript:void(0)">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ==== topbar end ==== -->

    <!-- ==== header start ==== -->
    <header>
        <nav class="navbar navbar-expand-xl">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="Logo" class="logo" />
                </a>
                <div class="navbar__out order-2 order-xl-3">
                    <div class="nav__group__btn">
                        <a href="/Authentication/LoginForm" class="button active__btn d-none d-sm-block"> Log In </a>
                        <a href="/Authentication/Registeration" class="button d-none d-sm-block"> Sign Up </a>
                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#primaryNav"
                        aria-controls="primaryNav" aria-expanded="false" aria-label="Toggle Primary Nav">
                        <span class="icon-bar top-bar"></span>
                        <span class="icon-bar middle-bar"></span>
                        <span class="icon-bar bottom-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse justify-content-end order-3 order-xl-2" id="primaryNav">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link active" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="/About-Us">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/Investment-Plan">Investment</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/Referal-Program">Affiliates</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/Support/Contact-Us">Contact Us</a>
                        </li>
                        <li class="nav-item d-block d-sm-none">
                            <a href="/Authentication/LoginForm" class="button button--last">Log In</a>
                        </li>
                        <li class="nav-item d-block d-sm-none">
                            <a href="/Authentication/Registeration" class="button button--last">Sign Up</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- ==== #header end ==== -->

    {{ $slot }}

    <!-- ==== footer section start ==== -->
    <footer class="footer">
        <div class="container">
            <div class="newsletter__area section__space__bottom ">
                <div class="newsletter bg__img" data-background="{{ asset('assets/images/footer/cta-bg.png') }}">
                    <div class="newsletter__header cta__space">
                        <h3 class="text-center mb-20">Don't Miss Out On
                            Fantastic News</h3>
                        <p class="text-center">Subscribe to our newsletter and be the first to receive news</p>
                    </div>
                    <form action="#" method="POST" class="subscribeForm">
                        @csrf
                        <input type="email" name="subscribe" id="subscribeField" required="required"
                            placeholder="Enter your email" />
                        <button type="submit">
                            <img src="{{ asset('assets/images/icons/right-arrow.png') }}" alt="Send Mail" />
                        </button>
                    </form>
                </div>
            </div>
            <div class="footer__nav">
                <a href="/" class="logo">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="Logo" />
                </a>
                <ul>
                    <li>
                        <a href="/About-Us">About</a>
                    </li>
                    <li>
                        <a href="/Investment-Plan">Investment</a>
                    </li>
                    <li>
                        <a href="/Support/Contact-Us">Contact Us</a>
                    </li>
                    <li>
                        <a href="/Support/Privacy-Policy">Privacy Policy</a>
                    </li>
                    <li>
                        <a href="/Support/Terms-Conditions">Terms of Use</a>
                    </li>
                </ul>
            </div>
            <div class="footer__credit">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-8">
                        <div class="footer__credit__left">
                            <p class="text-center text-lg-start">Copyright © <a href="/">Update Your Money </a> | Designed by <a
                                    href="https://muhammadyasiramin.com">MYA</a></p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="footer__credit__right">
                            <div class="social text-center text-lg-end">
                                <a href="javascript:void(0)">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="javascript:void(0)">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="javascript:void(0)">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="javascript:void(0)">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__animation">
            <img src="{{ asset('assets/images/footer/footer-left-illustration.png') }}" alt="Footer Illustration"
                class="left__illustration" />
            <img src="{{ asset('assets/images/footer/footer-right-illustration.png') }}" alt="Footer Illustration"
                class="right__illustration" />
        </div>
    </footer>
    <!-- ==== #footer section end ==== -->

    <!-- Scroll To Top -->
    <a href="javascript:void(0)" class="scrollToTop">
        <i class="fas fa-angle-double-up"></i>
    </a>

    <!-- ==== js dependencies start ==== -->

    <!-- jquery -->
    <script src="{{ asset('assets/vendors/jquery/jquery.min.js') }}"></script>
    <!-- bootstrap five js -->
    <script src="{{ asset('assets/vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- nice select js -->
    <script src="{{ asset('assets/vendors/nice-select/js/jquery.nice-select.min.js') }}"></script>
    <!-- magnific popup js -->
    <script src="{{ asset('assets/vendors/magnific-popup/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- slick js -->
    <script src="{{ asset('assets/vendors/slick/js/slick.js') }}"></script>
    <!-- shuffle js -->
    <script src="{{ asset('assets/vendors/shuffle/shuffle.min.js') }}"></script>

    <!-- ==== js dependencies end ==== -->

    <!-- plugin js -->
    <script src="{{ asset('assets/js/plugin.js') }}"></script>
    <!-- main js -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
