<?php

namespace dhl\Type;

class TimeFrame
{

    /**
     * @var string
     */
    private $from;

    /**
     * @var string
     */
    private $until;

    /**
     * @return string
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * @param string $from
     * @return TimeFrame
     */
    public function withFrom($from)
    {
        $new = clone $this;
        $new->from = $from;

        return $new;
    }

    /**
     * @return string
     */
    public function getUntil()
    {
        return $this->until;
    }

    /**
     * @param string $until
     * @return TimeFrame
     */
    public function withUntil($until)
    {
        $new = clone $this;
        $new->until = $until;

        return $new;
    }


}

