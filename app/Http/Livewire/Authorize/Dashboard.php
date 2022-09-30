<?php

namespace App\Http\Livewire\Authorize;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User\DepositModel;

class Dashboard extends Component
{
    public function render()
    {
        if (Auth::check()) {
            $UID = Auth::user()->id;

            $TotalBalance =
DB::table('deposite_amounts')
    ->where('UID', '=', $UID)
    ->select('Amount')
    ->sum('Amount');

            $Deposit = DB::table('deposit_models')->where('UID', '=', $UID)->orderBy('id', 'DESC')->first();
            $LastDeposit = $Deposit ? $Deposit->investAmount : 0;
            $TotalBalance ? $TotalBalance : 0;
            $LastDeposit ? $LastDeposit : 0;
            return view('livewire.authorize.dashboard', compact('TotalBalance', 'LastDeposit'))->layout(
                'layouts.panel'
            );
        }
        return redirect('login')->withSuccess('Opps! You do not have access');
    }
}
