<?php

namespace App\Http\Controllers\Api\v1;

use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use App\Http\Requests\StoreTopicsRequest;
use App\Transformers\TopicTransformer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Topic;
use Auth;

class TopicsController extends Controller
{
	public function index(Request $request)
    {
        $topics = Topic::orderBy('created_at', 'desc')->paginate(config('shares.topics.list.prePage'));
        return $this->response()->paginator($topics, new TopicTransformer());
    }

    public function me()
    {
        $topics = Topic::where('user_id', Auth::id())->orderBy('created_at', 'desc')->paginate(config('shares.topics.list.prePage'));
        return $this->response()->paginator($topics, new TopicTransformer());
    }

    public function store(StoreTopicsRequest $request)
    {
        $topic              = new Topic;
        $topic->title       = $request->title;
        $topic->body        = $request->content;
        $topic->user_id     = Auth::id();
        $topic->category_id = 1;

        $topic->save();
        if ($topic->id > 0) return response(['status' => 'ok']);
        $this->response->error('发表分享失败！');
    }

    public function show($id)
    {
        $topic = Topic::findOrFail($id);
        return $this->response()->item($topic, new TopicTransformer());
    }
}
