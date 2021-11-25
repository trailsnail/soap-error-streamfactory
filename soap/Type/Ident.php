<?php

namespace dhl\Type;

class Ident
{

    /**
     * @var string
     */
    private $FirstName;

    /**
     * @var string
     */
    private $LastName;

    /**
     * @var string
     */
    private $Street;

    /**
     * @var string
     */
    private $HouseNumber;

    /**
     * @var string
     */
    private $Postcode;

    /**
     * @var string
     */
    private $City;

    /**
     * @var string
     */
    private $DateOfBirth;

    /**
     * @var string
     */
    private $Nationality;

    /**
     * @var string
     */
    private $surname;

    /**
     * @var string
     */
    private $givenName;

    /**
     * @var string
     */
    private $dateOfBirth;

    /**
     * @var string
     */
    private $minimumAge;

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->FirstName;
    }

    /**
     * @param string $FirstName
     * @return Ident
     */
    public function withFirstName($FirstName)
    {
        $new = clone $this;
        $new->FirstName = $FirstName;

        return $new;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->LastName;
    }

    /**
     * @param string $LastName
     * @return Ident
     */
    public function withLastName($LastName)
    {
        $new = clone $this;
        $new->LastName = $LastName;

        return $new;
    }

    /**
     * @return string
     */
    public function getStreet()
    {
        return $this->Street;
    }

    /**
     * @param string $Street
     * @return Ident
     */
    public function withStreet($Street)
    {
        $new = clone $this;
        $new->Street = $Street;

        return $new;
    }

    /**
     * @return string
     */
    public function getHouseNumber()
    {
        return $this->HouseNumber;
    }

    /**
     * @param string $HouseNumber
     * @return Ident
     */
    public function withHouseNumber($HouseNumber)
    {
        $new = clone $this;
        $new->HouseNumber = $HouseNumber;

        return $new;
    }

    /**
     * @return string
     */
    public function getPostcode()
    {
        return $this->Postcode;
    }

    /**
     * @param string $Postcode
     * @return Ident
     */
    public function withPostcode($Postcode)
    {
        $new = clone $this;
        $new->Postcode = $Postcode;

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
     * @return Ident
     */
    public function withCity($City)
    {
        $new = clone $this;
        $new->City = $City;

        return $new;
    }

    /**
     * @return string
     */
    public function getNationality()
    {
        return $this->Nationality;
    }

    /**
     * @param string $Nationality
     * @return Ident
     */
    public function withNationality($Nationality)
    {
        $new = clone $this;
        $new->Nationality = $Nationality;

        return $new;
    }

    /**
     * @return string
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * @param string $surname
     * @return Ident
     */
    public function withSurname($surname)
    {
        $new = clone $this;
        $new->surname = $surname;

        return $new;
    }

    /**
     * @return string
     */
    public function getGivenName()
    {
        return $this->givenName;
    }

    /**
     * @param string $givenName
     * @return Ident
     */
    public function withGivenName($givenName)
    {
        $new = clone $this;
        $new->givenName = $givenName;

        return $new;
    }

    /**
     * @return string
     */
    public function getDateOfBirth()
    {
        return $this->dateOfBirth;
    }

    /**
     * @param string $dateOfBirth
     * @return Ident
     */
    public function withDateOfBirth($dateOfBirth)
    {
        $new = clone $this;
        $new->dateOfBirth = $dateOfBirth;

        return $new;
    }

    /**
     * @return string
     */
    public function getMinimumAge()
    {
        return $this->minimumAge;
    }

    /**
     * @param string $minimumAge
     * @return Ident
     */
    public function withMinimumAge($minimumAge)
    {
        $new = clone $this;
        $new->minimumAge = $minimumAge;

        return $new;
    }


}

