<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd7f1aa03c255546282cea18a2f126af3
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'l' => 
        array (
            'libphonenumber\\' => 15,
        ),
        'Y' => 
        array (
            'YandexTaxi\\Delivery\\' => 20,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
        ),
        'G' => 
        array (
            'Giggsey\\Locale\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'libphonenumber\\' => 
        array (
            0 => __DIR__ . '/..' . '/giggsey/libphonenumber-for-php/src',
        ),
        'YandexTaxi\\Delivery\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Giggsey\\Locale\\' => 
        array (
            0 => __DIR__ . '/..' . '/giggsey/locale/src',
        ),
    );

    public static $classMap = array (
        'Giggsey\\Locale\\Locale' => __DIR__ . '/..' . '/giggsey/locale/src/Locale.php',
        'Symfony\\Polyfill\\Mbstring\\Mbstring' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/Mbstring.php',
        'YandexTaxi\\Delivery\\ClaimLink\\ClaimLink' => __DIR__ . '/../..' . '/src/ClaimLink/ClaimLink.php',
        'YandexTaxi\\Delivery\\ClaimLink\\ClaimLinkMetaHashBuilder' => __DIR__ . '/../..' . '/src/ClaimLink/ClaimLinkMetaHashBuilder.php',
        'YandexTaxi\\Delivery\\ClaimLink\\ClaimLinkRepository' => __DIR__ . '/../..' . '/src/ClaimLink/ClaimLinkRepository.php',
        'YandexTaxi\\Delivery\\Entities\\ClaimItem\\ClaimItem' => __DIR__ . '/../..' . '/src/Entities/ClaimItem/ClaimItem.php',
        'YandexTaxi\\Delivery\\Entities\\ClaimItem\\Money' => __DIR__ . '/../..' . '/src/Entities/ClaimItem/Money.php',
        'YandexTaxi\\Delivery\\Entities\\ClaimItem\\Size' => __DIR__ . '/../..' . '/src/Entities/ClaimItem/Size.php',
        'YandexTaxi\\Delivery\\Entities\\Claim\\AvailableCancelStatus' => __DIR__ . '/../..' . '/src/Entities/Claim/AvailableCancelStatus.php',
        'YandexTaxi\\Delivery\\Entities\\Claim\\Claim' => __DIR__ . '/../..' . '/src/Entities/Claim/Claim.php',
        'YandexTaxi\\Delivery\\Entities\\Claim\\Driver' => __DIR__ . '/../..' . '/src/Entities/Claim/Driver.php',
        'YandexTaxi\\Delivery\\Entities\\Claim\\Status' => __DIR__ . '/../..' . '/src/Entities/Claim/Status.php',
        'YandexTaxi\\Delivery\\Entities\\Claim\\Tariff' => __DIR__ . '/../..' . '/src/Entities/Claim/Tariff.php',
        'YandexTaxi\\Delivery\\Entities\\Enum' => __DIR__ . '/../..' . '/src/Entities/Enum.php',
        'YandexTaxi\\Delivery\\Entities\\ExtensibleEnum' => __DIR__ . '/../..' . '/src/Entities/ExtensibleEnum.php',
        'YandexTaxi\\Delivery\\Entities\\Journal\\Cursor' => __DIR__ . '/../..' . '/src/Entities/Journal/Cursor.php',
        'YandexTaxi\\Delivery\\Entities\\Journal\\Event' => __DIR__ . '/../..' . '/src/Entities/Journal/Event.php',
        'YandexTaxi\\Delivery\\Entities\\Journal\\Journal' => __DIR__ . '/../..' . '/src/Entities/Journal/Journal.php',
        'YandexTaxi\\Delivery\\Entities\\Order\\Order' => __DIR__ . '/../..' . '/src/Entities/Order/Order.php',
        'YandexTaxi\\Delivery\\Entities\\RoutePoint\\Address' => __DIR__ . '/../..' . '/src/Entities/RoutePoint/Address.php',
        'YandexTaxi\\Delivery\\Entities\\RoutePoint\\Contact' => __DIR__ . '/../..' . '/src/Entities/RoutePoint/Contact.php',
        'YandexTaxi\\Delivery\\Entities\\RoutePoint\\RoutePoint' => __DIR__ . '/../..' . '/src/Entities/RoutePoint/RoutePoint.php',
        'YandexTaxi\\Delivery\\Entities\\RoutePoint\\RoutePointVisitStatus' => __DIR__ . '/../..' . '/src/Entities/RoutePoint/RoutePointVisitStatus.php',
        'YandexTaxi\\Delivery\\Exceptions\\ClaimNotFoundException' => __DIR__ . '/../..' . '/src/Exceptions/ClaimNotFoundException.php',
        'YandexTaxi\\Delivery\\Exceptions\\ValidationError' => __DIR__ . '/../..' . '/src/Exceptions/ValidationError.php',
        'YandexTaxi\\Delivery\\GeoCoding\\Exceptions\\GeoCodingException' => __DIR__ . '/../..' . '/src/GeoCoding/Exceptions/GeoCodingException.php',
        'YandexTaxi\\Delivery\\GeoCoding\\GeoCoderInterface' => __DIR__ . '/../..' . '/src/GeoCoding/GeoCoderInterface.php',
        'YandexTaxi\\Delivery\\GeoCoding\\Point' => __DIR__ . '/../..' . '/src/GeoCoding/Point.php',
        'YandexTaxi\\Delivery\\GeoCoding\\YandexMaps\\YandexGeoCoder' => __DIR__ . '/../..' . '/src/GeoCoding/YandexMaps/YandexGeoCoder.php',
        'YandexTaxi\\Delivery\\PhoneNumber\\Formatter' => __DIR__ . '/../..' . '/src/PhoneNumber/Formatter.php',
        'YandexTaxi\\Delivery\\Services\\ClaimService' => __DIR__ . '/../..' . '/src/Services/ClaimService.php',
        'YandexTaxi\\Delivery\\Services\\DriverService' => __DIR__ . '/../..' . '/src/Services/DriverService.php',
        'YandexTaxi\\Delivery\\Services\\EventService' => __DIR__ . '/../..' . '/src/Services/EventService.php',
        'YandexTaxi\\Delivery\\YandexApi\\Client' => __DIR__ . '/../..' . '/src/YandexApi/Client.php',
        'YandexTaxi\\Delivery\\YandexApi\\Exceptions\\ClaimNotEstimated' => __DIR__ . '/../..' . '/src/YandexApi/Exceptions/ClaimNotEstimated.php',
        'YandexTaxi\\Delivery\\YandexApi\\Exceptions\\InvalidCursor' => __DIR__ . '/../..' . '/src/YandexApi/Exceptions/InvalidCursor.php',
        'YandexTaxi\\Delivery\\YandexApi\\Exceptions\\YandexApiException' => __DIR__ . '/../..' . '/src/YandexApi/Exceptions/YandexApiException.php',
        'YandexTaxi\\Delivery\\YandexApi\\Repositories\\CursorRepository' => __DIR__ . '/../..' . '/src/YandexApi/Repositories/CursorRepository.php',
        'YandexTaxi\\Delivery\\YandexApi\\Resources\\Claims' => __DIR__ . '/../..' . '/src/YandexApi/Resources/Claims.php',
        'YandexTaxi\\Delivery\\YandexApi\\Resources\\Journal' => __DIR__ . '/../..' . '/src/YandexApi/Resources/Journal.php',
        'YandexTaxi\\Delivery\\YandexApi\\Resources\\Resource' => __DIR__ . '/../..' . '/src/YandexApi/Resources/Resource.php',
        'YandexTaxi\\Delivery\\YandexApi\\Resources\\Tariffs' => __DIR__ . '/../..' . '/src/YandexApi/Resources/Tariffs.php',
        'libphonenumber\\AlternateFormatsCountryCodeSet' => __DIR__ . '/..' . '/giggsey/libphonenumber-for-php/src/AlternateFormatsCountryCodeSet.php',
        'libphonenumber\\AsYouTypeFormatter' => __DIR__ . '/..' . '/giggsey/libphonenumber-for-php/src/AsYouTypeFormatter.php',
        'libphonenumber\\CountryCodeSource' => __DIR__ . '/..' . '/giggsey/libphonenumber-for-php/src/CountryCodeSource.php',
        'libphonenumber\\CountryCodeToRegionCodeMap' => __DIR__ . '/..' . '/giggsey/libphonenumber-for-php/src/CountryCodeToRegionCodeMap.php',
        'libphonenumber\\CountryCodeToRegionCodeMapForTesting' => __DIR__ . '/..' . '/giggsey/libphonenumber-for-php/src/CountryCodeToRegionCodeMapForTesting.php',
        'libphonenumber\\DefaultMetadataLoader' => __DIR__ . '/..' . '/giggsey/libphonenumber-for-php/src/DefaultMetadataLoader.php',
        'libphonenumber\\Leniency' => __DIR__ . '/..' . '/giggsey/libphonenumber-for-php/src/Leniency.php',
        'libphonenumber\\Leniency\\AbstractLeniency' => __DIR__ . '/..' . '/giggsey/libphonenumber-for-php/src/Leniency/AbstractLeniency.php',
        'libphonenumber\\Leniency\\ExactGrouping' => __DIR__ . '/..' . '/giggsey/libphonenumber-for-php/src/Leniency/ExactGrouping.php',
        'libphonenumber\\Leniency\\Possible' => __DIR__ . '/..' . '/giggsey/libphonenumber-for-php/src/Leniency/Possible.php',
        'libphonenumber\\Leniency\\StrictGrouping' => __DIR__ . '/..' . '/giggsey/libphonenumber-for-php/src/Leniency/StrictGrouping.php',
        'libphonenumber\\Leniency\\Valid' => __DIR__ . '/..' . '/giggsey/libphonenumber-for-php/src/Leniency/Valid.php',
        'libphonenumber\\MatchType' => __DIR__ . '/..' . '/giggsey/libphonenumber-for-php/src/MatchType.php',
        'libphonenumber\\Matcher' => __DIR__ . '/..' . '/giggsey/libphonenumber-for-php/src/Matcher.php',
        'libphonenumber\\MatcherAPIInterface' => __DIR__ . '/..' . '/giggsey/libphonenumber-for-php/src/MatcherAPIInterface.php',
        'libphonenumber\\MetadataLoaderInterface' => __DIR__ . '/..' . '/giggsey/libphonenumber-for-php/src/MetadataLoaderInterface.php',
        'libphonenumber\\MetadataSourceInterface' => __DIR__ . '/..' . '/giggsey/libphonenumber-for-php/src/MetadataSourceInterface.php',
        'libphonenumber\\MultiFileMetadataSourceImpl' => __DIR__ . '/..' . '/giggsey/libphonenumber-for-php/src/MultiFileMetadataSourceImpl.php',
        'libphonenumber\\NumberFormat' => __DIR__ . '/..' . '/giggsey/libphonenumber-for-php/src/NumberFormat.php',
        'libphonenumber\\NumberParseException' => __DIR__ . '/..' . '/giggsey/libphonenumber-for-php/src/NumberParseException.php',
        'libphonenumber\\PhoneMetadata' => __DIR__ . '/..' . '/giggsey/libphonenumber-for-php/src/PhoneMetadata.php',
        'libphonenumber\\PhoneNumber' => __DIR__ . '/..' . '/giggsey/libphonenumber-for-php/src/PhoneNumber.php',
        'libphonenumber\\PhoneNumberDesc' => __DIR__ . '/..' . '/giggsey/libphonenumber-for-php/src/PhoneNumberDesc.php',
        'libphonenumber\\PhoneNumberFormat' => __DIR__ . '/..' . '/giggsey/libphonenumber-for-php/src/PhoneNumberFormat.php',
        'libphonenumber\\PhoneNumberMatch' => __DIR__ . '/..' . '/giggsey/libphonenumber-for-php/src/PhoneNumberMatch.php',
        'libphonenumber\\PhoneNumberMatcher' => __DIR__ . '/..' . '/giggsey/libphonenumber-for-php/src/PhoneNumberMatcher.php',
        'libphonenumber\\PhoneNumberToCarrierMapper' => __DIR__ . '/..' . '/giggsey/libphonenumber-for-php/src/PhoneNumberToCarrierMapper.php',
        'libphonenumber\\PhoneNumberToTimeZonesMapper' => __DIR__ . '/..' . '/giggsey/libphonenumber-for-php/src/PhoneNumberToTimeZonesMapper.php',
        'libphonenumber\\PhoneNumberType' => __DIR__ . '/..' . '/giggsey/libphonenumber-for-php/src/PhoneNumberType.php',
        'libphonenumber\\PhoneNumberUtil' => __DIR__ . '/..' . '/giggsey/libphonenumber-for-php/src/PhoneNumberUtil.php',
        'libphonenumber\\RegexBasedMatcher' => __DIR__ . '/..' . '/giggsey/libphonenumber-for-php/src/RegexBasedMatcher.php',
        'libphonenumber\\RegionCode' => __DIR__ . '/..' . '/giggsey/libphonenumber-for-php/src/RegionCode.php',
        'libphonenumber\\ShortNumberCost' => __DIR__ . '/..' . '/giggsey/libphonenumber-for-php/src/ShortNumberCost.php',
        'libphonenumber\\ShortNumberInfo' => __DIR__ . '/..' . '/giggsey/libphonenumber-for-php/src/ShortNumberInfo.php',
        'libphonenumber\\ShortNumbersRegionCodeSet' => __DIR__ . '/..' . '/giggsey/libphonenumber-for-php/src/ShortNumbersRegionCodeSet.php',
        'libphonenumber\\ValidationResult' => __DIR__ . '/..' . '/giggsey/libphonenumber-for-php/src/ValidationResult.php',
        'libphonenumber\\geocoding\\PhoneNumberOfflineGeocoder' => __DIR__ . '/..' . '/giggsey/libphonenumber-for-php/src/geocoding/PhoneNumberOfflineGeocoder.php',
        'libphonenumber\\prefixmapper\\MappingFileProvider' => __DIR__ . '/..' . '/giggsey/libphonenumber-for-php/src/prefixmapper/MappingFileProvider.php',
        'libphonenumber\\prefixmapper\\PhonePrefixMap' => __DIR__ . '/..' . '/giggsey/libphonenumber-for-php/src/prefixmapper/PhonePrefixMap.php',
        'libphonenumber\\prefixmapper\\PrefixFileReader' => __DIR__ . '/..' . '/giggsey/libphonenumber-for-php/src/prefixmapper/PrefixFileReader.php',
        'libphonenumber\\prefixmapper\\PrefixTimeZonesMap' => __DIR__ . '/..' . '/giggsey/libphonenumber-for-php/src/prefixmapper/PrefixTimeZonesMap.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd7f1aa03c255546282cea18a2f126af3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd7f1aa03c255546282cea18a2f126af3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd7f1aa03c255546282cea18a2f126af3::$classMap;

        }, null, ClassLoader::class);
    }
}
