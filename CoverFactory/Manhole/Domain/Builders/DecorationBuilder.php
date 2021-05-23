<?php


namespace CoverFactory\Manhole\Domain\Builders;


use CoverFactory\Manhole\Domain\Decoration;

class DecorationBuilder
{
    /**
     * @var int
     */
    private int $decoration;

    /**
     * DecorationBuilder constructor.
     * @param int $decoration
     */
    public function __construct(int $decoration)
    {
        $this->decoration = $decoration;
    }

    /**
     * @param int $decoration
     * @return static
     */
    public static function create(int $decoration): self
    {
        return new self($decoration);
    }

    /**
     * @return Decoration
     */
    public function build(): Decoration
    {
        return new Decoration($this->decoration);
    }
}
