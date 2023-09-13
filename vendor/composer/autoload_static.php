<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit39d1a26eedc84dc1a36b03b091741ccd
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit39d1a26eedc84dc1a36b03b091741ccd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit39d1a26eedc84dc1a36b03b091741ccd::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit39d1a26eedc84dc1a36b03b091741ccd::$classMap;

        }, null, ClassLoader::class);
    }
}
