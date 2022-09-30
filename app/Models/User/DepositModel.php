<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DepositModel extends Model
{
    use HasFactory;
    protected $table = "deposit_models";

    public function userID()
    {
        return $this->belongsTo(User::class);
    }
}
