<?php

namespace App;

use Ramsey\Uuid\Uuid;

trait HasUuid
{

    protected static function bootHasUuid()
    {
        static::creating(function ($model) {
            if (empty($model->uuid)) {
                $uuid = Uuid::uuid4();
                $model->uuid = static::encodeBase64Uuid($uuid);
            }
        });
    }

    public static function encodeBase64Uuid($uuid)
    {
        return rtrim(strtr(base64_encode($uuid->getBytes()), '+/', '-_'), '=');
    }
}
