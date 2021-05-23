<?php


namespace Tests\Unit\CoverFactory\Manhole\Domain;


use CoverFactory\Manhole\Domain\Decoration;
use PHPUnit\Framework\TestCase;

class DecorationTest extends TestCase
{
    /** @test  */
    public function it_should_error_validate_decoration()
    {
        try {
            new Decoration('9');
        } catch (\Exception $e) {
            $this->assertEquals('Invalid argument 9 in decoration', $e->getMessage());
        }

    }

}
