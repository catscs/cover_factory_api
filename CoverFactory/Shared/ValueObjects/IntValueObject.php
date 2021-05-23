<?php


namespace CoverFactory\Shared\ValueObjects;


abstract class IntValueObject implements \JsonSerializable
{
    protected int $value;

    public function __construct(int $value)
    {
        $this->value = $value;
        $this->validateValue();
    }

    abstract function validateValue();

    public function value(): int
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
