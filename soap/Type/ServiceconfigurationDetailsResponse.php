<?php

namespace dhl\Type;

class ServiceconfigurationDetailsResponse
{

    /**
     * @var string
     */
    private $details;

    /**
     * @return string
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * @param string $details
     * @return ServiceconfigurationDetailsResponse
     */
    public function withDetails($details)
    {
        $new = clone $this;
        $new->details = $details;

        return $new;
    }


}

