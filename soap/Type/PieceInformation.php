<?php

namespace dhl\Type;

class PieceInformation
{

    /**
     * @var \dhl\Type\ShipmentNumberType
     */
    private $PieceNumber;

    /**
     * @return \dhl\Type\ShipmentNumberType
     */
    public function getPieceNumber()
    {
        return $this->PieceNumber;
    }

    /**
     * @param \dhl\Type\ShipmentNumberType $PieceNumber
     * @return PieceInformation
     */
    public function withPieceNumber($PieceNumber)
    {
        $new = clone $this;
        $new->PieceNumber = $PieceNumber;

        return $new;
    }


}

