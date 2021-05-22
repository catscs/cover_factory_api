<?php


namespace CoverFactory\Manhole\Infrastructure\Exceptions;


class QueryException extends \Exception
{
    public function __construct($message = "")
    {
        parent::__construct($message, 400);
    }
}
