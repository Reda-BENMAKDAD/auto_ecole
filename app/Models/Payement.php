<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payement extends Model
{
    protected $table = 'payements';
    protected $fillable = [
        'idDossier',
        'idEmp',
        'payement_valide',
        'montant',
        'date'

    ];

    public function dossier()
    {
        return $this->belongsTo(Dossier::class);
    }

    public function employe()
    {
        return $this->belongsTo(Employe::class);
    }

    use HasFactory;
}
