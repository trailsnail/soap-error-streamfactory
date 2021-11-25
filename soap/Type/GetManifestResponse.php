<?php

namespace dhl\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetManifestResponse implements ResultInterface
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
    private $manifestData;

    /**
     * @return \dhl\Type\Version
     */
    public function getVersion()
    {
        return $this->Version;
    }

    /**
     * @param \dhl\Type\Version $Version
     * @return GetManifestResponse
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
     * @return GetManifestResponse
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
    public function getManifestData()
    {
        return $this->manifestData;
    }

    /**
     * @param string $manifestData
     * @return GetManifestResponse
     */
    public function withManifestData($manifestData)
    {
        $new = clone $this;
        $new->manifestData = $manifestData;

        return $new;
    }


}

