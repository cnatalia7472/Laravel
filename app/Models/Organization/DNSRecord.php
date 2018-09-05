<?php

namespace App\Models\Organization;

use Hyn\Tenancy\Traits\UsesTenantConnection;
use Illuminate\Database\Eloquent\Model;

class DNSRecord extends Model
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

    public function organization()
    {
        return $this->belongsTo('App\Models\Organization', 'organization_id');
    }

    protected $fillable = [
        'organization_id',
        'name',
        'type',
        'value',
        'ttl',
        'notes',
    ];
}
