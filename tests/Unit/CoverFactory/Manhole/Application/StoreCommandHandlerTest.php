<?php


namespace Tests\Unit\CoverFactory\Manhole\Application;

use CoverFactory\Manhole\Application\StoreManhole\StoreCommandHandler;
use CoverFactory\Manhole\Application\StoreManhole\StoreManholeCommand;
use CoverFactory\Manhole\Domain\Guid;
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
        $manholeResponse = StoreManholeCommandMother::create(Guid::create());
        $command = new StoreManholeCommand(
            $manhole->radio()->value(),
            $manhole->material()->value(),
            $manhole->decoration()->value(),
        );

        $repository = $this->createMock(ManholeRepository::class);
        $handler = new StoreCommandHandler($repository);

        $repository
            ->expects(self::once())
            ->method('store')
            ->with($manhole)
            ->willReturn($manholeResponse);

        $response = $handler($command);

        $this->assertEquals($manholeResponse, $response->manhole());
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
        );

        $repository = $this->createMock(ManholeRepository::class);
        $handler = new StoreCommandHandler($repository);

        $repository
            ->expects(self::once())
            ->method('store')
            ->with($manhole)
            ->willThrowException(new QueryException(new \Exception()));

        self::expectExceptionMessage('Error in DB');

        $handler($command);

    }

    /** @test
     * @throws \Exception
     */
    public function it_should_throw_exception_duplicate_guid(): void
    {
        $manhole = StoreManholeCommandMother::create();
        $command = new StoreManholeCommand(
            $manhole->radio()->value(),
            $manhole->material()->value(),
            $manhole->decoration()->value(),
        );

        $repository = $this->createMock(ManholeRepository::class);
        $handler = new StoreCommandHandler($repository);

        $repository
            ->expects(self::once())
            ->method('store')
            ->with($manhole)
            ->willThrowException(new QueryException(new \Exception('', 23000)));

        self::expectExceptionMessage('Duplicate Guid');

        $handler($command);

    }
}
