<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfe2379366e659391f861a373fd2925d7
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'EmadAlkabi\\Ckeditor\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'EmadAlkabi\\Ckeditor\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfe2379366e659391f861a373fd2925d7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfe2379366e659391f861a373fd2925d7::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
