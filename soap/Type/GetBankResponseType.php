<?php

namespace blz\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetBankResponseType implements ResultInterface
{

    /**
     * @var \blz\Type\DetailsType
     */
    private $details;

    /**
     * @return \blz\Type\DetailsType
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * @param \blz\Type\DetailsType $details
     * @return GetBankResponseType
     */
    public function withDetails($details)
    {
        $new = clone $this;
        $new->details = $details;

        return $new;
    }


}

