<?php

namespace App\Http\Controllers\Api\v1;

use Illuminate\Http\Request;
use App\Http\Requests;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use App\Topic;
use App\Transformers\TopicTransformer;
use Auth;

class TopicsController extends Controller
{
	public function index(Request $request)
    {
        $topics = Topic::paginate(config('shares.topics.list.prePage'));
        return $this->response()->paginator($topics, new TopicTransformer());
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function me()
    {
        $topics = Topic::where('user_id', Auth::id())->get();
        return $this->response()->collection($topics, new TopicTransformer());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $topic = Topic::findOrFail($id);
        return $this->response()->item($topic, new TopicTransformer());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $topic = Topic::findOrFail($id);
        // if (Gate::denies('delete', $topic)) {
        //     throw new AccessDeniedHttpException();
        // }
        // $topic->delete();
        // return $this->apiResponse(200, 'success');
    }
}
