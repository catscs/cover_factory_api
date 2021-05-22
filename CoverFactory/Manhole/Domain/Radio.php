<?php


namespace CoverFactory\Manhole\Domain;


use CoverFactory\Manhole\Domain\Exceptions\InvalidParamsException;
use CoverFactory\Shared\ValueObjects\FloatValueObject;

class Radio extends FloatValueObject
{
    function validateValue()
    {
        if (empty($this->value) || $this->value < 10) {
            throw new InvalidParamsException("Radio invalid $this->value");
        }
    }
}
