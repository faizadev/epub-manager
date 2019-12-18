<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6518143538b8c361746bfbe10ba0c5a2
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PhpInflector\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PhpInflector\\' => 
        array (
            0 => __DIR__ . '/..' . '/koenpunt/php-inflector/lib',
        ),
    );

    public static $classMap = array (
        'BaseModel' => __DIR__ . '/../..' . '/classes/BaseModel.php',
        'DB' => __DIR__ . '/../..' . '/classes/DB.php',
        'Database' => __DIR__ . '/../..' . '/classes/Database.php',
        'Email' => __DIR__ . '/../..' . '/classes/Validation/Email.php',
        'Helper' => __DIR__ . '/../..' . '/classes/Helper.php',
        'Max' => __DIR__ . '/../..' . '/classes/Validation/Max.php',
        'Min' => __DIR__ . '/../..' . '/classes/Validation/Min.php',
        'QnapTrack' => __DIR__ . '/../..' . '/classes/QnapTrack.php',
        'Query' => __DIR__ . '/../..' . '/classes/Query.php',
        'Required' => __DIR__ . '/../..' . '/classes/Validation/Required.php',
        'Session' => __DIR__ . '/../..' . '/classes/Session.php',
        'Unique' => __DIR__ . '/../..' . '/classes/Validation/Unique.php',
        'User' => __DIR__ . '/../..' . '/classes/User.php',
        'ValidationInterface' => __DIR__ . '/../..' . '/classes/Validation/ValidationInterface.php',
        'ValidationStrategy' => __DIR__ . '/../..' . '/classes/Validation/ValidationStrategy.php',
        'Validator' => __DIR__ . '/../..' . '/classes/Validation/Validator.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6518143538b8c361746bfbe10ba0c5a2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6518143538b8c361746bfbe10ba0c5a2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6518143538b8c361746bfbe10ba0c5a2::$classMap;

        }, null, ClassLoader::class);
    }
}