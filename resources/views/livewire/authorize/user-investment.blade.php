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

    <div class="investment__history">
        <h6>Investments History</h6>
        <div class="investment__table__wrapper">
            <table class="investment__table">
                <thead>
                    <tr>
                        <th>
                            Selected Plan
                        </th>
                        <th>
                            Amount
                        </th>
                        <th>
                            Profit
                        </th>
                        <th>
                            Percent
                        </th>
                        <th>
                            Payment Method
                        </th>
                        <th>
                            ProfitGain
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($UserDeposits) > 0)
                        @foreach ($UserDeposits as $deposit)
                            <tr>
                                <td>{{ $deposit->PlanSelected }}</td>
                                <td>
                                    <h6>${{ $deposit->investAmount }} USD</h6>
                                </td>
                                <td>${{ $deposit->TotalProfit }}.0</td>
                                <td>{{ $deposit->TotalPercent }} %</td>
                                <td>
                                    <img src="{{ asset('assets/images/transaction/btc.png') }}" alt="USD Dollar" />
                                </td>
                                <td>
                                    <img src="{{ asset('assets/images/blog/watch.png') }}" alt="Profit Gain" />
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td style="text-align:center;" colspan="6">You does'nt make any Investments</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
