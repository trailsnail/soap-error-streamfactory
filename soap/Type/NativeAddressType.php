<?php

namespace dhl\Type;

class NativeAddressType
{

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
    private $addressAddition;

    /**
     * @var string
     */
    private $dispatchingInformation;

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
     * @return string
     */
    public function getStreetName()
    {
        return $this->streetName;
    }

    /**
     * @param string $streetName
     * @return NativeAddressType
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
     * @return NativeAddressType
     */
    public function withStreetNumber($streetNumber)
    {
        $new = clone $this;
        $new->streetNumber = $streetNumber;

        return $new;
    }

    /**
     * @return string
     */
    public function getAddressAddition()
    {
        return $this->addressAddition;
    }

    /**
     * @param string $addressAddition
     * @return NativeAddressType
     */
    public function withAddressAddition($addressAddition)
    {
        $new = clone $this;
        $new->addressAddition = $addressAddition;

        return $new;
    }

    /**
     * @return string
     */
    public function getDispatchingInformation()
    {
        return $this->dispatchingInformation;
    }

    /**
     * @param string $dispatchingInformation
     * @return NativeAddressType
     */
    public function withDispatchingInformation($dispatchingInformation)
    {
        $new = clone $this;
        $new->dispatchingInformation = $dispatchingInformation;

        return $new;
    }

    /**
     * @return string
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * @param string $zip
     * @return NativeAddressType
     */
    public function withZip($zip)
    {
        $new = clone $this;
        $new->zip = $zip;

        return $new;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     * @return NativeAddressType
     */
    public function withCity($city)
    {
        $new = clone $this;
        $new->city = $city;

        return $new;
    }

    /**
     * @return string
     */
    public function getProvince()
    {
        return $this->province;
    }

    /**
     * @param string $province
     * @return NativeAddressType
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
     * @return NativeAddressType
     */
    public function withOrigin($Origin)
    {
        $new = clone $this;
        $new->Origin = $Origin;

        return $new;
    }


}

