<?php

namespace dhl\Type;

class PickupDetailsType
{

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
     * @return string
     */
    public function getPickupDate()
    {
        return $this->PickupDate;
    }

    /**
     * @param string $PickupDate
     * @return PickupDetailsType
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
     * @return PickupDetailsType
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
     * @return PickupDetailsType
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
     * @return PickupDetailsType
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
     * @return PickupDetailsType
     */
    public function withPickupLocation($PickupLocation)
    {
        $new = clone $this;
        $new->PickupLocation = $PickupLocation;

        return $new;
    }


}

