<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wage extends Model
{
    use HasFactory;
    protected $table='gara_tiencong';
    protected $primaryKey='wage_id';
    protected $fillable = [
        'wage_id',
        'wage_name',
        'wage_cost'
    ];
    protected $guarded=[];
}
