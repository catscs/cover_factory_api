<?php


namespace CoverFactory\Manhole\Application\StoreManhole;


use CoverFactory\Manhole\Domain\Manhole;

class StoreCommandResponse implements \JsonSerializable
{
    /**
     * @var Manhole
     */
    private Manhole $manhole;

    /**
     * StoreCommandResponse constructor.
     * @param Manhole $manhole
     */
    public function __construct(Manhole $manhole)
    {
        $this->manhole = $manhole;
    }

    /**
     * @return Manhole
     */
    public function manhole(): Manhole
    {
        return $this->manhole;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return get_object_vars($this);
    }

    public function jsonSerialize()
    {
        return $this->toArray();
    }
}
