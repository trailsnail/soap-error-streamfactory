<?php

namespace blz\Type;

class DetailsType
{

    /**
     * @var string
     */
    private $bezeichnung;

    /**
     * @var string
     */
    private $bic;

    /**
     * @var string
     */
    private $ort;

    /**
     * @var string
     */
    private $plz;

    /**
     * @return string
     */
    public function getBezeichnung()
    {
        return $this->bezeichnung;
    }

    /**
     * @param string $bezeichnung
     * @return DetailsType
     */
    public function withBezeichnung($bezeichnung)
    {
        $new = clone $this;
        $new->bezeichnung = $bezeichnung;

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
     * @return DetailsType
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
    public function getOrt()
    {
        return $this->ort;
    }

    /**
     * @param string $ort
     * @return DetailsType
     */
    public function withOrt($ort)
    {
        $new = clone $this;
        $new->ort = $ort;

        return $new;
    }

    /**
     * @return string
     */
    public function getPlz()
    {
        return $this->plz;
    }

    /**
     * @param string $plz
     * @return DetailsType
     */
    public function withPlz($plz)
    {
        $new = clone $this;
        $new->plz = $plz;

        return $new;
    }


}

