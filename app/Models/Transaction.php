<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
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
        // Customize this logic to fetch the next available ID from your data source
        // For example, you could get the maximum current ID and increment it by 1
        $maxId = static::max('id');
        return $maxId ? intval($maxId) + 1 : 1;
    }
    
    use HasFactory;
    
    protected $table = 'transactions';

    protected $fillable = ['user_id','port_type','dec_type','dec_date','boe_number','custom_declaration','declaration_number','net_weight','gross_weight','measurement','no_of_pages','marks_number','exporter','intercessor','commercial_reg_num','port_of_loading','port_of_discharge','destination','delevery_order_number','car_capt','carrier_name','voyage_no','manifast','transaction_type','refrence_number','exporter_code','clearing_agent','clearing_agent_code','direction','clearing_agent','clearing_agent_code','intercessor_code','consignee_import_code','consignee_exporter'];


    // function for get transaction history according to transaction
    public function transaction_history()
    {
        return $this->hasMany(TransactionHistory::class);
    }  

     // function for get attachments according to Invoice transaction
     public function transaction_invoice_attachment()
     {
        return $this->hasMany(Attachment::class)->where('type', 'Invoice');
     } 
    
     // function for get attachments according to Local Goods Pass transaction
    public function transaction_lgp_attachment()
    {
       return $this->hasMany(Attachment::class)->where('type', 'Local Goods Pass');
    } 
}
