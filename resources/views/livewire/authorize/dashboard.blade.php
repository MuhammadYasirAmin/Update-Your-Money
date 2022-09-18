@section('title', 'User-Dashboard')

<div class="main__content">
    <div class="collapse__sidebar">
        <h4>Dashboard</h4>
        <a href="javascript:void(0)" class="collapse__sidebar__btn">
            <i class="fas fa-bars"></i>
        </a>
    </div>
    <div class="balance">
        <div class="row">
            <div class="col-lg-6">
                <div class="balance__single column__space">
                    <div class="balance__img">
                        <img src="{{ asset('assets/images/dashboard/total-balance.png') }}" alt="Total balance" />
                    </div>
                    <div class="balance__content">
                        <p>Total Balance</p>
                        <h5>$800.00</h5>
                        <div class="last__action">
                            <p class="tertiary">Last Deposit:</p>
                            <p class="tertiary">$100.00</p>
                        </div>
                        <a href="/Authorized/User-Investment" class="button">Make New Deposit</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="balance__single balance__alt__content">
                    <div class="balance__img">
                        <img src="{{ asset('assets/images/dashboard/total-earned.png') }}" alt="Total balance" />
                    </div>
                    <div class="balance__content">
                        <p>Total Earned</p>
                        <h5>$800.00</h5>
                        <div class="last__action">
                            <p class="tertiary">Last Withdrawal:</p>
                            <p class="tertiary">$100.00</p>
                        </div>
                        <a href="/Authorized/User-Investment" class="button">Withdraw Funds</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="available__balance">
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="available__balance__single column__space">
                    <div class="available__balance__single__coin">
                        <img src="{{ asset('assets/images/transaction/eth.png') }}" alt="Ethereum" />
                        <div>
                            <h6>Ethereum</h6>
                            <p class="tertiary">Eth</p>
                        </div>
                    </div>
                    <div class="balance__left">
                        <p class="tertiary">Available Balance</p>
                        <h5>$22.00</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="available__balance__single column__space">
                    <div class="available__balance__single__coin">
                        <img src="{{ asset('assets/images/transaction/dash.png') }}" alt="Dash" />
                        <div>
                            <h6>Dash</h6>
                            <p class="tertiary">Dash</p>
                        </div>
                    </div>
                    <div class="balance__left">
                        <p class="tertiary">Available Balance</p>
                        <h5>$31.00</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="available__balance__single column__space">
                    <div class="available__balance__single__coin">
                        <img src="{{ asset('assets/images/transaction/trx.png') }}" alt="Tron" />
                        <div>
                            <h6>Tron</h6>
                            <p class="tertiary">Trx</p>
                        </div>
                    </div>
                    <div class="balance__left">
                        <p class="tertiary">Available Balance</p>
                        <h5>$35.00</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="affiliate__links">
        <div class="row">
            <div class="col-lg-8">
                <div class="affiliate__link column__space">
                    <h5>Your Affiliate Link</h5>
                    <div class="copy">
                        <p>https://Spoment.net/?ref=Jeffrey Morgan</p>
                        <a href="javascript:void(0)" class="button">Copy link</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="rank">
                    <h6>Your Rank</h6>
                    <h5>01</h5>
                    <img src="{{ asset('assets/images/dashboard/hands.png') }}" alt="Ranks" />
                </div>
            </div>
        </div>
    </div>
    <div class="level">
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="level__single column__space">
                    <a href="#" class="button">1 Level</a>
                    <p>0 / 0</p>
                    <p class="tertiary">Partners / Active</p>
                    <hr />
                    <h5>$0.00</h5>
                    <p class="tertiary">Earned</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="level__single column__space">
                    <a href="#" class="button">2 Level</a>
                    <p>0 / 0</p>
                    <p class="tertiary">Partners / Active</p>
                    <hr />
                    <h5>$0.00</h5>
                    <p class="tertiary">Earned</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="level__single">
                    <a href="#" class="button">3 Level</a>
                    <p>0 / 0</p>
                    <p class="tertiary">Partners / Active</p>
                    <hr />
                    <h5>$0.00</h5>
                    <p class="tertiary">Earned</p>
                </div>
            </div>
        </div>
    </div>
</div>
