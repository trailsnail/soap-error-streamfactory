<?php

namespace dhl\Type;

class PostfilialeType
{

    /**
     * @var string
     */
    private $postfilialNumber;

    /**
     * @var string
     */
    private $postNumber;

    /**
     * @var string
     */
    private $zip;

    /**
     * @var string
     */
    private $city;

    /**
     * @var \dhl\Type\CountryType
     */
    private $Origin;

    /**
     * @var string
     */
    private $PostfilialNumber;

    /**
     * @var string
     */
    private $PostNumber;

    /**
     * @var string
     */
    private $Zip;

    /**
     * @var string
     */
    private $City;

    /**
     * @return \dhl\Type\CountryType
     */
    public function getOrigin()
    {
        return $this->Origin;
    }

    /**
     * @param \dhl\Type\CountryType $Origin
     * @return PostfilialeType
     */
    public function withOrigin($Origin)
    {
        $new = clone $this;
        $new->Origin = $Origin;

        return $new;
    }

    /**
     * @return string
     */
    public function getPostfilialNumber()
    {
        return $this->PostfilialNumber;
    }

    /**
     * @param string $PostfilialNumber
     * @return PostfilialeType
     */
    public function withPostfilialNumber($PostfilialNumber)
    {
        $new = clone $this;
        $new->PostfilialNumber = $PostfilialNumber;

        return $new;
    }

    /**
     * @return string
     */
    public function getPostNumber()
    {
        return $this->PostNumber;
    }

    /**
     * @param string $PostNumber
     * @return PostfilialeType
     */
    public function withPostNumber($PostNumber)
    {
        $new = clone $this;
        $new->PostNumber = $PostNumber;

        return $new;
    }

    /**
     * @return string
     */
    public function getZip()
    {
        return $this->Zip;
    }

    /**
     * @param string $Zip
     * @return PostfilialeType
     */
    public function withZip($Zip)
    {
        $new = clone $this;
        $new->Zip = $Zip;

        return $new;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->City;
    }

    /**
     * @param string $City
     * @return PostfilialeType
     */
    public function withCity($City)
    {
        $new = clone $this;
        $new->City = $City;

        return $new;
    }


}

