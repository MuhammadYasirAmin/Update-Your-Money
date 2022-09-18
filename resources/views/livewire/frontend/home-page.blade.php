@section('title', 'Home Page')
<!-- ==== hero section start ==== -->
<section class="hero bg__img" data-background="{{ asset('assets/images/hero/hero-bg.png') }}">
    <div class="container">
        <div class="hero__area">
            <div class="row d-flex align-items-center">
                <div class="col-lg-6 col-xl-6">
                    <div class="hero__content ">
                        <h4 class="content__space--small">Smart and Reliable Investment</h4>
                        <h1 class="mb-25">Sports Investment With Spoment</h1>
                        <p class="primary mb-38">Fast and easy way to earn money by making secure and safe
                            investments of your actives.</p>
                        <div class="hero__cta">
                            <a href="/Investment-Plan" class="button">Start invest Now</a>
                            <div class="video-btn">
                                <a class="video-popup" href="https://www.youtube.com/watch?v=LVdjRJ6rSz4"
                                    target="_blank" title="YouTube video player">
                                    <img src="{{ asset('assets/images/icons/play.png') }}" alt="Play Icon" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-5 offset-xl-1">
                    <div class="hero__illustration d-none d-lg-block ">
                        <img src="{{ asset('assets/images/hero/illustration.png') }}" alt="Hero Illustration" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hero__animation">
        <img src="{{ asset('assets/images/hero/eth.png') }}" alt="Ethereum" class="eth" />
        <img src="{{ asset('assets/images/hero/eth-small.png') }}" alt="Ethereum" class="eth--small" />
        <img src="{{ asset('assets/images/hero/btc.png') }}" alt="Bitcoin" class="btc" />
    </div>
</section>
<!-- ==== #hero section end ==== -->

<!-- ==== pricing plan section start ==== -->
<section class="plan">
    <div class="container">
        <div class="plan__area">
            <form action="#" method="POST" id="investForm">
                @csrf
                <div class="row cta__space">
                    <div class="col-lg-4 column__space">
                        <div class="plan__select column__space">
                            <label class="secondary content__space--extra--small">Select The Plan</label>
                            <select id="selectPlan">
                                <option value="30">SPO - 10</option>
                                <option value="35">SPO - 11</option>
                                <option value="40">SPO - 12</option>
                                <option value="45">SPO - 13</option>
                                <option value="50">SPO - 14</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4 column__space">
                        <div class="plan__select">
                            <label class="secondary content__space--extra--small">Select Payment Method</label>
                            <select id="selectPayment">
                                <option value="Eth">Ethereum</option>
                                <option value="Btc">Bitcoin</option>
                                <option value="Ltc">Litecoin</option>
                                <option value="Doge">Dogecoin</option>
                                <option value="Rip">Ripple</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="plan__select">
                            <label class="secondary content__space--extra--small">Enter The amount</label>
                            <input type="number" name="amount" id="investAmount" required="required" placeholder="296"
                                min="1" />

                        </div>
                    </div>
                </div>
                <div class="row mb-25">
                    <div class="col-lg-7">
                        <div class="daily-profit column__space">
                            <p class="secondary mb-20">Daily Profit</p>
                            <h3> <span id="dailyProfit"></span> Eth</h3>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="total-profit">
                            <p class="secondary mb-20">Total Profit</p>
                            <h3><span id="totalProfit"></span> Eth</h3>
                        </div>
                    </div>
                </div>
                <div class="row d-flex align-items-center">
                    <div class="col-lg-9">
                        <div class="slide__group column__space">
                            <div class="output d-flex">
                                <span class="range__output__value">296</span> <span>Eth</span>
                            </div>
                            <input class="range__slider" type="range" name="invest__range" id="rangeSlider"
                                max="1000" min="1" value="296" />
                            <div class="slide__min__max">
                                <p>1.00 Eth</p>
                                <p>1000 Eth</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="plan__cta text-start text-lg-center">
                            <button class="button primary">Start Invest Now</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- ==== #pricing plan section end ==== -->

