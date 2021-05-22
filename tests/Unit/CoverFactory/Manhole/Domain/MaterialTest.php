<?php


namespace Tests\Unit\CoverFactory\Manhole\Domain;

use CoverFactory\Manhole\Domain\Material;
use PHPUnit\Framework\TestCase;

class MaterialTest extends TestCase
{
    /** @test  */
    public function it_should_error_validate_material()
    {
        try {
            new Material('');
        } catch (\Exception $e) {
            $this->assertEquals(' not valid material. The valid parameters are iron, steel, stone', $e->getMessage());
        }

    }
}
