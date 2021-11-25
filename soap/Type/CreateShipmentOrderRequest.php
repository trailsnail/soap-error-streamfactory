<?php

namespace dhl\Type;

use Phpro\SoapClient\Type\RequestInterface;

class CreateShipmentOrderRequest implements RequestInterface
{

    /**
     * @var \dhl\Type\Version
     */
    private $Version;

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
     * @var \dhl\Type\ShipmentOrderType $ShipmentOrder
     * @var string $labelResponseType
     * @var string $groupProfileName
     * @var string $labelFormat
     * @var string $labelFormatRetoure
     * @var string $combinedPrinting
     */
    public function __construct($Version, $ShipmentOrder, $labelResponseType, $groupProfileName, $labelFormat, $labelFormatRetoure, $combinedPrinting)
    {
        $this->Version = $Version;
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
     * @return CreateShipmentOrderRequest
     */
    public function withVersion($Version)
    {
        $new = clone $this;
        $new->Version = $Version;

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
     * @return CreateShipmentOrderRequest
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
     * @return CreateShipmentOrderRequest
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
     * @return CreateShipmentOrderRequest
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
     * @return CreateShipmentOrderRequest
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
     * @return CreateShipmentOrderRequest
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
     * @return CreateShipmentOrderRequest
     */
    public function withCombinedPrinting($combinedPrinting)
    {
        $new = clone $this;
        $new->combinedPrinting = $combinedPrinting;

        return $new;
    }


}

