<?php

namespace dhl\Type;

class ExportDocPosition
{

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $countryCodeOrigin;

    /**
     * @var string
     */
    private $customsTariffNumber;

    /**
     * @var int
     */
    private $amount;

    /**
     * @var float
     */
    private $netWeightInKG;

    /**
     * @var float
     */
    private $customsValue;

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return ExportDocPosition
     */
    public function withDescription($description)
    {
        $new = clone $this;
        $new->description = $description;

        return $new;
    }

    /**
     * @return string
     */
    public function getCountryCodeOrigin()
    {
        return $this->countryCodeOrigin;
    }

    /**
     * @param string $countryCodeOrigin
     * @return ExportDocPosition
     */
    public function withCountryCodeOrigin($countryCodeOrigin)
    {
        $new = clone $this;
        $new->countryCodeOrigin = $countryCodeOrigin;

        return $new;
    }

    /**
     * @return string
     */
    public function getCustomsTariffNumber()
    {
        return $this->customsTariffNumber;
    }

    /**
     * @param string $customsTariffNumber
     * @return ExportDocPosition
     */
    public function withCustomsTariffNumber($customsTariffNumber)
    {
        $new = clone $this;
        $new->customsTariffNumber = $customsTariffNumber;

        return $new;
    }

    /**
     * @return int
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param int $amount
     * @return ExportDocPosition
     */
    public function withAmount($amount)
    {
        $new = clone $this;
        $new->amount = $amount;

        return $new;
    }

    /**
     * @return float
     */
    public function getNetWeightInKG()
    {
        return $this->netWeightInKG;
    }

    /**
     * @param float $netWeightInKG
     * @return ExportDocPosition
     */
    public function withNetWeightInKG($netWeightInKG)
    {
        $new = clone $this;
        $new->netWeightInKG = $netWeightInKG;

        return $new;
    }

    /**
     * @return float
     */
    public function getCustomsValue()
    {
        return $this->customsValue;
    }

    /**
     * @param float $customsValue
     * @return ExportDocPosition
     */
    public function withCustomsValue($customsValue)
    {
        $new = clone $this;
        $new->customsValue = $customsValue;

        return $new;
    }


}