<!-- ==== feature section start ==== -->
<section class="feature section__space bg__img" data-background="{{ asset('assets/images/features/features-bg.png') }}">
    <div class="container">
        <div class="feature__area">
            <div class="row d-flex align-items-center">
                <div class="col-xl-6">
                    <div class="feature__content column__space--secondary ">
                        <h5 class="content__space">Effortless crypto investing</h5>
                        <h2 class="content__space--small">We Offer Stable Profit
                            & Safe Investment</h2>
                        <p class="mb-38">Plunge into the world of football battles and earn good maney at same
                            time!there is a large number of players to choose from and their improvements with
                            varying cost and profitability. the main advantage of our project is the opportunities
                            that are given to each of its participants </p>
                        <a href="/Investment-Plan" class="button">Start Invest Now</a>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="feature__item">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="feature__item__content text-center content__space">
                                    <img src="{{ asset('assets/images/features/simple.png') }}" alt="Simple"
                                        class="content__space" />
                                    <p class="text-center secondary">The fast & simple <br>
                                        way to Invest crypto</p>
                                </div>
                                <div class="feature__item__content text-center">
                                    <img src="{{ asset('assets/images/features/professional.png') }}" alt="Professional"
                                        class="content__space" />
                                    <p class="text-center secondary">Professional, Safe <br>
                                        & Secure</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div
                                    class=" feature__item__content feature__item__content--alt text-center content__space">
                                    <img src="{{ asset('assets/images/features/multi-currency.png') }}" alt="Multi-Currency"
                                        class="content__space" />
                                    <p class="text-center secondary">Multi-Currency <br>
                                        Support </p>
                                </div>
                                <div class="feature__item__content text-center">
                                    <img src="{{ asset('assets/images/features/support.png') }}" alt="Support"
                                        class="content__space" />
                                    <p class="text-center secondary">Our people are available <br>
                                        for you 24/7</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ==== #feature section end ==== -->

