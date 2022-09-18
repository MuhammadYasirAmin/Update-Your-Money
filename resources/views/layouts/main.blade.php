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

</head>

<body>

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
                    <form action="#" method="post" class="subscribeForm">
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
                        <a href="about-us.html">About</a>
                    </li>
                    <li>
                        <a href="investment-plan.html">Investment</a>
                    </li>
                    <li>
                        <a href="contact-us.html">Contact Us</a>
                    </li>
                    <li>
                        <a href="privacy-policy.html">Privacy Policy</a>
                    </li>
                    <li>
                        <a href="terms-of-use.html">Terms of Use</a>
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
