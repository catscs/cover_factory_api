<?php


namespace CoverFactory\Shared\Logger;


class LoggerManager
{
    private LoggerInterface $logger;

    public function __construct()
    {
        $this->logger = LoggerFactory::create();
    }

    public static function create(): self
    {
        return new self;
    }

    public function logError(string $message)
    {
        $this->logger->logError($message);
    }
}