<!-- ==== investment plan section start ==== -->
<section class="investment invest__alt section__space bg__img pos__rel over__hi"
    data-background="{{ asset('assets/images/investment/investment-bg.png') }}">
    <div class="container">
        <div class="investment__area">
            <div class="section__header mb-50">
                <h5 class="mb-23">Investment Offer</h5>
                <h2 class="mb-18">Our Investment Plan</h2>
                <p>Our experts have set up these investment plans strategically, which minimizes your risk of
                    investment and maximizes the return of interest.</p>
            </div>
            <div class="investment__plan__slider">
                <div class="investment__item">
                    <div class="investment__item__inner">
                        <img src="{{ asset('assets/images/investment/spo-10.png') }}" alt="Spo-10" />
                        <div class="investment__item__content text-center">
                            <p class="secondary text-center">SPO-10</p>
                            <hr />
                            <h4 class="text-center content__space--small">30%</h4>
                            <p class="text-center">Daily for 30 days</p>
                            <hr />
                            <div class="invest__limit content__space--small">
                                <div class="d-flex align-items-center justify-content-between">
                                    <p>Min. Invest</p>
                                    <p>$100</p>
                                </div>
                            </div>
                            <div class="invest__limit mb-35">
                                <div class="d-flex align-items-center justify-content-between">
                                    <p>Max. Invest</p>
                                    <p>$1000</p>
                                </div>
                            </div>
                            <a href="/Investment-Plan" class="button">Start Invest Now</a>
                        </div>
                    </div>
                </div>
                <div class="investment__item">
                    <div class="investment__item__inner">
                        <img src="{{ asset('assets/images/investment/spo-11.png') }}" alt="Spo-11" />
                        <div class="investment__item__content text-center">
                            <p class="secondary text-center">SPO-11</p>
                            <hr />
                            <h4 class="text-center content__space--small">35%</h4>
                            <p class="text-center">Daily for 30 days</p>
                            <hr />
                            <div class="invest__limit content__space--small">
                                <div class="d-flex align-items-center justify-content-between">
                                    <p>Min. Invest</p>
                                    <p>$100</p>
                                </div>
                            </div>
                            <div class="invest__limit mb-35">
                                <div class="d-flex align-items-center justify-content-between">
                                    <p>Max. Invest</p>
                                    <p>$2000</p>
                                </div>
                            </div>
                            <a href="/Investment-Plan" class="button">Start Invest Now</a>
                        </div>
                    </div>
                </div>
                <div class="investment__item">
                    <div class="investment__item__inner">
                        <img src="{{ asset('assets/images/investment/spo-12.png') }}" alt="Spo-12" />
                        <div class="investment__item__content text-center">
                            <p class="secondary text-center">SPO-12</p>
                            <hr />
                            <h4 class="text-center content__space--small">40%</h4>
                            <p class="text-center">Daily for 30 days</p>
                            <hr />
                            <div class="invest__limit content__space--small">
                                <div class="d-flex align-items-center justify-content-between">
                                    <p>Min. Invest</p>
                                    <p>$100</p>
                                </div>
                            </div>
                            <div class="invest__limit mb-35">
                                <div class="d-flex align-items-center justify-content-between">
                                    <p>Max. Invest</p>
                                    <p>$3000</p>
                                </div>
                            </div>
                            <a href="/Investment-Plan" class="button">Start Invest Now</a>
                        </div>
                    </div>
                </div>
                <div class="investment__item">
                    <div class="investment__item__inner">
                        <img src="{{ asset('assets/images/investment/spo-13.png') }}" alt="Spo-13" />
                        <div class="investment__item__content text-center">
                            <p class="secondary text-center">SPO-13</p>
                            <hr />
                            <h4 class="text-center content__space--small">45%</h4>
                            <p class="text-center">Daily for 30 days</p>
                            <hr />
                            <div class="invest__limit content__space--small">
                                <div class="d-flex align-items-center justify-content-between">
                                    <p>Min. Invest</p>
                                    <p>$100</p>
                                </div>
                            </div>
                            <div class="invest__limit mb-35">
                                <div class="d-flex align-items-center justify-content-between">
                                    <p>Max. Invest</p>
                                    <p>$4000</p>
                                </div>
                            </div>
                            <a href="/Investment-Plan" class="button">Start Invest Now</a>
                        </div>
                    </div>
                </div>
                <div class="investment__item">
                    <div class="investment__item__inner">
                        <img src="{{ asset('assets/images/investment/spo-10.png') }}" alt="Spo-10" />
                        <div class="investment__item__content text-center">
                            <p class="secondary text-center">SPO-10</p>
                            <hr />
                            <h4 class="text-center content__space--small">30%</h4>
                            <p class="text-center">Daily for 30 days</p>
                            <hr />
                            <div class="invest__limit content__space--small">
                                <div class="d-flex align-items-center justify-content-between">
                                    <p>Min. Invest</p>
                                    <p>$100</p>
                                </div>
                            </div>
                            <div class="invest__limit mb-35">
                                <div class="d-flex align-items-center justify-content-between">
                                    <p>Max. Invest</p>
                                    <p>$1000</p>
                                </div>
                            </div>
                            <a href="/Investment-Plan" class="button">Start Invest Now</a>
                        </div>
                    </div>
                </div>
                <div class="investment__item">
                    <div class="investment__item__inner">
                        <img src="{{ asset('assets/images/investment/spo-11.png') }}" alt="Spo-11" />
                        <div class="investment__item__content text-center">
                            <p class="secondary text-center">SPO-11</p>
                            <hr />
                            <h4 class="text-center content__space--small">35%</h4>
                            <p class="text-center">Daily for 30 days</p>
                            <hr />
                            <div class="invest__limit content__space--small">
                                <div class="d-flex align-items-center justify-content-between">
                                    <p>Min. Invest</p>
                                    <p>$100</p>
                                </div>
                            </div>
                            <div class="invest__limit mb-35">
                                <div class="d-flex align-items-center justify-content-between">
                                    <p>Max. Invest</p>
                                    <p>$2000</p>
                                </div>
                            </div>
                            <a href="/Investment-Plan" class="button">Start Invest Now</a>
                        </div>
                    </div>
                </div>
                <div class="investment__item">
                    <div class="investment__item__inner">
                        <img src="{{ asset('assets/images/investment/spo-12.png') }}" alt="Spo-12" />
                        <div class="investment__item__content text-center">
                            <p class="secondary text-center">SPO-12</p>
                            <hr />
                            <h4 class="text-center content__space--small">40%</h4>
                            <p class="text-center">Daily for 30 days</p>
                            <hr />
                            <div class="invest__limit content__space--small">
                                <div class="d-flex align-items-center justify-content-between">
                                    <p>Min. Invest</p>
                                    <p>$100</p>
                                </div>
                            </div>
                            <div class="invest__limit mb-35">
                                <div class="d-flex align-items-center justify-content-between">
                                    <p>Max. Invest</p>
                                    <p>$3000</p>
                                </div>
                            </div>
                            <a href="/Investment-Plan" class="button">Start Invest Now</a>
                        </div>
                    </div>
                </div>
                <div class="investment__item">
                    <div class="investment__item__inner">
                        <img src="{{ asset('assets/images/investment/spo-13.png') }}" alt="Spo-13" />
                        <div class="investment__item__content text-center">
                            <p class="secondary text-center">SPO-13</p>
                            <hr />
                            <h4 class="text-center content__space--small">45%</h4>
                            <p class="text-center">Daily for 30 days</p>
                            <hr />
                            <div class="invest__limit content__space--small">
                                <div class="d-flex align-items-center justify-content-between">
                                    <p>Min. Invest</p>
                                    <p>$100</p>
                                </div>
                            </div>
                            <div class="invest__limit mb-35">
                                <div class="d-flex align-items-center justify-content-between">
                                    <p>Max. Invest</p>
                                    <p>$4000</p>
                                </div>
                            </div>
                            <a href="/Investment-Plan" class="button">Start Invest Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section__cta text-center">
                <a href="/Investment-Plan" class="button">View All Plan</a>
            </div>
        </div>
    </div>
    <div class="investment__animation">
        <img src="{{ asset('assets/images/investment/btc.png') }}" alt="bitcoin" class="btc" />
        <img src="{{ asset('assets/images/investment/eth.png') }}" alt="Ethereum" class="eth" />
        <img src="{{ asset('assets/images/investment/ltc.png') }}" alt="Litecoin" class="ltc" />
    </div>
