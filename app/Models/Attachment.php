<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
    use HasFactory;
    protected $table = 'attachments';
    protected $fillable = ['user_id','transaction_id', 'refrence_number', 'type', 'size', 'status', 'file_path'];
}
