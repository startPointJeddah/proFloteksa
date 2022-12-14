<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb9fb3e5de8a6af44b16b566fdbe3e5d5
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'TidioLiveChat\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'TidioLiveChat\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'TidioLiveChat\\Admin\\AdminActionLink' => __DIR__ . '/../..' . '/src/Admin/AdminActionLink.php',
        'TidioLiveChat\\Admin\\AdminController' => __DIR__ . '/../..' . '/src/Admin/AdminController.php',
        'TidioLiveChat\\Admin\\AdminDashboard' => __DIR__ . '/../..' . '/src/Admin/AdminDashboard.php',
        'TidioLiveChat\\Admin\\AdminNotice' => __DIR__ . '/../..' . '/src/Admin/AdminNotice.php',
        'TidioLiveChat\\Admin\\AdminRouting' => __DIR__ . '/../..' . '/src/Admin/AdminRouting.php',
        'TidioLiveChat\\Admin\\IframeSetup' => __DIR__ . '/../..' . '/src/Admin/IframeSetup.php',
        'TidioLiveChat\\Config' => __DIR__ . '/../..' . '/src/Config.php',
        'TidioLiveChat\\IntegrationState' => __DIR__ . '/../..' . '/src/IntegrationState.php',
        'TidioLiveChat\\Sdk\\Api\\Client\\CurlTidioApiClient' => __DIR__ . '/../..' . '/src/Sdk/Api/Client/CurlTidioApiClient.php',
        'TidioLiveChat\\Sdk\\Api\\Client\\FileGetContentsTidioApiClient' => __DIR__ . '/../..' . '/src/Sdk/Api/Client/FileGetContentsTidioApiClient.php',
        'TidioLiveChat\\Sdk\\Api\\Client\\TidioApiClientFactory' => __DIR__ . '/../..' . '/src/Sdk/Api/Client/TidioApiClientFactory.php',
        'TidioLiveChat\\Sdk\\Api\\Exception\\TidioApiException' => __DIR__ . '/../..' . '/src/Sdk/Api/Exception/TidioApiException.php',
        'TidioLiveChat\\Sdk\\Api\\TidioApiClient' => __DIR__ . '/../..' . '/src/Sdk/Api/TidioApiClient.php',
        'TidioLiveChat\\Sdk\\Encryption\\EncryptionService' => __DIR__ . '/../..' . '/src/Sdk/Encryption/EncryptionService.php',
        'TidioLiveChat\\Sdk\\Encryption\\Exception\\DecryptionFailedException' => __DIR__ . '/../..' . '/src/Sdk/Encryption/Exception/DecryptionFailedException.php',
        'TidioLiveChat\\Sdk\\Encryption\\Service\\EncryptionServiceFactory' => __DIR__ . '/../..' . '/src/Sdk/Encryption/Service/EncryptionServiceFactory.php',
        'TidioLiveChat\\Sdk\\Encryption\\Service\\OpenSslEncryptionService' => __DIR__ . '/../..' . '/src/Sdk/Encryption/Service/OpenSslEncryptionService.php',
        'TidioLiveChat\\Sdk\\Encryption\\Service\\PlainTextEncryptionService' => __DIR__ . '/../..' . '/src/Sdk/Encryption/Service/PlainTextEncryptionService.php',
        'TidioLiveChat\\Sdk\\IntegrationFacade' => __DIR__ . '/../..' . '/src/Sdk/IntegrationFacade.php',
        'TidioLiveChat\\TidioLiveChat' => __DIR__ . '/../..' . '/src/TidioLiveChat.php',
        'TidioLiveChat\\Translation\\ErrorTranslator' => __DIR__ . '/../..' . '/src/Translation/ErrorTranslator.php',
        'TidioLiveChat\\Translation\\I18n' => __DIR__ . '/../..' . '/src/Translation/I18n.php',
        'TidioLiveChat\\Translation\\TranslationLoader' => __DIR__ . '/../..' . '/src/Translation/TranslationLoader.php',
        'TidioLiveChat\\Utils\\QueryParameters' => __DIR__ . '/../..' . '/src/Utils/QueryParameters.php',
        'TidioLiveChat\\Widget\\WidgetLoader' => __DIR__ . '/../..' . '/src/Widget/WidgetLoader.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb9fb3e5de8a6af44b16b566fdbe3e5d5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb9fb3e5de8a6af44b16b566fdbe3e5d5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb9fb3e5de8a6af44b16b566fdbe3e5d5::$classMap;

        }, null, ClassLoader::class);
    }
}
