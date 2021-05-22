<?php


namespace CoverFactory\Manhole\Domain;


use CoverFactory\Manhole\Domain\Exceptions\InvalidParamsException;
use CoverFactory\Shared\ValueObjects\StringValueObject;

class Material extends StringValueObject
{
    const IRON = 'iron';
    const STEEL = 'steel';
    const STONE = 'stone';

    const MATERIALS = [self::IRON, self::STEEL, self::STONE];

    function validateValue()
    {
        if (!in_array($this->value, self::MATERIALS, true)) {
            throw new InvalidParamsException("$this->value not valid material. The valid parameters are " . implode(', ', self::MATERIALS));
        }
    }
}
