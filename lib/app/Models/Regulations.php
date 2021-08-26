<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Regulations extends Model
{
    use HasFactory;
    protected $table='gara_quydinh';
    protected $primaryKey='regu_id';
    protected $fillable = [
        'regu_id',
        'regu_name',
        'regu_value'
    ];
    protected $guarded=[];
}
