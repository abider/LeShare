<?php
namespace App\Shares\Sms;

use App\Shares\Sms\top\TopClient;
use App\Shares\Sms\top\request\AlibabaAliqinFcSmsNumSendRequest as SmsSend;

class SmsManager
{
	public static function sendCode($mobile, $sms_param)
    {
        $appkey        = config('sms.alidayu.app_key');
        $secret        = config('sms.alidayu.app_secret');
        $sign_name     = config('sms.alidayu.sign_name');
        $template_code = config('sms.alidayu.template_code');

        $top = new TopClient;
        $sms = new SmsSend;

        $top->appkey = $appkey;
        $top->secretKey = $secret;

        $sms->setExtend("");
        $sms->setSmsType("normal");
        $sms->setSmsFreeSignName($sign_name);
        $sms->setSmsParam($sms_param);
        $sms->setRecNum($mobile);
        $sms->setSmsTemplateCode($template_code);

        $resp = $top->execute($sms);
        return $resp;
    }

    public static function verifyCode($length = null, $characters = null)
    {
        $length = (int) ($length ?: config('sms.verifyCode.length', 4));
        $characters = (string) ($characters ?: '0123456789');
        $charLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; ++$i) {
            $randomString .= $characters[mt_rand(0, $charLength - 1)];
        }

        return $randomString;
    }
}