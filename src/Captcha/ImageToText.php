<?php

namespace lun324\CapmonsterCloudClient\Captcha;

use lun324\CapmonsterCloudClient\CaptchaRequest;

class ImageToTextRequest extends CaptchaRequest
{
    public function __construct(
        $body,
        $CapMonsterModule = null,
        $recognizingThreshold = null,
        $Case = null,
        $numeric = null,
        $math = null)
    {
        $options = [
            "body" => $body,
            "CapMonsterModule" => $CapMonsterModule,
            "recognizingThreshold" => $recognizingThreshold,
            "Case" => $Case,
            "numeric" => $numeric,
            "math" => $math
        ];
        CaptchaRequest::__construct("ImageToTextTask", $options);
    }

}