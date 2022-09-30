<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionHistory extends Model
{
    use HasFactory;
    protected $table = "transaction_histories";

    public function userID()
    {
        return $this->belongsTo(User::class);
    }
}
