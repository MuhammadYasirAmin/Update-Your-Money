@section('title', 'My Investment')

<div class="main__content">
                            <div class="collapse__sidebar">
                                <h4>Dashboard</h4>
                                <a href="javascript:void(0)" class="collapse__sidebar__btn">
                                    <i class="fas fa-bars"></i>
                                </a>
                            </div>
                            <div class="dashboard__head">
                                <h5>Investments</h5>
                            </div>
                            <div class="deposit__history">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="deposit__history__inner column__space">
                                            <div class="deposit__history__head">
                                                <h6>Active deposits</h6>
                                                <a href="javascript:void(0)" class="depo__history__btn">
                                                    <i class="fas fa-angle-down"></i>
                                                </a>
                                            </div>
                                            <div class="deposit__history__wrapper">
                                                <div class="deposit__history__single__item">
                                                    <div class="method__info">
                                                        <img src="{{ asset('assets/images/transaction/btc.png') }}" alt="Bitcoin" />
                                                        <div class="method__info__inner">
                                                            <h6>Bitcoin</h6>
                                                            <p class="tertiary">BTC</p>
                                                        </div>
                                                    </div>
                                                    <div class="method__amount">
                                                        <h6>0.00000 BTC</h6>
                                                    </div>
                                                </div>
                                                <div class="deposit__history__single__item">
                                                    <div class="method__info">
                                                        <img src="{{ asset('assets/images/transaction/dash.png') }}" alt="Dogecoin" />
                                                        <div class="method__info__inner">
                                                            <h6>Dogecoin</h6>
                                                            <p class="tertiary">Doge</p>
                                                        </div>
                                                    </div>
                                                    <div class="method__amount">
                                                        <h6>0.00000 DOGE</h6>
                                                    </div>
                                                </div>
                                                <div class="deposit__history__single__item">
                                                    <div class="method__info">
                                                        <img src="{{ asset('assets/images/transaction/trxt.png') }}" alt="Tether" />
                                                        <div class="method__info__inner">
                                                            <h6>Tether</h6>
                                                            <p class="tertiary">USDT</p>
                                                        </div>
                                                    </div>
                                                    <div class="method__amount">
                                                        <h6>0.00000 USDT</h6>
                                                    </div>
                                                </div>
                                                <div class="deposit__history__single__item">
                                                    <div class="method__info">
                                                        <img src="{{ asset('assets/images/transaction/eth.png') }}" alt="Ethereum" />
                                                        <div class="method__info__inner">
                                                            <h6>Ethereum</h6>
                                                            <p class="tertiary">ETH</p>
                                                        </div>
                                                    </div>
                                                    <div class="method__amount">
                                                        <h6>0.00000 ETH</h6>
                                                    </div>
                                                </div>
                                                <div class="deposit__history__single__item">
                                                    <div class="method__info">
                                                        <img src="{{ asset('assets/images/transaction/trx.png') }}" alt="Tron" />
                                                        <div class="method__info__inner">
                                                            <h6>Tron</h6>
                                                            <p class="tertiary">Trx</p>
                                                        </div>
                                                    </div>
                                                    <div class="method__amount">
                                                        <h6>0.00000 TRX</h6>
                                                    </div>
                                                </div>
                                                <div class="deposit__history__single__item">
                                                    <div class="method__info">
                                                        <img src="{{ asset('assets/images/transaction/ltc.png') }}" alt="Litecoin" />
                                                        <div class="method__info__inner">
                                                            <h6>Litecoin</h6>
                                                            <p class="tertiary">LTC</p>
                                                        </div>
                                                    </div>
                                                    <div class="method__amount">
                                                        <h6>0.00000 LTC</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="deposit__history__inner">
                                            <div class="deposit__history__head">
                                                <h6>Total deposits</h6>
                                                <a href="javascript:void(0)" class="depo__history__btn">
                                                    <i class="fas fa-angle-down"></i>
                                                </a>
                                            </div>
                                            <div class="deposit__history__wrapper">
                                                <div class="deposit__history__single__item">
                                                    <div class="method__info">
                                                        <img src="{{ asset('assets/images/transaction/btc.png') }}" alt="Bitcoin" />
                                                        <div class="method__info__inner">
                                                            <h6>Bitcoin</h6>
                                                            <p class="tertiary">BTC</p>
                                                        </div>
                                                    </div>
                                                    <div class="method__amount">
                                                        <h6>0.00000 BTC</h6>
                                                    </div>
                                                </div>
                                                <div class="deposit__history__single__item">
                                                    <div class="method__info">
                                                        <img src="{{ asset('assets/images/transaction/dash.png') }}" alt="Dogecoin" />
                                                        <div class="method__info__inner">
                                                            <h6>Dogecoin</h6>
                                                            <p class="tertiary">Doge</p>
                                                        </div>
                                                    </div>
                                                    <div class="method__amount">
                                                        <h6>0.00000 DOGE</h6>
                                                    </div>
                                                </div>
                                                <div class="deposit__history__single__item">
                                                    <div class="method__info">
                                                        <img src="{{ asset('assets/images/transaction/trxt.png') }}" alt="Tether" />
                                                        <div class="method__info__inner">
                                                            <h6>Tether</h6>
                                                            <p class="tertiary">USDT</p>
                                                        </div>
                                                    </div>
                                                    <div class="method__amount">
                                                        <h6>0.00000 USDT</h6>
                                                    </div>
                                                </div>
                                                <div class="deposit__history__single__item">
                                                    <div class="method__info">
                                                        <img src="{{ asset('assets/images/transaction/eth.png') }}" alt="Ethereum" />
                                                        <div class="method__info__inner">
                                                            <h6>Ethereum</h6>
                                                            <p class="tertiary">ETH</p>
                                                        </div>
                                                    </div>
                                                    <div class="method__amount">
                                                        <h6>0.00000 ETH</h6>
                                                    </div>
                                                </div>
                                                <div class="deposit__history__single__item">
                                                    <div class="method__info">
                                                        <img src="{{ asset('assets/images/transaction/trx.png') }}" alt="Tron" />
                                                        <div class="method__info__inner">
                                                            <h6>Tron</h6>
                                                            <p class="tertiary">Trx</p>
                                                        </div>
                                                    </div>
                                                    <div class="method__amount">
                                                        <h6>0.00000 TRX</h6>
                                                    </div>
                                                </div>
                                                <div class="deposit__history__single__item">
                                                    <div class="method__info">
                                                        <img src="{{ asset('assets/images/transaction/ltc.png') }}" alt="Litecoin" />
                                                        <div class="method__info__inner">
                                                            <h6>Litecoin</h6>
                                                            <p class="tertiary">LTC</p>
                                                        </div>
                                                    </div>
                                                    <div class="method__amount">
                                                        <h6>0.00000 LTC</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="investment__history">
                                <h6>Investments History</h6>
                                <div class="investment__table__wrapper">
                                    <table class="investment__table">
                                        <thead>
                                            <tr>
                                                <th>
                                                    Date & Time
                                                </th>
                                                <th>
                                                    Transaction
                                                </th>
                                                <th>
                                                    Amount
                                                </th>
                                                <th>
                                                    Payment Method
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Nov-3-2022 02:10:59 PM</td>
                                                <td>Deposit</td>
                                                <td>
                                                    <h6>0.00352 BTC</h6>
                                                </td>
                                                <td>
                                                    <img src="{{asset('assets/images/transaction/btc.png')}}" alt="Bitcoin" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Nov-3-2022 02:10:59 PM</td>
                                                <td>Deposit</td>
                                                <td>
                                                    <h6>0.00352 BTC</h6>
                                                </td>
                                                <td>
                                                    <img src="{{asset('assets/images/transaction/btc.png')}}" alt="Bitcoin" />
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Nov-3-2022 02:10:59 PM</td>
                                                <td>Deposit</td>
                                                <td>
                                                    <h6>0.00352 BTC</h6>
                                                </td>
                                                <td>
                                                    <img src="{{asset('assets/images/transaction/btc.png')}}" alt="Bitcoin" />
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
