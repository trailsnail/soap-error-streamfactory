<?php

namespace dhl\Type;

use Phpro\SoapClient\Type\ResultInterface;

class UpdateShipmentOrderResponse implements ResultInterface
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
     * @return \dhl\Type\Version
     */
    public function getVersion()
    {
        return $this->Version;
    }

    /**
     * @param \dhl\Type\Version $Version
     * @return UpdateShipmentOrderResponse
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
     * @return UpdateShipmentOrderResponse
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
    public function getShipmentNumber()
    {
        return $this->shipmentNumber;
    }

    /**
     * @param string $shipmentNumber
     * @return UpdateShipmentOrderResponse
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
     * @return UpdateShipmentOrderResponse
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
     * @return UpdateShipmentOrderResponse
     */
    public function withLabelData($LabelData)
    {
        $new = clone $this;
        $new->LabelData = $LabelData;

        return $new;
    }


}

