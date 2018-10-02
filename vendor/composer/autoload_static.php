<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6b8d76d572c83a92d0247e38d583276e
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Model\\' => 6,
        ),
        'C' => 
        array (
            'Core\\' => 5,
            'Controller\\' => 11,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Model\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App/Models',
        ),
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Core',
        ),
        'Controller\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App/Controllers',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'App\\Controllers\\HomeController' => __DIR__ . '/../..' . '/App/Controllers/HomeController.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6b8d76d572c83a92d0247e38d583276e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6b8d76d572c83a92d0247e38d583276e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6b8d76d572c83a92d0247e38d583276e::$classMap;

        }, null, ClassLoader::class);
    }
}