<?php

namespace App\Shares\OAuth;

use App\User;
use Auth;

class PasswordVerifier
{
    public function verify($phone, $password)
    {
        $credentials = [
            'phone'    => $phone,
            'password' => $password,
        ];

        if (Auth::once($credentials)) {
            return Auth::user()->id;
        }

        return false;
   }
}
