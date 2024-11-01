<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'Giggsey\\Locale\\Locale' => $vendorDir . '/giggsey/locale/src/Locale.php',
    'Symfony\\Polyfill\\Mbstring\\Mbstring' => $vendorDir . '/symfony/polyfill-mbstring/Mbstring.php',
    'YandexTaxi\\Delivery\\ClaimLink\\ClaimLink' => $baseDir . '/src/ClaimLink/ClaimLink.php',
    'YandexTaxi\\Delivery\\ClaimLink\\ClaimLinkMetaHashBuilder' => $baseDir . '/src/ClaimLink/ClaimLinkMetaHashBuilder.php',
    'YandexTaxi\\Delivery\\ClaimLink\\ClaimLinkRepository' => $baseDir . '/src/ClaimLink/ClaimLinkRepository.php',
    'YandexTaxi\\Delivery\\Entities\\ClaimItem\\ClaimItem' => $baseDir . '/src/Entities/ClaimItem/ClaimItem.php',
    'YandexTaxi\\Delivery\\Entities\\ClaimItem\\Money' => $baseDir . '/src/Entities/ClaimItem/Money.php',
    'YandexTaxi\\Delivery\\Entities\\ClaimItem\\Size' => $baseDir . '/src/Entities/ClaimItem/Size.php',
    'YandexTaxi\\Delivery\\Entities\\Claim\\AvailableCancelStatus' => $baseDir . '/src/Entities/Claim/AvailableCancelStatus.php',
    'YandexTaxi\\Delivery\\Entities\\Claim\\Claim' => $baseDir . '/src/Entities/Claim/Claim.php',
    'YandexTaxi\\Delivery\\Entities\\Claim\\Driver' => $baseDir . '/src/Entities/Claim/Driver.php',
    'YandexTaxi\\Delivery\\Entities\\Claim\\Status' => $baseDir . '/src/Entities/Claim/Status.php',
    'YandexTaxi\\Delivery\\Entities\\Claim\\Tariff' => $baseDir . '/src/Entities/Claim/Tariff.php',
    'YandexTaxi\\Delivery\\Entities\\Enum' => $baseDir . '/src/Entities/Enum.php',
    'YandexTaxi\\Delivery\\Entities\\ExtensibleEnum' => $baseDir . '/src/Entities/ExtensibleEnum.php',
    'YandexTaxi\\Delivery\\Entities\\Journal\\Cursor' => $baseDir . '/src/Entities/Journal/Cursor.php',
    'YandexTaxi\\Delivery\\Entities\\Journal\\Event' => $baseDir . '/src/Entities/Journal/Event.php',
    'YandexTaxi\\Delivery\\Entities\\Journal\\Journal' => $baseDir . '/src/Entities/Journal/Journal.php',
    'YandexTaxi\\Delivery\\Entities\\Order\\Order' => $baseDir . '/src/Entities/Order/Order.php',
    'YandexTaxi\\Delivery\\Entities\\RoutePoint\\Address' => $baseDir . '/src/Entities/RoutePoint/Address.php',
    'YandexTaxi\\Delivery\\Entities\\RoutePoint\\Contact' => $baseDir . '/src/Entities/RoutePoint/Contact.php',
    'YandexTaxi\\Delivery\\Entities\\RoutePoint\\RoutePoint' => $baseDir . '/src/Entities/RoutePoint/RoutePoint.php',
    'YandexTaxi\\Delivery\\Entities\\RoutePoint\\RoutePointVisitStatus' => $baseDir . '/src/Entities/RoutePoint/RoutePointVisitStatus.php',
    'YandexTaxi\\Delivery\\Exceptions\\ClaimNotFoundException' => $baseDir . '/src/Exceptions/ClaimNotFoundException.php',
    'YandexTaxi\\Delivery\\Exceptions\\ValidationError' => $baseDir . '/src/Exceptions/ValidationError.php',
    'YandexTaxi\\Delivery\\GeoCoding\\Exceptions\\GeoCodingException' => $baseDir . '/src/GeoCoding/Exceptions/GeoCodingException.php',
    'YandexTaxi\\Delivery\\GeoCoding\\GeoCoderInterface' => $baseDir . '/src/GeoCoding/GeoCoderInterface.php',
    'YandexTaxi\\Delivery\\GeoCoding\\Point' => $baseDir . '/src/GeoCoding/Point.php',
    'YandexTaxi\\Delivery\\GeoCoding\\YandexMaps\\YandexGeoCoder' => $baseDir . '/src/GeoCoding/YandexMaps/YandexGeoCoder.php',
    'YandexTaxi\\Delivery\\PhoneNumber\\Formatter' => $baseDir . '/src/PhoneNumber/Formatter.php',
    'YandexTaxi\\Delivery\\Services\\ClaimService' => $baseDir . '/src/Services/ClaimService.php',
    'YandexTaxi\\Delivery\\Services\\DriverService' => $baseDir . '/src/Services/DriverService.php',
    'YandexTaxi\\Delivery\\Services\\EventService' => $baseDir . '/src/Services/EventService.php',
    'YandexTaxi\\Delivery\\YandexApi\\Client' => $baseDir . '/src/YandexApi/Client.php',
    'YandexTaxi\\Delivery\\YandexApi\\Exceptions\\ClaimNotEstimated' => $baseDir . '/src/YandexApi/Exceptions/ClaimNotEstimated.php',
    'YandexTaxi\\Delivery\\YandexApi\\Exceptions\\InvalidCursor' => $baseDir . '/src/YandexApi/Exceptions/InvalidCursor.php',
    'YandexTaxi\\Delivery\\YandexApi\\Exceptions\\YandexApiException' => $baseDir . '/src/YandexApi/Exceptions/YandexApiException.php',
    'YandexTaxi\\Delivery\\YandexApi\\Repositories\\CursorRepository' => $baseDir . '/src/YandexApi/Repositories/CursorRepository.php',
    'YandexTaxi\\Delivery\\YandexApi\\Resources\\Claims' => $baseDir . '/src/YandexApi/Resources/Claims.php',
    'YandexTaxi\\Delivery\\YandexApi\\Resources\\Journal' => $baseDir . '/src/YandexApi/Resources/Journal.php',
    'YandexTaxi\\Delivery\\YandexApi\\Resources\\Resource' => $baseDir . '/src/YandexApi/Resources/Resource.php',
    'YandexTaxi\\Delivery\\YandexApi\\Resources\\Tariffs' => $baseDir . '/src/YandexApi/Resources/Tariffs.php',
    'libphonenumber\\AlternateFormatsCountryCodeSet' => $vendorDir . '/giggsey/libphonenumber-for-php/src/AlternateFormatsCountryCodeSet.php',
    'libphonenumber\\AsYouTypeFormatter' => $vendorDir . '/giggsey/libphonenumber-for-php/src/AsYouTypeFormatter.php',
    'libphonenumber\\CountryCodeSource' => $vendorDir . '/giggsey/libphonenumber-for-php/src/CountryCodeSource.php',
    'libphonenumber\\CountryCodeToRegionCodeMap' => $vendorDir . '/giggsey/libphonenumber-for-php/src/CountryCodeToRegionCodeMap.php',
    'libphonenumber\\CountryCodeToRegionCodeMapForTesting' => $vendorDir . '/giggsey/libphonenumber-for-php/src/CountryCodeToRegionCodeMapForTesting.php',
    'libphonenumber\\DefaultMetadataLoader' => $vendorDir . '/giggsey/libphonenumber-for-php/src/DefaultMetadataLoader.php',
    'libphonenumber\\Leniency' => $vendorDir . '/giggsey/libphonenumber-for-php/src/Leniency.php',
    'libphonenumber\\Leniency\\AbstractLeniency' => $vendorDir . '/giggsey/libphonenumber-for-php/src/Leniency/AbstractLeniency.php',
    'libphonenumber\\Leniency\\ExactGrouping' => $vendorDir . '/giggsey/libphonenumber-for-php/src/Leniency/ExactGrouping.php',
    'libphonenumber\\Leniency\\Possible' => $vendorDir . '/giggsey/libphonenumber-for-php/src/Leniency/Possible.php',
    'libphonenumber\\Leniency\\StrictGrouping' => $vendorDir . '/giggsey/libphonenumber-for-php/src/Leniency/StrictGrouping.php',
    'libphonenumber\\Leniency\\Valid' => $vendorDir . '/giggsey/libphonenumber-for-php/src/Leniency/Valid.php',
    'libphonenumber\\MatchType' => $vendorDir . '/giggsey/libphonenumber-for-php/src/MatchType.php',
    'libphonenumber\\Matcher' => $vendorDir . '/giggsey/libphonenumber-for-php/src/Matcher.php',
    'libphonenumber\\MatcherAPIInterface' => $vendorDir . '/giggsey/libphonenumber-for-php/src/MatcherAPIInterface.php',
    'libphonenumber\\MetadataLoaderInterface' => $vendorDir . '/giggsey/libphonenumber-for-php/src/MetadataLoaderInterface.php',
    'libphonenumber\\MetadataSourceInterface' => $vendorDir . '/giggsey/libphonenumber-for-php/src/MetadataSourceInterface.php',
    'libphonenumber\\MultiFileMetadataSourceImpl' => $vendorDir . '/giggsey/libphonenumber-for-php/src/MultiFileMetadataSourceImpl.php',
    'libphonenumber\\NumberFormat' => $vendorDir . '/giggsey/libphonenumber-for-php/src/NumberFormat.php',
    'libphonenumber\\NumberParseException' => $vendorDir . '/giggsey/libphonenumber-for-php/src/NumberParseException.php',
    'libphonenumber\\PhoneMetadata' => $vendorDir . '/giggsey/libphonenumber-for-php/src/PhoneMetadata.php',
    'libphonenumber\\PhoneNumber' => $vendorDir . '/giggsey/libphonenumber-for-php/src/PhoneNumber.php',
    'libphonenumber\\PhoneNumberDesc' => $vendorDir . '/giggsey/libphonenumber-for-php/src/PhoneNumberDesc.php',
    'libphonenumber\\PhoneNumberFormat' => $vendorDir . '/giggsey/libphonenumber-for-php/src/PhoneNumberFormat.php',
    'libphonenumber\\PhoneNumberMatch' => $vendorDir . '/giggsey/libphonenumber-for-php/src/PhoneNumberMatch.php',
    'libphonenumber\\PhoneNumberMatcher' => $vendorDir . '/giggsey/libphonenumber-for-php/src/PhoneNumberMatcher.php',
    'libphonenumber\\PhoneNumberToCarrierMapper' => $vendorDir . '/giggsey/libphonenumber-for-php/src/PhoneNumberToCarrierMapper.php',
    'libphonenumber\\PhoneNumberToTimeZonesMapper' => $vendorDir . '/giggsey/libphonenumber-for-php/src/PhoneNumberToTimeZonesMapper.php',
    'libphonenumber\\PhoneNumberType' => $vendorDir . '/giggsey/libphonenumber-for-php/src/PhoneNumberType.php',
    'libphonenumber\\PhoneNumberUtil' => $vendorDir . '/giggsey/libphonenumber-for-php/src/PhoneNumberUtil.php',
    'libphonenumber\\RegexBasedMatcher' => $vendorDir . '/giggsey/libphonenumber-for-php/src/RegexBasedMatcher.php',
    'libphonenumber\\RegionCode' => $vendorDir . '/giggsey/libphonenumber-for-php/src/RegionCode.php',
    'libphonenumber\\ShortNumberCost' => $vendorDir . '/giggsey/libphonenumber-for-php/src/ShortNumberCost.php',
    'libphonenumber\\ShortNumberInfo' => $vendorDir . '/giggsey/libphonenumber-for-php/src/ShortNumberInfo.php',
    'libphonenumber\\ShortNumbersRegionCodeSet' => $vendorDir . '/giggsey/libphonenumber-for-php/src/ShortNumbersRegionCodeSet.php',
    'libphonenumber\\ValidationResult' => $vendorDir . '/giggsey/libphonenumber-for-php/src/ValidationResult.php',
    'libphonenumber\\geocoding\\PhoneNumberOfflineGeocoder' => $vendorDir . '/giggsey/libphonenumber-for-php/src/geocoding/PhoneNumberOfflineGeocoder.php',
    'libphonenumber\\prefixmapper\\MappingFileProvider' => $vendorDir . '/giggsey/libphonenumber-for-php/src/prefixmapper/MappingFileProvider.php',
    'libphonenumber\\prefixmapper\\PhonePrefixMap' => $vendorDir . '/giggsey/libphonenumber-for-php/src/prefixmapper/PhonePrefixMap.php',
    'libphonenumber\\prefixmapper\\PrefixFileReader' => $vendorDir . '/giggsey/libphonenumber-for-php/src/prefixmapper/PrefixFileReader.php',
    'libphonenumber\\prefixmapper\\PrefixTimeZonesMap' => $vendorDir . '/giggsey/libphonenumber-for-php/src/prefixmapper/PrefixTimeZonesMap.php',
);
