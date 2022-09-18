<?php

namespace App\Http\Livewire\Authorize;

use Livewire\Component;

class UserAffilates extends Component
{
    public function render()
    {
        return view('livewire.authorize.user-affilates')->layout(
            'layouts.panel'
        );
    }
}