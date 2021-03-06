<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit627bb87635f3fc0caf1156d6cf8b3dbf
{
    public static $files = array (
        'e8aa6e4b5a1db2f56ae794f1505391a8' => __DIR__ . '/..' . '/amphp/amp/lib/functions.php',
        '76cd0796156622033397994f25b0d8fc' => __DIR__ . '/..' . '/amphp/amp/lib/Internal/functions.php',
        '6cd5651c4fef5ed6b63e8d8b8ffbf3cc' => __DIR__ . '/..' . '/amphp/byte-stream/lib/functions.php',
        'abf9dda23a6e45f0b7b736dd6816510d' => __DIR__ . '/..' . '/amphp/process/lib/constants.php',
        'b324e763907bc37a8bdf81fa40eb1b39' => __DIR__ . '/..' . '/amphp/sync/lib/functions.php',
        '7863f327e247feb05e3be59a4fe77a6b' => __DIR__ . '/..' . '/amphp/uri/src/functions.php',
        '384cf4f2eb4d2f896db72315a76066ad' => __DIR__ . '/..' . '/amphp/parallel/lib/Worker/functions.php',
        '68a7b7dddb51c03877a41f03c909bf08' => __DIR__ . '/..' . '/amphp/file/lib/functions.php',
        '445532134d762b3cbc25500cac266092' => __DIR__ . '/..' . '/daverandom/libdns/src/functions.php',
        '7ebf029ad4b246f1e3f66192b40a932f' => __DIR__ . '/..' . '/amphp/dns/lib/functions.php',
        'd4e415514e4352172d58f02433fa50e4' => __DIR__ . '/..' . '/amphp/socket/src/functions.php',
        '1c2dcb9d6851a7abaae89f9586ddd460' => __DIR__ . '/..' . '/amphp/socket/src/Internal/functions.php',
        '29e5f145da56f2fb120187da876b5db6' => __DIR__ . '/..' . '/amphp/mysql/lib/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'RSYS\\' => 5,
        ),
        'L' => 
        array (
            'LibDNS\\' => 7,
        ),
        'D' => 
        array (
            'Dotenv\\' => 7,
        ),
        'A' => 
        array (
            'Amp\\WindowsRegistry\\' => 20,
            'Amp\\Uri\\' => 8,
            'Amp\\Sync\\' => 9,
            'Amp\\Socket\\' => 11,
            'Amp\\Process\\' => 12,
            'Amp\\Parser\\' => 11,
            'Amp\\Parallel\\' => 13,
            'Amp\\Mysql\\' => 10,
            'Amp\\File\\' => 9,
            'Amp\\Dns\\' => 8,
            'Amp\\Cache\\' => 10,
            'Amp\\ByteStream\\' => 15,
            'Amp\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'RSYS\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'LibDNS\\' => 
        array (
            0 => __DIR__ . '/..' . '/daverandom/libdns/src',
        ),
        'Dotenv\\' => 
        array (
            0 => __DIR__ . '/..' . '/vlucas/phpdotenv/src',
        ),
        'Amp\\WindowsRegistry\\' => 
        array (
            0 => __DIR__ . '/..' . '/amphp/windows-registry/lib',
        ),
        'Amp\\Uri\\' => 
        array (
            0 => __DIR__ . '/..' . '/amphp/uri/src',
        ),
        'Amp\\Sync\\' => 
        array (
            0 => __DIR__ . '/..' . '/amphp/sync/lib',
        ),
        'Amp\\Socket\\' => 
        array (
            0 => __DIR__ . '/..' . '/amphp/socket/src',
        ),
        'Amp\\Process\\' => 
        array (
            0 => __DIR__ . '/..' . '/amphp/process/lib',
        ),
        'Amp\\Parser\\' => 
        array (
            0 => __DIR__ . '/..' . '/amphp/parser/lib',
        ),
        'Amp\\Parallel\\' => 
        array (
            0 => __DIR__ . '/..' . '/amphp/parallel/lib',
        ),
        'Amp\\Mysql\\' => 
        array (
            0 => __DIR__ . '/..' . '/amphp/mysql/lib',
        ),
        'Amp\\File\\' => 
        array (
            0 => __DIR__ . '/..' . '/amphp/file/lib',
        ),
        'Amp\\Dns\\' => 
        array (
            0 => __DIR__ . '/..' . '/amphp/dns/lib',
        ),
        'Amp\\Cache\\' => 
        array (
            0 => __DIR__ . '/..' . '/amphp/cache/lib',
        ),
        'Amp\\ByteStream\\' => 
        array (
            0 => __DIR__ . '/..' . '/amphp/byte-stream/lib',
        ),
        'Amp\\' => 
        array (
            0 => __DIR__ . '/..' . '/amphp/amp/lib',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit627bb87635f3fc0caf1156d6cf8b3dbf::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit627bb87635f3fc0caf1156d6cf8b3dbf::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
