<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DepositeAmount extends Model
{
    use HasFactory;
    protected $table = "deposite_amounts";

    public function userID()
    {
        return $this->belongsTo(User::class);
    }
}

