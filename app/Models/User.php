<?php
/**
 * Copyright (C) 2018 Panobit, Inc - All rights reserved.
 * Unauthorized duplication, transmission, or modification by any means is strictly prohibited.
 * Proprietary and confidential. This file belongs to the Revohub SaaS (Software-as-a-Service)
 *
 * Panobit, Inc | legal@panobit.com | www.panobit.com
 */
namespace App\Models;

use Webpatser\Uuid\Uuid;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Hyn\Tenancy\Traits\UsesTenantConnection;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use UsesTenantConnection;
    use Notifiable;
    use HasRoles;


    /**
     * Generate a UUID for each user on creation.
     */
    public static function boot()
    {
        parent::boot();
        self::creating(function ($model)
        {
            $model->uuid = (string) strtoupper(Uuid::generate(4));
        });
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'language',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'uuid',
        'password',
        'remember_token',
        'last_login',
        'last_login_ip',
        'last_login_host',
        'email_optout',
        'email_verified',
        'status',
    ];



}
