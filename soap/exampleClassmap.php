<?php

namespace blz;

use blz\Type;
use Phpro\SoapClient\Soap\ClassMap\ClassMapCollection;
use Phpro\SoapClient\Soap\ClassMap\ClassMap;

class exampleClassmap
{

    public static function getCollection() : \Phpro\SoapClient\Soap\ClassMap\ClassMapCollection
    {
        return new ClassMapCollection([
            new ClassMap('getBankType', Type\GetBankType::class),
            new ClassMap('getBankResponseType', Type\GetBankResponseType::class),
            new ClassMap('detailsType', Type\DetailsType::class),
        ]);
    }


}

