<?php

namespace App\Http\Livewire\Authorize;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User\TransactionHistory;

class UserHistory extends Component
{
    public function render()
    {
        if (Auth::check()) {
            $UID = Auth::user()->id;
            $TransactionHistory = TransactionHistory::where('UID', auth()->id())->orderBy('id', 'DESC')->get();
            return view('livewire.authorize.user-history', compact('TransactionHistory'))->layout('layouts.panel');
        }
        return redirect('login')->withSuccess('Opps! You do not have access');
    }
}