</section>
<!-- ==== #investment plan section end ==== -->

<!-- ==== win chance section start ==== -->
<section class="win section__space pos__rel over__hi">
    <div class="container">
        <div class="win__area">
            <div class="row d-flex align-items-center">
                <div class="col-lg-5">
                    <div class="win__thumb thumb__rtl column__space ">
                        <img src="{{ asset('assets/images/win/illustration.png') }}" alt="Win Chance" />
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <div class="win__content">
                        <div class="section__header text-start ">
                            <h5 class="content__space--alt text-start">Get Chance to Win</h5>
                            <h2 class="content__space--alt text-start">Weekly lottery Win up
                                to $1 Million</h2>
                            <p class="mb-35 text-start">
                                For every active $ 25 investment you will receive a lottery ticket to our weekly
                                raffle every Monday. Pick your lucky numbers and win up to $ 1 million. The more
                                numbers you match, the more money you win!
                            </p>
                            <a href="/Investment-Plan" class="button">Start Invest Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="step__animation">
        <img src="{{ asset('assets/images/lottery/58.png') }}" alt="Lottery Number" class="lot58" />
        <img src="{{ asset('assets/images/lottery/45.png') }}" alt="Lottery Number" class="lot45" />
        <img src="{{ asset('assets/images/lottery/25.png') }}" alt="Lottery Number" class="lot25" />
        <img src="{{ asset('assets/images/lottery/10.png') }}" alt="Lottery Number" class="lot10" />
        <img src="{{ asset('assets/images/lottery/58.png') }}" alt="Lottery Number" class="lot582" />
        <img src="{{ asset('assets/images/lottery/17.png') }}" alt="Lottery Number" class="lot17" />
    </div>
</section>
<!-- ==== #win chance section end ==== -->

<!-- ==== profit section start ==== -->
<section class="profit pos__rel">
    <div class="container">
        <div class="profit__area bg__img" data-background="{{ asset('assets/images/ready/line-bg.png') }}">
            <div class="row d-flex align-items-center">
                <div class="col-lg-6">
                    <div class="profit__content ">
                        <h5 class="content__space">Big profit and Minimal Risks</h5>
                        <h3 class="mb-38">Ready To Start Your Earnings
                            Through Crypto Currency</h3>
                        <div class="button__group">
                            <a href="/Authentication/Registeration" class="button">Get Started</a>
                            <a href="/About-Us" class="button">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 d-none d-lg-block">
                    <div class="profit__illustration">
                        <img src="{{ asset('assets/images/ready/ready-illustration.png') }}" alt="Illustration" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ==== #profit section end ==== -->

