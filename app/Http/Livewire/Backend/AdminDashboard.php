<?php

namespace App\Http\Livewire\Backend;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;


class AdminDashboard extends Component
{
    public function render()
    {
        if (Auth::check()) {
            return view('livewire.backend.admin-dashboard')->layout('layouts.adminpanel');
        }
        return redirect('login')->withSuccess('Opps! You do not have access');
    }
}
