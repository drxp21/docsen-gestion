<?php

namespace App\Models;

use Illuminate\Support\Facades\Log;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Praticien extends BaseUuidModel
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'specialite',
        'description',
        'latitude',
        'longitude',
    ];

    protected static function booted()
    {
        static::created(function ($model) {
            $jours = ['lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi', 'dimanche'];

            foreach ($jours as $jour) {
                Creneau::create([
                    'jour' => $jour,
                    'heure_debut' => '08:00',
                    'heure_fin' => '12:00',
                    'praticien_id' => $model->id,
                ]);
            }
        });
    }


    public function getNameAttribute()
    {
        return $this->user->name;
    }
    public function getEmailAttribute()
    {
        return $this->user->email;
    }

    public function getLatitudeAttribute()
    {
        return $this->user->latitude;
    }
    public function getLongitudeAttribute()
    {
        return $this->user->longitude;
    }
    public function getProfilePhotoUrlAttribute()
    {
        return $this->user->profile_photo_url;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * The hopitals that belong to the Praticien
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function hopitals(): BelongsToMany
    {
        return $this->belongsToMany(Hopital::class);
    }

    /**
     * Get all of the creneaus for the Praticien
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function creneaus()
    {
        return $this->hasMany(Creneau::class);
    }
}
