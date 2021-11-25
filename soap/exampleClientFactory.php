<?php

namespace dhl;

use GuzzleHttp\Client;
use Phpro\SoapClient\Soap\Handler\HttPlugHandle;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapEngineFactory;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapOptions;

class exampleClientFactory
{

    const DHL_SOAP_HOST = 'cig.dhl.de';

    const DHL_API_USER = 'ComplexGmbHCoKG';

    const DHL_API_PASSWORD = '!v3cA665bVygcBkD$*';


    public static function factory(string $wsdl) : \dhl\exampleClient
    {
        $httpClient = new Client(['auth' => [self::DHL_API_USER, self::DHL_API_PASSWORD],'verify'          => false,]);

        $handler = HttPlugHandle::createForClient($httpClient);
        $handler->addMiddleware(new DemoMiddleware());
        $engine = ExtSoapEngineFactory::fromOptionsWithHandler(ExtSoapOptions::defaults($wsdl, ['soap_version' => SOAP_1_1])->withClassMap(exampleClassmap::getCollection()), $handler);

        $eventDispatcher = new EventDispatcher();

        return new exampleClient($engine, $eventDispatcher);
    }
}

