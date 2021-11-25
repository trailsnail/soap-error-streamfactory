<?php

namespace dhl\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ValidateShipmentOrderRequest implements RequestInterface
{

    /**
     * @var \dhl\Type\Version
     */
    private $Version;

    /**
     * @var \dhl\Type\ValidateShipmentOrderType
     */
    private $ShipmentOrder;

    /**
     * Constructor
     *
     * @var \dhl\Type\Version $Version
     * @var \dhl\Type\ValidateShipmentOrderType $ShipmentOrder
     */
    public function __construct($Version, $ShipmentOrder)
    {
        $this->Version = $Version;
        $this->ShipmentOrder = $ShipmentOrder;
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
     * @return ValidateShipmentOrderRequest
     */
    public function withVersion($Version)
    {
        $new = clone $this;
        $new->Version = $Version;

        return $new;
    }

    /**
     * @return \dhl\Type\ValidateShipmentOrderType
     */
    public function getShipmentOrder()
    {
        return $this->ShipmentOrder;
    }

    /**
     * @param \dhl\Type\ValidateShipmentOrderType $ShipmentOrder
     * @return ValidateShipmentOrderRequest
     */
    public function withShipmentOrder($ShipmentOrder)
    {
        $new = clone $this;
        $new->ShipmentOrder = $ShipmentOrder;

        return $new;
    }


}

