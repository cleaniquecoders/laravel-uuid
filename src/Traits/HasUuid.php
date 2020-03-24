<?php

namespace CleaniqueCoders\LaravelUuid\Traits;

use Illuminate\Database\Eloquent\Builder;

trait HasUuid
{
    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return $this->getUuidColumnName();
    }

    /**
     * Get UUID Column Name.
     */
    public function getUuidColumnName(): string
    {
        return isset($this->uuid_column) ? $this->uuid_column : 'uuid';
    }

    /**
     * Scope a query to only include popular users.
     */
    public function scopeUuid(Builder $query, $value): Builder
    {
        return $query->where($this->getUuidColumnName(), $value);
    }
}
