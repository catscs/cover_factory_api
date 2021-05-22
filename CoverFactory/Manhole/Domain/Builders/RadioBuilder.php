<?php


namespace CoverFactory\Manhole\Domain\Builders;


use CoverFactory\Manhole\Domain\Radio;

class RadioBuilder
{
    private int $radio;

    public function __construct(float $radio)
    {
        $this->radio = $radio;
    }

    public static function create(float $radio): self
    {
        return new self($radio);
    }

    public function build(): Radio
    {
        return new Radio($this->radio);
    }
}
