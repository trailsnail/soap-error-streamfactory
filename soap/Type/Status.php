<?php

namespace dhl\Type;

class Status
{

    /**
     * @var string
     */
    private $statuscode;

    /**
     * @var string
     */
    private $statusDescription;

    /**
     * @return string
     */
    public function getStatuscode()
    {
        return $this->statuscode;
    }

    /**
     * @param string $statuscode
     * @return Status
     */
    public function withStatuscode($statuscode)
    {
        $new = clone $this;
        $new->statuscode = $statuscode;

        return $new;
    }

    /**
     * @return string
     */
    public function getStatusDescription()
    {
        return $this->statusDescription;
    }

    /**
     * @param string $statusDescription
     * @return Status
     */
    public function withStatusDescription($statusDescription)
    {
        $new = clone $this;
        $new->statusDescription = $statusDescription;

        return $new;
    }


}

