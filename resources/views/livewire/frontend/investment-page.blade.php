@section('title', 'Investment Plan')

<!-- ==== banner section start ==== -->
<section class="banner banner--secondary bg__img pos__rel over__hi"
    data-background="{{ asset('assets/images/banner/banner-bg-two.png') }}">
    <div class="container">
        <div class="banner__area ">
            <h1 class="pt-ten">Investment</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb--secondary">
                    <li class="breadcrumb-item">
                        <a href="/">Home</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Investment
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="banner__animation">
        <img src="{{ asset('assets/images/banner/banner-btc.png') }}" alt="Bitcoin" class="btc btc--two" />
        <img src="{{ asset('assets/images/banner/banner-eth.png') }}" alt="Ethereum" class="eth" />
        <img src="{{ asset('assets/images/banner/invest-illustration.png') }}" alt="Banner" class="illustration" />
    </div>
</section>
<!-- ==== #banner section end ==== -->

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
                                @foreach ($InvestmentPlan as $plan)
                                    <option value="{{ $plan->id }}">{{ $plan->PlanTitle }} After 48 Hours</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    {{-- <div class="col-lg-4 column__space">
                        <div class="plan__select">
                            <label class="secondary content__space--extra--small">Select Payment Method</label>
                            <select id="selectPayment">
                                @foreach ($InvestmentPlan as $plan)
                                    <option value="{{ $plan->id }}">{{ $plan->PlanTitle }} After 48 Hours</option>
                                @endforeach
                            </select>
                        </div>
                    </div> --}}
                    <div class="col-lg-4">
                        <div class="plan__select">
                            <label class="secondary content__space--extra--small">Enter The amount</label>
                            <input type="number" name="amount" id="investAmount" required="required"
                                placeholder="ENTER INVESTMENT AMOUNT (USD)" value="25" min="0" />
                        </div>
                    </div>
                    <div class="col-lg-3 pt-lg-5">
                        <div class="plan__cta text-start text-lg-center">
                            <button class="button primary">Start Invest Now</button>
                        </div>
                    </div>
                </div>
                <div class="row cta__space">
                    <div class="col-lg-7">
                        <div class="daily-profit column__space">
                            <p class="secondary content__space--small">Total Percent</p>
                            <h3> <span id="profitPercent"></span> USD</h3>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="total-profit">
                            <p class="secondary content__space--small">Total Profit</p>
                            <h3><span id="totalProfit"></span> USD</h3>
                        </div>
                    </div>
                </div>
                {{-- <div class="row d-flex align-items-center">
                    <div class="col-lg-9">
                        <div class="slide__group column__space">
                            <div class="output d-flex">
                                <span class="range__output__value">296</span> <span>USD</span>
                            </div>
                            <input class="range__slider" type="range" name="invest__range" id="rangeSlider"
                                max="1000" min="1" value="296" />
                            <div class="slide__min__max">
                                <p>1.00 USD</p>
                                <p>1000 USD</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="plan__cta text-start text-lg-center">
                            <button class="button primary">Start Invest Now</button>
                        </div>
                    </div>
                </div> --}}
            </form>
        </div>
    </div>
</section>
<!-- ==== #pricing plan section end ==== -->

<!-- ==== investment plan section start ==== -->
<section class="investment investment--alt section__space__top bg__img pos__rel over__hi"
    data-background="{{ asset('assets/images/investment/investment-bg.png') }}">
    <div class="container">
        <div class="investment__area">
            <div class="section__header section__header__space ">
                <h5 class="content__space">Investment Offer</h5>
                <h2 class="content__space--small">Our Investment Plan</h2>
                <p>Our experts have set up these investment plans strategically, which minimizes your risk of
                    investment and maximizes the return of interest.</p>
            </div>
            <div class="row content__space">
                @foreach ($InvestmentPlan as $plan)
                    <div class="col-sm-6 col-xl-3">
                        <div class="investment__item column__space--secondary">
                            <div class="investment__item__inner">
                                <img src="{{ asset('assets/images/investment/spo-10.png') }}" alt="Spo-10" />
                                <div class="investment__item__content text-center">
                                    <p class="secondary text-center">{{ $plan->PlanTitle }}</p>
                                    <hr />
                                    <h4 class="text-center content__space--small">{{ $plan->PlanProfit }}%</h4>
                                    <p class="text-center">After 48 Hours</p>
                                    <hr />
                                    <div class="invest__limit content__space--small">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <p>Min. Invest</p>
                                            <p>${{ $plan->MinDeposit }}</p>
                                        </div>
                                    </div>
                                    <div class="invest__limit cta__space">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <p>Max. Invest</p>
                                            <p>${{ $plan->MaxDeposit }}</p>
                                        </div>
                                    </div>
                                    <a href="{{ route('register') }}" class="button">Start Invest Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="investment__animation">
        <img src="{{ asset('assets/images/investment/btc.png') }}" alt="bitcoin" class="btc" />
        <img src="{{ asset('assets/images/investment/eth.png') }}" alt="Ethereum" class="eth" />
        <img src="{{ asset('assets/images/investment/ltc.png') }}" alt="Litecoin" class="ltc" />
    </div>
    <div class="testimonial__animation">
        <img src="{{ asset('assets/images/testimonial/large-circle.png') }}" alt="Circle" class="circle__lg" />
        <img src="{{ asset('assets/images/testimonial/large-circle.png') }}" alt="Circle" class="circle__lg--two" />
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
                            <p class="cta__space text-start">
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
<section class="profit section__space__bottom">
    <div class="container">
        <div class="profit__area bg__img pos__rel" data-background="{{ asset('assets/images/ready/line-bg.png') }}">
            <div class="row d-flex align-items-center">
                <div class="col-lg-6">
                    <div class="profit__content ">
                        <h5 class="content__space">Big profit and Minimal Risks</h5>
                        <h3 class="cta__space">Ready To Start Your Earnings
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

<!-- ==== transaction table start ==== -->
<section class="section__space transaction pos__rel bg__img"
    data-background="{{ asset('assets/images/transaction/transaction-bg.png') }}">
    <div class="container">
        <div class="transaction__area">
            <div class="section__header ">
                <h5 class="content__space--small">User Statistics</h5>
                <h2 class="content__space--small">Latest Transactions</h2>
                <p class="cta__space">Our goal is to simplify investing so that anyone can be an investor.Withthis
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
        <img src="{{ asset('assets/images/transaction/wrestler.png') }}" alt="Wrestler" class="wrestler " />
        <img src="{{ asset('assets/images/transaction/footballer.png') }}" alt="Footballer" class="footballer " />
    </div>
</section>
<!-- ==== #transaction table end ==== -->

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

<!-- ==== trustworthy section start ==== -->
<section class="trust section__space__bottom">
    <div class="container">
        <div class="trust__area">
            <div class="row d-flex align-items-center">
                <div class="col-lg-6 d-none d-lg-block">
                    <div class="trust__illustration column__space thumb__rtl ">
                        <img src="{{ asset('assets/images/testimonial/rugby-player.png') }}" alt="Rugby Player" />
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
