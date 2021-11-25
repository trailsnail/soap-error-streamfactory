<?php

namespace dhl\Type;

class CreationState
{

    /**
     * @var string
     */
    private $sequenceNumber;

    /**
     * @var string
     */
    private $shipmentNumber;

    /**
     * @var string
     */
    private $returnShipmentNumber;

    /**
     * @var \dhl\Type\LabelData
     */
    private $LabelData;

    /**
     * @return string
     */
    public function getSequenceNumber()
    {
        return $this->sequenceNumber;
    }

    /**
     * @param string $sequenceNumber
     * @return CreationState
     */
    public function withSequenceNumber($sequenceNumber)
    {
        $new = clone $this;
        $new->sequenceNumber = $sequenceNumber;

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
     * @return CreationState
     */
    public function withShipmentNumber($shipmentNumber)
    {
        $new = clone $this;
        $new->shipmentNumber = $shipmentNumber;

        return $new;
    }

    /**
     * @return string
     */
    public function getReturnShipmentNumber()
    {
        return $this->returnShipmentNumber;
    }

    /**
     * @param string $returnShipmentNumber
     * @return CreationState
     */
    public function withReturnShipmentNumber($returnShipmentNumber)
    {
        $new = clone $this;
        $new->returnShipmentNumber = $returnShipmentNumber;

        return $new;
    }

    /**
     * @return \dhl\Type\LabelData
     */
    public function getLabelData()
    {
        return $this->LabelData;
    }

    /**
     * @param \dhl\Type\LabelData $LabelData
     * @return CreationState
     */
    public function withLabelData($LabelData)
    {
        $new = clone $this;
        $new->LabelData = $LabelData;

        return $new;
    }


}

