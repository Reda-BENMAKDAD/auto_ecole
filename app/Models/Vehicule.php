<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicule extends Model
{
    protected $table = 'vehicules';
    protected $fillable = [
        'idVehicule',
        'matricule'
    ];

    public function cours()
    {
        return $this->hasMany(Cours::class);
    }

    use HasFactory;
}
