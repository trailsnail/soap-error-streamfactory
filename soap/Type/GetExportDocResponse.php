<?php

namespace dhl\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetExportDocResponse implements ResultInterface
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
     * @var \dhl\Type\ExportDocData
     */
    private $ExportDocData;

    /**
     * @return \dhl\Type\Version
     */
    public function getVersion()
    {
        return $this->Version;
    }

    /**
     * @param \dhl\Type\Version $Version
     * @return GetExportDocResponse
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
     * @return GetExportDocResponse
     */
    public function withStatus($Status)
    {
        $new = clone $this;
        $new->Status = $Status;

        return $new;
    }

    /**
     * @return \dhl\Type\ExportDocData
     */
    public function getExportDocData()
    {
        return $this->ExportDocData;
    }

    /**
     * @param \dhl\Type\ExportDocData $ExportDocData
     * @return GetExportDocResponse
     */
    public function withExportDocData($ExportDocData)
    {
        $new = clone $this;
        $new->ExportDocData = $ExportDocData;

        return $new;
    }


}

