<?php

namespace CleaniqueCoders\LaravelUuid;

/*
 * This file is part of laravel-uuid
 *
 * @license MIT
 * @package laravel-uuid
 */

use Illuminate\Support\Facades\Facade;

class LaravelUuidFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'LaravelUuid';
    }
}
