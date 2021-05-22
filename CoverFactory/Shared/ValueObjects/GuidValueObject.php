<?php


namespace CoverFactory\Shared\ValueObjects;


abstract class GuidValueObject implements \JsonSerializable
{
    protected string $value;

    public function __construct(string $guid)
    {
        $this->value = $guid;
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
