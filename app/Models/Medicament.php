<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicament extends BaseUuidModel
{
    use HasFactory;

    protected $fillable = ['nom', 'description', 'forme', 'dosage', 'prix', 'unite_dosage'];


    // Reorder attributes
    public function toArray()
    {
        $array = parent::toArray();
        return [
            'id' => $this->id,
            'nom' => $this->nom,
            'forme' => $this->forme,
            'dosage' => $this->dosage,
            'unite_dosage' => $this->unite_dosage, // Place next to dosage
            'prix' => $this->prix,
            'description' => $this->description,
        ];
    }
    public function ordonnances()
    {
        return $this->belongsToMany(Ordonnance::class, 'ordonnance_medicaments')
            ->withTimestamps();
    }


}