<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit109096e7631a21f2ca669bea8cc17b97
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'site\\' => 5,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'site\\' => 
        array (
            0 => __DIR__ . '/../..' . '/site',
        ),
        'app\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit109096e7631a21f2ca669bea8cc17b97::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit109096e7631a21f2ca669bea8cc17b97::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit109096e7631a21f2ca669bea8cc17b97::$classMap;

        }, null, ClassLoader::class);
    }
}