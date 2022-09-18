@section('title', 'Referal Program')

<!-- ==== banner section start ==== -->
<section class="banner banner--quaternary bg__img pos__rel over__hi"
    data-background="{{ asset('assets/images/banner/banner-bg.png') }}">
    <div class="container">
        <div class="banner__area ">
            <h1>Affiliates</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb--secondary">
                    <li class="breadcrumb-item">
                        <a href="/">Home</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Affiliates
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="banner__animation">
        <img src="{{ asset('assets/images/banner/banner-btc.png') }}" alt="Bitcoin" class="btc" />
        <img src="{{ asset('assets/images/banner/banner-eth.png') }}" alt="Ethereum" class="eth" />
        <img src="{{ asset('assets/images/banner/affiliate-illustration.png') }}" alt="Banner" class="illustration" />
    </div>
</section>
<!-- ==== #banner section end ==== -->

<!-- ==== partner section start ==== -->
<section class="partner section__space over__hi bg__img"
    data-background="{{ asset('assets/images/affiliate/wave.png') }}">
    <div class="container">
        <div class="partner__area">
            <div class="row d-flex align-items-center">
                <div class="col-lg-6 col-xl-5 d-none d-lg-block">
                    <div class="partner__illustration thumb__rtl column__space">
                        <img src="{{ asset('assets/images/affiliate/partner.png') }}" alt="Partner" />
                    </div>
                </div>
                <div class="col-lg-6 col-xl-6 offset-xl-1">
                    <div class="partner__content">
                        <div class="section__header text-start">
                            <h5 class="text-start content__space">
                                Programme Features
                            </h5>
                            <h2 class="text-start mb-15">An Affiliate Partner</h2>
                            <p class="text-start mb-35">The
                                affiliate program allows project
                                participants to receive additional profit on the investment amount 10% to 20% on 1st
                                Level for every deposit of your referrals depending on their numbers: 1-200
                                Referrals: 10%, 201-500 Referrals.</p>
                            <a href="/Authentication/Registeration" class="button">Join Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ==== #partner section end ==== -->

<!-- ==== affiliate section start ==== -->
<section class="affiliate section__space bg__img"
    data-background="{{ asset('assets/images/affiliate/affiliate-bg.png') }}">
    <div class="container">
        <div class="affiliate__area">
            <div class="section__header section__header__space ">
                <h5 class="mb-25">What You Will Get As</h5>
                <h2 class="mb-15">An Affiliate Partner</h2>
                <p class="mb-35">The affiliate program allows project participants to receive additional profit
                    on the investment amount 10% to 20% on 1st Level for every deposit of your referrals depending
                    on their numbers: 1-200 Referrals: 10%, 201-500 Referrals.</p>
                <a href="/Authentication/Registeration" class="button">Join Us</a>
            </div>
            <div class="affiliate__commission">
                <div class="row d-flex align-items-center">
                    <div class="col-md-6 col-lg-4">
                        <div class="affiliate__items column__space ">
                            <div class="affiliate__img__group">
                                <img src="{{ asset('assets/images/affiliate/icon-bg.png') }}" alt="Spider Nest" />
                                <img src="{{ asset('assets/images/affiliate/one.png') }}" alt="Step" />
                            </div>
                            <div>
                                <h3 class="content__space--small">10%</h3>
                                <p>Direct Referral</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="affiliate__items column__space ">
                            <div class="affiliate__img__group">
                                <img src="{{ asset('assets/images/affiliate/icon-bg.png') }}" alt="Spider Nest" />
                                <img src="{{ asset('assets/images/affiliate/two.png') }}" alt="Step" />
                            </div>
                            <div>
                                <h3 class="content__space--small">15%</h3>
                                <p>Second Line</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="affiliate__items ">
                            <div class="affiliate__img__group">
                                <img src="{{ asset('assets/images/affiliate/icon-bg.png') }}" alt="Spider Nest" />
                                <img src="{{ asset('assets/images/affiliate/three.png') }}" alt="Step" />
                            </div>
                            <div>
                                <h3 class="content__space--small">20%</h3>
                                <p>Third Line</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ==== #affiliate section end ==== -->

