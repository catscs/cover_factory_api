<?php


namespace CoverFactory\Shared\ValueObjects;


abstract class FloatValueObject implements \JsonSerializable
{
    protected float $value;

    public function __construct(float $value)
    {
        $this->value = $value;
        $this->validateValue();
    }

    abstract function validateValue();

    public function value(): float
    {
        return $this->value;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return get_object_vars($this);
    }

    /**
     * @return array|mixed
     */
    public function jsonSerialize()
    {
        return $this->toArray();
    }
}
