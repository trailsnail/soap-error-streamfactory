<?php

namespace blz;

use blz\Type;
use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\RequestInterface;

class exampleClient extends \Phpro\SoapClient\Client
{

    /**
     * @param RequestInterface|Type\GetBankType $parameters
     * @return ResultInterface|Type\GetBankResponseType
     * @throws SoapException
     */
    public function getBank(\blz\Type\GetBankType $parameters) : \blz\Type\GetBankResponseType
    {
        return $this->call('getBank', $parameters);
    }


}

