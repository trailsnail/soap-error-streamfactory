<?php

namespace dhl\Type;

class ReadShipmentOrderResponse
{

    /**
     * @var \dhl\Type\Version
     */
    private $Version;

    /**
     * @var \dhl\Type\Statusinformation
     */
    private $status;

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
     * @return ReadShipmentOrderResponse
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
        return $this->status;
    }

    /**
     * @param \dhl\Type\Statusinformation $status
     * @return ReadShipmentOrderResponse
     */
    public function withStatus($status)
    {
        $new = clone $this;
        $new->status = $status;

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
     * @return ReadShipmentOrderResponse
     */
    public function withCreationState($CreationState)
    {
        $new = clone $this;
        $new->CreationState = $CreationState;

        return $new;
    }


}

