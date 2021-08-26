<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImportSpareParts extends Model
{
    use HasFactory;
    protected $table='gara_phieunhapvtpt';
    protected $primaryKey='import_id';
    protected $fillable = [
        'import_id',
        'import_spare_id',
        'import_quantity',
        'import_date'
    ];
    protected $guarded=[];
}
