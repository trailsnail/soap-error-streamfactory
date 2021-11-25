<?php

namespace dhl\Type;

class ServiceconfigurationIC
{

    /**
     * @var \dhl\Type\Ident
     */
    private $Ident;

    /**
     * @var string
     */
    private $active;

    /**
     * @return \dhl\Type\Ident
     */
    public function getIdent()
    {
        return $this->Ident;
    }

    /**
     * @param \dhl\Type\Ident $Ident
     * @return ServiceconfigurationIC
     */
    public function withIdent($Ident)
    {
        $new = clone $this;
        $new->Ident = $Ident;

        return $new;
    }

    /**
     * @return string
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * @param string $active
     * @return ServiceconfigurationIC
     */
    public function withActive($active)
    {
        $new = clone $this;
        $new->active = $active;

        return $new;
    }


}

