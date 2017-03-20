<?php

namespace App\Observers;

use App\Helpers\ModelHelper;
use App\Models\UUIDModel;

/**
 * Class UUIDModelObserver
 *
 * @package App\Observers
 */
final class UUIDModelObserver
{
    /**
     * @param UUIDModel $model
     *
     * @return null
     */
    public function creating(UUIDModel $model)
    {
        $model->{$model->getKeyName()} = ModelHelper::generateUuid();

        return null;
    }
}
