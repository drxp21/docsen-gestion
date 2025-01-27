<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Service extends Model
{
    use HasFactory;

    protected $fillable = ['nom', 'hopital_id'];

    public function hopital()
    {
        return $this->belongsTo(Hopital::class);
    }

    public function rendez_vous(): HasMany
    {
        return $this->hasMany(RendezVous::class);
    }
}
