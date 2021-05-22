<?php


namespace CoverFactory\Shared\ValueObjects;

abstract class StringValueObject implements \JsonSerializable
{
    protected string $value;

    public function __construct(string $value)
    {
        $this->value = $value;
        $this->validateValue();
    }

    abstract function validateValue();

    public function value(): string
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
