<?php

namespace dhl\Type;

class ShipmentService
{

    /**
     * @var \dhl\Type\ServiceconfigurationDateOfDelivery
     */
    private $DayOfDelivery;

    /**
     * @var \dhl\Type\ServiceconfigurationDeliveryTimeframe
     */
    private $DeliveryTimeframe;

    /**
     * @var \dhl\Type\ServiceconfigurationDeliveryTimeframe
     */
    private $PreferredTime;

    /**
     * @var \dhl\Type\ServiceconfigurationISR
     */
    private $IndividualSenderRequirement;

    /**
     * @var \dhl\Type\Serviceconfiguration
     */
    private $PackagingReturn;

    /**
     * @var \dhl\Type\Serviceconfiguration
     */
    private $ReturnImmediately;

    /**
     * @var \dhl\Type\Serviceconfiguration
     */
    private $NoticeOfNonDeliverability;

    /**
     * @var \dhl\Type\ServiceconfigurationShipmentHandling
     */
    private $ShipmentHandling;

    /**
     * @var \dhl\Type\ServiceconfigurationEndorsement
     */
    private $Endorsement;

    /**
     * @var \dhl\Type\ServiceconfigurationVisualAgeCheck
     */
    private $VisualCheckOfAge;

    /**
     * @var \dhl\Type\ServiceconfigurationDetails
     */
    private $PreferredLocation;

    /**
     * @var \dhl\Type\ServiceconfigurationDetails
     */
    private $PreferredNeighbour;

    /**
     * @var \dhl\Type\ServiceconfigurationDetails
     */
    private $PreferredDay;

    /**
     * @var \dhl\Type\Serviceconfiguration
     */
    private $GoGreen;

    /**
     * @var \dhl\Type\Serviceconfiguration
     */
    private $Perishables;

    /**
     * @var \dhl\Type\Serviceconfiguration
     */
    private $Personally;

    /**
     * @var \dhl\Type\Serviceconfiguration
     */
    private $NoNeighbourDelivery;

    /**
     * @var \dhl\Type\Serviceconfiguration
     */
    private $NamedPersonOnly;

    /**
     * @var \dhl\Type\Serviceconfiguration
     */
    private $ReturnReceipt;

    /**
     * @var \dhl\Type\Serviceconfiguration
     */
    private $Premium;

    /**
     * @var \dhl\Type\ServiceconfigurationCashOnDelivery
     */
    private $CashOnDelivery;

    /**
     * @var \dhl\Type\ServiceconfigurationAdditionalInsurance
     */
    private $AdditionalInsurance;

    /**
     * @var \dhl\Type\Serviceconfiguration
     */
    private $BulkyGoods;

    /**
     * @var \dhl\Type\ServiceconfigurationIC
     */
    private $IdentCheck;

    /**
     * @var \dhl\Type\ServiceconfigurationDetailsOptional
     */
    private $ParcelOutletRouting;

    /**
     * @return \dhl\Type\ServiceconfigurationDateOfDelivery
     */
    public function getDayOfDelivery()
    {
        return $this->DayOfDelivery;
    }

    /**
     * @param \dhl\Type\ServiceconfigurationDateOfDelivery $DayOfDelivery
     * @return ShipmentService
     */
    public function withDayOfDelivery($DayOfDelivery)
    {
        $new = clone $this;
        $new->DayOfDelivery = $DayOfDelivery;

        return $new;
    }

    /**
     * @return \dhl\Type\ServiceconfigurationDeliveryTimeframe
     */
    public function getDeliveryTimeframe()
    {
        return $this->DeliveryTimeframe;
    }

    /**
     * @param \dhl\Type\ServiceconfigurationDeliveryTimeframe $DeliveryTimeframe
     * @return ShipmentService
     */
    public function withDeliveryTimeframe($DeliveryTimeframe)
    {
        $new = clone $this;
        $new->DeliveryTimeframe = $DeliveryTimeframe;

        return $new;
    }

    /**
     * @return \dhl\Type\ServiceconfigurationDeliveryTimeframe
     */
    public function getPreferredTime()
    {
        return $this->PreferredTime;
    }

    /**
     * @param \dhl\Type\ServiceconfigurationDeliveryTimeframe $PreferredTime
     * @return ShipmentService
     */
    public function withPreferredTime($PreferredTime)
    {
        $new = clone $this;
        $new->PreferredTime = $PreferredTime;

        return $new;
    }

    /**
     * @return \dhl\Type\ServiceconfigurationISR
     */
    public function getIndividualSenderRequirement()
    {
        return $this->IndividualSenderRequirement;
    }

    /**
     * @param \dhl\Type\ServiceconfigurationISR $IndividualSenderRequirement
     * @return ShipmentService
     */
    public function withIndividualSenderRequirement($IndividualSenderRequirement)
    {
        $new = clone $this;
        $new->IndividualSenderRequirement = $IndividualSenderRequirement;

        return $new;
    }

