<?php

namespace dhl\Type;

class ManifestState
{

    /**
     * @var string
     */
    private $shipmentNumber;

    /**
     * @var \dhl\Type\Statusinformation
     */
    private $Status;

    /**
     * @return string
     */
    public function getShipmentNumber()
    {
        return $this->shipmentNumber;
    }

    /**
     * @param string $shipmentNumber
     * @return ManifestState
     */
    public function withShipmentNumber($shipmentNumber)
    {
        $new = clone $this;
        $new->shipmentNumber = $shipmentNumber;

        return $new;
    }

    /**
     * @return \dhl\Type\Statusinformation
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * @param \dhl\Type\Statusinformation $Status
     * @return ManifestState
     */
    public function withStatus($Status)
    {
        $new = clone $this;
        $new->Status = $Status;

        return $new;
    }


}

