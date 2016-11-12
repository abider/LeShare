<?php

namespace App\Shares\OAuth;

use Symfony\Component\HttpFoundation\Request;
use League\OAuth2\Server\Exception\InvalidRequestException;

class SmsGrant extends BaseGrant
{

    protected $identifier = 'sms';

    public function getUserId(Request $request, $verifier)
    {
        $mobile = $this->server->getRequest()->request->get('mobile', null);
        if (is_null($mobile)) {
            throw new InvalidRequestException('mobile');
        }

        $code = $this->server->getRequest()->request->get('code', null);
        if (is_null($code)) {
            throw new InvalidRequestException('code');
        }

        return call_user_func($verifier, $mobile, $code);
    }
}
