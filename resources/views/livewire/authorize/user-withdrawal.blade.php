@section('title', 'User WithDrawal')
<div class="main__content">
                            <div class="collapse__sidebar">
                                <h4>Dashboard</h4>
                                <a href="javascript:void(0)" class="collapse__sidebar__btn">
                                    <i class="fas fa-bars"></i>
                                </a>
                            </div>
                            <div class="open__deposit">
                                <h5>BALANCE WITHDRAW</h5>
                            </div>
                            <form action="#" method="post" id="withdrawalForm" class="actionForm">
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
                                    <p class="legen">Withdrawal of funds</p>
                                    <div class="payment__system__checkbox__wrapper payment__system__plan">
                                        <div class="withdraw__amount">
                                            <label class="secondary content__space--extra--small">Enter The
                                                amount</label>
                                            <input type="number" name="with__amount" id="withAmount" required="required"
                                                placeholder="296" min="1" />
                                            <p class="tertiary">*Minimum withdraw is 0.06 ETH</p>
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="group">
                                    <p class="legen">Wallet address</p>
                                    <div class="payment__system__checkbox__wrapper wallet__system">
                                        <div class="withdraw__amount">
                                            <label class="secondary content__space--extra--small">Enter your wallet
                                                address</label>
                                            <input type="text" name="wall__add" id="wallAdd" class="mb-0"
                                                required="required" placeholder="Enter Wallet Address" />
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="group">
                                    <p class="legen">Operation Confirmation</p>
                                    <div class="payment__system__checkbox__wrapper operation">
                                        <div class="row d-flex align-items-end">
                                            <div class="col-lg-8 column__space">
                                                <label class="secondary content__space--extra--small">Confirmation
                                                    Code</label>
                                                <input type="text" name="con__code" id="conCode" required="required"
                                                    placeholder="Enter Code" />
                                            </div>
                                            <div class="col-lg-4">
                                                <a href="#" class="button">Get Code</a>
                                            </div>
                                        </div>
                                        <p class="tertiary">
                                            To confirm the operation "Withdrawal of funds" receive a confirmation code
                                            to your E-mail address and enter it in the appropriate field. The code is
                                            valid for 5 minutes from the moment of its receipt.
                                        </p>
                                        <div class="plan__cta text-start">
                                            <button class="button primary" type="submit">Withdraw Funds</button>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
