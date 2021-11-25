<?php

namespace dhl\Type;

class ServiceconfigurationDH
{

    /**
     * @var string
     */
    private $active;

    /**
     * @var string
     */
    private $Days;

    /**
     * @return string
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * @param string $active
     * @return ServiceconfigurationDH
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
    public function getDays()
    {
        return $this->Days;
    }

    /**
     * @param string $Days
     * @return ServiceconfigurationDH
     */
    public function withDays($Days)
    {
        $new = clone $this;
        $new->Days = $Days;

        return $new;
    }


}

