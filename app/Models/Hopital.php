<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Hopital extends BaseUuidModel
{


    protected $fillable = [
        'user_id',
    ];

    protected static function booted()
    {
        static::created(
            function ($model) {
                $services = [
                    'Cardiologie',
                    'Dermatologie',
                    'Pédiatrie',
                    'Neurologie',
                    'Ophtalmologie',
                    'Orthopédie',
                    'Psychiatrie',
                    'Radiologie',
                    'Gynécologie',
                    'Anesthésiologie',
                ];

                foreach ($services as $s) {
                    Service::create(['nom' => $s, 'hopital_id' => $model->id]);
                }
            }
        );
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function getEmailAttribute()
    {
        return $this->user->email;
    }
    public function getNameAttribute()
    {
        return $this->user->name;
    }
    public function getProfilePhotoUrlAttribute()
    {
        return $this->user->profile_photo_url;
    }

    /**
     * The praticiens that belong to the Hopital
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function praticiens(): BelongsToMany
    {
        return $this->belongsToMany(Praticien::class);
    }

    /**
     * Get all of the services for the Hopital
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function services(): HasMany
    {
        return $this->hasMany(Service::class);
    }

    /**
     * Get all of the secretaires for the Hopital
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function secretaires()
    {
        return $this->hasMany(Secretaire::class);
    }

    /**
     * Get all of the rendez_vous for the Hopital
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough
     */
    public function rendez_vous()
    {
        return $this->hasManyThrough(RendezVous::class, Service::class);
    }
}
