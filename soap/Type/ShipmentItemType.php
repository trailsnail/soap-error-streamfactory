<?php

namespace dhl\Type;

class ShipmentItemType
{

    /**
     * @var float
     */
    private $weightInKG;

    /**
     * @var int
     */
    private $lengthInCM;

    /**
     * @var int
     */
    private $widthInCM;

    /**
     * @var int
     */
    private $heightInCM;

    /**
     * @return float
     */
    public function getWeightInKG()
    {
        return $this->weightInKG;
    }

    /**
     * @param float $weightInKG
     * @return ShipmentItemType
     */
    public function withWeightInKG($weightInKG)
    {
        $new = clone $this;
        $new->weightInKG = $weightInKG;

        return $new;
    }

    /**
     * @return int
     */
    public function getLengthInCM()
    {
        return $this->lengthInCM;
    }

    /**
     * @param int $lengthInCM
     * @return ShipmentItemType
     */
    public function withLengthInCM($lengthInCM)
    {
        $new = clone $this;
        $new->lengthInCM = $lengthInCM;

        return $new;
    }

    /**
     * @return int
     */
    public function getWidthInCM()
    {
        return $this->widthInCM;
    }

    /**
     * @param int $widthInCM
     * @return ShipmentItemType
     */
    public function withWidthInCM($widthInCM)
    {
        $new = clone $this;
        $new->widthInCM = $widthInCM;

        return $new;
    }

    /**
     * @return int
     */
    public function getHeightInCM()
    {
        return $this->heightInCM;
    }

    /**
     * @param int $heightInCM
     * @return ShipmentItemType
     */
    public function withHeightInCM($heightInCM)
    {
        $new = clone $this;
        $new->heightInCM = $heightInCM;

        return $new;
    }


}

