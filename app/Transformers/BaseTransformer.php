<?php

namespace App\Transformers;

use Illuminate\Database\Eloquent\Model;
use League\Fractal\TransformerAbstract;

abstract class BaseTransformer extends TransformerAbstract
{
    public function transform($model)
    {
        $data = $this->transformData($model);

        foreach (array_keys($data) as $key) {
            if (! isset($data[$key])) {
                $data[$key] = '';
                continue;
            }
            if (is_null($data[$key])) {
                $data[$key] = '';
            }
        }

        return $data;
    }

    abstract public function transformData($model);
}
