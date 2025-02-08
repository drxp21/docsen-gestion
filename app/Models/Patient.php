<?php

namespace App\Models;


class Patient extends BaseUuidModel
{
    protected $fillable = ['user_id'];

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
     * Get all of the rendez_vous for the Patient
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function rendez_vous()
    {
        return $this->hasMany(RendezVous::class);
    }
}

