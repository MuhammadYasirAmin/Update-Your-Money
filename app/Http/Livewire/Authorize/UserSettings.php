<?php

namespace App\Http\Livewire\Authorize;

use Livewire\Component;

class UserSettings extends Component
{
    public function render()
    {
        return view('livewire.authorize.user-settings')->layout('layouts.panel');
    }
}