<?php
namespace App\Http\Controllers\Api\v1;

use App\Http\Requests\StoreUsersRequest;
use App\Transformers\UserTransformer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use Auth;

class UsersController extends Controller
{
    public function me()
    {
        return $this->show(Auth::id());
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        return $this->response()->item($user, new UserTransformer());
    }

    public function store(StoreUsersRequest $request)
    {
    	$user = User::findOrFail(Auth::id());
    	$user->name = $request->name;
    	$user->save();
    	return $this->response()->array(['status' => 'ok']);
    }
}
