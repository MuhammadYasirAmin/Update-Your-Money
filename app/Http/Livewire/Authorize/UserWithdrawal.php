<?php

namespace App\Http\Livewire\Authorize;

use Livewire\Component;

class UserWithdrawal extends Component
{
    public function render()
    {
        return view('livewire.authorize.user-withdrawal')->layout('layouts.panel');
    }
}