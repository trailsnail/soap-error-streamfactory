<?php

namespace blz;

use blz\exampleClient;
use blz\exampleClassmap;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapEngineFactory;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapOptions;

class exampleClientFactory
{

    public static function factory(string $wsdl) : \blz\exampleClient
    {
        $engine = ExtSoapEngineFactory::fromOptions(
            ExtSoapOptions::defaults($wsdl, [])
                ->withClassMap(exampleClassmap::getCollection())
        );
        $eventDispatcher = new EventDispatcher();

        return new exampleClient($engine, $eventDispatcher);
    }


}

