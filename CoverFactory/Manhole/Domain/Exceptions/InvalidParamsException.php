<?php


namespace CoverFactory\Manhole\Domain\Exceptions;


class InvalidParamsException extends \DomainException
{
    /**
     * InvalidParamsException constructor.
     * @param string $value
     */
    public function __construct(string $value)
    {
        parent::__construct($value, 400);
    }
}
