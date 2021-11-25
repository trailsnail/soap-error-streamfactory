<?php

namespace dhl\Type;

use Phpro\SoapClient\Type\ResultInterface;

class CreateShipmentOrderResponse implements ResultInterface
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
     * @var \dhl\Type\CreationState
     */
    private $CreationState;

    /**
     * @return \dhl\Type\Version
     */
    public function getVersion()
    {
        return $this->Version;
    }

    /**
     * @param \dhl\Type\Version $Version
     * @return CreateShipmentOrderResponse
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
     * @return CreateShipmentOrderResponse
     */
    public function withStatus($Status)
    {
        $new = clone $this;
        $new->Status = $Status;

        return $new;
    }

    /**
     * @return \dhl\Type\CreationState
     */
    public function getCreationState()
    {
        return $this->CreationState;
    }

    /**
     * @param \dhl\Type\CreationState $CreationState
     * @return CreateShipmentOrderResponse
     */
    public function withCreationState($CreationState)
    {
        $new = clone $this;
        $new->CreationState = $CreationState;

        return $new;
    }


}

