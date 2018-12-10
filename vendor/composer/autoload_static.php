<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb6da5850062fddefaeaf4fd2d5ce9e1e
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'TestTaker\\Utils\\' => 16,
            'TestTaker\\Providers\\' => 20,
            'TestTaker\\Processors\\' => 21,
            'TestTaker\\Models\\' => 17,
            'TestTaker\\Importers\\' => 20,
            'TestTaker\\Controllers\\' => 22,
            'TestTaker\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'TestTaker\\Utils\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/utils',
        ),
        'TestTaker\\Providers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/providers',
        ),
        'TestTaker\\Processors\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/processors',
        ),
        'TestTaker\\Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/models',
        ),
        'TestTaker\\Importers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/importers',
        ),
        'TestTaker\\Controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/controllers',
        ),
        'TestTaker\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'E' => 
        array (
            'EasyCSV' => 
            array (
                0 => __DIR__ . '/..' . '/jwage/easy-csv/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb6da5850062fddefaeaf4fd2d5ce9e1e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb6da5850062fddefaeaf4fd2d5ce9e1e::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitb6da5850062fddefaeaf4fd2d5ce9e1e::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}