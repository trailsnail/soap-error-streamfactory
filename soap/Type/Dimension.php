<?php

namespace dhl\Type;

class Dimension
{

    /**
     * @var int
     */
    private $length;

    /**
     * @var int
     */
    private $width;

    /**
     * @var int
     */
    private $height;

    /**
     * @var string
     */
    private $unit;

    /**
     * @return int
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * @param int $length
     * @return Dimension
     */
    public function withLength($length)
    {
        $new = clone $this;
        $new->length = $length;

        return $new;
    }

    /**
     * @return int
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param int $width
     * @return Dimension
     */
    public function withWidth($width)
    {
        $new = clone $this;
        $new->width = $width;

        return $new;
    }

    /**
     * @return int
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param int $height
     * @return Dimension
     */
    public function withHeight($height)
    {
        $new = clone $this;
        $new->height = $height;

        return $new;
    }

    /**
     * @return string
     */
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * @param string $unit
     * @return Dimension
     */
    public function withUnit($unit)
    {
        $new = clone $this;
        $new->unit = $unit;

        return $new;
    }


}

