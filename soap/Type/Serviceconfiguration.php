<?php

namespace dhl\Type;

class Serviceconfiguration
{

    /**
     * @var string
     */
    private $active;

    /**
     * @return string
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * @param string $active
     * @return Serviceconfiguration
     */
    public function withActive($active)
    {
        $new = clone $this;
        $new->active = $active;

        return $new;
    }


}

