<?php


namespace Tests\Unit\CoverFactory\Manhole\Domain;


use CoverFactory\Manhole\Domain\Guid;
use PHPUnit\Framework\TestCase;

class GuidTest extends TestCase
{
    /** @test  */
    public function it_should_error_validate_guid()
    {
        try {
            new Guid('');
        } catch (\Exception $e) {
            $this->assertEquals('Invalid Guid', $e->getMessage());
        }
    }
}
