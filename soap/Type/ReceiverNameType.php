<?php

namespace dhl\Type;

class ReceiverNameType
{

    /**
     * @var string
     */
    private $name;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return ReceiverNameType
     */
    public function withName($name)
    {
        $new = clone $this;
        $new->name = $name;

        return $new;
    }


}

