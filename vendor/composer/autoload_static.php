<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitab449350213a803038cd78a5d4156f77
{
    public static $fallbackDirsPsr0 = array (
        0 => __DIR__ . '/..' . '/vladkens/autoprefixer/lib',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->fallbackDirsPsr0 = ComposerStaticInitab449350213a803038cd78a5d4156f77::$fallbackDirsPsr0;

        }, null, ClassLoader::class);
    }
}