<!-- ==== payment section start ==== -->
<section class="payment section__space over__hi bg__img" data-background="{{ asset('assets/images/currency/payment-bg.png') }}">
    <div class="container">
        <div class="payment__area">
            <div class="row d-flex align-items-center">
                <div class="col-lg-5 d-none d-lg-block">
                    <div class="payment__thumb thumb__rtl ">
                        <img src="{{ asset('assets/images/currency/currency.png') }}" alt="Wide Payment" />
                    </div>
                </div>
                <div class="col-lg-6 offset-xl-1">
                    <div class="payment__content">
                        <div class="section__header section__header__space ">
                            <h5 class="content__space text-start">We accept</h5>
                            <h2 class="content__space text-start">A wide range of
                                payment systems</h2>
                            <p class="text-start">For the investors' convenience, Spoment offers a wide range of
                                payment systems for
                                depositing funds and receiving payments.</p>
                        </div>
                        <div class="payment__item content__space ">
                            <div class="payment__item__inner">
                                <img src="{{ asset('assets/images/currency/no-limit.png') }}" alt="No Limit" />
                                <div>
                                    <h4 class="content__space--small">No Limit</h4>
                                    <p>Unlimited maximum withdrawal amount &
                                        Withdrawal In 24/7</p>
                                </div>
                            </div>
                        </div>
                        <div class="payment__item content__space ">
                            <div class="payment__item__inner">
                                <img src="assets/images/currency/conversion.png" alt="Conversion" />
                                <div>
                                    <h4 class="content__space--small">Higher Conversions</h4>
                                    <p>Get better rates than your banks & avoid any
                                        unnecessary transfer fees and challenges.</p>
                                </div>
                            </div>
                        </div>
                        <div class="payment__item ">
                            <div class="payment__item__inner">
                                <img src="assets/images/currency/minimize.png" alt="Minimize" />
                                <div>
                                    <h4 class="content__space--small">Cost Minimize</h4>
                                    <p>Saving on currency exchange is easy with our
                                        transparent pricing</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ==== #payment section end ==== -->

