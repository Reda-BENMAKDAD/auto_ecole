<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';
    protected $fillable = [
        'idRole',
        'fillable'
    ];

    public function employes()
    {
        return $this->hasMany(Employe::class);
    }
    use HasFactory;
}
