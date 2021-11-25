<?php

namespace dhl\Type;

class AuthentificationType
{

    /**
     * @var string
     */
    private $user;

    /**
     * @var string
     */
    private $signature;

    /**
     * @return string
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param string $user
     * @return AuthentificationType
     */
    public function withUser($user)
    {
        $new = clone $this;
        $new->user = $user;

        return $new;
    }

    /**
     * @return string
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * @param string $signature
     * @return AuthentificationType
     */
    public function withSignature($signature)
    {
        $new = clone $this;
        $new->signature = $signature;

        return $new;
    }


}

