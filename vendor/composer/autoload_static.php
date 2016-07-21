<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1d886a9be735d11f8f5542d1cadc34b6
{
    public static $classMap = array (
        'AdWordsConstants' => __DIR__ . '/../..' . '/src/Google/Api/Ads/AdWords/Lib/AdWordsConstants.php',
        'AdWordsSoapClient' => __DIR__ . '/../..' . '/src/Google/Api/Ads/AdWords/Lib/AdWordsSoapClient.php',
        'AdWordsSoapClientFactory' => __DIR__ . '/../..' . '/src/Google/Api/Ads/AdWords/Lib/AdWordsSoapClientFactory.php',
        'AdWordsUser' => __DIR__ . '/../..' . '/src/Google/Api/Ads/AdWords/Lib/AdWordsUser.php',
        'DfpSoapClient' => __DIR__ . '/../..' . '/src/Google/Api/Ads/Dfp/Lib/DfpSoapClient.php',
        'DfpSoapClientFactory' => __DIR__ . '/../..' . '/src/Google/Api/Ads/Dfp/Lib/DfpSoapClientFactory.php',
        'DfpUser' => __DIR__ . '/../..' . '/src/Google/Api/Ads/Dfp/Lib/DfpUser.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit1d886a9be735d11f8f5542d1cadc34b6::$classMap;

        }, null, ClassLoader::class);
    }
}
