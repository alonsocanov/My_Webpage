<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitecce7bc6dd88a33cfae897e6fee75cbe
{
    public static $files = array (
        'c65d09b6820da036953a371c8c73a9b1' => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook/polyfills.php',
    );

    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Faker\\' => 6,
            'Facebook\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Faker\\' => 
        array (
            0 => __DIR__ . '/..' . '/fzaninotto/faker/src/Faker',
        ),
        'Facebook\\' => 
        array (
            0 => __DIR__ . '/..' . '/facebook/graph-sdk/src/Facebook',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitecce7bc6dd88a33cfae897e6fee75cbe::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitecce7bc6dd88a33cfae897e6fee75cbe::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitecce7bc6dd88a33cfae897e6fee75cbe::$classMap;

        }, null, ClassLoader::class);
    }
}
