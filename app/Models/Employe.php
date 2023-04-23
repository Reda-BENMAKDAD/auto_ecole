<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    protected $table = "employes";
    protected $fillable = [
        'num_cin',
        'nom',
        'prenom',
        'date_naiss',
        'addresse',
        'nationalite',
        'num_tel',
        'email',
        'sexe',
        'idRole',
        'salaire'
    ];
    use HasFactory;

    public function role()
    {
        return $this->belongsTo(Role::class);
    }
    public function payements()
    {
        return $this->hasMany(Payement::class);
    }

}