<!-- ==== transaction table start ==== -->
<section class="section__space transaction pos__rel bg__img"
    data-background="./assets/images/transaction/transaction-bg.png">
    <div class="container">
        <div class="transaction__area">
            <div class="section__header ">
                <h5 class="mb-23">User Statistics</h5>
                <h2 class="mb-15">Latest Transactions</h2>
                <p class="mb-38">Our goal is to simplify investing so that anyone can be an investor.Withthis
                    in mind, we hand-pick the investments we offer on our platform.</p>
                <div class="button__group text-center cta__space">
                    <a href="#deposit" class="button transaction__tab__btn transaction__tab__btn__active">Last
                        Deposit</a>
                    <a href="#withdraw" class="button transaction__tab__btn">Last Withdraw</a>
                </div>
            </div>
            <div class="transaction__table__area ">
                <div class="transaction__data" id="deposit">
                    <div class="table__wrapper">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Daily dividend</th>
                                    <th>Amounts</th>
                                    <th>Deposit By</th>
                                    <th>Currency</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="transaction__author">
                                            <img src="assets/images/transaction/ken.png" alt="Ken Shaw" />
                                            <span>Ken Shaw</span>
                                        </div>
                                    </td>
                                    <td>$10.50</td>
                                    <td>$0.09</td>
                                    <td>$718</td>
                                    <td>30 Days</td>
                                    <td>
                                        <div class="transaction__currency">
                                            <img src="assets/images/transaction/btc.png" alt="Btc" />
                                            <span>BTC</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="transaction__author">
                                            <img src="assets/images/transaction/melody.png" alt="Melody Briggs" />
                                            <span>Melody Briggs</span>
                                        </div>
                                    </td>
                                    <td>$19.50</td>
                                    <td>$11.09</td>
                                    <td>$716</td>
                                    <td>30 Days</td>
                                    <td>
                                        <div class="transaction__currency">
                                            <img src="assets/images/transaction/trx.png" alt="Trx" />
                                            <span>TRX</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="transaction__author">
                                            <img src="assets/images/transaction/cheryl.png" alt="Cheryl Brady" />
                                            <span>Cheryl Brady</span>
                                        </div>
                                    </td>
                                    <td>$20.50</td>
                                    <td>$13.09</td>
                                    <td>$618</td>
                                    <td>30 Days</td>
                                    <td>
                                        <div class="transaction__currency">
                                            <img src="assets/images/transaction/ltc.png" alt="Ltc" />
                                            <span>LTC</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="transaction__author">
                                            <img src="assets/images/transaction/tony.png" alt="Tony Casey" />
                                            <span>Tony Casey</span>
                                        </div>
                                    </td>
                                    <td>$30.50</td>
                                    <td>$14.09</td>
                                    <td>$818</td>
                                    <td>30 Days</td>
                                    <td>
                                        <div class="transaction__currency">
                                            <img src="assets/images/transaction/eth.png" alt="Eth" />
                                            <span>ETH</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="transaction__author">
                                            <img src="assets/images/transaction/hazel.png" alt="Hazel Cain" />
                                            <span>Hazel Cain</span>
                                        </div>
                                    </td>
                                    <td>$44.50</td>
                                    <td>$18.09</td>
                                    <td>$717</td>
                                    <td>30 Days</td>
                                    <td>
                                        <div class="transaction__currency">
                                            <img src="assets/images/transaction/trxt.png" alt="Trx" />
                                            <span>TRX</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="transaction__author">
                                            <img src="assets/images/transaction/chad.png" alt="Chad Cox" />
                                            <span>Chad Cox</span>
                                        </div>
                                    </td>
                                    <td>$45.50</td>
                                    <td>$22.09</td>
                                    <td>$315</td>
                                    <td>30 Days</td>
                                    <td>
                                        <div class="transaction__currency">
                                            <img src="assets/images/transaction/xrp.png" alt="Xrp" />
                                            <span>XRP</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="transaction__author">
                                            <img src="assets/images/transaction/fred.png" alt="Fred Lane" />
                                            <span>Fred Lane</span>
                                        </div>
                                    </td>
                                    <td>$22.50</td>
                                    <td>$33.09</td>
                                    <td>$915</td>
                                    <td>30 Days</td>
                                    <td>
                                        <div class="transaction__currency">
                                            <img src="assets/images/transaction/bnb.png" alt="Bnb" />
                                            <span>BNB</span>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="transaction__data" id="withdraw">
                    <div class="table__wrapper">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Daily dividend</th>
                                    <th>Amounts</th>
                                    <th>Withdraw By</th>
                                    <th>Currency</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="transaction__author">
                                            <img src="assets/images/transaction/ken.png" alt="Ken Shaw" />
                                            <span>Ken Shaw</span>
                                        </div>
                                    </td>
                                    <td>$10.50</td>
                                    <td>$0.09</td>
                                    <td>$718</td>
                                    <td>30 Days</td>
                                    <td>
                                        <div class="transaction__currency">
                                            <img src="assets/images/transaction/btc.png" alt="Btc" />
                                            <span>BTC</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="transaction__author">
                                            <img src="assets/images/transaction/melody.png" alt="Melody Briggs" />
                                            <span>Melody Briggs</span>
                                        </div>
                                    </td>
                                    <td>$19.50</td>
                                    <td>$11.09</td>
                                    <td>$716</td>
                                    <td>30 Days</td>
                                    <td>
                                        <div class="transaction__currency">
                                            <img src="assets/images/transaction/trx.png" alt="Trx" />
                                            <span>TRX</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="transaction__author">
                                            <img src="assets/images/transaction/cheryl.png" alt="Cheryl Brady" />
                                            <span>Cheryl Brady</span>
                                        </div>
                                    </td>
                                    <td>$20.50</td>
                                    <td>$13.09</td>
                                    <td>$618</td>
                                    <td>30 Days</td>
                                    <td>
                                        <div class="transaction__currency">
                                            <img src="assets/images/transaction/ltc.png" alt="Ltc" />
                                            <span>LTC</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="transaction__author">
                                            <img src="assets/images/transaction/tony.png" alt="Tony Casey" />
                                            <span>Tony Casey</span>
                                        </div>
                                    </td>
                                    <td>$30.50</td>
                                    <td>$14.09</td>
                                    <td>$818</td>
                                    <td>30 Days</td>
                                    <td>
                                        <div class="transaction__currency">
                                            <img src="assets/images/transaction/eth.png" alt="Eth" />
                                            <span>ETH</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="transaction__author">
                                            <img src="assets/images/transaction/hazel.png" alt="Hazel Cain" />
                                            <span>Hazel Cain</span>
                                        </div>
                                    </td>
                                    <td>$44.50</td>
                                    <td>$18.09</td>
                                    <td>$717</td>
                                    <td>30 Days</td>
                                    <td>
                                        <div class="transaction__currency">
                                            <img src="assets/images/transaction/trxt.png" alt="Trx" />
                                            <span>TRX</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="transaction__author">
                                            <img src="assets/images/transaction/chad.png" alt="Chad Cox" />
                                            <span>Chad Cox</span>
                                        </div>
                                    </td>
                                    <td>$45.50</td>
                                    <td>$22.09</td>
                                    <td>$315</td>
                                    <td>30 Days</td>
                                    <td>
                                        <div class="transaction__currency">
                                            <img src="assets/images/transaction/xrp.png" alt="Xrp" />
                                            <span>XRP</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="transaction__author">
                                            <img src="assets/images/transaction/fred.png" alt="Fred Lane" />
                                            <span>Fred Lane</span>
                                        </div>
                                    </td>
                                    <td>$22.50</td>
                                    <td>$33.09</td>
                                    <td>$915</td>
                                    <td>30 Days</td>
                                    <td>
                                        <div class="transaction__currency">
                                            <img src="assets/images/transaction/bnb.png" alt="Bnb" />
                                            <span>BNB</span>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="transaction__animation">
        <img src="assets/images/transaction/wrestler.png" alt="Wrestler" class="wrestler " />
        <img src="assets/images/transaction/footballer.png" alt="Footballer" class="footballer " />
    </div>
