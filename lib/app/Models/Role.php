<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $table = 'gara_role';

    protected $fillable = [
        'name',
        'display_name'
    ];
    
    public function permission() {
        return $this->belongsToMany(Permission::class, 'gara_role_permission');
    }
}