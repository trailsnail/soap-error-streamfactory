<?php

namespace dhl\Type;

class DrivingLicense
{

    /**
     * @var string
     */
    private $LicenseNumber;

    /**
     * @var string
     */
    private $Authority;

    /**
     * @return string
     */
    public function getLicenseNumber()
    {
        return $this->LicenseNumber;
    }

    /**
     * @param string $LicenseNumber
     * @return DrivingLicense
     */
    public function withLicenseNumber($LicenseNumber)
    {
        $new = clone $this;
        $new->LicenseNumber = $LicenseNumber;

        return $new;
    }

    /**
     * @return string
     */
    public function getAuthority()
    {
        return $this->Authority;
    }

    /**
     * @param string $Authority
     * @return DrivingLicense
     */
    public function withAuthority($Authority)
    {
        $new = clone $this;
        $new->Authority = $Authority;

        return $new;
    }


}

