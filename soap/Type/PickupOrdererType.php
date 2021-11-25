<?php

namespace dhl\Type;

class PickupOrdererType
{

    /**
     * @var \dhl\Type\NameType
     */
    private $Company;

    /**
     * @var string
     */
    private $Name3;

    /**
     * @var \dhl\Type\NativeAddressType
     */
    private $Address;

    /**
     * @var \dhl\Type\CommunicationType
     */
    private $Communication;

    /**
     * @return \dhl\Type\NameType
     */
    public function getCompany()
    {
        return $this->Company;
    }

    /**
     * @param \dhl\Type\NameType $Company
     * @return PickupOrdererType
     */
    public function withCompany($Company)
    {
        $new = clone $this;
        $new->Company = $Company;

        return $new;
    }

    /**
     * @return string
     */
    public function getName3()
    {
        return $this->Name3;
    }

    /**
     * @param string $Name3
     * @return PickupOrdererType
     */
    public function withName3($Name3)
    {
        $new = clone $this;
        $new->Name3 = $Name3;

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
     * @return PickupOrdererType
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
     * @return PickupOrdererType
     */
    public function withCommunication($Communication)
    {
        $new = clone $this;
        $new->Communication = $Communication;

        return $new;
    }


}

