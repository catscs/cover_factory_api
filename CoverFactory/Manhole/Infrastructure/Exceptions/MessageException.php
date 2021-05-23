<?php


namespace CoverFactory\Manhole\Infrastructure\Exceptions;


class MessageException
{
    /**
     * @param string $code
     * @param string $message
     * @return string
     */
    public static function message(string $code, string $message): string {
        switch ($code) {
            case '23000':
                return 'Duplicate Guid';
            case '42S22':
                return 'Not field in DB';
            default:
                return $message;
        }
    }
}
