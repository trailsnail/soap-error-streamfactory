<?php

namespace dhl\Type;

class ShipperTypeType
{

    /**
     * @var \dhl\Type\NameType
     */
    private $Name;

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
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param \dhl\Type\NameType $Name
     * @return ShipperTypeType
     */
    public function withName($Name)
    {
        $new = clone $this;
        $new->Name = $Name;

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
     * @return ShipperTypeType
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
     * @return ShipperTypeType
     */
    public function withCommunication($Communication)
    {
        $new = clone $this;
        $new->Communication = $Communication;

        return $new;
    }


}

