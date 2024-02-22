<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionHistory extends Model
{

    protected $keyType = 'string';
    protected $primaryKey = 'id';
    public $incrementing = false;

    // Add this method to automatically set the ID with leading zeros
    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $nextId = static::getNextId();
            $model->id = str_pad($nextId, 5, '0', STR_PAD_LEFT);
        });
    }

   // Add this method to get the next available ID
    public static function getNextId()
    {
        // Get the maximum current ID
        $maxId = static::max('id');
        
        // If there is no existing record, start from 1
        if (!$maxId) {
            return 1;
        }
        
        // Increment the maximum ID by 1
        return intval($maxId) + 1;
    }
    use HasFactory;
    
    protected $table = 'transaction_history';

    protected $fillable = ['transaction_id','total_duty','income_type','duty_rate','currency_rate','currency_type','cif_forigen_value','origin','gross_weight','goods_descriptions','hs_code','pkg_type','qty','weight','cif_value_aed'];

    //get transaction
    public function transactions()
    {
        return $this->belongsTo(Transaction::class, 'transaction_id');
    }
}
