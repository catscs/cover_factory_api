<?php


namespace CoverFactory\Manhole\Infrastructure\Exceptions;


class QueryException extends \Exception
{
    public function __construct($message, $code)
    {
        parent::__construct(MessageException::message($code, $message), 400);
    }
}
