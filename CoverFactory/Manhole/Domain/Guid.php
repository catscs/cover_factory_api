<?php


namespace CoverFactory\Manhole\Domain;


use CoverFactory\Manhole\Domain\Exceptions\InvalidParamsException;
use CoverFactory\Shared\ValueObjects\GuidValueObject;


class Guid extends GuidValueObject
{

    public static function create(): self
    {
        return new self(uniqid('', true));
    }

    function validateValue()
    {
        if (empty($this->value)) {
            throw new InvalidParamsException('Invalid Guid');
        }
    }
}
