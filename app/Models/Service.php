<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Service extends BaseUuidModel
{

    use HasFactory;

    protected $fillable = ['nom', 'hopital_id', 'secretaire_id'];

    public function hopital()
    {
        return $this->belongsTo(Hopital::class);
    }


    public function secretaire()
    {
        return $this->belongsTo(Service::class);
    }

    public function rendez_vous(): HasMany
    {
        return $this->hasMany(RendezVous::class);
    }

    public function getSecretaireAttribute()
    {
        $s = Secretaire::with('user')->find($this->secretaire_id);
        return $s ? $s->user->name : '~';
    }

}
