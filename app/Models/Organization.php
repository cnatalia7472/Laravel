<?php

namespace App\Models;

use Webpatser\Uuid\Uuid;
use Hyn\Tenancy\Traits\UsesTenantConnection;
use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    use UsesTenantConnection;

    /**
     * Generate a UUID for each client on creation.
     */
    public static function boot()
    {
        parent::boot();
        self::creating(function ($model)
        {
            $model->uuid = (string) strtoupper(Uuid::generate(4));
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'owner_id');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'owner_id',
        'prefix',
        'type',
        'company_name',
        'address_line1',
        'address_line2',
        'city',
        'state_province_region',
        'zip_postal_code',
        'country',
        'phone_number',
        'fax_number',
        'website',
        'email',
    ];

    public function domains()
    {
        return $this->hasMany('App\Models\Organization\Domain','organization_id');
    }

    public function dns_records()
    {
        return $this->hasMany('App\Models\Organization\DNSRecord','organization_id');
    }

    public function files()
    {
        return $this->hasMany('App\Models\Organization\File','organization_id');
    }
}
