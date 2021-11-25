<?php

namespace dhl\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ValidateShipmentResponse implements ResultInterface
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
     * @var \dhl\Type\ValidationState
     */
    private $ValidationState;

    /**
     * @return \dhl\Type\Version
     */
    public function getVersion()
    {
        return $this->Version;
    }

    /**
     * @param \dhl\Type\Version $Version
     * @return ValidateShipmentResponse
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
     * @return ValidateShipmentResponse
     */
    public function withStatus($Status)
    {
        $new = clone $this;
        $new->Status = $Status;

        return $new;
    }

    /**
     * @return \dhl\Type\ValidationState
     */
    public function getValidationState()
    {
        return $this->ValidationState;
    }

    /**
     * @param \dhl\Type\ValidationState $ValidationState
     * @return ValidateShipmentResponse
     */
    public function withValidationState($ValidationState)
    {
        $new = clone $this;
        $new->ValidationState = $ValidationState;

        return $new;
    }


}

