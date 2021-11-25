<?php

namespace dhl\Type;

class ServiceconfigurationDeliveryTimeframe
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
     * @return ServiceconfigurationDeliveryTimeframe
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
     * @return ServiceconfigurationDeliveryTimeframe
     */
    public function withType($type)
    {
        $new = clone $this;
        $new->type = $type;

        return $new;
    }


}

