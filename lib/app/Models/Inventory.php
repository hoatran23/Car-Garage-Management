<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;
    protected $table='gara_baocaoton';
    protected $primaryKey='inven_id';
    protected $fillable = [
        'inven_id',
        'inven_spare_id',
        'inven_first',
        'inven_last',
        'inven_extra'
    ];
    protected $guarded=[];
}
