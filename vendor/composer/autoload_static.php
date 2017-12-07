<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3257f48a5c9eddf3f0d9dc7cf835aad7
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'Beet\\Box\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Beet\\Box\\' => 
        array (
            0 => __DIR__ . '/..' . '/beet/box/composer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3257f48a5c9eddf3f0d9dc7cf835aad7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3257f48a5c9eddf3f0d9dc7cf835aad7::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
