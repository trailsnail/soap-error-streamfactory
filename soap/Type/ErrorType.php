<?php

namespace dhl\Type;

class ErrorType
{

    /**
     * @var int
     */
    private $priority;

    /**
     * @var int
     */
    private $code;

    /**
     * @var \DateTimeInterface
     */
    private $dateTime;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $descriptionLong;

    /**
     * @var string
     */
    private $solution;

    /**
     * @var string
     */
    private $application;

    /**
     * @var string
     */
    private $module;

    /**
     * @return int
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * @param int $priority
     * @return ErrorType
     */
    public function withPriority($priority)
    {
        $new = clone $this;
        $new->priority = $priority;

        return $new;
    }

    /**
     * @return int
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param int $code
     * @return ErrorType
     */
    public function withCode($code)
    {
        $new = clone $this;
        $new->code = $code;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDateTime()
    {
        return $this->dateTime;
    }

    /**
     * @param \DateTimeInterface $dateTime
     * @return ErrorType
     */
    public function withDateTime($dateTime)
    {
        $new = clone $this;
        $new->dateTime = $dateTime;

        return $new;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return ErrorType
     */
    public function withDescription($description)
    {
        $new = clone $this;
        $new->description = $description;

        return $new;
    }

    /**
     * @return string
     */
    public function getDescriptionLong()
    {
        return $this->descriptionLong;
    }

    /**
     * @param string $descriptionLong
     * @return ErrorType
     */
    public function withDescriptionLong($descriptionLong)
    {
        $new = clone $this;
        $new->descriptionLong = $descriptionLong;

        return $new;
    }

    /**
     * @return string
     */
    public function getSolution()
    {
        return $this->solution;
    }

    /**
     * @param string $solution
     * @return ErrorType
     */
    public function withSolution($solution)
    {
        $new = clone $this;
        $new->solution = $solution;

        return $new;
    }

    /**
     * @return string
     */
    public function getApplication()
    {
        return $this->application;
    }

    /**
     * @param string $application
     * @return ErrorType
     */
    public function withApplication($application)
    {
        $new = clone $this;
        $new->application = $application;

        return $new;
    }

    /**
     * @return string
     */
    public function getModule()
    {
        return $this->module;
    }

    /**
     * @param string $module
     * @return ErrorType
     */
    public function withModule($module)
    {
        $new = clone $this;
        $new->module = $module;

        return $new;
    }


}

