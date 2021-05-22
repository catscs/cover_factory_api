<?php


namespace CoverFactory\Manhole\Application\StoreManhole;


use CoverFactory\Manhole\Domain\Builders\DecorationBuilder;
use CoverFactory\Manhole\Domain\Builders\MaterialBuilder;
use CoverFactory\Manhole\Domain\Builders\RadioBuilder;
use CoverFactory\Manhole\Domain\Builders\SizeBuilder;
use CoverFactory\Manhole\Domain\Decoration;
use CoverFactory\Manhole\Domain\Guid;
use CoverFactory\Manhole\Domain\Material;
use CoverFactory\Manhole\Domain\Radio;
use CoverFactory\Manhole\Domain\Size;

class StoreManholeCommand
{
    /**
     * @var Guid
     */
    private Guid $guid;

    /**
     * @var float
     */
    private float $radio;

    /**
     * @var string
     */
    private string $material;

    /**
     * @var bool|int
     */
    private bool $decoration;

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
        $this->guid = Guid::create();
    }

    /**
     * @return Guid
     */
    public function guid(): Guid
    {
        return $this->guid;
    }

    /**
     * @param Guid $guid
     */
    public function setGuid(Guid $guid): void
    {
        $this->guid = $guid;
    }

    public function decoration(): Decoration
    {
        return DecorationBuilder::create($this->decoration)->build();
    }

    public function material(): Material
    {
        return MaterialBuilder::create($this->material)->build();
    }

    public function radio(): Radio
    {
        return RadioBuilder::create($this->radio)->build();
    }

    public function size(): Size
    {
        return SizeBuilder::create($this->radio())->build();
    }


}
