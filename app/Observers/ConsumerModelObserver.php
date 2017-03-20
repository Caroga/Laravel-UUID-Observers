<?php

namespace App\Observers;
use App\Helpers\ModelHelper;
use App\Models\Consumer;

/**
 * Class ConsumerObserver
 *
 * @package App\Observers
 */
class ConsumerModelObserver
{
    /**
     * @param Consumer $model
     *
     * @return null
     */
    public function created(Consumer $model)
    {
        $model->{$model->getApiTokenKey()} = ModelHelper::generateApiToken($model);

        return null;
    }
}
