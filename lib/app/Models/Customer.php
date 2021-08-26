<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table='gara_khachhang';
    protected $primaryKey='cus_id';
    protected $fillable = [
        'cus_id',
        'cus_name',
        'cus_phone',
        'cus_address',
        'cus_debt',
    ];
    protected $guarded=[];
}
