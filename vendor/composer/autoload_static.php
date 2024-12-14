<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita377f17784407daa548b1f2af0c9a558
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita377f17784407daa548b1f2af0c9a558::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita377f17784407daa548b1f2af0c9a558::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita377f17784407daa548b1f2af0c9a558::$classMap;

        }, null, ClassLoader::class);
    }
}