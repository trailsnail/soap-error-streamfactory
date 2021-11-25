<?php

namespace dhl\Type;

class IdentityData
{

    /**
     * @var \dhl\Type\DrivingLicense
     */
    private $DrivingLicense;

    /**
     * @var \dhl\Type\IdentityCard
     */
    private $IdentityCard;

    /**
     * @var \dhl\Type\BankCard
     */
    private $BankCard;

    /**
     * @return \dhl\Type\DrivingLicense
     */
    public function getDrivingLicense()
    {
        return $this->DrivingLicense;
    }

    /**
     * @param \dhl\Type\DrivingLicense $DrivingLicense
     * @return IdentityData
     */
    public function withDrivingLicense($DrivingLicense)
    {
        $new = clone $this;
        $new->DrivingLicense = $DrivingLicense;

        return $new;
    }

    /**
     * @return \dhl\Type\IdentityCard
     */
    public function getIdentityCard()
    {
        return $this->IdentityCard;
    }

    /**
     * @param \dhl\Type\IdentityCard $IdentityCard
     * @return IdentityData
     */
    public function withIdentityCard($IdentityCard)
    {
        $new = clone $this;
        $new->IdentityCard = $IdentityCard;

        return $new;
    }

    /**
     * @return \dhl\Type\BankCard
     */
    public function getBankCard()
    {
        return $this->BankCard;
    }

    /**
     * @param \dhl\Type\BankCard $BankCard
     * @return IdentityData
     */
    public function withBankCard($BankCard)
    {
        $new = clone $this;
        $new->BankCard = $BankCard;

        return $new;
    }


}

