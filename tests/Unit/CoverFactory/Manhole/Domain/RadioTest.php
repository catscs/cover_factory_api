<?php


namespace Tests\Unit\CoverFactory\Manhole\Domain;

use CoverFactory\Manhole\Domain\Radio;
use PHPUnit\Framework\TestCase;

class RadioTest extends TestCase
{
    /** @test  */
    public function it_should_error_validate_radio()
    {
        try {
            new Radio(0);
        } catch (\Exception $e) {
            $this->assertEquals('Radio invalid 0', $e->getMessage());
        }

    }
}
