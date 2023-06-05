<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit201a56f195be38b58776c1d7de5d09e9
{
    public static $files = array (
        'e1035a6fe53351b28557b2a847b639e6' => __DIR__ . '/../..' . '/app/helpers/helper.php',
    );

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

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit201a56f195be38b58776c1d7de5d09e9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit201a56f195be38b58776c1d7de5d09e9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit201a56f195be38b58776c1d7de5d09e9::$classMap;

        }, null, ClassLoader::class);
    }
}