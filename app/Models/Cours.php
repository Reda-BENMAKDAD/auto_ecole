<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cours extends Model
{
    protected $table = 'cours';

    protected $fillable = [
        'idClient',
        'nature_cours',
        'date_cours',
        'idMoniteur',
        'idVehicule'
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function employe()
    {
        return $this->belongsTo(Employe::class);
    }

    public function vehicule()
    {
        return $this->belongsTo(Vehicule::class);
    }
    
    use HasFactory;
}
