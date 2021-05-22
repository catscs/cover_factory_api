<?php


namespace CoverFactory\Manhole\Infrastructure\Eloquent;


use CoverFactory\Manhole\Domain\Manhole;
use CoverFactory\Manhole\Domain\ManholeRepository;
use CoverFactory\Manhole\Infrastructure\Exceptions\QueryException;

class EloquentRepository implements ManholeRepository
{

    /**
     * @param Manhole $manhole
     * @return Manhole
     * @throws QueryException
     */
    public function store(Manhole $manhole): Manhole
    {
        $manholeEntity = new ManholeEntity();
        $manholeEntity->uuid = $manhole->guid()->value();
        $manholeEntity->radio = $manhole->radio()->value();
        $manholeEntity->material = $manhole->material()->value();
        $manholeEntity->decoration = $manhole->decoration()->value();
        $manholeEntity->size = $manhole->size()->value();
        $success = $manholeEntity->save();
        if ($success) return $manhole;

        throw new QueryException('Error save Manhole');
    }
}
