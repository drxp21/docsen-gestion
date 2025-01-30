<?php

namespace App\Models;

use App\HasUuid;
use Illuminate\Database\Eloquent\Model;

class BaseUuidModel extends Model
{
    use HasUuid;

    /**
     * The primary key is a string (UUID), not an incrementing int.
     */
    protected $keyType = 'string';
    public $incrementing = false;

}
