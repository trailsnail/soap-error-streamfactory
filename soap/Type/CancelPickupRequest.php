<?php

namespace dhl\Type;

class CancelPickupRequest
{

    /**
     * @var \dhl\Type\Version
     */
    private $Version;

    /**
     * @var string
     */
    private $BookingConfirmationNumber;

    /**
     * @return \dhl\Type\Version
     */
    public function getVersion()
    {
        return $this->Version;
    }

    /**
     * @param \dhl\Type\Version $Version
     * @return CancelPickupRequest
     */
    public function withVersion($Version)
    {
        $new = clone $this;
        $new->Version = $Version;

        return $new;
    }

    /**
     * @return string
     */
    public function getBookingConfirmationNumber()
    {
        return $this->BookingConfirmationNumber;
    }

    /**
     * @param string $BookingConfirmationNumber
     * @return CancelPickupRequest
     */
    public function withBookingConfirmationNumber($BookingConfirmationNumber)
    {
        $new = clone $this;
        $new->BookingConfirmationNumber = $BookingConfirmationNumber;

        return $new;
    }


}

