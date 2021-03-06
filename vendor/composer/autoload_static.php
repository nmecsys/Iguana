<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb356caa4d1ea116840ffe1ceb44aea34
{
    public static $files = array (
        '3b5531f8bb4716e1b6014ad7e734f545' => __DIR__ . '/..' . '/illuminate/support/Illuminate/Support/helpers.php',
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        'e40631d46120a9c38ea139981f8dab26' => __DIR__ . '/..' . '/ircmaxell/password-compat/lib/password.php',
        'edc6464955a37aa4d5fbf39d40fb6ee7' => __DIR__ . '/..' . '/symfony/polyfill-php55/bootstrap.php',
        '3e2471375464aac821502deb0ac64275' => __DIR__ . '/..' . '/symfony/polyfill-php54/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Php55\\' => 23,
            'Symfony\\Polyfill\\Php54\\' => 23,
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Component\\Translation\\' => 30,
            'Symfony\\Component\\HttpFoundation\\' => 33,
            'Slim\\HttpCache\\' => 15,
        ),
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
            'Psr\\Container\\' => 14,
        ),
        'C' => 
        array (
            'Carbon\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Php55\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php55',
        ),
        'Symfony\\Polyfill\\Php54\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php54',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Component\\Translation\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/translation',
        ),
        'Symfony\\Component\\HttpFoundation\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/http-foundation',
        ),
        'Slim\\HttpCache\\' => 
        array (
            0 => __DIR__ . '/..' . '/slim/http-cache/src',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'Carbon\\' => 
        array (
            0 => __DIR__ . '/..' . '/nesbot/carbon/src/Carbon',
        ),
    );

    public static $prefixesPsr0 = array (
        'T' => 
        array (
            'Twig_' => 
            array (
                0 => __DIR__ . '/..' . '/twig/twig/lib',
            ),
        ),
        'S' => 
        array (
            'Symfony\\Component\\Finder\\' => 
            array (
                0 => __DIR__ . '/..' . '/symfony/finder',
            ),
            'Slim\\Views' => 
            array (
                0 => __DIR__ . '/..' . '/slim/views',
            ),
            'SlimServices' => 
            array (
                0 => __DIR__ . '/..' . '/itsgoingd/slim-services',
            ),
            'Slim' => 
            array (
                0 => __DIR__ . '/..' . '/slim/slim',
            ),
        ),
        'P' => 
        array (
            'Pimple' => 
            array (
                0 => __DIR__ . '/..' . '/pimple/pimple/src',
            ),
        ),
        'I' => 
        array (
            'Illuminate\\Translation' => 
            array (
                0 => __DIR__ . '/..' . '/illuminate/translation/src',
            ),
            'Illuminate\\Support' => 
            array (
                0 => __DIR__ . '/..' . '/illuminate/support',
            ),
            'Illuminate\\Filesystem' => 
            array (
                0 => __DIR__ . '/..' . '/illuminate/filesystem',
            ),
            'Illuminate\\Events' => 
            array (
                0 => __DIR__ . '/..' . '/illuminate/events',
            ),
            'Illuminate\\Database' => 
            array (
                0 => __DIR__ . '/..' . '/illuminate/database',
            ),
            'Illuminate\\Container' => 
            array (
                0 => __DIR__ . '/..' . '/illuminate/container',
            ),
        ),
    );

    public static $classMap = array (
        'CallbackFilterIterator' => __DIR__ . '/..' . '/symfony/polyfill-php54/Resources/stubs/CallbackFilterIterator.php',
        'Classificador' => __DIR__ . '/../..' . '/models/appModels.php',
        'Factiva' => __DIR__ . '/../..' . '/models/appModels.php',
        'Illuminate\\Validation\\DatabasePresenceVerifier' => __DIR__ . '/..' . '/illuminate/validation/src/Illuminate/Validation/DatabasePresenceVerifier.php',
        'Illuminate\\Validation\\Factory' => __DIR__ . '/..' . '/illuminate/validation/src/Illuminate/Validation/Factory.php',
        'Illuminate\\Validation\\PresenceVerifierInterface' => __DIR__ . '/..' . '/illuminate/validation/src/Illuminate/Validation/PresenceVerifierInterface.php',
        'Illuminate\\Validation\\ValidationServiceProvider' => __DIR__ . '/..' . '/illuminate/validation/src/Illuminate/Validation/ValidationServiceProvider.php',
        'Illuminate\\Validation\\Validator' => __DIR__ . '/..' . '/illuminate/validation/src/Illuminate/Validation/Validator.php',
        'Noticias' => __DIR__ . '/../..' . '/models/appModels.php',
        'RecursiveCallbackFilterIterator' => __DIR__ . '/..' . '/symfony/polyfill-php54/Resources/stubs/RecursiveCallbackFilterIterator.php',
        'SessionHandlerInterface' => __DIR__ . '/..' . '/symfony/polyfill-php54/Resources/stubs/SessionHandlerInterface.php',
        'Token' => __DIR__ . '/../..' . '/models/appModels.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb356caa4d1ea116840ffe1ceb44aea34::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb356caa4d1ea116840ffe1ceb44aea34::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitb356caa4d1ea116840ffe1ceb44aea34::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitb356caa4d1ea116840ffe1ceb44aea34::$classMap;

        }, null, ClassLoader::class);
    }
}
