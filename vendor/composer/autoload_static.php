<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5753ba533d41ab5bbbbca0cd4be890c5
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Aaronneondigital\\Storefront\\' => 28,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Aaronneondigital\\Storefront\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit5753ba533d41ab5bbbbca0cd4be890c5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5753ba533d41ab5bbbbca0cd4be890c5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5753ba533d41ab5bbbbca0cd4be890c5::$classMap;

        }, null, ClassLoader::class);
    }
}
