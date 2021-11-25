<?php

namespace dhl\Type;

class NameType
{

    /**
     * @var string
     */
    private $name1;

    /**
     * @var string
     */
    private $name2;

    /**
     * @var string
     */
    private $name3;

    /**
     * @return string
     */
    public function getName1()
    {
        return $this->name1;
    }

    /**
     * @param string $name1
     * @return NameType
     */
    public function withName1($name1)
    {
        $new = clone $this;
        $new->name1 = $name1;

        return $new;
    }

    /**
     * @return string
     */
    public function getName2()
    {
        return $this->name2;
    }

    /**
     * @param string $name2
     * @return NameType
     */
    public function withName2($name2)
    {
        $new = clone $this;
        $new->name2 = $name2;

        return $new;
    }

    /**
     * @return string
     */
    public function getName3()
    {
        return $this->name3;
    }

    /**
     * @param string $name3
     * @return NameType
     */
    public function withName3($name3)
    {
        $new = clone $this;
        $new->name3 = $name3;

        return $new;
    }


}

