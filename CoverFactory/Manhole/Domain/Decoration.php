<?php


namespace CoverFactory\Manhole\Domain;


use CoverFactory\Manhole\Domain\Exceptions\InvalidParamsException;
use CoverFactory\Shared\ValueObjects\IntValueObject;

class Decoration extends IntValueObject
{
    const NUMBER_VALID = [1, 2];

    function validateValue()
    {
        if (!in_array($this->value, self::NUMBER_VALID, true)) {
            throw new InvalidParamsException("Invalid argument in decoration $this->value");
        }
    }
}