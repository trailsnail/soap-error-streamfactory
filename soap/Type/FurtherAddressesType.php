<?php

namespace dhl\Type;

class FurtherAddressesType
{

    /**
     * @var \dhl\Type\DeliveryAdress
     */
    private $DeliveryAdress;

    /**
     * @return \dhl\Type\DeliveryAdress
     */
    public function getDeliveryAdress()
    {
        return $this->DeliveryAdress;
    }

    /**
     * @param \dhl\Type\DeliveryAdress $DeliveryAdress
     * @return FurtherAddressesType
     */
    public function withDeliveryAdress($DeliveryAdress)
    {
        $new = clone $this;
        $new->DeliveryAdress = $DeliveryAdress;

        return $new;
    }


}

