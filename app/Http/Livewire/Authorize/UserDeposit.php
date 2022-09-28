<?php

namespace App\Http\Livewire\Authorize;

use Livewire\Component;
use App\Models\Backend\InvestmentPlanModel;
use Illuminate\Support\Facades\Auth;

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
}
