<?php

namespace dhl\Type;

class ShipmentDetailsTypeType  extends ShipmentDetailsType
{

    /**
     * @var \dhl\Type\ShipmentItemType
     */
    private $ShipmentItem;

    /**
     * @var \dhl\Type\ShipmentService
     */
    private $Service;

    /**
     * @var \dhl\Type\ShipmentNotificationType
     */
    private $Notification;

    /**
     * @var \dhl\Type\BankType
     */
    private $BankData;

    /**
     * @return \dhl\Type\ShipmentItemType
     */
    public function getShipmentItem()
    {
        return $this->ShipmentItem;
    }

    /**
     * @param \dhl\Type\ShipmentItemType $ShipmentItem
     * @return ShipmentDetailsTypeType
     */
    public function withShipmentItem($ShipmentItem)
    {
        $new = clone $this;
        $new->ShipmentItem = $ShipmentItem;

        return $new;
    }

    /**
     * @return \dhl\Type\ShipmentService
     */
    public function getService()
    {
        return $this->Service;
    }

    /**
     * @param \dhl\Type\ShipmentService $Service
     * @return ShipmentDetailsTypeType
     */
    public function withService($Service)
    {
        $new = clone $this;
        $new->Service = $Service;

        return $new;
    }

    /**
     * @return \dhl\Type\ShipmentNotificationType
     */
    public function getNotification()
    {
        return $this->Notification;
    }

    /**
     * @param \dhl\Type\ShipmentNotificationType $Notification
     * @return ShipmentDetailsTypeType
     */
    public function withNotification($Notification)
    {
        $new = clone $this;
        $new->Notification = $Notification;

        return $new;
    }

    /**
     * @return \dhl\Type\BankType
     */
    public function getBankData()
    {
        return $this->BankData;
    }

    /**
     * @param \dhl\Type\BankType $BankData
     * @return ShipmentDetailsTypeType
     */
    public function withBankData($BankData)
    {
        $new = clone $this;
        $new->BankData = $BankData;

        return $new;
    }


}

