<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employe extends Model
{
    protected $table = "employes";
    protected $fillable = [
        'num_cin',
        'nom',
        'prenom',
        'date_naiss',
        'lieu_naiss',
        'addresse',
        'nationalite',
        'num_tel',
        'email',
        'sexe',
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
    public function user(){
        return $this->hasOne(User::class);
    }

}
