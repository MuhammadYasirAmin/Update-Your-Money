<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;

class InvestmentPage extends Component
{
    public function render()
    {
        return view('livewire.frontend.investment-page')->layout('layouts.main');
    }
}