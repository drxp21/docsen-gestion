<?php

namespace App\Models;


class Creneau extends BaseUuidModel
{
    protected $fillable = ['jour', 'heure_debut', 'heure_fin', 'reserve', 'hopital_id'];
    public $timestamps = false;


    
    protected $casts = [
        'reserve' => 'boolean'
    ];
    
}
