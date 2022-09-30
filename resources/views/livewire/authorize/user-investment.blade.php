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
                                            @if (count($UserDeposits) > 0)
                                                @foreach ($UserDeposits as $deposit)
                                                    <tr>
                                                        <td>{{ $deposit->created_at }}</td>
                                                        <td>Deposit</td>
                                                        <td>
                                                            <h6>${{ $deposit->investAmount }} USD</h6>
                                                        </td>
                                                        <td>
                                                            <img src="{{asset('assets/images/transaction/btc.png')}}" alt="USD Dollar" />
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @else
                                                <tr>
                                                    <td colspan="4">You does'nt make any Investments</td>
                                                </tr>
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
