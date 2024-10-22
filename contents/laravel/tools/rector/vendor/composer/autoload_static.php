<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd3db15a7920a2ef037b582312c6012ea
{
    public static $files = array (
        '9b38cf48e83f5d8f60375221cd213eee' => __DIR__ . '/..' . '/phpstan/phpstan/bootstrap.php',
        '38143a9afc50997d55e4815db8489d1c' => __DIR__ . '/..' . '/rector/rector/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'U' => 
        array (
            'Utils\\Rector\\Tests\\' => 19,
            'Utils\\Rector\\' => 13,
        ),
        'R' => 
        array (
            'RectorLaravel\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Utils\\Rector\\Tests\\' => 
        array (
            0 => __DIR__ . '/../..' . '/utils/rector/tests',
        ),
        'Utils\\Rector\\' => 
        array (
            0 => __DIR__ . '/../..' . '/utils/rector/src',
        ),
        'RectorLaravel\\' => 
        array (
            0 => __DIR__ . '/..' . '/driftingly/rector-laravel/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd3db15a7920a2ef037b582312c6012ea::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd3db15a7920a2ef037b582312c6012ea::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd3db15a7920a2ef037b582312c6012ea::$classMap;

        }, null, ClassLoader::class);
    }
}
