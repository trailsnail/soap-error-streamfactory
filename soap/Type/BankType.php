<?php

namespace dhl\Type;

class BankType
{

    /**
     * @var string
     */
    private $accountOwner;

    /**
     * @var string
     */
    private $bankName;

    /**
     * @var string
     */
    private $iban;

    /**
     * @var string
     */
    private $note1;

    /**
     * @var string
     */
    private $note2;

    /**
     * @var string
     */
    private $bic;

    /**
     * @var string
     */
    private $accountreference;

    /**
     * @return string
     */
    public function getAccountOwner()
    {
        return $this->accountOwner;
    }

    /**
     * @param string $accountOwner
     * @return BankType
     */
    public function withAccountOwner($accountOwner)
    {
        $new = clone $this;
        $new->accountOwner = $accountOwner;

        return $new;
    }

    /**
     * @return string
     */
    public function getBankName()
    {
        return $this->bankName;
    }

    /**
     * @param string $bankName
     * @return BankType
     */
    public function withBankName($bankName)
    {
        $new = clone $this;
        $new->bankName = $bankName;

        return $new;
    }

    /**
     * @return string
     */
    public function getIban()
    {
        return $this->iban;
    }

    /**
     * @param string $iban
     * @return BankType
     */
    public function withIban($iban)
    {
        $new = clone $this;
        $new->iban = $iban;

        return $new;
    }

    /**
     * @return string
     */
    public function getNote1()
    {
        return $this->note1;
    }

    /**
     * @param string $note1
     * @return BankType
     */
    public function withNote1($note1)
    {
        $new = clone $this;
        $new->note1 = $note1;

        return $new;
    }

    /**
     * @return string
     */
    public function getNote2()
    {
        return $this->note2;
    }

    /**
     * @param string $note2
     * @return BankType
     */
    public function withNote2($note2)
    {
        $new = clone $this;
        $new->note2 = $note2;

        return $new;
    }

    /**
     * @return string
     */
    public function getBic()
    {
        return $this->bic;
    }

    /**
     * @param string $bic
     * @return BankType
     */
    public function withBic($bic)
    {
        $new = clone $this;
        $new->bic = $bic;

        return $new;
    }

    /**
     * @return string
     */
    public function getAccountreference()
    {
        return $this->accountreference;
    }

    /**
     * @param string $accountreference
     * @return BankType
     */
    public function withAccountreference($accountreference)
    {
        $new = clone $this;
        $new->accountreference = $accountreference;

        return $new;
    }


}

