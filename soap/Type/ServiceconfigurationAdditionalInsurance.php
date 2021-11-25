<?php

namespace dhl\Type;

class ServiceconfigurationAdditionalInsurance
{

    /**
     * @var string
     */
    private $active;

    /**
     * @var float
     */
    private $insuranceAmount;

    /**
     * @return string
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * @param string $active
     * @return ServiceconfigurationAdditionalInsurance
     */
    public function withActive($active)
    {
        $new = clone $this;
        $new->active = $active;

        return $new;
    }

    /**
     * @return float
     */
    public function getInsuranceAmount()
    {
        return $this->insuranceAmount;
    }

    /**
     * @param float $insuranceAmount
     * @return ServiceconfigurationAdditionalInsurance
     */
    public function withInsuranceAmount($insuranceAmount)
    {
        $new = clone $this;
        $new->insuranceAmount = $insuranceAmount;

        return $new;
    }


}

