<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd4882c46a447a0f02dbe1cd3841fbdaf
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd4882c46a447a0f02dbe1cd3841fbdaf::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd4882c46a447a0f02dbe1cd3841fbdaf::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}