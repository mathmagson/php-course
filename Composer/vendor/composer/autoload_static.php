<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit022e331e780f822306c7dd1b550d7356
{
    public static $prefixesPsr0 = array (
        'M' => 
        array (
            'Monolog' => 
            array (
                0 => __DIR__ . '/..' . '/monolog/monolog/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit022e331e780f822306c7dd1b550d7356::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
