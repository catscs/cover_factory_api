<?php


namespace CoverFactory\Manhole\Domain\Builders;


use CoverFactory\Manhole\Domain\Radio;
use CoverFactory\Manhole\Domain\Size;

class SizeBuilder
{
    private Radio $radio;

    public function __construct(Radio $radio)
    {
        $this->radio = $radio;
    }

    public static function create(Radio $radio): self
    {
        return new self($radio);
    }

    public function build(): Size
    {
        $radio = $this->radio->value();
        switch (true) {
            case $radio < 15:
                $letter = Size::S;
                break;
            case $radio < 20:
                $letter = Size::M;
                break;
            case $radio < 25:
                $letter = Size::L;
                break;
            default:
                $letter = Size::XL;
                break;
        }
        return new Size($letter);
    }

}
