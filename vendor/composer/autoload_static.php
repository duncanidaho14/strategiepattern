<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbc6a04eae61516da926b14bfb6c53411
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Acme\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Acme\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Acme\\Canard' => __DIR__ . '/../..' . '/src/Canard.php',
        'Acme\\Cancan' => __DIR__ . '/../..' . '/src/Cancan.php',
        'Acme\\CancanMuet' => __DIR__ . '/../..' . '/src/CancanMuet.php',
        'Acme\\CoinCoin' => __DIR__ . '/../..' . '/src/CoinCoin.php',
        'Acme\\Colvert' => __DIR__ . '/../..' . '/src/Colvert.php',
        'Acme\\IComportementCancan' => __DIR__ . '/../..' . '/src/IComportementCancan.php',
        'Acme\\IComportementVol' => __DIR__ . '/../..' . '/src/IComportementVol.php',
        'Acme\\MiniSimulateur' => __DIR__ . '/../..' . '/src/MiniSimulateur.php',
        'Acme\\NePasVoler' => __DIR__ . '/../..' . '/src/NePasVoler.php',
        'Acme\\VolerAvecDesAiles' => __DIR__ . '/../..' . '/src/VolerAvecDesAiles.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbc6a04eae61516da926b14bfb6c53411::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbc6a04eae61516da926b14bfb6c53411::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbc6a04eae61516da926b14bfb6c53411::$classMap;

        }, null, ClassLoader::class);
    }
}
