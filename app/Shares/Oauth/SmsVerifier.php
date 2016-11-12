<?php

namespace App\Shares\OAuth;

use App\User;
use Redis;
use DB;

class SmsVerifier
{
    public function verify($mobile, $code)
    {
        if ($code === Redis::get('mobile:'.$mobile)) {
            $user_id = DB::table('users')->where('mobile', $mobile)->value('id');

            if (is_null($user_id)) {
                $new_user = new User;
                $new_user->mobile = $mobile;
                $new_user->name = $mobile;
                $new_user->password = bcrypt($mobile);
                $new_user->save();
                $new_user_id = is_null($new_user->id) ? false : $new_user->id;
                return $new_user_id;
            }

            Redis::del('mobile:'.$mobile);
            return $user_id;
        }

        return false;
    }
}
