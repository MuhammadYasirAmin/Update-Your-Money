<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FinancialLogs extends Model
{
    use HasFactory;
    protected $table = "financial_logs";

    public function userID()
    {
        return $this->belongsTo(User::class);
    }
}
