<?php
/**
 * Copyright (C) 2018 Panobit, Inc - All rights reserved.
 * Unauthorized duplication, transmission, or modification by any means is strictly prohibited.
 * Proprietary and confidential. This file belongs to the Revohub SaaS (Software-as-a-Service)
 *
 * Panobit, Inc | legal@panobit.com | www.panobit.com
 */
namespace App\Models;

use Hyn\Tenancy\Traits\UsesSystemConnection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Webpatser\Uuid\Uuid;

class Tenant extends Model
{
    use UsesSystemConnection, Notifiable;

    /**
     * Generate a UUID for each tenant on creation.
     */
    public static function boot()
    {
        parent::boot();
        self::creating(function ($model)
        {
            $model->id = (string) strtoupper(Uuid::generate(4));
        });
    }

    public function website()
    {
        return $this->hasOne('App\Models\Website');
    }
}
