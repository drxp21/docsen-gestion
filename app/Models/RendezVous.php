<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RendezVous extends BaseUuidModel
{
    use HasFactory;

    protected $fillable = [
        'praticien_id',
        'patient_id',
        'hopital_id',
        'service_id',
        'date',
        'statut',
    ];

    public function praticien()
    {
        return $this->belongsTo(User::class, 'praticien_id', 'id');
    }

    public function patient()
    {
        return $this->belongsTo(User::class, 'patient_id', 'id');
    }


    public function service()
    {
        return $this->belongsTo(Service::class);
    }

}
