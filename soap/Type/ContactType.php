<?php

namespace dhl\Type;

class ContactType
{

    /**
     * @var \dhl\Type\CommunicationType
     */
    private $Communication;

    /**
     * @var \dhl\Type\NativeAddressType
     */
    private $Address;

    /**
     * @var \dhl\Type\NameType
     */
    private $Name;

    /**
     * @return \dhl\Type\CommunicationType
     */
    public function getCommunication()
    {
        return $this->Communication;
    }

    /**
     * @param \dhl\Type\CommunicationType $Communication
     * @return ContactType
     */
    public function withCommunication($Communication)
    {
        $new = clone $this;
        $new->Communication = $Communication;

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
     * @return ContactType
     */
    public function withAddress($Address)
    {
        $new = clone $this;
        $new->Address = $Address;

        return $new;
    }

    /**
     * @return \dhl\Type\NameType
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param \dhl\Type\NameType $Name
     * @return ContactType
     */
    public function withName($Name)
    {
        $new = clone $this;
        $new->Name = $Name;

        return $new;
    }


}

