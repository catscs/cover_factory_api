<?php


namespace CoverFactory\Manhole\Domain;

class Manhole implements \JsonSerializable
{
    /**
     * @var Guid|null
     */
    private ?Guid $guid;

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

    /**
     * Manhole constructor.
     * @param Guid|null $guid
     * @param Decoration $decoration
     * @param Material $material
     * @param Radio $radio
     * @param Size $size
     */
    public function __construct(?Guid $guid, Decoration $decoration, Material $material, Radio $radio, Size $size)
    {
        $this->guid = $guid;
        $this->decoration = $decoration;
        $this->material = $material;
        $this->radio = $radio;
        $this->size = $size;
    }

    /**
     * @param Decoration $decoration
     * @param Material $material
     * @param Radio $radio
     * @param Size $size
     * @param Guid|null $guid
     * @return static
     */
    public static function create(Decoration $decoration, Material $material, Radio $radio, Size $size, ?Guid $guid = null): self
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
     * @param Guid $guid
     */
    public function setGuid(Guid $guid)
    {
        $this->guid  = $guid;
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
