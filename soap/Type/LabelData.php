<?php

namespace dhl\Type;

class LabelData
{

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
    private $labelUrl;

    /**
     * @var string
     */
    private $labelData;

    /**
     * @var string
     */
    private $returnLabelUrl;

    /**
     * @var string
     */
    private $returnLabelData;

    /**
     * @var string
     */
    private $exportLabelUrl;

    /**
     * @var string
     */
    private $exportLabelData;

    /**
     * @var string
     */
    private $codLabelUrl;

    /**
     * @var string
     */
    private $codLabelData;

    /**
     * @return \dhl\Type\Statusinformation
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * @param \dhl\Type\Statusinformation $Status
     * @return LabelData
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
     * @return LabelData
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
    public function getLabelUrl()
    {
        return $this->labelUrl;
    }

    /**
     * @param string $labelUrl
     * @return LabelData
     */
    public function withLabelUrl($labelUrl)
    {
        $new = clone $this;
        $new->labelUrl = $labelUrl;

        return $new;
    }

    /**
     * @return string
     */
    public function getLabelData()
    {
        return $this->labelData;
    }

    /**
     * @param string $labelData
     * @return LabelData
     */
    public function withLabelData($labelData)
    {
        $new = clone $this;
        $new->labelData = $labelData;

        return $new;
    }

    /**
     * @return string
     */
    public function getReturnLabelUrl()
    {
        return $this->returnLabelUrl;
    }

    /**
     * @param string $returnLabelUrl
     * @return LabelData
     */
    public function withReturnLabelUrl($returnLabelUrl)
    {
        $new = clone $this;
        $new->returnLabelUrl = $returnLabelUrl;

        return $new;
    }

    /**
     * @return string
     */
    public function getReturnLabelData()
    {
        return $this->returnLabelData;
    }

    /**
     * @param string $returnLabelData
     * @return LabelData
     */
    public function withReturnLabelData($returnLabelData)
    {
        $new = clone $this;
        $new->returnLabelData = $returnLabelData;

        return $new;
    }

    /**
     * @return string
     */
    public function getExportLabelUrl()
    {
        return $this->exportLabelUrl;
    }

    /**
     * @param string $exportLabelUrl
     * @return LabelData
     */
    public function withExportLabelUrl($exportLabelUrl)
    {
        $new = clone $this;
        $new->exportLabelUrl = $exportLabelUrl;

        return $new;
    }

    /**
     * @return string
     */
    public function getExportLabelData()
    {
        return $this->exportLabelData;
    }

    /**
     * @param string $exportLabelData
     * @return LabelData
     */
    public function withExportLabelData($exportLabelData)
    {
        $new = clone $this;
        $new->exportLabelData = $exportLabelData;

        return $new;
    }

    /**
     * @return string
     */
    public function getCodLabelUrl()
    {
        return $this->codLabelUrl;
    }

    /**
     * @param string $codLabelUrl
     * @return LabelData
     */
    public function withCodLabelUrl($codLabelUrl)
    {
        $new = clone $this;
        $new->codLabelUrl = $codLabelUrl;

        return $new;
    }

    /**
     * @return string
     */
    public function getCodLabelData()
    {
        return $this->codLabelData;
    }

    /**
     * @param string $codLabelData
     * @return LabelData
     */
    public function withCodLabelData($codLabelData)
    {
        $new = clone $this;
        $new->codLabelData = $codLabelData;

        return $new;
    }


}

