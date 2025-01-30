<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrdonnanceMedicament extends BaseUuidModel
{
    use HasFactory;

    protected $fillable = ['ordonnance_id', 'medicament_id'];
}
