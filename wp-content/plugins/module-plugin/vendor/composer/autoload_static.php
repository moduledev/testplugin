<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit00d2c454e586de7ef24ca70b2dad8a20
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Inc\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Inc\\' => 
        array (
            0 => __DIR__ . '/../..' . '/inc',
        ),
    );

    public static $classMap = array (
        'Inc\\Base\\Activate' => __DIR__ . '/../..' . '/inc/Base/Activate.php',
        'Inc\\Base\\Deactivate' => __DIR__ . '/../..' . '/inc/Base/Deactivate.php',
        'Inc\\Init' => __DIR__ . '/../..' . '/inc/Init.php',
        'Inc\\Pages\\Admin' => __DIR__ . '/../..' . '/inc/Pages/Admin.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit00d2c454e586de7ef24ca70b2dad8a20::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit00d2c454e586de7ef24ca70b2dad8a20::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit00d2c454e586de7ef24ca70b2dad8a20::$classMap;

        }, null, ClassLoader::class);
    }
}
