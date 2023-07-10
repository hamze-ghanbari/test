<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4df8ad6a77a4cc79cbb75ac3d8b78aeb
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Modules\\Auth\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Modules\\Auth\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit4df8ad6a77a4cc79cbb75ac3d8b78aeb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4df8ad6a77a4cc79cbb75ac3d8b78aeb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4df8ad6a77a4cc79cbb75ac3d8b78aeb::$classMap;

        }, null, ClassLoader::class);
    }
}