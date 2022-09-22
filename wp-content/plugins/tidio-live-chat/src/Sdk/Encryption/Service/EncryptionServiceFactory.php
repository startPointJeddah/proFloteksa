<?php

namespace TidioLiveChat\Sdk\Encryption\Service;

class EncryptionServiceFactory
{
    public function create()
    {
        $encryptionKey = $this->getEncryptionKey();
        if (empty($encryptionKey) || !extension_loaded('openssl')) {
            return new PlainTextEncryptionService();
        }

        return new OpenSslEncryptionService($encryptionKey);
    }

    /**
     * @return string|null
     */
    private function getEncryptionKey()
    {
        if (!defined('LOGGED_IN_KEY')) {
            return null;
        }

        return LOGGED_IN_KEY;
    }
}
