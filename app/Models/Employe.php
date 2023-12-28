<?php

namespace App\Models;

use Spatie\Permission\Models\Role;
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
        'adresse',
        'nationalite',
        'num_tel',
        'email',
        'sexe',
        'salaire',
        'poste', 
        'docs_uuid',
        'scan_cv',
        'scan_cin',
        'photo'

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
        return $this->hasOne(User::class, 'id_employe');
    }

}
