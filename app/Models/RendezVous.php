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
        'service_id',
        'date',
        'statut',
    ];

    protected $appends = ['nom_hopital', 'nom_service', 'nom_patient', 'nom_praticien'];

    public function getNomHopitalAttribute()
    {
        return $this->service->hopital->user->name;
    }

    public function getNomServiceAttribute()
    {
        return $this->service->nom;
    }

    public function getNomPraticienAttribute()
    {
        return $this->praticien->user->name ?? '~';
    }

    public function getNomPatientAttribute()
    {
        return $this->patient->user->name;
    }

    public function praticien()
    {
        return $this->belongsTo(Praticien::class);
    }

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }


    public function service()
    {
        return $this->belongsTo(Service::class);
    }

}
