<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3efb359d5706d6ace1ca6dab0688e159
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Src\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Src\\' => 
        array (
            0 => __DIR__ . '/../..' . '/application',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3efb359d5706d6ace1ca6dab0688e159::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3efb359d5706d6ace1ca6dab0688e159::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3efb359d5706d6ace1ca6dab0688e159::$classMap;

        }, null, ClassLoader::class);
    }
}
