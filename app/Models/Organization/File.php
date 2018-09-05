<?php

namespace App\Models\Organization;

use Hyn\Tenancy\Traits\UsesTenantConnection;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use UsesTenantConnection;

    public static function boot()
    {
        parent::boot();
        self::creating(function ($model)
        {
            $model->uuid = (string) strtoupper(Uuid::generate(4));
        });
    }


    public function getFileSize($id)
    {

    }

    public function getFileName($id)
    {

    }

    public function getFileStoragePath($id)
    {

    }
}
