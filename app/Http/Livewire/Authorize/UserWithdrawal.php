<?php

namespace App\Http\Livewire\Authorize;

use Livewire\Component;

use App\Models\User\WithdrawModel;
use App\Models\User\WithdrawAmounts;
use App\Models\User\DepositeAmount;
use App\Models\User\FinancialLogs;
use App\Models\User\TransactionHistory;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserWithdrawal extends Component
{
    public function render()
    {
        if (Auth::check()) {
            return view('livewire.authorize.user-withdrawal')->layout('layouts.panel');
        }
        return redirect('login')->withSuccess('Opps! You do not have access');
    }

    public function UserWithdrawal(Request $request)
    {
        if (Auth::check()) {
            $UserWithdraw = new WithdrawModel();
            $UID = Auth::user()->id;
            $money = $request->with__amount;
            $UserWithdraw->PaymentSystem = $request->selectedCurrency;
            $UserWithdraw->WalletAddress = 'b4e70bcd-302e-44ef-8b11-'.$UID;
            $UserWithdraw->TotalAmount = $money;
            $UserWithdraw->UID = $UID;

            $minAmount = 10;
            $maxAmount = 100;


            if ($money < $minAmount) {
                return back()->with('Error!', 'Minimum Amount Should be $10 US Dollar!');
            } elseif ($money > $maxAmount) {
                return back()->with('Error!', 'Maximmum Amount Should be $100 US Dollar!');
            } else {
                if ($UserWithdraw->save()) {
                    $DepositAmount = new WithdrawAmounts();
                    $DepositAmount->UID = $UID;
                    $DepositAmount->Amount = $money;
                    if ($DepositAmount->save()) {
                        $DepositAmount = DepositeAmount::find($UID);
                        $DepositAmount->Amount -= $money;
                        $DepositAmount->UID = $UID;

                        if ($DepositAmount->save()) {
                            $TransactionHistory = new TransactionHistory();
                            $TransactionHistory->UID = $UID;
                            $TransactionHistory->Amount = $money;
                            $TransactionHistory->PaymentMethod = $request->selectedCurrency;
                            $TransactionHistory->TransactionType = 'WithDraw';
                            $TransactionHistory->WalletAddress = 'b4e70bcd-302e-44ef-8b11-'.$UID;
                            if ($TransactionHistory->save()) {
                                $FinancialLog = new FinancialLogs();
                                $FinancialLog->UID = $UID;
                                $FinancialLog->Amount = $money;
                                $FinancialLog->PaymentMethod = $request->selectedCurrency;
                                $FinancialLog->TransactionType = 'WithDraw';
                                $FinancialLog->Description = 'Amount Withdraw';

                                if ($FinancialLog->save()) {
                                    return redirect()->route('User.Dashboard')->with('Done', 'OK');
                                }
                            }
                        }
                    }
                }
            }
        }
    }
}