<!-- ==== earning section start ==== -->
<section class="earning section__space over__hi">
    <div class="container">
        <div class="earning__area">
            <div class="row d-flex align-items-center">
                <div class="col-lg-6 col-xl-5 d-none d-lg-block">
                    <div class="earning__illustration thumb__rtl column__space">
                        <img src="{{ asset('assets/images/affiliate/join-illustration.png') }}"
                            alt="Join and get Paid" />
                    </div>
                </div>
                <div class="col-lg-6 col-xl-6 offset-xl-1">
                    <div class="earning__content">
                        <div class="section__header text-start section__header__space">
                            <h5 class="text-start mb-25">Get
                                Paid for referring</h5>
                            <h2 class="text-start content__space">
                                Start Earning in 3 Easy Steps
                            </h2>
                            <p class="text-start">Spoment company
                                encourages partner activity. By inviting
                                partners, you can get a profit of 9% for partners of the first level and 3% for
                                partners of the second level.</p>
                        </div>
                        <div class="earning__items content__space">
                            <img src="{{ asset('assets/images/affiliate/join.png') }}" alt="Join" />
                            <div class="earning__items__content">
                                <h4 class="content__space--extra--small">Join</h4>
                                <p>Spoment affiliate program. It’s fast, easy and free.</p>
                            </div>
                        </div>
                        <div class="earning__items content__space">
                            <img src="{{ asset('assets/images/affiliate/promote.png') }}" alt="Promote" />
                            <div class="earning__items__content">
                                <h4 class="mb-8">Promote</h4>
                                <p>Promote our courses and service on you rnetwork, such as blog, website.</p>
                            </div>
                        </div>
                        <div class="earning__items">
                            <img src="{{ asset('assets/images/affiliate/earn.png') }}" alt="Earn" />
                            <div class="earning__items__content">
                                <h4 class="mb-8">Earn</h4>
                                <p>Earn up to 40% commission on those who subscribe from your traffic.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ==== #earning section end ==== -->

<!-- ==== join affiliate section start ==== -->
<section class="join__affiliate section__space over__hi">
    <div class="container">
        <div class="join__affiliate__area">
            <div class="row d-flex align-items-center">
                <div class="col-lg-6 col-xl-5 d-none d-lg-block">
                    <div class="join__affiliate__illustration thumb__rtl column__space">
                        <img src="{{ asset('assets/images/affiliate/join-affiliate-illustration.png') }}"
                            alt="Join Affiliate" />
                    </div>
                </div>
                <div class="col-lg-6 col-xl-6 offset-xl-1">
                    <div class="join__affiliate__content">
                        <div class="section__header section__header__space">
                            <h5 class="content__space text-start">Why
                                Should You</h5>
                            <h2 class="content__space text-start">Join Affiliate?</h2>
                            <p class="text-start">The affiliate
                                program is our special feature for loyal
                                Investors.</p>
                        </div>
                        <div class="join__affiliate__items content__space">
                            <div class="join__affiliate__item join__affiliate__item--first">
                                <img src="{{ asset('assets/images/affiliate/free.png') }}" alt="Free" />
                                <h5>Joining Free</h5>
                            </div>
                            <div class="join__affiliate__item join__affiliate__item--second">
                                <img src="{{ asset('assets/images/affiliate/performace-two.png') }}"
                                    alt="Performace" />
                                <h5>Performace Bonuses</h5>
                            </div>
                        </div>
                        <div class="join__affiliate__items">
                            <div class="join__affiliate__item join__affiliate__item--first">
                                <img src="{{ asset('assets/images/affiliate/payout.png') }}" alt="Instant Payout" />
                                <h5>Instant Payout</h5>
                            </div>
                            <div class="join__affiliate__item join__affiliate__item--second">
                                <img src="{{ asset('assets/images/affiliate/performance.png') }}" alt="Performace" />
                                <h5>Performace Bonuses</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ==== #join affiliate section end ==== -->

