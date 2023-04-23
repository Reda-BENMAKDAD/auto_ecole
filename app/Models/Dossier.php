<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dossier extends Model
{

    protected $table = 'dossiers';
    protected $fillable = [
        'idClient',
        'contrat_legalise',
        'date_legalisation_contrat',
        'dossier_saisi',
        'date_saisie_dossier',
        'visite_medical',
        'taxe_payee',
        'rdv_theorique',
        'date_rdv_theorique',
        'rdv_pratique',
        'date_rdv_pratique',
        'permis_accorde',
        'centre_imm',
        'type_permis',
        'prix_permis',
        'avance'
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
    
    public function payements()
    {
        return $this->hasMany(Payement::class);
    }
    use HasFactory;
}
