<?php

namespace dhl\Type;

class CustomerType
{

    /**
     * @var \dhl\Type\NameType
     */
    private $Name;

    /**
     * @var string
     */
    private $vatID;

    /**
     * @var string
     */
    private $EKP;

    /**
     * @var \dhl\Type\NativeAddressType
     */
    private $Address;

    /**
     * @var \dhl\Type\ContactType
     */
    private $Contact;

    /**
     * @var \dhl\Type\BankType
     */
    private $Bank;

    /**
     * @var mixed
     */
    private $note;

    /**
     * @return \dhl\Type\NameType
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param \dhl\Type\NameType $Name
     * @return CustomerType
     */
    public function withName($Name)
    {
        $new = clone $this;
        $new->Name = $Name;

        return $new;
    }

    /**
     * @return string
     */
    public function getVatID()
    {
        return $this->vatID;
    }

    /**
     * @param string $vatID
     * @return CustomerType
     */
    public function withVatID($vatID)
    {
        $new = clone $this;
        $new->vatID = $vatID;

        return $new;
    }

    /**
     * @return string
     */
    public function getEKP()
    {
        return $this->EKP;
    }

    /**
     * @param string $EKP
     * @return CustomerType
     */
    public function withEKP($EKP)
    {
        $new = clone $this;
        $new->EKP = $EKP;

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
     * @return CustomerType
     */
    public function withAddress($Address)
    {
        $new = clone $this;
        $new->Address = $Address;

        return $new;
    }

    /**
     * @return \dhl\Type\ContactType
     */
    public function getContact()
    {
        return $this->Contact;
    }

    /**
     * @param \dhl\Type\ContactType $Contact
     * @return CustomerType
     */
    public function withContact($Contact)
    {
        $new = clone $this;
        $new->Contact = $Contact;

        return $new;
    }

    /**
     * @return \dhl\Type\BankType
     */
    public function getBank()
    {
        return $this->Bank;
    }

    /**
     * @param \dhl\Type\BankType $Bank
     * @return CustomerType
     */
    public function withBank($Bank)
    {
        $new = clone $this;
        $new->Bank = $Bank;

        return $new;
    }

    /**
     * @return mixed
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * @param mixed $note
     * @return CustomerType
     */
    public function withNote($note)
    {
        $new = clone $this;
        $new->note = $note;

        return $new;
    }


}

