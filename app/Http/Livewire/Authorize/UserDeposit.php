<?php

namespace App\Http\Livewire\Authorize;

use Livewire\Component;
use App\Models\Backend\InvestmentPlanModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User\DepositModel;
use App\Models\User\DepositeAmount;
use App\Models\User\FinancialLogs;
use App\Models\User\TransactionHistory;

class UserDeposit extends Component
{
    public function render()
    {
        if (Auth::check()) {
            $InvestmentPlan = InvestmentPlanModel::all();
            return view('livewire.authorize.user-deposit', compact('InvestmentPlan'))->layout('layouts.panel');
        }
        return redirect('login')->withSuccess('Opps! You do not have access');
    }

    public function UserDeposit(Request $request)
    {
        if (Auth::check()) {
            $UserDeposit = new DepositModel();
            $UserDeposit->investAmount = $request->investAmount;
            $UserDeposit->selectedCurrency = $request->selectedCurrency;

            $TotalProfit = 0;
            $TotalPercent = 0;
            $money = $request->investAmount;
            $SelectedPlan = null;

            switch ($request->PlanSelected) {
                case 1:

                    if ($money >= 10 && $money <= 100) {
                        $TotalProfit = intval($money / 100 * 110);
                        $TotalPercent = 110;
                    }
                    $SelectedPlan = "110% Plan (48 Hr.)";
                    break;
                case 2:

                    if ($money >= 101 && $money <= 500) {
                        $TotalProfit = intval($money / 100 * 112);
                        $TotalPercent = 112;
                    }
                    $SelectedPlan = "112% Plan (48 Hr.)";

                    break;
                case 3:
                    # code...
                    break;
                case 4:
                    # code...
                    break;
                case 5:
                    # code...
                    break;
                case 6:
                    # code...
                    break;
                case 7:
                    # code...
                    break;
                case 8:
                    # code...
                    break;
                case 9:
                    # code...
                    break;
                case 10:
                    # code...
                    break;
                case 11:
                    # code...
                    break;
                default:

                    if (($money >= 10 && $money < 999)) {
                        $TotalProfit = intval($money / 100 * 500 * 1 + $money);
                        $TotalPercent = 1;
                    }
                    $SelectedPlan = "No Plan Selected";
                    break;
            }

            $UID = Auth::user()->id;
            $UserDeposit->UID = $UID;
            $UserDeposit->TotalProfit = $TotalProfit;
            $UserDeposit->TotalPercent = $TotalPercent;
            $UserDeposit->PlanSelected = $SelectedPlan;


            if ($UserDeposit->save()) {
                $DepositAmount = new DepositeAmount();
                $DepositAmount->UID = $UID;
                $DepositAmount->Amount = $money;
                if ($DepositAmount->save()) {
                    $TransactionHistory = new TransactionHistory();
                    $TransactionHistory->UID = $UID;
                    $TransactionHistory->Amount = $money;
                    $TransactionHistory->PaymentMethod = $request->selectedCurrency;
                    $TransactionHistory->TransactionType = 'Deposite';
                    $TransactionHistory->WalletAddress = 'b4e70bcd-302e-44ef-8b11-d0';
                    if ($TransactionHistory->save()) {
                        $FinancialLog = new FinancialLogs();
                        $FinancialLog->UID = $UID;
                        $FinancialLog->Amount = $money;
                        $FinancialLog->PaymentMethod = $request->selectedCurrency;
                        $FinancialLog->TransactionType = 'Deposite';
                        $FinancialLog->Description = 'Scheduled Investment plan';

                        if ($FinancialLog->save()) {
                            return redirect()->route('User.Dashboard')
                                                                            ->with('Done', 'OK');
                        }
                    }
                }
            }
        }
    }
}
