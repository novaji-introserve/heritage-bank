<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit382485509a2985c48c12efe5f163a0d6
{
    public static $files = array (
        '253c157292f75eb38082b5acb06f3f01' => __DIR__ . '/..' . '/nikic/fast-route/src/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Slim\\' => 5,
        ),
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
        ),
        'I' => 
        array (
            'Interop\\Container\\' => 18,
        ),
        'F' => 
        array (
            'FastRoute\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Slim\\' => 
        array (
            0 => __DIR__ . '/..' . '/slim/slim/Slim',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'Interop\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/container-interop/container-interop/src/Interop/Container',
        ),
        'FastRoute\\' => 
        array (
            0 => __DIR__ . '/..' . '/nikic/fast-route/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'Pimple' => 
            array (
                0 => __DIR__ . '/..' . '/pimple/pimple/src',
            ),
        ),
    );

    public static $fallbackDirsPsr0 = array (
        0 => __DIR__ . '/..' . '/dwoo/dwoo/lib',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit382485509a2985c48c12efe5f163a0d6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit382485509a2985c48c12efe5f163a0d6::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit382485509a2985c48c12efe5f163a0d6::$prefixesPsr0;
            $loader->fallbackDirsPsr0 = ComposerStaticInit382485509a2985c48c12efe5f163a0d6::$fallbackDirsPsr0;

        }, null, ClassLoader::class);
    }
}
