<?php


namespace CoverFactory\Shared\Logger;


use CoverFactory\Shared\Logger\Laravel\LoggerLaravel;

class LoggerFactory
{
    public static function create(): LoggerInterface
    {
        return new LoggerLaravel();
    }
}
