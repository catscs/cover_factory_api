<?php


namespace CoverFactory\Manhole\Domain;


use CoverFactory\Manhole\Infrastructure\Exceptions\QueryException;

interface ManholeRepository
{
    /**
     * @param Manhole $manhole
     * @return Manhole
     * @throws QueryException
     */
    public function store(Manhole $manhole): Manhole;
}
