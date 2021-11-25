<?php

namespace dhl\Type;

class PickupBookingInformationType
{

    /**
     * @var string
     */
    private $Account;

    /**
     * @var string
     */
    private $PickupDate;

    /**
     * @var string
     */
    private $ReadyByTime;

    /**
     * @var string
     */
    private $ClosingTime;

    /**
     * @var string
     */
    private $Remark;

    /**
     * @var string
     */
    private $PickupLocation;

    /**
     * @var int
     */
    private $AmountOfPieces;

    /**
     * @var int
     */
    private $AmountOfPallets;

    /**
     * @var float
     */
    private $WeightInKG;

    /**
     * @var int
     */
    private $CountOfShipments;

    /**
     * @var float
     */
    private $TotalVolumeWeight;

    /**
     * @var float
     */
    private $MaxLengthInCM;

    /**
     * @var float
     */
    private $MaxWidthInCM;

    /**
     * @var float
     */
    private $MaxHeightInCM;

    /**
     * @return string
     */
    public function getAccount()
    {
        return $this->Account;
    }

    /**
     * @param string $Account
     * @return PickupBookingInformationType
     */
    public function withAccount($Account)
    {
        $new = clone $this;
        $new->Account = $Account;

        return $new;
    }

    /**
     * @return string
     */
    public function getPickupDate()
    {
        return $this->PickupDate;
    }

    /**
     * @param string $PickupDate
     * @return PickupBookingInformationType
     */
    public function withPickupDate($PickupDate)
    {
        $new = clone $this;
        $new->PickupDate = $PickupDate;

        return $new;
    }

    /**
     * @return string
     */
    public function getReadyByTime()
    {
        return $this->ReadyByTime;
    }

    /**
     * @param string $ReadyByTime
     * @return PickupBookingInformationType
     */
    public function withReadyByTime($ReadyByTime)
    {
        $new = clone $this;
        $new->ReadyByTime = $ReadyByTime;

        return $new;
    }

    /**
     * @return string
     */
    public function getClosingTime()
    {
        return $this->ClosingTime;
    }

    /**
     * @param string $ClosingTime
     * @return PickupBookingInformationType
     */
    public function withClosingTime($ClosingTime)
    {
        $new = clone $this;
        $new->ClosingTime = $ClosingTime;

        return $new;
    }

    /**
     * @return string
     */
    public function getRemark()
    {
        return $this->Remark;
    }

    /**
     * @param string $Remark
     * @return PickupBookingInformationType
     */
    public function withRemark($Remark)
    {
        $new = clone $this;
        $new->Remark = $Remark;

        return $new;
    }

    /**
     * @return string
     */
    public function getPickupLocation()
    {
        return $this->PickupLocation;
    }

    /**
     * @param string $PickupLocation
     * @return PickupBookingInformationType
     */
    public function withPickupLocation($PickupLocation)
    {
        $new = clone $this;
        $new->PickupLocation = $PickupLocation;

        return $new;
    }

    /**
     * @return int
     */
    public function getAmountOfPieces()
    {
        return $this->AmountOfPieces;
    }

    /**
     * @param int $AmountOfPieces
     * @return PickupBookingInformationType
     */
    public function withAmountOfPieces($AmountOfPieces)
    {
        $new = clone $this;
        $new->AmountOfPieces = $AmountOfPieces;

        return $new;
    }

    /**
     * @return int
     */
    public function getAmountOfPallets()
    {
        return $this->AmountOfPallets;
    }

    /**
     * @param int $AmountOfPallets
     * @return PickupBookingInformationType
     */
    public function withAmountOfPallets($AmountOfPallets)
    {
        $new = clone $this;
        $new->AmountOfPallets = $AmountOfPallets;

        return $new;
    }

    /**
     * @return float
     */
    public function getWeightInKG()
    {
        return $this->WeightInKG;
    }

    /**
     * @param float $WeightInKG
     * @return PickupBookingInformationType
     */
    public function withWeightInKG($WeightInKG)
    {
        $new = clone $this;
        $new->WeightInKG = $WeightInKG;

        return $new;
    }

    /**
     * @return int
     */
    public function getCountOfShipments()
    {
        return $this->CountOfShipments;
    }

    /**
     * @param int $CountOfShipments
     * @return PickupBookingInformationType
     */
    public function withCountOfShipments($CountOfShipments)
    {
        $new = clone $this;
        $new->CountOfShipments = $CountOfShipments;

        return $new;
    }

    /**
     * @return float
     */
    public function getTotalVolumeWeight()
    {
        return $this->TotalVolumeWeight;
    }

    /**
     * @param float $TotalVolumeWeight
     * @return PickupBookingInformationType
     */
    public function withTotalVolumeWeight($TotalVolumeWeight)
    {
        $new = clone $this;
        $new->TotalVolumeWeight = $TotalVolumeWeight;

        return $new;
    }

    /**
     * @return float
     */
    public function getMaxLengthInCM()
    {
        return $this->MaxLengthInCM;
    }

    /**
     * @param float $MaxLengthInCM
     * @return PickupBookingInformationType
     */
    public function withMaxLengthInCM($MaxLengthInCM)
    {
        $new = clone $this;
        $new->MaxLengthInCM = $MaxLengthInCM;

        return $new;
    }

    /**
     * @return float
     */
    public function getMaxWidthInCM()
    {
        return $this->MaxWidthInCM;
    }

    /**
     * @param float $MaxWidthInCM
     * @return PickupBookingInformationType
     */
    public function withMaxWidthInCM($MaxWidthInCM)
    {
        $new = clone $this;
        $new->MaxWidthInCM = $MaxWidthInCM;

        return $new;
    }

    /**
     * @return float
     */
    public function getMaxHeightInCM()
    {
        return $this->MaxHeightInCM;
    }

    /**
     * @param float $MaxHeightInCM
     * @return PickupBookingInformationType
     */
    public function withMaxHeightInCM($MaxHeightInCM)
    {
        $new = clone $this;
        $new->MaxHeightInCM = $MaxHeightInCM;

        return $new;
    }


}

