<?php

namespace dhl\Type;

class ParcelShopType
{

    /**
     * @var string
     */
    private $parcelShopNumber;

    /**
     * @var string
     */
    private $streetName;

    /**
     * @var string
     */
    private $streetNumber;

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
    private $ParcelShopNumber;

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
    public function getStreetName()
    {
        return $this->streetName;
    }

    /**
     * @param string $streetName
     * @return ParcelShopType
     */
    public function withStreetName($streetName)
    {
        $new = clone $this;
        $new->streetName = $streetName;

        return $new;
    }

    /**
     * @return string
     */
    public function getStreetNumber()
    {
        return $this->streetNumber;
    }

    /**
     * @param string $streetNumber
     * @return ParcelShopType
     */
    public function withStreetNumber($streetNumber)
    {
        $new = clone $this;
        $new->streetNumber = $streetNumber;

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
     * @return ParcelShopType
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
    public function getParcelShopNumber()
    {
        return $this->ParcelShopNumber;
    }

    /**
     * @param string $ParcelShopNumber
     * @return ParcelShopType
     */
    public function withParcelShopNumber($ParcelShopNumber)
    {
        $new = clone $this;
        $new->ParcelShopNumber = $ParcelShopNumber;

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
     * @return ParcelShopType
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
     * @return ParcelShopType
     */
    public function withCity($City)
    {
        $new = clone $this;
        $new->City = $City;

        return $new;
    }


}

