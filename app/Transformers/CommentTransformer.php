<?php

namespace App\Transformers;

class CommentTransformer extends BaseTransformer
{
    // protected $availableIncludes = ['user'];

    protected $defaultIncludes  = ['user'];

    public function transformData($model)
    {
        return [
            "id" => $model->id,
            "topic_id" => $model->topic_id,
            "user_id" => $model->user_id,
            "body" => $model->body,
            'time' => strtotime($model->created_at),
        ];
    }

    public function includeUser($model)
    {
        return $this->item($model->user, new UserTransformer());
    }
}
