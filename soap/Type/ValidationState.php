<?php

namespace dhl\Type;

class ValidationState
{

    /**
     * @var string
     */
    private $sequenceNumber;

    /**
     * @var \dhl\Type\Statusinformation
     */
    private $Status;

    /**
     * @return string
     */
    public function getSequenceNumber()
    {
        return $this->sequenceNumber;
    }

    /**
     * @param string $sequenceNumber
     * @return ValidationState
     */
    public function withSequenceNumber($sequenceNumber)
    {
        $new = clone $this;
        $new->sequenceNumber = $sequenceNumber;

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
     * @return ValidationState
     */
    public function withStatus($Status)
    {
        $new = clone $this;
        $new->Status = $Status;

        return $new;
    }


}

