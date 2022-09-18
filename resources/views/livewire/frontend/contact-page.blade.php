@section('title', 'Contact Us')
<!-- ==== banner section start ==== -->
<section class="banner contact--banner bg__img pos__rel over__hi"
    data-background="{{ asset('assets/images/banner/banner-bg.png') }}">
    <div class="container">
        <div class="banner__area ">
            <h1>Contact Us</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb--secondary">
                    <li class="breadcrumb-item">
                        <a href="/">Home</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Contact Us
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="banner__animation">
        <img src="{{ asset('assets/images/banner/banner-btc.png') }}" alt="Bitcoin" class="btc" />
        <img src="{{ asset('assets/images/banner/banner-eth.png') }}" alt="Ethereum" class="eth" />
        <img src="{{ asset('assets/images/banner/contact-banner.png') }}" alt="Banner" class="illustration" />
    </div>
</section>
<!-- ==== #banner section end ==== -->

<!-- ==== contact form section start ==== -->
<section class="contact section__space">
    <div class="container">
        <div class="contact__area">
            <div class="row">
                <div class="col-lg-6 col-xl-5">
                    <div class="contact__info column__space">
                        <h3 class="mb-20">Get A Quote</h3>
                        <p class="mb-55">Fill Up The Form And Our Team Will Get Back To You Within
                            24 Hours.</p>
                        <div class="contact__info__items mb-55">
                            <div class="contact__info__single__item content__space--small">
                                <img src="{{ asset('assets/images/contact/phone.png') }}" alt="Call Now" />
                                <p>+0354 8542 4852</p>
                            </div>
                            <div class="contact__info__single__item content__space--small">
                                <img src="{{ asset('assets/images/contact/mail.png') }}" alt="Send Message" />
                                <p>info@updateyourmoney.com</p>
                            </div>
                            <div class="contact__info__single__item">
                                <img src="{{ asset('assets/images/contact/phone.png') }}" alt="Our Location" />
                                <p>103 Street 2714 Don</p>
                            </div>
                        </div>
                        <h6 class="mb-15">Follow US</h6>
                        <div class="social social--secondary text-start">
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
                <div class="col-lg-6 col-xl-6 offset-xl-1">
                    <div class="contact__form">
                        @csrf
                        <form action="#" method="POST">
                            <div class="input__area text-start content__space">
                                <label for="contactFullName" class="content__space--small">Your Name</label>
                                <input type="text" name="contact__full__name" id="contactFullName"
                                    placeholder="Enter Your Full Name" required="required" />
                            </div>
                            <div class="input__area text-start content__space">
                                <label for="contactEmail" class="content__space--small">Your Email</label>
                                <input type="email" name="contact__email" id="contactEmail" placeholder="Enter Email"
                                    required="required" />
                            </div>
                            <div class="input__area text-start cta__space">
                                <label for="contactMessage" class="content__space--small">Message</label>
                                <textarea name="contact__message" id="contactMessage" cols="30" rows="10"
                                    placeholder="Write Your Message Here" required="required"></textarea>
                            </div>
                            <button type="submit" class="button">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ==== #contact form section end ==== -->

