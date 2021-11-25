<?php

namespace dhl\Type;

class PackstationType
{

    /**
     * @var string
     */
    private $postNumber;

    /**
     * @var string
     */
    private $packstationNumber;

    /**
     * @var string
     */
    private $zip;

    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $province;

    /**
     * @var \dhl\Type\CountryType
     */
    private $Origin;

    /**
     * @var string
     */
    private $PackstationNumber;

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
     * @return string
     */
    public function getProvince()
    {
        return $this->province;
    }

    /**
     * @param string $province
     * @return PackStationType
     */
    public function withProvince($province)
    {
        $new = clone $this;
        $new->province = $province;

        return $new;
    }

    /**
     * @return \dhl\Type\CountryType
     */
    public function getOrigin()
    {
        return $this->Origin;
    }

    /**
     * @param \dhl\Type\CountryType $Origin
     * @return PackStationType
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
    public function getPackstationNumber()
    {
        return $this->PackstationNumber;
    }

    /**
     * @param string $PackstationNumber
     * @return PackstationType
     */
    public function withPackstationNumber($PackstationNumber)
    {
        $new = clone $this;
        $new->PackstationNumber = $PackstationNumber;

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
     * @return PackstationType
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
     * @return PackstationType
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
     * @return PackstationType
     */
    public function withCity($City)
    {
        $new = clone $this;
        $new->City = $City;

        return $new;
    }
}


