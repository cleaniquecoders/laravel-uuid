<?php

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

if (! function_exists('uuid')) {
    /**
     * Generate uuid.
     */
    function uuid(): string
    {
        return (string) Str::uuid();
    }
}

if (! function_exists('validUuid')) {
    /**
     * Validate given uuid.
     */
    function validUuid(string $value): bool
    {
        return ! Validator::make([
                'uuid' => $value,
            ], [
            'uuid' => 'string|uuid',
        ])->fails();
    }
}
