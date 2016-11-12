<?php

namespace App\Shares\OAuth;

use App\User;

class LoginTokenVerifier
{
    public function verify($phone, $login_token)
    {
        $user = User::query()
                    ->where(['email' => $phone])
                    ->first(['id', 'login_token']);

        if (count($user) && $user->login_token === $login_token) {
            return $user->id;
        }

        return false;
    }
}
