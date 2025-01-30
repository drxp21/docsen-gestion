<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disponibilite extends BaseUuidModel
{
    use HasFactory;

    protected $fillable = ['praticien_id', 'jour', 'heure_debut', 'heure_fin', 'statut'];

    public function praticien()
    {
        return $this->belongsTo(User::class);
    }
}
