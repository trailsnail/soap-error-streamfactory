<?php

require_once 'vendor/autoload.php';

use Symfony\Component\EventDispatcher\EventDispatcher;

$exampelClient = \blz\exampleClientFactory::factory('http://www.thomas-bayer.com/axis2/services/BLZService?wsdl');

$result = $exampelClient->getBank(new \blz\Type\GetBankType('79550000'));

dump($result);