</section>
<!-- ==== #transaction table end ==== -->

<!-- ==== invest section start ==== -->
<section class="invest section__space">
    <div class="container">
        <div class="invest__area">
            <div class="section__header mb-55">
                <h5 class="content__space--alt">How You Can Invest Your</h5>
                <h2 class="content__space">Money More Smartly</h2>
                <p>It’s a simple way to start invest.You don’t need a deep wallet to start behoof. Pick an amount
                    you can afford, and build your behoof over time.</p>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-4">
                    <div class="invest__items column__space ">
                        <div class="invest__img__group cta__space">
                            <img src="assets/images/invest/register.png" alt="register" />
                            <span>01</span>
                        </div>
                        <h4>Register</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="invest__items column__space ">
                        <div class="invest__img__group cta__space">
                            <img src="assets/images/invest/invest.png" alt="Invest" />
                            <span>02</span>
                        </div>
                        <h4>Invest</h4>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="invest__items ">
                        <div class="invest__img__group cta__space">
                            <img src="assets/images/invest/profit.png" alt="Profit" />
                            <span>03</span>
                        </div>
                        <h4>Get a Profit</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ==== #invest section end ==== -->

<!-- ==== affiliate section start ==== -->
<section class="affiliate section__space bg__img" data-background="./assets/images/affiliate/affiliate-bg.png">
    <div class="container">
        <div class="affiliate__area">
            <div class="section__header section__header__space ">
                <h5 class="mb-25">What You Will Get As</h5>
                <h2 class="mb-15">An Affiliate Partner</h2>
                <p class="mb-35">The affiliate program allows project participants to receive additional profit
                    on the investment amount 10% to 20% on 1st Level for every deposit of your referrals depending
                    on their numbers: 1-200 Referrals: 10%, 201-500 Referrals.</p>
                <a href="register.html" class="button">Join Us</a>
            </div>
            <div class="affiliate__commission">
                <div class="row d-flex align-items-center">
                    <div class="col-md-6 col-lg-4">
                        <div class="affiliate__items column__space ">
                            <div class="affiliate__img__group">
                                <img src="assets/images/affiliate/icon-bg.png" alt="Spider Nest" />
                                <img src="assets/images/affiliate/one.png" alt="Step" />
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
                                <img src="assets/images/affiliate/icon-bg.png" alt="Spider Nest" />
                                <img src="assets/images/affiliate/two.png" alt="Step" />
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
                                <img src="assets/images/affiliate/icon-bg.png" alt="Spider Nest" />
                                <img src="assets/images/affiliate/three.png" alt="Step" />
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

