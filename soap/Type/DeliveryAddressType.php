<?php

namespace dhl\Type;

class DeliveryAddressType
{

    /**
     * @var \dhl\Type\NativeAddressType
     */
    private $NativeAddress;

    /**
     * @var \dhl\Type\PostfilialeType
     */
    private $PostOffice;

    /**
     * @var \dhl\Type\PackStationType
     */
    private $PackStation;

    /**
     * @var string
     */
    private $streetNameCode;

    /**
     * @var string
     */
    private $streetNumberCode;

    /**
     * @return \dhl\Type\NativeAddressType
     */
    public function getNativeAddress()
    {
        return $this->NativeAddress;
    }

    /**
     * @param \dhl\Type\NativeAddressType $NativeAddress
     * @return DeliveryAddressType
     */
    public function withNativeAddress($NativeAddress)
    {
        $new = clone $this;
        $new->NativeAddress = $NativeAddress;

        return $new;
    }

    /**
     * @return \dhl\Type\PostfilialeType
     */
    public function getPostOffice()
    {
        return $this->PostOffice;
    }

    /**
     * @param \dhl\Type\PostfilialeType $PostOffice
     * @return DeliveryAddressType
     */
    public function withPostOffice($PostOffice)
    {
        $new = clone $this;
        $new->PostOffice = $PostOffice;

        return $new;
    }

    /**
     * @return \dhl\Type\PackStationType
     */
    public function getPackStation()
    {
        return $this->PackStation;
    }

    /**
     * @param \dhl\Type\PackStationType $PackStation
     * @return DeliveryAddressType
     */
    public function withPackStation($PackStation)
    {
        $new = clone $this;
        $new->PackStation = $PackStation;

        return $new;
    }

    /**
     * @return string
     */
    public function getStreetNameCode()
    {
        return $this->streetNameCode;
    }

    /**
     * @param string $streetNameCode
     * @return DeliveryAddressType
     */
    public function withStreetNameCode($streetNameCode)
    {
        $new = clone $this;
        $new->streetNameCode = $streetNameCode;

        return $new;
    }

    /**
     * @return string
     */
    public function getStreetNumberCode()
    {
        return $this->streetNumberCode;
    }

    /**
     * @param string $streetNumberCode
     * @return DeliveryAddressType
     */
    public function withStreetNumberCode($streetNumberCode)
    {
        $new = clone $this;
        $new->streetNumberCode = $streetNumberCode;

        return $new;
    }


}

