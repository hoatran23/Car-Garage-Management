<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;
    protected $table='gara_phieuthutien';
    protected $primaryKey='	bill_id';
    protected $fillable = [
        'bill_id',
        'bill_cus_id',
        'bill_money_receive',
        'bill_date'
    ];
    protected $guarded=[];
}