<!-- ==== testimonial section start ==== -->
<section class="testimonial section__space pos__rel over__hi">
    <div class="container">
        <div class="testimonial__area">
            <div class="section__header mb-55">
                <h5 class="content__space--alt">Testimonial</h5>
                <h2 class="mb-18">40,000 Happy Clients
                    Around The World</h2>
                <p>We have many happy investors invest with us .Some impresions from our Customers! PLease read some
                    of the lovely things our Customers say about us.</p>
            </div>
            <div class="testimonial__item__wrapper">
                <div class="testimonial__item bg__img" data-background="assets/images/testimonial/quotation.png">
                    <h5 class="cta__space">A great company and I am glad that I am a member.</h5>
                    <p class="primary cta__space">Spoment is a great company and I am glad that I am a member. The
                        platform is continuously accessible and all functions and payouts work exactly as they
                        should.
                    </p>
                    <div class="testimonial__author">
                        <div class="testimonial__author__info">
                            <img src="assets/images/testimonial/jonathan.png" alt="jonathan" />
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
                <div class="testimonial__item bg__img" data-background="assets/images/testimonial/quotation.png">
                    <h5 class="cta__space">A great company and I am glad that I am a member.</h5>
                    <p class="primary cta__space">Spoment is a great company and I am glad that I am a member. The
                        platform is continuously accessible and all functions and payouts work exactly as they
                        should.
                    </p>
                    <div class="testimonial__author">
                        <div class="testimonial__author__info">
                            <img src="assets/images/testimonial/jonathan.png" alt="jonathan" />
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
                <div class="testimonial__item bg__img" data-background="assets/images/testimonial/quotation.png">
                    <h5 class="cta__space">A great company and I am glad that I am a member.</h5>
                    <p class="primary cta__space">Spoment is a great company and I am glad that I am a member. The
                        platform is continuously accessible and all functions and payouts work exactly as they
                        should.
                    </p>
                    <div class="testimonial__author">
                        <div class="testimonial__author__info">
                            <img src="assets/images/testimonial/jonathan.png" alt="jonathan" />
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
                <div class="testimonial__item bg__img" data-background="assets/images/testimonial/quotation.png">
                    <h5 class="cta__space">A great company and I am glad that I am a member.</h5>
                    <p class="primary cta__space">Spoment is a great company and I am glad that I am a member. The
                        platform is continuously accessible and all functions and payouts work exactly as they
                        should.
                    </p>
                    <div class="testimonial__author">
                        <div class="testimonial__author__info">
                            <img src="assets/images/testimonial/jonathan.png" alt="jonathan" />
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
                <div class="testimonial__item bg__img" data-background="assets/images/testimonial/quotation.png">
                    <h5 class="cta__space">A great company and I am glad that I am a member.</h5>
                    <p class="primary cta__space">Spoment is a great company and I am glad that I am a member. The
                        platform is continuously accessible and all functions and payouts work exactly as they
                        should.
                    </p>
                    <div class="testimonial__author">
                        <div class="testimonial__author__info">
                            <img src="assets/images/testimonial/jonathan.png" alt="jonathan" />
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
                <div class="testimonial__item bg__img" data-background="assets/images/testimonial/quotation.png">
                    <h5 class="cta__space">A great company and I am glad that I am a member.</h5>
                    <p class="primary cta__space">Spoment is a great company and I am glad that I am a member. The
                        platform is continuously accessible and all functions and payouts work exactly as they
                        should.
                    </p>
                    <div class="testimonial__author">
                        <div class="testimonial__author__info">
                            <img src="assets/images/testimonial/jonathan.png" alt="jonathan" />
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
        <img src="assets/images/testimonial/sm-circle.png" alt="Circle" class="circle__sm" />
        <img src="assets/images/testimonial/sm-circle.png" alt="Circle" class="circle__sm--two" />
        <img src="assets/images/testimonial/large-circle.png" alt="Circle" class="circle__lg" />
        <img src="assets/images/testimonial/large-circle.png" alt="Circle" class="circle__lg--two" />
    </div>
</section>
<!-- ==== #testimonial section end ==== -->

<!-- ==== trustworthy section start ==== -->
<section class="trust section__space__bottom">
    <div class="container">
        <div class="trust__area">
            <div class="row d-flex align-items-center">
                <div class="col-lg-6 d-none d-lg-block">
                    <div class="trust__illustration column__space thumb__rtl ">
                        <img src="assets/images/testimonial/rugby-player.png" alt="Rugby Player" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section__header text-start ">
                        <h5 class="content__space text-start">Trustworthy Platform</h5>
                        <h2 class="cta__space text-start">We are the #1 global
                            platform for sports
                            investing</h2>
                        <a href="/Investment-Plan" class="button">Start Investing</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ==== #trustworthy section end ==== -->
