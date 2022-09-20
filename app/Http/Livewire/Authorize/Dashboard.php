<?php

namespace App\Http\Livewire\Authorize;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Dashboard extends Component
{
    public function render()
    {
        if (Auth::check()) {
            return view('livewire.authorize.dashboard')->layout(
                'layouts.panel'
            );
        }
        return redirect('login')->withSuccess('Opps! You do not have access');
    }
}