<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Hopital extends Model
{
    protected $fillable = [
        'user_id',
    ];

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
}
