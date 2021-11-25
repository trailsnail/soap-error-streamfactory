<?php

namespace dhl\Type;

class ServiceconfigurationVisualAgeCheck
{

    /**
     * @var string
     */
    private $active;

    /**
     * @var string
     */
    private $type;

    /**
     * @return string
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * @param string $active
     * @return ServiceconfigurationVisualAgeCheck
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
        return $this->type;
    }

    /**
     * @param string $type
     * @return ServiceconfigurationVisualAgeCheck
     */
    public function withType($type)
    {
        $new = clone $this;
        $new->type = $type;

        return $new;
    }


}

