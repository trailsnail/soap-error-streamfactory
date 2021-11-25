<?php

namespace dhl\Type;

class ValidateShipmentOrderType
{

    /**
     * @var string
     */
    private $sequenceNumber;

    /**
     * @var \dhl\Type\Shipment
     */
    private $Shipment;

    /**
     * @var \dhl\Type\Serviceconfiguration
     */
    private $PrintOnlyIfCodeable;

    /**
     * @return string
     */
    public function getSequenceNumber()
    {
        return $this->sequenceNumber;
    }

    /**
     * @param string $sequenceNumber
     * @return ValidateShipmentOrderType
     */
    public function withSequenceNumber($sequenceNumber)
    {
        $new = clone $this;
        $new->sequenceNumber = $sequenceNumber;

        return $new;
    }

    /**
     * @return \dhl\Type\Shipment
     */
    public function getShipment()
    {
        return $this->Shipment;
    }

    /**
     * @param \dhl\Type\Shipment $Shipment
     * @return ValidateShipmentOrderType
     */
    public function withShipment($Shipment)
    {
        $new = clone $this;
        $new->Shipment = $Shipment;

        return $new;
    }

    /**
     * @return \dhl\Type\Serviceconfiguration
     */
    public function getPrintOnlyIfCodeable()
    {
        return $this->PrintOnlyIfCodeable;
    }

    /**
     * @param \dhl\Type\Serviceconfiguration $PrintOnlyIfCodeable
     * @return ValidateShipmentOrderType
     */
    public function withPrintOnlyIfCodeable($PrintOnlyIfCodeable)
    {
        $new = clone $this;
        $new->PrintOnlyIfCodeable = $PrintOnlyIfCodeable;

        return $new;
    }


}

