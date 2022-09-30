<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use Illuminate\Http\Request;

class RegisterForm extends Component
{
    public function render(Request $request)
    {
        $UserId = $request->UserId;
        $UserName = $request->UserName;

        if ($UserId != null && $UserName!=null) {
            return view('livewire.auth.register-affilate',compact('UserId', 'UserName'))->layout('layouts.auth');
        } else {
            return view('livewire.auth.register-form')->layout('layouts.auth');
        }
    }
}
