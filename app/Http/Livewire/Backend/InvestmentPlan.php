<?php

namespace App\Http\Livewire\Backend;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Backend\InvestmentPlanModel;

class InvestmentPlan extends Component
{
    public function render()
    {
        if (Auth::check()) {
            return view('livewire.backend.investment-plan')->layout('layouts.adminpanel');
        }
        return redirect('login')->withSuccess('Opps! You do not have access');
    }

    public function submitPlans()
    {
        $InvestmentPlan = new InvestmentPlanModel();
        $InvestmentPlan->PlanTitle = $request->PlanTitle;
        $InvestmentPlan->MinDeposit = $request->MinDeposit;
        $InvestmentPlan->MaxDeposit = $request->MaxDeposit;
        $InvestmentPlan->RefDeposit = $request->RefDeposit;

        if ($InvestmentPlan->save()) {
            return back()->with('Plan_Registerd', 'Registerd Successfully!');
        } else {
            return back()->with('Plan_Error', 'Not Registerd Successfully!');
        }
    }
}
