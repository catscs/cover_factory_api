<?php


namespace Tests\Unit\CoverFactory\Manhole\Domain;


use CoverFactory\Manhole\Domain\Builders\SizeBuilder;
use CoverFactory\Manhole\Domain\Radio;
use CoverFactory\Manhole\Domain\Size;
use PHPUnit\Framework\TestCase;

class SizeBuilderTest extends TestCase
{
    /** @test  */
    public function it_should_return_s()
    {
        $max = SizeBuilder::create(new Radio(14))->build();
        $min = SizeBuilder::create(new Radio(10))->build();
        $this->assertEquals(Size::S, $max->value());
        $this->assertEquals(Size::S, $min->value());
    }

    /** @test  */
    public function it_should_return_m()
    {
        $max = SizeBuilder::create(new Radio(19))->build();
        $min = SizeBuilder::create(new Radio(15))->build();
        $this->assertEquals(Size::M, $max->value());
        $this->assertEquals(Size::M, $min->value());
    }

    /** @test  */
    public function it_should_return_l()
    {
        $max = SizeBuilder::create(new Radio(24))->build();
        $min = SizeBuilder::create(new Radio(20))->build();
        $this->assertEquals(Size::L, $max->value());
        $this->assertEquals(Size::L, $min->value());
    }

    /** @test  */
    public function it_should_return_xl()
    {
        $min = SizeBuilder::create(new Radio(25))->build();
        $this->assertEquals(Size::XL, $min->value());
    }
}
