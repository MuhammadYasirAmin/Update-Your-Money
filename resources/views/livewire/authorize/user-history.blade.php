@section('title', 'User History')

<div class="main__content">
    <div class="collapse__sidebar">
        <h4>Dashboard</h4>
        <a href="javascript:void(0)" class="collapse__sidebar__btn">
            <i class="fas fa-bars"></i>
        </a>
    </div>
    <div class="dashboard__head">
        <h5>Wallet</h5>
    </div>
    <div class="transaction__history">
        <div class="history__head">
            <h6>Transactions History</h6>
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
                            Wallet ID
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($TransactionHistory) > 0)
                        @foreach ($TransactionHistory as $logs)
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
                                <td>{{ $logs->WalletAddress }} </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td style="text-align:center;" colspan="5">You don't have any Logs</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
        <nav aria-label="Page navigation example">
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
        </nav>
    </div>
</div>
