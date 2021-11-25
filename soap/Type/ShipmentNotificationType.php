<?php

namespace dhl\Type;

class ShipmentNotificationType
{

    /**
     * @var string
     */
    private $recipientEmailAddress;

    /**
     * @return string
     */
    public function getRecipientEmailAddress()
    {
        return $this->recipientEmailAddress;
    }

    /**
     * @param string $recipientEmailAddress
     * @return ShipmentNotificationType
     */
    public function withRecipientEmailAddress($recipientEmailAddress)
    {
        $new = clone $this;
        $new->recipientEmailAddress = $recipientEmailAddress;

        return $new;
    }


}

