<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4106bed6a7408416a2498bf8331f9b5d
{
    public static $prefixLengthsPsr4 = array (
        'f' => 
        array (
            'fornet\\' => 7,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'fornet\\' => 
        array (
            0 => __DIR__ . '/..' . '/fornet',
        ),
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4106bed6a7408416a2498bf8331f9b5d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4106bed6a7408416a2498bf8331f9b5d::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
