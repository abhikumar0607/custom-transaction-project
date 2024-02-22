<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryCouponRelation extends Model
{
    use HasFactory;
    protected $table = 'category_coupon_relations';

    protected $fillable = [ 'category_id','coupon_id'];

    //Function for coupon detail
    public function coupon_detail(){
        return $this->belongsTo(CouponCodes::class, 'coupon_id','id');
    }

}
