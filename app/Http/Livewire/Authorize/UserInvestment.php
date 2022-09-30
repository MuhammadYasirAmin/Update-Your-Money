<?php

namespace App\Http\Livewire\Authorize;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User\DepositModel;
use App\Models\User\InvestmentPlanModel;

class UserInvestment extends Component
{
    public function render()
    {
        if (Auth::check()) {
            $UID = Auth::user()->id;
            $UserDeposits = DepositModel::where('UID', auth()->id())->orderBy('id', 'DESC')->get();
            return view('livewire.authorize.user-investment', compact('UserDeposits'))->layout(
                'layouts.panel'
            );
        }
        return redirect('login')->withSuccess('Opps! You do not have access');
    }
}
