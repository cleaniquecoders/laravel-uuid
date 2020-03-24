<?php

namespace CleaniqueCoders\LaravelUuid\Tests\Stubs\Models;

use CleaniqueCoders\LaravelUuid\Contracts\HasUuid as HasUuidContract;
use CleaniqueCoders\LaravelUuid\Traits\HasUuid;
use Illuminate\Database\Eloquent\Model;

class User extends Model implements HasUuidContract
{
    use HasUuid;

    protected $guarded = ['id'];
}
