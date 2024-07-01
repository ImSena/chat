<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbb22e19786b8adececef763082d911e4
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

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbb22e19786b8adececef763082d911e4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbb22e19786b8adececef763082d911e4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbb22e19786b8adececef763082d911e4::$classMap;

        }, null, ClassLoader::class);
    }
}
