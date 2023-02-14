<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit87d3ad06a5d407a75c06b7637b90303e
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
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit87d3ad06a5d407a75c06b7637b90303e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit87d3ad06a5d407a75c06b7637b90303e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit87d3ad06a5d407a75c06b7637b90303e::$classMap;

        }, null, ClassLoader::class);
    }
}