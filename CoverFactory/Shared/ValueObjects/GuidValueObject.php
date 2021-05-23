<?php


namespace CoverFactory\Shared\ValueObjects;


abstract class GuidValueObject implements \JsonSerializable
{
    /**
     * @var string
     */
    protected string $value;

    /**
     * GuidValueObject constructor.
     * @param string $guid
     */
    public function __construct(string $guid)
    {
        $this->value = $guid;
        $this->validateValue();
    }

    /**
     * @return mixed
     */
    abstract function validateValue();

    /**
     * @return string
     */
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
