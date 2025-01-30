<?php

namespace App;

use Ramsey\Uuid\Uuid;

trait HasUuid
{

    protected static function bootHasUuid()
    {
        static::creating(function ($model) {
            if (empty($model->id)) {
                $id = Uuid::uuid4();
                $model->id = static::encodeBase64Uuid($id);
            }
        });
    }

    public static function encodeBase64Uuid($uuid)
    {
        return rtrim(strtr(base64_encode($uuid->getBytes()), '+/', '-_'), '=');
    }
}