    /**
     * @return \dhl\Type\Serviceconfiguration
     */
    public function getPackagingReturn()
    {
        return $this->PackagingReturn;
    }

    /**
     * @param \dhl\Type\Serviceconfiguration $PackagingReturn
     * @return ShipmentService
     */
    public function withPackagingReturn($PackagingReturn)
    {
        $new = clone $this;
        $new->PackagingReturn = $PackagingReturn;

        return $new;
    }

    /**
     * @return \dhl\Type\Serviceconfiguration
     */
    public function getReturnImmediately()
    {
        return $this->ReturnImmediately;
    }

    /**
     * @param \dhl\Type\Serviceconfiguration $ReturnImmediately
     * @return ShipmentService
     */
    public function withReturnImmediately($ReturnImmediately)
    {
        $new = clone $this;
        $new->ReturnImmediately = $ReturnImmediately;

        return $new;
    }

    /**
     * @return \dhl\Type\Serviceconfiguration
     */
    public function getNoticeOfNonDeliverability()
    {
        return $this->NoticeOfNonDeliverability;
    }

    /**
     * @param \dhl\Type\Serviceconfiguration $NoticeOfNonDeliverability
     * @return ShipmentService
     */
    public function withNoticeOfNonDeliverability($NoticeOfNonDeliverability)
    {
        $new = clone $this;
        $new->NoticeOfNonDeliverability = $NoticeOfNonDeliverability;

        return $new;
    }

    /**
     * @return \dhl\Type\ServiceconfigurationShipmentHandling
     */
    public function getShipmentHandling()
    {
        return $this->ShipmentHandling;
    }

    /**
     * @param \dhl\Type\ServiceconfigurationShipmentHandling $ShipmentHandling
     * @return ShipmentService
     */
    public function withShipmentHandling($ShipmentHandling)
    {
        $new = clone $this;
        $new->ShipmentHandling = $ShipmentHandling;

        return $new;
    }

    /**
     * @return \dhl\Type\ServiceconfigurationEndorsement
     */
    public function getEndorsement()
    {
        return $this->Endorsement;
    }

    /**
     * @param \dhl\Type\ServiceconfigurationEndorsement $Endorsement
     * @return ShipmentService
     */
    public function withEndorsement($Endorsement)
    {
        $new = clone $this;
        $new->Endorsement = $Endorsement;

        return $new;
    }

    /**
     * @return \dhl\Type\ServiceconfigurationVisualAgeCheck
     */
    public function getVisualCheckOfAge()
    {
        return $this->VisualCheckOfAge;
    }

    /**
     * @param \dhl\Type\ServiceconfigurationVisualAgeCheck $VisualCheckOfAge
     * @return ShipmentService
     */
    public function withVisualCheckOfAge($VisualCheckOfAge)
    {
        $new = clone $this;
        $new->VisualCheckOfAge = $VisualCheckOfAge;

        return $new;
    }

    /**
     * @return \dhl\Type\ServiceconfigurationDetails
     */
    public function getPreferredLocation()
    {
        return $this->PreferredLocation;
    }

    /**
     * @param \dhl\Type\ServiceconfigurationDetails $PreferredLocation
     * @return ShipmentService
     */
    public function withPreferredLocation($PreferredLocation)
    {
        $new = clone $this;
        $new->PreferredLocation = $PreferredLocation;

        return $new;
    }

    /**
     * @return \dhl\Type\ServiceconfigurationDetails
     */
    public function getPreferredNeighbour()
    {
        return $this->PreferredNeighbour;
    }

    /**
     * @param \dhl\Type\ServiceconfigurationDetails $PreferredNeighbour
     * @return ShipmentService
     */
    public function withPreferredNeighbour($PreferredNeighbour)
    {
        $new = clone $this;
        $new->PreferredNeighbour = $PreferredNeighbour;

        return $new;
    }

    /**
     * @return \dhl\Type\ServiceconfigurationDetails
     */
    public function getPreferredDay()
    {
        return $this->PreferredDay;
    }

    /**
     * @param \dhl\Type\ServiceconfigurationDetails $PreferredDay
     * @return ShipmentService
     */
    public function withPreferredDay($PreferredDay)
    {
        $new = clone $this;
        $new->PreferredDay = $PreferredDay;

        return $new;
    }

    /**
     * @return \dhl\Type\Serviceconfiguration
     */
    public function getGoGreen()
    {
        return $this->GoGreen;
    }

    /**
     * @param \dhl\Type\Serviceconfiguration $GoGreen
     * @return ShipmentService
     */
    public function withGoGreen($GoGreen)
    {
        $new = clone $this;
        $new->GoGreen = $GoGreen;

        return $new;
    }

    /**
     * @return \dhl\Type\Serviceconfiguration
     */
    public function getPerishables()
    {
        return $this->Perishables;
    }

