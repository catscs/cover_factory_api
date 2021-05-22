<?php


namespace CoverFactory\Manhole\Domain\Builders;


use CoverFactory\Manhole\Domain\Material;

class MaterialBuilder
{
    private string $material;

    public function __construct(string $material)
    {
        $this->material = $material;
    }

    public static function create(string $material): self
    {
        return new self($material);
    }

    public function build(): Material
    {
        return new Material($this->material);
    }
}
