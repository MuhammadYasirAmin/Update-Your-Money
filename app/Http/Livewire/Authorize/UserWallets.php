<?php

namespace App\Http\Livewire\Authorize;

use Livewire\Component;

class UserWallets extends Component
{
    public function render()
    {
        return view('livewire.authorize.user-wallets')->layout('layouts.panel');
    }
}