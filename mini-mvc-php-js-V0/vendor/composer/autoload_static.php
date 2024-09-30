<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit769457882de1d90f06ec9951fe209aa7
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\Tests\\' => 10,
            'App\\Model\\' => 10,
            'App\\Controller\\' => 15,
            'App\\Classes\\' => 12,
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\Tests\\' => 
        array (
            0 => '/tests',
        ),
        'App\\Model\\' => 
        array (
            0 => '/model',
        ),
        'App\\Controller\\' => 
        array (
            0 => '/controller',
        ),
        'App\\Classes\\' => 
        array (
            0 => '/classes',
        ),
        'App\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit769457882de1d90f06ec9951fe209aa7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit769457882de1d90f06ec9951fe209aa7::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit769457882de1d90f06ec9951fe209aa7::$classMap;

        }, null, ClassLoader::class);
    }
}
