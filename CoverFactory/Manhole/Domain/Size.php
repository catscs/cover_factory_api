<?php


namespace CoverFactory\Manhole\Domain;


use CoverFactory\Manhole\Domain\Exceptions\InvalidParamsException;
use CoverFactory\Shared\ValueObjects\StringValueObject;

class Size extends StringValueObject
{
    const S = 'S';
    const M = 'M';
    const L = 'L';
    const XL = 'XL';

    const SIZES = [self::S, self::M, self::L, self::XL];

    /**
     * @return InvalidParamsException|void
     */
    function validateValue()
    {
        if (!in_array($this->value, self::SIZES, true)) {
            throw new InvalidParamsException("$this->value not valid size. The valid parameters are " . implode(', ', self::SIZES));
        }
    }
}
