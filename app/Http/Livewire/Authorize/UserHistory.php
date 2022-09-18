<?php

namespace App\Http\Livewire\Authorize;

use Livewire\Component;

class UserHistory extends Component
{
    public function render()
    {
        return view('livewire.authorize.user-history')->layout('layouts.panel');
    }
}