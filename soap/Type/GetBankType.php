<?php

namespace blz\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetBankType implements RequestInterface
{

    /**
     * @var string
     */
    private $blz;

    /**
     * Constructor
     *
     * @var string $blz
     */
    public function __construct($blz)
    {
        $this->blz = $blz;
    }

    /**
     * @return string
     */
    public function getBlz()
    {
        return $this->blz;
    }

    /**
     * @param string $blz
     * @return GetBankType
     */
    public function withBlz($blz)
    {
        $new = clone $this;
        $new->blz = $blz;

        return $new;
    }


}

