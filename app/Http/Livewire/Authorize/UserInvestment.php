<?php

namespace App\Http\Livewire\Authorize;

use Livewire\Component;

class UserInvestment extends Component
{
    public function render()
    {
        return view('livewire.authorize.user-investment')->layout(
            'layouts.panel'
        );
    }
}