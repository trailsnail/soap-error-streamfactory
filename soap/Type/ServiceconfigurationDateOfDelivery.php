<?php

namespace dhl\Type;

class ServiceconfigurationDateOfDelivery
{

    /**
     * @var string
     */
    private $active;

    /**
     * @var string
     */
    private $details;

    /**
     * @return string
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * @param string $active
     * @return ServiceconfigurationDateOfDelivery
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
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * @param string $details
     * @return ServiceconfigurationDateOfDelivery
     */
    public function withDetails($details)
    {
        $new = clone $this;
        $new->details = $details;

        return $new;
    }


}

