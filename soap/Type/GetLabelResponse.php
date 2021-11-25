<?php

namespace dhl\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetLabelResponse implements ResultInterface
{

    /**
     * @var \dhl\Type\Version
     */
    private $Version;

    /**
     * @var \dhl\Type\Statusinformation
     */
    private $Status;

    /**
     * @var \dhl\Type\LabelData
     */
    private $LabelData;

    /**
     * @return \dhl\Type\Version
     */
    public function getVersion()
    {
        return $this->Version;
    }

    /**
     * @param \dhl\Type\Version $Version
     * @return GetLabelResponse
     */
    public function withVersion($Version)
    {
        $new = clone $this;
        $new->Version = $Version;

        return $new;
    }

    /**
     * @return \dhl\Type\Statusinformation
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * @param \dhl\Type\Statusinformation $Status
     * @return GetLabelResponse
     */
    public function withStatus($Status)
    {
        $new = clone $this;
        $new->Status = $Status;

        return $new;
    }

    /**
     * @return \dhl\Type\LabelData
     */
    public function getLabelData()
    {
        return $this->LabelData;
    }

    /**
     * @param \dhl\Type\LabelData $LabelData
     * @return GetLabelResponse
     */
    public function withLabelData($LabelData)
    {
        $new = clone $this;
        $new->LabelData = $LabelData;

        return $new;
    }


}

