<?php


namespace CoverFactory\Manhole\Domain;

class Manhole implements \JsonSerializable
{
    /**
     * @var Guid
     */
    private Guid $guid;

    /**
     * @var Decoration
     */
    private Decoration $decoration;
    /**
     * @var Material
     */
    private Material $material;
    /**
     * @var Radio
     */
    private Radio $radio;
    /**
     * @var Size
     */
    private Size $size;


    public function __construct(Guid $guid, Decoration $decoration, Material $material, Radio $radio, Size $size)
    {
        $this->guid = $guid;
        $this->decoration = $decoration;
        $this->material = $material;
        $this->radio = $radio;
        $this->size = $size;
    }

    public static function create(Guid $guid, Decoration $decoration, Material $material, Radio $radio, Size $size): self
    {
        return new self($guid, $decoration, $material, $radio, $size);
    }

    /**
     * @return Guid
     */
    public function guid(): Guid
    {
        return $this->guid;
    }

    /**
     * @return Decoration
     */
    public function decoration(): Decoration
    {
        return $this->decoration;
    }

    /**
     * @return Material
     */
    public function material(): Material
    {
        return $this->material;
    }

    /**
     * @return Radio
     */
    public function radio(): Radio
    {
        return $this->radio;
    }

    /**
     * @return Size
     */
    public function size(): Size
    {
        return $this->size;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return get_object_vars($this);
    }

    /**
     * @return array|mixed
     */
    public function jsonSerialize()
    {
        return $this->toArray();
    }

}