<!-- ==== testimonial section start ==== -->
<section class="testimonial section__space pos__rel over__hi">
    <div class="container">
        <div class="testimonial__area">
            <div class="section__header section__header__space ">
                <h5 class="content__space--alt">Testimonial</h5>
                <h2 class="content__space--alt">40,000 Happy Clients
                    Around The World</h2>
                <p>We have many happy investors invest with us .Some impresions from our Customers! PLease read some
                    of the lovely things our Customers say about us.</p>
            </div>
            <div class="testimonial__item__wrapper">
                <div class="testimonial__item bg__img"
                    data-background="{{ asset('assets/images/testimonial/quotation.png') }}">
                    <h5 class="cta__space">A great company and I am glad that I am a member.</h5>
                    <p class="primary cta__space">Spoment is a great company and I am glad that I am a member. The
                        platform is continuously accessible and all functions and payouts work exactly as they
                        should.
                    </p>
                    <div class="testimonial__author">
                        <div class="testimonial__author__info">
                            <img src="{{ asset('assets/images/testimonial/jonathan.png') }}" alt="jonathan" />
                            <div>
                                <h5 class="content__space--extra--small">Jonathan</h5>
                                <p>South Africa</p>
                            </div>
                        </div>
                        <div class="testimonial__author__ratings">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="testimonial__item bg__img"
                    data-background="{{ asset('assets/images/testimonial/quotation.png') }}">
                    <h5 class="cta__space">A great company and I am glad that I am a member.</h5>
                    <p class="primary cta__space">Spoment is a great company and I am glad that I am a member. The
                        platform is continuously accessible and all functions and payouts work exactly as they
                        should.
                    </p>
                    <div class="testimonial__author">
                        <div class="testimonial__author__info">
                            <img src="{{ asset('assets/images/testimonial/jonathan.png') }}" alt="jonathan" />
                            <div>
                                <h5 class="content__space--extra--small">Jonathan</h5>
                                <p>South Africa</p>
                            </div>
                        </div>
                        <div class="testimonial__author__ratings">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="testimonial__item bg__img"
                    data-background="{{ asset('assets/images/testimonial/quotation.png') }}">
                    <h5 class="cta__space">A great company and I am glad that I am a member.</h5>
                    <p class="primary cta__space">Spoment is a great company and I am glad that I am a member. The
                        platform is continuously accessible and all functions and payouts work exactly as they
                        should.
                    </p>
                    <div class="testimonial__author">
                        <div class="testimonial__author__info">
                            <img src="{{ asset('assets/images/testimonial/jonathan.png') }}" alt="jonathan" />
                            <div>
                                <h5 class="content__space--extra--small">Jonathan</h5>
                                <p>South Africa</p>
                            </div>
                        </div>
                        <div class="testimonial__author__ratings">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="testimonial__item bg__img"
                    data-background="{{ asset('assets/images/testimonial/quotation.png') }}">
                    <h5 class="cta__space">A great company and I am glad that I am a member.</h5>
                    <p class="primary cta__space">Spoment is a great company and I am glad that I am a member. The
                        platform is continuously accessible and all functions and payouts work exactly as they
                        should.
                    </p>
                    <div class="testimonial__author">
                        <div class="testimonial__author__info">
                            <img src="{{ asset('assets/images/testimonial/jonathan.png') }}" alt="jonathan" />
                            <div>
                                <h5 class="content__space--extra--small">Jonathan</h5>
                                <p>South Africa</p>
                            </div>
                        </div>
                        <div class="testimonial__author__ratings">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="testimonial__item bg__img"
                    data-background="{{ asset('assets/images/testimonial/quotation.png') }}">
                    <h5 class="cta__space">A great company and I am glad that I am a member.</h5>
                    <p class="primary cta__space">Spoment is a great company and I am glad that I am a member. The
                        platform is continuously accessible and all functions and payouts work exactly as they
                        should.
                    </p>
                    <div class="testimonial__author">
                        <div class="testimonial__author__info">
                            <img src="{{ asset('assets/images/testimonial/jonathan.png') }}" alt="jonathan" />
                            <div>
                                <h5 class="content__space--extra--small">Jonathan</h5>
                                <p>South Africa</p>
                            </div>
                        </div>
                        <div class="testimonial__author__ratings">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="testimonial__item bg__img"
                    data-background="{{ asset('assets/images/testimonial/quotation.png') }}">
                    <h5 class="cta__space">A great company and I am glad that I am a member.</h5>
                    <p class="primary cta__space">Spoment is a great company and I am glad that I am a member. The
                        platform is continuously accessible and all functions and payouts work exactly as they
                        should.
                    </p>
                    <div class="testimonial__author">
                        <div class="testimonial__author__info">
                            <img src="{{ asset('assets/images/testimonial/jonathan.png') }}" alt="jonathan" />
                            <div>
                                <h5 class="content__space--extra--small">Jonathan</h5>
                                <p>South Africa</p>
                            </div>
                        </div>
                        <div class="testimonial__author__ratings">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="testimonial__animation">
        <img src="{{ asset('assets/images/testimonial/sm-circle.png') }}" alt="Circle" class="circle__sm" />
        <img src="{{ asset('assets/images/testimonial/sm-circle.png') }}" alt="Circle" class="circle__sm--two" />
        <img src="{{ asset('assets/images/testimonial/large-circle.png') }}" alt="Circle" class="circle__lg" />
        <img src="{{ asset('assets/images/testimonial/large-circle.png') }}" alt="Circle"
            class="circle__lg--two" />
    </div>
</section>
<!-- ==== #testimonial section end ==== -->
