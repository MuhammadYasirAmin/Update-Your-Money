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
    <div class="topbar topbar__dashboard d-none d-lg-block">
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
    <header class="header__dashboard header__alt">
        <nav class="navbar navbar-expand-xl">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="Logo" class="logo" />
                </a>
                <div class="navbar__out order-2 order-xl-3">
                        @if (Route::has('login'))
                            @auth
                                @if (Auth::user()->utype==='ADM')
                                    <div class="dashboard__nav">
                                        <div class="messages">
                                            <a href="javascript:void(0)" class="message__icon__wrapper">
                                                <i class="fas fa-envelope"></i>
                                                <span>03</span>
                                            </a>
                                            <div class="message__wrapper">
                                                <div class="message__head">
                                                    <p class="text-center">3 New</p>
                                                    <p class="tertiary text-center">User Tickets</p>
                                                </div>
                                                <div class="message__single">
                                                    <p class="tertiary text-center mb-20">There are no open tickets</p>
                                                    <h6 class="text-center">Do you need help?</h6>
                                                    <a href="#">Create a new tickets</a>
                                                </div>
                                                <div class="mark__read">
                                                    <a href="#">View All Tickets</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="notifications">
                                            <a href="javascript:void(0)" class="icon__wrapper">
                                                <i class="fas fa-bell"></i>
                                                <span>03</span>
                                            </a>
                                            <div class="notification__wrapper">
                                                <div class="notification__head">
                                                    <p class="text-center">3 New</p>
                                                    <p class="tertiary text-center">Notification</p>
                                                </div>
                                                <div class="notification__single">
                                                    <a href="#">
                                                        <h6>Welcome to spoment</h6>
                                                        <p class="tertiary">We are happy to welcome you to our community spoment.</p>
                                                    </a>
                                                    <p class="tertiary time">2 hours ago</p>
                                                </div>
                                                <div class="mark__read">
                                                    <a href="#">Mark all as read</a>
                                                </div>
                                            </div>
                                        </div>
                                        <select class="language-select">
                                            <option value="english">En</option>
                                            <option value="australia">Aus</option>
                                            <option value="brazil">Bra</option>
                                            <option value="argentina">Arg</option>
                                        </select>
                                        <div class="profile__meta">
                                            <a href="javascript:void(0)" class="profile__small">
                                                <img src="{{ asset('assets/images/avatar.png') }}" alt="Profile Image" />
                                            </a>
                                            <div class="profile__info">
                                                <div class="profile__info__head">
                                                    <div>
                                                        <img src="{{ asset('assets/images/avatar.png') }}" alt="User" />
                                                    </div>
                                                    <div class="profile__head__content">
                                                        <a href="/Authorized/User-Settings">{{ Auth::user()->name }}</a>
                                                        <p class="tertiary"><a href="/cdn-cgi/l/email-protection" class="__cf_email__">{{ Auth::user()->email }}</a></p>
                                                    </div>
                                                </div>
                                                <a href="/Authorized/User-Settings">Personal Info</a>
                                                <a href="/Authorized/User-Settings">Payout Settings</a>
                                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                                <form id="logout-form" method="POST" action="{{ route('logout') }}">
                                                    @csrf
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <div class="dashboard__nav">
                                        <div class="messages">
                                            <a href="javascript:void(0)" class="message__icon__wrapper">
                                                <i class="fas fa-envelope"></i>
                                                <span>03</span>
                                            </a>
                                            <div class="message__wrapper">
                                                <div class="message__head">
                                                    <p class="text-center">3 New</p>
                                                    <p class="tertiary text-center">User Tickets</p>
                                                </div>
                                                <div class="message__single">
                                                    <p class="tertiary text-center mb-20">There are no open tickets</p>
                                                    <h6 class="text-center">Do you need help?</h6>
                                                    <a href="#">Create a new tickets</a>
                                                </div>
                                                <div class="mark__read">
                                                    <a href="#">View All Tickets</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="notifications">
                                            <a href="javascript:void(0)" class="icon__wrapper">
                                                <i class="fas fa-bell"></i>
                                                <span>03</span>
                                            </a>
                                            <div class="notification__wrapper">
                                                <div class="notification__head">
                                                    <p class="text-center">3 New</p>
                                                    <p class="tertiary text-center">Notification</p>
                                                </div>
                                                <div class="notification__single">
                                                    <a href="#">
                                                        <h6>Welcome to spoment</h6>
                                                        <p class="tertiary">We are happy to welcome you to our community spoment.</p>
                                                    </a>
                                                    <p class="tertiary time">2 hours ago</p>
                                                </div>
                                                <div class="mark__read">
                                                    <a href="#">Mark all as read</a>
                                                </div>
                                            </div>
                                        </div>
                                        <select class="language-select">
                                            <option value="english">En</option>
                                            <option value="australia">Aus</option>
                                            <option value="brazil">Bra</option>
                                            <option value="argentina">Arg</option>
                                        </select>
                                        <div class="profile__meta">
                                            <a href="javascript:void(0)" class="profile__small">
                                                <img src="{{ asset('assets/images/avatar.png') }}" alt="Profile Image" />
                                            </a>
                                            <div class="profile__info">
                                                <div class="profile__info__head">
                                                    <div>
                                                        <img src="{{ asset('assets/images/avatar.png') }}" alt="User" />
                                                    </div>
                                                    <div class="profile__head__content">
                                                        <a href="/Authorized/User-Settings">{{ Auth::user()->name }}</a>
                                                        <p class="tertiary"><a href="/cdn-cgi/l/email-protection" class="__cf_email__">{{ Auth::user()->email }}</a></p>
                                                    </div>
                                                </div>
                                                <a href="/Authorized/User-Settings">Personal Info</a>
                                                <a href="/Authorized/User-Settings">Payout Settings</a>
                                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                                <form id="logout-form" method="POST" action="{{ route('logout') }}">
                                                    @csrf

                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @else
                                <div class="nav__group__btn">
                                    <a href="{{ route('login') }}" class="button active__btn d-none d-sm-block"> Log In </a>
                                    <a href="{{ route('register') }}" class="button d-none d-sm-block"> Sign Up </a>
                                </div>
                            @endif
                        @endif
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

    <!-- ==== dashboard section start ==== -->
    <div class="dashboard section__space__bottom">
        <div class="container">
            <div class="dashboard__area">
                <div class="row">
                    <div class="col-xxl-3">
                        <div class="sidebar">
                            <a href="javascript:void(0)" class="close__sidebar">
                                <i class="fas fa-times"></i>
                            </a>
                            <div class="sidenav__wrapper">
                                <ul>
                                    <li>
                                        <a href="/Authorized/User-Dashboard" class="sidenav__active">
                                            <img src="{{ asset('assets/images/icons/dashboard.png') }}" alt="dashboard" /> Dashboard
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/Authorized/User-Deposit">
                                            <img src="{{ asset('assets/images/icons/deposit.png') }}" alt="Deposit" /> Deposit
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/Authorized/User-Withdrawal">
                                            <img src="{{ asset('assets/images/icons/withdraw.png') }}" alt="Withdrawal" /> Withdrawal
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/Authorized/User-Investment">
                                            <img src="{{ asset('assets/images/icons/investment.png') }}" alt="Investment" /> My
                                            Investments
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/Authorized/User-Affilates">
                                            <img src="{{ asset('assets/images/icons/affiliate.png') }}" alt="Affiliate Program" />
                                            Affiliate Program
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/Authorized/User-Wallet">
                                            <img src="{{ asset('assets/images/icons/wallets.png') }}" alt="Wallets" /> Wallets
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/Authorized/User-History">
                                            <img src="{{ asset('assets/images/icons/history.png') }}" alt="History" /> History
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/Authorized/User-Settings">
                                            <img src="{{ asset('assets/images/icons/settings.png') }}" alt="Settings" /> Settings
                                        </a>
                                    </li>
                                </ul>
                                <hr />
                                <ul class="logout">
                                    <li>
                                        <a href="/Authentication/LogOut">
                                            <img src="{{ asset('assets/images/icons/logout.png') }}" alt="Logout" /> Logout
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="sidenav__wrapper sidenav__footer">
                                <h6>Last Login</h6>
                                <hr />
                                <div class="sidenav__time">
                                    <p class="tertiary"><img src="{{ asset('assets/images/icons/login.png') }}" alt="Login" />
                                        02.01.2022</p>
                                    <p class="tertiary">15:48:13</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-9">
                        {{ $slot }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="overlay">

    </div>
    <!-- ==== #dashboard section end ==== -->

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
