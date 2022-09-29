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
    <form action="#" method="POST" id="depositForm" class="actionForm">
        @csrf
        <fieldset class="group">
            <p class="legen legen__active">Select Payment System</p>
            <div class="payment__system__checkbox__wrapper payment__system__method">
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="payment__system__checkbox__single">
                            <label for="withspoment" class="check_wrap">
                                <input type="checkbox" required="required" class="pay__system__check"
                                    id="withspoment" value="USD Dollar" />
                                <span class="checkmark"></span>
                            </label>
                            <div class="pay__system">
                                <div class="payment__checkbox__inner">
                                    <div class="payment__system__icon">
                                        <img src="{{ asset('assets/images/dashboard/spoment.png') }}" alt="Currency" />
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
            <p class="legen">Select Investment Plan</p>
            <div class="payment__system__checkbox__wrapper payment__system__plan">
                <div class="row">
                    @foreach ($InvestmentPlan as $plan)
                        <div class="col-lg-6">
                            <div class="checkbox__investment__plan">
                                <label for="spo-10" class="check_wrap_plan">
                                    <input type="checkbox" class="pay__system__check__plan" id="spo-{{ $plan->id }}" value="{{ $plan->id }}" />
                                    <span class="checkmark"></span>
                                </label>
                                <div class="investment__item" style="margin-top: 0px;">
                                    <div class="investment__item__inner">
                                        <div class="investment__item__content text-center">
                                            <p class="secondary text-center">{{ $plan->PlanTitle }}</p>
                                            <hr />
                                            <h4 class="text-center content__space--small">{{ $plan->PlanProfit }}%</h4>
                                            <p class="text-center">After 48 Hours</p>
                                            <hr />
                                            <div class="invest__limit">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <p>Min. Invest</p>
                                                    <p>${{ $plan->MinDeposit }}</p>
                                                </div>
                                            </div>
                                            <div class="invest__limit mb-35">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <p>Max. Invest</p>
                                                    <p>${{ $plan->MaxDeposit }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <input hidden type="text" id="PlanSelected" value="">
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
                        placeholder="ENTER INVESTMENT AMOUNT (USD)" value="25" min="0" />
                </div>
                <div class="row cta__space">
                    <div class="col-lg-7">
                        <div class="daily-profit column__space">
                            <p class="secondary content__space--smalll">Total Percent</p>
                            <h3> <span id="profitPercent"></span> USD</h3>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="total-profit column__space">
                            <p class="secondary content__space--smalll">Total Profit</p>
                            <h3><span id="totalProfit"></span> USD</h3>
                        </div>
                    </div>
                </div>
                <div class="plan__cta text-start">
                    <button class="button primary" type="submit">Deposit Now</button>
                </div>
            </div>
        </fieldset>
    </form>
</div>
