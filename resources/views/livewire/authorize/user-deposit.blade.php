@section('title', 'My Deposit')
<div class="main__content">
                            <div class="collapse__sidebar">
                                <h4>Dashboard</h4>
                                <a href="javascript:void(0)" class="collapse__sidebar__btn">
                                    <i class="fas fa-bars"></i>
                                </a>
                            </div>
                            <div class="open__deposit">
                                <h5>Open Deposit</h5>
                            </div>
                            <form action="#" method="post" id="depositForm" class="actionForm">
                                <fieldset class="group">
                                    <p class="legen legen__active">Select Payment System</p>
                                    <div class="payment__system__checkbox__wrapper payment__system__method">
                                        <div class="row">
                                            <div class="col-md-6 col-lg-3">
                                                <div class="payment__system__checkbox__single">
                                                    <label for="withspoment" class="check_wrap">
                                                        <input type="checkbox" required="required"
                                                            class="pay__system__check" id="withspoment" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <div class="pay__system">
                                                        <div class="payment__checkbox__inner">
                                                            <div class="payment__system__icon">
                                                                <img src="{{ asset('assets/images/dashboard/spoment.png') }}"
                                                                    alt="Currency" />
                                                            </div>
                                                            <div class="payment__system__icon__info">
                                                                <h6>Spoment</h6>
                                                                <p class="tertiary">With Balance</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-3">
                                                <div class="payment__system__checkbox__single">
                                                    <label for="withdash" class="check_wrap">
                                                        <input type="checkbox" class="pay__system__check"
                                                            id="withdash" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <div class="pay__system">
                                                        <div class="payment__checkbox__inner">
                                                            <div class="payment__system__icon">
                                                                <img src="{{ asset('assets/images/transaction/dash.png') }}"
                                                                    alt="Currency" />
                                                            </div>
                                                            <div class="payment__system__icon__info">
                                                                <h6>Dash</h6>
                                                                <p class="tertiary">dash</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-3">
                                                <div class="payment__system__checkbox__single">
                                                    <label for="withneo" class="check_wrap">
                                                        <input type="checkbox" class="pay__system__check"
                                                            id="withneo" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <div class="pay__system">
                                                        <div class="payment__checkbox__inner">
                                                            <div class="payment__system__icon">
                                                                <img src="{{ asset('assets/images/transaction/neo.png') }}"
                                                                    alt="Currency" />
                                                            </div>
                                                            <div class="payment__system__icon__info">
                                                                <h6>NEO</h6>
                                                                <p class="tertiary">neo</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-3">
                                                <div class="payment__system__checkbox__single">
                                                    <label for="withbtc" class="check_wrap">
                                                        <input type="checkbox" class="pay__system__check"
                                                            id="withbtc" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <div class="pay__system">
                                                        <div class="payment__checkbox__inner">
                                                            <div class="payment__system__icon">
                                                                <img src="{{ asset('assets/images/transaction/btc.png') }}"
                                                                    alt="Currency" />
                                                            </div>
                                                            <div class="payment__system__icon__info">
                                                                <h6>Bitcoin</h6>
                                                                <p class="tertiary">BTC</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-lg-3">
                                                <div class="payment__system__checkbox__single">
                                                    <label for="withtron" class="check_wrap">
                                                        <input type="checkbox" class="pay__system__check"
                                                            id="withtron" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <div class="pay__system">
                                                        <div class="payment__checkbox__inner">
                                                            <div class="payment__system__icon">
                                                                <img src="{{ asset('assets/images/transaction/trx.png') }}"
                                                                    alt="Currency" />
                                                            </div>
                                                            <div class="payment__system__icon__info">
                                                                <h6>Tron</h6>
                                                                <p class="tertiary">trx</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-3">
                                                <div class="payment__system__checkbox__single">
                                                    <label for="withtether" class="check_wrap">
                                                        <input type="checkbox" class="pay__system__check"
                                                            id="withtether" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <div class="pay__system">
                                                        <div class="payment__checkbox__inner">
                                                            <div class="payment__system__icon">
                                                                <img src="{{ asset('assets/images/transaction/tether.png') }}"
                                                                    alt="Currency" />
                                                            </div>
                                                            <div class="payment__system__icon__info">
                                                                <h6>Tether</h6>
                                                                <p class="tertiary">usd</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-3">
                                                <div class="payment__system__checkbox__single">
                                                    <label for="withltc" class="check_wrap">
                                                        <input type="checkbox" class="pay__system__check"
                                                            id="withltc" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <div class="pay__system">
                                                        <div class="payment__checkbox__inner">
                                                            <div class="payment__system__icon">
                                                                <img src="{{ asset('assets/images/transaction/ltc.png') }}"
                                                                    alt="Currency" />
                                                            </div>
                                                            <div class="payment__system__icon__info">
                                                                <h6>Litecoin</h6>
                                                                <p class="tertiary">LTC</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-3">
                                                <div class="payment__system__checkbox__single">
                                                    <label for="withmonero" class="check_wrap">
                                                        <input type="checkbox" class="pay__system__check"
                                                            id="withmonero" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <div class="pay__system">
                                                        <div class="payment__checkbox__inner">
                                                            <div class="payment__system__icon">
                                                                <img src="{{ asset('assets/images/transaction/monero.png') }}"
                                                                    alt="Currency" />
                                                            </div>
                                                            <div class="payment__system__icon__info">
                                                                <h6>Monero</h6>
                                                                <p class="tertiary">XMR</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-lg-3">
                                                <div class="payment__system__checkbox__single">
                                                    <label for="withdoge" class="check_wrap">
                                                        <input type="checkbox" class="pay__system__check"
                                                            id="withdoge" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <div class="pay__system">
                                                        <div class="payment__checkbox__inner">
                                                            <div class="payment__system__icon">
                                                                <img src="{{ asset('assets/images/transaction/doge.png') }}"
                                                                    alt="Currency" />
                                                            </div>
                                                            <div class="payment__system__icon__info">
                                                                <h6>Dogecoin</h6>
                                                                <p class="tertiary">Doge</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-3">
                                                <div class="payment__system__checkbox__single">
                                                    <label for="witheth" class="check_wrap">
                                                        <input type="checkbox" class="pay__system__check"
                                                            id="witheth" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <div class="pay__system">
                                                        <div class="payment__checkbox__inner">
                                                            <div class="payment__system__icon">
                                                                <img src="{{ asset('assets/images/transaction/eth.png') }}"
                                                                    alt="Currency" />
                                                            </div>
                                                            <div class="payment__system__icon__info">
                                                                <h6>Ethereum</h6>
                                                                <p class="tertiary">ETH</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-3">
                                                <div class="payment__system__checkbox__single">
                                                    <label for="withpm" class="check_wrap">
                                                        <input type="checkbox" class="pay__system__check" id="withpm" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <div class="pay__system">
                                                        <div class="payment__checkbox__inner">
                                                            <div class="payment__system__icon">
                                                                <img src="{{ asset('assets/images/transaction/trxt.png') }}"
                                                                    alt="Currency" />
                                                            </div>
                                                            <div class="payment__system__icon__info">
                                                                <h6>Perfect M.</h6>
                                                                <p class="tertiary">PM</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-3">
                                                <div class="payment__system__checkbox__single">
                                                    <label for="withbinance" class="check_wrap">
                                                        <input type="checkbox" class="pay__system__check"
                                                            id="withbinance" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <div class="pay__system">
                                                        <div class="payment__checkbox__inner">
                                                            <div class="payment__system__icon">
                                                                <img src="{{ asset('assets/images/transaction/binance.png') }}"
                                                                    alt="Currency" />
                                                            </div>
                                                            <div class="payment__system__icon__info">
                                                                <h6>Binance</h6>
                                                                <p class="tertiary">Bnb</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-lg-3">
                                                <div class="payment__system__checkbox__single">
                                                    <label for="withepay" class="check_wrap">
                                                        <input type="checkbox" class="pay__system__check"
                                                            id="withepay" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <div class="pay__system">
                                                        <div class="payment__checkbox__inner">
                                                            <div class="payment__system__icon">
                                                                <img src="{{ asset('assets/images/transaction/epay.png') }}"
                                                                    alt="Currency" />
                                                            </div>
                                                            <div class="payment__system__icon__info">
                                                                <h6>Epaycore</h6>
                                                                <p class="tertiary">ePay</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-3">
                                                <div class="payment__system__checkbox__single">
                                                    <label for="withripple" class="check_wrap">
                                                        <input type="checkbox" class="pay__system__check"
                                                            id="withripple" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <div class="pay__system">
                                                        <div class="payment__checkbox__inner">
                                                            <div class="payment__system__icon">
                                                                <img src="{{ asset('assets/images/transaction/ripple.png') }}"
                                                                    alt="Currency" />
                                                            </div>
                                                            <div class="payment__system__icon__info">
                                                                <h6>Ripple</h6>
                                                                <p class="tertiary">XRP</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-3">
                                                <div
                                                    class="payment__system__checkbox__single column__space__negative--secondary">
                                                    <label for="withppc" class="check_wrap">
                                                        <input type="checkbox" class="pay__system__check"
                                                            id="withppc" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <div class="pay__system">
                                                        <div class="payment__checkbox__inner">
                                                            <div class="payment__system__icon">
                                                                <img src="{{ asset('assets/images/transaction/peercoin.png') }}"
                                                                    alt="Currency" />
                                                            </div>
                                                            <div class="payment__system__icon__info">
                                                                <h6>Peercoin</h6>
                                                                <p class="tertiary">PPC</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-3">
                                                <div class="payment__system__checkbox__single column__space__negative">
                                                    <label for="withmiota" class="check_wrap">
                                                        <input type="checkbox" class="pay__system__check"
                                                            id="withmiota" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <div class="pay__system">
                                                        <div class="payment__checkbox__inner">
                                                            <div class="payment__system__icon">
                                                                <img src="{{ asset('assets/images/transaction/miota.png') }}"
                                                                    alt="Currency" />
                                                            </div>
                                                            <div class="payment__system__icon__info">
                                                                <h6>Miota</h6>
                                                                <p class="tertiary">Iota</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="group">
                                    <p class="legen">Select Investment Plan</p>
                                    <div class="payment__system__checkbox__wrapper payment__system__plan">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="checkbox__investment__plan">
                                                    <label for="spo-10" class="check_wrap_plan">
                                                        <input type="checkbox" class="pay__system__check__plan"
                                                            id="spo-10" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <div class="investment__item">
                                                        <div class="investment__item__inner">
                                                            <img src="assets/images/investment/spo-10.png"
                                                                alt="Spo-10" />
                                                            <div class="investment__item__content text-center">
                                                                <p class="secondary text-center">SPO-10</p>
                                                                <hr />
                                                                <h4 class="text-center content__space--small">30%</h4>
                                                                <p class="text-center">Daily for 30 days</p>
                                                                <hr />
                                                                <div class="invest__limit">
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <p>Min. Invest</p>
                                                                        <p>$100</p>
                                                                    </div>
                                                                </div>
                                                                <div class="invest__limit mb-35">
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <p>Max. Invest</p>
                                                                        <p>$1000</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="checkbox__investment__plan">
                                                    <label for="spo-11" class="check_wrap_plan">
                                                        <input type="checkbox" class="pay__system__check__plan"
                                                            id="spo-11" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <div class="investment__item">
                                                        <div class="investment__item__inner">
                                                            <img src="assets/images/investment/spo-11.png"
                                                                alt="Spo-11" />
                                                            <div class="investment__item__content text-center">
                                                                <p class="secondary text-center">SPO-11</p>
                                                                <hr />
                                                                <h4 class="text-center content__space--small">35%</h4>
                                                                <p class="text-center">Daily for 30 days</p>
                                                                <hr />
                                                                <div class="invest__limit content__space--small">
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <p>Min. Invest</p>
                                                                        <p>$100</p>
                                                                    </div>
                                                                </div>
                                                                <div class="invest__limit cta__space">
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <p>Max. Invest</p>
                                                                        <p>$2000</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="checkbox__investment__plan">
                                                    <label for="spo-12" class="check_wrap_plan">
                                                        <input type="checkbox" class="pay__system__check__plan"
                                                            id="spo-12" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <div class="investment__item">
                                                        <div class="investment__item__inner">
                                                            <img src="assets/images/investment/spo-12.png"
                                                                alt="Spo-12" />
                                                            <div class="investment__item__content text-center">
                                                                <p class="secondary text-center">SPO-12</p>
                                                                <hr />
                                                                <h4 class="text-center content__space--small">40%</h4>
                                                                <p class="text-center">Daily for 30 days</p>
                                                                <hr />
                                                                <div class="invest__limit content__space--small">
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <p>Min. Invest</p>
                                                                        <p>$100</p>
                                                                    </div>
                                                                </div>
                                                                <div class="invest__limit cta__space">
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <p>Max. Invest</p>
                                                                        <p>$3000</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="checkbox__investment__plan">
                                                    <label for="spo-13" class="check_wrap_plan">
                                                        <input type="checkbox" class="pay__system__check__plan"
                                                            id="spo-13" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <div class="investment__item">
                                                        <div class="investment__item__inner">
                                                            <img src="assets/images/investment/spo-13.png"
                                                                alt="Spo-13" />
                                                            <div class="investment__item__content text-center">
                                                                <p class="secondary text-center">SPO-13</p>
                                                                <hr />
                                                                <h4 class="text-center content__space--small">45%</h4>
                                                                <p class="text-center">Daily for 30 days</p>
                                                                <hr />
                                                                <div class="invest__limit content__space--small">
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <p>Min. Invest</p>
                                                                        <p>$100</p>
                                                                    </div>
                                                                </div>
                                                                <div class="invest__limit cta__space">
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <p>Max. Invest</p>
                                                                        <p>$4000</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="checkbox__investment__plan">
                                                    <label for="spo-14" class="check_wrap_plan">
                                                        <input type="checkbox" class="pay__system__check__plan"
                                                            id="spo-14" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <div class="investment__item">
                                                        <div class="investment__item__inner">
                                                            <img src="assets/images/investment/spo-11.png"
                                                                alt="Spo-14" />
                                                            <div class="investment__item__content text-center">
                                                                <p class="secondary text-center">SPO-14</p>
                                                                <hr />
                                                                <h4 class="text-center content__space--small">30%</h4>
                                                                <p class="text-center">Daily for 30 days</p>
                                                                <hr />
                                                                <div class="invest__limit content__space--small">
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <p>Min. Invest</p>
                                                                        <p>$100</p>
                                                                    </div>
                                                                </div>
                                                                <div class="invest__limit cta__space">
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <p>Max. Invest</p>
                                                                        <p>$1000</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="checkbox__investment__plan">
                                                    <label for="spo-15" class="check_wrap_plan">
                                                        <input type="checkbox" class="pay__system__check__plan"
                                                            id="spo-15" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <div class="investment__item">
                                                        <div class="investment__item__inner">
                                                            <img src="assets/images/investment/spo-15.png"
                                                                alt="Spo-15" />
                                                            <div class="investment__item__content text-center">
                                                                <p class="secondary text-center">SPO-15</p>
                                                                <hr />
                                                                <h4 class="text-center content__space--small">35%</h4>
                                                                <p class="text-center">Daily for 30 days</p>
                                                                <hr />
                                                                <div class="invest__limit content__space--small">
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <p>Min. Invest</p>
                                                                        <p>$100</p>
                                                                    </div>
                                                                </div>
                                                                <div class="invest__limit cta__space">
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <p>Max. Invest</p>
                                                                        <p>$2000</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="checkbox__investment__plan">
                                                    <label for="spo-16" class="check_wrap_plan">
                                                        <input type="checkbox" class="pay__system__check__plan"
                                                            id="spo-16" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <div class="investment__item">
                                                        <div class="investment__item__inner">
                                                            <img src="assets/images/investment/spo-16.png"
                                                                alt="Spo-16" />
                                                            <div class="investment__item__content text-center">
                                                                <p class="secondary text-center">SPO-16</p>
                                                                <hr />
                                                                <h4 class="text-center content__space--small">40%</h4>
                                                                <p class="text-center">Daily for 30 days</p>
                                                                <hr />
                                                                <div class="invest__limit content__space--small">
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <p>Min. Invest</p>
                                                                        <p>$100</p>
                                                                    </div>
                                                                </div>
                                                                <div class="invest__limit cta__space">
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <p>Max. Invest</p>
                                                                        <p>$3000</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="checkbox__investment__plan column__space__negative">
                                                    <label for="spo-17" class="check_wrap_plan">
                                                        <input type="checkbox" class="pay__system__check__plan"
                                                            id="spo-17" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <div class="investment__item">
                                                        <div class="investment__item__inner">
                                                            <img src="assets/images/investment/spo-17.png"
                                                                alt="Spo-17" />
                                                            <div class="investment__item__content text-center">
                                                                <p class="secondary text-center">SPO-17</p>
                                                                <hr />
                                                                <h4 class="text-center content__space--small">45%</h4>
                                                                <p class="text-center">Daily for 30 days</p>
                                                                <hr />
                                                                <div class="invest__limit content__space--small">
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <p>Min. Invest</p>
                                                                        <p>$100</p>
                                                                    </div>
                                                                </div>
                                                                <div class="invest__limit cta__space">
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <p>Max. Invest</p>
                                                                        <p>$4000</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="group">
                                    <p class="legen">Enter amount</p>
                                    <div class="payment__system__checkbox__wrapper payment__system__amount">
                                        <div class="plan__select">
                                            <label class="secondary content__space--extra--small">Enter The
                                                amount</label>
                                            <input type="number" name="amount" id="investAmount" required="required"
                                                placeholder="296" min="1" />
                                        </div>
                                        <div class="row cta__space">
                                            <div class="col-lg-7">
                                                <div class="daily-profit column__space">
                                                    <p class="secondary content__space--smalll">Daily Profit</p>
                                                    <h3> <span id="dailyProfit"></span> Eth</h3>
                                                </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <div class="total-profit column__space">
                                                    <p class="secondary content__space--smalll">Total Profit</p>
                                                    <h3><span id="totalProfit"></span> Eth</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="slide__group column__space">
                                            <div class="output d-flex">
                                                <span class="range__output__value">296</span> <span>Eth</span>
                                            </div>
                                            <input class="range__slider" type="range" name="invest__range"
                                                id="rangeSlider" max="1000" min="1" value="296" />
                                            <div class="slide__min__max">
                                                <p>1.00 Eth</p>
                                                <p>1000 Eth</p>
                                            </div>
                                        </div>
                                        <div class="plan__cta text-start">
                                            <button class="button primary" type="submit">Start Invest Now</button>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
