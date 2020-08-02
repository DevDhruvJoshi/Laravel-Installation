<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Tenancy\Identification\Concerns\AllowsTenantIdentification;
use Tenancy\Identification\Contracts\Tenant;

class Customer extends Model implements Tenant
{
    use AllowsTenantIdentification;
    protected $dispatchesEvents = [
        'created' => Events\Created::class,
        'updated' => Events\Updated::class,
        'deleted' => Events\Deleted::class,
    ];
}
