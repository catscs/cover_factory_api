<?php


namespace CoverFactory\Manhole\Infrastructure\Exceptions;


class MessageException
{
    /**
     * @param string $code
     * @return string
     */
    public static function message(string $code): string {
        switch ($code) {
            case '23000':
                return 'Duplicate Guid';
            default:
                return 'Error in DB';
        }
    }
}
