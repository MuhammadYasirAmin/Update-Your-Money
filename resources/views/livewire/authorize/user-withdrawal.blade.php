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
                            <form action="{{ route('User.Withdraw') }}" method="POST" id="withdrawalForm" class="actionForm">
                                @csrf
                                <fieldset class="group">
                                    <p class="legen legen__active">Select Payment System</p>
                                    <div class="payment__system__checkbox__wrapper payment__system__method">
                                        <div class="row">
                                            <div class="col-md-6 col-lg-4">
                                                <div class="payment__system__checkbox__single">
                                                    <label for="withspoment" class="check_wrap">
                                                        <input type="checkbox" name="selectedCurrency" value="USD Dollar" required="required"
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
                                                                <h6>Default (USD)</h6>
                                                                <p class="tertiary">With Balance</p>
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
                                                placeholder="296" min="10" />
                                            <p class="tertiary">*Minimum withdraw is $10 USD</p>
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
