<?php


namespace Tests\Unit\CoverFactory\Manhole\Application;


use CoverFactory\Manhole\Domain\Builders\DecorationBuilder;
use CoverFactory\Manhole\Domain\Builders\MaterialBuilder;
use CoverFactory\Manhole\Domain\Builders\RadioBuilder;
use CoverFactory\Manhole\Domain\Builders\SizeBuilder;
use CoverFactory\Manhole\Domain\Guid;
use CoverFactory\Manhole\Domain\Manhole;
use CoverFactory\Manhole\Domain\Material;

final class StoreManholeCommandMother
{
    public static function create()
    {
        $radio = RadioBuilder::create(15)->build();
        return new Manhole(
            new Guid('1111'),
           DecorationBuilder::create(1)->build(),
           MaterialBuilder::create(Material::STONE)->build(),
            $radio,
            SizeBuilder::create($radio)->build()
        );
    }
}
