<?php


namespace CoverFactory\Manhole\Domain;


use CoverFactory\Manhole\Domain\Exceptions\InvalidParamsException;
use CoverFactory\Shared\ValueObjects\GuidValueObject;


class Guid extends GuidValueObject
{
    /**
     * @return static
     */
    public static function create(): self
    {
        return new self(uniqid('', true));
    }

    /**
     * @return InvalidParamsException|void
     */
    function validateValue()
    {
        if (empty($this->value)) {
            throw new InvalidParamsException('Invalid Guid');
        }
    }
}
