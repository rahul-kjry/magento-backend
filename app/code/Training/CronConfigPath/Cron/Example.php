<?php

declare(strict_types=1);

namespace Training\CronConfigPath\Cron;

use Psr\Log\LoggerInterface;

class Example
{
    protected LoggerInterface $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function execute()
    {
        $this->logger->info('Training CronConfigPath');
    }
}