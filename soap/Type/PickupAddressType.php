<?php

namespace dhl\Type;

class PickupAddressType
{

    /**
     * @var \dhl\Type\NativeAddressType
     */
    private $NativeAddress;

    /**
     * @var \dhl\Type\PackStationType
     */
    private $PackStation;

    /**
     * @var string
     */
    private $streetNameCode;

    /**
     * @var string
     */
    private $streetNumberCode;

    /**
     * @var \dhl\Type\NameType
     */
    private $Company;

    /**
     * @var \dhl\Type\NativeAddressType
     */
    private $Address;

    /**
     * @var \dhl\Type\CommunicationType
     */
    private $Communication;

    /**
     * @return \dhl\Type\NativeAddressType
     */
    public function getNativeAddress()
    {
        return $this->NativeAddress;
    }

    /**
     * @param \dhl\Type\NativeAddressType $NativeAddress
     * @return PickupAddressType
     */
    public function withNativeAddress($NativeAddress)
    {
        $new = clone $this;
        $new->NativeAddress = $NativeAddress;

        return $new;
    }

    /**
     * @return \dhl\Type\PackStationType
     */
    public function getPackStation()
    {
        return $this->PackStation;
    }

    /**
     * @param \dhl\Type\PackStationType $PackStation
     * @return PickupAddressType
     */
    public function withPackStation($PackStation)
    {
        $new = clone $this;
        $new->PackStation = $PackStation;

        return $new;
    }

    /**
     * @return string
     */
    public function getStreetNameCode()
    {
        return $this->streetNameCode;
    }

    /**
     * @param string $streetNameCode
     * @return PickupAddressType
     */
    public function withStreetNameCode($streetNameCode)
    {
        $new = clone $this;
        $new->streetNameCode = $streetNameCode;

        return $new;
    }

    /**
     * @return string
     */
    public function getStreetNumberCode()
    {
        return $this->streetNumberCode;
    }

    /**
     * @param string $streetNumberCode
     * @return PickupAddressType
     */
    public function withStreetNumberCode($streetNumberCode)
    {
        $new = clone $this;
        $new->streetNumberCode = $streetNumberCode;

        return $new;
    }

    /**
     * @return \dhl\Type\NameType
     */
    public function getCompany()
    {
        return $this->Company;
    }

    /**
     * @param \dhl\Type\NameType $Company
     * @return PickupAddressType
     */
    public function withCompany($Company)
    {
        $new = clone $this;
        $new->Company = $Company;

        return $new;
    }

    /**
     * @return \dhl\Type\NativeAddressType
     */
    public function getAddress()
    {
        return $this->Address;
    }

    /**
     * @param \dhl\Type\NativeAddressType $Address
     * @return PickupAddressType
     */
    public function withAddress($Address)
    {
        $new = clone $this;
        $new->Address = $Address;

        return $new;
    }

    /**
     * @return \dhl\Type\CommunicationType
     */
    public function getCommunication()
    {
        return $this->Communication;
    }

    /**
     * @param \dhl\Type\CommunicationType $Communication
     * @return PickupAddressType
     */
    public function withCommunication($Communication)
    {
        $new = clone $this;
        $new->Communication = $Communication;

        return $new;
    }


}

