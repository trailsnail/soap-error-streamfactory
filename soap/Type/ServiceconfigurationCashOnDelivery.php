<?php

namespace dhl\Type;

class ServiceconfigurationCashOnDelivery
{

    /**
     * @var string
     */
    private $active;

    /**
     * @var string
     */
    private $addFee;

    /**
     * @var float
     */
    private $codAmount;

    /**
     * @return string
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * @param string $active
     * @return ServiceconfigurationCashOnDelivery
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
    public function getAddFee()
    {
        return $this->addFee;
    }

    /**
     * @param string $addFee
     * @return ServiceconfigurationCashOnDelivery
     */
    public function withAddFee($addFee)
    {
        $new = clone $this;
        $new->addFee = $addFee;

        return $new;
    }

    /**
     * @return float
     */
    public function getCodAmount()
    {
        return $this->codAmount;
    }

    /**
     * @param float $codAmount
     * @return ServiceconfigurationCashOnDelivery
     */
    public function withCodAmount($codAmount)
    {
        $new = clone $this;
        $new->codAmount = $codAmount;

        return $new;
    }


}