<!-- ==== faq section start ==== -->
<section class="contact__faq over__hi">
    <div class="contact__faq__wrapper bg__img" data-background="{{ asset('assets/images/contact/faq-bg.png') }}">
        <div class="section__header">
            <h5 class="content__space">If you have any questions</h5>
            <h2 class="content__space">Frequently asked questions</h2>
            <p>You will find answers to all your questions. For more informati</p>
        </div>
    </div>
    <div class="container">
        <div class="faq__wrapper section__space__bottom">
            <div class="faq__group">
                <div class="accordion" id="accordionExampleContact">
                    <div class="accordion-item content__space">
                        <h5 class="accordion-header" id="headingContactOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseContactOne" aria-expanded="true"
                                aria-controls="collapseContactOne">
                                How Secure User Accounts And Personal Data
                            </button>
                        </h5>
                        <div id="collapseContactOne" class="accordion-collapse collapse show"
                            aria-labelledby="headingContactOne" data-bs-parent="#accordionExampleContact">
                            <div class="accordion-body">
                                <p>combined with a handful of model sentence structures, to generate Lorem Ipsum
                                    which looks reasonable. The generated Lorem Ipsum is therefore always free from
                                    repetition, injected humour, or</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item content__space">
                        <h5 class="accordion-header" id="headingContactTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseContactTwo" aria-expanded="false"
                                aria-controls="collapseContactTwo">
                                How Secure User Accounts And Personal Data
                            </button>
                        </h5>
                        <div id="collapseContactTwo" class="accordion-collapse collapse"
                            aria-labelledby="headingContactTwo" data-bs-parent="#accordionExampleContact">
                            <div class="accordion-body">
                                <p>combined with a handful of model sentence structures, to generate Lorem Ipsum
                                    which looks reasonable. The generated Lorem Ipsum is therefore always free from
                                    repetition, injected humour, or</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item content__space">
                        <h5 class="accordion-header" id="headingContactThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseContactThree" aria-expanded="false"
                                aria-controls="collapseContactThree">
                                Are there discounts for yearly plans?
                            </button>
                        </h5>
                        <div id="collapseContactThree" class="accordion-collapse collapse"
                            aria-labelledby="headingContactThree" data-bs-parent="#accordionExampleContact">
                            <div class="accordion-body">
                                <p>combined with a handful of model sentence structures, to generate Lorem Ipsum
                                    which looks reasonable. The generated Lorem Ipsum is therefore always free from
                                    repetition, injected humour, or</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item content__space">
                        <h5 class="accordion-header" id="headingContactFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseContactFour" aria-expanded="false"
                                aria-controls="collapseContactFour">
                                Can i invest using cryptocurrency?
                            </button>
                        </h5>
                        <div id="collapseContactFour" class="accordion-collapse collapse"
                            aria-labelledby="headingContactFour" data-bs-parent="#accordionExampleContact">
                            <div class="accordion-body">
                                <p>combined with a handful of model sentence structures, to generate Lorem Ipsum
                                    which looks reasonable. The generated Lorem Ipsum is therefore always free from
                                    repetition, injected humour, or</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item content__space">
                        <h5 class="accordion-header" id="headingContactFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseContactFive" aria-expanded="false"
                                aria-controls="collapseContactFive">
                                What are the minimum and maximum deposit amounts?
                            </button>
                        </h5>
                        <div id="collapseContactFive" class="accordion-collapse collapse"
                            aria-labelledby="headingContactFive" data-bs-parent="#accordionExampleContact">
                            <div class="accordion-body">
                                <p>combined with a handful of model sentence structures, to generate Lorem Ipsum
                                    which looks reasonable. The generated Lorem Ipsum is therefore always free from
                                    repetition, injected humour, or</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item content__space">
                        <h5 class="accordion-header" id="headingContactSix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseContactSix" aria-expanded="false"
                                aria-controls="collapseContactSix">
                                Can i add an amount every month and will the % change?
                            </button>
                        </h5>
                        <div id="collapseContactSix" class="accordion-collapse collapse"
                            aria-labelledby="headingContactSix" data-bs-parent="#accordionExampleContact">
                            <div class="accordion-body">
                                <p>combined with a handful of model sentence structures, to generate Lorem Ipsum
                                    which looks reasonable. The generated Lorem Ipsum is therefore always free from
                                    repetition, injected humour, or</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item content__space">
                        <h5 class="accordion-header" id="headingContactSeven">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseContactSeven" aria-expanded="false"
                                aria-controls="collapseContactSeven">
                                What payment system can i use to withdraw?
                            </button>
                        </h5>
                        <div id="collapseContactSeven" class="accordion-collapse collapse"
                            aria-labelledby="headingContactSeven" data-bs-parent="#accordionExampleContact">
                            <div class="accordion-body">
                                <p>combined with a handful of model sentence structures, to generate Lorem Ipsum
                                    which looks reasonable. The generated Lorem Ipsum is therefore always free from
                                    repetition, injected humour, or</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h5 class="accordion-header" id="headingContactEight">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseContactEight" aria-expanded="false"
                                aria-controls="collapseContactEight">
                                Which means of payment do you accept?
                            </button>
                        </h5>
                        <div id="collapseContactEight" class="accordion-collapse collapse"
                            aria-labelledby="headingContactEight" data-bs-parent="#accordionExampleContact">
                            <div class="accordion-body">
                                <p>combined with a handful of model sentence structures, to generate Lorem Ipsum
                                    which looks reasonable. The generated Lorem Ipsum is therefore always free from
                                    repetition, injected humour, or</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="faq__animation">
        <img src="{{ asset('assets/images/faq/player.png') }}" alt="Players" class="players" />
        <img src="{{ asset('assets/images/faq/support.png') }}" alt="Support" class="support" />
    </div>
</section>
<!-- ==== #faq section end ==== -->
