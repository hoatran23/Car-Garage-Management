<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NoteRepair extends Model
{
    use HasFactory;
    protected $table='gara_phieusuachua';
    protected $primaryKey='note_repair_id';
    protected $fillable = [
        'note_repair_id',
        'note_repair_license_plate',
        'note_repair_cus_id',
        'note_repair_wage',
        'note_repair_accessary',
        'note_repair_total'
    ];
    protected $guarded=[];
}
