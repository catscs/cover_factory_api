<?php


namespace CoverFactory\Manhole\Infrastructure\Exceptions;


class QueryException extends \Exception
{
    /**
     * QueryException constructor.
     * @param $message
     * @param $code
     */
    public function __construct($message, $code)
    {
        parent::__construct(MessageException::message($code, $message), 400);
    }
}
