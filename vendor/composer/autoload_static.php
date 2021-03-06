<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit34b3a6aaf444a64e6e0fd18a480ea4a0
{
    public static $files = array (
        '7b11c4dc42b3b3023073cb14e519683c' => __DIR__ . '/..' . '/ralouphie/getallheaders/src/getallheaders.php',
        'c964ee0ededf28c96ebd9db5099ef910' => __DIR__ . '/..' . '/guzzlehttp/promises/src/functions_include.php',
        'a0edc8309cc5e1d60e3047b5df6b7052' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/functions_include.php',
        '37a3dc5111fe8f707ab4c132ef1dbc62' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/functions_include.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Snapchat\\' => 9,
        ),
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
            'Picaboooo\\' => 10,
        ),
        'G' => 
        array (
            'GuzzleHttp\\Psr7\\' => 16,
            'GuzzleHttp\\Promise\\' => 19,
            'GuzzleHttp\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Snapchat\\' => 
        array (
            0 => __DIR__ . '/..' . '/picaboooo/snapchatsdk/src/Snapchat',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'Picaboooo\\' => 
        array (
            0 => __DIR__ . '/..' . '/picaboooo/snapchatsdk/src/Picaboooo',
        ),
        'GuzzleHttp\\Psr7\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/psr7/src',
        ),
        'GuzzleHttp\\Promise\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/promises/src',
        ),
        'GuzzleHttp\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/guzzle/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'J' => 
        array (
            'JsonMapper' => 
            array (
                0 => __DIR__ . '/..' . '/netresearch/jsonmapper/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit34b3a6aaf444a64e6e0fd18a480ea4a0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit34b3a6aaf444a64e6e0fd18a480ea4a0::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit34b3a6aaf444a64e6e0fd18a480ea4a0::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
