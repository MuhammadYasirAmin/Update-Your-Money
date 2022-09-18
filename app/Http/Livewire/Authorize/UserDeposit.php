<?php

namespace App\Http\Livewire\Authorize;

use Livewire\Component;

class UserDeposit extends Component
{
    public function render()
    {
        return view('livewire.authorize.user-deposit')->layout('layouts.panel');
    }
}