<?php


namespace Tests\Unit\CoverFactory\Manhole\Domain;

use CoverFactory\Manhole\Domain\Size;
use PHPUnit\Framework\TestCase;

class SizeTest extends TestCase
{
    /** @test  */
    public function it_should_error_validate_size()
    {
        try {
            new Size('p');
        } catch (\Exception $e) {
            $this->assertEquals('p not valid size. The valid parameters are S, M, L, XL', $e->getMessage());
        }

    }
}
