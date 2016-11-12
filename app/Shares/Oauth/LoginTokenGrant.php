<?php

namespace App\Shares\OAuth;

use Symfony\Component\HttpFoundation\Request;
use League\OAuth2\Server\Exception\InvalidRequestException;

class LoginTokenGrant extends BaseGrant
{

    protected $identifier = 'login_token';

    public function getUserId(Request $request, $verifier)
    {
        $phone = $this->server->getRequest()->request->get('phone', null);
        if (is_null($phone)) {
            throw new InvalidRequestException('phone');
        }

        $login_token = $this->server->getRequest()->request->get('login_token', null);
        if (is_null($login_token)) {
            throw new InvalidRequestException('login_token');
        }

        return call_user_func($verifier, $phone, $login_token);
    }
}
