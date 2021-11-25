<?php

namespace dhl\Type;

class ExportDocData
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
     * @var string
     */
    private $exportDocData;

    /**
     * @var string
     */
    private $exportDocURL;

    /**
     * @return string
     */
    public function getShipmentNumber()
    {
        return $this->shipmentNumber;
    }

    /**
     * @param string $shipmentNumber
     * @return ExportDocData
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
     * @return ExportDocData
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
    public function getExportDocData()
    {
        return $this->exportDocData;
    }

    /**
     * @param string $exportDocData
     * @return ExportDocData
     */
    public function withExportDocData($exportDocData)
    {
        $new = clone $this;
        $new->exportDocData = $exportDocData;

        return $new;
    }

    /**
     * @return string
     */
    public function getExportDocURL()
    {
        return $this->exportDocURL;
    }

    /**
     * @param string $exportDocURL
     * @return ExportDocData
     */
    public function withExportDocURL($exportDocURL)
    {
        $new = clone $this;
        $new->exportDocURL = $exportDocURL;

        return $new;
    }


}

