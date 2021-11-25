<?php

namespace dhl\Type;

class ServiceconfigurationType
{

    /**
     * @var string
     */
    private $active;

    /**
     * @var string
     */
    private $Type;

    /**
     * @return string
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * @param string $active
     * @return ServiceconfigurationType
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
    public function getType()
    {
        return $this->Type;
    }

    /**
     * @param string $Type
     * @return ServiceconfigurationType
     */
    public function withType($Type)
    {
        $new = clone $this;
        $new->Type = $Type;

        return $new;
    }


}

