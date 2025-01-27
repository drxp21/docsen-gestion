<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ordonnance extends Model
{
    //

    public function praticien()
    {
        return $this->belongsTo(User::class, 'praticien_id', 'id');
    }

    public function patient()
    {
        return $this->belongsTo(User::class, 'patient_id', 'id');
    }

    public function medicaments()
    {
        return $this->belongsToMany(Medicament::class, 'ordonnance_medicaments')
            ->withTimestamps();
    }

}
