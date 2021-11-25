<?php

namespace dhl\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetManifestRequest implements RequestInterface
{

    /**
     * @var \dhl\Type\Version
     */
    private $Version;

    /**
     * @var string
     */
    private $manifestDate;

    /**
     * Constructor
     *
     * @var \dhl\Type\Version $Version
     * @var string $manifestDate
     */
    public function __construct($Version, $manifestDate)
    {
        $this->Version = $Version;
        $this->manifestDate = $manifestDate;
    }

    /**
     * @return \dhl\Type\Version
     */
    public function getVersion()
    {
        return $this->Version;
    }

    /**
     * @param \dhl\Type\Version $Version
     * @return GetManifestRequest
     */
    public function withVersion($Version)
    {
        $new = clone $this;
        $new->Version = $Version;

        return $new;
    }

    /**
     * @return string
     */
    public function getManifestDate()
    {
        return $this->manifestDate;
    }

    /**
     * @param string $manifestDate
     * @return GetManifestRequest
     */
    public function withManifestDate($manifestDate)
    {
        $new = clone $this;
        $new->manifestDate = $manifestDate;

        return $new;
    }


}

