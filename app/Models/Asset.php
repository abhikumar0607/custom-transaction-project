<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    use HasFactory;
    protected $table = 'assets';
    protected $fillable = ['transaction_id','refrence_number','transaction_history_id','status'];

    // get transaction history according to assests
    public function assests_detail(){
        return $this->hasMany(TransactionHistory::class,'id','transaction_history_id');
    }
}
