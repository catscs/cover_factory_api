<?php


namespace CoverFactory\Shared\Logger\Laravel;


use CoverFactory\Shared\Logger\LoggerInterface;
use Illuminate\Support\Facades\Log;

class LoggerLaravel implements LoggerInterface
{

    public function logError(string $message)
    {
        Log::error($message);
    }
}
