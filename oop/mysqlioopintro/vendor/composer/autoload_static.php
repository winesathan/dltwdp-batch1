<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitba3bbceaa8b51ee07ab4176ba91e9d78
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitba3bbceaa8b51ee07ab4176ba91e9d78::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitba3bbceaa8b51ee07ab4176ba91e9d78::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitba3bbceaa8b51ee07ab4176ba91e9d78::$classMap;

        }, null, ClassLoader::class);
    }
}
