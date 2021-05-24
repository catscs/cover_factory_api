<?php


namespace CoverFactory\Manhole\Domain\Builders;


use CoverFactory\Manhole\Domain\Radio;

class RadioBuilder
{
    /**
     * @var float|int
     */
    private float $radio;

    /**
     * RadioBuilder constructor.
     * @param float $radio
     */
    public function __construct(float $radio)
    {
        $this->radio = $radio;
    }

    /**
     * @param float $radio
     * @return static
     */
    public static function create(float $radio): self
    {
        return new self($radio);
    }

    /**
     * @return Radio
     */
    public function build(): Radio
    {
        return new Radio($this->radio);
    }
}
