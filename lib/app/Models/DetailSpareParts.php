<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailSpareParts extends Model
{
    use HasFactory;
    protected $table='gara_chitietphieusuachua';
    protected $primaryKey='detail_id';
    protected $fillable = [
        'detail_id',
        'detail_note_repair_id',
        'detail_wage_id',
        'detail_store_id'
    ];
    protected $guarded=[];
}
