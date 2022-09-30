@section('title', 'My Wallet')
<div class="main__content">
    <div class="collapse__sidebar">
        <h4>Dashboard</h4>
        <a href="javascript:void(0)" class="collapse__sidebar__btn">
            <i class="fas fa-bars"></i>
        </a>
    </div>
    <div class="open__deposit">
        <h5>Wallet</h5>
    </div>
    <form action="#" method="post" id="walletForm" class="actionForm">
        <fieldset class="group">
            <p class="legen legen__active">Your Wallet address</p>
            <div class="payment__system__checkbox__wrapper">
                <div class="withdraw__amount">
                    <label class="secondary content__space--extra--small">Wallet
                        address</label>
                    <input type="text" name="wall__add__two" id="wallAddTwo" class="mb-0" required="required"
                        placeholder="Enter Your Address" />
                </div>
            </div>
        </fieldset>
        <fieldset class="group">
            <p class="legen">Select Payment System</p>
            <div class="payment__system__checkbox__wrapper payment__system__method payment__system__method__two">
                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <div class="payment__system__checkbox__single">
                            <label for="walletspoment" class="check_wrap">
                                <input type="checkbox" required="required" class="pay__system__check"
                                    id="walletspoment" />
                                <span class="checkmark"></span>
                            </label>
                            <div class="pay__system">
                                <div class="payment__checkbox__inner">
                                    <div class="payment__system__icon">
                                        <img src="{{ asset('assets/images/dashboard/spoment.png') }}" alt="Currency" />
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
                            <label for="walletdash" class="check_wrap">
                                <input type="checkbox" class="pay__system__check" id="walletdash" />
                                <span class="checkmark"></span>
                            </label>
                            <div class="pay__system">
                                <div class="payment__checkbox__inner">
                                    <div class="payment__system__icon">
                                        <img src="{{ asset('assets/images/transaction/dash.png') }}" alt="Currency" />
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
                            <label for="walletneo" class="check_wrap">
                                <input type="checkbox" class="pay__system__check" id="walletneo" />
                                <span class="checkmark"></span>
                            </label>
                            <div class="pay__system">
                                <div class="payment__checkbox__inner">
                                    <div class="payment__system__icon">
                                        <img src="{{ asset('assets/images/transaction/neo.png') }}" alt="Currency" />
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
                            <label for="walletbtc" class="check_wrap">
                                <input type="checkbox" class="pay__system__check" id="walletbtc" />
                                <span class="checkmark"></span>
                            </label>
                            <div class="pay__system">
                                <div class="payment__checkbox__inner">
                                    <div class="payment__system__icon">
                                        <img src="{{ asset('assets/images/transaction/btc.png') }}" alt="Currency" />
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
                            <label for="wallettron" class="check_wrap">
                                <input type="checkbox" class="pay__system__check" id="wallettron" />
                                <span class="checkmark"></span>
                            </label>
                            <div class="pay__system">
                                <div class="payment__checkbox__inner">
                                    <div class="payment__system__icon">
                                        <img src="{{ asset('assets/images/transaction/trx.png') }}" alt="Currency" />
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
                            <label for="wallettether" class="check_wrap">
                                <input type="checkbox" class="pay__system__check" id="wallettether" />
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
                            <label for="walletltc" class="check_wrap">
                                <input type="checkbox" class="pay__system__check" id="walletltc" />
                                <span class="checkmark"></span>
                            </label>
                            <div class="pay__system">
                                <div class="payment__checkbox__inner">
                                    <div class="payment__system__icon">
                                        <img src="{{ asset('assets/images/transaction/ltc.png') }}" alt="Currency" />
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
                            <label for="walletmonero" class="check_wrap">
                                <input type="checkbox" class="pay__system__check" id="walletmonero" />
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
                            <label for="walletdoge" class="check_wrap">
                                <input type="checkbox" class="pay__system__check" id="walletdoge" />
                                <span class="checkmark"></span>
                            </label>
                            <div class="pay__system">
                                <div class="payment__checkbox__inner">
                                    <div class="payment__system__icon">
                                        <img src="{{ asset('assets/images/transaction/doge.png') }}" alt="Currency" />
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
                            <label for="walleteth" class="check_wrap">
                                <input type="checkbox" class="pay__system__check" id="walleteth" />
                                <span class="checkmark"></span>
                            </label>
                            <div class="pay__system">
                                <div class="payment__checkbox__inner">
                                    <div class="payment__system__icon">
                                        <img src="{{ asset('assets/images/transaction/eth.png') }}" alt="Currency" />
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
                            <label for="walletpm" class="check_wrap">
                                <input type="checkbox" class="pay__system__check" id="walletpm" />
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
                            <label for="walletbinance" class="check_wrap">
                                <input type="checkbox" class="pay__system__check" id="walletbinance" />
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
                            <label for="walletepay" class="check_wrap">
                                <input type="checkbox" class="pay__system__check" id="walletepay" />
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
                            <label for="walletripple" class="check_wrap">
                                <input type="checkbox" class="pay__system__check" id="walletripple" />
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
                        <div class="payment__system__checkbox__single column__space__negative--secondary">
                            <label for="walletppc" class="check_wrap">
                                <input type="checkbox" class="pay__system__check" id="walletppc" />
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
                            <label for="walletmiota" class="check_wrap">
                                <input type="checkbox" class="pay__system__check" id="walletmiota" />
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
            <p class="legen">
                <button type="submit" class="button">Save Wallet Address</button>
            </p>
            <div class="payment__system__plan"></div>
        </fieldset>
    </form>
    <div class="transaction__history financial__history">
        <div class="history__head">
            <h6>Financial Log</h6>
            <div class="history__input__wrapper">
                <input type="text" name="search__history" id="transactionHistoryFilter" />
                <i class="fas fa-search"></i>
            </div>
        </div>
        <div class="history__table__wrapper">
            <table>
                <thead>
                    <tr>
                        <th>
                            Date
                        </th>
                        <th>
                            Payment Method
                        </th>
                        <th>
                            Amount
                        </th>
                        <th>
                            Description
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($FinancialLog) > 0)
                        @foreach ($FinancialLog as $logs)
                            <tr>
                                <td>{{ $logs->created_at }}</td>
                                <td>
                                    <img src="{{ asset('assets/images/transaction/btc.png') }}" alt="USD Dollar" />
                                </td>
                                @if ($logs->TransactionType == 'Deposit')
                                    <td>
                                        <h6 style="color: #4ade80;">${{ $logs->Amount }}.00</h6>
                                    </td>
                                @else
                                    <td>
                                        <h6 style="color: #ffb1b1;">-${{ $logs->Amount }}.00</h6>
                                    </td>
                                @endif
                                <td>{{ $logs->Description }} </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td style="text-align:center;" colspan="4">You don't have any Logs</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
        {{-- <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <li class="page-item"><a class="page-link" href="javascript:void(0)">
                        <img src="{{ asset('assets/images/icons/left-arrow.png') }}" alt="Previous" />
                    </a></li>
                <li class="page-item"><a class="page-link" href="javascript:void(0)">01</a></li>
                <li class="page-item"><a class="page-link" href="javascript:void(0)">02</a></li>
                <li class="page-item"><a class="page-link" href="javascript:void(0)">03</a></li>
                <li class="page-item"><a class="page-link" href="javascript:void(0)">04</a></li>
                <li class="page-item"><a class="page-link" href="javascript:void(0)">
                        <img src="{{ asset('assets/images/icons/right-arrow.png') }}" alt="Next" />
                    </a></li>
            </ul>
        </nav> --}}
    </div>
</div>
