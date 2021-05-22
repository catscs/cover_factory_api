<?php


namespace CoverFactory\Manhole\Domain\Exceptions;


class InvalidParamsException extends \DomainException
{
    public function __construct(string $value)
    {
        parent::__construct($value, 400);
    }
}
