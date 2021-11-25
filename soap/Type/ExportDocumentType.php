<?php

namespace dhl\Type;

class ExportDocumentType
{

    /**
     * @var string
     */
    private $invoiceNumber;

    /**
     * @var string
     */
    private $exportType;

    /**
     * @var string
     */
    private $exportTypeDescription;

    /**
     * @var string
     */
    private $termsOfTrade;

    /**
     * @var string
     */
    private $placeOfCommital;

    /**
     * @var float
     */
    private $additionalFee;

    /**
     * @var string
     */
    private $permitNumber;

    /**
     * @var string
     */
    private $attestationNumber;

    /**
     * @var string
     */
    private $addresseesCustomsReference;

    /**
     * @var string
     */
    private $sendersCustomsReference;

    /**
     * @var \dhl\Type\Serviceconfiguration
     */
    private $WithElectronicExportNtfctn;

    /**
     * @var \dhl\Type\ExportDocPosition
     */
    private $ExportDocPosition;

    /**
     * @return string
     */
    public function getInvoiceNumber()
    {
        return $this->invoiceNumber;
    }

    /**
     * @param string $invoiceNumber
     * @return ExportDocumentType
     */
    public function withInvoiceNumber($invoiceNumber)
    {
        $new = clone $this;
        $new->invoiceNumber = $invoiceNumber;

        return $new;
    }

    /**
     * @return string
     */
    public function getExportType()
    {
        return $this->exportType;
    }

    /**
     * @param string $exportType
     * @return ExportDocumentType
     */
    public function withExportType($exportType)
    {
        $new = clone $this;
        $new->exportType = $exportType;

        return $new;
    }

    /**
     * @return string
     */
    public function getExportTypeDescription()
    {
        return $this->exportTypeDescription;
    }

    /**
     * @param string $exportTypeDescription
     * @return ExportDocumentType
     */
    public function withExportTypeDescription($exportTypeDescription)
    {
        $new = clone $this;
        $new->exportTypeDescription = $exportTypeDescription;

        return $new;
    }

    /**
     * @return string
     */
    public function getTermsOfTrade()
    {
        return $this->termsOfTrade;
    }

    /**
     * @param string $termsOfTrade
     * @return ExportDocumentType
     */
    public function withTermsOfTrade($termsOfTrade)
    {
        $new = clone $this;
        $new->termsOfTrade = $termsOfTrade;

        return $new;
    }

    /**
     * @return string
     */
    public function getPlaceOfCommital()
    {
        return $this->placeOfCommital;
    }

    /**
     * @param string $placeOfCommital
     * @return ExportDocumentType
     */
    public function withPlaceOfCommital($placeOfCommital)
    {
        $new = clone $this;
        $new->placeOfCommital = $placeOfCommital;

        return $new;
    }

    /**
     * @return float
     */
    public function getAdditionalFee()
    {
        return $this->additionalFee;
    }

    /**
     * @param float $additionalFee
     * @return ExportDocumentType
     */
    public function withAdditionalFee($additionalFee)
    {
        $new = clone $this;
        $new->additionalFee = $additionalFee;

        return $new;
    }

    /**
     * @return string
     */
    public function getPermitNumber()
    {
        return $this->permitNumber;
    }

    /**
     * @param string $permitNumber
     * @return ExportDocumentType
     */
    public function withPermitNumber($permitNumber)
    {
        $new = clone $this;
        $new->permitNumber = $permitNumber;

        return $new;
    }

    /**
     * @return string
     */
    public function getAttestationNumber()
    {
        return $this->attestationNumber;
    }

    /**
     * @param string $attestationNumber
     * @return ExportDocumentType
     */
    public function withAttestationNumber($attestationNumber)
    {
        $new = clone $this;
        $new->attestationNumber = $attestationNumber;

        return $new;
    }

    /**
     * @return string
     */
    public function getAddresseesCustomsReference()
    {
        return $this->addresseesCustomsReference;
    }

    /**
     * @param string $addresseesCustomsReference
     * @return ExportDocumentType
     */
    public function withAddresseesCustomsReference($addresseesCustomsReference)
    {
        $new = clone $this;
        $new->addresseesCustomsReference = $addresseesCustomsReference;

        return $new;
    }

    /**
     * @return string
     */
    public function getSendersCustomsReference()
    {
        return $this->sendersCustomsReference;
    }

    /**
     * @param string $sendersCustomsReference
     * @return ExportDocumentType
     */
    public function withSendersCustomsReference($sendersCustomsReference)
    {
        $new = clone $this;
        $new->sendersCustomsReference = $sendersCustomsReference;

        return $new;
    }

    /**
     * @return \dhl\Type\Serviceconfiguration
     */
    public function getWithElectronicExportNtfctn()
    {
        return $this->WithElectronicExportNtfctn;
    }

    /**
     * @param \dhl\Type\Serviceconfiguration $WithElectronicExportNtfctn
     * @return ExportDocumentType
     */
    public function withWithElectronicExportNtfctn($WithElectronicExportNtfctn)
    {
        $new = clone $this;
        $new->WithElectronicExportNtfctn = $WithElectronicExportNtfctn;

        return $new;
    }

    /**
     * @return \dhl\Type\ExportDocPosition
     */
    public function getExportDocPosition()
    {
        return $this->ExportDocPosition;
    }

    /**
     * @param \dhl\Type\ExportDocPosition $ExportDocPosition
     * @return ExportDocumentType
     */
    public function withExportDocPosition($ExportDocPosition)
    {
        $new = clone $this;
        $new->ExportDocPosition = $ExportDocPosition;

        return $new;
    }


}

