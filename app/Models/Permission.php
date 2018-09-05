<?php
/**
 * Copyright (C) 2018 Panobit, Inc - All rights reserved.
 * Unauthorized duplication, transmission, or modification by any means is strictly prohibited.
 * Proprietary and confidential. This file belongs to the Revohub SaaS (Software-as-a-Service)
 *
 * Panobit, Inc | legal@panobit.com | www.panobit.com
 */
namespace App\Models;

use Hyn\Tenancy\Traits\UsesTenantConnection;
use Spatie\Permission\Models\Permission as SpatiePermission;

class Permission extends SpatiePermission
{
    use UsesTenantConnection;

}
