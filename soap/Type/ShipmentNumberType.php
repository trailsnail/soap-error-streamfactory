<?php

namespace dhl\Type;

class ShipmentNumberType
{

    /**
     * @var string
     */
    private $shipmentNumber;

    /**
     * @return string
     */
    public function getShipmentNumber()
    {
        return $this->shipmentNumber;
    }

    /**
     * @param string $shipmentNumber
     * @return ShipmentNumberType
     */
    public function withShipmentNumber($shipmentNumber)
    {
        $new = clone $this;
        $new->shipmentNumber = $shipmentNumber;

        return $new;
    }


}

