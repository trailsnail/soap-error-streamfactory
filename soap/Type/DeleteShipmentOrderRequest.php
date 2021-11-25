<?php

namespace dhl\Type;

use Phpro\SoapClient\Type\RequestInterface;

class DeleteShipmentOrderRequest implements RequestInterface
{

    /**
     * @var \dhl\Type\Version
     */
    private $Version;

    /**
     * @var string
     */
    private $shipmentNumber;

    /**
     * Constructor
     *
     * @var \dhl\Type\Version $Version
     * @var string $shipmentNumber
     */
    public function __construct($Version, $shipmentNumber)
    {
        $this->Version = $Version;
        $this->shipmentNumber = $shipmentNumber;
    }

    /**
     * @return \dhl\Type\Version
     */
    public function getVersion()
    {
        return $this->Version;
    }

    /**
     * @param \dhl\Type\Version $Version
     * @return DeleteShipmentOrderRequest
     */
    public function withVersion($Version)
    {
        $new = clone $this;
        $new->Version = $Version;

        return $new;
    }

    /**
     * @return string
     */
    public function getShipmentNumber()
    {
        return $this->shipmentNumber;
    }

    /**
     * @param string $shipmentNumber
     * @return DeleteShipmentOrderRequest
     */
    public function withShipmentNumber($shipmentNumber)
    {
        $new = clone $this;
        $new->shipmentNumber = $shipmentNumber;

        return $new;
    }


}

