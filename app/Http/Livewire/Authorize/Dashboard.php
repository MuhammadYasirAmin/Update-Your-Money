<?php

namespace App\Http\Livewire\Authorize;

use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.authorize.dashboard')->layout('layouts.panel');
    }
}