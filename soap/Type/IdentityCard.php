<?php

namespace dhl\Type;

class IdentityCard
{

    /**
     * @var string
     */
    private $CardNumber;

    /**
     * @var string
     */
    private $CardAuthority;

    /**
     * @return string
     */
    public function getCardNumber()
    {
        return $this->CardNumber;
    }

    /**
     * @param string $CardNumber
     * @return IdentityCard
     */
    public function withCardNumber($CardNumber)
    {
        $new = clone $this;
        $new->CardNumber = $CardNumber;

        return $new;
    }

    /**
     * @return string
     */
    public function getCardAuthority()
    {
        return $this->CardAuthority;
    }

    /**
     * @param string $CardAuthority
     * @return IdentityCard
     */
    public function withCardAuthority($CardAuthority)
    {
        $new = clone $this;
        $new->CardAuthority = $CardAuthority;

        return $new;
    }


}

