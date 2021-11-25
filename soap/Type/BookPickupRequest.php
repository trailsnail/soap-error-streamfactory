<?php

namespace dhl\Type;

class BookPickupRequest
{

    /**
     * @var \dhl\Type\Version
     */
    private $Version;

    /**
     * @var \dhl\Type\PickupBookingInformationType
     */
    private $BookingInformation;

    /**
     * @var \dhl\Type\PickupAddressType
     */
    private $PickupAddress;

    /**
     * @var \dhl\Type\PickupOrdererType
     */
    private $ContactOrderer;

    /**
     * @return \dhl\Type\Version
     */
    public function getVersion()
    {
        return $this->Version;
    }

    /**
     * @param \dhl\Type\Version $Version
     * @return BookPickupRequest
     */
    public function withVersion($Version)
    {
        $new = clone $this;
        $new->Version = $Version;

        return $new;
    }

    /**
     * @return \dhl\Type\PickupBookingInformationType
     */
    public function getBookingInformation()
    {
        return $this->BookingInformation;
    }

    /**
     * @param \dhl\Type\PickupBookingInformationType $BookingInformation
     * @return BookPickupRequest
     */
    public function withBookingInformation($BookingInformation)
    {
        $new = clone $this;
        $new->BookingInformation = $BookingInformation;

        return $new;
    }

    /**
     * @return \dhl\Type\PickupAddressType
     */
    public function getPickupAddress()
    {
        return $this->PickupAddress;
    }

    /**
     * @param \dhl\Type\PickupAddressType $PickupAddress
     * @return BookPickupRequest
     */
    public function withPickupAddress($PickupAddress)
    {
        $new = clone $this;
        $new->PickupAddress = $PickupAddress;

        return $new;
    }

    /**
     * @return \dhl\Type\PickupOrdererType
     */
    public function getContactOrderer()
    {
        return $this->ContactOrderer;
    }

    /**
     * @param \dhl\Type\PickupOrdererType $ContactOrderer
     * @return BookPickupRequest
     */
    public function withContactOrderer($ContactOrderer)
    {
        $new = clone $this;
        $new->ContactOrderer = $ContactOrderer;

        return $new;
    }


}

