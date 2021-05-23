<?php


namespace CoverFactory\Manhole\Application\StoreManhole;

use CoverFactory\Manhole\Domain\Manhole;
use CoverFactory\Manhole\Domain\ManholeRepository;


class StoreCommandHandler
{
    /**
     * @var ManholeRepository
     */
    private ManholeRepository $repository;

    /**
     * StoreCommandHandler constructor.
     * @param ManholeRepository $repository
     */
    public function __construct(ManholeRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param StoreManholeCommand $command
     * @return StoreCommandResponse
     * @throws \Exception
     */
    public function __invoke(StoreManholeCommand $command): StoreCommandResponse
    {
        try {
            $manhole = Manhole::create($command->decoration(), $command->material(), $command->radio(), $command->size());
            $manholeResponse = $this->repository->store($manhole);
            return new StoreCommandResponse($manholeResponse);
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage(), $e->getCode());
        }
    }
}
