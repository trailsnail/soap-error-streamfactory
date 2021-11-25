<?php

namespace dhl;

use dhl\Type;
use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\RequestInterface;

class exampleClient extends \Phpro\SoapClient\Client
{

    /**
     * @param RequestInterface|Type\CreateShipmentOrderRequest $part1
     * @return ResultInterface|Type\CreateShipmentOrderResponse
     * @throws SoapException
     */
    public function createShipmentOrder(\dhl\Type\CreateShipmentOrderRequest $part1) : \dhl\Type\CreateShipmentOrderResponse
    {
        return $this->call('createShipmentOrder', $part1);
    }

    /**
     * @param RequestInterface|Type\ValidateShipmentOrderRequest $part1
     * @return ResultInterface|Type\ValidateShipmentResponse
     * @throws SoapException
     */
    public function validateShipment(\dhl\Type\ValidateShipmentOrderRequest $part1) : \dhl\Type\ValidateShipmentResponse
    {
        return $this->call('validateShipment', $part1);
    }

    /**
     * @param RequestInterface|Type\DeleteShipmentOrderRequest $part1
     * @return ResultInterface|Type\DeleteShipmentOrderResponse
     * @throws SoapException
     */
    public function deleteShipmentOrder(\dhl\Type\DeleteShipmentOrderRequest $part1) : \dhl\Type\DeleteShipmentOrderResponse
    {
        return $this->call('deleteShipmentOrder', $part1);
    }

    /**
     * @param RequestInterface|Type\DoManifestRequest $part1
     * @return ResultInterface|Type\DoManifestResponse
     * @throws SoapException
     */
    public function doManifest(\dhl\Type\DoManifestRequest $part1) : \dhl\Type\DoManifestResponse
    {
        return $this->call('doManifest', $part1);
    }

    /**
     * @param RequestInterface|Type\GetLabelRequest $part1
     * @return ResultInterface|Type\GetLabelResponse
     * @throws SoapException
     */
    public function getLabel(\dhl\Type\GetLabelRequest $part1) : \dhl\Type\GetLabelResponse
    {
        return $this->call('getLabel', $part1);
    }

    /**
     * @param RequestInterface|Type\Version $part1
     * @return ResultInterface|Type\GetVersionResponse
     * @throws SoapException
     */
    public function getVersion(\dhl\Type\Version $part1) : \dhl\Type\GetVersionResponse
    {
        return $this->call('getVersion', $part1);
    }

    /**
     * @param RequestInterface|Type\GetExportDocRequest $part1
     * @return ResultInterface|Type\GetExportDocResponse
     * @throws SoapException
     */
    public function getExportDoc(\dhl\Type\GetExportDocRequest $part1) : \dhl\Type\GetExportDocResponse
    {
        return $this->call('getExportDoc', $part1);
    }

    /**
     * @param RequestInterface|Type\GetManifestRequest $part1
     * @return ResultInterface|Type\GetManifestResponse
     * @throws SoapException
     */
    public function getManifest(\dhl\Type\GetManifestRequest $part1) : \dhl\Type\GetManifestResponse
    {
        return $this->call('getManifest', $part1);
    }

    /**
     * @param RequestInterface|Type\UpdateShipmentOrderRequest $part1
     * @return ResultInterface|Type\UpdateShipmentOrderResponse
     * @throws SoapException
     */
    public function updateShipmentOrder(\dhl\Type\UpdateShipmentOrderRequest $part1) : \dhl\Type\UpdateShipmentOrderResponse
    {
        return $this->call('updateShipmentOrder', $part1);
    }


}

