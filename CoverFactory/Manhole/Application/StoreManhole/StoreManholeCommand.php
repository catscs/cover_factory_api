<?php


namespace CoverFactory\Manhole\Application\StoreManhole;


use CoverFactory\Manhole\Domain\Builders\DecorationBuilder;
use CoverFactory\Manhole\Domain\Builders\MaterialBuilder;
use CoverFactory\Manhole\Domain\Builders\RadioBuilder;
use CoverFactory\Manhole\Domain\Builders\SizeBuilder;
use CoverFactory\Manhole\Domain\Decoration;
use CoverFactory\Manhole\Domain\Material;
use CoverFactory\Manhole\Domain\Radio;
use CoverFactory\Manhole\Domain\Size;

class StoreManholeCommand
{
    /**
     * @var float
     */
    private float $radio;

    /**
     * @var string
     */
    private string $material;

    /**
     * @var int
     */
    private int $decoration;

    /**
     * StoreManholeCommand constructor.
     * @param float $radio
     * @param string $material
     * @param int $decoration
     */
    public function __construct(float $radio, string $material, int $decoration)
    {
        $this->radio = $radio;
        $this->material = $material;
        $this->decoration = $decoration;
    }

    /**
     * @return Decoration
     */
    public function decoration(): Decoration
    {
        return DecorationBuilder::create($this->decoration)->build();
    }

    /**
     * @return Material
     */
    public function material(): Material
    {
        return MaterialBuilder::create($this->material)->build();
    }

    /**
     * @return Radio
     */
    public function radio(): Radio
    {
        return RadioBuilder::create($this->radio)->build();
    }

    /**
     * @return Size
     */
    public function size(): Size
    {
        return SizeBuilder::create($this->radio())->build();
    }


}
