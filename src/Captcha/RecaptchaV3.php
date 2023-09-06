<?php

namespace lun324\CapmonsterCloudClient\Captcha;

use lun324\CapmonsterCloudClient\CaptchaRequest;

class RecaptchaV3Request extends CaptchaRequest
{

    public function __construct($websiteURL, $websiteKey, float $minScore = null, $pageAction = null)
    {
        $options = [
            "websiteURL" => $websiteURL,
            "websiteKey" => $websiteKey,
            "minScore" => $minScore,
            "pageAction" => $pageAction
        ];
        CaptchaRequest::__construct("RecaptchaV3TaskProxyless", $options);
    }

}