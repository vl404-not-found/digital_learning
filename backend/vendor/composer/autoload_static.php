<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5def7594725bfb05e953095294011b01
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'DigitalStars\\DataBase\\' => 22,
            'DigitalStars\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'DigitalStars\\DataBase\\' => 
        array (
            0 => __DIR__ . '/..' . '/digitalstars/database/src',
        ),
        'DigitalStars\\' => 
        array (
            0 => __DIR__ . '/..' . '/digitalstars/simple-api/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5def7594725bfb05e953095294011b01::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5def7594725bfb05e953095294011b01::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
