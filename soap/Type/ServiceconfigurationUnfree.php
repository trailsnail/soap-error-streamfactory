<?php

namespace dhl\Type;

class ServiceconfigurationUnfree
{

    /**
     * @var string
     */
    private $active;

    /**
     * @var string
     */
    private $PaymentType;

    /**
     * @var string
     */
    private $CustomerNumber;

    /**
     * @return string
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * @param string $active
     * @return ServiceconfigurationUnfree
     */
    public function withActive($active)
    {
        $new = clone $this;
        $new->active = $active;

        return $new;
    }

    /**
     * @return string
     */
    public function getPaymentType()
    {
        return $this->PaymentType;
    }

    /**
     * @param string $PaymentType
     * @return ServiceconfigurationUnfree
     */
    public function withPaymentType($PaymentType)
    {
        $new = clone $this;
        $new->PaymentType = $PaymentType;

        return $new;
    }

    /**
     * @return string
     */
    public function getCustomerNumber()
    {
        return $this->CustomerNumber;
    }

    /**
     * @param string $CustomerNumber
     * @return ServiceconfigurationUnfree
     */
    public function withCustomerNumber($CustomerNumber)
    {
        $new = clone $this;
        $new->CustomerNumber = $CustomerNumber;

        return $new;
    }


}

