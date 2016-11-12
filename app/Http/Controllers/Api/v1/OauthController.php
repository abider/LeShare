<?php

namespace App\Http\Controllers\Api\v1;

use Authorizer;
use Illuminate\Http\Request;
use App\User;
use App\Shares\Sms\SmsManager;
use Redis;

class OauthController extends Controller
{
    public function issueAccessToken(Request $request)
    {
        $issue_access_token = Authorizer::issueAccessToken();

        $access_token = $issue_access_token['access_token'];
        $userMobile = $request->mobile;

        if (!is_null($access_token) && !is_null($userMobile)) {
            $user = User::where('mobile', $userMobile)->first();
            $user->login_token = $access_token;
            $user->save();
            return $this->apiResponse(200, 'success', $issue_access_token);
        }

        return response()->json($issue_access_token);
    }

    public function seedSmsCode(Request $request)
    {
        $mobile    = $request->mobile;
        $code      = SmsManager::verifyCode();
        $sms_param = json_encode(['code' => $code, 'min' => '10']);
        $send_resp = SmsManager::sendCode($mobile, $sms_param);

        if ($send_resp->result->success) {
            Redis::set('mobile:'.$mobile, $code);
            return $this->apiResponse(200, 'success');
        }

        return response()->json($send_resp);
    }
}
