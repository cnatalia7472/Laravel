<?php

namespace App\Models\Organization;

use Hyn\Tenancy\Traits\UsesTenantConnection;
use Illuminate\Database\Eloquent\Model;

class Domain extends Model
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
        'domain_name',
        'domain_tld',
        'registrar',
        'expiration_date',
        'registration_date',
        'status',
        'name_server_1',
        'name_server_2',
        'name_server_3',
        'name_server_4',
        'name_server_5',
        'name_server_6',
        'name_server_7',
        'name_server_8',
    ];
}
