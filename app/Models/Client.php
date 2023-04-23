<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'clients';
    protected $fillable = [
        'num_cin',
        'nom',
        'prenom',
        'date_naiss',
        'addresse',
        'nationalite',
        'num_tel',
        'email',
        'sexe'
    ];
    public function dossier()
    {
        return $this->hasMany(Dossier::class);
    }

    public function cours()
    {
        return $this->hasMany(Cours::class);
    }


    use HasFactory;
}
