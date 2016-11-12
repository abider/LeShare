<?php

namespace App\Shares\OAuth;

use Symfony\Component\HttpFoundation\Request;
use League\OAuth2\Server\Exception\InvalidRequestException;

class PasswordGrant extends BaseGrant
{

    protected $identifier = 'password';

    public function getUserId(Request $request, $verifier)
    {
        $phone = $this->server->getRequest()->request->get('phone', null);
        if (is_null($phone)) {
            throw new InvalidRequestException('phone');
        }

        $password = $this->server->getRequest()->request->get('password', null);
        if (is_null($password)) {
            throw new InvalidRequestException('password');
        }

        return call_user_func($verifier, $phone, $password);
    }
}
