<?php


namespace CoverFactory\Manhole\Domain\Builders;


use CoverFactory\Manhole\Domain\Decoration;

class DecorationBuilder
{
    private int $decoration;

    public function __construct(int $decoration)
    {
        $this->decoration = $decoration;
    }

    public static function create(int $decoration): self
    {
        return new self($decoration);
    }

    public function build(): Decoration
    {
        return new Decoration($this->decoration);
    }
}
