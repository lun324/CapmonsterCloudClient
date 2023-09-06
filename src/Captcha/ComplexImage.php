<?php

namespace lun324\CapmonsterCloudClient\Captcha;

use lun324\CapmonsterCloudClient\CaptchaRequest;

class ComplexImageRequest extends CaptchaRequest
{
    public function __construct(
        $_class,
        $metadata,
        $imageUrls = [],
        $imagesBase64 = [],
        $userAgent = null,
        $websiteURL = null
    )
    {
        $options = $this->clearInput([
            "class" => $_class,
            "imageUrls" => $imageUrls,
            "imagesBase64" => $imagesBase64,
            "metadata" => $metadata,
            "userAgent" => $userAgent,
            "websiteURL" => $websiteURL,
        ]);
        CaptchaRequest::__construct('ComplexImageTask', $options);
    }
}
