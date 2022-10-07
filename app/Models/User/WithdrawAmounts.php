<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WithdrawAmounts extends Model
{
    use HasFactory;
    protected $table = "withdraw_amounts";

    public function userID()
    {
        return $this->belongsTo(User::class);
    }
}
