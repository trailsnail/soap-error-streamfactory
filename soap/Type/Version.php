<?php

namespace dhl\Type;

use Phpro\SoapClient\Type\RequestInterface;

class Version implements RequestInterface
{

    /**
     * @var string
     */
    private $majorRelease;

    /**
     * @var string
     */
    private $minorRelease;

    /**
     * @var string
     */
    private $build;

    /**
     * Constructor
     *
     * @var string $majorRelease
     * @var string $minorRelease
     * @var string $build
     */
    public function __construct($majorRelease, $minorRelease, $build)
    {
        $this->majorRelease = $majorRelease;
        $this->minorRelease = $minorRelease;
        $this->build = $build;
    }

    /**
     * @return string
     */
    public function getMajorRelease()
    {
        return $this->majorRelease;
    }

    /**
     * @param string $majorRelease
     * @return Version
     */
    public function withMajorRelease($majorRelease)
    {
        $new = clone $this;
        $new->majorRelease = $majorRelease;

        return $new;
    }

    /**
     * @return string
     */
    public function getMinorRelease()
    {
        return $this->minorRelease;
    }

    /**
     * @param string $minorRelease
     * @return Version
     */
    public function withMinorRelease($minorRelease)
    {
        $new = clone $this;
        $new->minorRelease = $minorRelease;

        return $new;
    }

    /**
     * @return string
     */
    public function getBuild()
    {
        return $this->build;
    }

    /**
     * @param string $build
     * @return Version
     */
    public function withBuild($build)
    {
        $new = clone $this;
        $new->build = $build;

        return $new;
    }


}

