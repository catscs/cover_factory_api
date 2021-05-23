<?php


namespace CoverFactory\Manhole\Domain\Builders;


use CoverFactory\Manhole\Domain\Material;

class MaterialBuilder
{
    /**
     * @var string
     */
    private string $material;

    /**
     * MaterialBuilder constructor.
     * @param string $material
     */
    public function __construct(string $material)
    {
        $this->material = $material;
    }

    /**
     * @param string $material
     * @return static
     */
    public static function create(string $material): self
    {
        return new self($material);
    }

    /**
     * @return Material
     */
    public function build(): Material
    {
        return new Material($this->material);
    }
}
