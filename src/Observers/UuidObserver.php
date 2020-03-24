<?php

namespace CleaniqueCoders\LaravelUuid\Observers;

use CleaniqueCoders\LaravelUuid\Contracts\HasUuid as HasUuidContract;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;

class UuidObserver
{
    /**
     * Handle the User "creating" event.
     *
     * @return void
     */
    public function creating(Model $model)
    {
        if ($model instanceof HasUuidContract) {
            if (Schema::hasColumn($model->getTable(), $model->getUuidColumnName())) {
                $model->{$model->getUuidColumnName()} = uuid();
            }
        }
    }
}
