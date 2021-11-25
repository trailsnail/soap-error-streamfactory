<?php

namespace dhl\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetLabelRequest implements RequestInterface
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
     * @var string
     */
    private $feederSystem;

    /**
     * Constructor
     *
     * @var \dhl\Type\Version $Version
     * @var string $shipmentNumber
     * @var string $labelResponseType
     * @var string $groupProfileName
     * @var string $labelFormat
     * @var string $labelFormatRetoure
     * @var string $combinedPrinting
     * @var string $feederSystem
     */
    public function __construct($Version, $shipmentNumber, $labelResponseType, $groupProfileName, $labelFormat, $labelFormatRetoure, $combinedPrinting, $feederSystem)
    {
        $this->Version = $Version;
        $this->shipmentNumber = $shipmentNumber;
        $this->labelResponseType = $labelResponseType;
        $this->groupProfileName = $groupProfileName;
        $this->labelFormat = $labelFormat;
        $this->labelFormatRetoure = $labelFormatRetoure;
        $this->combinedPrinting = $combinedPrinting;
        $this->feederSystem = $feederSystem;
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
     * @return GetLabelRequest
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
     * @return GetLabelRequest
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
    public function getLabelResponseType()
    {
        return $this->labelResponseType;
    }

    /**
     * @param string $labelResponseType
     * @return GetLabelRequest
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
     * @return GetLabelRequest
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
     * @return GetLabelRequest
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
     * @return GetLabelRequest
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
     * @return GetLabelRequest
     */
    public function withCombinedPrinting($combinedPrinting)
    {
        $new = clone $this;
        $new->combinedPrinting = $combinedPrinting;

        return $new;
    }

    /**
     * @return string
     */
    public function getFeederSystem()
    {
        return $this->feederSystem;
    }

    /**
     * @param string $feederSystem
     * @return GetLabelRequest
     */
    public function withFeederSystem($feederSystem)
    {
        $new = clone $this;
        $new->feederSystem = $feederSystem;

        return $new;
    }


}

