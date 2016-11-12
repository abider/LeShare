<?php

namespace App\Transformers;

use App\Models\User;

class UserTransformer extends BaseTransformer
{
    public function transformData($model)
    {
        return [
            'id' => $model->id,
            'name' => $model->name,
            'time' => strtotime($model->created_at),
        ];
    }
}