<?php

namespace dhl\Type;

class Shipment
{

    /**
     * @var \dhl\Type\ShipmentDetailsTypeType
     */
    private $ShipmentDetails;

    /**
     * @var \dhl\Type\ShipperType
     */
    private $Shipper;

    /**
     * @var string
     */
    private $ShipperReference;

    /**
     * @var \dhl\Type\ReceiverType
     */
    private $Receiver;

    /**
     * @var \dhl\Type\ShipperType
     */
    private $ReturnReceiver;

    /**
     * @var \dhl\Type\ExportDocumentType
     */
    private $ExportDocument;

    /**
     * @var string
     */
    private $feederSystem;

    /**
     * @return \dhl\Type\ShipmentDetailsTypeType
     */
    public function getShipmentDetails()
    {
        return $this->ShipmentDetails;
    }

    /**
     * @param \dhl\Type\ShipmentDetailsTypeType $ShipmentDetails
     * @return Shipment
     */
    public function withShipmentDetails($ShipmentDetails)
    {
        $new = clone $this;
        $new->ShipmentDetails = $ShipmentDetails;

        return $new;
    }

    /**
     * @return \dhl\Type\ShipperType
     */
    public function getShipper()
    {
        return $this->Shipper;
    }

    /**
     * @param \dhl\Type\ShipperType $Shipper
     * @return Shipment
     */
    public function withShipper($Shipper)
    {
        $new = clone $this;
        $new->Shipper = $Shipper;

        return $new;
    }

    /**
     * @return string
     */
    public function getShipperReference()
    {
        return $this->ShipperReference;
    }

    /**
     * @param string $ShipperReference
     * @return Shipment
     */
    public function withShipperReference($ShipperReference)
    {
        $new = clone $this;
        $new->ShipperReference = $ShipperReference;

        return $new;
    }

    /**
     * @return \dhl\Type\ReceiverType
     */
    public function getReceiver()
    {
        return $this->Receiver;
    }

    /**
     * @param \dhl\Type\ReceiverType $Receiver
     * @return Shipment
     */
    public function withReceiver($Receiver)
    {
        $new = clone $this;
        $new->Receiver = $Receiver;

        return $new;
    }

    /**
     * @return \dhl\Type\ShipperType
     */
    public function getReturnReceiver()
    {
        return $this->ReturnReceiver;
    }

    /**
     * @param \dhl\Type\ShipperType $ReturnReceiver
     * @return Shipment
     */
    public function withReturnReceiver($ReturnReceiver)
    {
        $new = clone $this;
        $new->ReturnReceiver = $ReturnReceiver;

        return $new;
    }

    /**
     * @return \dhl\Type\ExportDocumentType
     */
    public function getExportDocument()
    {
        return $this->ExportDocument;
    }

    /**
     * @param \dhl\Type\ExportDocumentType $ExportDocument
     * @return Shipment
     */
    public function withExportDocument($ExportDocument)
    {
        $new = clone $this;
        $new->ExportDocument = $ExportDocument;

        return $new;
    }

    /**
     * @return string
     */
    public function getFeederSystem()
    {
        return $this->feederSystem;
    }

    /**
     * @param string $feederSystem
     * @return Shipment
     */
    public function withFeederSystem($feederSystem)
    {
        $new = clone $this;
        $new->feederSystem = $feederSystem;

        return $new;
    }


}

