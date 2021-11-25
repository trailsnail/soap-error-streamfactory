<?php

namespace dhl\Type;

use Phpro\SoapClient\Type\ResultInterface;

class DoManifestResponse implements ResultInterface
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
     * @var \dhl\Type\ManifestState
     */
    private $ManifestState;

    /**
     * @return \dhl\Type\Version
     */
    public function getVersion()
    {
        return $this->Version;
    }

    /**
     * @param \dhl\Type\Version $Version
     * @return DoManifestResponse
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
     * @return DoManifestResponse
     */
    public function withStatus($Status)
    {
        $new = clone $this;
        $new->Status = $Status;

        return $new;
    }

    /**
     * @return \dhl\Type\ManifestState
     */
    public function getManifestState()
    {
        return $this->ManifestState;
    }

    /**
     * @param \dhl\Type\ManifestState $ManifestState
     * @return DoManifestResponse
     */
    public function withManifestState($ManifestState)
    {
        $new = clone $this;
        $new->ManifestState = $ManifestState;

        return $new;
    }


}

