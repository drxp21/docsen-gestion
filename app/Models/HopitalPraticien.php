<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HopitalPraticien extends Model
{
    protected $table = 'hopital_praticien';
    protected $fillable = ['praticien_id', 'hopital_id'];
}
