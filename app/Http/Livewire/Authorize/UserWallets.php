<?php

namespace App\Http\Livewire\Authorize;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User\FinancialLogs;

class UserWallets extends Component
{
    public function render()
    {
        if (Auth::check()) {
            $UID = Auth::user()->id;
            $FinancialLog = FinancialLogs::where('UID', auth()->id())->orderBy('id', 'DESC')->get();
            return view('livewire.authorize.user-wallets', compact('FinancialLog'))->layout('layouts.panel');
        }
        return redirect('login')->withSuccess('Opps! You do not have access');
    }
}
