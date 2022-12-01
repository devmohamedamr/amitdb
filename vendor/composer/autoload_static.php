<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd149bf8c8bda739197de8030927cfab3
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Amit\\Db\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Amit\\Db\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd149bf8c8bda739197de8030927cfab3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd149bf8c8bda739197de8030927cfab3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd149bf8c8bda739197de8030927cfab3::$classMap;

        }, null, ClassLoader::class);
    }
}