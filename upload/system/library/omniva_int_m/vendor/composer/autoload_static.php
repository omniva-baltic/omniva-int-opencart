<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4cffc27d0ce675b76bf4be2147d1ecc6
{
    public static $prefixLengthsPsr4 = array (
        'O' => 
        array (
            'OmnivaApi\\' => 10,
        ),
        'M' => 
        array (
            'Mijora\\OmnivaIntOpencart\\' => 25,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'OmnivaApi\\' => 
        array (
            0 => __DIR__ . '/..' . '/omniva/api-lib/src',
        ),
        'Mijora\\OmnivaIntOpencart\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Mijora\\OmnivaIntOpencart\\Controller\\ManifestCtrl' => __DIR__ . '/../..' . '/src/Controller/ManifestCtrl.php',
        'Mijora\\OmnivaIntOpencart\\Controller\\OfferApi' => __DIR__ . '/../..' . '/src/Controller/OfferApi.php',
        'Mijora\\OmnivaIntOpencart\\Controller\\ParcelCtrl' => __DIR__ . '/../..' . '/src/Controller/ParcelCtrl.php',
        'Mijora\\OmnivaIntOpencart\\Helper' => __DIR__ . '/../..' . '/src/Helper.php',
        'Mijora\\OmnivaIntOpencart\\Model\\Country' => __DIR__ . '/../..' . '/src/Model/Country.php',
        'Mijora\\OmnivaIntOpencart\\Model\\Offer' => __DIR__ . '/../..' . '/src/Model/Offer.php',
        'Mijora\\OmnivaIntOpencart\\Model\\ParcelDefault' => __DIR__ . '/../..' . '/src/Model/ParcelDefault.php',
        'Mijora\\OmnivaIntOpencart\\Model\\Service' => __DIR__ . '/../..' . '/src/Model/Service.php',
        'Mijora\\OmnivaIntOpencart\\Model\\ShippingOption' => __DIR__ . '/../..' . '/src/Model/ShippingOption.php',
        'Mijora\\OmnivaIntOpencart\\Model\\ShippingOptionCountry' => __DIR__ . '/../..' . '/src/Model/ShippingOptionCountry.php',
        'Mijora\\OmnivaIntOpencart\\Params' => __DIR__ . '/../..' . '/src/Params.php',
        'OmnivaApi\\API' => __DIR__ . '/..' . '/omniva/api-lib/src/API.php',
        'OmnivaApi\\Exception\\OmnivaApiException' => __DIR__ . '/..' . '/omniva/api-lib/src/Exception/OmnivaApiException.php',
        'OmnivaApi\\Exception\\ValidationException' => __DIR__ . '/..' . '/omniva/api-lib/src/Exception/ValidationException.php',
        'OmnivaApi\\Item' => __DIR__ . '/..' . '/omniva/api-lib/src/Item.php',
        'OmnivaApi\\Order' => __DIR__ . '/..' . '/omniva/api-lib/src/Order.php',
        'OmnivaApi\\Parcel' => __DIR__ . '/..' . '/omniva/api-lib/src/Parcel.php',
        'OmnivaApi\\Person' => __DIR__ . '/..' . '/omniva/api-lib/src/Person.php',
        'OmnivaApi\\Receiver' => __DIR__ . '/..' . '/omniva/api-lib/src/Receiver.php',
        'OmnivaApi\\Sender' => __DIR__ . '/..' . '/omniva/api-lib/src/Sender.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4cffc27d0ce675b76bf4be2147d1ecc6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4cffc27d0ce675b76bf4be2147d1ecc6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4cffc27d0ce675b76bf4be2147d1ecc6::$classMap;

        }, null, ClassLoader::class);
    }
}
