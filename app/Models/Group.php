<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;
    protected $table = 'groups';
    protected $fillable = ['group_id','group_refrence_no','transaction_id','refrence_number','is_sealed','transaction_history_id'];

    // get transaction history according to group
    public function group_detail(){
        return $this->hasMany(TransactionHistory::class,'id','transaction_history_id');
    }
}
