<?php

namespace dhl\Type;

class ShipmentDetailsType
{

    /**
     * @var string
     */
    protected $product;

    /**
     * @var string
     */
    protected $accountNumber;

    /**
     * @var string
     */
    protected $customerReference;

    /**
     * @var string
     */
    protected $shipmentDate;

    /**
     * @var string
     */
    protected $costCentre;

    /**
     * @var string
     */
    protected $returnShipmentAccountNumber;

    /**
     * @var string
     */
    protected $returnShipmentReference;

    /**
     * @return string
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @param string $product
     * @return ShipmentDetailsType
     */
    public function withProduct($product)
    {
        $new = clone $this;
        $new->product = $product;

        return $new;
    }

    /**
     * @return string
     */
    public function getAccountNumber()
    {
        return $this->accountNumber;
    }

    /**
     * @param string $accountNumber
     * @return ShipmentDetailsType
     */
    public function withAccountNumber($accountNumber)
    {
        $new = clone $this;
        $new->accountNumber = $accountNumber;

        return $new;
    }

    /**
     * @return string
     */
    public function getCustomerReference()
    {
        return $this->customerReference;
    }

    /**
     * @param string $customerReference
     * @return ShipmentDetailsType
     */
    public function withCustomerReference($customerReference)
    {
        $new = clone $this;
        $new->customerReference = $customerReference;

        return $new;
    }

    /**
     * @return string
     */
    public function getShipmentDate()
    {
        return $this->shipmentDate;
    }

    /**
     * @param string $shipmentDate
     * @return ShipmentDetailsType
     */
    public function withShipmentDate($shipmentDate)
    {
        $new = clone $this;
        $new->shipmentDate = $shipmentDate;

        return $new;
    }

    /**
     * @return string
     */
    public function getCostCentre()
    {
        return $this->costCentre;
    }

    /**
     * @param string $costCentre
     * @return ShipmentDetailsType
     */
    public function withCostCentre($costCentre)
    {
        $new = clone $this;
        $new->costCentre = $costCentre;

        return $new;
    }

    /**
     * @return string
     */
    public function getReturnShipmentAccountNumber()
    {
        return $this->returnShipmentAccountNumber;
    }

    /**
     * @param string $returnShipmentAccountNumber
     * @return ShipmentDetailsType
     */
    public function withReturnShipmentAccountNumber($returnShipmentAccountNumber)
    {
        $new = clone $this;
        $new->returnShipmentAccountNumber = $returnShipmentAccountNumber;

        return $new;
    }

    /**
     * @return string
     */
    public function getReturnShipmentReference()
    {
        return $this->returnShipmentReference;
    }

    /**
     * @param string $returnShipmentReference
     * @return ShipmentDetailsType
     */
    public function withReturnShipmentReference($returnShipmentReference)
    {
        $new = clone $this;
        $new->returnShipmentReference = $returnShipmentReference;

        return $new;
    }


}

