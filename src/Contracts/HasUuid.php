<?php

namespace CleaniqueCoders\LaravelUuid\Contracts;

interface HasUuid
{
    public function getUuidColumnName(): string;
}
