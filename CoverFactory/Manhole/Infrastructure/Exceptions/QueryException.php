<?php


namespace CoverFactory\Manhole\Infrastructure\Exceptions;


class QueryException extends \Exception
{
    /**
     * QueryException constructor.
     * @param \Exception $e
     */
    public function __construct(\Exception $e)
    {
        parent::__construct(MessageException::message($e->getCode()), 500);
    }
}
