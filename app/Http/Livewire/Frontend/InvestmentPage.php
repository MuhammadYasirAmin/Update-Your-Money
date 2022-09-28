<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;
use App\Models\Backend\InvestmentPlanModel;

class InvestmentPage extends Component
{
    public function render()
    {
        $InvestmentPlan = InvestmentPlanModel::all();
        return view('livewire.frontend.investment-page', compact('InvestmentPlan'))->layout('layouts.main');
    }
}
