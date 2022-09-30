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
DB::table('deposit_models')
    ->where('UID', '=', $UID)
    ->select('investAmount')
    ->sum('investAmount');

            $Deposit = DB::table('deposit_models')->where('UID', '=', $UID)->orderBy('id', 'DESC')->first();
            $LastDeposit = $Deposit->investAmount;
            $TotalBalance? $TotalBalance : 0;
            $LastDeposit? $LastDeposit : 0;
            return view('livewire.authorize.dashboard', compact('TotalBalance', 'LastDeposit'))->layout(
                'layouts.panel'
            );
        }
        return redirect('login')->withSuccess('Opps! You do not have access');
    }
}
