<?php

namespace dhl\Type;

use Phpro\SoapClient\Type\ResultInterface;

class DeleteShipmentOrderResponse implements ResultInterface
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
     * @var \dhl\Type\DeletionState
     */
    private $DeletionState;

    /**
     * @return \dhl\Type\Version
     */
    public function getVersion()
    {
        return $this->Version;
    }

    /**
     * @param \dhl\Type\Version $Version
     * @return DeleteShipmentOrderResponse
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
     * @return DeleteShipmentOrderResponse
     */
    public function withStatus($Status)
    {
        $new = clone $this;
        $new->Status = $Status;

        return $new;
    }

    /**
     * @return \dhl\Type\DeletionState
     */
    public function getDeletionState()
    {
        return $this->DeletionState;
    }

    /**
     * @param \dhl\Type\DeletionState $DeletionState
     * @return DeleteShipmentOrderResponse
     */
    public function withDeletionState($DeletionState)
    {
        $new = clone $this;
        $new->DeletionState = $DeletionState;

        return $new;
    }


}

