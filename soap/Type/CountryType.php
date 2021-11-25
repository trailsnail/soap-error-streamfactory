<?php

namespace dhl\Type;

class CountryType
{

    /**
     * @var string
     */
    private $country;

    /**
     * @var string
     */
    private $countryISOCode;

    /**
     * @var string
     */
    private $state;

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $country
     * @return CountryType
     */
    public function withCountry($country)
    {
        $new = clone $this;
        $new->country = $country;

        return $new;
    }

    /**
     * @return string
     */
    public function getCountryISOCode()
    {
        return $this->countryISOCode;
    }

    /**
     * @param string $countryISOCode
     * @return CountryType
     */
    public function withCountryISOCode($countryISOCode)
    {
        $new = clone $this;
        $new->countryISOCode = $countryISOCode;

        return $new;
    }

    /**
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param string $state
     * @return CountryType
     */
    public function withState($state)
    {
        $new = clone $this;
        $new->state = $state;

        return $new;
    }


}

