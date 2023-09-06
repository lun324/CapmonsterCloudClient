<?php

namespace lun324\CapmonsterCloudClient\Captcha;

use lun324\CapmonsterCloudClient\CaptchaRequest;

class HCaptchaRequest extends CaptchaRequest
{

    public function __construct(
        $websiteURL,
        $websiteKey,
        $isInvisible = null,
        $data = null,
        $userAgent = null,
        $cookies = null,
        $proxyType = null,
        $proxyAddress = null,
        $proxyPort = null,
        $proxyLogin = null,
        $proxyPassword = null
    )
    {
        $options = $this->clearInput([
            "websiteURL" => $websiteURL,
            "websiteKey" => $websiteKey,
            "isInvisible" => $isInvisible,
            "data" => $data,
            "userAgent" => $userAgent,
            "cookies" => $cookies,
            "proxyType" => $proxyType,
            "proxyAddress" => $proxyAddress,
            "proxyPort" => $proxyPort,
            "proxyLogin" => $proxyLogin,
            "proxyPassword" => $proxyPassword,
        ]);
        CaptchaRequest::__construct($this->detectProxy($options, "HCaptchaTask", "HCaptchaTaskProxyless"), $options);
    }

}