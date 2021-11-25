<?php

namespace dhl\Type;

use Phpro\SoapClient\Type\RequestInterface;

class UpdateShipmentOrderRequest implements RequestInterface
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
     * @var \dhl\Type\ShipmentOrderType
     */
    private $ShipmentOrder;

    /**
     * @var string
     */
    private $labelResponseType;

    /**
     * @var string
     */
    private $groupProfileName;

    /**
     * @var string
     */
    private $labelFormat;

    /**
     * @var string
     */
    private $labelFormatRetoure;

    /**
     * @var string
     */
    private $combinedPrinting;

    /**
     * Constructor
     *
     * @var \dhl\Type\Version $Version
     * @var string $shipmentNumber
     * @var \dhl\Type\ShipmentOrderType $ShipmentOrder
     * @var string $labelResponseType
     * @var string $groupProfileName
     * @var string $labelFormat
     * @var string $labelFormatRetoure
     * @var string $combinedPrinting
     */
    public function __construct($Version, $shipmentNumber, $ShipmentOrder, $labelResponseType, $groupProfileName, $labelFormat, $labelFormatRetoure, $combinedPrinting)
    {
        $this->Version = $Version;
        $this->shipmentNumber = $shipmentNumber;
        $this->ShipmentOrder = $ShipmentOrder;
        $this->labelResponseType = $labelResponseType;
        $this->groupProfileName = $groupProfileName;
        $this->labelFormat = $labelFormat;
        $this->labelFormatRetoure = $labelFormatRetoure;
        $this->combinedPrinting = $combinedPrinting;
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
     * @return UpdateShipmentOrderRequest
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
     * @return UpdateShipmentOrderRequest
     */
    public function withShipmentNumber($shipmentNumber)
    {
        $new = clone $this;
        $new->shipmentNumber = $shipmentNumber;

        return $new;
    }

    /**
     * @return \dhl\Type\ShipmentOrderType
     */
    public function getShipmentOrder()
    {
        return $this->ShipmentOrder;
    }

    /**
     * @param \dhl\Type\ShipmentOrderType $ShipmentOrder
     * @return UpdateShipmentOrderRequest
     */
    public function withShipmentOrder($ShipmentOrder)
    {
        $new = clone $this;
        $new->ShipmentOrder = $ShipmentOrder;

        return $new;
    }

    /**
     * @return string
     */
    public function getLabelResponseType()
    {
        return $this->labelResponseType;
    }

    /**
     * @param string $labelResponseType
     * @return UpdateShipmentOrderRequest
     */
    public function withLabelResponseType($labelResponseType)
    {
        $new = clone $this;
        $new->labelResponseType = $labelResponseType;

        return $new;
    }

    /**
     * @return string
     */
    public function getGroupProfileName()
    {
        return $this->groupProfileName;
    }

    /**
     * @param string $groupProfileName
     * @return UpdateShipmentOrderRequest
     */
    public function withGroupProfileName($groupProfileName)
    {
        $new = clone $this;
        $new->groupProfileName = $groupProfileName;

        return $new;
    }

    /**
     * @return string
     */
    public function getLabelFormat()
    {
        return $this->labelFormat;
    }

    /**
     * @param string $labelFormat
     * @return UpdateShipmentOrderRequest
     */
    public function withLabelFormat($labelFormat)
    {
        $new = clone $this;
        $new->labelFormat = $labelFormat;

        return $new;
    }

    /**
     * @return string
     */
    public function getLabelFormatRetoure()
    {
        return $this->labelFormatRetoure;
    }

    /**
     * @param string $labelFormatRetoure
     * @return UpdateShipmentOrderRequest
     */
    public function withLabelFormatRetoure($labelFormatRetoure)
    {
        $new = clone $this;
        $new->labelFormatRetoure = $labelFormatRetoure;

        return $new;
    }

    /**
     * @return string
     */
    public function getCombinedPrinting()
    {
        return $this->combinedPrinting;
    }

    /**
     * @param string $combinedPrinting
     * @return UpdateShipmentOrderRequest
     */
    public function withCombinedPrinting($combinedPrinting)
    {
        $new = clone $this;
        $new->combinedPrinting = $combinedPrinting;

        return $new;
    }


}

