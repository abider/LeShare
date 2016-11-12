<?php

namespace App\Transformers;

class TopicTransformer extends BaseTransformer
{
    // protected $availableIncludes = ['user', 'last_reply_user', 'replies', 'category'];

    protected $defaultIncludes  = ['user'];

    public function transformData($model)
    {
        return [
            "id"      => $model->id,
            "time"    => strtotime($model->created_at),
            "title"   => $model->title,
            "content" => htmlspecialchars_decode($model->body),
        ];
    }

    public function includeUser($model)
    {
        return $this->item($model->user, new UserTransformer());
    }
}
