<?php
namespace App\Http\Controllers\Api\v1;

use Dingo\Api\Routing\Helpers;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests, Helpers;

    /**
     * [apiResponse api统一返回格式]
     *
     * @param  integer $code    [返回码]
     * @param  string  $message [提示信息]
     * @param  array   $data    [返回数据]
     * @return \Illuminate\Http\Response
     */
    public function apiResponse($code = 200, $message = 'success', $data = null)
	{
		$resp = ['code' => $code, 'message' => $message];
        if (is_array($data) && !is_null($data)) $resp['data'] = $data;
		return Response($resp);
	}
}
