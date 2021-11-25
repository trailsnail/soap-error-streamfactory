<?php

require_once 'vendor/autoload.php';

use \dhl\Type\CommunicationType;
use \dhl\Type\CountryType;
use \dhl\Type\NameType;
use \dhl\Type\NativeAddressTypeNew;
use \dhl\Type\Shipment;
use \dhl\Type\ShipmentDetailsTypeType;
use \dhl\Type\ShipmentItemType;
use \dhl\Type\ShipmentNotificationType;
use \dhl\Type\ShipperTypeType;
use \dhl\Type\Serviceconfiguration;
use \dhl\Type\ShipmentOrderType;
use \dhl\Type\CreateShipmentOrderRequest;


$exampleClient = \dhl\exampleClientFactory::factory('https://cig.dhl.de/cig-wsdls/com/dpdhl/wsdl/geschaeftskundenversand-api/3.1.2/geschaeftskundenversand-api-3.1.2.wsdl');

$receiver = (new \dhl\Type\ReceiverTypeType())
    ->withName1('Example')
    ->withAddress((new \dhl\Type\ReceiverNativeAddressType())
        ->withName2('Chilli')
        ->withName3('burns')
        ->withStreetName('Demostreet')
        ->withStreetNumber('42')
        ->withZip('63741')
        ->withCity('Aschaffenburg')
        ->withOrigin((new \dhl\Type\CountryType())
            ->withCountryISOCode('DE')
        )
    )
    ->withCommunication((new \dhl\Type\CommunicationType())
        ->withPhone('+49123456789')
        ->withEmail('example@test.de')
        ->withContactPerson('')
    );

$shipment = (new Shipment())
    ->withShipmentDetails((new ShipmentDetailsTypeType())
        ->withProduct('V01PAK')
        ->withAccountNumber('22222222220104')
        ->withCustomerReference('Test1234')
        ->withShipmentDate(date('Y-m-d'))
        ->withNotification((new ShipmentNotificationType())
            ->withRecipientEmailAddress('example@test.de')
        )
        ->withShipmentItem((new ShipmentItemType())
            ->withWeightInKG('0.5')
        )
    )
    ->withShipper((new ShipperTypeType())
        ->withName((new NameType())
            ->withName1('Confused Developer')
            ->withName2('in da house')
            ->withName3('Mo - Fr')
        )
        ->withAddress((new \dhl\Type\NativeAddressType())
            ->withStreetName('Lange Str.')
            ->withStreetNumber('19')
            ->withZip('63741')
            ->withCity('Aschaffenburg')->withOrigin((new CountryType())->withCountryISOCode('DE'))
        )
        ->withCommunication((new CommunicationType())
            ->withPhone('')
            ->withEmail('')
            ->withContactPerson('')
        )
    )
    ->withReceiver($receiver);

$ShipmentOrder = (new ShipmentOrderType())
    ->withShipment($shipment)
    ->withPrintOnlyIfCodeable((new Serviceconfiguration())
        ->withActive('1')
    );


$createShipmentOrderRequest = new CreateShipmentOrderRequest(
    new \dhl\Type\Version('3', '1', '1'),
    $ShipmentOrder,
    'B64',
    '',
    '910-300-400',
    '910-300-400',
    0);

try {
    $exampleClient->createShipmentOrder($createShipmentOrderRequest);

    echo "this should never happen\n";

} catch( \Phpro\SoapClient\Exception\SoapException $exception ) {

    if ($exception->getMessage() == 'looks like we got no XML document') {
        echo "works like expected!\n";
    } else {
        echo "unable to process request!\n";
    }
}

