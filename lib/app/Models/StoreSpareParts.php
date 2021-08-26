<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StoreSpareParts extends Model
{
    use HasFactory;
    protected $table='gara_kho';
    protected $primaryKey='store_id';
    protected $fillable = [
        'store_id',
        'store_spare_name',
        'store_quantity_avail',
        'store_cost'
    ];
    protected $guarded=[];
}
