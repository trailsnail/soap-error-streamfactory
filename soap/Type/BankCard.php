<?php

namespace dhl\Type;

class BankCard
{

    /**
     * @var string
     */
    private $CardType;

    /**
     * @var string
     */
    private $CardNumber;

    /**
     * @var string
     */
    private $BankName;

    /**
     * @var string
     */
    private $BankCode;

    /**
     * @return string
     */
    public function getCardType()
    {
        return $this->CardType;
    }

    /**
     * @param string $CardType
     * @return BankCard
     */
    public function withCardType($CardType)
    {
        $new = clone $this;
        $new->CardType = $CardType;

        return $new;
    }

    /**
     * @return string
     */
    public function getCardNumber()
    {
        return $this->CardNumber;
    }

    /**
     * @param string $CardNumber
     * @return BankCard
     */
    public function withCardNumber($CardNumber)
    {
        $new = clone $this;
        $new->CardNumber = $CardNumber;

        return $new;
    }

    /**
     * @return string
     */
    public function getBankName()
    {
        return $this->BankName;
    }

    /**
     * @param string $BankName
     * @return BankCard
     */
    public function withBankName($BankName)
    {
        $new = clone $this;
        $new->BankName = $BankName;

        return $new;
    }

    /**
     * @return string
     */
    public function getBankCode()
    {
        return $this->BankCode;
    }

    /**
     * @param string $BankCode
     * @return BankCard
     */
    public function withBankCode($BankCode)
    {
        $new = clone $this;
        $new->BankCode = $BankCode;

        return $new;
    }


}

