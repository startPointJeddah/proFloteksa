<?php

namespace TidioLiveChat\Sdk\Encryption\Service;

use TidioLiveChat\Sdk\Encryption\EncryptionService;

class PlainTextEncryptionService implements EncryptionService
{
    /**
     * @inerhitDoc
     */
    public function encrypt($value)
    {
        return $value;
    }

    /**
     * @inerhitDoc
     */
    public function decrypt($encryptedString)
    {
        return $encryptedString;
    }
}
