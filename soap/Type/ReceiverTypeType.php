<?php

namespace dhl\Type;

class ReceiverTypeType
{

    /**
     * @var string
     */
    private $name1;

    /**
     * @var \dhl\Type\ReceiverNativeAddressType
     */
    private $Address;

    /**
     * @var \dhl\Type\PackStationType
     */
    private $Packstation;

    /**
     * @var \dhl\Type\PostfilialeType
     */
    private $Postfiliale;

    /**
     * @var \dhl\Type\CommunicationType
     */
    private $Communication;

    /**
     * @return string
     */
    public function getName1()
    {
        return $this->name1;
    }

    /**
     * @param string $name1
     * @return ReceiverTypeType
     */
    public function withName1($name1)
    {
        $new = clone $this;
        $new->name1 = $name1;

        return $new;
    }

    /**
     * @return \dhl\Type\ReceiverNativeAddressType
     */
    public function getAddress()
    {
        return $this->Address;
    }

    /**
     * @param \dhl\Type\ReceiverNativeAddressType $Address
     * @return ReceiverTypeType
     */
    public function withAddress($Address)
    {
        $new = clone $this;
        $new->Address = $Address;

        return $new;
    }

    /**
     * @return \dhl\Type\PackStationType
     */
    public function getPackstation()
    {
        return $this->Packstation;
    }

    /**
     * @param \dhl\Type\PackStationType $Packstation
     * @return ReceiverTypeType
     */
    public function withPackstation($Packstation)
    {
        $new = clone $this;
        $new->Packstation = $Packstation;

        return $new;
    }

    /**
     * @return \dhl\Type\PostfilialeType
     */
    public function getPostfiliale()
    {
        return $this->Postfiliale;
    }

    /**
     * @param \dhl\Type\PostfilialeType $Postfiliale
     * @return ReceiverTypeType
     */
    public function withPostfiliale($Postfiliale)
    {
        $new = clone $this;
        $new->Postfiliale = $Postfiliale;

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
     * @return ReceiverTypeType
     */
    public function withCommunication($Communication)
    {
        $new = clone $this;
        $new->Communication = $Communication;

        return $new;
    }


}