    /**
     * @param \dhl\Type\Serviceconfiguration $Perishables
     * @return ShipmentService
     */
    public function withPerishables($Perishables)
    {
        $new = clone $this;
        $new->Perishables = $Perishables;

        return $new;
    }

    /**
     * @return \dhl\Type\Serviceconfiguration
     */
    public function getPersonally()
    {
        return $this->Personally;
    }

    /**
     * @param \dhl\Type\Serviceconfiguration $Personally
     * @return ShipmentService
     */
    public function withPersonally($Personally)
    {
        $new = clone $this;
        $new->Personally = $Personally;

        return $new;
    }

    /**
     * @return \dhl\Type\Serviceconfiguration
     */
    public function getNoNeighbourDelivery()
    {
        return $this->NoNeighbourDelivery;
    }

    /**
     * @param \dhl\Type\Serviceconfiguration $NoNeighbourDelivery
     * @return ShipmentService
     */
    public function withNoNeighbourDelivery($NoNeighbourDelivery)
    {
        $new = clone $this;
        $new->NoNeighbourDelivery = $NoNeighbourDelivery;

        return $new;
    }

    /**
     * @return \dhl\Type\Serviceconfiguration
     */
    public function getNamedPersonOnly()
    {
        return $this->NamedPersonOnly;
    }

    /**
     * @param \dhl\Type\Serviceconfiguration $NamedPersonOnly
     * @return ShipmentService
     */
    public function withNamedPersonOnly($NamedPersonOnly)
    {
        $new = clone $this;
        $new->NamedPersonOnly = $NamedPersonOnly;

        return $new;
    }

    /**
     * @return \dhl\Type\Serviceconfiguration
     */
    public function getReturnReceipt()
    {
        return $this->ReturnReceipt;
    }

    /**
     * @param \dhl\Type\Serviceconfiguration $ReturnReceipt
     * @return ShipmentService
     */
    public function withReturnReceipt($ReturnReceipt)
    {
        $new = clone $this;
        $new->ReturnReceipt = $ReturnReceipt;

        return $new;
    }

    /**
     * @return \dhl\Type\Serviceconfiguration
     */
    public function getPremium()
    {
        return $this->Premium;
    }

    /**
     * @param \dhl\Type\Serviceconfiguration $Premium
     * @return ShipmentService
     */
    public function withPremium($Premium)
    {
        $new = clone $this;
        $new->Premium = $Premium;

        return $new;
    }

    /**
     * @return \dhl\Type\ServiceconfigurationCashOnDelivery
     */
    public function getCashOnDelivery()
    {
        return $this->CashOnDelivery;
    }

    /**
     * @param \dhl\Type\ServiceconfigurationCashOnDelivery $CashOnDelivery
     * @return ShipmentService
     */
    public function withCashOnDelivery($CashOnDelivery)
    {
        $new = clone $this;
        $new->CashOnDelivery = $CashOnDelivery;

        return $new;
    }

    /**
     * @return \dhl\Type\ServiceconfigurationAdditionalInsurance
     */
    public function getAdditionalInsurance()
    {
        return $this->AdditionalInsurance;
    }

    /**
     * @param \dhl\Type\ServiceconfigurationAdditionalInsurance $AdditionalInsurance
     * @return ShipmentService
     */
    public function withAdditionalInsurance($AdditionalInsurance)
    {
        $new = clone $this;
        $new->AdditionalInsurance = $AdditionalInsurance;

        return $new;
    }

    /**
     * @return \dhl\Type\Serviceconfiguration
     */
    public function getBulkyGoods()
    {
        return $this->BulkyGoods;
    }

    /**
     * @param \dhl\Type\Serviceconfiguration $BulkyGoods
     * @return ShipmentService
     */
    public function withBulkyGoods($BulkyGoods)
    {
        $new = clone $this;
        $new->BulkyGoods = $BulkyGoods;

        return $new;
    }

    /**
     * @return \dhl\Type\ServiceconfigurationIC
     */
    public function getIdentCheck()
    {
        return $this->IdentCheck;
    }

    /**
     * @param \dhl\Type\ServiceconfigurationIC $IdentCheck
     * @return ShipmentService
     */
    public function withIdentCheck($IdentCheck)
    {
        $new = clone $this;
        $new->IdentCheck = $IdentCheck;

        return $new;
    }

    /**
     * @return \dhl\Type\ServiceconfigurationDetailsOptional
     */
    public function getParcelOutletRouting()
    {
        return $this->ParcelOutletRouting;
    }

    /**
     * @param \dhl\Type\ServiceconfigurationDetailsOptional $ParcelOutletRouting
     * @return ShipmentService
     */
    public function withParcelOutletRouting($ParcelOutletRouting)
    {
        $new = clone $this;
        $new->ParcelOutletRouting = $ParcelOutletRouting;

        return $new;
    }


}

