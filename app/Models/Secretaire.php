<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\HasUuid;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Secretaire extends Model
{
    use HasUuid;

    protected $fillable = ['user_id', 'hopital_id'];

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
     * Get all of the services for the Secretaire
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function services()
    {
        return $this->hasMany(Service::class);
    }

    /**
     * Get the hopital that owns the Secretaire
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function hopital(): BelongsTo
    {
        return $this->belongsTo(Hopital::class);
    }
}
