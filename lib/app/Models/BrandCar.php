<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BrandCar extends Model
{
    use HasFactory;
    protected $table='gara_hieuxe';
    protected $primaryKey='brand_car_id';
    protected $fillable = [
        'brand_car_id',
        'brand_name'
    ];
    protected $guarded=[];
    public $timestamps = false;
}
