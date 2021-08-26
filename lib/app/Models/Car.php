<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $table='gara_xe';
    protected $primaryKey='car_license_plate';
    protected $fillable = [
        'car_license_plate',
        'car_brand',
        'car_cus_id',
        'car_date_receipt',
        'car_status',
    ];
    protected $guarded=[];
}
