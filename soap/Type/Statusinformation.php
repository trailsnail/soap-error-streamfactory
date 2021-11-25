<?php

namespace dhl\Type;

class Statusinformation
{

    /**
     * @var int
     */
    private $statusCode;

    /**
     * @var string
     */
    private $statusText;

    /**
     * @var string
     */
    private $statusMessage;

    /**
     * @return int
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * @param int $statusCode
     * @return Statusinformation
     */
    public function withStatusCode($statusCode)
    {
        $new = clone $this;
        $new->statusCode = $statusCode;

        return $new;
    }

    /**
     * @return string
     */
    public function getStatusText()
    {
        return $this->statusText;
    }

    /**
     * @param string $statusText
     * @return Statusinformation
     */
    public function withStatusText($statusText)
    {
        $new = clone $this;
        $new->statusText = $statusText;

        return $new;
    }

    /**
     * @return string
     */
    public function getStatusMessage()
    {
        return $this->statusMessage;
    }

    /**
     * @param string $statusMessage
     * @return Statusinformation
     */
    public function withStatusMessage($statusMessage)
    {
        $new = clone $this;
        $new->statusMessage = $statusMessage;

        return $new;
    }


}

