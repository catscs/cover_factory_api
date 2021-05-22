<?php


namespace Tests\Unit\CoverFactory\Manhole\Application;

use CoverFactory\Manhole\Application\StoreManhole\StoreCommandHandler;
use CoverFactory\Manhole\Application\StoreManhole\StoreManholeCommand;
use CoverFactory\Manhole\Domain\ManholeRepository;
use CoverFactory\Manhole\Infrastructure\Exceptions\QueryException;
use PHPUnit\Framework\TestCase;

class StoreCommandHandlerTest extends TestCase
{

    /** @test
     * @throws \Exception
     */
    public function it_should_create_a_manhole(): void
    {
        $manhole = StoreManholeCommandMother::create();
        $command = new StoreManholeCommand(
            $manhole->radio()->value(),
            $manhole->material()->value(),
            $manhole->decoration()->value(),
            $manhole->guid()->value()
        );

        $repository = $this->createMock(ManholeRepository::class);
        $handler = new StoreCommandHandler($repository);

        $repository
            ->expects(self::once())
            ->method('store')
            ->with($manhole)
            ->willReturn($manhole);

        $response = $handler->__invoke($command);

        $this->assertEquals($manhole, $response->manhole());
    }

    /** @test
     * @throws \Exception
     */
    public function it_should_throw_exception_create_a_manhole(): void
    {
        $manhole = StoreManholeCommandMother::create();
        $command = new StoreManholeCommand(
            $manhole->radio()->value(),
            $manhole->material()->value(),
            $manhole->decoration()->value(),
            $manhole->guid()->value()
        );


        $repository = $this->createMock(ManholeRepository::class);
        $handler = new StoreCommandHandler($repository);

        $repository
            ->expects(self::once())
            ->method('store')
            ->with($manhole)
            ->willThrowException(new QueryException('Error save manhole', 400));

        self::expectExceptionMessage('Error save manhole');

        $handler->__invoke($command);

    }
}
