<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6ee45e267f2051f9ecf48a2ffe30a9b0
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Flower\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Flower\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6ee45e267f2051f9ecf48a2ffe30a9b0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6ee45e267f2051f9ecf48a2ffe30a9b0::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
