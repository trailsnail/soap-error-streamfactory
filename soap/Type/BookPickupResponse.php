<?php

namespace dhl\Type;

class BookPickupResponse
{

    /**
     * @var \dhl\Type\Version
     */
    private $Version;

    /**
     * @var \dhl\Type\Statusinformation
     */
    private $Status;

    /**
     * @var string
     */
    private $ConfirmationNumber;

    /**
     * @var string
     */
    private $ShipmentNumber;

    /**
     * @return \dhl\Type\Version
     */
    public function getVersion()
    {
        return $this->Version;
    }

    /**
     * @param \dhl\Type\Version $Version
     * @return BookPickupResponse
     */
    public function withVersion($Version)
    {
        $new = clone $this;
        $new->Version = $Version;

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
     * @return BookPickupResponse
     */
    public function withStatus($Status)
    {
        $new = clone $this;
        $new->Status = $Status;

        return $new;
    }

    /**
     * @return string
     */
    public function getConfirmationNumber()
    {
        return $this->ConfirmationNumber;
    }

    /**
     * @param string $ConfirmationNumber
     * @return BookPickupResponse
     */
    public function withConfirmationNumber($ConfirmationNumber)
    {
        $new = clone $this;
        $new->ConfirmationNumber = $ConfirmationNumber;

        return $new;
    }

    /**
     * @return string
     */
    public function getShipmentNumber()
    {
        return $this->ShipmentNumber;
    }

    /**
     * @param string $ShipmentNumber
     * @return BookPickupResponse
     */
    public function withShipmentNumber($ShipmentNumber)
    {
        $new = clone $this;
        $new->ShipmentNumber = $ShipmentNumber;

        return $new;
    }


}

