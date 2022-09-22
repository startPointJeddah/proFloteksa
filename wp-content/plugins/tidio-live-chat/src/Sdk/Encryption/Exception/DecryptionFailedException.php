<?php

namespace TidioLiveChat\Sdk\Encryption\Exception;

class DecryptionFailedException extends \Exception
{
    const INVALID_HASH_ERROR_CODE = 'invalid_hash';

    /**
     * @return DecryptionFailedException
     */
    public static function withInvalidHashErrorCode()
    {
        return new self(self::INVALID_HASH_ERROR_CODE);
    }
}
