<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit451ba18da532810ae79d7082ac2daa5f
{
    public static $files = array (
        '9db044c31a2b3d3c5807ec52857f8fdf' => __DIR__ . '/../..' . '/app/api/config/config.php',
    );

    public static $prefixLengthsPsr4 = array (
        'r' => 
        array (
            'raymondoor\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'raymondoor\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/api/config',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit451ba18da532810ae79d7082ac2daa5f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit451ba18da532810ae79d7082ac2daa5f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit451ba18da532810ae79d7082ac2daa5f::$classMap;

        }, null, ClassLoader::class);
    }
}
