<?php

namespace App\Http\Controllers\Api\v1;

use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use App\Http\Requests\StoreCommentsRequest;
use App\Transformers\CommentTransformer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Comment;

class CommentsController extends Controller
{
    public function index(Request $request)
    {
        $comments = Comment::where('topic_id', $request->topic_id)->get();
        return $this->response()->collection($comments, new CommentTransformer());
    }

    public function me()
    {
        $comments = Comment::where('user_id', Auth::id())->get();
        return $this->response()->collection($comments, new CommentTransformer());
    }

    public function store(StoreCommentsRequest $request)
    {
        $comment = new Comment;
        $comment->user_id    = 1;
        $comment->topic_id   = $request->topic_id;
        $comment->comment_id = $request->input('comment_id', 0);
        $comment->body       = $request->content;
        $comment->save();

        return $comment->id > 0 ? response(['status' => 'ok']) : $this->response->error('发表评论失败！');
    }

    public function show($id)
    {
        $comments = Comment::where('comment_id', $id)->get();
        return $this->response()->collection($comments, new CommentTransformer());
    }

    public function destroy($id)
    {
        $comment = Comment::findOrFail($id);
        if ($comment->user_id == Auth::id()) {
            $comments = Comment::where('comment_id', $id)->delete();
            $comment->delete();
            return $this->response->array(['status' => 'ok']);
        }
        throw new AccessDeniedHttpException();
    }
}
